<html>
    <head> 
        <title>Data</title>
    </head>
    <body>
        <h1>Data Crud</h1>
        <p>Berikut adalah data yg tersimpan</p>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Telp</th>
                    <th>Aksi</th>
                </tr>
           </thead>
           <tbody>
                <?php

                include('koneksi.php');

                $tampildata = mysqli_query($koneksi, "SELECT * FROM data");
                while ($baris = mysqli_fetch_array($tampildata)) {

                ?>
                    <tr>
                        <td><?php echo $baris['id'];?></td>
                        <td><?php echo $baris['nama'];?></td>
                        <td><?php echo $baris['email'];?></td>
                        <td><?php echo $baris['no_tlp'];?></td>
                        <td>
                            <a href="edit.php? no = <?php echo $baris['id'] ?>">EDIT</a>
                            <a href="hapus.php? no = <?php echo $baris['id'] ?>">HAPUS</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


    </body>
</html>