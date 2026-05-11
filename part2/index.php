<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Multiplication Table</title>

<style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        font-family: Arial, sans-serif;
        background-color: #111;
        min-height: 100vh;
    }

    /* HEADER TITLE */
    .header{
        width: 100%;
        text-align: center;
        padding: 20px;
        font-size: clamp(24px, 4vw, 50px);
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 3px;
        background: linear-gradient(90deg, black, yellow);
        color: black;
        border-bottom: 4px solid red;
    }

    /* TABLE CONTAINER */
    .table-wrapper{
        width: 100vw;
        height: calc(100vh - 80px);
        padding: 10px;
    }

    table{
        width: 100%;
        height: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    td{
        border: 2px solid #222;
        text-align: center;
        font-weight: bold;
        font-size: clamp(12px, 2vw, 28px);
        transition: 0.3s;
        cursor: pointer;
    }

    /* BLACK TILE */
    .black-tile{
        background-color: black;
        color: yellow;
    }

    /* YELLOW TILE */
    .yellow-tile{
        background-color: yellow;
        color: black;
    }

    /* HOVER EFFECT */
    td:hover{
        background-color: red !important;
        color: white !important;
        transform: scale(1.05);
        box-shadow: 0px 0px 10px red;
    }

</style>
</head>
<body>

<!-- HEADER TITLE -->
<div class="header">
    Multiplication Table
</div>

<!-- TABLE -->
<div class="table-wrapper">

<table>

<?php

$size = 12;

for($row = 0; $row <= $size; $row++){

    echo "<tr>";

    for($col = 0; $col <= $size; $col++){

        $value = $row * $col;

        $class = (($row + $col) % 2 == 0)
        ? "black-tile"
        : "yellow-tile";

        echo "<td class='$class'>$value</td>";
    }

    echo "</tr>";
}

?>

</table>

</div>

</body>
</html>