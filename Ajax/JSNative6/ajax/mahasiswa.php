<table border="1">
    <tr>
        <th>NO</th>
        <th>Username</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Alamat</th>
    </tr>

    <?php 
    $koneksi=mysqli_connect("localhost","root","siakad2");
    //Check Connection 
    if(mysqli_connect_errno()){
        echo "Koneksi database gagal : ".mysqli_connect_error();
    }
    $keyword=$_GET['keyword'];
    $no=1;
    $data=mysqli_query($koneksi,
    "select * from mahasiswa where nama LIKE '%".$keyword."%'");
    while($d=mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $d['username']; ?></td>
            <td><?php echo $d['password']; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
        </tr> <?php } ?>
    }
    ?>
</table>