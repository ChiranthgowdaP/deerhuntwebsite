<?php
include('../include/connect.php');#connection to database

if (isset($_POST['insert_cat'])) {#check if form is submitted by clicking insert_cat button
    $category_title = trim($_POST['cat_title']);#storing category title from form input and trimming whitespace
    
    if (empty($category_title)) {
        echo "<script>alert('Please enter a category name')</script>";
    } else {
        // Check for existing category (case-insensitive)
        $select_query = "SELECT * FROM `categories` WHERE LOWER(category_title) = LOWER('$category_title')";#select query to check if category already exists
        $result_select = mysqli_query($con, $select_query);#execute the query
        $number = mysqli_num_rows($result_select);#get number of rows returned

        if ($number > 0) {#if category already exists
            echo "<script>alert('Category already exists')</script>";
        } else {
            
            $insert_query = "INSERT INTO `categories` (category_title) VALUES ('$category_title')";#insert new category into database
            $result = mysqli_query($con, $insert_query);#execute the query

            if ($result) {#successful insertion
                echo "<script>alert('Category has been inserted successfully')</script>";
            } else {
                echo "<script>alert('Error inserting category')</script>";
            }
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
            name="cat_title"
            placeholder="Insert categories"
            aria-label="Categories"
            aria-describedby="basic-addon1"
        >
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="btn btn-info" name="insert_cat" value="Insert Category">
    </div>
</form>

