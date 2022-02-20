<?php
include "../config.php";

// $query = "SELECT * FROM members";
// $result = mysqli_query($DB, $query);


/////// WHERE IN ///////
// $query = "SELECT * FROM members WHERE member_id IN (1,5,6)";
// $query = "SELECT * FROM members WHERE name IN ('Julia', 'Sofia')";
// $result = mysqli_query($DB, $query);

/////// ORDER BY ///////
// $query = "SELECT * FROM members ORDER BY member_id DESC";
// $result = mysqli_query($DB, $query);

/////// LIMIT ///////
// $query = "SELECT * FROM members WHERE fee >= 200 ORDER BY fee DESC LIMIT 2";
// $result = mysqli_query($DB, $query);

/////// BETWEEN ///////
$query = "SELECT * FROM members WHERE fee BETWEEN 200 AND 400";
$result = mysqli_query($DB, $query);


showAll($result);

function showAll($result){
  while($row = mysqli_fetch_assoc($result)){
    echo "<pre>",print_r($row),"</pre>";
  }
}

?>