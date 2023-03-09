import React, { Component } from 'react';
import CloseButton from './CloseButton'

class Resume extends Component {

  componentDidMount() {
    function toggleFade(){
      const content = document.querySelector(".content-box")
      content.classList.add("open")
    }

   setTimeout(toggleFade, 250)
  }


  render() {
    return (
      <div id="resume" className="content-box jello animated">
        <CloseButton name="Resume" />

        <h2>Resume</h2>
        {/* <a href="docs/web-resume.pdf" target="_blank" class="btn btn-primary">Download PDF Version</a> */}
        <section>
          <h3>Work Experience</h3>
          <div className="job">
              <h4>Capital One</h4>
              <h5>Software Engineer</h5>
              <p>New York, NY</p>
              <p>November 2021 - Present</p>
              <ul className="list-unstyled">
                <li><i className="fas fa-bullseye"></i> Created and edited ATM screens with React and Strapi CMS</li>
                <li><i className="fas fa-bullseye"></i> Performed regression testing for web based and mobile applications</li>
                <li><i className="fas fa-bullseye"></i> Built and maintained REST APIs with Express.js</li>
                <li><i className="fas fa-bullseye"></i> Performed disaster recovery tests to ensure a resilient development environment through AWS</li>
                <li><i className="fas fa-bullseye"></i> Implemented application logging and monitoring through services such as Splunk, New Relic, and PagerDuty</li>
                <li><i className="fas fa-bullseye"></i> Completed AWS Certified Solutions Architect - Associate certification</li>
              </ul>
            </div>
            <div className="job">
              <h4>Oppenheimer &amp; Co.</h4>
              <h5>Front End Developer</h5>
              <p>New York, NY</p>
              <p>April 2019 - November 2021</p>
              <ul className="list-unstyled">
                <li><i className="fas fa-bullseye"></i> Built, refactored, and debugged a custom, internal financial application with Vue Js</li>
                <li><i className="fas fa-bullseye"></i> Built and maintained a form based, MVC application with Vue JS and Gulp</li>
                <li><i className="fas fa-bullseye"></i> Communicated with 5+ back-end development teams to understand, create, and test API specs </li>
                <li><i className="fas fa-bullseye"></i> Worked directly with upper management to gather requirements, mock-up, and build new UI features in an Agile environment</li>
                <li><i className="fas fa-bullseye"></i> Conducted technical interviews for potential front end developer hires</li>
              </ul>
            </div>
            <div className="job">
              <h4>Logic Web Media</h4>
              <h5>Front End Web Developer</h5>
              <p>Huntington Station, NY</p>
              <p>January 2017 - October 2018</p>
              <ul className="list-unstyled">
                <li><i className="fas fa-bullseye"></i> Developed over 30 custom, fully responsive WordPress themes with HTML, CSS, JavaScript, and PHP</li>
                <li><i className="fas fa-bullseye"></i> Performed maintenance and edits on a variety of websites to ensure that the best SEO practices were being used</li>
                <li><i className="fas fa-bullseye"></i> Implemented WooCommerce to existing WordPress themes</li>
                <li><i className="fas fa-bullseye"></i> Edited, and created static blocks and CMS pages on Magento sites</li>
                <li><i className="fas fa-bullseye"></i> Added simple and configurable products to Magento</li>
                <li><i className="fas fa-bullseye"></i> Built custom HTML email templates to increase customer engagement for clients</li>
                <li><i className="fas fa-bullseye"></i> Created forms with Google reCaptcha integration (v2 and invisible), and PHP processing</li>
                <li><i className="fas fa-bullseye"></i> Perfromed general maintenance and edits of existing websites</li>
              </ul>
            </div>
            <div className="job">
              <h4>Bullfrog Communications</h4>
              <h5>Junior Front End Web Developer</h5>
              <p>Greenlawn, NY</p>
              <p>September 2016 - January 2017</p>
              <ul className="list-unstyled">
                <li><i className="fas fa-bullseye"></i> Completed edits and content additions to client websites</li>
                <li><i className="fas fa-bullseye"></i> Created promotional emails for clients using Photoshop and HTML</li>
                <li><i className="fas fa-bullseye"></i> Provided graphic design work using Illustrator </li>
              </ul>
            </div>
            <div className="job">
              <h4>CHARGED.fm</h4>
              <h5>Front End Development Intern</h5>
              <p>Brooklyn, NY</p>
              <p>December 2014 - May 2015</p>
              <ul className="list-unstyled">
                <li><i className="fas fa-bullseye"></i> Built App page on company website</li>
                <li><i className="fas fa-bullseye"></i> Performed maintenance and upgraded content to existing websites</li>
              </ul>
            </div>
            <div className="job">
              <h4>American Red Cross - Central New York</h4>
              <h5>Social Media Strategy Consultant</h5>
              <p>Syracuse, NY</p>
              <p>Spring 2014</p>
              <ul className="list-unstyled">
                <li><i className="fas fa-bullseye"></i> Assisted in creation of social media strategy for the Central New York region to reach new demographics</li>
                <li><i className="fas fa-bullseye"></i> Integrated all of their social media platforms</li>
              </ul>
            </div>
          </section>
          <section>
            <h3>Skills</h3>
            <div className="skill-lists">
              <ul className="list-unstyled">
                <li><i className="fas fa-bullseye"></i> JavaScript</li>
                <li><i className="fas fa-bullseye"></i> React</li>
                <li><i className="fas fa-bullseye"></i> Redux</li>
                <li><i className="fas fa-bullseye"></i> Vue JS</li>
                <li><i className="fas fa-bullseye"></i> HTML</li>
                <li><i className="fas fa-bullseye"></i> CSS</li>
                <li><i className="fas fa-bullseye"></i> JSON</li>
              </ul>
              <ul className="list-unstyled">
                <li><i className="fas fa-bullseye"></i> Ruby</li>
                <li><i className="fas fa-bullseye"></i> Ruby on Rails</li>
                <li><i className="fas fa-bullseye"></i> SQL</li>
                <li><i className="fas fa-bullseye"></i> PHP</li>
                <li><i className="fas fa-bullseye"></i> Git</li>
                <li><i className="fas fa-bullseye"></i> NPM</li>
                <li><i className="fas fa-bullseye"></i> Gulp</li>
              </ul>
              <ul className="list-unstyled">
                <li><i className="fas fa-bullseye"></i> Docker</li>
                <li><i className="fas fa-bullseye"></i> REST APIs</li>
                <li><i className="fas fa-bullseye"></i> Photoshop</li>
                <li><i className="fas fa-bullseye"></i> Illustrator</li>
                <li><i className="fas fa-bullseye"></i> WordPress</li>
                <li><i className="fas fa-bullseye"></i> WooCommerce</li>
                <li><i className="fas fa-bullseye"></i> Magento</li>
              </ul>
            </div>
          </section>
          <section>
            <h3>Education</h3>
            <div className="job">
              <h4>Flatiron School</h4>
              <h5>Software Engineering Bootcamp</h5>
              <p>New York, NY</p>
              <p>Fall 2018 - Winter 2019</p>
              <ul className="list-unstyled">
                <li><i className="fas fa-bullseye"></i> Immersive Full Stack Web Development Program</li>
              </ul>
            </div>
            <div className="job">
              <h4>University of Denver</h4>
              <h5>Masters in Information & Communications Technology</h5>
              <p>Denver, CO</p>
              <p>Winter 2015 - Summer 2018</p>
              <ul className="list-unstyled">
                <li><i className="fas fa-bullseye"></i> Concentration in Web Design and Development</li>
              </ul>
            </div>
            <div className="job">
              <h4>Syracuse University - School of Information Studies</h4>
              <h5>Bachelor of Science in Information Management & Technology Concentrations in Web Development and Information Security</h5>
              <p>Syracuse, NY</p>
              <p>Fall 2010 - Spring 2014</p>
              <ul className="list-unstyled">
                <li><i className="fas fa-bullseye"></i> Minor in Global Enterprise Technology</li>
              </ul>
            </div>
            <div className="job">
              <h4>Commack High School</h4>
              <p>Commack, NY</p>
              <p>Fall 2006 - Spring 2010</p>
            </div>
          </section>
        </div>
    );
  }

}

export default Resume;
