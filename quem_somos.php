<?php require 'includes/header.php'; ?>

<?php require_once 'includes/navbar.php'; ?>

<body>
    <section>
        <div class="container-fluid justify-content-space-between">
            <div class="row back">
                <a href="javascript:window.history.go(-1)"><i class="fa fa-arrow-left fa-2x"></i></a>
            </div>
            <div class="row">
              <div class="col-sm-2 align-self-end">
                <img class="img-fluid" src="assets/imgs/moeda_flor.png" alt="Pessoa">
              </div>
              <div class="col">
                <div class="container">
                   <div class="row">
                    <h3>Quem somos?</h3>
                   </div>
                   <div class="row texto-quem-somos">
                    <p>Somos uma empresa com profissionais altamente capacitados e com anos de experiência no mercado financeiro.</p>
                    <p>Trabalhamos com todas as modalidades de crédito e praticamente todas as instituições. Visando sempre oferecer a opção adequada ao perfil do cliente.</p>
                    <p>A Primecred possui uma estrutura de atendimento que permite oferecer a seus clientes um serviço de alto nível, com eficiência e agilidade. Buscando a satisfação integral do cliente.</p>
                 </div>
                 <div class="row adjust-space">
                  <div class="col-sm-8 background-set">
                      <h3>Crédito Pessoal & Empresarial</h3>
                      <ul class="list-unstyled lista-check">
                          <li><i class="fa fa-check-square-o" aria-hidden="true"><span class="item-check"> Totalmente online</span></i></li>
                          <li><i class="fa fa-check-square-o" aria-hidden="true"><span class="item-check"> Rápido</span></i></li>
                          <li><i class="fa fa-check-square-o" aria-hidden="true"><span class="item-check"> Seguro</span></i></li>
                      </ul>
                  </div>
                  <div class="col-sm-4 text-right">
                      <img class="img-fluid ml-5" src="assets/imgs/marca-quem-somos.png" alt="Marca Primecred"> 
                  </div>
                </div>
                </div>

              </div>
              <div class="col-sm-2 align-self-start">
                <img class="img-fluid" src="assets/imgs/mao_dinheiro.png" alt="Pessoa">
              </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid logo-container">
          
            <div class="col-sm-2">

            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid area-cliente">
            <div class="row justify-content-sm-center text-center">
              <div class="col-sm-6">
                <h5 class="cliente-satisfeito">Clientes Satisfeitos</h5>
              </div>
            </div>
            <div class="row justify-content-sm-center text-center">
               <div class="col-sm-12 titulo-cliente">
                   <h3 class="titulo-1">O que eles</h3>
                   <h3 class="titulo-2">tem a dizer?</h3>
               </div>
            </div>
            <div class="row justify-content-sm-center text-center carousel-cliente">
                <div class="col-sm-6">
                    <div id="relatoClientes" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#relatoClientes" data-slide-to="0" class="active"></li>
                          <li data-target="#relatoClientes" data-slide-to="1"></li>
                          <li data-target="#relatoClientes" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                              <div class="row row-carousel">
                                  <div class="col-sm-12 col-md-6">
                                    <p>“ Vestibulum sollicitudin nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero. Vestibulum imperdiet nibh tortor mauris condimentum nibh ”</p>
                                  </div>
                                  <div class="col-sm-12 col-md-6">
                                    <p>“ Sollicitudin nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero. Vestibulum imperdiet nibh tortor mauris condimentum nibh ”</p>
                                  </div>
                                  <div class="col-sm-12 col-md-6">
                                    <div class="row row-carousel-cliente">
                                        <div class="col-sm-12 col-md-6 text-right">
                                            <img class="img-fluid" width="50%" src="assets/imgs/persona.png" alt="Pessoa">
                                        </div>
                                        <div class="col-sm-12 col-md-6 text-left align-self-center">
                                            <span class="cliente-nome">Joana de Jesus</span>
                                            <span class="cliente-cargo">Auxiliar de serviços</span>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-12 col-md-6">
                                    <div class="row row-carousel-cliente">
                                        <div class="col-sm-12 col-md-6 text-right">
                                            <img class="img-fluid" width="50%" src="assets/imgs/persona.png" alt="Pessoa">
                                        </div>
                                        <div class="col-sm-12 col-md-6 text-left align-self-center">
                                            <span class="cliente-nome">Rodrigo Carvalho</span>
                                            <span class="cliente-cargo">Gerente de Varejo</span>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                </div>
             </div>
        </div>
        <div class="bar-footer">
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>

</html>

