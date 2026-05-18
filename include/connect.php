<?php
$con = mysqli_connect("localhost", "root", "tiger");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database if it doesn't exist
$create_db = "CREATE DATABASE IF NOT EXISTS deer_hunt";
mysqli_query($con, $create_db);

// Select the database
mysqli_select_db($con, "deer_hunt");

// Create categories table if it doesn't exist
$create_table = "CREATE TABLE IF NOT EXISTS categories (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    category_Title VARCHAR(100) NOT NULL
)";
mysqli_query($con, $create_table);

// Create brands table if it doesn't exist
$create_brands_table = "CREATE TABLE IF NOT EXISTS brands (
    brand_id INT AUTO_INCREMENT PRIMARY KEY,
    brand_title VARCHAR(100) NOT NULL
)";
mysqli_query($con, $create_brands_table);
?>