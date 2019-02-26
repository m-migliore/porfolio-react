import React, { Component } from 'react';

class Clownfish extends Component {

  render() {
    return (
      <video playsInline autoPlay muted loop preload="auto" id="bgvid">
        <source src={require("../vids/clownfish.mp4")} type="video/mp4" />
      </video>
    );
  }

}

export default Clownfish;
