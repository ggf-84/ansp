import React, {Component} from 'react'
import Title from './Title'
import {Link} from 'react-router-dom';

export default class Default extends Component {
    render() {
        return (
            <div className="chat users_list">
                <div className="card contacts_card">
                    <Title title="page not found" center="center" />
                    <div className="error-404">404</div>
                    <Link to="/" className="main-link">return home</Link>
                </div>
            </div>
        )
    }
}

