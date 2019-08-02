<!-- file ini hanya meng extends, dimana file ini hanya perlu css dan lain-lain untuk membuat tampilannya
tapi tidak masuk content -->

@extends('master')
<nav id="mainNav" style="background-color: #222;padding: 5px 0" class="navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only"></span>Menu<i class="fa fa-bars"></i>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="/#detail">Detail Acara</a>
                </li>
                <li>
                    <a class="page-scroll" href="/#rundown">Rundown Acara</a>
                </li>
                <li>
                    <a class="page-scroll" href="/#pembicara">Pembicara</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<section id="gamification" class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="section-heading">Hanya Admin yang login</h1><br>
            <h5 class="section-subheading text-muted">Isi dengan benar</h5>
        </div>
        <div class="col-lg-12 text-center">
          <div class="row">
            <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="username" id="name" required data-validation-required-message="Nama kamu belum diisi">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="password" id="email" required data-validation-required-message="Email kamu masih salah">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-3"></div>
              <div class="col-lg-12 text-center">
                <!-- setelah login maka akan dilempar ke admin.blade -->
                <a href="admin.blade.php" class="btn btn-xl">Login</a>&nbsp;&nbsp;
              </div>
          </div>
        </div>
    </div>
  </section>
