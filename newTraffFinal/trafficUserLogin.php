<!DOCTYPE html>
<html lang="en" >
<style>
body{
	margin:0;
	color:#6A6F8C;
	background-image:url('https://images.pexels.com/photos/552791/pexels-photo-552791.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
	background-size: cover;
    background-position: center;
	display: flex;
	lex-direction:column;
	justify-content:center;
	align-items:center;
	font-family: 'Work Sans', sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:670px;
	position:relative;
	box-shadow:0 12px 15px 0 rgba(31, 42, 64, 0.72),0 17px 50px 0 rgba(31, 42, 64, 0.72);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(31, 42, 64, 0.72);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	-webkit-transform:rotateY(180deg);
	        transform:rotateY(180deg);
	-webkit-backface-visibility:hidden;
	        backface-visibility:hidden;
	-webkit-transition:all .4s linear;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#41ce43;
}
.login-form{
	min-height:345px;
	position:relative;
	-webkit-perspective:1000px;
	        perspective:1000px;
	-webkit-transform-style:preserve-3d;
	        transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input ,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input ,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .select input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#ee7611;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	-webkit-transition:all .2s ease-in-out 0s;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	-webkit-transform:scale(0) rotate(0);
	        transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	-webkit-transform:scale(0) rotate(0);
	        transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	-webkit-transform:scale(1) rotate(45deg);
	        transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	-webkit-transform:scale(1) rotate(-45deg);
	        transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	-webkit-transform:rotate(0);
	        transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	-webkit-transform:rotate(0);
	        transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}

.info p{
	margin:auto;
	padding:5px;
}
.info.good{
	border:1px solid #ee7611;
	background-color: #47cf73;
	color:#416d50;
}

input{
	height:35px;
	padding: 5px 5px;
	margin: 10px 0px;
	background-color:#e0dada;
	border:none;
}
select{
	height:35px;
	padding: 5px 5px;
	margin: 10px 0px;
	background-color:#e0dada;
	border:none;
}
button{
	height:40px;
	padding: 5px 5px;
	margin: 10px 0px;
		font-weight:bold;
	background-color:#37506b;
	border:none;
	color:#e0dada;
	cursor:pointer;
	font-size:16px;
}
button:hover{
	background-color:#1b2d41;
}

@-webkit-keyframes shake{
	from, to{
		-webkit-transform: translate3d(0, 0, 0);
		transform:translate3d(0,0,0);
	}
	10%,30%,50%,70%,90%{
		-webkit-transform: translate3d(-10px, 0, 0);
		transform:translate3d(-10px,0,0);
	}
	20%,40%,60%,80%{
		-webkit-transform: translate3d(10px, 0, 0);
		transform:translate(10px,0,0);
	}
}

.shake{
	animation-name: shake;
	animation-duration:1s;
	/*animation-fill-mode: both;*/
}

@media screen and (max-width: 780px) {
	section{
		width:90%;
	}
}

.ng-invalid.ng-dirty{
    border-color:red;
}

.ng-valid.ng-dirty{
    border-color:green;
}
</style>

<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="cs/style.css">

</head>
<body>
<h1>   CUSTOMER LOGIN </h1>
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="new_sign-in.php" method="POST"> <!-- login -->
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="user" type="text" class="input" required>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password" required>
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <button type="submit" class="button">Sign-In</button>
        </div>
      </form>
      <form class="sign-up-htm" id="si" action="new_sign-up.php" method="POST"> <!-- sign up -->

			<!--	<div class="group">
          <label for="user_id" class="label">UserId:</label>
          <input id="user_id" name="user_id" type="text" placeholder="Enter User ID" class="input" required  minlength="1" maxlength="4" size="10" >
        </div> -->
        <div class="group">
          <label for="user" class="label">Username:</label>
          <input id="username" name="user" type="text" placeholder="Enter username" class="input" required  minlength="4" maxlength="15" >
        </div>
				<div class="group">
          <label for="travel_area" class="label">TravelArea:</label>
					<select id="travel_area" name="travel_area" style="width:375px" required>
					        <option value="Unselected"  disabled selected>Select the Area<option>
					        <option value="Cantonment">Cantonment</option>
					        <option value="Domlur">Domlur</option>
					        <option value="Indiranagar">Indiranagar</option>
					        <option value="Malleswaram">Malleswaram</option>
					        <option value="Rajajinagar">Rajajinagar</option>
					        <option value="Seshadripuram">Seshadripuram</option>
					    </select>
        </div><div class="group">
          <label for="vec_no" class="label">Vehicle-No:</label>
          <input id="vec_no" name="vec_no" type="text" placeholder="Enter Vehicle-No" class="input" required  minlength="4" maxlength="10" >
        </div>
				<div class="group">
          <label for="phone_no" class="label">PhoneNo:</label>
          <input id="phone_no" name="phone_no" type="tel" placeholder="Enter Phone-No" class="input" required  minlength="10" maxlength="10">
        </div>
        <div class="group">
          <label for="pass" class="label">Password:</label>
          <input id="password" name="password" type="password" class="input" data-type="password" required minlength="4" maxlength="8" >
        </div>
        <!-- <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass" type="password" class="input" data-type="password">
        </div> -->
        <div class="group"> <!-- submit -->
          <button type="submit" class="button">Sign-Up</button>
        </div>
      </form>
    </div>
  </div>
</div>
