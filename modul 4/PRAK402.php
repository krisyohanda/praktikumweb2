<?php
$data = [
    ['nama'=>'Andi', 'nim'=>'2101001','nilaiUts'=>87,'nilaiUas'=>65],
    ['nama'=>'Budi', 'nim'=>'2101002','nilaiUts'=>76,'nilaiUas'=>79],
    ['nama'=>'Tono', 'nim'=>'2101003','nilaiUts'=>50,'nilaiUas'=>41],
    ['nama'=>'Jessica', 'nim'=>'2101004','nilaiUts'=>60,'nilaiUas'=>75]
];

for($i=0; $i < count($data); $i++){
    $data[$i]['nilaiAkhir']=($data[$i]['nilaiUts']*40/100)+($data[$i]['nilaiUas']*60/100);
    if($data[$i]['nilaiAkhir']>=80 and $data[$i]['nilaiAkhir']<=100){
        $data[$i]['huruf'] = 'A';
    }
    else if($data[$i]['nilaiAkhir']>=70 and $data[$i]['nilaiAkhir']<80){
        $data[$i]['huruf'] = 'B';
    }
    else if($data[$i]['nilaiAkhir']>=60 and $data[$i]['nilaiAkhir']<70){
        $data[$i]['huruf'] = 'C';
    }
    else if($data[$i]['nilaiAkhir']>=50 and $data[$i]['nilaiAkhir']<60){
        $data[$i]['huruf'] = 'D';
    }
    else if($data[$i]['nilaiAkhir']>0 and $data[$i]['nilaiAkhir']<50){
        $data[$i]['huruf'] = 'E';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 402</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid #000;
            padding: 5px;
        }
        th{
            border: 1px solid #000;
            background-color: #D3D3D3;
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php for($i=0; $i < count($data); $i++):?>
        <tr>
            <td><?php echo $data[$i]['nama']; ?></td>
            <td><?php echo $data[$i]['nim']; ?></td>
            <td><?php echo $data[$i]['nilaiUts']; ?></td>
            <td><?php echo $data[$i]['nilaiUas']; ?></td>
            <td><?php echo $data[$i]['nilaiAkhir']; ?></td>
            <td><?php echo $data[$i]['huruf']; ?></td>
        </tr>
        <?php endfor?>
    </table>
</body>
</html>