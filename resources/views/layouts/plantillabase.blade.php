<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <title>Mi Prueba</title>
    @yield('css')
    <style>
      footer{
      background: #121212;
      padding: 2em 0;
      display: block;
      }

      footer p{
        margin-bottom: 30px;
        color: rgba(255, 255, 255, 0.3);
      }

      p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}

ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
    margin-top: 0;
    margin-bottom: 1rem;
}

.ftco-footer-social li {
    list-style: none;
    margin: 0 10px 0 0;
    display: inline-block;
}
span.icono{
  font-size:30px;
}
    </style>
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
          <img src="{{URL::asset('img/logo.png')}}" alt="logo" width="50" class="ms-1 me-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Quienes Somos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contactanos</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>
        
        @yield('contenido')

        <footer class="mt-3">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-12 text-center">
                <img src="{{URL::asset('img/logo.png')}}" alt="logo" width="70">
                <p>Siguenos en nuestras redes sociales</p>
                <ul class="ftco-footer-social p-0">
                  <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-social-twitter-outline text-white icono"></span></a></li>

                  <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-social-facebook-outline text-white icono"></span></a></li>
                  <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-social-instagram-outline text-white icono"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>