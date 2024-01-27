import React, { useEffect } from 'react'
import homeIcon from "../assets/home.svg";
import accessibilityIcon from "../assets/accessibility_settings.svg";
import backIcon from "../assets/back.svg";
import logo from "../assets/logo.svg";
import { useLocation } from 'react-router-dom'

const Header = ({currentView, changeView}) => {
    const location = useLocation();
    useEffect(() => {
        console.log('Header currentView: ' + currentView);
        console.log('Current Path: ' + location.pathname);
    }, [currentView, location.pathname]); // Listen to changes in currentView and location.pathname

    return (
        <header>
            {currentView !== "screensaver" && (
                <>
                    <div className="navbar">
                        {currentView !== "Welcome" && (
                            <div className="back-wrapper">
                                <button
                                    onClick={() => changeView("back")}
                                    className="nav-button back-button"
                                >
                                    <img src={backIcon} alt="My SVG Icon"/>
                                </button>
                            </div>
                        )}
                        <div className="nav-buttons-top-right">
                            {currentView !== "Accessibility" && (
                                <button
                                    onClick={() => changeView("Accessibility")}
                                    className="nav-button accessibility-button"
                                >
                                    <img
                                        src={accessibilityIcon}
                                        alt="Accessibility settings icon"
                                    />
                                </button>
                            )}
                            {currentView !== "Welcome" && (
                                <button
                                    onClick={() => changeView("Welcome")}
                                    className="nav-button home-button"
                                >
                                    <img src={homeIcon} alt="Home icon"/>
                                </button>
                            )}
                        </div>
                    </div>
                    {(currentView === "Welcome" || currentView === "Kamers" || currentView === "Accessibility") && (
                        <img className="logo-image" src={logo} alt="Huis Van Alijn LOGO"/>
                    )}
                </>
            )}
        </header>
    );
};

export default Header;
