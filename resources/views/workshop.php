@extends('master')
@section('content')
<section id="workshop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Daftar Jadi Peserta Workshop</h2>
                <h3 class="section-subheading text-muted">Isi kolom dibawah dengan lengkap</h3>
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
                                <input type="tel" class="form-control" placeholder="Jurusan" id="phone" required data-validation-required-message="Jurusan juga jangan lupa diisi">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" name="thanks" class="btn btn-xl">Daftar</button>
                            <a class="btn btn-xl" href="/#daftar">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <div class="col-lg-4">&nbsp;
            </div> -->
        </div>
    </div>
</section>
@endsection
