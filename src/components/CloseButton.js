import React, { Component } from 'react';
import { connect } from 'react-redux'

class CloseButton extends Component {
  handleClick = () => {
    const content = document.querySelector('.content-box')
    content.style = "opacity: 0;"
    setTimeout(this.props.closeView, 500)
  }

  render() {
    return (
      <button type="button" className="close" onClick={this.handleClick}>
        <span className="sr-only">Close {this.props.name}</span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </button>
    );
  }

}

const mapDispatchToProps = dispatch => {
  return {
    closeView: () => dispatch({type: "CLOSE_VIEW"})
  }
}

export default connect(null, mapDispatchToProps)(CloseButton)
