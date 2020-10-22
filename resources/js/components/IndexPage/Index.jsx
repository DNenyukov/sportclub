import React from 'react';
import Header from '../Header/Header';
import About from '../AboutPage/About';
import Body from '../IndexPage/Body';
import Treners from '../Treners/Treners';
import { HashRouter, Route, Link } from "react-router-dom";
class Index extends React.Component {
    render() {
        return (
            <HashRouter>

              <div className="container">
                        <ul>
                            <li className="one"><Link to="/">Home</Link></li>
                            <li className="two"><Link to="/about">About</Link></li>
                            <li className="three"><Link to="/treners">Treners</Link></li>
                        
                            <hr />
                        </ul>
                    </div> 
              <div className="main-route-place">
                <Route exact path="/" component={Body} />
                <Route path="/about" component={About} />
                <Route path="/treners" component={Treners} />
              </div>

          </HashRouter>
        );
      }
     
    }


export default Index; 