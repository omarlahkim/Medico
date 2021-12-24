$(function(e) {

    /*-----echart1-----*/
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
	var chart = document.getElementById('echart1');
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
		color: ['#0774f8', '#09ad95', '#d43f8d', ]
	};
	barChart.setOption(option);

	/* Sparkelline bar chart*/
	$(".sparkline_bar1").sparkline([2, 4, 3, 4, 5, 4, 5, 0], {
		type: 'bar',
		height: 78,
		width:250,
		barWidth: 4,
		barSpacing: 7,
		colorMap: {
			'9': '#a1a1a1'
		},
		barColor: '#d43f8d'
	});
	/* Sparkelline bar chart closed */

	/*-----AreaChart Echart-----*/
	var ctx = document.getElementById("widgetChart1");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
			type: 'line',
			datasets: [{
				data: [24, 30, 20, 28, 39, 22, 40],
				label: '',
				backgroundColor: 'rgba(7, 116, 248,0.6)',
				borderColor: '#0774f8',
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
				titleFontColor: '#000',
				bodyFontColor: '#000',
				backgroundColor: '#fff',
				cornerRadius: 0,
				intersect: false,
			},
			scales: {
				xAxes: [{
					gridLines: {
						color: 'transparent',
						zeroLineColor: 'transparent'
					},
					ticks: {
						fontSize: 2,
						fontColor: 'transparent'
					}
				}],
				yAxes: [{
					display: false,
					ticks: {
						display: false,
					}
				}]
			},
			title: {
				display: false,
			},
			elements: {
				line: {
					borderWidth: 2
				},
				point: {
					radius: 0,
					hitRadius: 10,
					hoverRadius: 4
				}
			}
		}
	});


	/*-----AreaChart Echart-----*/
	var ctx = document.getElementById("widgetChart2");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
			type: 'line',
			datasets: [{
				data: [24, 30, 20, 28, 39, 22, 40],
				label: '',
				backgroundColor: 'rgba(212, 63, 141,0.6)',
				borderColor: '#d43f8d',
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
				titleFontColor: '#000',
				bodyFontColor: '#000',
				backgroundColor: '#fff',
				cornerRadius: 0,
				intersect: false,
			},
			scales: {
				xAxes: [{
					gridLines: {
						color: 'transparent',
						zeroLineColor: 'transparent'
					},
					ticks: {
						fontSize: 2,
						fontColor: 'transparent'
					}
				}],
				yAxes: [{
					display: false,
					ticks: {
						display: false,
					}
				}]
			},
			title: {
				display: false,
			},
			elements: {
				line: {
					borderWidth: 2
				},
				point: {
					radius: 0,
					hitRadius: 10,
					hoverRadius: 4
				}
			}
		}
	});
	/*-----AreaChart Echart-----*/
	var ctx = document.getElementById("widgetChart3");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
			type: 'line',
			datasets: [{
				data: [24, 30, 20, 28, 39, 22, 40],
				label: '',
				backgroundColor: 'rgba(19, 191, 166,0.6)',
				borderColor: '#09ad95',
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
				titleFontColor: '#000',
				bodyFontColor: '#000',
				backgroundColor: '#fff',
				cornerRadius: 0,
				intersect: false,
			},
			scales: {
				xAxes: [{
					gridLines: {
						color: 'transparent',
						zeroLineColor: 'transparent'
					},
					ticks: {
						fontSize: 2,
						fontColor: 'transparent'
					}
				}],
				yAxes: [{
					display: false,
					ticks: {
						display: false,
					}
				}]
			},
			title: {
				display: false,
			},
			elements: {
				line: {
					borderWidth: 2
				},
				point: {
					radius: 0,
					hitRadius: 10,
					hoverRadius: 4
				}
			}
		}
	});


	/*---- Apex Chart -----*/
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
    var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46];


	//Spark1
    var spark1 = {
      chart: {
        type: 'area',
        height: 50,
        sparkline: {
          enabled: true
        },
      },
      stroke: {
       curve: 'smooth',
		width:2
      },
      fill: {
        opacity: 0.3,
        gradient: {
          enabled: false
        }
      },
      series: [{
		name: 'Production Volume',
        data: randomizeArray(sparklineData)
      }],
      yaxis: {
        min: 0
      },
      colors: ['#0774f8'],

    }
	var spark1 = new ApexCharts(document.querySelector("#spark1"), spark1);
    spark1.render();

	//Spark2
    var spark2 = {
      chart: {
        type: 'area',
        height: 50,
        sparkline: {
          enabled: true
        },
      },
      stroke: {
       curve: 'smooth',
		width:2
      },
      fill: {
        opacity: 0.3,
        gradient: {
          enabled: false
        }
      },
      series: [{
		name: 'Sales Revenue',
        data: randomizeArray(sparklineData)
      }],
      yaxis: {
        min: 0
      },
      colors: ['#d43f8d'],

    }
	var spark2 = new ApexCharts(document.querySelector("#spark2"), spark2);
    spark2.render();

	//Spark3
    var spark3 = {
      chart: {
        type: 'area',
        height: 50,
        sparkline: {
          enabled: true
        },
      },
      stroke: {
       curve: 'smooth',
		width:2
      },
      fill: {
        opacity: 0.3,
        gradient: {
          enabled: false
        }
      },
      series: [{
		name: 'Total Orders',
        data: randomizeArray(sparklineData)
      }],
      yaxis: {
        min: 0
      },
      colors: ['#09ad95'],

    }
	var spark3 = new ApexCharts(document.querySelector("#spark3"), spark3);
    spark3.render();

	//Spark4
    var spark4 = {
      chart: {
        type: 'area',
        height: 50,
        sparkline: {
          enabled: true
        },
      },
      stroke: {
       curve: 'smooth',
		width:2
      },
      fill: {
        opacity: 0.3,
        gradient: {
          enabled: false
        }
      },
      series: [{
		name: 'Total profit',
        data: randomizeArray(sparklineData)
      }],
      yaxis: {
        min: 0
      },
      colors: ['#f82649'],

    }
	var spark4 = new ApexCharts(document.querySelector("#spark4"), spark4);
    spark4.render();

 });