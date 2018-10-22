<?php  include(URL_VIEW . 'navbar.php'); ?>

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

<!-- Section Services
    ================================================== -->
    <section id="sucursales">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">NUESTRAS <b>SUCURSALES</b></h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix">
    </div>

<!-- Section Team
    ================================================== -->
    <section class="no-padding">
        <div class="col-md-4 bg-primary no-padding teambox">
            <img src="<?= URL_IMG . 'sucu1.jpg' ?>" alt="" class="img-responsive">
            <h2>Moreno 2371</h2>
            <p>
               Siguenos en nuestras Redes
           </p>
           <div class="team-social">
            <a href="<?= '/ubicacion/googlemaps/' . $objeto='1'; ?>" class="fa fa-map-marker" aria-hidden="true" title="Ubicacion"></a>
            <a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" title="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" title="skype"><i class="fa fa-skype"></i></a>
            <a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
    <div class="col-md-4 bg-dark no-padding teambox">
        <img src="<?= URL_IMG . 'sucu2.jpg' ?>" alt="" class="img-responsive">
        <h2>Av. Constitucion 3476</h2>
        <p>

            Siguenos en nuestras Redes
        </p>
        <div class="team-social">
            <a href="<?= '/ubicacion/googlemaps/' . $objeto='2'; ?>" class="fa fa-map-marker" aria-hidden="true" title="Ubicacion"></a>
            <a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" title="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" title="skype"><i class="fa fa-skype"></i></a>
            <a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
    <div class="col-md-4 bg-primary no-padding teambox">
        <img src="<?= URL_IMG . 'sucu3.jpg' ?>" alt="" class="img-responsive">
        <h2>Güemes 1622</h2>
        <p>
            Siguenos en nuestras Redes
        </p>
        <div class="team-social">
            <a href="<?= '/ubicacion/googlemaps/' . $objeto='3'; ?>" class="fa fa-map-marker" aria-hidden="true" title="Ubicacion"></a>
            <a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" title="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" title="skype"><i class="fa fa-skype"></i></a>
            <a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
</section>
<div class="clearfix">
</div>


    <section id="services" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Services we offer</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact us</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
          </div>
        </div>
      </div>
    </section>

    <script type="text/javascript">
    //$(".alert").delay(200).addClass("in").fadeOut(3500);

    </script>
