<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylesheet.css">
        <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</head>
<body>
<div id="wrapper">
<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">Portfolio</span>
   
</div>
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class="active" href="https://learningtasksftf.herokuapp.com/CLE1MT.html"target="_blank">CLE 1</a>
  <a class="active" href="https://gadiano.herokuapp.com/recipes.html"target="_blank">LEARNING TASK 2</a>
  <a class="active" href="https://learningtasksftf.herokuapp.com/index.html"target="_blank">LEARNING TASK 3</a>
  <a class="active" href="https://learningtasksftf.herokuapp.com/LT4/index.html"target="_blank">LEARNING TASK 4</a>
  <a class="active" href="https://github.com/GADIANO/learningtasks/blob/LT2/LT5/index.html"target="_blank">LEARNING TASK 5</a>
</div>
</div>
   
</body>
</html> 
