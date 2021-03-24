<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMV Parkinglot</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>

    <div class="container">

    <h1 class="mt-5">Request Report</h1>

    <button onclick="window.location.href='/smv_parkinglot/insert.php'"> Make a Request </button>
    
    <table id="mytable" class="table table-borderd table-striped">
        <thead>
            <th>#</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Phone number</th>
            <th>Arrival Time</th>
            <th>Departure Time</th>
            <th>Reason</th>
            <th>Create At</th>
            <th>Delete</th>
        </thead>

        <tbody>

            <?php
                include_once('function.php');
                $fetchdata = new DB_con();
                $sql = $fetchdata->fetchdata();
                while($row = mysqli_fetch_array($sql)) {
            
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['phonenumber']; ?></td>
                    <td><?php echo $row['arrivaltime']; ?></td>
                    <td><?php echo $row['departuretime']; ?></td>
                    <td><?php echo $row['reason']; ?></td>
                    <td><?php echo $row['createdAt']; ?></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>

            <?php

                }

            ?>
        
        </tbody>
    
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>