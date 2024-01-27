import { SCREENSAVER_DELAY_DURATION } from './constants.jsx'

// DOM elements
const root = document.documentElement
const body = document.body
const main = document.querySelector('main')
const backgroundImage = document.querySelector('.background-image')

// Global styles functions
export function setGlobalFontSize(scope) {
  const { isBiggerFontSize } = scope.state.accessibilitySettings
  root.style.fontSize = isBiggerFontSize ? '1.6rem' : ''
}

export function setGlobalHighContrast(scope) {
  const { isHighContrast } = scope.state.accessibilitySettings
  body.style.color = isHighContrast ? '#fff' : ''
  main.style.backgroundColor = isHighContrast ? '#000' : ''
  backgroundImage.style.backgroundImage = isHighContrast ? 'none' : ''
}

// Accessibility settings functions
export function setAccessibilitySettings(scope, settings) {
  scope.setState(
    {
      accessibilitySettings: {
        ...scope.state.accessibilitySettings,
        ...settings,
      },
    },
    () => {
      setGlobalFontSize(scope)
      setGlobalHighContrast(scope)
    },
  )
}

export function resetAccessibilitySettings(scope) {
  setAccessibilitySettings(scope, {
    isHighContrast: false,
    isBiggerFontSize: false,
    // other accessibility settings...
  })
}

// Screensaver functions
let screensaverTimeoutID = null

export function startScreensaverTimeout(scope) {
  clearScreensaverTimeout()

  screensaverTimeoutID = setTimeout(() => {
    changeView(scope, 'Screensaver')
  }, SCREENSAVER_DELAY_DURATION)
}

export function clearScreensaverTimeout() {
  if (screensaverTimeoutID !== null) {
    clearTimeout(screensaverTimeoutID)
    screensaverTimeoutID = null
  }
}

// Pauses the screensaver timeout
export function pauseScreensaverTimeout() {
  if (screensaverTimeoutID !== null) {
    clearTimeout(screensaverTimeoutID);
    screensaverTimeoutID = null;
  }
}

// Resumes the screensaver timeout
export function resumeScreensaverTimeout(scope) {
  if (screensaverTimeoutID === null) {
    screensaverTimeoutID = setTimeout(() => {
      changeView(scope, 'Screensaver');
    }, SCREENSAVER_DELAY_DURATION);
  }
}


// View-related functions
export function handleActivity(scope) {
  clearScreensaverTimeout()
  startScreensaverTimeout(scope)
  if (scope.state.currentView === 'Screensaver') {
    changeView(scope, 'Welcome')
  }
}


export function changeView(scope, newView, params = {}) {

  // Make sure scope is the correct component instance
  if (typeof scope !== 'object' || !scope.setState) {
    console.error('Invalid scope passed to changeView')
    return
  }

  const { currentView, viewHistory = [] } = scope.state

  // Check if the current view is already 'Screensaver' and the new view is also 'Screensaver'
  if (currentView === 'Screensaver' && newView === 'Screensaver') {
    return // Exit the function early as there's nothing to change
  }

  clearScreensaverTimeout()

  const isBack = newView === 'back'
  const getNextView = () => (isBack ? (viewHistory.length ? viewHistory.pop() : 'Welcome') : newView)
  const shouldStartScreensaver = () => getNextView() !== 'Screensaver'

  const updatedViewHistory = isBack ? viewHistory : [...viewHistory, currentView]

  scope.setState(
    {
      currentView: getNextView(),
      viewHistory: updatedViewHistory,
      ...params,
    },
    () => {
      if (shouldStartScreensaver()) {
        startScreensaverTimeout(scope)
      } else {
        resetAccessibilitySettings(scope)
      }

      // Handle redirection based on currentView
      switch (scope.state.currentView) {
        case 'Screensaver':
          document.location.href = `${window.location.origin}${import.meta.env.VITE_BASE_URL}screensaver`;

          // window.location = 'screensaver' // Redirect to screensaver.css view
          break
        case 'Welcome':
          document.location.href = `${window.location.origin}${import.meta.env.VITE_BASE_URL}`;

          // window.location = 'welcome' // Redirect to welcome view
        // Add more cases as necessary for other views
      }
    },
  )
}


// Event listener functions
export function setupEventListeners(scope) {
  window.addEventListener('mousemove', scope.handleActivity);
  window.addEventListener('click', scope.handleActivity);
  window.addEventListener('keypress', scope.handleActivity);
  window.addEventListener('touchstart', scope.handleActivity);
  window.addEventListener('touchmove', scope.handleActivity);
  window.addEventListener('wheel', scope.handleActivity);
  window.addEventListener('focus', scope.handleActivity);
  document.addEventListener('visibilitychange', scope.handleActivity);
}

export function removeEventListeners(scope) {
  window.removeEventListener('mousemove', scope.handleActivity);
  window.removeEventListener('click', scope.handleActivity);
  window.removeEventListener('keypress', scope.handleActivity);
  window.removeEventListener('touchstart', scope.handleActivity);
  window.removeEventListener('touchmove', scope.handleActivity);
  window.removeEventListener('wheel', scope.handleActivity);
  window.removeEventListener('focus', scope.handleActivity);
  document.removeEventListener('visibilitychange', scope.handleActivity);
}


export function isOdd(number) {
  return number % 2
}