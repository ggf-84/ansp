import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Home from './pages/HomePage'
import About from './pages/AboutPage'
import Chart from './pages/ChartPage'
import Default from './pages/DefaultPage'

import {BrowserRouter, Route, Switch} from 'react-router-dom'

import Navbar from './components/Navbar'

export default class Ansp extends Component {
   
    render() {
        return (
        <div className="mine-container">
            <Navbar/>
            <Switch>
              <Route path="/" exact component={Home} />
              <Route path="/about" exact component={About} /> 
              <Route path="/chart" exact component={Chart} />
              <Route render={Default} />
            </Switch>
          </div>
        );
    }
}

if (document.getElementById('app')) {
    // var data = document.getElementById('app').getAttribute('data');
    // ReactDOM.render(<Ansp data={data}/>, document.getElementById('app'));
    ReactDOM.render(<BrowserRouter><Ansp /></BrowserRouter>, document.getElementById('app'));
}
