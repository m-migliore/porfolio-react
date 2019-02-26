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
              <h4>Logic Web Media</h4>
              <h5>Front End Web Developer</h5>
              <p>Huntington, NY</p>
              <p>January 2017 - Present</p>
              <ul className="list-unstyled">
                <li><i className="fas fa-bullseye"></i> Created fully custom WordPress themes</li>
                <li><i className="fas fa-bullseye"></i> Created custom WordPress sites with WooCommerce functionality</li>
                <li><i className="fas fa-bullseye"></i> Edited, and created, static blocks and CMS pages on Magento sites</li>
                <li><i className="fas fa-bullseye"></i> Added simple and configurable products to Magento</li>
                <li><i className="fas fa-bullseye"></i> Created custom MailChimp email templates</li>
                <li><i className="fas fa-bullseye"></i> Creation of forms with Google reCaptcha integration (v2 and invisible), and PHP processing</li>
                <li><i className="fas fa-bullseye"></i> Created fully responsive websites for screens of all sizes</li>
                <li><i className="fas fa-bullseye"></i> Editing websites with modern SEO practices to improve visibility</li>
                <li><i className="fas fa-bullseye"></i> General maintenance and edits of existing websites</li>
              </ul>
            </div>
            <div className="job">
              <h4>Bullfrog Communications</h4>
              <h5>Junior Front End Web Developer</h5>
              <p>Greenlawn, NY</p>
              <p>September 2016 - January 2017</p>
              <ul class="list-unstyled">
                <li><i className="fas fa-bullseye"></i> Updating, and maintaining various client sites</li>
                <li><i className="fas fa-bullseye"></i> Worked with custom sites, as well as WordPress sites</li>
                <li><i className="fas fa-bullseye"></i> Graphic design work with Adobe Photoshop and Illustrator</li>
              </ul>
            </div>
            <div className="job">
              <h4>CHARGED.fm</h4>
              <h5>Front End Development Intern</h5>
              <p>Brooklyn, NY</p>
              <p>December 2014 - May 2015</p>
              <ul class="list-unstyled">
                <li><i className="fas fa-bullseye"></i> Performed maintenance and upgraded content to existing websites</li>
                <li><i className="fas fa-bullseye"></i> Built App page on company website</li>
                <li><i className="fas fa-bullseye"></i> Graphic design work with Adobe Photoshop and Illustrator</li>
              </ul>
            </div>
            <div className="job">
              <h4>American Red Cross - Central New York</h4>
              <h5>Social Media Strategy Consultant</h5>
              <p>Syracuse, NY</p>
              <p>Spring 2014</p>
              <ul class="list-unstyled">
                <li><i className="fas fa-bullseye"></i> Assisted in creation of social media strategy for the Central New York region to reach new demographics</li>
                <li><i className="fas fa-bullseye"></i> Integrated all of their social media platforms</li>
              </ul>
            </div>
          </section>
          <section>
            <h3>Skills</h3>
            <ul class="list-unstyled">
              <li><i className="fas fa-bullseye"></i> HTML/HTML5, PHP</li>
              <li><i className="fas fa-bullseye"></i> CSS/CSS3, SASS</li>
              <li><i className="fas fa-bullseye"></i> Javascript, jQuery, JSON</li>
              <li><i className="fas fa-bullseye"></i> Bootstrap, Foundation, WordPress, WooCommerce, Magento</li>
              <li><i className="fas fa-bullseye"></i> SQL, Microsoft SQL Server 2008, ERDs</li>
              <li><i className="fas fa-bullseye"></i> Experience with Git and version control</li>
              <li><i className="fas fa-bullseye"></i> Adobe Photoshop and Illustrator</li>
              <li><i className="fas fa-bullseye"></i> Microsoft Office Suite</li>
            </ul>
          </section>
          <section>
            <h3>Education</h3>
            <div className="job">
              <h4>University of Denver</h4>
              <h5>Masters in Information & Communications Technology</h5>
              <p>Denver, CO</p>
              <p>Winter 2015 - Present</p>
              <ul className="list-unstyled">
                <li><i class="fas fa-bullseye"></i> Concentration in Web Design and Development</li>
              </ul>
            </div>
            <div className="job">
              <h4>Syracuse University - School of Information Studies</h4>
              <h5>Bachelor of Science in Information Management & Technology Concentrations in Web Development and Information Security</h5>
              <p>Syracuse, NY</p>
              <p>Fall 2010 - Spring 2014</p>
              <ul className="list-unstyled">
                <li><i className="fas fa-bullseye"></i> Minor in Global Enterprise Technology</li>
                <li><i className="fas fa-bullseye"></i> Member of The National Society of Collegiate</li>
                <li><i className="fas fa-bullseye"></i> Member of the Syracuse Collegiate Cyber Defense Competition Team</li>
                <li><i className="fas fa-bullseye"></i> GPA 3.4, Dean’s List</li>
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
