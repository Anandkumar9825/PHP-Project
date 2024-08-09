<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Side</title>
    <link rel="stylesheet" href="css/style.css">

<style>

*
{
    margin:0;
    padding: 0;
}

.iframe2
{
    width: 100%;
    height: 940px;
    margin-top: -4px;
    background: transparent;
}
.iframe3
{
    width: 100%;
    height: 300px;
    background: transparent;
    margin-top: -40px;
}
.login_text
    {
	 width: 130px;
	 height: 50px;
	 background: transparent;
	 color: white;
     display: flex;
     align-items: center;
     justify-content: center;
	 outline: none;
	 cursor: pointer;
	 font-size: 33px;
	 font-weight: bolder;
	 margin-left: 40px;
     padding: 5px;
    } 
    a
    {       
        text-decoration: none;    
    }
    a:hover
    {
        color: red;
    }
    div
    {
        width:100%;
        background: rgb(4, 186, 50);
        margin-top:-5px;
        display: flex;
        justify-content: center;
    }
</style>
</head>
<body>
    <iframe src="header.php" name="f1" frameborder="0" scrolling="no" class="iframe1"></iframe>
    <iframe src="home.php" name="f2" frameborder="0" class="iframe2"></iframe>
    <iframe src="footer.php" name="f3" frameborder="0" scrolling="no" class="iframe3"></iframe>

  
    <div>
<a class="login_text" href="logout.php">LOGOUT</a>
</div>
</body>
</html>