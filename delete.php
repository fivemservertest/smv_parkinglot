<?php 


    include_once('function.php');

    if (isset($_GET['del'])) {
        $reqid = $_GET['del'];
        $deletedata = new DB_con();
        $sql = $deletedata->delete($reqid);
    }

    if ($sql) {
        echo "<script> alert('Success') </script>";
        echo "<script> window.location.href='index.php' </script>";
    } 

?>