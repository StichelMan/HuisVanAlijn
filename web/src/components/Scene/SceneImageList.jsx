import React from 'react';

const SceneImageList = ({ images, onImageClick, folder,width }) => {
    const fetchUrl = `${process.env.VITE_BACKEND_BASE_URL}/api/sceneImage/` + folder +'/'; // Declare fetchUrl as a constant variable
    return (
        <div className='sceneImageList'>
            {images.map((imageName, index) => (
                <div key={index} className="sceneImageWrapper" onClick={() => onImageClick(`${fetchUrl}${imageName}/${width}`)}>
                    <img
                        src={`${fetchUrl}${imageName}/400`}
                        alt={imageName}
                        draggable="false"
                    />
                </div>
            ))}
        </div>
    );
};

export default SceneImageList;
