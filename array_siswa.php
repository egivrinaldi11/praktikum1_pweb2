<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h3 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

<?php
$ns1 = ['id'=>1,'nim'=>'Agas','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'Kafi','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'Apis','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'Egi','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
?>

<h3>Daftar Nilai Siswa</h3>
<table>
    <thead>
        <tr>
            <th>No</th><th>NIM</th><th>UTS</th>
            <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach($ar_nilai as $ns){
            echo '<tr>';
            echo '<td>'.$nomor.'</td>';
            echo '<td>'.$ns['nim'].'</td>';
            echo '<td>'.$ns['uts'].'</td>';
            echo '<td>'.$ns['uas'].'</td>';
            echo '<td>'.$ns['tugas'].'</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
            echo '<td>'.number_format($nilai_akhir, 2, ',', '.').'</td>';
            echo '</tr>';
            $nomor++;
        }
        ?>
    </tbody>
</table>

</body>
</html>