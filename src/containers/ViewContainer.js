import React, { Component } from 'react';
import { connect } from 'react-redux'
import About from '../components/About'
import Resume from '../components/Resume'

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
        // return <Portfolio />
        return null
      case "contact":
        // return <Contact />
        return null
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
