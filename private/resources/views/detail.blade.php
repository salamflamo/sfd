@extends('master')
@section('content')
<section id="detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Detail Acara</h2>
                <h3 class="section-subheading text-muted">Berikut ini detail acara SFD</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                  <div class="timeline-image">
                    <img class="img-circle img-responsive" src="img-workshop/icon/workshop.jpg">
                  </div>
                </span>
                <h4 class="service-heading">WORKSHOP</h4>
                <p class="text-muted">Serangkaian workshop guna mengasah kemampuan games dan coding diantaranya workshop hour of code dan code moji</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                  <div class="timeline-image">
                    <img class="img-circle img-responsive" src="img-workshop/icon/speaker.png">
                  </div>
                </span>
                <h4 class="service-heading">TALKSHOW</h4>
                <p class="text-muted">Talkshow yang akan diisi oleh teman-teman dari doscom yang kece-kece, mereka pernah menjadi firefox student ambasador </p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                  <div class="timeline-image">
                    <img class="img-circle img-responsive" src="img-workshop/icon/festival.png">
                  </div>
                </span>
                <h4 class="service-heading">FESTIVAL</h4>
                <p class="text-muted">Pameran software FOSS yang akan diisi teman-teman kita dari doscom untuk langsung mendemokannya
                  secara langsung untuk semua pengunjung, selain itu akan ada gamification untuk mendapatkan poin yang bisa ditukar dengan sovenir</p>
            </div>
        </div>
    </div>
</section>
@endsection
