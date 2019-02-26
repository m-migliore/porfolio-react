import React, { Component } from 'react';
import './css/animate.css';
import './css/style.css';
import Nav from './components/Nav'
import Clownfish from './components/Clownfish'
import ViewContainer from './containers/ViewContainer'

class App extends Component {
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
