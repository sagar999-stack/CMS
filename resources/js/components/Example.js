import React from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter as Router,Switch,Route } from "react-router-dom"
import Nav from './Nav';
import Sidebar from "./Sidebar"
import Footer from "./Footer"



function Example() {
    return (
      <Router>
          <>
          <Nav/>
          <Sidebar/>
            <Switch>



            </Switch>

            <Footer/>
          </>
      </Router>

    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
