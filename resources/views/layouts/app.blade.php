
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
}</style>
</head>
<body>

  <div class="container">
    <!-- START NAV -->
    <nav class="navbar is-white">
      <div class="navbar-brand">
        <a class="navbar-item brand-text" href="../">
          Jman Blog          
        </a>
        <div class="navbar-burger burger" data-target="navMenu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div id="navMenu" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="#">
            Home
          </a>
          <a class="navbar-item" href="#">
            All Blogs
          </a>
          <a class="navbar-item" href="#">
            Create New Blog
          </a>
        </div>
        <div class="navbar-end">
          <a class="navbar-item" href="/login">
            Login
          </a>
          <a class="navbar-item" href="/register">
            Register
          </a>
        </div>
      </div>
    </nav>
    <!-- END NAV -->

    <!-- START ARTICLE FEED -->
    <section class="articles">
        <div class="column is-8 is-offset-2">

          <!-- START PROMO BLOCK -->
          <section class="hero is-danger is-bold is-small promo-block">
            <div class="hero-body">
              <div class="container">
                <h1 class="title">
                  <i class="fa fa-bell-o"></i> 
                   
                </h1>
                <h2 class="subtitle">
                  
                </h2>
              </div>
            </div>
          </section>
          <!-- END PROMO BLOCK -->

          <!-- START ARTICLE -->
          <div class="card article">
            <div class="card-content">
              <div class="media">
                <div class="media-content has-text-centered">
                  <p class="title article-title"></p>
                  <p class="subtitle is-6 article-subtitle">
                    <a href="#"></a> 
                  </p>
                </div>
              </div>

            <div class="content article-body">
                <p> </p>
                <p></p>
                <h3 class="has-text-centered"></h3>
                <p> 
                </p>
              </div>
            </div>
          </div>
          <!-- END ARTICLE -->

          <!-- START PROMO BLOCK -->
          <section class="hero is-info is-bold is-small promo-block">
            <div class="hero-body">
              <div class="container">
                <h1 class="title">
                  <i class="fa fa-bell-o"></i> 
                   
                </h1>
                <h2 class="subtitle">
                  
                </h2>
              </div>
            </div>
          </section>
          <!-- END PROMO BLOCK -->
    </section>
    <!-- END ARTICLE FEED -->
  </div>
  <script async type="text/javascript" src="../js/bulma.js"></script>
</body>
</html>
