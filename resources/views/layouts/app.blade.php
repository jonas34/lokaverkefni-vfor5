
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
  <style type="text/css">
  html,body {
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  background: #F0F2F4;
}
.navbar.is-white {
  background: #F0F2F4;
}
.navbar-brand .brand-text {
  font-size: 1.11rem;
  font-weight: bold;
}
.articles {
  margin: 5rem 0;
}
.articles .content p {
    line-height: 1.9;
    margin: 15px 0;
}
.author-image {
    position: absolute;
    top: -30px;
    left: 50%;
    width: 60px;
    height: 60px;
    margin-left: -30px;
    border: 3px solid #ccc;
    border-radius: 50%;
}
.media-center {
  display: block;
  margin-bottom: 1rem;
}
.media-content {
  margin-top: 3rem;
}
.article, .promo-block {
  margin-top: 6rem;
}
div.column.is-8:first-child {
  padding-top: 0;
  margin-top: 0;
}
.article-title {
  font-size: 2rem;
  font-weight: lighter;
  line-height: 2;
}
.article-subtitle {
  color: #909AA0;
  margin-bottom: 3rem;
}
.article-body {
  line-height: 1.4;
  margin: 0 6rem;
}
.promo-block .container {
  margin: 1rem 5rem;
}
</style>
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
