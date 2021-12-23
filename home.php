<?php

//====================START PASSWORD WITH SESSION=================================
$username="admin";
$password="admin";
session_start();
if(isset($_SESSION['username']))
{
    echo "<h1 align='center' style='color:white'>MOVIES</h1><br>";
    echo "<a href='logout.php' ><input  style='margin:10px;'  type=button value=LOGOUT name=logout class='btn btn-danger' ></a>";
}
else{
    if($_POST['username'] == $username && $_POST['password'] == $password)
    {
        $_SESSION['username']=$username;
        echo "<script>location.href='home.php'</script>";
    }
    else{
        echo "<script>alert('user name or password incorrect')</script>";
        echo "<script>location.href='index.php'</script>";

    }
}
//====================END PASSWORD WITH SESSION==================================
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>HOME PAGE</title>
    <style>
        body{
            background-size:cover;
            padding: 50px;
            color:black;
            background:rgb(59, 1, 15);
        }
  
    </style>
</head>
<body>
<div class="card-group" style="text-align: center;">

  <div class="card">
    <img src="./7years.jpg" style="height: 250px;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">KUNG FU<BR/>PANDA</h5>
      <p class="card-text">Directed by Alessandro Carloni, Jennifer Yuh Nelson. With Jack Black, Bryan Cranston, Dustin Hoffman, Angelina Jolie. Continuing his "legendary adventures of ...
    </p>
      <form method="POST" action="confirm.php">
        <table align='center'>
            <tr>
                <th colspan="2"><h2 align="center">beställa biljetter</h2></th>
            </tr>
            <tr>
                <td>FIRST NAME </td>
                <td><input type="text" name="fname"  placeholder="enter your first name"></td>
            </tr>
            <tr>
                <td>LAST NAME </td>
                <td><input type="text" name="lname" placeholder="enter your last name"></td>
            </tr>
            <tr>
                <td>AGE </td>
                <td><input type="text" name="age" placeholder=0></td>
            </tr>
            <tr>
                <td align="right" colspan="2"><input type="submit" name="btnsubmit1" value="SUBMIT"  class="btn btn-primary" ></td>
            </tr>
        </table>
    </form>
    </div>    
    <div class="card-footer">
      <small class="text-muted">THIS MOVIE IS ONLY AVAILABLE AGE 7++</small>
    
    </div>
  </div>

  <div class="card">
    <img src="./11years.jpg" style="height: 250px;" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">SIDERMAN<BR/>HOME COMING</h5>
        <p class="card-text">Spider-Man is a 2002 American superhero film based on the Marvel Comics character of the ... Its success led to Spider-Man 2 and Spider-Man 3 in 2004 and 2007, ...</p>
      <form method="POST" action="confirm.php">
        <table align='center'>
            <tr>
                <th colspan="2"><h2 align="center"> beställa biljetter</h2></th>
            </tr>
            <tr>
                <td>FIRST NAME </td>
                <td><input type="text" name="fname"  placeholder="enter your first name"></td>
            </tr>
            <tr>
                <td>LAST NAME </td>
                <td><input type="text" name="lname" placeholder="enter your last name"></td>
            </tr>
            <tr>
                <td>AGE </td>
                <td><input type="text" name="age" placeholder=0></td>
            </tr>
            <tr>
                <td align="right" colspan="2"><input type="submit" name="btnsubmit2" value="SUBMIT"  class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    </div>
    <div class="card-footer">
    <small class="text-muted">AVAILABLE AGE 11 OR OVER 7 WITH MEDLMAN</small>
    </div>
  </div>

  <div class="card">
    <img src="./15years.jpg" style="height: 250px;" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">IT<BR/>CHAPTER 2</h5>
        <p class="card-text">The film tells the story of seven children in Derry, Maine, who are terrorized by the eponymous being, only to face their own personal demons in the process.</p>
    <form method="POST" action="confirm.php">
        <table align='center'>
            <tr>
                <th colspan="2"><h2 align="center"> beställa biljetter</h2></th>
            </tr>
            <tr>
                <td>FIRST NAME </td>
                <td><input type="text" name="fname"  placeholder="enter your first name"></td>
            </tr>
            <tr>
                <td>LAST NAME </td>
                <td><input type="text" name="lname" placeholder="enter your last name"></td>
            </tr>
            <tr>
                <td>AGE </td>
                <td><input type="text" name="age" placeholder=0></td>
            </tr>
            <tr>
                <td align="right" colspan="2"><input type="submit" name="btnsubmit3" value="SUBMIT"  class="btn btn-primary"></td>
            </tr>
        </table>
    </form>       
    </div>
    <div class="card-footer">
    <small class="text-muted">AVAILABLE AGE 115 OR OVER 11 WITH MEDLMAN</small>
    </div>
  </div>
</div>        
</body>
</html>