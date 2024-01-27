import React, {useEffect, useState} from 'react'
import '../styles/app.css'
import Button from '../components/common/Button'
import {useNavigate} from 'react-router-dom'
import logo from '../assets/logo.svg'
import {useLanguage} from "../components/common/LanguageProvider";
import {translateRoomsView} from '../stores/translationService';
import {createMyAxiosInstance} from "../instances/myAxios";

function Rooms() {
    const [rooms, setRooms] = useState([])
    const navigate = useNavigate()
    const languageSettings = useLanguage()
    const language = languageSettings.language

    useEffect(() => {
        let isCancelled = false;
        const myAxios = createMyAxiosInstance(languageSettings.language);
        const fetchGameData = async () => {

            try {
                const response = await myAxios.get(`/rooms`);
                if (!isCancelled) {
                    console.log(response.data)


                    setRooms(response.data.rooms);
                }
            } catch (error) {
                console.log(error)
            }
        };

        fetchGameData();
        return () => {
            isCancelled = true;
        };
    }, [])

    return (
        <>
            <div className='container'>
                <div className='info-wrapper'>
                    <img className='logo-image' src={logo} alt='Huis Van Alijn LOGO'/>
                    <h1 className='main-title'>
                        {translateRoomsView('title', language)}
                    </h1>
                </div>
                <div className='button-row kamers-buttons'>
                    {rooms.map((room) => (
                        <Button
                            key={room.id}
                            variant="default"
                            onClick={() => navigate(`/rooms/${room.roomnumber}`)}
                        >
                            {room.name}
                        </Button>
                    ))}
                </div>
            </div>
        </>
    )
}

/*
Rooms.propTypes = {
    changeView: PropTypes.func.isRequired,
};*/

export default Rooms
