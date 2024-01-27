import React, { useState, useEffect } from 'react';

import PropTypes from 'prop-types';
import Tabs from '@mui/material/Tabs';
import Tab from '@mui/material/Tab';
import Typography from '@mui/material/Typography';
import Box from '@mui/material/Box';
import SceneImageList from "./SceneImageList";
import axios from "axios";
import {useLanguage} from "../common/LanguageProvider";
import { translateCreateSceneView } from '../../stores/translationService' // Create a KonvaStage component

function CustomTabPanel(props) {
    const { children, value, index, ...other } = props;

    return (
        <div
            role="tabpanel"
            hidden={value !== index}
            id={`simple-tabpanel-${index}`}
            aria-labelledby={`simple-tab-${index}`}
            {...other}
        >
            {value === index && (
                <Box sx={{ p: 3 }}>
                    {children}
                </Box>
            )}
        </div>
    );
}

CustomTabPanel.propTypes = {
    children: PropTypes.node,
    index: PropTypes.number.isRequired,
    value: PropTypes.number.isRequired,
};

function a11yProps(index) {
    return {
        id: `simple-tab-${index}`,
        'aria-controls': `simple-tabpanel-${index}`,
    };
}

const SceneGallery = ({onImageClick,onBackgroundClick}) => {
    const languageSettings = useLanguage()
    const language = languageSettings.language
    const [puppets, setPuppets] = useState([]);
    const [backgrounds, setBackgrounds] = useState([]);
    const [expressions, setExpressions] = useState([]);
    const [loading, setloading] = useState(false);
    //const [error, setError] = useState(null);

    useEffect(() => {
        const fetchData = () => {
            setloading(true);
            axios.get(`${process.env.VITE_BACKEND_BASE_URL}/api/scene`)
                .then(res => {
                    const data = res.data.images;
                    setPuppets(data.puppets);
                    setBackgrounds(data.backgrounds)
                    setExpressions(data.expressions)
                })
                .catch(error => {
                    console.log(error)
                    //setError(error);
                })
                .finally(() => {
                    setloading(false);
                });
        };

        fetchData();
    }, []);

    const [value, setValue] = React.useState(0);

    const handleChange = (event, newValue) => {
        setValue(newValue);
    };


    return (
        <div className="sceneGalleryContainer">
            <Box sx={{ width: '100%'}}>
                <Box sx={{ borderBottom: 1, borderColor: 'divider' }}>
                    <Tabs value={value} onChange={handleChange} variant="fullWidth" aria-label="basic tabs example" textColor="primary" indicatorColor="primary" >
                        <Tab label={translateCreateSceneView('puppets', language)} {...a11yProps(0)} />
                        <Tab label={translateCreateSceneView('backgrounds', language)} />
                        <Tab label={translateCreateSceneView('expressions', language)} />
                    </Tabs>
                </Box>

                <CustomTabPanel value={value} index={0}>
                    {loading ? (
                        <Typography>Loading puppets...</Typography>
                    ) : (
                        <SceneImageList images={puppets} folder={"scenePuppets"} width={'200'} onImageClick={onImageClick}/>
                    )}
                </CustomTabPanel>

                <CustomTabPanel value={value} index={1}>
                    {loading ? (
                        <Typography>Loading backgrounds...</Typography>
                    ) : (
                        <SceneImageList images={backgrounds} folder={"backgrounds"} width={'800'} onImageClick={onBackgroundClick} />
                    )}
                </CustomTabPanel>
                <CustomTabPanel value={value} index={2}>
                    {loading ? (
                        <Typography>Loading expressions...</Typography>
                    ) : (
                        <SceneImageList images={expressions}  folder={"expressions"} width={'200'} onImageClick={onImageClick}/>
                    )}
                </CustomTabPanel>
            </Box>
        </div>
    );
};

export default SceneGallery;
