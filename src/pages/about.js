import React from "react"
import SEO from "../components/seo"

import Layout from "../components/layout"
import Image from "../components/image"

const AboutPage = () => (
  <Layout>
    <SEO title="About" />
    <section className="about">
      <div className="container">
        {/* + Title */}
        <div className="row mt-4 justify-content-center">
          <div className="col-lg-7 col-sm-12 my-auto headline">
            <h1>My mini autobiography</h1>
          </div>
        </div>
        {/* - Title */}

        <div className="row my-4 justify-content-center">
          {/* + Card */}
          <div className="col-lg-7 my-auto">
            <div className="card shadow-sm">
              <div className="card-body">
                <div className="card-title">
                  <h2>
                    Hi there!
                    <span role="img" aria-label="Happy face">
                      😊
                    </span>
                  </h2>
                  <h3>an introduction</h3>
                </div>

                <div className="card-text">
                I have recently finished studying a MSc in Bioinformatics and Computational Biology at UCC. This course provides a solid foundation in data analysis using R and Python primarily, while also using mathematical models to study the complex field of genomes and DNA. I have a BSc in Computer Science and Information Technology from NUI Galway. While studying in Galway I gained in-depth coverage of core computer science and software engineering technologies. I chose to study a range of next-generation technology areas, including digital media and games, data analytics, energy informatics, cloud computing and medical/bioinformatics.
                </div>
              </div>
            </div>
          </div>
          {/* - Card */}

          {/* + Image */}
          <div className="col-lg-6 my-auto mx-auto">
            <Image
              fileName="about.jpg"
              alt="About page"
              className="about-img-wrapper"
            />
          </div>
          {/* - Image */}

          {/* + Card */}
          <div className="col-lg-7 my-auto">
            <div className="card shadow-sm">
              <div className="card-body">
                <div className="card-title">
                  <h2>More about me</h2>
                  <h3>...</h3>
                </div>

                <div className="card-text">
                I have worked full-time as a software engineer at WAZP, a 3D Printing Supply Chain company located in Tralee, Co. Kerry. In this role I had the opportunity to work with different professionals in a small fast paced company. I also like to work on personal projects. I have experience in Python and have educational experience working with Java and C. I also have knowledge working with Bootstrap, React, HTML and CSS. Take a look at my work on my Github.
                </div>
              </div>
            </div>
          </div>
          {/* - Card */}
        </div>
      </div>
    </section>
  </Layout>
)
export default AboutPage
