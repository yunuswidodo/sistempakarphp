<?php
session_start();

if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
}
?>
<?php include  "_header.html" ?>
<?php include "_sidebar.html" ?>

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Form Components</h3>
        <!-- BASIC FORM ELELEMNTS -->

        <?php
        include '../koneksi.php';
        $id = $_GET['id'];
        $sql_query = mysqli_query($host, "SELECT * FROM produck WHERE id=$id ");
        ?>
        <?php
        while ($row = mysqli_fetch_assoc($sql_query)) {
        ?>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <form class="form-horizontal style-form" action="actioneditlaptop.php" method="POST">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Branch</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="asu" class="form-control" value="<?php echo $row['id'] ?>">
                                    <input type="text" name="branch" class="form-control" value="<?php echo $row['branch'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Model</label>
                                <div class="col-sm-10">
                                    <input type="text" name="model" class="form-control" value="<?php echo $row['model'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Prosesor</label>
                                <div class="col-sm-10">
                                    <input type="text" name="prosesor" class="form-control" value="<?php echo $row['prosesor'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Ram</label>
                                <div class="col-sm-10">
                                    <input type="text" name="ram" class="form-control" value="<?php echo $row['ram'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Memory</label>
                                <div class="col-sm-10">
                                    <input type="text" name="memory" class="form-control" value="<?php echo $row['memory'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">SSD</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="ssd" type="text" value=" <?php echo $row['ssd'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">HDD</label>
                                <div class="col-sm-10">
                                    <input type="text" name="hdd" class="form-control" value="<?php echo $row['hdd'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">harga</label>
                                <div class="col-sm-10">
                                    <input type="text" name="harga" class="form-control" value="<?php echo $row['harga'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">golongan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="golongan" class="form-control" value="<?php echo $row['golongan'] ?>">
                                </div>
                            </div>

                            <div class=" add-task-row">
                                <button type="submit" class="btn btn-success btn-sm pull-right">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- col-lg-12-->
            </div>
        <?php
        }
        ?>
    </section>
</section>


<?php include "_footer.html" ?>