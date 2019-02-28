import React, { Component } from 'react';
import { connect } from 'react-redux'

class LinkBox extends Component {

  handleClick = e => {
    this.props.setView(e.target.dataset.view)
  }

  render() {
    return (
      <div id="link-box">
        <ul>
          <li onClick={this.handleClick} data-view="about">About</li>
          <li onClick={this.handleClick} data-view="resume">Resume</li>
          <li onClick={this.handleClick} data-view="portfolio">Portfolio</li>
          <li onClick={this.handleClick} data-view="contact">Contact</li>
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

const mapDispatchToProps = dispatch => {
  return {
    setView: view => dispatch({type: "SET_VIEW", payload: view})
  }
}

export default connect(mapStateToProps, mapDispatchToProps)(LinkBox)
