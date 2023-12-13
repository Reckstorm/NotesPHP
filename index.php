<?php
include (__DIR__ . '/Controller/NotesController.php');
echo '<link href="style.css" rel="stylesheet">';

header('Location: http://localhost:63342/09.12.23/View/NoteView.php');
die;


//echo 'View/NoteView.php';
//$server = "127.0.0.1";
//$database = "mydb";
//$username = "root";
//$password = "";
//
//$conn = mysqli_connect($server, $username, $password, $database);
//if (!$conn){
//    echo '<p>connection failed</p>';
//    echo $conn->error;
//}
//echo '<p>connected</p>';

//$queryInsert = "INSERT INTO `notes`(`title`, `text`) VALUES ('Title Three','Text for the note')";
//if ($conn->query($queryInsert) === TRUE){
//    echo "<p>Added</p>";
//}
//else{
//    echo $conn->error;
//}
//
//$queryUpdate = "UPDATE `notes` SET `title`='UPDATED ONE',`text`='Text for the note'WHERE `id`='1'";
//if ($conn->query($queryUpdate) === TRUE){
//    echo "<p>Updated</p>";
//}
//else{
//    echo $conn->error;
//}
//$queryDelete = "DELETE FROM `notes` WHERE `id`='2'";
//if ($conn->query($queryDelete) === TRUE){
//    echo "<p>Deleted</p>";
//}
//else{
//    echo $conn->error;
//}
//$querySelect = "SELECT * FROM `notes`";
//$result = $conn->query($querySelect);
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"]. " - Title: " . $row["title"]. " - Text " . $row["text"]. " - Date " . $row["date"]. "<br>";
//    }
//} else {
//    echo "0 results";
//}
//
//
//
//mysqli_close($conn);