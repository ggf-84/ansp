import React, {Component} from 'react'
import {Link} from 'react-router-dom'

export default class Navbar extends Component {
    render ()
    {
        return (
            <nav className="navbar navbar-expand-lg navbar-dark bg-dark rounded menu-navbar">
                <button
                className="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarsExample10"
                aria-controls="navbarsExample10"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
                <span className="navbar-toggler-icon" />
                </button>

                <div
                className="collapse navbar-collapse justify-content-md-center"
                id="navbarsExample10"
                >
                    <ul className="navbar-nav">
                        <li className="nav-item">
                            <Link to="/" className="nav-link">Home</Link>
                        </li>
                        <li className="nav-item">
                            <Link to="/about" className="nav-link">About</Link>
                        </li>
                        <li className="nav-item">
                            <Link to="/chart" className="nav-link">Chart</Link>
                        </li>
                    </ul>
                </div>
            </nav>
        )
    }
}