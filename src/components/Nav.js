import React, { Component } from 'react';

class Nav extends Component {

  render() {
    return (
      <nav className="animated fadeInDown" id="nav">
        <h1 className="animated fadeInLeft">Matt Migliore <br/> <span>Full Stack Web Developer</span></h1>
        <button type="button" id="hamburger" className="animated fadeInUp">
    		<span className="sr-only">Toggle navigation</span>
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
