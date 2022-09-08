<?php
require '..//Model/registerdb.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  <nav class="fixed top-0 left-0 bg-white  shadow">
    <div class="container m-auto flex justify-between items-center text-gray-700">
      <h1 class="pl-8 py-4 text-xl font-bold">SCL</h1>
      <ul class=" md:flex items-center pr-10 text-base font-semibold cursor-pointer float-left">
        <li class="hover:bg-gray-200 py-4 px-6" href="./index.php">Home</li>
        <li class="hover:bg-gray-200 py-4 px-6" href="./login.php">Login</li>
        <li class="hover:bg-gray-200 py-4 px-6" href="./register.php">Register</li>
      </ul>
      <input type="text" placeholder="Search..">
    </div>    
</body>
</html>