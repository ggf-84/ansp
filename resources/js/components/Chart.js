import React, {Component} from 'react'
import {Bar, Line, Pie} from 'react-chartjs-2'
import axios from 'axios'
import Title from './Title'

export default class Chart extends Component {
    constructor(){
        super()

        this.state = {
            chartData: {},
            chartTitle: '',
            legendPosition: 'right',
            datasetBgColor: '#047ad0',
        }

        this.handleChange = this.handleChange.bind(this);
    }

    handleChange(e) {
            // this.setState({ message: 'hi chart.js' });
    };

    componentDidMount(){
        this.getChartData();
    }

    getChartData(){
        axios.get('/api/chart')
        .then(response => {

            if(response.status === 200){
                
                var obj = response.data[0];
                var labelList = Object.keys(Object.entries(obj.years).reduce((a,[k,v]) => (v ? {...a, [k]:v} : a), {}));
                var dataList = Object.values(Object.entries(obj.years).reduce((a,[k,v]) => (v ? {...a, [k]:v} : a), {}));
                var titleCategory = obj.category.title;
                var datasetList = [];

                dataList.map((val, i)=>{ 
                    var res = val.split("/")
                    datasetList.push(res[1])
                }),
                
                this.setState({
                    chartTitle: titleCategory,
                    chartData : {
                        labels: labelList,
                        datasets:[{
                            label: obj.category.title,
                            data: datasetList,
                            backgroundColor: this.state.datasetBgColor,
                        }]
                    }
                });
            }

        }).catch((error) => {
            console.log(error)
        });
    }

    render() {
        self = this;
        return (
            <div className="chat users_list">
                <div className="card contacts_card">
                    <Title center="center" title="Chart" />
                    <div>
                        <Bar
                        data={this.state.chartData}
                        options={{
                            title:{
                                text: this.state.chartTitle,
                                fontSize: 25
                            },
                            legend:{
                                display:true,
                                position: this.state.legendPosition
                            },
                            tooltips:{
                                custom: function(tooltipModel) {
                                    function getBody(bodyItem) {
                                        return bodyItem.lines;
                                    }
                                    
                                    if (tooltipModel.body) {
                                        // var titleLines = tooltipModel.title || [];
                                        // var bodyLines = tooltipModel.body.map(getBody);
                                        // console.log('body: ' +  JSON.stringify(titleLines))
                                        // console.log('title: ' +  JSON.stringify(bodyLines))
                                        tooltipModel.title = [self.state.chartTitle +': ' + tooltipModel.title]
                                    }
                                }

                            }
                        }}
                        /> 
                    </div>

                </div>
            </div>
        )
    }
}

