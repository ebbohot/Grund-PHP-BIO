
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>PARENTS INFO</title>
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
        </style>
    </head>
    <body>    
        <form method="post" action="confirm.php" CLASS="nice-frame">
            <div >    
                <label for="fname">PARENT FIRST NAME</label>
                <input TYPE="text" name="pfname" placeholder="enter your PARENT first name"><BR>        
                <label for="lname">PARENT LAST NAME</label>
                <input TYPE="text" name="plname" placeholder="enter your PARENT last name"><br>               
                <input CLASS="btn btn-primary" type="submit" value="SUBMIT" name="pbtnsubmit">
                <label>totla :300 KR</label>        
            </div>
        </form>     
    </body>
    </html>