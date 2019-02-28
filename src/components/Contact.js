import React, { Component } from 'react';
import CloseButton from './CloseButton'

class Contact extends Component {
  componentDidMount() {
    function toggleFade(){
      const content = document.querySelector(".content-box")
      content.classList.add("open")
    }

   setTimeout(toggleFade, 250)
  }

  render() {
    return (
      <div id="contact" className="content-box jello animated">
        <CloseButton name="Contact" />
        <h2>Contact</h2>
        <h3>Thank you for visiting my site!</h3>
        <p>Please feel free to contact me through any of the options below</p>
        <div className="contact-icons">
          <a href="https://www.linkedin.com/in/matthew-migliore-b231a060/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
          <a href="https://github.com/m-migliore" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
          <a href="mailto:migliorewd@gmail.com"><i class="far fa-envelope"></i></a>
        </div>

      </div>
    );
  }

}

export default Contact;
