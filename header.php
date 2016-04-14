<html>
  <head>
  
  <title>StogaHub Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){       
                var scroll_start = 0;
                var startchange = $('#startchange');
                var offset = startchange.offset();
                    if (startchange.length){
                $(document).scroll(function() { 
                    scroll_start = $(this).scrollTop();
                    if(scroll_start > offset.top) {
                          $(".navbar-default").css('background-color', '#ffffff');
                       } else {
                          $('.navbar-default').css('background-color', 'transparent');
                       }
                   });
                    }
                });
  </script>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
  <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
  </head>
    <script src="jquery.js"></script> 
    
  <style>
  body {
    background-color: rgb(239, 245, 245);
  }
  .navbar .li {
    font-size: 20px;
    -webkit-transition: 1s 3s;
  }
  .dropdown:hover .dropdown-menu {
    display: block;
  }
.navbar-default {
  background-color: #800000;
  border-color: #122778;
}
.navbar-default .navbar-brand {
  color: #e5e9ea;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #9ca8ff;
}
.navbar-default .navbar-text {
  color: #e5e9ea;
}
.navbar-default .navbar-nav > li > a {
  color: #e5e9ea;
  font-size: 18px;
  font-family: Consolas;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #9ca8ff;
}
.navbar-default .navbar-nav > li > .dropdown-menu {
  font-family: Consolas;
  font-size: 16px;
  background-color: /*#111656*/#833333;
  padding-top: 15px;
  padding-bottom: 15px;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a {
  color: #e5e9ea;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:hover,
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:focus {
  color: #9ca8ff;
  background-color: #122778;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > .divider {
  background-color: #122778;
}
.navbar-default .navbar-nav .open .dropdown-menu > .active > a,
.navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
.navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
  color: #9ca8ff;
  background-color: #122778;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #9ca8ff;
  background-color: #122778;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #9ca8ff;
  background-color: #122778;
}
.navbar-default .navbar-toggle {
  border-color: #122778;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #122778;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #e5e9ea;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e5e9ea;
}
.navbar-default .navbar-link {
  color: #e5e9ea;
}
.navbar-default .navbar-link:hover {
  color: #9ca8ff;
}

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #e5e9ea;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #9ca8ff;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #9ca8ff;
    background-color: #122778;
  }
}
  </style>
  <body>
<!-- Navigation Bar -->
<nav class="navbar-default navbar-inverse navbar-fixed-top">
<!--<nav class="navbar navbar-inverse navbar-fixed-top">-->
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">STOGAHUB</a>
    </div>
    <!--../Main%20Files/CHSLOGO.jpg-->
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-center">
        <li class="active" style="font-size: 14px"><a href="../index.html">Home</a></li>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="../Main%20FIles/members.html">Members 
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://www.tesd.net/stoga">CHS Website</a></li>
            <li><a href="http://www.stogamusic.com/">Stoga Music</a></li>
            <li><a href="http://www.stoga.net">Stoga Library Index (Old)</a></li> 
            <li><a href="http://www.spoke.news/">Stoga News</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="../Main%20Files/clubs.html">Clubs 
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../Main%20Files/clubs.html">Club List</a></li>
            <li><a href="#">Register a Club</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Useful Stuff 
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://pinnacle.tesd.net/Pinnacle/PIV/Logon.aspx?ReturnUrl=%2fPinnacle%2fPIV%2fDefault.aspx">Pinnacle</a></li>
            <li><a href="https://connection.naviance.com/family-connection/auth/login/?hsid=conestoga">Naviance</a></li>
            <li><a href="https://app.schoology.com/login">Schoology</a></li>
            <li><a href="../Main%20Files/reference.html">Library Referneces</a></li>
            <li><a href="../Main%20Files/Tester.html">Alpha Testers</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="../Main%20Files/about.html">About 
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../Main%20Files/about.html">About</a></li>
            <li><a href="../Main%20Files/whoWeAre.html">Who We Are</a></li>
            <li><a href="../Main%20Files/Calendar.html">Calendar</a></li>
            <li><a href="../Main%20Files/contact.html">Contact Us</a></li>            
          </ul>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="../Main%20Files/Login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="../Main%20Files/Profile.html"><span class="glyphicon glyphicon-user"></span> My Account</a></li> -->
        <?php
        
        $text1 = '<li><a href="../Main%20Files/Login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
        $text2 = '<li><a href="../Main%20Files/Profile.html"><span class="glyphicon glyphicon-user"></span> My Account</a></li>';
          if(!isset($_COOKIE['sId'])) {
            echo "$text1";
              } 
              else {
                echo "$text2";
              }
          
        ?>
      </ul>
    </div>
  </div>
</nav>    
</body>
</html>