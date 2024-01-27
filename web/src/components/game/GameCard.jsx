import React, { useState } from 'react';
import PropTypes from 'prop-types';

const GameCard = ({ variant, onClick, inSelection, isDisabled, isPaired, children }) => {
  const [isSelected, setIsSelected] = useState(false);

  const handleClick = () => {
    setIsSelected(true);
    if (onClick) {
      onClick();
    }
  };

  const buttonClass = `game-card game-card-${variant} ${isSelected ? 'game-card-selected' : ''} ${inSelection ? 'game-card-selection' : ''} ${isDisabled ? 'game-card-disabled' : ''} ${isPaired ? 'game-card-paired' : ''}`;

  return (
    <button className={buttonClass} onClick={handleClick} title={children}>
      {children}
    </button>
  );
};

GameCard.propTypes = {
  variant: PropTypes.oneOf(['text', 'image']).isRequired,
  onClick: PropTypes.func,
  inSelection: PropTypes.bool,
  isDisabled: PropTypes.bool,
  isPaired: PropTypes.bool,
  children: PropTypes.node.isRequired,
};

export default GameCard;
