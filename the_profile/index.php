<?php
/**
 * Created by IntelliJ IDEA.
 * User: timotina.boakye
 * Date: 20/06/2018
 * Time: 09:36
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Timotina's profile
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>

        body{
            background-color: gray;
        }
        .profile{
            text-align: justify;
            color: white;
        }

        .profile li{
            list-style: none;
            padding-right: 40px;
        }
        .description{
            color: deepskyblue;
            text-align: left;
            padding-left: 10px;
            font-size: 40px;
        }
        header {
            background-color: lightgray;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: white;
            width: 1081px;
            margin-left: 35px;
        }

        .topnav ul{
            width: 100%;
            height: 50%;
        }
        .topnav ul > li{
            display:inline;
            padding: 50px 50px;
        }
        .topnav a {
            color: #f2f2f2;
            text-align: center;
            text-decoration: none;
            font-size: 17px;
        }

        section{
            float:left;
            padding:15px;
            background-color: dimgray ;
            height: 500px;
            width: 315px;
            margin-left: 35px;
        }

        aside{
            float:left;
            background-color: darkturquoise;
            height: 529px;
            width: 795px;
            margin-right: 24px;
        }

        .bio{
            padding:10px;
            color:white;
            float:left;
            width:345px;
        }
        .profile-pic{
            padding:10px;
            color:white;
            float:left;
            width:330px;
        }
        .profile-pic img{
            width:300px;
            height:400px;
            margin-top:20px;
            margin-left:30px;
            border:10px solid dimgray;
        }

        .topnav ul li img{
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
              <header class="topnav">
                  <ul>
                      <li><a href="#home"><img src="https://cdn.icon-icons.com/icons2/37/PNG/512/home_house_3526.png">Home</a></li>
                      <li><a href="#resume"><img src="https://www.shareicon.net/data/512x512/2015/10/28/663316_resume_512x512.png"/> Resume</a></li>
                      <li><a href="#news"><img src="https://images.vexels.com/media/users/3/131564/isolated/preview/91b1c6155bd9df295d57daef5e44301c-newspaper-icon-by-vexels.png"/> News</a></li>
                      <li><a href="#service"><img src="https://www.navaho.co.uk/wp-content/uploads/2017/07/managed-services-1.png"/> Services</a></li>
                      <li><a href="#contact"><img src="https://www.freeiconspng.com/uploads/very-basic-address-book-icon-512x512-pixel-22.png"/> Contact</a></li>
                  </ul>
              </header>
          <div class="section">
              <div>
                  <section class="profile">
                      <h2>TIMOTINA BOAKYE</h2>
                      <ul class="skills">
                      <li> Consultant</li> <br/>
                          <li> Entrepreneur</li> <br/>
                          <li> Career Counselling</li> <br/>
                          <li> Human Resource Expert</li> <br/>

                      </ul>
                  </section>


              </div>

              <aside>
                  <div class="bio">
                      <h2>FOCUS. <br/> DRIVE. <br/> AMBITION.</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis dictum justo eget vehicula. Donec ultricies pharetra eleifend. Vestibulum condimentum suscipit sagittis. Duis dictum lectus nisl, sit amet fermentum sem finibus rutrum. Sed volutpat, libero eu lacinia volutpat, ex felis sagittis nisi, in interdum purus mi ut elit. .</p>
                  </div>
                  <div class="profile-pic">
                      <img src="images/timo.jpg"
                  </div>
              </aside>
          </div>
   </body>
</html>
