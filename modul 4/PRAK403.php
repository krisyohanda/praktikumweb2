<?php
$data = [
    ['no'=>1, 'nama'=>'Ridho', 'matkul'=>[
        ['nama_mk'=>'Pemrograman I', 'sks'=>2],
        ['nama_mk'=>'Praktikum Pemrograman I', 'sks'=>1], ['nama_mk'=>'Pengantar Lingkungan Lahan Basah', 'sks'=>2],
        ['nama_mk'=>'Arsitektur Komputer', 'sks'=>3]
    ]
],
    ['no'=>2, 'nama'=>'Ratna', 'matkul'=>[
        ['nama_mk'=>'Basis Data I', 'sks'=>2],
        ['nama_mk'=>'Praktikum Basis Data I', 'sks'=>1], ['nama_mk'=>'Kalkulus', 'sks'=>3]
    ]
],
    ['no'=>3, 'nama'=>'Tono', 'matkul'=>[
        ['nama_mk'=>'Rekayasa Perangkat Lunak', 'sks'=>3],
        ['nama_mk'=>'Analisis dan Perancangan Sistem', 'sks'=>3], ['nama_mk'=>'Komputasi Awan', 'sks'=>3],
        ['nama_mk'=>'Kecerdasan Bisnis', 'sks'=>3]
    ]
]
];
for($i=0; $i<count($data); $i++){
    $data[$i]['total_sks']=0;
    for($j=0; $j<count($data[$i]['matkul']); $j++){
        $data[$i]['total_sks']+=$data[$i]['matkul'][$j]['sks'];
    }
    if($data[$i]['total_sks']<7){
        $data[$i]['keterangan'] = 'Revisi KRS';
    }
    else{
        $data[$i]['keterangan'] = 'Tidak Revisi';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 403</title>
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
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php for($i=0; $i<count($data); $i++):?>
            <?php for($j=0; $j<count($data[$i]['matkul']); $j++):?>
                <tr>
                    <?php if($j == 0):?>
                        <td><?php echo $data[$i]['no']; ?></td>
                        <td><?php echo $data[$i]['nama']; ?></td>
                        <td><?php echo $data[$i]['matkul'][$j]['nama_mk']; ?></td>
                        <td><?php echo $data[$i]['matkul'][$j]['sks']; ?></td>
                        <td><?php echo $data[$i]['total_sks']; ?></td>
                            <?php if($data[$i]['total_sks']<7):?>
                                <td style="background-color: #FF0000;"><?php echo $data[$i]['keterangan']; ?></td>
                            <?php endif?>
                            <?php if($data[$i]['total_sks']>=7):?>
                                <td style="background-color: #03C04A;"><?php echo $data[$i]['keterangan']; ?></td>
                            <?php endif?>
                    <?php endif?>
                    <?php if($j > 0):?>
                        <td></td>
                        <td></td>
                        <td><?php echo $data[$i]['matkul'][$j]['nama_mk']; ?></td>
                        <td><?php echo $data[$i]['matkul'][$j]['sks']; ?></td>
                        <td></td>
                        <td></td>
                    <?php endif?>
                </tr>
            <?php endfor?>    
        <?php endfor?>    
    </table>
</body>
</html>