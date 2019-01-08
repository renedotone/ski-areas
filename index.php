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
            <option value="low">Max 2,500</option>
            <option value="medium">2,500 - 3,000</option>
            <option value="high">Above 3,000</option>
        </select>
        <br>
    </form>
</div>

<div class="result">
<?php
    $skiarea = array
        (
        array("Les Portes du Soleil",2254,"France"),    
        array("SkiWelt Wilder",1860,"Austria"),
        array("Tignes - Val d'Isère",3456,"France"),
        array("Laax - Flims - Falera",3018,"Switzerland"), 
        array("Silvretta Arena Ischgl - Samnaun",2872,"Austria"), 
        array("Les Trois Vallées",3230,"France"), 
        array("Hochzillertal - Hochfügen",2378,"Austria"), 
        array("Serfaus - Fiss - Ladis",2820,"Austria"),     
        array("Les Quatre Vallées",3330,"France"),
        array("Breuil-Cervinia",3899,"Italy"),
        array("Obergurgl - Hochgurgl",3082,"Austria")  
        );
    
        echo "I wanna go skiing in " .$skiarea[0][0]. " in " .$skiarea[0][2]. " on a height of " .$skiarea[0][1]. " meters!";
?>
</div>




</body>
</html>