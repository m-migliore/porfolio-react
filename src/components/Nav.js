import React, { Component } from 'react';

class Nav extends Component {

  render() {
    return (
      <nav class="animated fadeInDown" id="nav">
        <h1 class="animated fadeInLeft">Matt Migliore <br/> <span>Front End Web Developer</span></h1>
        <button type="button" id="hamburger" class="animated fadeInUp">
    		<span class="sr-only">Toggle navigation</span>
    		<span></span>
    		<span></span>
    		<span></span>
    		<span></span>
    	</button>
    </nav>
    )
  }

}

export default Nav;
