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
<section id="workshop" class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="section-heading">Pendaftaran Workshop</h1><br>
            <h5 class="section-subheading text-muted">Isi kolom dibawah dengan lengkap untuk daftar workshop</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama" id="name" required data-validation-required-message="Nama kamu belum diisi">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Email kamu masih salah">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Nomer Handphone" id="phone" required data-validation-required-message="Nomor HP jangan ketinggalan">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Jurusan" id="phone" required data-validation-required-message="Jurusan juga jangan lupa diisi">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-lg-12 text-center">
                        <!-- ini saat klik daftar dan berhasil maka akan dilempar ke thanks.blade -->
                        <a href="thanks.blade.php" class="btn btn-xl">Daftar</a>&nbsp;&nbsp;
                        <a href="/" class="btn btn-xl">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </section>
