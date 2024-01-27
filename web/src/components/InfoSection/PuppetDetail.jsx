import React, { useEffect, useState } from 'react'
import { createMyAxiosInstance } from '../../instances/myAxios'
import Slider from 'react-slick'
import ContentOverlay from '../contentOverlay'
import videoIcon from '../../assets/video.png'
import { translatePuppetDetailComponent } from '../../stores/translationService'
import { setupEventListeners, removeEventListeners } from '../../utils/viewUtils'

const PuppetDetail = ({ puppetObjectNumber, language }) => {
  const [puppet, setPuppet] = useState(null)
  const [loading, setLoading] = useState(true)
  const [error, setError] = useState(null)
  const [contentOverlayVisible, setContentOverlayVisible] = useState(false)
  const [contentUrl, setContentUrl] = useState('')
  const [contentIsImage, setContentIsImage] = useState(false)
  const [contentTitle, setContentTitle] = useState('')
  const myAxios = createMyAxiosInstance(language)
  useEffect(() => {
    if (!puppetObjectNumber) {
      setLoading(false)
      return
    }
    setLoading(true)
    fetchPuppet()
  }, [puppetObjectNumber])


  const openContent = async (url, image, title) => {
    setContentOverlayVisible(true)
    setContentIsImage(image)
    setContentUrl(url)
    setContentTitle(title)
  }
  const fetchPuppet = async () => {
    try {
      const response = await myAxios.get(`/puppet/${puppetObjectNumber}`)
      setPuppet(response.data?.puppet)
      console.log(response.data?.puppet)


    } catch (error) {
      setError(error)
    } finally {
      setLoading(false)
    }
  }

  if (!puppetObjectNumber) {
    return <p>{translatePuppetDetailComponent('selectReminder', language)}</p>
  }

  if (loading) {
    return <p>{translatePuppetDetailComponent('loadingReminder', language)}</p>
  }

  if (error) {
    return <p>{translatePuppetDetailComponent('errorReminder', language)} {error.message}</p>
  }

  function isVideo(filename) {
    const videoExtensions = ['mp4', 'mov', 'avi', 'mkv'] // Add more video extensions if needed
    const extension = filename.split('.').pop().toLowerCase()
    return videoExtensions.includes(extension)
  }

  const handleSilderClose = () => {
    setContentOverlayVisible(false) // Hide the video when the user closes it
  }

  const joinPropertyValues = (property) => {
    // If it's an array, join the names; if it's a single object, return the name
    if (Array.isArray(property)) {
      return property.map(item => item.name).join(', ')
    } else {
      return property.name
    }
  }

  const settings = {
    className: 'variable-width',
    infinite: true,
    speed: 500,
    dots: true,
    variableWidth: true,
    swipeToSlide: true,
  }
  return (
    <>
      <div className='puppet-detail-container'>


        {/* Display main puppet image */}
        <img
          src={`${import.meta.env.VITE_BACKEND_BASE_URL}/api/image/${puppetObjectNumber}/600`}
          alt={puppet?.name}
          className='PuppetDetailImage'
        />


        <h3 className='puppet-detail-info-title'>{puppet?.name}</h3>
        <div className='puppet-info-section'>
          <p className='puppetdetail-info'>
            <span
              className='bold puppetdetail-info'>{translatePuppetDetailComponent('date', language)}</span> {puppet?.date}
          </p>
          <p className='puppetdetail-info'>
            <span
              className='bold puppetdetail-info'>{translatePuppetDetailComponent('company', language)}</span> {joinPropertyValues(puppet?.company)}
          </p>
          <p className='puppetdetail-info'>
            <span
              className='bold puppetdetail-info'>{translatePuppetDetailComponent('makers', language)}</span> {joinPropertyValues(puppet?.makers)}
          </p>
          <p className='puppetdetail-info'>
            <span
              className='bold puppetdetail-info'>{translatePuppetDetailComponent('production', language)}</span> {joinPropertyValues(puppet?.productions)}
          </p>
        </div>
        <p className='puppetdetail-description'>{puppet?.info}</p>

        <div className={'related-images-list'}>
          {puppet?.related_images?.length > 0 && (
            <p className='puppet-detail-info-subtitle'>{translatePuppetDetailComponent('related', language)}</p>
          )}
          <Slider {...settings}>
            {puppet?.related_images?.map((relatedImage, index) => (
              <div key={index} className={'sliderImage'}>
                {isVideo(relatedImage) ? (
                  <img
                    src={videoIcon}
                    alt={puppet?.name}
                    className='video-thumbnail'
                    onClick={() => openContent(`${import.meta.env.VITE_BACKEND_BASE_URL}/api/nestedVideo/${puppet.object_number}/${relatedImage}`, false, puppet.name)}
                  />
                ) : (
                  <img
                    src={`${import.meta.env.VITE_BACKEND_BASE_URL}/api/relatedContent/${puppet.object_number}/${relatedImage}/100`}
                    alt={puppet?.name}
                    onClick={() => openContent(`${import.meta.env.VITE_BACKEND_BASE_URL}/api/relatedContent/${puppet.object_number}/${relatedImage}/600`, true, puppet.name)}
                  />
                )}
              </div>
            ))}

          </Slider>
        </div>


      </div>
      {contentOverlayVisible &&
        <ContentOverlay contentUrl={contentUrl} isImage={contentIsImage} onPress={handleSilderClose}
                        title={contentTitle}
                        disableActivity={() => removeEventListeners(this)}
                        enableActivity={() => setupEventListeners(this)}></ContentOverlay>
      }
    </>

  )
}

export default PuppetDetail
