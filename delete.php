<?php
/// require connect database
require_once 'connect.php';

// delete db
$id = $_POST['id'];

// query delete
$query = mysqli_query($conn, "DELETE FROM skincare WHERE id_skincare=$id");

// Redirect to index
header("Location:index.php");
