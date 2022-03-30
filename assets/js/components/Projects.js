import React from 'react';
// https://create-react-app.dev/docs/adding-images-fonts-and-files/
// https://pixabay.com/
import desktop from '../../images/marbre.jpg';
import mobile from '../../images/planche.jpg';

// npm install react-bootstrap bootstrap@5.1.3
// composer install && composer update
import { } from 'react-bootstrap';

import { useMediaQuery } from 'react-responsive'

    
// console.log(mobile); // /logo.84287d09.png

export default function Projects() {

    const isPortrait = useMediaQuery({ query: '(orientation: portrait)' })
  
    return (
        <div className="presentation" style={{
            backgroundImage: `url(${!isPortrait ? desktop : mobile})`
        }}>
            <div className={`presentation-page ${!isPortrait ? "presentation-classdesktop" : "presentation-classmobile"}`}>
                {/* <img src={mobile} alt="digital world"/> */}
                {isPortrait ? 
                <><h1>mobile</h1></> :
                <><h1>desktop</h1></>}
            </div>
        </div>
    )

}