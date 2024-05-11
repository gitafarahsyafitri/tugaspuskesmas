<?php
$ns1 = ['id'=>1, 'nim'=>'1001' , 'uts'=>80, 'tugas'=>90, 'uas'=>85];
$ns2 = ['id'=>2, 'nim'=>'1002' , 'uts'=>90, 'tugas'=>92, 'uas'=>88];
$ns3 = ['id'=>3, 'nim'=>'1003' , 'uts'=>70, 'tugas'=>93, 'uas'=>82];
$ns4 = ['id'=>4, 'nim'=>'1004' , 'uts'=>60, 'tugas'=>94, 'uas'=>80];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4];

?>

<h3>Daftar nilai</h3>
<table border="1" width="100%"> 
    <thead>
    <tr>
        <th>N0</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>TUGAS</th>
        <th>TUGAS AKHIR</th>
    </tr>
    </thead>
    <tbody>
        <?php $no=1;
        foreach ($ar_nilai as $nilai) { ?> 
        <tr>
            <td><?= $no ?></td>
            <td><?= $nilai['nim'] ?></td>
            <td><?= $nilai['uts'] ?></td>
            <td><?= $nilai['uas'] ?></td>
            <td><?= $nilai['tugas'] ?></td>
            <td><?= ($nilai['uts'] + $nilai['uas'] + $nilai['tugas']) / 3 ?></td>
        </tr>

    <?php $no++; } ?>
    </tbody>
</table>
