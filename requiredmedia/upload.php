<div id="fixedpromptupload">
  <button id="jshide" style="float:right"> X </button> <br>
  <label> Upload here: </label>
  <form enctype="multipart/form-data" method="post" name="upload">
    <textarea id="description" name="description" placeholder="I am too lazy to type a description." rows="4" cols="25"></textarea>
    <textarea id="username" name="username" placeholder="email@email.com" rows="1"></textarea> <br>
    <input id="uploadbuttonone" type="file" name="image"/>
    <input type="hidden" name="MAX_FILE_SIZE" value="31234" />
    <input id="uploadbuttontwo" type="submit" name="submit" value="have a go at it!" />
  </form>
  <?php
  require_once('connectvars.php');
  if(isset($_POST['submit'])) {
  $dbc = mysqli_connect(HOST,USER,PASS,DBNAME) or die ('Ah bugger fk shite it failed');
  $description = mysqli_real_escape_string($dbc,trim($_POST['description']));
  $target = 'media/' . time() . $_FILES['image']['name'];
  $temp = $_FILES['image']['tmp_name'];
  $username= $_POST['username'];



  // i het een image?
  //
  // $allowedtypes = array();
  // array_push($allowedtypes, array('imagetype'=>'png','function'=>'imageCreatefromPNG'));
  // array_push($allowedtypes, array('imagetype'=>'jpeg','function'=>'imageCreatefromJPEG'));
  // array_push($allowedtypes, array('imagetype'=>'gif','function'=>'imageCreatefromGIF'));
  //
  //
  //
  // $is_valid=false;
  // $nr=count($allowedtypes);
  //
  // for($i=0;$i<$nr;$i++)
  // {
  //   $image=$allowedtypes[$i]['function']($temp);
  //   if($image!=false) {$is_valid=true;};
  // }


// is_valid = true, dan valid image
//
// if($image===false)
// {
//   // not a png!
//   $image=imageCreatefromPNG($temp);
//   if($image===false)
//   {
//     //  not a png // not a jpeg..
//     $image=imageCreatefromJPEG($temp);
//   }
//   if($image===false)
//   {
//     // not a png // not a jpeg // not a gif
//     $image=imageCreateFromGIF($temp);
//   }
// }


  if(!empty($description)) {
    if(move_uploaded_file($temp,$target)) {
      $query = "INSERT INTO instantmedia (id, date, description, target, username) VALUES (0,NOW(), '$description', '$target', '$username')";
      $result = mysqli_query($dbc,$query) or die('We suck at querying.');
    }
    else {
        echo '<br> Failed!';
              }
    }
  else {
      // $description =['I was too lazy to write a description. Shame on me!']
    echo '<br> You need to construct additional descriptions';
          }
}
  ?>
</div>
