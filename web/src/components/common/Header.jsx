import React from 'react'
import homeIcon from '../../assets/home.svg'
import accessibilityIcon from '../../assets/accessibility.svg'
import backIcon from '../../assets/back.svg'
import { useLocation } from 'react-router-dom'
import IconButton from './IconButton'

const Header = () => {
  const location = useLocation()
  return (
    <header>
      {location.pathname !== '/screensaver.css' && (
        <>
          <div className='navbar'>
            {location.pathname !== '/' && (
              <div className='back-wrapper'>
                <IconButton
                  name='back'
                  route={-1}
                  iconSrc={backIcon}
                  altText='Back Icon'
                />
              </div>
            )}
            <div className='nav-buttons-top-right'>
              {location.pathname !== '/accessibility' && (
                <IconButton
                  name='accessibility'
                  route={'/accessibility'}
                  iconSrc={accessibilityIcon}
                  altText='Accessibility settings icon'
                />
              )}
              {location.pathname !== '/' && (
                <IconButton
                  name='home'
                  route={'/'}
                  iconSrc={homeIcon}
                  altText='Home icon'
                />
              )}
            </div>
          </div>
        </>
      )}
    </header>
  )
}

export default Header
