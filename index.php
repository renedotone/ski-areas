<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ski Areas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>

<div class="header">
    <h2>Ski Areas</h2>
</div>

<div class="content">
    <form action="index.php">
        <h4>Search on name for a Ski Area</h4> 
        <input type="text" placeholder="Search.." name="search-area">
        <br>
        <h4>Search on countries for a Ski Area</h4> 
        <input type="text" placeholder="Search.." name="search-country">
        <br>
        <h4>Select an height in meters for a Ski Area</h4> 
        <select name="height">
            <option value="low">Max 1,500</option>
            <option value="medium">1,500 - 2,000</option>
            <option value="high">Above 2,000</option>
        </select>
        <br>
    </form>
</div>

<?php


?>




</body>
</html>