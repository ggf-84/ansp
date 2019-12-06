import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Ansp extends Component {
    render() {
        return (
            <div className="container">
                Welcome to ANSP!
            </div>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<Ansp />, document.getElementById('app'));
}
