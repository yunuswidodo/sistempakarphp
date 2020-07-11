<?php include "_header.html" ?>

<br> <br>

<div class="col-lg-12 text-center">
    <h1 class="mt-5">SISTEM PAKARKU</h1>
    <p class="lead">hasil laptop </p>
</div>
<br>
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">branch</th>
                <th scope="col">model</th>
                <th scope="col">Prosesor</th>
                <th scope="col">ram</th>
                <th scope="col">memory</th>
                <th scope="col">ssd</th>
                <th scope="col">hdd</th>
                <th scope="col">harga</th>
                <th scope="col">golongan</th>
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $jenis = $_GET['daftarRadios'];
        $sql_query = mysqli_query($host, "SELECT * FROM produck WHERE golongan = '$jenis'");
        while ($row = mysqli_fetch_assoc($sql_query)) {
        ?>
            <tbody>
                <tr>
                    <td><?php echo $row['branch'] ?></td>
                    <td><?php echo $row['model'] ?></td>
                    <td><?php echo $row['prosesor'] ?></td>
                    <td><?php echo $row['ram'] ?></td>
                    <td><?php echo $row['memory'] ?></td>
                    <td><?php echo $row['ssd'] ?></td>
                    <td><?php echo $row['hdd'] ?></td>
                    <td><?php echo $row['harga'] ?></td>
                    <td><?php echo $row['golongan'] ?></td>

                </tr>
            <?php

        }
            ?>
            </tbody>
    </table>



</div>

<!-- echo $jenis

note : jika value string where = ''
       jika value int wher = langsung tanpa pentik
?> -->

<?php include "_footer.html" ?>