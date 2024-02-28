<?php 

    require_once('helper.php');


    $matkul = $_POST['matkul'];

    $query = "INSERT INTO matkul(matkul) VALUES ('$matkul')";
    $sql = mysqli_query($db_connect, $query);


    if ($sql) {
        echo json_encode ( array( 'message' => 'created!') );
    } else {
        echo json_encode ( array('message' => 'error') );
    }

?>
