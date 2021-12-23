<?php
    echo "<h1 align='center'style='color:white'>confirm</h1><br>";
    echo "<a href='logout.php' ><input  style='margin:10px;'  type=button value=LOGOUT name=logout class='btn btn-danger' ></a>";

//==================START ACTION===================================
if(isset($_POST['btnsubmit1'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname']; 
    $age= $_POST['age']; 
    age1($age);

}
if(isset($_POST['btnsubmit2']) ){
    $fname = $_POST['fname'];
    $lname = $_POST['lname']; 
    $age = $_POST['age'];  
    age2($age);
}
if(isset($_POST['btnsubmit3']) ){
    $fname = $_POST['fname'];
    $lname = $_POST['lname']; 
    $age = $_POST['age'];  
    age3($age);
}
if(isset($_POST['pbtnsubmit']) ){

    $pfname = $_POST['pfname'];
    $plname = $_POST['plname']; 
  
    printTicket($pfname);
}
//==================END ACTION===================================

//==================START AGE TEST===================================
function age2($age){
    if($age<7)
    {
        echo "<script>alert('DU ÄR VÄLDIGT UNG FÖR ATT GÅ PÅ BIO')</script>";
        echo "<script>location.href='home.php'</script>";


    }
    elseif($age>=7 && $age<11){
        echo "<script>alert('MÅLSMAN INFORMATION KRÄVS')</script>";
        include 'parentinfo.php';
       


    }
    elseif($age>=11){
        echo "<script>alert('VÄLKOMMEN TILL FILMEN')</script>";  
        printTicket();
    }

}

function age1($age){
    if($age<7)
    {
        echo "<script>alert('DU ÄR VÄLDIGT UNG FÖR ATT GÅ PÅ BIO')</script>";
        echo "<script>location.href='home.php'</script>";    
    }
    elseif($age>=7){
        echo "<script>alert('VÄLKOMMEN TILL FILMEN')</script>";  
        printTicket();
    }
}

function age3($age){
    if($age<7)
    {
        echo "<script>alert('DU ÄR VÄLDIGT UNG FÖR ATT GÅ PÅ BIO')</script>";
        echo "<script>location.href='home.php'</script>"; 


    }
    elseif($age>=7 &&  $age<11){
        echo "<script>alert('DU ÄR VÄLDIGT UNG FÖR ATT GÅ PÅ DEN HÄR FILMEN')</script>";
        echo "<script>location.href='home.php'</script>"; 

        
    }
    elseif($age>=11 &&  $age<15){
        echo "<script>alert('MÅLSMAN INFORMATION KRÄVS')</script>";
        include 'parentinfo.php';
      
    }
    elseif($age>=15){
        echo "<script>alert('VÄLKOMMEN TILL FILMEN')</script>";  
        printTicket();

    }
}
//==================END  AGE TEST===================================




//==================START OVERWRITE FUNCTION===================================


function printTicket($pfname="NO NEED"){ 
    $malsman=$pfname;
    $ticket=rand(5000,1000000) ;           
    $message=" hello ". $GLOBALS['fname'].$GLOBALS['lname'] ."<br/>". "your age is :".  $GLOBALS['age'] ."<br/>";
    $message.="YOU ARE QUALIFIED TO GET A TICKET CONGRATIOLATION :)"."<br/>";
    $message.="YOUR RANODM TICKET NUMBER IS : [<span style=color:red>".$ticket."</span>]";
    $message.="<br/>"."malsman name :".$malsman;
   echo creatMassageFrame( $message);
}
//==================END OVERWRITE FUNCTION===================================



  function creatMassageFrame( $message){
    $frame="<div class='nice-frame'>";
    $frame.=$message;
    $frame.="</div>";
    return $frame;
}

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <title>CONFIRMATION</title>
    <style>
        .nice-frame{
            padding: 10px;
            text-align: center;
            width: 400px;
            margin: 20px auto;
            border-radius: 10px;
            background-color: #EEE;
            border: 1px solid #CCC;
            
        }
     
        body{
            background-size:cover;
            padding: 50px;
            color:black;
            background:rgb(59, 1, 15);
        }
  
   
    </style>
</head>
<body>

 
</body>
</html>
  


