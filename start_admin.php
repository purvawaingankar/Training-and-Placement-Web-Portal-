<?php
// check if the user is logged in as an admin

?>
  
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.header {
  position: relative;
  width: 100%;
  height: 60px;
  padding: 0 2%;
  background-color: rgba(255,255,255,0.5);
}

.header a {
  float: left;
  padding: 15px; 
} 

.header-right {
  position: relative;
  padding: 5 0%;
}

.header-right a {
  float: right;
  color: black;
  font-size: 20px;
}

.back-video {
  position: absolute;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: -100;
}

@media(min-aspect-ratio: 16/9){
  .back-video{
    width: 100%;
    height: auto;
  }
}

@media(max-aspect-ratio: 16/9){
  .back-video{
    width: auto;
    height: 100%;
  }
}

.media-icons{
  display: flex;
  justify-content: center;
  align-items: center;
  margin: auto;
  position: fixed;
  bottom: 0;
  width: 100%;
  height: 50px;
  background-color: rgba(255,255,255,0.5);
}

.media-icons a{
  position: relative;
  color: black;
  font-size: 20px;
}

.media-icons a:not(last-child){
  margin-right: 50px;
}

.media-icons a:hover{
  transform: scale();
}

.img
{
width:170px;
height:200px;
padding: 10px 5px 70px 60px;
}

.header button{
    width: 140px;
    height: 27px;
    background-color: #333;
    color: #fff;
    border: none;
    outline: none;
    font-size: 17px;
    cursor: pointer;
    border-radius: 50px;
    margin-top: 1px;
}
a:link {
  color: black;
  background-color: transparent;
  text-decoration: none;
}
</style>
</head>
<body>
<div class="header">
  <div class="header-right">
    <a href="account_admin.php" ><i class="fas fa-user-circle fa-2x"></i></a>
    <a href="index_admin.php"> Add/ View Contents </a>
    <a href="https://docs.google.com/spreadsheets/d/1rdq1QQEIZHG_sYJ4XcXVEXOZFLXm4aGeeqiZXMgsDc8/edit#gid=1277243113"> Candidates Details </a>
  </div>
</div>

<div>
  <a href=""><img src="NHITM_logo.png" alt="logo" class="img"></a><br>
  <video autoplay loop class="back-video" muted plays-inline>
  <source src="video.mp4" type="video/mp4">
  </video>

</div>

<footer>
<div class="media-icons" >
<a href="https://www.facebook.com/nhitm.admission/"><i class="fab fa-facebook"></i></a>
<a href="https://twitter.com/nhitm_official"><i class="fab fa-twitter"></i></a>
<a href="https://www.instagram.com/nhitm_official/"><i class="fab fa-instagram-square"></i></a>
<a href="https://in.linkedin.com/school/new-horizon-institute-of-technology-and-management/"><i class="fab fa-linkedin"></i></a>
</div>
</footer>
</body>
</html>





