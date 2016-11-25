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
                <table class="table table-responsive">
                  <tr>
                    <td>
                      <h5>Ini namanya <span style="color: white; background-color: #ef4b52ff; padding: 4px 3px;">Anu</h5>
                    </td>
                    <td>
                      <select>
                        <option >Lunas</option>
                        <option selected="">Belum Lunas</option>
                      </select>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
          <div class="col-md-3"></div>
          <br><br>
          <div class="row">
            <a href="admin.blade.php" class="btn btn-default">Peserta Lain</a>
          </div>
        </div>
        </div>
    </div>
  </section>
