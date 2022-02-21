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
// $query = "SELECT * FROM members WHERE fee BETWEEN 200 AND 400";
// $result = mysqli_query($DB, $query);

/////// LIKE ///////
// $query = "SELECT * FROM members WHERE tag LIKE '%php%'";
// $result = mysqli_query($DB, $query);

/////// GROUP ///////
// $query = "SELECT type, AVG(age) AS 'agePorcentage', SUM(fee) AS 'totalFee' ";
// $query .= "FROM members GROUP BY type";
// $result = mysqli_query($DB, $query);

/////// INNER, LEFT, RIGHT, CROSS ///////

/////// INNER ///////
// $query = "SELECT members.member_id, members.name, courses.course_id, courses.name ";
// $query .= "FROM members INNER JOIN courses ON courses.name = members.name";
// $result = mysqli_query($DB, $query);

/////// LEFT ///////
// $query = "SELECT members.member_id, members.name, ";
// $query .= "courses.course_id, courses.name AS 'name in course'";
// $query .= "FROM members LEFT JOIN courses USING(name)";
// $result = mysqli_query($DB, $query);

/////// RIGHT ///////
// $query = "SELECT members.member_id, members.name, ";
// $query .= "courses.course_id, courses.name AS 'name in course'";
// $query .= "FROM members RIGHT JOIN courses USING(name)";
// $result = mysqli_query($DB, $query);
// showAll($result);

/////// CROSS ///////
$query = "SELECT members.member_id, members.name, ";
$query .= "courses.course_id, courses.name AS 'name in course'";
$query .= "FROM members CROSS JOIN courses";
$result = mysqli_query($DB, $query);
showAll($result);

function showAll($result){
  while($row = mysqli_fetch_assoc($result)){
    echo "<pre>",print_r($row),"</pre>";
  }
}

?>