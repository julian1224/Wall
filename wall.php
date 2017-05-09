<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="wall.css">
    <title> Yare yare daze.</title>
    <script>

          function startTime() {
          var vandaag = new Date();
        var h = vandaag.getHours();
        var m = vandaag.getMinutes();
          var s = vandaag.getSeconds();
          m = checkTime(m);
          s = checkTime(s);
          document.getElementById('txt').innerHTML =
          h + ":" + m + ":" + s;
          var y = setTimeout(startTime, 500);
        }
      function checkTime(y) {
        if (y < 10) {y = "0" + y};
        return y;
      }

    </script>

  </head>
  <body onload = startTime()>
    <h2 id="secondtitle"> LINKPRODUCTION </h2>
    <div id="leftad" class="advert">
      <a href="http://www.steamcommunity.com/id/linkismeama"><img src="adleft.png" alt="Bolero of Fire"/></a>
   </div>
    <div id="rightad" class="advert">
  <a href="http://www.steamcommunity.com/id/linkismeama"><img src="adright.png" alt="Porter Robinson"/></a>
    </div>
    <!-- <span class="nav" id="leftpage">
      <a href="wall.php"><img src="leftpage.png" alt="wow wtf"/></a>
    </span> -->
    <div id="verticad"><h1 id="maintitle"> WELCOME </h1></div> <br><br>
    <!-- <span class="nav" id="rightpage">
      <a href="wall2.php"><img src="rightpage.png" alt="something went really wrong then"/></a>
    </span> -->
    <?php
    $loggedIn = true;
    include 'requiredmedia/search.php';
    if (!$loggedIn){
    include 'requiredmedia/login.php';
    include 'requiredmedia/register.php';
    }
    if ($loggedIn) {
    include 'requiredmedia/upload.php';
  }
    include 'requiredmedia/content.php';

          ?>
<script src="requiredmedia/jshide.js"></script>

  <footer>
    <p> Oh my, look at the time! </p>
  <div id="txt">  </div>
  </footer>
    </body>
</html>






<!-- Why rip off just Snapchat, when you can just rip everything off? <br>
We at Link Productions wondered the same thing. <br>
But now, we are more resolved than ever. With all our heart we can say, screw the client. <br>
Let's do it our way. <br>
As long as I make money.  -->


<!-- I gotta tell you folks, I gotta say, and I see some great people in this sub, terrific people, I gotta say, you guys have the best site.
There are great sites out there, but we have the best sub here, fantastic sub here.

People call me up and ask me, they say, they go, Mr. Trump, what's the best sub?
Believe me folks I get asked all the time, ask anyone.
And I tell them, this is the best sub, it's great, love it. -->
