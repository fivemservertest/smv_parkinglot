<?php

    include_once('function.php');

    $insertdata = new DB_con();

    if (isset($_POST['insert'])) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phonenumber = $_POST['phonenumber'];
        $arrivaltime = $_POST['arrivaltime'];
        $departuretime = $_POST['departuretime'];
        $reason = $_POST['reason'];

        $sql = $insertdata->insert($firstname, $lastname, $phonenumber, $arrivaltime, $departuretime, $reason);

        if ($sql) {
            echo "<script> alert('Success') </script>";
            echo "<script> window.location.href='index.php' </script>";
        } else {
            echo "<script> alert('Fail') </script>";
            echo "<script> window.location.href='insert.php' </script>";
        }

    }

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Request</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>

    <div class="container">
    
        <h1 class="mt-5">Insert Request</h1>

        <button onclick="window.location.href='/smv_parkinglot/index.php'"> Back to Report </button>

        <hr>
    
        <form>
            <div class="mb-3">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control" name="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control" name="lastname">
            </div>
            <div class="mb-3 form-check">
                <label for="phonenumber" class="form-label">Phone number</label>
                <input type="text" class="form-control" name="phonenumber">
            </div>
            <div class="mb-3 form-check">
                <label for="arrivaltime" class="form-label">Arrival Time</label>
                <input type="datetime-local" class="form-control" name="arrivaltime">
            </div>
            <div class="mb-3 form-check">
                <label for="departuretime" class="form-label">Departure Time</label>
                <input type="datetime-local" class="form-control" name="departuretime">
            </div>
            <div class="mb-3 form-check">
                <label for="reason">Reason</label>
                <textarea class="form-control" name="reason" cols="30" row="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>