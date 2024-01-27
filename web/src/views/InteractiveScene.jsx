import React, { useRef, useEffect, useState } from 'react'
import { Stage, Layer, Rect, Transformer } from 'react-konva'
import dummyPop from '../assets/dummyPop.png'
import dummyPop2 from '../assets/dummyPop2PresetSize.png'

const InteractiveScene = () => {
  const stageRef = useRef(null)
  const trRef = useRef(null)
  const imageRef = useRef(null)
  const trRef2 = useRef(null)
  const imageRef2 = useRef(null)

  const [stageDimensions, setStageDimensions] = useState({
    width: window.innerWidth * 0.8,
    height: window.innerHeight * 0.8,
  })

  const getTotalBox = boxes => {
    let minX = Infinity
    let minY = Infinity
    let maxX = -Infinity
    let maxY = -Infinity

    boxes.forEach(box => {
      minX = Math.min(minX, box.x)
      minY = Math.min(minY, box.y)
      maxX = Math.max(maxX, box.x + box.width)
      maxY = Math.max(maxY, box.y + box.height)
    })

    return {
      x: minX,
      y: minY,
      width: maxX - minX,
      height: maxY - minY,
    }
  }

  useEffect(() => {
    if (trRef.current) {
      const tr = trRef.current
      tr.nodes([imageRef.current])
      tr.getLayer().batchDraw()
    }
    if (trRef2.current) {
      const tr = trRef2.current
      tr.nodes([imageRef2.current])
      tr.getLayer().batchDraw()
    }
  }, [])

  const handleDragMove = trRef => () => {
    if (trRef.current) {
      const tr = trRef.current
      const boxes = tr.nodes().map(node => node.getClientRect())
      const box = getTotalBox(boxes)
      tr.nodes().forEach(shape => {
        const absPos = shape.getAbsolutePosition()
        const offsetX = box.x - absPos.x
        const offsetY = box.y - absPos.y

        const newAbsPos = { ...absPos }
        if (box.x < 0) {
          newAbsPos.x = -offsetX
        }
        if (box.y < 0) {
          newAbsPos.y = -offsetY
        }
        if (box.x + box.width > stageRef.current.width()) {
          newAbsPos.x = stageRef.current.width() - box.width - offsetX
        }
        if (box.y + box.height > stageRef.current.height()) {
          newAbsPos.y = stageRef.current.height() - box.height - offsetY
        }
        shape.setAbsolutePosition(newAbsPos)
      })
    }
  }

  const updateStageDimensions = () => {
    setStageDimensions({
      width: window.innerWidth * 0.8,
      height: window.innerHeight * 0.8,
    })
  }

  useEffect(() => {
    const debouncedResize = debounce(updateStageDimensions, 200)
    window.addEventListener('resize', debouncedResize)
    return () => {
      window.removeEventListener('resize', debouncedResize)
    }
  }, [])

  return (
    <>
      <div className='container '>
        <h1 className='hidden'>Scene maker</h1>
        <div className='app'>
          <div id='stage-parent' className='bg-scene'>
            <Stage
              width={stageDimensions.width}
              height={stageDimensions.height}
              ref={stageRef}
              id='konva-stage'
            >
              <Layer>
                {/* First MyRect component */}
                <MyRect
                  ref={imageRef}
                  onDragMove={handleDragMove(trRef)}
                  trRef={trRef}
                  imagePath={dummyPop}
                />
                <Transformer ref={trRef} />
              </Layer>

              <Layer>
                {/* Second MyRect component */}
                <MyRect
                  ref={imageRef2}
                  onDragMove={handleDragMove(trRef2)}
                  trRef={trRef2}
                  imagePath={dummyPop2}
                />
                <Transformer ref={trRef2} />
              </Layer>
            </Stage>
            <div className='saveSceneButton'>
              <button id='save'>Scène exporteren</button>
            </div>
          </div>
        </div>
      </div>
    </>
  )
}

// MyRect component for the draggable and resizable image layer
const MyRect = React.forwardRef(({ onDragMove, imagePath, ...props }, ref) => {
  const [fillPatternImage, setFillPatternImage] = useState(null)
  const patternImageHeight = 300 // Set the original height of your pattern image

  const setupImage = imagePath => {
    const image = new window.Image()
    image.onload = () => {
      // Resize the image if its dimensions exceed the maximum
      const width = image.width > 208 ? 208 : image.width
      const height = image.height > 390 ? 390 : image.height

      setFillPatternImage({
        image,
        width,
        height,
      })
    }
    image.src = imagePath
  }

  useEffect(() => {
    setupImage(imagePath)
  }, [ref])

  return (
    <Rect
      x={10}
      y={10}
      width={fillPatternImage ? fillPatternImage.width : 0}
      height={fillPatternImage ? fillPatternImage.height : 0}
      shadowBlur={10}
      fillPatternImage={fillPatternImage ? fillPatternImage.image : null}
      fillPatternScaleY={
        fillPatternImage ? fillPatternImage.height / patternImageHeight : 1
      }
      draggable
      onDragMove={onDragMove}
      ref={ref}
      {...props}
    />
  )
})

export default InteractiveScene

// Debounce function to limit the rate at which a function can fire
function debounce(func, delay) {
  let timeout
  return function(...args) {
    clearTimeout(timeout)
    timeout = setTimeout(() => func.apply(this, args), delay)
  }
}
