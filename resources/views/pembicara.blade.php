@extends('master')
@section('content')
<section id="pembicara" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Pembicara TalkShow</h2>
                <h3 class="section-subheading text-muted">Pembicara-pembicara kece</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="team-member">
                    <img width="200px" height="200px" src="img-workshop/pembicara/dikyarga.jpg" class="img-responsive img-circle" alt="">
                    <h4>Diky Arga Anggara</h4>
                    <br>
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/dikyarga"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/dikyargaID"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/dikyargaid"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="team-member">
                    <img width="200px" height="200px" src="img-workshop/pembicara/rezafaizarahman.png" class="img-responsive img-circle" alt="">
                    <h4>Reza Faiz A Rahman</h4>
                    <br>
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/rezafaizarahman"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://plus.google.com/+rezafaizarahman"><i class="fa fa-plus"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/rezafaizarahman/"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
              </div>
              <div class="container">
                <div id="daftar" class="row text-center">
                  <div class="col-lg-12">
                    <h3>DAFTAR WORKSHOP DAN GAMIFICATION</h3>
                  </div>
                  <div class="col-lg-12">
                    <!-- ini akan dilempar ke workshop.blade -->
                    <a href="workshop.blade.php" class="btn btn-xl">Workshop</a>&nbsp;&nbsp;
                    <a href="gamification.blade.php" class="btn btn-xl">Gamification</a>
                  </div>
                </div>
                <br><br>
                <div class="tab-content">

                </div>
              </div>
</section>
@endcontent
