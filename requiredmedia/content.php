<div class="content">
  <?php
  require_once('requiredmedia/connectvars.php');
  $dbc = mysqli_connect(HOST, USER, PASS, DBNAME) or die ("Errorioni");

  $column = 'date'; $order = 'DESC';
      if(isset($_POST['submit_sort'])) {
        switch($_POST['sortform']) {
          case 'date_desc':$column = 'date';
                           $order = 'DESC';
                           break;
          case 'date_asc': $column = 'date';
                           $order = 'ASC';
                           break;
          case 'name_asc': $column = 'name';
                           $order = 'ASC';
                           break;
          case 'name_desc':$column = 'name';
                           $order = 'DESC';
                           break;
          case 'sort_random':
                           $column = 'rand()';
                           $order = ' ';
                           break;
                  default: $column = 'date'; $order = 'DESC'; break;
        }
      }
        if (isset($_POST['submit_search'])) {
            $searchterm = mysqli_real_escape_string($dbc, trim($_POST['searchterm']));
            $searchterm = '%' . $searchterm . '%';
        } else {
          $searchterm = '%';
        };

        if ($searchterm == '%MA%') {
          echo '<div id="friedchicken"> <img src="requiredmedia/ma.png" alt="TheLivingTombstone"/><br> How did you even get here? </div>';
          $isEaster = true;
        }
        elseif ($searchterm == '%true hero%') {
          echo '<div id="friedchicken"> <img src="requiredmedia/128920.gif" alt="Gregorian" /><br><img src="requiredmedia/884390.gif" /><br> Meep merp mofo </div>';
          $isEaster = true;
        }
        elseif ($searchterm == '%Aerodynamism%') {
          echo '<div id="friedchicken"> <img src="requiredmedia/515.jpg" alt="Nyanners"/><br> How I like my girls. ;^) </div>';
          $isEaster = true;
        }
        elseif ($searchterm == '%bees%') {
          echo '<div id="friedchicken"> <img src="requiredmedia/13647.jpg" alt="Cage the Elephant"/><br> Caged in the midnight of my soul</div>';
          $isEaster = true;
        }
        elseif ($searchterm == '%where%') {
          echo '<div id="friedchicken"> <img src="requiredmedia/hat.png" alt="Turampu-kun"/><br> You finally found him! <br> Now kill him because he is a timelord vampire! </div>';
          $isEaster = true;
        }
        else {
          $isEaster = false;
        }
        if ($isEaster){
        echo 'Congrats, you found me.';
} else {
$query = "SELECT * FROM instantmedia WHERE description LIKE '$searchterm' ORDER BY $column $order";
$result = mysqli_query($dbc, $query) or die
 ('Error SELECTING');


  if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_array($result)) {
      $target = $row['target'];
      $date = $row['date'];
      $username = $row['username'];
      $description = $row['description'];
      echo '<div id="post"> <img src="' . $target . '" /><br>' . 'On ' . $date . ', ' . $username . ' wrote: ' . '<br>' . '<p id="cssdescription">' . $description .'</p></div>';
          }
            }
  else if (!$isEaster) {
   echo '<div id="postnull"> <img src="requiredmedia/empty.png" /><br> There is nothing here. Go home. </div>';
   }
   else {
     echo 'nothing?';
   }
  mysqli_close($dbc);
}

?>

</div>
