import React from 'react';
// https://create-react-app.dev/docs/adding-images-fonts-and-files/
// https://pixabay.com/
import desktop from '../../images/desktop.jpg';
import mobile from '../../images/mobile.jpg';

// npm install react-bootstrap bootstrap@5.1.3
// composer install && composer update
import { } from 'react-bootstrap';

import { useMediaQuery } from 'react-responsive'

    
// console.log(mobile); // /logo.84287d09.png

function Presentation() {

    const isPortrait = useMediaQuery({ query: '(orientation: portrait)' })
  
    return (
        <div className="presentation" style={{
            backgroundImage: `url(${!isPortrait ? desktop : mobile})`
        }}>
            <div className={`presentation-page ${!isPortrait ? "presentation-classdesktop" : "presentation-classmobile"}`}>
                {/* <img src={mobile} alt="digital world"/> */}
                {isPortrait ? 
                <><h1>Xavier</h1><h2>Chavaudrey</h2><h3>Développeur Web</h3><h3>Full-Stack</h3></> :
                <><h1>Xavier Chavaudrey</h1><h3>Développeur Web Full-Stack</h3></>}
            </div>
        </div>
    )

}

export default Presentation;