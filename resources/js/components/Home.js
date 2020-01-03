import React, {Component} from 'react'
import Title from './Title'

export default class Home extends Component {
    
    render() {
        return (
            <div className="chat users_list">
                <div className="card contacts_card">
                    <Title center="center" title="Bun venit pe saitul nostru, ANSP!"/>
                </div>
            </div>
        )
    }
}

