<?php include 'header.php' ?>

<div> 
    <h1 class='text-center'>Delivery Orders</h1>
    <a href='create.php' class='btn btn-outline-dark mb-2'>
        <i class='bi bi-person-plus'></i> Create New Order</a>

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
                    <th scope='col' colspan='3' class='text-center'>CRUD Operations</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                <?php
                $query="SELECT * FROM delivery";
                $view_orders = mysqli_query($conn, $query); 

                while($row = mysqli_fetch_assoc($view_orders)){
                    $id = $row['id'];
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
                    // echo "<th scope='row'>{$fname}</th>";
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

                    echo "<td class='text-center'><a href='view.php?&id={$id}' class='btn btn-primary'><i class='bi bi-eye'></i>View</a></td>"; 
                    echo "<td class='text-center'><a href='update.php?edit&id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i>EDIT</a></td>"; 
                    echo "<td class='text-center'><a href='delete.php?&delete&id={$id}' class='btn btn-danger'><i class='bi bi-trash'></i>DELETE</a></td>"; 
                    echo "</tr>";
                }
                ?>
            </tbody>

        </table>
    </a>
</div>

<?php include 'footer.php' ?>