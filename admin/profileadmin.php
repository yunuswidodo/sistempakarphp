<?php
session_start();

if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
}
?>
<?php
include "_header.html";
?>

<?php
include "_sidebar.html";
?>

<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="row content-panel">
                    <div class="col-md-4 profile-text mt mb centered">
                        <div class="right-divider hidden-sm hidden-xs">
                            <h4>KEAHLIAN</h4>
                            <br>
                            <h6>Grafika Komputer</h6>
                            <h6>Multimedia</h6>
                            <h6>Citra Digital</h6>
                        </div>
                    </div>
                    <!-- /col-md-4 -->
                    <div class="col-md-4 profile-text">
                        <h3>Ahmad Zakki Fallani</h3>
                        <h6>Telp.0857 3033 3731</h6>
                        <p>Web Blog : http://zakki.dosen.narotama.ac.id/</p>
                        <br>
                        <a href="http://zakki.dosen.narotama.ac.id/">
                            <p><button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Message</button></p>
                        </a>
                    </div>
                    <!-- /col-md-4 -->
                    <div class="col-md-4 centered">
                        <div class="profile-pic">
                            <p><img src="/sistempakarphp/admin-template/img/pakzaki.jpg" class="img-circle"></p>
                        </div>
                    </div>
                    <!-- /col-md-4 -->
                </div>
                <!-- /row -->
            </div>
        </div>
        <br>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="row content-panel">
                    <div class="col-md-4 profile-text mt mb centered">
                        <div class="right-divider hidden-sm hidden-xs">
                            <h4>KEAHLIAN</h4>
                            <h6>IAM BEGINER</h6>
                        </div>
                    </div>
                    <!-- /col-md-4 -->
                    <div class="col-md-4 profile-text">
                        <h3>Ahmad Yunus Widodo</h3>
                        <h6>04316055</h6>
                        <p>mahasiswa narotama saja</p>
                        <br>
                        <p><button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Message</button></p>
                    </div>
                    <!-- /col-md-4 -->
                    <div class="col-md-4 centered">
                        <div class="profile-pic">
                            <p><img src="/sistempakarphp/admin-template/img/yns2.jpeg" class="img-circle"></p>
                        </div>
                    </div>
                    <!-- /col-md-4 -->
                </div>
                <!-- /row -->
            </div>
        </div>

    </section>
</section>


<?php
include "_footer.html";
?>