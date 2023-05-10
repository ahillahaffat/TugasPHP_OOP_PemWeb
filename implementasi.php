<?php
require_once 'classproduct.php';
require_once 'classcdmusic.php';
require_once 'classcdrack.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        h1 {
            color: #333;
            text-align: center;
        }
        
        h2 {
            color: #666;
            margin-top: 20px;
        }
        
        table {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        th, td {
            padding: 10px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        tr:nth-child(even) {
            background-color: #fafafa;
        }
        
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    $cdMusic = new CDMusic("CD Music - Slipknot", 5000000, 0.2, "700 MB", "Single");
    $cdRack = new CDRack("CD Rack - Slipknot-Lowa", 5000000, 0.0, "Album");

    echo "<h1>CD Store</h1>";

    echo "<h2>CD Music</h2>";
    echo '<table>';
    echo "<tr><th>Detail</th><th>Value</th></tr>";
    echo "<tr><td>Nama</td><td>" . $cdMusic->getName() . "</td></tr>";
    echo "<tr><td>Harga</td><td>" . number_format($cdMusic->calculatePrice(), 2, ',', '.') . "</td></tr>";
    echo "<tr><td>Diskon</td><td>" . ($cdMusic->calculateDiscount() * 100) . "%</td></tr>";
    echo "<tr><td>Kapasitas</td><td>" . $cdMusic->getCapacity() . "</td></tr>";
    echo "<tr><td>Model</td><td>" . $cdMusic->getModel() . "</td></tr>";
    echo "<tr><td>Total Harga</td><td>" . number_format($cdMusic->calculateTotalPrice(), 2, ',', '.') . "</td></tr>";
    echo "</table>";

    echo "<h2>CD Rack</h2>";
    echo '<table>';
    echo "<tr><th>Detail</th><th>Value</th></tr>";
    echo "<tr><td>Nama</td><td>" . $cdRack->getName() . "</td></tr>";
    echo "<tr><td>Harga</td><td>" . $cdRack->getFormattedPrice() . "</td></tr>";
    echo "<tr><td>Diskon</td><td>" . ($cdRack->hasDiscount() ? "Ya" : "Tidak") . "</td></tr>";
    echo "<tr><td>Model</td><td>" . $cdRack->getModel() . "</td></tr>";
    echo "<tr><td>Total Harga</td><td>" . $cdRack->getFormattedTotalPrice() . "</td></tr>";
    echo "</table>";
?>