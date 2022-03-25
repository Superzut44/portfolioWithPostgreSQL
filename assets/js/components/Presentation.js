import React, {Component} from 'react';
// https://create-react-app.dev/docs/adding-images-fonts-and-files/
// https://pixabay.com/
import image from '../../images/digital2.jpg';

// npm install react-bootstrap bootstrap@5.1.3
// composer install && composer update
import { } from 'react-bootstrap';

    
console.log(image); // /logo.84287d09.png

function Presentation() {
  // Import result is the URL of your image
  return (
    <div className="presentation" style={{ 
        backgroundImage: {image}
      }}>
        <img src={image} alt="digital world"/>
    </div>
  )

}

export default Presentation;