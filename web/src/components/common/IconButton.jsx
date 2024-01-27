import React from 'react'
import PropTypes from 'prop-types'
import { useNavigate } from 'react-router-dom'

const IconButton = ({ name, route, iconSrc, altText }) => {
  const navigate = useNavigate()

  return (
    <button
      onClick={() => navigate(route)}
      className={`nav-button ${name}-button`}
    >
      <img src={iconSrc} alt={altText} title={altText} />
    </button>
  )
}

IconButton.propTypes = {
  name: PropTypes.string.isRequired,
  route: PropTypes.any.isRequired,
  iconSrc: PropTypes.string.isRequired,
  altText: PropTypes.string.isRequired,
}
export default IconButton
