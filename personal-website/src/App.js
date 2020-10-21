import React from 'react';
import logo from './logo.svg';
import './App.css';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Website underconstruction. If you need to contact me use this email <a href="mailto:hello@jimmyhehir.info" style="color: #61dafb;">hello@jimmyhehir.info</a>
        </p>
        <a href="https://www.linkedin.com/in/jimmy-hehir/"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.github.com/jameshhehir"><i class="fab fa-github-square"></i></a>
        <a href="https://www.twitter.com/jimihehir"><i class="fab fa-twitter-square"></i></a>
        <a href="mailto:jameshhehir@gmail.com"><i class="fas fa-envelope"></i></a>
      </header>
    </div>
  );
}

export default App;
