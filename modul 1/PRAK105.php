<?php
$listSamsung = ["tipe1" => "Samsung Galaxy S22", "tipe2" => "Samsung Galaxy S22+", "tipe3" => "Samsung Galaxy A03", "tipe4" => "Samsung Galaxy Xcover 5"]
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PRAKTIKUM 105</title>
        <style>
            table, th, td{
                border: 1px solid black;
            }
            th{
                background-color: red;
                height: 60px;
                width: 250px;
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
            <?php
                foreach($listSamsung as $tipe => $row):
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