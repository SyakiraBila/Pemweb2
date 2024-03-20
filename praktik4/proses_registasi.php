<?php
// tangkap input form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$prodi = $_POST['prodi'];
$skills = $_POST['skills'] ?? [];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

// tangkap nilai skill
$nilai_skills = [
    'HTML' => 10,
    'CSS' => 10,
    'JavaSript' => 20,
    'RWD Bootstrap' => 20,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50
];

// hitung skor nilai
$skor_skill = 0;
foreach ($skills as $value) {
    $skor_skill += $nilai_skills[$value];
}

// hitung kategori skill
function skor_skill($skor_skill){
    if ($skor_skill >= 0 && $skor_skill <= 40){
        return "Kurang";
      } 
    elseif ($skor_skill >= 41 && $skor_skill <= 60){
      return "Cukup";
    }
    elseif ($skor_skill >= 61 && $skor_skill <= 100 ) {
        return "Baik";
      }
    elseif ($skor_skill >= 101 && $skor_skill <= 150 ) {
        return "Sangat Baik";
      }
    else {
      return "Tidak memadai";  
    } 
  }

// tampilkan
echo "<br/>NIM: $nim";
echo "<br/>Nama Lengkap: $nama";
echo "<br/>Jenis Kelamin: $kelamin";
echo "<br/>Program Studi: $prodi";
echo "<br/>Skill Web & Programming: " . join(', ', $skills);
echo "<br/>Tempat Domisili: $domisili";
echo "<br/>Skor Skill: $skor_skill";
echo "<br/>Kategori Skill: " . skor_skill($skor_skill);
echo "<br/>Email: $email"
?>