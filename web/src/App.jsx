import { Component } from 'react'
import React from 'react'
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom'
import Accessibility from './views/Accessibility'
import Welcome from './views/Welcome'
import Game from './views/Game'
import Rooms from './views/Rooms'
//import InteractiveScene from './views/InteractiveScene'
import Screensaver from './views/Screensaver'
import RoomDetail from './views/RoomDetail'
import Header from './components/common/Header'
import { LanguageProvider } from './components/common/LanguageProvider'
import {
  setAccessibilitySettings,
  clearScreensaverTimeout,
  handleActivity,
  setupEventListeners,
  removeEventListeners,
} from './utils/viewUtils'
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import CreateScene from "./views/CreateScene";
class App extends Component {
  state = {
    currentView: null,
    viewHistory: [],
    screensaverTimeout: null,
    accessibilitySettings: {
      isHighContrast: false,
      isBiggerFontSize: false,
    },
  }

  componentDidMount() {
    clearScreensaverTimeout(this)
    setupEventListeners(this)
  }

  componentWillUnmount() {
    clearScreensaverTimeout(this)
    removeEventListeners(this)
  }

  setAccessibilitySettings = settings =>
    setAccessibilitySettings(this, settings)
  handleActivity = () => handleActivity(this)



  render() {
    const { accessibilitySettings, currentView } = this.state;
    return (
      <Router basename={import.meta.env.VITE_BASE_URL || '/'}>
        <LanguageProvider>

        <div className='full-screen-wrapper'>
          <Header currentView={currentView} changeView={this.changeView} />
          <Routes>
            <Route path='/' element={<Welcome />} />
            <Route
              path='/game'
              element={<Game />}
            />
            <Route
              path='/rooms'
              element={<Rooms accessibilitySettings={accessibilitySettings} />}
            />
            {/*<Route path='/interactive-scene' element={<InteractiveScene />} />*/}
            <Route path='/interactive-scene' element={<CreateScene />} />
            <Route
              path='/accessibility'
              element={
                <Accessibility
                  accessibilitySettings={accessibilitySettings}
                  setAccessibilitySettings={this.setAccessibilitySettings}
                />
              }
            />
            <Route path='/rooms/:roomNumber' element={<RoomDetail />} />
            <Route path='/screensaver' element={<Screensaver />} />
          </Routes>
        </div>
        </LanguageProvider>
      </Router>
    )
  }
  changeView = (newView) => {
    // Update the currentView in the state
    this.setState({ currentView: newView });
    // Additional logic for changing the view
  }
}

export default App
