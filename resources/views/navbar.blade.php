<!-- Navigation -->
@extends('master')
@section('content')
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only"></span>Menu<i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Software Freedom Day</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#detail">Detail Acara</a>
                </li>
                <li>
                    <a class="page-scroll" href="#rundown">Rundown Acara</a>
                </li>
                <li>
                    <a class="page-scroll" href="#pembicara">Pembicara</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
  <div class="container">
      <div class="intro-text">
          <div class="intro-lead-in">It's time to freedom</div>
          <div class="intro-heading">Software Freedom Day</div>
          <a href="#daftar" class="page-scroll btn btn-xl">Daftar</a>
      </div>
  </div>
</header>
@endcontent
