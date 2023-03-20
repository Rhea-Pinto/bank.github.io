<?php
include 'connect.php';
$query = "SELECT * from customers";
$result = mysqli_query($conn, $query);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/allusers.css">
    <title>All Users</title>
</head>


<body class="d-flex flex-column min-vh-100">
    <?php
    include 'navbar.php';
    ?>
    <div class="container-fluid p-4 bg-1">
        <div class="container-fluid p-4 bg-2">
            <div class="card">
                <div class="card-header text-center">
                    <p class="heading-content m-0">All Customers</p>
                </div>

                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr class="table-head">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Balance</th>
                            <th>Transfer</th>
                        </tr>
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <td><?php echo $row['uid'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['balance'] ?></td>
                                <td><a href=" transfermoney.php?id=<?php echo $row['uid']; ?>" class="btn btn1">Send Money</a></td>
                        </tr>
                    <?php
                            }
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>