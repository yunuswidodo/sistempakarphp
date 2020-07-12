<?php
session_start();

if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
}
?>
<?php include "_header.html" ?>
<?php include "_sidebar.html" ?>

<section id="main-content">
    <section class="wrapper">

        <!-- /row -->
        <!-- ini konten -->
        <h3><i class="fa fa-angle-right"></i> Form Components</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <form class="form-horizontal style-form" action="actionaddlaptop.php" method="POST">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Branch</label>
                            <div class="col-sm-10">
                                <input type="text" name="branch" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Model</label>
                            <div class="col-sm-10">
                                <input type="text" name="model" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Prosesor</label>
                            <div class="col-sm-10">
                                <input type="text" name="prosesor" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Ram</label>
                            <div class="col-sm-10">
                                <input type="text" name="ram" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Memory</label>
                            <div class="col-sm-10">
                                <input type="text" name="memory" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">SSD</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="ssd" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">HDD</label>
                            <div class="col-sm-10">
                                <input type="text" name="hdd" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">harga</label>
                            <div class="col-sm-10">
                                <input type="text" name="harga" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">golongan</label>
                            <div class="col-sm-10">
                                <input type="text" name="golongan" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class=" add-task-row">
                            <button type="submit" class="btn btn-success btn-sm pull-right">tambah</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- col-lg-12-->
        </div>
    </section>
</section>
>

<?php include "_footer.html" ?>