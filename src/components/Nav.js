import React, { Component } from 'react';
import { connect } from 'react-redux'
import LinkBox from './LinkBox'

class Nav extends Component {
  navSlide = () => {
    const linkBox = document.getElementById("link-box")
    linkBox.classList.toggle("open")
  }

  handleBurger = () => {
    if (this.props.menuActive) {
      this.navSlide()
      setTimeout(this.props.burgerClick, 50)
    } else {
      this.props.burgerClick()
      setTimeout(this.navSlide, 50)
    }
  }

  render() {
    return (
      <>
        <nav className="animated fadeInDown" id="nav">
          <h1 className="animated fadeInLeft">Matt Migliore <br/> <span>Full Stack Web Developer</span></h1>
          <button type="button" onClick={this.handleBurger} id="hamburger" className={this.props.menuActive ? "animated fadeInUp open" : "animated fadeInUp"}>
            <span className="sr-only">Toggle navigation</span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </button>
        </nav>
        {this.props.menuActive ? <LinkBox /> : null}
      </>
    )
  }

}

const mapStateToProps = state => {
  return {
    menuActive: state.menuActive
  }
}

const mapDispatchToProps = dispatch => {
  return {
    burgerClick: () => dispatch({type: "BURGER_CLICK"})
  }
}

export default connect(mapStateToProps, mapDispatchToProps)(Nav)
