import React from 'react'
import PropTypes from 'prop-types'

const Button = ({ variant, onClick, children }) => {

  const handleClick = () => {
    if (onClick) {
      onClick()
    }
  }

  const buttonClass = `button button-${variant}`

  return (
    <button className={buttonClass} onClick={handleClick} title={children}>
      {children}
    </button>
  )
}

Button.propTypes = {
  variant: PropTypes.oneOf(['default', 'special']).isRequired,
  onClick: PropTypes.func,
  children: PropTypes.node.isRequired,
}

export default Button
