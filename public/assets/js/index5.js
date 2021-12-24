$(function(e) {
	'use strict'

	/*-----echart8-----*/
	var chartdata5 = [{
		name: 'Budget',
		type: 'line',
		smooth: true,
		data: [20, 20, 36, 18, 15, 20, 25, 20, 40]
	}];
	var option8 = {
		grid: {
			top: '6',
			right: '0',
			bottom: '17',
			left: '25',
		},
		tooltip: {
			show: true,
			showContent: true,
			alwaysShowContent: true,
			triggerOn: 'mousemove',
			trigger: 'axis',
			axisPointer: {
				label: {
					show: false,
				}
			}
		},
		xAxis: {
			data: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'],
			axisLine: {
				lineStyle: {
					color: 'rgba(119, 119, 142, 0.2)'
				}
			},
			axisLabel: {
				fontSize: 10,
				color: '#77778e'
			}
		},
		yAxis: {
			splitLine: {
				lineStyle: {
					color: 'transparent'
				}
			},
			axisLine: {
				lineStyle: {
					color: 'rgba(119, 119, 142, 0.2)'
				}
			},
			axisLabel: {
				fontSize: 10,
				color: '#77778e'
			}
		},
		series: chartdata5,
		color: ['#d43f8d']
	};
	var chart8 = document.getElementById('echart8');
	var lineChart2 = echarts.init(chart8);
	lineChart2.setOption(option8);

	/*-----Barchart-----*/
	var chartdata = [{
		name: 'Total Budget',
		type: 'bar',
		data: [10, 15, 9, 18, 10, 15, 7, 14],
		symbolSize: 10,
		itemStyle: {
			normal: {
				barBorderRadius: [0, 0, 0, 0],
				color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
					offset: 0,
					color: '#d43f8d'
				}, {
					offset: 1,
					color: '#d43f8d'
				}])
			}
		},
	}, {
		name: 'Total Amount',
		type: 'bar',
		data: [10, 14, 10, 15, 9, 25, 15, 18],
		symbolSize: 10,
		itemStyle: {
			normal: {
				barBorderRadius: [0, 0, 0, 0],
				color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
					offset: 0,
					color: '#0774f8'
				}, {
					offset: 1,
					color: '#0774f8'
				}])
			}
		},
	}];
	var chart = document.getElementById('echart');
	var barChart = echarts.init(chart);
	var option = {
		grid: {
			top: '6',
			right: '0',
			bottom: '17',
			left: '25',
		},
		xAxis: {
			data: ['2014', '2015', '2016', '2017', '2018'],
			axisLine: {
				lineStyle: {
					color: 'rgba(119, 119, 142, 0.2)'
				}
			},
			axisLabel: {
				fontSize: 10,
				color: '#77778e'
			}
		},
		tooltip: {
			show: true,
			showContent: true,
			alwaysShowContent: true,
			triggerOn: 'mousemove',
			trigger: 'axis',
			axisPointer: {
				label: {
					show: false,
				}
			}
		},
		yAxis: {
			splitLine: {
				lineStyle: {
					color: 'rgba(119, 119, 142, 0.2)'
				}
			},
			axisLine: {
				lineStyle: {
					color: 'rgba(119, 119, 142, 0.2)'
				}
			},
			axisLabel: {
				fontSize: 10,
				color: '#77778e'
			}
		},
		series: chartdata,
		color: ['#ff685c', '#32cafe']
	};
	barChart.setOption(option);
	/*-----AreaChart Echart-----*/

	/*sparkline*/
    var randomizeArray = function (arg) {
		var array = arg.slice();
		var currentIndex = array.length,
		temporaryValue, randomIndex;
		while (0 !== currentIndex) {
			randomIndex = Math.floor(Math.random() * currentIndex);
			currentIndex -= 1;

			temporaryValue = array[currentIndex];
			array[currentIndex] = array[randomIndex];
			array[randomIndex] = temporaryValue;
		}
		return array;
    }
    var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46,47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41];
	//Spark1
    var spark1 = {
      chart: {
        type: 'area',
        height: 100,
		width: '100%',
		lineWidth: 0.1,
		borderWidth:1,
        sparkline: {
          enabled: true
        },
      },
      stroke: {
        curve: 'smooth',
		 width: 2,
      },
      fill: {
        opacity: 0.3,
        gradient: {
          enabled: false
        }
      },
      series: [{
		name: 'Work Progress %',
        data: randomizeArray(sparklineData)
      }],
      yaxis: {
        min: 0
      },
      colors: ['#0774f8'],

    }
	var spark1 = new ApexCharts(document.querySelector("#spark1"), spark1);
    spark1.render();
});


