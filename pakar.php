<?php include "_header.html" ?>

<!--    start php -->
<?php
// include "koneksi.php"; || paten
// $sql_query = mysqli_query($host, "SELECT * FROM bidang_pekerjaan");
// while ($row = mysqli_fetch_array($sql_query)) {
// print_r($row);
// }
// 
?>
<div class="col-lg-12 text-center">
    <h1 class="mt-5">SISTEM PAKARKU</h1>
    <p class="lead">ini sistem untuk memilih laptop sesuai dengan bidang pekerjaan</p>
</div>
<br>
<div class="container">
    <div class="col d-flex justify-content-center">
        <div class="card  bg-light mb-3" style="width: 18rem;">
            <div class="card-body">
                <?php
                include "koneksi.php";
                $sql_query = mysqli_query($host, "SELECT * FROM bidang_pekerjaan");
                ?>
                <?php while ($row = mysqli_fetch_assoc($sql_query)) {
                ?>
                    <form method="GET" action="daftarpekerjaa.php">
                        <div class="form">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="<?php echo $row['id'] ?>" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    <?php echo $row['nama_bidang'] ?>
                                </label>
                            </div>
                        <?php
                    } ?>
                        <br>
                        <button type="submit" class="btn btn-primary">
                            add
                        </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>


</div>
<?php include "_footer.html" ?>