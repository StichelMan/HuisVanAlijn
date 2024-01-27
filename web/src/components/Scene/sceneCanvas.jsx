import React, { useEffect, useState } from 'react'
import { Stage, Layer, Image } from 'react-konva'
import axios from 'axios'
import {useLanguage} from "../common/LanguageProvider";
import { translateCreateSceneView } from '../../stores/translationService'
import Button from '../common/Button'
import { useNavigate } from 'react-router-dom' // Create a KonvaStage component


const URLImage = ({ image, onDragMove, onDragEnd }) => {
  const [img, setImg] = useState(null)

  useEffect(() => {
    const loadImage = new window.Image()
    loadImage.crossOrigin = 'Anonymous' // Set crossOrigin attribute
    loadImage.src = image.src

    loadImage.onload = () => setImg(loadImage)
  }, [image.src])

  const handleDragMove = (e) => {
    onDragMove && onDragMove(image, e)
  }

  const handleDragEnd = (e) => {
    onDragEnd && onDragEnd(image, e)
  }

  return img ? (

    <Image
      image={img}
      x={image.x}
      y={image.y}
      offsetX={img.width / 2}
      offsetY={img.height / 2}
      draggable
      onDragMove={handleDragMove}
      onDragEnd={handleDragEnd}
    />
  ) : null
}


const sceneCanvas = ({ images, background, onDragMove, onDragEnd }) => {
  const languageSettings = useLanguage()
  const language = languageSettings.language
  const stageRef = React.useRef(null)

  const handleExportImage = async () => {
    const stage = stageRef.current
    const exportCanvas = stage.toCanvas()
    const exportContext = exportCanvas.getContext('2d')

    // Load the background image
    console.log(background)
    const backgroundImage = new window.Image()
    backgroundImage.crossOrigin = 'Anonymous'
    backgroundImage.src = `${background}`

    // Wait for the background image to load
    await new Promise((resolve, reject) => {
      backgroundImage.onload = resolve
      backgroundImage.onerror = reject
    })

    // Draw the background image on the canvas
    exportContext.drawImage(backgroundImage, 0, 0, exportCanvas.width, exportCanvas.height)

    // Draw each image from the stage onto the export canvas
    const stageImages = stage.find('Image')
    stageImages.forEach((image) => {
      const imageElement = image.image()
      exportContext.drawImage(
        imageElement,
        image.x() - image.offsetX(),
        image.y() - image.offsetY(),
        imageElement.width,
        imageElement.height,
      )
    })

    // Send the image data to the backend using Axios
    axios
      .post(`${process.env.VITE_BACKEND_BASE_URL}/api/image/scene`, {
        imageData: exportCanvas.toDataURL(),
      })
      .then((response) => {
        console.log(response.data)
      })
      .catch((error) => {
        console.error('Error sending image data to the backend:', error)
      })
  }
  const navigate = useNavigate()
  return (
    <div className='stage-wrapper'>
      <div className='stage-stylingwrapper'>
        <Stage
          ref={stageRef}
          //4:3
          width={800}
          height={600}
          style={{
            border: '1px solid grey',
            backgroundImage: `url(${background})`,
            backgroundSize: 'cover',
            backgroundColor: 'white',
          }}
        >
          {images.map((image, index) => (
            <Layer key={index}>
              <URLImage
                key={index}
                image={image}
                onDragMove={onDragMove}
                onDragEnd={onDragEnd}
              />
            </Layer>
          ))}
        </Stage>
      </div>
      <Button variant={'special'} onClick={() => {
        handleExportImage().then(() => {
          navigate('/screensaver', { replace: true })
        })

      }}>{translateCreateSceneView('exportScene', language)}</Button>

    </div>
  )
}

export default sceneCanvas
