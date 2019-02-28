import React, { Component } from 'react';
import { connect } from 'react-redux'
import About from '../components/About'
import Resume from '../components/Resume'
import Portfolio from '../components/Portfolio'
import Contact from '../components/Contact'

class ViewContainer extends Component {

  renderView = () => {
    switch (this.props.view) {
      case "empty":
        return null
      case "about":
        return <About />
      case "resume":
        return <Resume />
      case "portfolio":
        return <Portfolio />
      case "contact":
        return <Contact />
      default:
        return null
    }
  }

  render() {
    return (
      <div className="view-container">
        {this.renderView()}
      </div>
    );
  }

}

const mapStateToProps = state => {
  return {
    view: state.view
  }
}

export default connect(mapStateToProps)(ViewContainer)
