<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<head>
<style>
#rcorners1 {
  border-radius: 25px;
  background: #73AD21;
  padding: 20px;
  width: 200px;
  height: 150px;
}
#myDIV {
  width: 300px;
  height: 200px;
  background: red url('smiley.gif') no-repeat top left/5px 5px;
  animation: mymove 5s infinite;
}

@keyframes mymove {
  50% {background: blue bottom right/50px 50px;}
}
</style>
</head>
<html>
<body>
  <?php

$txt = "Nummers!";
$x = 5;
$y = 10.5;


echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
?>
<body id ="bodyId" ></body>
<button onclick="getRandomColor()">Change background color</button>
</html>

<p>bwaah</p>
  <script>

  // Define Data
  var data = [{
    x:xArray,
    y:yArray,
    mode:"markers"
  }];

  // Define Layout
  var layout = {
    xaxis: {range: [40, 160], title: "Square Meters"},
    yaxis: {range: [5, 16], title: "Price in Millions"},
    title: "House Prices vs. Size"
  };

  // Display using Plotly
  Plotly.newPlot("myPlot", data, layout);
  </script>

<div id="myDIV" style="width:100%;max-width:1200px"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<p id="rcorners1">Vage grafiek!</p>
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = [50,60,70,80,90,100,110,120,130,140,150];
var yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: true,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});
</script>
<?php

echo "Today is " . date("Y-m-d") . "<br>";
echo "so its " . date("l");
?>
</body>
<script>
   //The ColorCode() will give the code every time.
   function ColorCode() {
      var makingColorCode = '0123456789ABCDEF';
      var finalCode = '#';
      for (var counter = 0; counter < 6; counter++) {
         finalCode =finalCode+ makingColorCode[Math.floor(Math.random() * 16)];
      }
      return finalCode;
   }
   //Function calling on button click.
   function getRandomColor() {
      $("#bodyId").css("background-color", ColorCode());
   }
</script>
</html>
