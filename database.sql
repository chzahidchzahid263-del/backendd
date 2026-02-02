<?php
error_reporting(0);
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db   = "cosmicshop";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    die("Database Connection Failed");
}
?>
CREATE DATABASE cosmicshop;
USE cosmicshop;

CREATE TABLE products (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 price INT,
 image VARCHAR(200),
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE orders (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 cnic VARCHAR(20),
 location VARCHAR(150),
 product_name VARCHAR(100),
 quantity INT,
 status VARCHAR(50) DEFAULT 'Pending',
 order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
