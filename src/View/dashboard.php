<?php  include(URL_VIEW . 'navbar.php');?>

<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2>About this page</h2>
        <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
        <ul>
          <li>Clickable nav links that smooth scroll to page sections</li>
          <li>Responsive behavior when clicking nav links perfect for a one page website</li>
          <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
          <li>Minimal custom CSS so you are free to explore your own unique design options</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<div id="carousel-example-generic" class="carousel intro slide" data-ride="carousel" style="margin-top:23px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="  height: 552px;" role="listbox">
        <!-- First slide -->
        <div class="item active" style="background-image:url('<?= URL_IMG . "portada1_cervezas.jpg"?> ');   background-position: 70% 90%;">
            <div class="carousel-caption" style="top:10%">
                <h1 data-animation="animated bounceInUp">
                La mejor cerveza artesanal </h1>
                <a href="/pedido/pedir/" class="btn btn-ghost btn-lg" data-animation="animated zoomInRight">Realiza tu pedido online !</a>
            </div>
        </div>
        <!-- /.item -->
        <!-- Second slide -->
        <div class="item" style="background-image:url('<?= URL_IMG . "portada2_cervezas.jpg"?> '); background-position: 50% 50%;">
            <div class="carousel-caption" style="top:7%">
                <h1 data-animation="animated zoomInRight">
                Mas de 20 años brindando la mejor calidad </h1>
                <a href="/pedido/pedir/" class="btn btn-ghost btn-lg" data-animation="animated zoomInRight">Realiza tu pedido online !</a>
            </div>
        </div>
        <!-- /.item -->
        <!-- Third slide -->
        <div class="item" style="background-image:url('<?= URL_IMG . "portada3_cervezas.jpg"?>'); background-position: 100% -60px; background-size: cover">
            <div class="carousel-caption" style="top:15%">
                <h2 data-animation="animated bounceInLeft">
                Layana by WowThemesNet</h2>
                <h1 data-animation="animated bounceInRight">
                Happy Coding</h1>
                <a href="/pedido/pedir/" class="btn btn-ghost btn-lg" data-animation="animated zoomInRight">Realiza tu pedido online !</a>
            </div>
        </div>
        <!-- /.item -->
    </div>
    <!-- /.carousel-inner -->
    <!-- Controls (currently displayed none from style.css)-->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- /.carousel -->

</section>
