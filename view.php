<?php include 'header.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Order Information</title>
</head>
<body>
    <h1 class='text-center container mt-5'>Order Details</h1>
    <div class='container'>
        <table class='table table-striped table-bordered table-hover'>
            <thead class='table-info'>
                <tr>
                    <th scope='col'>First Name</th>
                    <th scope='col'>Last Name</th>
                    <th scope='col'>Phone</th>
                    <th scope='col'>Address 1</th>
                    <th scope='col'>Address 2</th>
                    <th scope='col'>City</th>
                    <th scope='col'>Region</th>
                    <th scope='col'>Ham</th>
                    <th scope='col'>Lemon Bar</th>
                    <th scope='col'>Beef</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        $query = "SELECT * FROM delivery WHERE id = $id";
                        $view_orders = mysqli_query($conn, $query);

                        while($row = $view_orders -> fetch_assoc()){
                            $fname = $row['firstname'];
                            $lname = $row['lastname'];
                            $phone = $row['phone'];
                            $address1 = $row['address1'];
                            $address2 = $row['address2'];
                            $city = $row['city'];
                            $region = $row['region'];
                            $ham = $row['ham'];
                            $lemonbar = $row['lemonbar'];
                            $beef = $row['beef'];

                            echo "<tr>";
                            echo "<td>{$fname}</td>";
                            echo "<td>{$lname}</td>";
                            echo "<td>{$phone}</td>";
                            echo "<td>{$address1}</td>";
                            echo "<td>{$address2}</td>";
                            echo "<td>{$city}</td>";
                            echo "<td>{$region}</td>";
                            echo "<td>{$ham}</td>";
                            echo "<td>{$lemonbar}</td>";
                            echo "<td>{$beef}</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>


    <div class='container text-center mt-5'>
        <a href='home.php' class='btn btn-warning mt-5'>Back</a>
    </div>
</body>
</html>

<?php include 'footer.php'?>
