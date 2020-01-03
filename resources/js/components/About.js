import React, { Component } from 'react';
import Title from './Title'

export default class About extends Component {

    render(){
        return (
            <div className="chat users_list">
                <div className="card contacts_card">
                    <Title center="center" title="Despre noi" />
                </div>
            </div>
        );
    }
}

