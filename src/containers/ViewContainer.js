import React, { Component } from 'react';
import { connect } from 'react-redux'
import About from '../components/About'

class ViewContainer extends Component {

  renderView = () => {
    switch (this.props.view) {
      case "about":
        return <About />
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
