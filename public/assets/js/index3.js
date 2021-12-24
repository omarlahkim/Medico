$(function(e) {
	/*chart-bar*/
 	var chart = c3.generate({
 		bindto: '#chart-monthly', // id of chart wrapper
 		data: {
 			columns: [
 				// each columns data
 				['data1', 11, 8, 35, 18, 19, 17, 33, 39, 48, 57, 39, 63]
 			],
 			type: 'bar', // default type of chart
 			colors: {
 				data1: '#0774f8'
 			},
 			names: {
 				// name of each serie
 				'data1': 'Maximum'
 			}
 		},
 		axis: {
 			x: {
 				type: 'category',
 				// name of each category
 				categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
 			},
 		},
 		bar: {
 			width: 30
 		},
 		legend: {
 			show: false, //hide legend
 		},
 		padding: {
 			bottom: 0,
 			top: 0
 		},
 	});

	/*-----DoughutChart-----*/
	var ctx = document.getElementById("doughutChart");
	ctx.height = 257;
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: [45, 25, 20],
				backgroundColor: ['#0774f8', '#d43f8d', '#09ad95' ],
				hoverBackgroundColor: ['#436bf1', '#d43f8d', '#09ad95']
			}],
			labels: ["Very Satisfied", "satisfied", "Unsatisfied"]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
		}
	});
	/*-----DoughutChart closed-----*/

	/* Chartjs (#revenue) */
	var myCanvas = document.getElementById("revenue");
	myCanvas.height="330";

	var myCanvasContext = myCanvas.getContext("2d");
	var gradientStroke1 = myCanvasContext.createLinearGradient(0, 0, 0, 380);
	gradientStroke1.addColorStop(0, '#d43f8d');
	gradientStroke1.addColorStop(1, '#d43f8d');

	var gradientStroke2 = myCanvasContext.createLinearGradient(0, 0, 0, 300);
	gradientStroke2.addColorStop(0, '#0774f8');
	gradientStroke2.addColorStop(1, '#0774f8');

	var myChart = new Chart(myCanvas, {
		type: 'bar',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "July", "Aug", "Sep", "Oct", "Nov", "Dec"],
			datasets: [{
				label: 'Total Revenue',
				data: [15, 18, 12, 14, 10, 15, 7, 14, 18, 12, 14, 10],
							backgroundColor: gradientStroke1,
							hoverBackgroundColor: gradientStroke1,
							hoverBorderWidth: 2,
							hoverBorderColor: 'gradientStroke1'
			}, {

			    label: 'Total Cost',
				data: [10, 14, 10, 15, 9, 14, 15, 19, 14, 10, 15, 9],
							backgroundColor: gradientStroke2,
							hoverBackgroundColor: gradientStroke2,
							hoverBorderWidth: 2,
							hoverBorderColor: 'gradientStroke2'

			}
		  ]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: '#000',
				bodyFontColor: '#000',
				backgroundColor: '#fff',
				cornerRadius: 3,
				intersect: false,
			},
			legend: {
				display: false,
				labels: {
					usePointStyle: true,
					fontFamily: 'Montserrat',
				},
			},
			scales: {
				xAxes: [{
					 barPercentage: 0.5,
					ticks: {
						fontColor: "#77778e",

					 },
					display: true,
					gridLines: {
						display: true,
						color: 'rgba(119, 119, 142, 0.2)',
						drawBorder: false
					},
					scaleLabel: {
						display: false,
						labelString: 'Month',
						fontColor: 'rgba(0,0,0,0.8)'
					}
				}],
				yAxes: [{
					ticks: {
						fontColor: "#77778e",
					 },
					display: true,
					gridLines: {
						display: true,
						color: 'rgba(119, 119, 142, 0.2)',
						drawBorder: false
					},
					scaleLabel: {
						display: false,
						labelString: 'sales',
						fontColor: '#77778e'
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
	/* Chartjs (#revenue) closed */

});

