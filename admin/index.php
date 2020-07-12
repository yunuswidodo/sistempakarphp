<?php
session_start();

if ($_SESSION['status'] != "login") {
  header("location:login.php?pesan=belum_login");
}
?>

<?php
include "_header.html"
?>
<?php
include "_sidebar.html"
?>
<!--sidebar end-->
<!--main content start-->


<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-md-12 mb">
        <div class="col-lg-12 col-md-4 col-sm-4 mb">
          <div class="content-panel pn">
            <div id="blog-bg">
              <br>
              <div class="blog-title">Admin sistempakarku adalah web sederhana yang digunakan untuk mengatur
                aplikasi sistempakarku. aplikasi ini dibuat dengan bahasa pemograman php dan database msql. dan frontend mennggunakan
                boostrap.
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->
        <!-- ini konten -->
      </div>
    </div>
  </section>
</section>
<!--main content end-->
<!--footer start-->
<?php include "_footer.html" ?>