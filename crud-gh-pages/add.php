<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Adicionar Arquivo</title>
</head>
<body>
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.html" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Blog Guerra de Consoles</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Fornecedores <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="https://www.xbox.com/pt-BR" class="w3-bar-item w3-button">Microsoft</a>
      <a href="https://www.playstation.com/pt-br/network/" class="w3-bar-item w3-button">Sony</a>

    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#pricing" class="w3-bar-item w3-button">Price</a>
    <a href="#contact" class="w3-bar-item w3-button">Trabalhe conosco</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="imagens/be9d0df86f3e49059cfa1345cf980e15_59wn.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">BlOG GUERRAS DOS CONSOLES</button>
  </div>
</div>




</div>
</div>
 <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <p class="w3-center w3-large"></mark></p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-half">
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) {
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$Observacao=$_POST['Obeservacao'];
// checking empty fields
if(empty($name) || empty($age) || empty($email)|| empty($Observacao)) {
if(empty($name)) {
echo "<font color='red'>Name field is empty.</font><br/>";
}
if(empty($age)) {
echo "<font color='red'>Age field is empty.</font><br/>";
}
if(empty($email)) {
echo "<font color='red'>Email field is empty.</font><br/>";
}
if(empty($Observacao)) {
echo "<font color='red'>Email field is empty.</font><br/>";
}
//link to the previous page
echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
} else {
// if all the fields are filled (not empty)
//insert data to database
$result = mysqli_query($mysqli, "INSERT INTO users(name,age,email,Obeservacao) VALUES('$name','$age','$email','$Observacao')");
//display success message
echo "<font color='green'>Data added successfully.";
echo "<br/><a href='index.php'>View Result</a>";
}
}
?>
</body>
</html>