<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/font-inter/Inter[wght].ttf">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>
<style>

*{
  padding:0;
  margin: 0;

}
  *, *::before *::after{
  box-sizing: border-box;
}
  
body {
  margin: 0;
  font-family: inter;
  font-size: 15px;
}

nav{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items:flex-start;
  height: 160px;
  width: 100%;
}

@font-face {
  font-family: Inter;
  src: url(../font-inter/Inter[wght].ttf);
  src: url(../font-inter/nter-Italic[wght].tt);
}
 

.topnav{
  display: flex;
  padding-top:25px;
  width: 500px;
  justify-content: space-between;
  align-items: center;
  font-size: 12px;
}

.topnav a {
  display: flex;
  color: #f2f2f2;
  align-items: center;
  text-decoration: none;
  background: #655F59;
  justify-content: center;
  align-items: center;
  padding: 8px 16px 8px 16px;
  border-radius: 32px;
}

.act-btn{
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding-top:25px;
  padding-right:32px;
  height: 100px;
  font-size: 10px;
}

.act-btn a {
  display: flex;
  color: #f2f2f2;
  align-items: center;
  text-decoration: none;  
  background: #655F59;
  justify-content: center;
  align-items: center;
  padding: 8px 16px 8px 16px;
  border-radius: 32px;
  cursor: pointer;
}

.topnav a:hover, .act-btn a:hover {
  background-color: #ddd;
  color: black;
}

.logo {
  width: 32px;
  height: 32px;
  padding-top:25px;
  padding-left:32px;
}

.home{
  display: flex;
  flex-direction: row;
}

.topnav .icon {
  display: none;
}

.menu{
  display: none;
}

@media screen and (max-width: 880px) {
  .topnav a {display: none;}
  .topnav a.icon {
    display: flex;
    cursor: pointer;
  }

  .topnav {
    width: 100%;
    display: flex;
    justify-content: flex-end;
    margin-right:32px;
  }

  nav{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    height: 100px;
    width: 100%;
  }
  
  .act-btn{
    display: none;
  }

  .menu.active{
    position: fixed;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    z-index: 2;
    text-align: center;
    width: 100%;
    height: 160px;
    background-color: #655F59;
  }

  .menu a{
    text-decoration: none;
    list-style: none;
    color: #ddd;
  }

  .menu a:hover, .act-btn a:hover {
    background-color: #ddd;
    color: black;
  }

  
}

@media (min-width: 1500px) {

    body{
      display: flex;
      justify-content: center;
    }

    nav{
      max-width: 1500px;
      position: relative;
      z-index: 1000;
    
  }
}
</style>
<body>

<!-- Navi bar and burger animation -->

<nav>
  <img class="logo" src="../imgs/512x512bb.jpg" alt="">

  <div class="topnav" id="myTopnav">
    <a href="#home">Home</a>
    <a href="#freevsPro">Free Vs Pro</a>
    <a href="#pro">Pro</a>
    <a href="#faq">FAQ</a>
    <a href="#about">About</a>
    <a class="icon" id="btn">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <div class="act-btn">
    <a class="iphone">Download on Iphone</a>
    <a class="android">Download on Android</a>
  </div>

</nav>

<div class="burgermenu">
  <div class="menu" id="menu">
    <a href="#home">Home</a>
    <a href="#freevsPro">Free Vs Pro</a>
    <a href="#pro">Pro</a>
    <a href="#faq">FAQ</a>
    <a href="#about">About</a>
    </a>
  </div>
</div>

<script>
$(document).ready(function() {

function toggleSidebar() {
  $("#btn").toggleClass("active");
  $("#menu").toggleClass("active");
}

$("#btn").on("click tap", function() {
  toggleSidebar();
});

$(document).keyup(function(e) {
  if (e.keyCode === 27) {
    toggleSidebar();
  }
});

});

</script>

</body>
</html>