<?php
$listSamsung = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PRAKTIKUM 104</title>
        <style>
            table, th, td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
            <?php
            foreach($listSamsung as $row):
            ?>
            <tr>
                <td>
                    <?php
                    echo $row;
                    ?>
                </td>
            </tr>
            <?php 
            endforeach
            ?>
        </table>
    </body>
</html>