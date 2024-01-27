import React, { useState, useEffect } from 'react'
import '../styles/app.css'
import GameCard from '../components/game/GameCard'
import { isOdd } from '../utils/viewUtils.jsx'
import {createMyAxiosInstance} from "../instances/myAxios";
import {useLanguage} from "../components/common/LanguageProvider";
import ContentOverlay from "../components/contentOverlay";

function Game() {
  const languageSettings = useLanguage()
  const [selectedCards, setSelectedCards] = useState([])
  const [selection, setSelection] = useState([])
  const [disabledCards, setDisabledCards] = useState([])
  const [matchedPairs, setMatchedPairs] = useState([])
  //const [lives, setLives] = useState([5])
  const images = [1, 3, 5, 7, 9, 11, 13, 15]
  const text = [0, 2, 4, 6, 8, 10, 12, 14]

  const  [styles,setStyles]= useState([0, 0, 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6]); // Adjusted for 14 cards


  const [types, setTypes] = useState([])
  const [puppets, setPuppets] = useState([])
  const [loading, setLoading] = useState(true);

  const [videoVisible, setVideoVisible] = useState(false);
  const [videoUrl, setVideoUrl] = useState('');
  const [videoTitle, setVideoTitle] = useState('');

  //const [error, setError] = useState(null);


  useEffect(() => {
    setStyles(randomizeArray(styles))
    let isCancelled = false;
    const myAxios = createMyAxiosInstance(languageSettings.language);
    const fetchGameData = async () => {

      try {
        const response = await myAxios.get(`/game`);
        if (!isCancelled) {
          console.log(response.data)


          setTypes(response.data.types);
          setPuppets(response.data.puppets)
          setLoading(false);
        }
      } catch (error) {
        if (!isCancelled) {
          //setError(error);
          setLoading(false);
        }
      }
    };

    fetchGameData();
    return () => {
      isCancelled = true;
    };
  }, [])

  function randomizeArray(baseArray) {
    const newArray = [...baseArray];

    for (let i = 1; i < newArray.length; i += 2) {
      const randomIndex = getRandomOddIndex(i, newArray.length);

      const temp = newArray[`${i}`];
      newArray[`${i}`] = newArray[`${randomIndex}`];
      newArray[`${randomIndex}`] = temp;
    }

    const shiftAmount = [2, 4, 6, 8, 10, 12][Math.floor(Math.random() * 6)];
    newArray.unshift(...newArray.splice(-shiftAmount));

    return newArray;
  }
  function getRandomOddIndex(currentIndex, arrayLength) {
    let randomIndex;
    do {
      randomIndex = Math.floor(Math.random() * arrayLength);
    } while (randomIndex % 2 === 0 || randomIndex === currentIndex);

    return randomIndex;
  }

  const handleCardClick = (cardId, style, variant) => {
    console.log(style)
    setSelection([cardId])
    if (selection.length === 1) {
      setSelection([])
    }
    if (selectedCards.length === 2) {
      setSelectedCards([])
    }

    if (disabledCards.length === 0) {
      setDisabledCards([...variant === 'image' ? images.filter((id) => id !== cardId) : text.filter((id) => id !== cardId)])
    } else if (selectedCards.length === 1) {
      setDisabledCards([])
    }

    setSelectedCards((prevSelected) => [...prevSelected, { id: cardId, style, variant }])
  }

  useEffect(() => {
    if (selectedCards.length === 2) {
      const [firstCard, secondCard] = selectedCards
      console.log(firstCard.style)
      console.log(secondCard.style)
      if ((firstCard.variant !== secondCard.variant) && (firstCard.style === secondCard.style)) {
        setMatchedPairs((prevPairs) => [...prevPairs, { id1: firstCard.id, id2: secondCard.id }])
        console.log('Goed gedaan!')
        console.log(types[firstCard.style])
        setVideoTitle(types[firstCard.style]?.name || 'Default Title');
        setVideoUrl(`${import.meta.env.VITE_BACKEND_BASE_URL}/api/nestedVideo/styleVideos/${types[firstCard.style]?.video || ''}`);

        setVideoVisible(true);
        //display the right video from the backend, a different overlaying component
      } else {
        //setLives((prevLives) => prevLives - 1);
        console.log('Fout!')
      }
    }
  }, [selectedCards])

  useEffect(() => {
    if (matchedPairs.length >= 8) {
      console.log('Proficiat! Alle speelstijlen werden correct gelinkt!')
      //reload game when game is done and video is closed
      if(!videoVisible)
        window.location.reload();
    }
  }, [matchedPairs,videoVisible])

  const handleVideoClose = () => {
    setVideoVisible(false); // Hide the video when the user closes it
  };

  const renderGameRows = () => {
    const numRows = 4;
    const numCols = 4;
    const totalCards = 14; // Change this to the total number of cards you want (14 in your case)
    const rows = [];

    for (let i = 0; i < numRows; i++) {
      const row = [];
      for (let j = 0; j < numCols; j++) {
        const index = i * numCols + j;
        if (index < totalCards) {
          const inSelection = selection.includes(index);
          const isDisabled = disabledCards.includes(index);
          const isPaired = matchedPairs.some((pair) => pair.id1 === index || pair.id2 === index);
          const style = styles[parseInt(index.toString())].toString();
          row.push(
              <GameCard
                  key={index}
                  variant={isOdd(index) ? 'image' : 'text'}
                  onClick={() => handleCardClick(index, style, isOdd(index) ? 'image' : 'text')}
                  inSelection={inSelection}
                  isDisabled={isDisabled}
                  isPaired={isPaired}
              >
                {index % 2 === 0 ? (types[`${style}`]?.name || '').toUpperCase() : (
                    <img
                        className='logo-image'
                        src={`${import.meta.env.VITE_BACKEND_BASE_URL}/api/image/${puppets[`${style}`]?.object_number}/600`}
                        alt='Huis Van Alijn LOGO'
                    />
                )}
              </GameCard>,
          );
        }
      }
      rows.push(<div key={i}>{row}</div>);
    }
    return rows;
  };

  return (
    <>
      <div className='container'>
        <h1 className='hidden'>Game</h1>
        {/*<p>{lives} TRIES LEFT</p>*/}
        <div className='app'>
          {!loading && <div className='game-cards'>{renderGameRows()}</div>}
        </div>
        {/* Video overlay */}
        {videoVisible && (
            <ContentOverlay contentUrl={videoUrl} isImage={false} onPress={handleVideoClose} title={videoTitle}></ContentOverlay>
        )}
      </div>
    </>
  )
}

export default Game
