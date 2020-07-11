<?php include "_header.html" ?>
<?php include "_sidebar.html" ?>


<section id="main-content">
    <section class="wrapper">

        <!-- /row -->
        <!-- ini konten -->
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-advance table-hove">
                    <h4><i class="fa fa-angle-right"></i> Advanced Table</h4>
                    <hr>
                    <thead>
                        <tr>
                            <th> Branch</th>
                            <th> Model</th>
                            <th> prosesor </th>
                            <th> ram</th>
                            <th> memory </th>
                            <th> hdd</th>
                            <th> ssd</th>
                            <th> harga</th>
                            <th> golongan</th>
                        </tr>
                    </thead>
                    <?php
                    include '../koneksi.php';
                    $sql_query = mysqli_query($host, "SELECT * FROM produck WHERE golongan='rendah'");
                    while ($row = mysqli_fetch_assoc($sql_query)) {
                    ?>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="basic_table.html#"><?php echo $row['branch']  ?></a>
                                </td>
                                <td class="hidden-phone"><?php echo $row['model'] ?></td>
                                <td><?php echo $row['prosesor'] ?></td>
                                <td><?php echo $row['ram'] ?></td>
                                <td><?php echo $row['memory'] ?></td>
                                <td><?php echo $row['ssd'] ?></td>
                                <td><?php echo $row['hdd'] ?></td>
                                <td><?php echo $row['harga'] ?></td>
                                <td><?php echo $row['golongan'] ?></td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>
</section>
<?php include "_footer.html" ?>