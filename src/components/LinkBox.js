import React, { Component } from 'react';
import { connect } from 'react-redux'

class LinkBox extends Component {

  render() {
    return (
      <div id="link-box" className={this.props.menuActive ? "open" : ""}>
        <ul className="list-unstyled">
          <li><span id="about-link">About</span></li>
          <li><span id="resume-link">Resume</span></li>
          <li><span id="portfolio-link">Portfolio</span></li>
          <li><span id="contact-link">Contact</span></li>
        </ul>
      </div>
    );
  }

}

const mapStateToProps = state => {
  return {
    menuActive: state.menuActive
  }
}

export default connect(mapStateToProps)(LinkBox)
