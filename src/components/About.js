import React, { Component } from 'react';
import { connect } from 'react-redux'
import CloseButton from './CloseButton'

class About extends Component {

  componentDidMount() {
    function toggleFade(){
      const content = document.querySelector(".content-box")
      content.classList.add("open")
    }

   setTimeout(toggleFade, 250)
  }



  render() {
    return (
      <div id="about" className="content-box jello animated">
        <CloseButton name="about"/>

        <h2>About</h2>
        <p>My name is Matt Migliore, and I am a front end developer who loves the challenge of problem solving with code. I build beautiful, dynamic web applications through my experience with JavaScript, React, Redux, Vue,  Ruby on Rails, HTML and CSS. I love solving puzzles, and I am determined to solve every puzzle that I encounter when coding.</p>
        <p>I am from Commack, New York, which is on Long Island. I am a purple belt in Brazilian jiu-jitsu, and I spend most of free time training. My other hobbies include playing video games, cycling, photography, snowboarding, and enjoying the outdoors.</p>
      </div>
    );
  }

}

const mapStateToProps = state => {
  return {
    view: state.view
  }
}

export default connect(mapStateToProps)(About)
