<?php
include('../include/connect.php');#connection to database

if (isset($_POST['insert_brand'])) {#check if form is submitted by clicking insert_brand button
    $brand_title = trim($_POST['brand_title']);#storing brand title from form input and trimming whitespace
    
    if (empty($brand_title)) {
        echo "<script>alert('Please enter a brand name')</script>";
    } else {
        // Check for existing brand
        $select_query = "SELECT * FROM brands WHERE brand_title = '$brand_title'";
        $result_select = mysqli_query($con, $select_query);
        
        if ($result_select) {
            $number = mysqli_num_rows($result_select);

            if ($number > 0) {
                echo "<script>alert('Brand already exists')</script>";
            } else {
                $insert_query = "INSERT INTO brands (brand_title) VALUES ('$brand_title')";
                $result = mysqli_query($con, $insert_query);

                if ($result) {
                    echo "<script>alert('Brand has been inserted successfully')</script>";
                } else {
                    echo "<script>alert('Error inserting brand: " . mysqli_error($con) . "')</script>";
                }
            }
        } else {
            echo "<script>alert('Database error: " . mysqli_error($con) . "')</script>";
        }
    }
}
?>

<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>
        </span>
        <input
            type="text"
            class="form-control"
            name="brand_title"
            placeholder="Insert brands"
            aria-label="Brands"
            aria-describedby="basic-addon1"
        >
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="btn btn-info" name="insert_brand" value="Insert Brand">
    </div>
</form>