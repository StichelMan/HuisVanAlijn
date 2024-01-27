import React from 'react'
import '../styles/app.css'
import Button from '../components/common/Button'
import { useNavigate } from 'react-router-dom'
import logo from '../assets/logo.svg'
import {useLanguage} from "../components/common/LanguageProvider";
import { translateWelcomeView } from '../stores/translationService';



function Welcome() {
  const navigate = useNavigate()
  const languageSettings = useLanguage()
  const language = languageSettings.language

  return (
    <>
      <div className='container'>
        <div className='info-wrapper'>
          <img className='logo-image' src={logo} alt='Huis Van Alijn LOGO' />
          <h1 className='main-title'>{translateWelcomeView('welcomeTitle', language)}</h1>
        </div>
        <div className='app'>
          <div className='button-row'>
            <Button variant='default' onClick={() => navigate('/game')}>
              {translateWelcomeView('testKnowledge', language)}
            </Button>
            <Button variant='default' onClick={() => navigate('/rooms')}>
              {translateWelcomeView('discoverDolls', language)}
            </Button>
            <Button variant='default' onClick={() => navigate('/interactive-scene')}>
              {translateWelcomeView('designScene', language)}
            </Button>
          </div>
        </div>
      </div>
    </>
  )
}

/*
Welcome.propTypes = {
  changeView: PropTypes.func.isRequired,
};*/

export default Welcome
