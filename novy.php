<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ryby</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
<h1>Ryby</h1>
 
<div class="alert alert-success">
  <strong>Success!</strong>Vítejte na stránkách ryb.
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="novy.php?s=0">Home</a></li>
      <li><a href="novy.php?s=1">Registrace</a></li>
      <li><a href="novy.php?s=2">Lovy</a></li>
      <li><a href="novy.php?s=3">Lokality</a></li>
    </ul>
  </div>
</nav>
 
   
  
 <?php
  session_start();
  
  if (!isset($_SESSION["strana"]))    $_SESSION["strana"]=0;
  if (!isset($_SESSION["login"]))     $_SESSION["login"]=false;
  
  if (isset($_REQUEST["s"]))
             $_SESSION["strana"] =$_REQUEST["s"];
             
//  if ($_SESSION["login"]==false)    { $_SESSION["strana"]=0; echo "neprihlasen";}
//  if ($_SESSION["login"]==true)     echo  "prihlasen"; 
  
  if (isset($_REQUEST["email"])) prihlaseni();
  if (isset($_REQUEST["jmeno"])) registrace();
   
   switch ($_SESSION["strana"])
   {
    case "0": strana0(); break;   
    case "1": strana1(); break;
    case "2": strana2(); break;
    case "3": strana3(); break;  
    }
    
 
 ?>        
       
</div>

</body>
</html>



<?php 

function prihlaseni()
{
  $email =   $_REQUEST["email"];
  $pwd =     $_REQUEST["pwd"];
  if ($pwd == "12345")
  { 
   $_SESSION["login"]=true;
   echo '
    <div class="alert alert-success">
    <strong>Success!</strong>Byl jste prihlasen.
    </div> 
    ';
    $_SESSION["strana"]=1;
  }
  else
  { 
   echo '
    <div class="alert alert-danger">
    <strong>UnSuccess!</strong>NEBYL jste prihlasen.
    </div> 
    ';
  }
  
  
}

function registrace()
{
if (isset($_POST['registrace'])){
$jmeno = $_REQUEST["jmeno"];
$email = $_REQUEST["email"];
$heslo = $_REQUEST["heslo"];
$reheslo = $_REQUEST["reheslo"];
  if($heslo=$reheslo){
      echo '
    <div class="alert alert-succes">
    <strong>UnSuccess!</strong>BYL jste registrován.
    Vaše údaje $jmeno, $email, $heslo, $reheslo
    </div> 
    ';
      }
}

}
function strana0()
 {
  echo '
  <div class="row">
   <div class="col-sm-7">
      <img src="kapr_obecny.gif" alt="kapr_obecny.gif" title="Kapr obecny" height="242" width="519">
   </div>
   <div class="col-sm-4">
   <br>
   
  <div class="panel-group">
  <div class="panel panel-primary">
    <div class="panel-body">Přihlášení</div>
  </div>
  <div class="panel panel-primary">
  <div class="panel-body">
   
   <form>
   <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email"  id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
   </form>
   </div>
   
   </div>
  </div>
 </div>
 
   
  </div> 
  '; 
  
 }  
   
 function strana1()
 {
 echo '
 
  <div class="panel-group">
  <div class="panel panel-primary">
    <div class="panel-body">Registrace</div>
  </div>
  <div class="panel panel-primary">
  <div class="panel-body">
   
   <form>
   <div class="form-group">
    <label for="jmeno">Jmeno</label>
    <input type="text" class="form-control" name="jmeno"  id="jmeno">
  </div>
   <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email"  id="email">
  </div>
  <div class="form-group">
    <label for="heslo">Heslo:</label>
    <input type="password" class="form-control" name="heslo" id="heslo">
  </div>
  <div class="form-group">
    <label for="reheslo">Znovu heslo:</label>
    <input type="password" class="form-control" name="reheslo" id="reheslo">
  </div>
  </div>
  <button type="submit" class="btn btn-default">Potvrd</button>
   </form>
   </div>
   
   </div>
  </div>
 </div>
 
   
  </div> 
  '; 
 }
  
 function strana2()
 {
 }            
 
 function strana3()
 {
 }
