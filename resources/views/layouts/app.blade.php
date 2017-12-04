
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <!-- Bulma Version 0.6.0 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="/css/app_blade_php.css"/>
</head>
<body>

  <div class="container">
    <!-- START NAV -->
    <nav class="navbar is-white">
      <div class="navbar-brand">
        <a class="navbar-item brand-text" href="../">
          Jman Blogg          
        </a>
        <div class="navbar-burger burger" data-target="navMenu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div id="navMenu" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="../">
            Heim
          </a>
          <a class="navbar-item" href="/blogs">
            Skoða Blogg
          </a>
          <a class="navbar-item" href="/blogs/create">
            Skrifa Nýtt Blogg
          </a>
        </div>
        <div class="navbar-end">
          @if( ! auth()->check() )
            <a class="navbar-item" href="/login">
              Innskrá
            </a>
            <a class="navbar-item" href="/register">
              Nýskrá
            </a>
          @else
            <a class="navbar-item" onclick="event.preventDefault();
                                            document.getElementById('logout').submit();
                                                      ">
              Útskrá
            </a>
            <form id="logout" method="POST" action="/logout">
              {{ csrf_field() }}
            </form>
          @endif
        </div>
      </div>
    </nav>
    <!-- END NAV -->

  @if ($flash = session('message'))
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script type="text/javascript">
        swal({
          text: "{{ $flash }}",
          icon: "success",
          timer: 1500,
      });
      </script>
          
  @endif


  @if ($flash = session('edit_message'))
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script type="text/javascript">
        swal({
          text: "{{ $flash }}",
          icon: "error",
      });
      </script>
          
  @endif

  @if ($flash = session('deletion_message'))
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script type="text/javascript">
        swal({
          text: "{{ $flash }}",
          icon: "success",
          timer: 1500,
      });
      </script>
          
  @endif

    <section class="articles">
        <div class="column is-8 is-offset-2">
          @yield('content')
        </div>
    </section>   
  </div>
  <script async type="text/javascript" src="../js/bulma.js"></script>
</body>
</html>
