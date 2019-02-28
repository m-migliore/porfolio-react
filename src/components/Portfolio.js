import React, { Component } from 'react';
import CloseButton from './CloseButton'

class Portfolio extends Component {

  componentDidMount() {
    function toggleFade(){
      const content = document.querySelector(".content-box")
      content.classList.add("open")
    }

   setTimeout(toggleFade, 250)
  }

  render() {
    return (
      <div id="portfolio" className="content-box jello animated">
        <CloseButton name="Portfolio" />
        <h2>Portfolio</h2>
        <div className="binder text-center">
          <div className="project">
            <a href="https://github.com/m-migliore/chef-buddi-master" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/chef-buddi.png")} alt="Chef Buddi" />
            </a>
          </div>
          <div className="project">
            <a href="https://github.com/m-migliore/triviasaurus-master" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/triviasaurus.png")} alt="Triviasaurus" />
            </a>
          </div>
          <div className="project">
            <a href="https://gcovisionperformance.com/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/gcv.png")} alt="Gold Coast Vision Performance" />
            </a>
          </div>
          <div className="project">
            <a href="https://aic-ny.com/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/aic.png")} alt="AIC NY" />
            </a>
          </div>
          <div className="project">
            <a href="http://fuscointeriors.com/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/fusco.png")} alt="Fusco Interiors" />
            </a>
          </div>
          <div className="project">
            <a href="http://www.migliore.us/fluent-demo/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/fluent.png")} alt="Fluent" />
            </a>
          </div>
          <div className="project">
            <a href="http://www.migliore.us/mercy-demo/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/mercy.png")} alt="Mercy Restaurant" />
            </a>
          </div>
          <div className="project">
            <a href="http://mariwalladermatology.com/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/mariwalla.png")} alt="Mariwalla Dermatology" />
            </a>
          </div>
          <div className="project">
            <a href="https://reddigitalmedia.com/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/red-digital.png")} alt="Red Digital Media" />
            </a>
          </div>
          <div className="project">
            <a href="https://westburystoveandfireplace.com/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/westbury-stove.png")} alt="Westbury Stove and Fireplace" />
            </a>
          </div>
          <div className="project">
            <a href="https://www.saratogaoliveoil.com/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/saratoga.png")} alt="Saratoga Olive Oil Company" />
            </a>
          </div>
          <div className="project">
            <a href="http://www.charged.fm/app/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/charged.png")} alt="CHARGED.fm App Page" />
            </a>
          </div>
          <div className="project">
            <a href="http://www.cesspoolpros.com/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/cesspool-pros.png")} alt="Cesspool Pros" />
            </a>
          </div>
          <div className="project">
            <a href="http://pittellacorp.com/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/pittella.png")} alt="Pittella Corporation" />
            </a>
          </div>
          <div className="project">
            <a href="http://medstaffconsultants.com/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/msc.png")} alt="Medical Staffing Consultants" />
            </a>
          </div>
          <div className="project">
            <a href="https://primemach.com/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/prime-machine.png")} alt="Prime Machine" />
            </a>
          </div>
          <div className="project">
            <a href="https://searchengineoptimizationlongisland.com/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/seo-li.png")} alt="Search Engine Optimization Long Island" />
            </a>
          </div>
          <div className="project">
            <a href="http://www.drkevinmullins.com/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/dr-mullins.png")} alt="Dr. Kevin Mullins" />
            </a>
          </div>
          <div className="project">
            <a href="http://customknitsocks.com/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/custom-knit.png")} alt="Custom Knit Socks" />
            </a>
          </div>
          <div className="project">
            <a href="http://www.bestek.com/" target="_blank" rel="noopener noreferrer">
              <img src={require("../img/bestek.png")} alt="Bestek Lighting" />
            </a>
          </div>
        </div>
      </div>
    );
  }

}

export default Portfolio;
