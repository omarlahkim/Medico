$(function(e) {
	'use strict';

	 // MORRIS LINECHART
	var line = new Morris.Line({
		element: 'line-chart',
		resize: true,
		data: [{
 			y: '2011 Q1',
 			item1: 2666,
 			item2: 2666
 		}, {
 			y: '2011 Q2',
 			item1: 2778,
 			item2: 2294
 		}, {
 			y: '2011 Q3',
 			item1: 4912,
 			item2: 1969
 		}, {
 			y: '2011 Q4',
 			item1: 3767,
 			item2: 13597
 		}, {
 			y: '2012 Q1',
 			item1: 6810,
 			item2: 1914
 		}, {
 			y: '2012 Q2',
 			item1: 15670,
 			item2: 4293
 		}, {
 			y: '2012 Q3',
 			item1: 4820,
 			item2: 3795
 		}, {
 			y: '2012 Q4',
 			item1: 15073,
 			item2: 5967
 		}, {
 			y: '2013 Q1',
 			item1: 10687,
 			item2: 4460
 		}, {
 			y: '2013 Q2',
 			item1: 8432,
 			item2: 5713
 		}],
		xkey: 'y',
 		ykeys: ['item1', 'item2'],
 		labels: ['Income', 'Outcome'],
 		lineColors: ['#0774f8', '#d43f8d'],
		pointRadius: 0,
 		hideHover: 'auto'
	});

	/* Chartjs (#areaChart1) */
	var ctx = document.getElementById('areaChart1').getContext('2d');

    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            type: 'line',
            datasets: [ {
				label: 'Total Quantity',
				data: [30, 70, 30, 100, 50, 130, 100, 140],
				backgroundColor: 'transparent',
				borderColor: '#0774f8',
				pointBackgroundColor:'#0774f8',
				pointHoverBackgroundColor:'#0774f8',
				pointBorderColor :'#0774f8',
				pointHoverBorderColor :'#0774f8',
				pointBorderWidth :2,
				pointRadius :4,
				pointHoverRadius :2,
				borderWidth:3
            }, ]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#6b6f80',
                bodyFontColor: '#6b6f80',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            scales: {
                xAxes: [ {
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                } ],
                yAxes: [ {
                    display:false,
                    ticks: {
                        display: false,
                    }
                } ]
            },
            title: {
                display: false,
            },
            elements: {
                line: {
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    });
	/* Chartjs (#areaChart1) closed */

	/* Chartjs (#areaChart2) */
	var ctx = document.getElementById('areaChart2').getContext('2d');

    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            type: 'line',
            datasets: [ {
				label: 'Total Cost',
				data: [24, 18, 28, 21, 32, 28,30],
				backgroundColor: 'transparent',
				borderColor: '#d43f8d',
				pointBackgroundColor:'#d43f8d',
				pointHoverBackgroundColor:'#d43f8d',
				pointBorderColor :'#d43f8d',
				pointHoverBorderColor :'#d43f8d',
				pointBorderWidth :2,
				pointRadius :4,
				pointHoverRadius :2,
				borderWidth: 3
            }, ]
        },
        options: {

            maintainAspectRatio: false,
            legend: {
                display: false
            },
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#6b6f80',
                bodyFontColor: '#6b6f80',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            scales: {
                xAxes: [ {
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                } ],
                yAxes: [ {
                    display:false,
                    ticks: {
                        display: false,
                    }
                } ]
            },
            title: {
                display: false,
            },
            elements: {
                line: {
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    });
	/* Chartjs (#areaChart2) closed */

	/* Chartjs (#areaChart3) */
	var ctx = document.getElementById('areaChart3').getContext('2d');

    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            type: 'line',
            datasets: [ {
				label: 'Total Revenue',
				data: [30, 70, 30, 100, 50, 130, 100, 140],
				backgroundColor: 'transparent',
				borderColor: '#09ad95',
				pointBackgroundColor:'#09ad95',
				pointHoverBackgroundColor:'#09ad95',
				pointBorderColor :'#09ad95',
				pointHoverBorderColor :'#09ad95',
				pointBorderWidth :2,
				pointRadius :4,
				pointHoverRadius :2,
				borderWidth: 3
            }, ]
        },
        options: {

            maintainAspectRatio: false,
            legend: {
                display: false
            },
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#6b6f80',
                bodyFontColor: '#6b6f80',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            scales: {
                xAxes: [ {
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                } ],
                yAxes: [ {
                    display:false,
                    ticks: {
                        display: false,
                    }
                } ]
            },
            title: {
                display: false,
            },
            elements: {
                line: {
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    });
	/* Chartjs (#areaChart3) closed */

	/* Chartjs (#areaChart4) */
	var ctx = document.getElementById('areaChart4').getContext('2d');

    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            type: 'line',
            datasets: [ {
				label: 'Total Profit',
				data: [24, 18, 28, 21, 32, 28,30],
				backgroundColor: 'transparent',
				borderColor: '#f7b731',
				pointBackgroundColor:'#f7b731',
				pointHoverBackgroundColor:'#f7b731',
				pointBorderColor :'#f7b731',
				pointHoverBorderColor :'#f7b731',
				pointBorderWidth :2,
				pointRadius :4,
				pointHoverRadius :2,
				borderWidth: 3
            }, ]
        },
        options: {

            maintainAspectRatio: false,
            legend: {
                display: false
            },
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#6b6f80',
                bodyFontColor: '#6b6f80',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            scales: {
                xAxes: [ {
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                } ],
                yAxes: [ {
                    display:false,
                    ticks: {
                        display: false,
                    }
                } ]
            },
            title: {
                display: false,
            },
            elements: {
                line: {
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    });
	/* Chartjs (#areaChart4) closed */


	/*----BarChartEchart----*/
	var echartBar = echarts.init(document.getElementById('index'), {
		color: ['#0774f8', '#d43f8d'],
		categoryAxis: {
			axisLine: {
				lineStyle: {
					color: '#77778e'
				}
			},
			splitLine: {
				lineStyle: {
					color: ['rgba(119, 119, 142, 0.2)']
				}
			}
		},
		grid: {
			x: 40,
			y: 20,
			x2: 40,
			y2: 20
		},
		valueAxis: {
			axisLine: {
				lineStyle: {
					color: '#77778e'
				}
			},
			splitArea: {
				show: false,
				areaStyle: {
					color: ['rgba(255,255,255,0.1)']
				}
			},
			splitLine: {
				lineStyle: {
					color: ['rgba(119, 119, 142, 0.2)']
				}
			}
		},
	});
	echartBar.setOption({
		tooltip: {
			trigger: 'axis'
		},
		legend: {
			data: ['Revenue', 'Expenses']
		},
		toolbox: {
			show: false
		},
		calculable: false,
		xAxis: [{
			type: 'category',
			data: ['Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
		}],
		yAxis: [{
			type: 'value'
		}],
		series: [{
			name: '',
			type: 'bar',
			data: [30.0, 42.3, 60.2, 70.3, 60.8, 19.8, 27.8, 85.63, 52.63, 14.25, 63.25, 12.32],
			markPoint: {
				data: [{
					type: 'max',
					name: ''
				}, {
					type: 'min',
					name: ''
				}]
			},
			markLine: {
				data: [{
					type: 'average',
					name: ''
				}]
			}
		}, {
			name: ' Expenses',
			type: 'bar',
			data: [16.6, 40.9, 50.0, 16.4, 28.7, 80.7, 178.6, 188.2, 48.7, 18.8, 6.0, 2.3],
			markPoint: {
				data: [{
					name: 'Purchased Price',
					value: 182.2,
					xAxis: 7,
					yAxis: 183,
				}, {
					name: 'Purchased Price',
					value: 2.3,
					xAxis: 11,
					yAxis: 3
				}]
			},
			markLine: {
				data: [{
					type: 'average',
					name: ''
				}]
			}
		}]
	});

	/*---- MorrisDonutChart----*/
	new Morris.Donut({
		element: 'morrisBar8',
		data: [{
			value: 50,
			label: 'Technology'
		}, {
			value: 25,
			label: 'Furniture'
		}, {
			value: 15,
			label: 'Office Suppliers'
		}],
		backgroundColor: 'rgba(119, 119, 142, 0.2)',
		labelColor: '#25252a',
		colors: ['#0774f8', '#d43f8d', '#09ad95'],
		formatter: function(x) {
			return x + "%"
		}
	}).on('click', function(i, row) {
		console.log(i, row);
	});
	var chartdata = [{
		name: 'sales',
		type: 'bar',
		data: [10, 15, 9, 18, 10, 15]
	}, {
		name: 'profit',
		type: 'line',
		smooth: true,
		data: [8, 5, 25, 10, 10]
	}, {
		name: 'growth',
		type: 'bar',
		data: [10, 14, 10, 15, 9, 25]
	}];
});





