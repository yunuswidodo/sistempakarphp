<?php include "_header.html" ?>

<br>
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
                $id = $_GET['exampleRadios'];
                $sql_query = mysqli_query($host, "SELECT * FROM daftar_pekerjaan WHERE id_bidang =$id");
                while ($row = mysqli_fetch_assoc($sql_query)) {
                    // echo $row['nama_daftar'];
                ?>
                    <form method="GET" action="produck.php">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="daftarRadios" id="exampleRadios1" value="<?php echo $row['jenis'] ?>" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                <?php echo $row['nama_daftar'] ?>
                            </label>
                        </div>
                    <?php
                }

                    ?>
                    <button type="submit" class="btn btn-primary">
                        proses
                    </button>
                    </form>
            </div>
        </div>
    </div>
</div>

<?php include "_footer.html" ?>