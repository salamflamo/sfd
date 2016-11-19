<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--css ku dewe-->
      <style type="text/css">
          img.logosfd{
              width: 300px;
              margin: 10px;
          }
          span.wajib{
              color: red;
          }
      </style>
</head>
<body>
  <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper ">
            <a href="#" class="brand-logo center">Daftar Exhibition</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="#">Home</a></li>
            </ul>
            </div>
        </nav>
  </div>
    <header class="header center ">
        <img src="" alt="" class="logosfd ">
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
        <input required="required" value="{{old('email')}}" name="email" type="email"/><br>
        <label for="email">email</label>
      </div>
      <div class="input-field">
        <input required="required" value="{{old('no_hp')}}" name="no_hp" type="text"/><br>
        <label for="no_hp">no hp</label>
      </div>

      <input type="submit" name='publish'  value = "Publish"/>
    </form>

  </div>


  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
