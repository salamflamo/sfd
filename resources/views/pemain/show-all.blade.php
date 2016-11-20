<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Para Pemain</title>
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
          img.homelogo{
              width: 50px;
              height: auto;
              margin: 0 0 0 20px;
              padding: 0;
          }
          .brand-logo:hover{
              background-color: transparent !important;
          }
          span.wajib{
              color: red;
          }
          .warnaku{
            background-color: #202440 !important;
          }
      </style>
</head>
<body>
  <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper warnaku">
            <a href="#" class="brand-logo center">Para Pemain</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="#" class="brand-logo"><img src="img/sfdlogo.png" alt="sfdlogo" class="responsive-img homelogo"></a></li>
            </ul>
            </div>
        </nav>
  </div>
    <header class="header center warnaku">
        <!-- <img src="img/sfdlogo.png" alt="sfdlogo" class="logosfd "> -->
        <h1></h1>
    </header>
    <table class="striped highlight">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Kode</th>
               <th>Score</th>
            </tr>

        </thead>
        @foreach($pemains as $pemain)
        <tbody>
            <tr>
                <td>{{$pemain->id}}</td>
                <td>{{$pemain->nama}}</td>
                <td>{{$pemain->username}}</td>
                <td>{{$pemain->email}}</td>
                <td>{{$pemain->kode}}</td>
                <td>{{$pemain->score}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>



    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
