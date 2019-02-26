import React, { Component } from 'react';
import logo from './logo.svg';
import './style.css';
import Nav from './components/Nav'
import Clownfish from './components/Clownfish'
import ViewContainer from './containers/ViewContainer'

class App extends Component {
  state = {
    navActive: false,
    view: ""
  }

  render() {
    return (
      <>
        <Nav />
        <Clownfish />
        <ViewContainer />
      </>
    );
  }
}

export default App;
