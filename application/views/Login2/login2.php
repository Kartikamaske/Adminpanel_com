<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Transparent Login Form</title>
	<link rel="stylesheet" type="text/css" href="transparent-login-form.css">
	<link href="http://infiniteiotdevices.com/images/logo.png" rel="icon" sizes="16x16" type="image/gif" />
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>

body
{
	margin: 0 auto;
	padding: 0 auto;
	height: 100vh;
	/* background: linear-gradient(45deg,#FC354C, #0ABFBC); */
	background-size: cover;
	font-family: sans-serif;
    background:url('Assets\\images\\img5.png')  center no-repeat ; 

    
}
.loginBox
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 350px;
	height: 400px;
	padding: 40px;
	border-radius: 10px;
	box-sizing: border-box;
	/* background: rgba(255,255,255,.3); */
    background: rgb(186 174 176 / 34%);
	background-position: center;
}
.user
{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	overflow: hidden;
	position: absolute;
	top: calc(-100px/2);
	left: calc(70% - 35%);
}
h2
{
	margin: 0;
	padding: 30px 0 40px;
	color: #BE5869;
	text-align: center;
}
.loginBox p
{
	margin: 0;
	padding: 0;
	font-weight: bold;
	/* color: #fff; */
    color: #101010;
}
.loginBox input
{
	width: 100%;
	margin-bottom: 20px;
}
.loginBox input[type="text"],
.loginBox input[type="password"]
{
	border: none;
	/* border-bottom: 1px solid #fff; */
    border-bottom: 1px solid #0000009c;
	background: transparent;
	outline: none;
	height: 40px;
	/* color: #fff; */
    color:gray;
	font-size: 16px;
}
::placeholder
{
	/* color: rgba(255,255,255,.5); */
    color:gray;
}
.loginBox input[type="submit"]
{
	border:none;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 14px;
	background: linear-gradient(45deg,#FC354C, #0ABFBC);
	cursor: pointer;
	border-radius: 20px;
}
.loginBox input[type="submit"]:hover
{
	background: linear-gradient(45deg,#0ABFBC, #FC354C);
}
.loginBox .a
{
	color: #fff;
	font-size: 14px;
	font-weight: bold;
	text-decoration: none;
}
.loginBox h5
{
	margin: 0;
	padding: 15px 0 0 0;
	text-align: center;
	color: #fff;
}
.loginBox h4
{
	margin: 0;
	padding: 30px;
	text-align: center;
	color: #fff;
}
.loginBox h4 a
{
	text-decoration: none;
	color: #BE5869;
}
ul
{
	margin: 0;
	padding: 0;
	display: flex;
}
ul li
{
	list-style: none;
	float: left;
	top: 10px;
	left: 65px;
	margin: 10px;
	width: 50px;
	height: 50px;
	line-height: 50px;
	text-align: center;
	background: #fff;
	font-size: 40px;
	border-radius: 20%;
	position: relative;
	transition: .5s ease-in-out;
	z-index: 1;
}
ul li a
{
	font-size: 35px;
}
ul li .facebook
{
	color: #3b5999; 
}

ul li .google
{
	color: #dd4b39;
}

ul li a:before
{
	content: '';
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	border-radius: 20%;
	transform: scale(0);
	transition: .5s ease-in-out;
	z-index: -1;
}
ul li a:before
{
	background:linear-gradient(45deg,#FC354C, #0ABFBC); 
}
ul li a:hover:before
{
	transform: scale(.9);
}
ul li a:hover
{
	color: #fff;
}
.txt2:hover
{
	color: black;
}

@media screen and (max-width: 988px)
{
	.loginBox
	{
		width: 350px;
		height: 560px;
	}
}
@media screen and (max-width: 640px)
{
	.loginBox
	{
		width: 350px;
		height: 560px;
		right: 10px;
	}
}
@media screen and (max-width: 320px)
{
	.loginBox
	{
		right: 10px;
		width: 320px;
		height: 560px;
	}
}
</style>
<body>
	<div class="loginBox">
		<img src="https://png.pngtree.com/png-vector/20191003/ourmid/pngtree-user-login-or-authenticate-icon-on-gray-background-flat-icon-ve-png-image_1786166.jpg" class="user">
		<h2>Login Here</h2>
		<form>
			<p>Username</p>
			<input type="text" name="" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="" placeholder="••••••••">
			<input type="submit" name="" value="LOGIN">
		</form>
	</div>
</body>
</html>