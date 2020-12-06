<!DOCTYPE html>
<html lang="en">
<head>
</head>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addition</title>
</head>
<link rel="stylesheet" href="css/style.css">

<body class= "bgcolor">
<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">HOME</a>
          </li>
      <li class="nav-item ">
        <a class="nav-link" href="addition.php">ADDITION</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="subtraction.php">SUBTRACTION</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="multiplication.php">MULTIPLICATION</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="division.php">DIVISION</a>
    </li>
  </ul>
</nav>



   


<div class="container">

<div class="row">

<div class="col col-12 col-sm-2"></div>
<div class="col col-12 col-sm-2"></div>

<table class="table table-borderless">
<tr>

    <td>ENTER FIRST NUMBER</td>
    <td><input type="text" class="form-control" id="num1"></td>
</tr>

<tr>
    <td>ENTER SECOND NUMBER</td>
    <td><input type="text" class="form-control" id="num2"></td>
</tr>

<tr>
<td>RESULT</td>
<td><input type="text" class="form-control" id="res"></td>

</tr>

<tr>

<td></td>
<td><button onclick="addition()" class="btn btn-danger">ADD</button></td>

</tr>


</table>





<div class="col col-12 col-sm-2"></div>

</div>



</div>

<script>
function addition(){

var getnum1=parseInt(document.getElementById("num1").value)
var getnum2=parseInt(document.getElementById("num2").value)

var result=getnum1+getnum2

document.getElementById("res").value=result

}





</script>



    
</body>
</html>