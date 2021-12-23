<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <link rel="stylesheet" href="./hint.css-2.6.0/hint.base.min.css">


    <title>LOGIN PAGE</title>
    <style>
        body{
            background-image: url(./login.jpg);
            background-repeat: no-repeat;
            background-size:cover;
            padding: 100px;
            color:black;
        }
        .nice-frame{
            padding: 10px;
            text-align: center;
            width: 400px;
            margin: 20px auto;
            border-radius: 10px;
            background-color: #EEE;
            border: 1px solid #CCC;
            box-shadow: 5px 5px 5px;
            background-image: url(./15years.jpg);
            background-size:cover;
            font-weight: bolder;
        }
        #log{
            color: white;
        }
    </style>
</head>
<body>
    <form CLASS="nice-frame hint--bottom-right" action="home.php" method="POST"  aria-label="password and user name is :admin">
        <table align="center">
            <tr>
                <th colspan="2"><h2 align="center" id="log">LOGIN</h2></th>
            </tr>
            <tr>
                <td CLASS="hint--bottom-right" aria-label="admin">USERNAME</td>
                <td><input type="text" name="username" CLASS="hint--bottom-right" aria-label="admin"></td>
                
            </tr>
            <tr>
                <td CLASS="hint--bottom-right" aria-label="admin">PASSWORD</td>
                <td><input type="password" name="password" CLASS="hint--bottom-right" aria-label="admin"></td>
            </tr>
            <tr>
                <td align="right" colspan="2"><input class="btn btn-warning" type="submit" name="login" value="LOGIN"></td>
            </tr>
        </table>
    </form>  
</body>
</html>