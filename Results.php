<!DOCTYPE html>
<html>
<head>
<title>BMI Result</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Results</h1>

<div class="resultBox">

<p>First Name: <span id="fname"></span></p>
<p>Last Name: <span id="lname"></span></p>
<p>Age: <span id="age"></span></p>
<p>BMI: <span id="bmi"></span></p>
<p>Status: <span id="status"></span></p>

</div>

<button onclick="goBack()" class="backBtn">Back</button>

</div>

<script>

document.getElementById("fname").innerHTML = localStorage.getItem("fname");
document.getElementById("lname").innerHTML = localStorage.getItem("lname");
document.getElementById("age").innerHTML = localStorage.getItem("age");
document.getElementById("bmi").innerHTML = localStorage.getItem("bmi");
document.getElementById("status").innerHTML = localStorage.getItem("status");

function goBack(){
window.location="index.html";
}

</script>

</body>
</html>