@extends('layout')

@section('content')
  <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper warnaku">
            <a href="#" class="brand-logo center">Daftar Exhibition</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
              <li><a href="sfdmulai" class="brand-logo"><img src="img/sfdlogo.png" alt="sfdlogo" class="responsive-img homelogo"></a></li>
            </ul>
            </div>
        </nav>
  </div>
    <header class="header center warnaku">
        <img src="img/sfdlogo.png" alt="sfdlogo" class="logosfd ">
        <h1></h1>
    </header>


  <div class="container">
    <h4>Form Pendaftaran Exhition SFD</h1>
    <p>
        <br>Harap di isi sebenar-benernya
        <br><span class="wajib">* Required</span>
    </p>
    <form role="form" method="POST" action="{{ url('/daftar-mampir') }}"
          xmlns="http://www.w3.org/1999/html">
      <div class="input-field">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </div>
      <div class="input-field">
        <input id="nama"  value="{{old('nama')}}" type="text" required>
        <label for="nama">nama</label>
      </div>
      <div class="input-field">
        <input id="username" value= "{{ old('username')}}" type="text" class="validate" required>
        <label for="username">username</label>
      </div>
      <div class="input-field">
        <input id="email" required="required" value="{{old('email')}}" type="email" class="validate">
        <label for="email">email</label>
      </div>
      <div class="input-field">
        <input id="no_hp" required="required" value="{{old('no_hp')}}" type="text" class="validate">
        <label for="no_hp">no hp</label>
      </div>
      <button class="btn warnaku waves-effect waves-light" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
      </button>
      <!-- <input type="submit" name='publish'  value = "Publish"/> -->
    </form>

  </div>


  <footer class="page-footer warnaku">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Footer Content</h5>
          <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made with <i class="material-icons tiny">favorite</i> by <a href="http://doscom.org">Doscom - Dinus Open Source Community </a>.

      </div>
    </div>
  </footer>
@endsection
