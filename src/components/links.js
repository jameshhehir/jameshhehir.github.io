import React from "react"

import { FontAwesomeIcon } from "@fortawesome/react-fontawesome"
import { faEnvelope } from "@fortawesome/free-solid-svg-icons"
import {
  faTwitter,
  faGithub,
  faLinkedin,
} from "@fortawesome/free-brands-svg-icons"

export default function Links() {
  return (
    <ul className="list-group list-group-horizontal">
      <li className="list-group-item">
        <a
          href="mailto:jameshhehir@gmail.com"
          target="_blank"
          rel="noreferrer"
          alt="email link"
        >
          <FontAwesomeIcon icon={faEnvelope} />
        </a>
      </li>
      <li className="list-group-item">
        <a
          href="https://github.com/jameshhehir"
          target="_blank"
          rel="noreferrer"
          alt="github link"
        >
          <FontAwesomeIcon icon={faGithub} />
        </a>
      </li>
      <li className="list-group-item">
        <a
          href="https://linkedin.com/jimmy-hehir"
          target="_blank"
          rel="noreferrer"
          alt="linkedin link"
        >
          <FontAwesomeIcon icon={faLinkedin} />
        </a>
      </li>
      <li className="list-group-item">
        <a
          href="https://twitter.com/in/jimmy-hehir/"
          target="_blank"
          rel="noreferrer"
          alt="twitter link"
        >
          <FontAwesomeIcon icon={faTwitter} />
        </a>
      </li>
    </ul>
  )
}
