import React, {useEffect, useState} from 'react'
import {useParams} from 'react-router-dom'
import PuppetsList from '../components/InfoSection/PuppetsList'
import PuppetDetail from "../components/InfoSection/PuppetDetail";
import {useLanguage} from "../components/common/LanguageProvider";

function RoomDetail() {
    const [puppetId, setPuppetId] = useState(1);
    const [puppetObjectNumber, setPuppetObjectNumber] = useState("");
    const {roomNumber} = useParams()
    const languageSettings = useLanguage()
    console.log(languageSettings.language)

    useEffect(() => {
        console.log(puppetId)
        console.log(puppetObjectNumber)
        console.log(roomNumber)
    }, [puppetId, puppetObjectNumber, roomNumber])

    const handleClick = (puppet_identification) => {
        setPuppetId(puppet_identification.id);
        setPuppetObjectNumber(puppet_identification.objectNumber);
    };




    return (
        <>
            <div className='container container-roomdetail'>
                <h1 className='hidden'>Poppen kamer {roomNumber}</h1>
                <div className='app roomdetail'>
                    <div className='roomdetail-wrapper'>
                        <div className='puppetlist'>
                            <PuppetsList onData={handleClick} roomNumber={roomNumber} language={languageSettings.language} />
                        </div>
                        <div key={puppetObjectNumber} className='puppetdetail'>
                            <PuppetDetail puppetObjectNumber={puppetObjectNumber} language={languageSettings.language} />
                        </div>
                    </div>

                </div>
            </div>
        </>
    )
}

export default RoomDetail;
