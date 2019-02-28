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
        <p>Please feel free to contact me through any of the options below</p>
        <p><h4>Email</h4> <a href="mailto:migliorewd@gmail.com">migliorewd@gmail.com</a></p>

      </div>
    );
  }

}

export default Contact;
