<div id="loginbox">

<label> Register to my site. Do it now. </label>
<form method="post" action="requiredmedia/process.php" name="register">
  <textarea id="regusername" name="regusername" placeholder="email@email.com" rows="1"></textarea> <br>
  <input type="password" id="regpassword" name="regpassword" placeholder="Drowssap" rows="1"></textarea> <br>
    <input type="password" id="regpassword2" name="regpassword2" placeholder="Confirm password" rows="1"></textarea> <br>
  <input id="uploadbuttontwo" type="submit" name="submit" value="have a go at it!" />
</form>
</div>



<?php

if(isset($_POST['submit'])) {
//$dbc = mysqli_connect(HOST,USER,PASS,DBNAME) or die ('Ah bugger fk shite it failed');
$registeruser = mysqli_real_escape_string($dbc,trim($_GET['regusername']));
$registerpass = mysqli_real_escape_string($dbc,trim($_GET['regpassword']));
$confirmpass = mysqli_real_escape_string($dbc,trim($_GET['regpassword2']));
}
if ($registerpass == $confirmpass) {
  $newpassword = $confirmpass;
}
?>
