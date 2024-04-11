<?php include 'header.php' ?>

<?php
    if(isset($_POST['create'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];
        $region = $_POST['region'];
        $ham = $_POST['ham'];
        $lemonbar = $_POST['lemonbar'];
        $beef = $_POST['beef'];

        $query = "INSERT INTO delivery(firstname, lastname, phone, address1, address2, city, region, ham, lemonbar, beef) VALUES('{$fname}', '{$lname}', '{$phone}', '{$address1}', '{$address2}', '{$city}', '{$region}', '{$ham}', '{$lemonbar}', '{$beef}')";
        $add_order = mysqli_query($conn, $query);

        if(!$add_order){
            echo "Something went wrong ". mysqli_error($conn);
        } else{
            echo "<script type='text/javascript'>alert('Order added successfully!')</script>";
        }
    }
?> 


<h1 class='text-center container mt-5'>Meal Delivery Order Form</h1>

<div class='container'>
    <form action='' method='post'>
        <div class='form-group'>
            <label for='firstname' class='form-label'>Name</label> <br>
            <input type='text' name='firstname' class='form-control' placeholder='First Name'>
            <input type='text' name='lastname' class='form-control' placeholder='Last Name'>
        </div> <br>

        <div class='form-group'>
            <label for='phone' class='form-label'>Phone Number</label> <br>
            <input type='number' name='phone' class='form-control' placeholder='### ### ####'>
        </div> <br>

        <div class='form-group'>
            <label for='address1' class='form-label'>Delivery Address</label> <br>
            <input type='text' name='address1' class='form-control' placeholder='Street Address'> 
            <input type='text' name='address2' class='form-control' placeholder='Street Address 2'> 
            <input type='text' name='city' class='form-control' placeholder='City'>
            <input type='text' name='region' class='form-control' placeholder='Region'>
        </div> <br>

        <div class='form-group'>
            <label for='ham' class='form-label'>Smoked Honey Maple Ham</label> <br> $15.00
            <input type='number' name='ham' class='form-control' value='0' min="0" max="10" required> 
        </div> <br> 

        <div class='form-group'>
            <label for='lemonbar' class='form-label'>Lemon Bar</label> <br> $4.50
            <input type='number' name='lemonbar' class='form-control' value='0' min="0" max="10" required> 
        </div> <br> 

        <div class='form-group'>
            <label for='beef' class='form-label'>Beef Stroganoff</label> <br> $20.00
            <input type='number' name='beef' class='form-control' value='0' min="0" max="10" required> 
        </div> <br> 

        <div class='form-group'>
            <input type='submit' name='create' class='btn btn-primary mt-2' value='Submit'>
        </div>
    </form>
</div>

<div class='container text-center mt-5'>
    <a href='home.php' class='btn btn-warning mt-5'>Back</a>
</div>

<?php include 'footer.php' ?>