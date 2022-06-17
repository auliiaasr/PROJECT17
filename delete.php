    <?php
/// require connect database
require_once 'connect.php';

// id data
$id = $_POST['id'];

// query delete
$query = mysqli_query($conn, "DELETE FROM skincare WHERE id_skincare=$id");
