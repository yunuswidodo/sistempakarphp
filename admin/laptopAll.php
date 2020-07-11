<?php include "_header.html" ?>
<?php include "_sidebar.html" ?>


<section id="main-content">
    <section class="wrapper">

        <!-- /row -->
        <!-- ini konten -->
        <div class="col-md-12">
            <table class="table table-striped table-advance table-hove">
                <h4><i class="fa fa-angle-right"></i> Advanced Table</h4>
                <hr>
                <div class="row">
                    <div class=" add-task-row">
                        <a class="btn btn-success btn-sm pull-right" href="/sistempakarphp/admin/laptoptambah.php">add Laptop</a>
                    </div>
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
                            <th> action</th>
                        </tr>
                    </thead>
                    <?php
                    include '../koneksi.php';
                    $sql_query = mysqli_query($host, "SELECT * FROM produck");
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
                                <td>
                                    <a href="/sistempakarphp/admin/laptopedit.php?id=<?php echo $row['id'] ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                    <a href="/sistempakarphp/admin/laptopdelete.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                </td>
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