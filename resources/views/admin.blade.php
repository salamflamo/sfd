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
          <h3>Jangan Sembarangan Ngasih Nilai !!!!</h3>
        </div>
        <br>
        <div class="col-lg-12 text-center">
          <div class="row">
            <div class="col-md-3"></div>
            <div align="center" class="col-md-6">
              <form>
                <table border="0">
                  <tr>
                    <td>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="kode unik" id="name" required data-validation-required-message="Nama kamu belum diisi">
                        <p class="help-block text-danger"></p>
                      </div>
                    </td>
                    <td>
                      <div class="col-md-2">
                        <!-- ini setelah melakukan cari maka akan dilempar ke cari.blade -->
                        <a href="cari.blade.php" class="btn btn-default">Cari</a>
                      </div>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
          <div class="col-md-3"></div>
        </div>
        </div>
    </div>
  </section>
