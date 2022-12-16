<?php
// percabangan IF ELSE
// $nilai = 90;

// if($nilai > 80){
//     print "nilai anda A";
// }elseif ($nilai > 70) {
//     print "nilai anda B";
// }elseif ($nilai > 60) {
//     print "nilai anda C";
// }elseif ($nilai > 50) {
//     print "nilai anda D";
// }else{
//     print "Nilai anda E";
// }   
// percabangan SWITCH
// pengulangan while
// latihan

$mahasiswa = [
    [
        'no' => '1',
        'nama' => 'Farda',
        'nim'  => '20200040080',
        'jurusan' => 'TI',
        'email' => 'fardamaulina@gmail.com',
        'nilai' => 90
    ],
    [
        'no' => '2',
        'nama' => 'Maulina',
        'nim'  => '20200040070',
        'jurusan' => 'TI',
        'email' => 'maulinafarda@gmail.com',
        'nilai' => 75
    ],
    [
        'no' => '3',
        'nama' => 'Albihaikal',
        'nim'  => '20200040015',
        'jurusan' => 'TI',
        'email' => 'albihaikal@gmail.com',
        'nilai' => 85
    ]
];

// foreach($mahasiswa as $mhs){
//     echo "<br>Nama : {$mhs['nama']}";
//     echo "<br>NIM : {$mhs['nim']}";
//     echo "<br>Jurusan : {$mhs['jurusan']}";
//     echo "<br>Email : {$mhs['email']}";
//     echo "<br>Nilai : {$mhs['nilai']}";
//     echo "<br>";
// }
?>

<table border ="1">
<thead>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Jurusan</th>
    <th>Email</th>
    <th>Nilai</th>
    <th>Status</th>
</tr>
</thead>
<tbody>
<?php foreach ($mahasiswa as $data):?>
    <tr>
        <td><?=$data["no"]?></td>
        <td><?php echo $data["nama"]?></td>
        <td><?php echo $data["nim"]?></td>
        <td><?php echo $data["jurusan"]?></td>
        <td><?php echo $data["email"]?></td>
        <td><?php echo $data["nilai"]?></td>
        <td><?php 
        $nilai = $data["nilai"];
        
        if($nilai > 75){
            echo 'Lulus';
        }else{
            echo 'Tidak Lulus';
        }

         ?></td>
    </tr>
<?php endforeach ?>
</tbody>
</table>
