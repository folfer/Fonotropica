<?php
    session_start();
    require "head.php";
    require "header.php";
    include_once ("include/functions.php");
?>

<section class="site-section pt-5 pb-5 background_color site-section-body" style="margin-top: -300px;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <div class="owl-carousel owl-theme home-slider">
                <div>
                  <a class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_1.png'); ">
                  </a>
                  <!-- Caixa de Dados -->
                 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-4 col-xl-4 responsividade_caixa">
                    <div class="herobox" style="background-color: rgb(29, 30, 14);">
                      <a class="herotext"><div class="row">
                         <div class="col-xs-8 row">
                            <h1 style="color: #6c757d;">&nbsp;<i class="fa fa-users" aria-hidden="true"></i>
                            75</h1>
                             <p style="color: #6c757d">
                                &nbsp;Número de espécies
                            </p>
                             </div>
                              </div>
                             </a><div class="herolinks">
                                 <a class="morelink signuplink" style="color: #6c757d;" href="signup.php">Registre-se
                                 <i class="fa fa-share" aria-hidden="true"></i>
                                </a><a class="morelink explorelink" style="color: #6c757d;" href="plataforma.php">Explore
                                  <i class="fa fa-share" aria-hidden="true"></i>
                                </a></div>
                         </div>
                       </div>
                       &nbsp;&nbsp;<span class="category mb-5 responsividade_nome_autor">autor &bullet; Daniel Perrella</span>
                       <span class="category mb-5 responsividade_nome_autor">espécie &bullet; Gastrotheca microdiscus</span>
                </div>
                <div>
                  <a class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_2.png'); ">
                  </a>
                <!-- Caixa de Dados -->
                 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-4 col-xl-4 responsividade_caixa">
                    <div class="herobox" style="background-color: rgb(29, 30, 14);">
                      <a class="herotext" href="/observations"><div class="row">
                         <div class="col-xs-8 row">
                            <h1 style="color: #6c757d;">&nbsp;<i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;5</h1>
                             <p style="color: #6c757d;">
                             &nbsp;Número de naturalistas
                            </p>
                             </div>
                              </div>
                             </a><div class="herolinks">
                                 <a class="morelink signuplink" style="color: #6c757d;" href="signup.php">Registre-se
                                 <i class="fa fa-share" aria-hidden="true"></i>
                                </a><a class="morelink explorelink" style="color: #6c757d;" href="plataforma.php">Explore
                                  <i class="fa fa-share" aria-hidden="true"></i>
                                </a></div>
                         </div>
                       </div>
                       &nbsp;&nbsp;<span class="category mb-5 responsividade_nome_autor">autor &bullet; Daniel Perrella</span>
                       <span class="category mb-5 responsividade_nome_autor">espécie &bullet; Gastrotheca microdiscus</span>
                </div>
                <div>
                  <a class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_3.png'); ">
                  </a>
                  <!-- Caixa de Dados -->
                 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-4 col-xl-4 responsividade_caixa_c">
                    <div class="herobox" style="background-color: rgb(29, 30, 14);">
                      <a class="herotext" href="/observations"><div class="row">
                         <div class="col-xs-8 row">
                            <h1 style="color: #6c757d;">&nbsp;<i class="fa fa-headphones" aria-hidden="true"></i>&nbsp;3445</h1>
                             <p style="color: #6c757d;">
                              &nbsp;Número de gravações
                              </p>
                             </div>
                              </div>
                             </a><div class="herolinks">
                                 <a class="morelink signuplink" style="color: #6c757d;" href="signup.php">Registre-se
                                 <i class="fa fa-share" aria-hidden="true"></i>
                                </a><a class="morelink explorelink" style="color: #6c757d;" href="plataforma.php">Explore
                                  <i class="fa fa-share" aria-hidden="true"></i>
                                </a></div>
                         </div>
                       </div>
                       &nbsp;&nbsp;<span class="category mb-5 responsividade_nome_autor">autor &bullet; Daniel Perrella</span>
                       <span class="category mb-5 responsividade_nome_autor">espécie &bullet; Gastrotheca microdiscus</span>
                </div>
              </div>
              
            </div>
          </div>
          
        </div>


      </section>
      <!-- END section -->


<?php
    require "footer.php";
?>