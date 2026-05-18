<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Admin area</title>
</head>
<body style="background-color: #dedbdbff;">
    <!-- navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <div class="container-fluid">
                <img src="../assets/images/deer.jpeg" alt="Deer Hunt Logo" class="logo" height="50" width="50">
                <div class="navbar-nav ms-auto">
                    <a href="" class="nav-link" style="color: white;">Welcome guest</a>
                </div>
            </div>
        </nav>
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1">
                <div class="d-flex justify-content-around">
                    <div>
                        <h3 class="text-light text-center">Admin Name</h3>
                        <div class="button text-center">
                            <button class="btn btn-info"><a href="insert_product.php" class="nav-link text-light">Insert Products</a></button>
                            <button class="btn btn-info"><a href="view_products.php" class="nav-link text-light">View Products</a></button>
                            <button class="btn btn-info"><a href="index.php?insert_category" class="nav-link text-light">Insert Category</a></button>
                            <button class="btn btn-info"><a href="view_products.php" class="nav-link text-light">view category</a></button>
                            <button class="btn btn-info"><a href="index.php?insert_brands" class="nav-link text-light">Insert brands</a></button>
                            <button class="btn btn-info"><a href="view_products.php" class="nav-link text-light">View brands</a></button>
                            <button class="btn btn-info"><a href="insert_product.php" class="nav-link text-light">All orders</a></button>
                            <button class="btn btn-info"><a href="view_products.php" class="nav-link text-light">ALL payments</a></button>
                            <button class="btn btn-info"><a href="insert_product.php" class="nav-link text-light">List users</a></button>
                            <br>
                            <br>
                            <br>
                            <center>
                            <button class="btn btn-danger"><a href="view_products.php" class="nav-link text-light">logout</a></button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>

<!-- fourth child -->
<div class="container my-5">
  <?php
    if (isset($_GET['insert_category'])) {
      include('insert_category.php');
    }
     if (isset($_GET['insert_brands'])) {
      include('insert_brands.php');
    }
  ?>
</div>
