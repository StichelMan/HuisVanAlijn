import React, { useEffect, useRef } from 'react'
import PropTypes from 'prop-types'
//import '../../styles/app.css'
import closeIcon from '../assets/close.svg'
import { pauseScreensaverTimeout, resumeScreensaverTimeout } from '../utils/viewUtils'


const ContentOverlay = ({ contentUrl, isImage, onPress, title }) => {
  const overlayRef = useRef();
  const contentRef = useRef();
  const handleRateChange = (e) => {
    if (e.target.playbackRate !== 1) {
      e.target.playbackRate = 1;
    }
  };

  const handleOverlayClick = () => {
    // If the click is on the overlay (background) but not on the content, close the overlay
    if (overlayRef.current && contentRef.current) {
      onPress();
    }
  };

  const handleVideoPlay = () => {
    pauseScreensaverTimeout();
  };

  const handleVideoPause = () => {
    resumeScreensaverTimeout();
  };

  useEffect(() => {
    // Add click event listener when the component mounts
    document.addEventListener('mousedown', handleOverlayClick);

    // Remove event listener on cleanup
    return () => {
      document.removeEventListener('mousedown', handleOverlayClick);
    };
  }, []);

  return (
    <div className='content-overlay' ref={overlayRef}>
      <div className='content-container' ref={contentRef}>
        {/* Move the close button inside content-container */}


        <p className='video-title'>{title}</p>
        <div className='content-wrapper'>
            <button  style={isImage ? {} : { right: '20%' }}  onClick={onPress} className='nav-button close-button'>
              <img src={closeIcon}  alt='Close' title='Close' />
            </button>
          {isImage ? (
            <img src={contentUrl} alt='Related puppet image' />
          ) : (
            <video
              autoPlay
              controls
              playsInline
              disablePictureInPicture
              controlsList='nodownload nofullscreen noremoteplayback'
              onRateChange={handleRateChange}
              onPlay={handleVideoPlay}
              onPause={handleVideoPause}
            >
              <source src={contentUrl} type='video/mp4' />
              Your browser does not support the video tag.
            </video>
          )}
        </div>
      </div>
    </div>
  );
};

ContentOverlay.propTypes = {
  contentUrl: PropTypes.string.isRequired,
  isImage: PropTypes.bool.isRequired,
  onPress: PropTypes.func.isRequired,
  title: PropTypes.string,
};

export default ContentOverlay;