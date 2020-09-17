<?php require 'includes/header.php'; ?>

<?php require_once 'includes/navbar.php'; ?>

    <section class="div-principal">
        <div class="container-fluid justify-content-space-between">
            <div class="row">
              <div class="col-sm-2 text-left">
                <img class="img-fluid" src="assets/imgs/silhueta_p.png" alt="Pessoa">
              </div>
              <div class="col text-center div-0">
                <h3>Crédito Pessoal & Empresarial</h3>
                <div class="row div-0">
                    <div class="col mr-3 text-right">
                        <img class="img-fluid" src="assets/imgs/persona.png" alt="Pessoa">
                        <p class="texto-1">Para Você</p>
                    </div>
                    <div class="col ml-3 text-left">
                        <img class="img-fluid" src="assets/imgs/mala.png" alt="Mala">
                        <p class="texto-1">Para Empresas</p>
                    </div>
                 </div>
              </div>
              <div class="col-sm-2 text-right">
                <img class="img-fluid" src="assets/imgs/mao_dinheiro.png" alt="Pessoa">
              </div>
            </div>
        </div>
        <div class="container-fluid div-secondaria">
            <div class="row justify-content-sm-center text-center">
              <div class="col-sm-12">
                <h3 class="texto-2">Levando soluções em crédito a quem precisa!</h3>
              </div>
            </div>
            <div class="row justify-content-sm-center text-center">
               <div class="col-sm-8">
                   <h5 class="texto-3">Avaliação sem compromisso e totalmente online, de forma rápida e segura. Saiba qual empréstimo é ideal para você.</h5>
               </div>
            </div>
            <div class="row justify-content-sm-center text-center">
                <div class="col-sm-6">
                  <h6 class="texto-4">Faça uma solicitação de crédito e saiba as taxas, prazos, modalidades e valor das parcelas.</h6>
                </div>
            </div>
            <div class="row justify-content-sm-center text-center">
                <div class="col-sm-6">
                   <a href="#formulario"><button type="button" class="btn btn-credito">Solicite</button></a>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container-fluid">
           <div class="row">
              <div class="col-sm-3 col-md-4 col-lg-5 col-xg-5">
                 <img class="img-fluid" src="assets/imgs/marca_fundo.png" alt="Pessoa">
               </div>
               <div class="col-sm-8 col-md-6 col-lg-5 col-xg-5 pl-5">
                  <h3 class="texto-5">Uma de nossas soluções é adequada à sua necessidade</h3>
                  <p class="texto-6">Modalidades de crédito oferecidas:</p>
                  <ul class="list-unstyled lista-principal">
                    <li>
                        <img class="img-fluid" src="assets/imgs/icon_feather-check-circle.png" alt="Icone Check Circle"><span> Crédito pessoal</span>
                    </li>
                    <li>
                        <img class="img-fluid" src="assets/imgs/icon_feather-check-circle.png" alt="Icone Check Circle"><span> Débito em conta corrente</span>
                    </li>
                    <li>
                        <img class="img-fluid" src="assets/imgs/icon_feather-check-circle.png" alt="Icone Check Circle"><span> Parcelamento em carnê</span>
                    </li>
                    <li>
                        <img class="img-fluid" src="assets/imgs/icon_feather-check-circle.png" alt="Icone Check Circle"><span> Parcelamento em cheque</span>
                    </li>
                    <li>
                        <img class="img-fluid" src="assets/imgs/icon_feather-check-circle.png" alt="Icone Check Circle"><span> Empréstimo no cartão de crédito</span>
                    </li>
                    <li>
                        <img class="img-fluid" src="assets/imgs/icon_feather-check-circle.png" alt="Icone Check Circle"><span> Empréstimo garantido por imóvel ou veículo</span>
                    </li>
                    <li>
                        <img class="img-fluid" src="assets/imgs/icon_feather-check-circle.png" alt="Icone Check Circle"><span> Crédito Consignado</span>
                    </li>
                    <li>
                        <img class="img-fluid" src="assets/imgs/icon_feather-check-circle.png" alt="Icone Check Circle"><span> Portabilidade de crédito consignado</span>
                    </li>
                    <li>
                        <img class="img-fluid" src="assets/imgs/icon_feather-check-circle.png" alt="Icone Check Circle"><span> Crédito para negativado</span>
                    </li>
                  </ul>
               </div>
               <div class="col-sm-1 col-md-2 col-lg-2 col-xg-2 text-right align-self-center">
                <img class="img-fluid" src="assets/imgs/moeda_flor.png" alt="Pessoa">
               </div>
           </div>
        </div>
    </section>


    <section id="formulario">
        <div class="container-fluid">
            <div class="row justify-content-sm-left text-center">
                <div class="col-sm-10 col-md-8">
                    <h3 class="texto-7">Solicitar Crédito</h3>
                </div>
                
            </div>
            <form action="mail/formemail.php" method="post">
                <div class="row justify-content-sm-center text-center">
                    <div class="col-sm-10 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" id="txtNome" name="txtNome" minlength="3" placeholder="Nome Completo" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" id="txtCPF" name="txtCPF" minlength="11" placeholder="CPF" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <input type="date" class="form-control" id="txtDate" name="txtDate" placeholder="Data de Nascimento" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" id="txtFormaTrat" name="txtFormaTrat" placeholder="Forma de Tratamento - Ex: Sr. josé">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <input type="tel" class="form-control" id="txtTel" name="txtTel" minlength="8" placeholder="Telefone" id="telefoneUsuario" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="email" class="form-control" id="txtEmail" name="txtEmail" minlength="5" placeholder="Email" id="emailUsuario" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <input type="number" class="form-control" id="txtRenda" name="txtRenda" minlength="3" placeholder="Renda Bruta" id="rendaBruta" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" id="txtValorSolic" name="txtValorSolic" minlength="3" placeholder="De Quanto você precisa?" id="valorEmprestimo" required>
                            </div>
                        </div>
                        <div class="form-row form-group col-sm-12">
                            <input class="form-check-input" type="checkbox" name="checkMail" id="checkMail">
                            <label class="form-check-label" for="checkMail">
                            Concordo em receber da Primecred comunicações por email e SMS.
                            </label>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-12">
                                <button type="submit" onclick="msgForm()" class="btn btn-credito">Solicitar Crédito</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section>
        <div class="container-fluid justify-content-space-between">
            <div class="row">
              <div class="col-sm-2 mb-5">
                <img class="img-fluid" src="assets/imgs/mao_flor.png" alt="Pessoa">
              </div>
            </div>
        </div>
        <div class="bar-footer">
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>

</html>

<script>
function msgForm()
{
    alert("Mensagem enviada!");
}
</script>