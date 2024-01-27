import React, { useEffect } from 'react'
import { useLanguage } from '../components/common/LanguageProvider'
import '../styles/app.css'
import logo from '../assets/logo.svg'
import { useNavigate } from 'react-router-dom'
import Button from '../components/common/Button'
import backgroundImageDefault from '../assets/background-bokeh-darker.png'

function Screensaver() {
  const navigate = useNavigate()
  const { setLanguage } = useLanguage()

  const handleLanguageSelect = (language) => {
    setLanguage(language)
    navigate('/', { replace: true })
  }

  useEffect(() => {
    // Generate a random number between 400 and 813
    const randomNumber = Math.floor(Math.random() * (814 - 400)) + 400;

    // Change the main background image when the screensaver mounts
    const mainElement = document.querySelector('.background-image')
    if (mainElement) {
      mainElement.style.backgroundImage = `url(${import.meta.env.VITE_BACKEND_BASE_URL}/api/image/random/${randomNumber})`

      // Reset background when the component unmounts
      return () => {
        mainElement.style.backgroundImage = `url(${backgroundImageDefault})`; // Replace 'none' with the default
      }
    }
  }, []);


  return (
    <>
      <div className='container '>

        <div className='content'> {/* Content Container */}

          <div className='app screensaver'>

            <div className='flex-col'>
              <div className='info-wrapper invisible'>
                <img className='logo-image' src={logo} alt='Huis Van Alijn LOGO' />
              </div>
              {/*<img className='invisible' src={ClickIcon} alt='My SVG Icon' />*/}
              <div className='language-buttons'>
                <Button onClick={() => handleLanguageSelect('nl')} variant={'default'}>Nederlands</Button>
                <Button onClick={() => handleLanguageSelect('en')} variant={'default'}>English</Button>
                <Button onClick={() => handleLanguageSelect('fr')} variant={'default'}>Français</Button>
              </div>
              {/*<img src={ClickIcon} alt='My SVG Icon' />*/}
              <div className='info-wrapper'>
                <img className='logo-image' src={logo} alt='Huis Van Alijn LOGO' />
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  )
}

export default Screensaver
