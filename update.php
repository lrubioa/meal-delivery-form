<?php include 'header.php' ?>

<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $query = "SELECT * FROM delivery WHERE id = {$id}";
    $view_orders = mysqli_query($conn, $query); 

    while($row = mysqli_fetch_assoc($view_orders)){
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
    }

    if(isset($_POST['update'])){
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

        $query = "UPDATE delivery SET firstname='{$fname}', lastname='{$lname}', phone='{$phone}', address1='{$address1}', address2='{$address2}', city='{$city}', region='{$region}', ham='{$ham}', lemonbar='{$lemonbar}', beef='{$beef}' WHERE id = {$id}";
        $update_order = mysqli_query($conn, $query);

        echo "<script type='text/javascript'>alert('Order data updated successfully!')</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order Information</title>
</head>
<body>
    <h1 class='text-center'>Update Order Details</h1>
    <div class='container'>
        <form action='' method='post'>
            <div class='form-group'>
                <label for='firstname'>First Name</label>
                <input type='text' name='firstname' class='form-control' value='<?php echo $fname ?>'> 
            </div>   

            <div class='form-group'>
                <label for='lastname'>Last Name</label>
                <input type='text' name='lastname' class='form-control' value='<?php echo $lname ?>'> 
            </div>   

            <div class='form-group'>
                <label for='phone'>Phone Number</label>
                <input type='number' name='phone' class='form-control' value='<?php echo $phone ?>'> 
            </div>   

            <div class='form-group'>
                <label for='address1'>Address 1</label>
                <input type='text' name='address1' class='form-control' value='<?php echo $address1 ?>'> 
                
                <label for='address2'>Address 2</label>
                <input type='text' name='address2' class='form-control' value='<?php echo $address2 ?>'> 

                <label for='city'>City</label>
                <input type='text' name='city' class='form-control' value='<?php echo $city ?>'> 
                
                <label for='region'>Region</label>
                <input type='text' name='region' class='form-control' value='<?php echo $region ?>'> 
            </div>   

            <div class='form-group'>
                <label for='ham'>Smoked Honey Maple Ham</label>
                <input type='number' name='ham' class='form-control' value='<?php echo $ham ?>'> 
            </div>   

            <div class='form-group'>
                <label for='lemonbar'>Lemon Bar</label>
                <input type='number' name='lemonbar' class='form-control' value='<?php echo $lemonbar ?>'> 
            </div>   

            <div class='form-group'>
                <label for='beef'>Beef Stroganoff</label>
                <input type='number' name='beef' class='form-control' value='<?php echo $beef ?>'> 
            </div>   

            <div class='form-group'>
                <input type='submit' name='update' class='btn btn-primary mt-2' value='Update'> 
            </div>   
        </form>
    </div>

    <div class='container text-center mt-5'>
        <a href='home.php' class='btn btn-warning mt-5'>Back</a>
    </div>
</body>
</html>

<?php include 'footer.php' ?>