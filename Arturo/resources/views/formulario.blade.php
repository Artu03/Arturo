<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Inicia Sesión</title>
    <style>
        body
{
    font-family: Tahoma, Geneva, sans-serif;
    color: #fff;
    background-image: url(https://www.hdwallpaper.nu/wp-content/uploads/2015/02/Lamborghini-Logo-21.jpg);
    background-size: cover;
}
.signin
{
    background: rgba(44,62,80,0.7);
    padding: 40px;
    width: 250px;
    margin: auto;
    margin-top: 90px;
    height: 400px;
    margin-left: 180x;
    
}
form
{
    width: 240px;
    text-align: center;
}
input
{
    width: 240px;
    text-align: center;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
}
input[type=button]:hover
{
    color: #fff;
    background-color: black;
}
h2
{
    color: white;
    
}
a
{
    color: yellow;
    text-decoration: blink;
}
a:hover
{
    color: skyblue;
}
.container
{
    display: flex;
    flex-direction: row;
    width: 100%;
}
::placeholder {
    color:aliceblue;
    opacity: 0.8; /* Firefox */
}


    </style>
</head>
<body>
    <div class="signin">

        <form action="#" method="POST">
        <h2 style="color:#fff;">Log In</h2>
        <input type="text" name="username" placeholder="Username"/><br /><br />
        <input type="password" name="password" placeholder="Password" /><br /><br />
        <input type="submit" value="Log In" /><br /><br />
        <div id="container">
        <a href="#" style=" margin-right:0px; font-size:13px; font-family:Tahoma, Geneva, sans-serif;">Reset password?</a>
            <a href="#" style=" margin-left:30px; font-size:13px; font-family:Tahoma, Geneva, sans-serif;">Forget password</a>
            </div><br /><br /><br /><br /><br /><br />
        Don't have account?<a href="sgnup.html"  style="font-family:'Play', sans-serif;">&nbsp;Sign Up</a>
        
        </form>
        </div>
</body>
</html>