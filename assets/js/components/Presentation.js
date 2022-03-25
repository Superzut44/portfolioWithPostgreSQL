import React, {Component} from 'react';
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
            <div className='presentation-page'>
                {/* <img src={mobile} alt="digital world"/> */}
            </div>
        </div>
    )

}

export default Presentation;