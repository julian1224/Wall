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
    <div id="leftad" class="advert">
      <a href="http://www.steamcommunity.com/id/linkismeama"><img src="adleft.png"/></a>
   </div>
    <div id="rightad" class="advert">
  <a href="http://www.steamcommunity.com/id/linkismeama"><img src="adright.png"/></a>
    </div>
    <span class="nav" id="leftpage">
      <a href="wall.html"><img src="leftpage.png" alt="wow wtf"></img></a>
    </span>
    <div id="verticad"><h1 id="maintitle"> WELCOME </h1></div>
    <span class="nav" id="rightpage">
      <a href="wall2.html"><img src="rightpage.png" alt="something went really wrong then"></img></a>
    </span>
    <h2> I exist. </h2>
<body>
  <div class="content">
    <?php

    ?>
</div>
  <hr>
</body>
<footer>
  <p> Oh my, look at the time! </p>
<div id="txt">  </div>
</footer>
</html>
