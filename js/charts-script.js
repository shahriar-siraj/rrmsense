
window.onload = function () {

//Service Details Chart
if($('#Chart1').length){
    var chartChart1 = new CanvasJS.Chart("Chart1",
    {
      theme: "theme0",
	  backgroundColor: "rgba(0,0,0,0)",
	  colorSet: "redShades",
      animationEnabled: true,
      axisX: {
		margin:0,
		lineColor:"#333333",
		labelFontColor:"#000000",
        interval:1,
        includeZero: false,
		gridThickness: 0.1,
        gridColor: "rgba(0,0,0,0.20)"
        
      },
      axisY:{
		  
		margin:0,
        includeZero: false,
		lineColor:"#333333",
		labelFontColor:"#000000",
        interval:50,
		gridThickness: 0.1,
        gridColor: "rgba(0,0,0,0.20)"
        
      },
	   toolTip:{  
  		fontStyle: "normal"
	  },
      data: [
      {        
        type: "column",
        dataPoints: [
        
        { x: 1, y: 80 },
        { x: 2, y: 50},
        { x: 3, y: 100 },
        { x: 4, y: 150 },
        { x: 5, y: 190 },
        { x: 6, y: 80},
        { x: 7, y: 160 },
        { x: 8, y: 120 },
        { x: 9, y: 190 },
        { x: 10, y: 80},
        { x: 11, y: 120 },
        { x: 12, y: 150 }
        ]
      }
      ]
    });

    chartChart1.render();
	chartChart1 = {};
 
}

};
 