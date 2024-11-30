<?php

include ('koneksi.php');

$nama = $_POST['nama'];
$email = $_POST['email'];
$notlp = $_POST['no_tlp'];

$submit = mysqli_query($koneksi,"INSERT INTO data(nama, email, no_tlp) VALUES('$nama','$email','$notlp')");

if ($submit==true){
    echo "Berhasil diSimpan";
}else{
    echo "Gagal Disimpan";
}



?>






