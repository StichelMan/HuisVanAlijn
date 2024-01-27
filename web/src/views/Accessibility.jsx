import React from 'react'
import '../styles/app.css'
import PropTypes from 'prop-types'
import aIcon from '../assets/a.svg'
import contrastIcon from '../assets/contrast.svg'
import {useLanguage} from "../components/common/LanguageProvider";
import {translateAccessibilityView} from "../stores/translationService";
import Button from '../components/common/Button'

function Accessibility({ accessibilitySettings, setAccessibilitySettings }) {
  const { isHighContrast, isBiggerFontSize } = accessibilitySettings
  const { language, setLanguage } = useLanguage() // Using the useLanguage hook

  const handleHighContrastChange = () => {
    setAccessibilitySettings({ ...accessibilitySettings, isHighContrast: !isHighContrast })
  }

  const handleBiggerFontSizeChange = () => {
    setAccessibilitySettings({ ...accessibilitySettings, isBiggerFontSize: !isBiggerFontSize })
  }

  const handleLanguageSelect = (newLanguage) => {
    setLanguage(newLanguage);
  };

  const isLanguageActive = (lang) => language === lang ? 'active' : '';


  return (
    <>
      <div className='container'>
        <div className='info-wrapper'>
          <h1 className='main-title'>
            {translateAccessibilityView('title', language)}
          </h1>
        </div>
        <section className='accessibility-settings'>
          <h2>{translateAccessibilityView('subTitle', language)}</h2>
          <div className='accessibility-fields'>
            <section className='accessibility-setting'>
              <div>
                <h2>
                  {translateAccessibilityView('contrastSetting0', language)} <span
                  className='bold'>{translateAccessibilityView('contrastSetting1', language)}</span>
                </h2>
              </div>
              <label>
                <div className='switch'>
                  <input
                    type='checkbox'
                    checked={isHighContrast}
                    onChange={handleHighContrastChange}
                    id='switchHighContrast'
                  />
                  <span className='slider round'></span>
                </div>
                <img
                  className='big-contrast-icon'
                  src={contrastIcon}
                  alt='Contrast icon'
                />
              </label>
            </section>
            <section className='accessibility-setting'>
              <div>
                <h2>
                  {translateAccessibilityView('fontSizeSetting0', language)} <span
                  className='bold'>{translateAccessibilityView('fontSizeSetting1', language)}</span>
                </h2>
              </div>
              <label>
                <img className='small-A' src={aIcon} alt='A icon' />
                <div className='switch'>
                  <input
                    type='checkbox'
                    checked={isBiggerFontSize}
                    onChange={handleBiggerFontSizeChange}
                    id='switchFontSize'
                  />
                  <span className='slider round'></span>
                </div>
                <img className='big-A' src={aIcon} alt='A icon' />
              </label>
            </section>
            <div className='accessibility-setting-col'>
              <h2>{translateAccessibilityView('languageSetting', language)}</h2>
              <div className='language-buttons-setting'>
                <Button className={isLanguageActive('nl')}
                        onClick={() => handleLanguageSelect('nl')} variant={'default'}>Nederlands</Button>
                <Button className={isLanguageActive('en')} onClick={() => handleLanguageSelect('en')} variant={'default'}>English</Button>
                <Button className={isLanguageActive('fr')} onClick={() => handleLanguageSelect('fr')} variant={'default'}>Français</Button>
              </div>
            </div>
          </div>
        </section>
      </div>
    </>
  )
}

Accessibility.propTypes = {
  accessibilitySettings: PropTypes.shape({
    isHighContrast: PropTypes.bool,
    isBiggerFontSize: PropTypes.bool,
  }).isRequired,
  setAccessibilitySettings: PropTypes.func.isRequired,
}
export default Accessibility
