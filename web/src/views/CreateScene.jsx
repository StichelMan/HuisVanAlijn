import React, { useState } from 'react';
import { SwipeableDrawer } from "@mui/material";
import SceneGallery from '../components/Scene/SceneGallery';
import SceneCanvas from '../components/Scene/sceneCanvas';
import {useLanguage} from "../components/common/LanguageProvider";
import { translateCreateSceneView } from '../stores/translationService'
import Button from '../components/common/Button' // Create a KonvaStage component

const CreateScene = () => {
    const languageSettings = useLanguage()
    const language = languageSettings.language
    const [isDrawerOpen, setIsDrawerOpen] = useState(false);
    const [images, setImages] = useState([]);
    const [background, setBackground] = useState(`${process.env.VITE_BACKEND_BASE_URL}/api/sceneImage/backgrounds/2022-007-200/800` );
    const [error, setError] = useState([]);
    const handleImageClick = (src) => {

        if (images.length < 10) {
            setImages((prevImages) => [
                ...prevImages,
                { src: src, x: 150+(images.length *20), y: 150 },
            ]);
        } else {
            setError(translateCreateSceneView('limitationWarning', language));
        }
    };
    const handleBackgroundClick = (src) => {
        setBackground(src);
    };
    const handleDelete = () => {
        setImages((prevImages) => {
            const updatedImages = [...prevImages];
            updatedImages.pop(); // Remove the last image
            return updatedImages;
        });
    };



    return (
        <>
            <div className='container scenemaker'>
                <div className='action-button-wrapper'>
                    <Button onClick={() => setIsDrawerOpen(!isDrawerOpen)} variant={'default'}>{translateCreateSceneView('toggleDrawer', language)}</Button>
                    <Button onClick={handleDelete} variant={'default'}>{translateCreateSceneView('deleteLast', language)}</Button>
                </div>
                <h2>{error}</h2>
                <SceneCanvas images={images} background={background} error={error} onDelete={handleDelete}></SceneCanvas>
                <div className='app'>
                    <SwipeableDrawer
                        anchor="bottom"
                        open={isDrawerOpen}
                        onOpen={() => setIsDrawerOpen(true)}
                        onClose={() => setIsDrawerOpen(false)}
                    >
                        <SceneGallery onImageClick={handleImageClick} onBackgroundClick={handleBackgroundClick}/>
                    </SwipeableDrawer>

                </div>
            </div>
        </>
    );
};

export default CreateScene;
