<?php require 'includes/header.php'; ?>

<?php require_once 'includes/navbar.php'; ?>

<body>
    <section>
        <div class="container-fluid">
            <div class="row back">
                <a href="javascript:window.history.go(-1)"><i class="fa fa-arrow-left fa-2x"></i></a>
            </div>
            <div class="row justify-content-sm-left text-center">
                <div class="col-sm-12 titulo-contato">
                    <h3>Fale Conosco</h3>
                </div>
            </div>
            
            <div class="row justify-content-sm-center fale-conosco">
                <div class="col-sm-2">
                    <img class="img-fluid" src="assets/imgs/moeda_flor.png" alt="Pessoa">
                </div>
                <div class="col-sm-3 pb-2">
                    <h6 class="info-contato">Informações de Contato</h6>
                    <h4>Endereços</h4>
                    <div class="contato">
                        <h6>Brasília</h6>
                        <p>SBS Quadra 2, Bloco E, sobreloja , Sala 206</p>
                        <p>Ed. Prime Business Convenience</p>
                        <p>Asa sul - Brasília - DF</p>
                        <p>700701-120</p>
                    </div>
                    <div class="contato">
                        <h6>Goiânia</h6>
                        <p>Av 136, Quadra F44 Nº 761, 11º andar</p>
                        <p>Ed. Nasa Business Style</p>
                        <p>Setor Sul - Goiânia - GO</p>
                        <p>74093-250</p>
                    </div>
                </div>
                <div class="col-sm-5 pt-5">
                    <h4>Mensagem</h4>
                    <form action="mail/contatoemail.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-sm-12">
                                <input type="text" name="txtNome" id="txtNome" class="form-control valida-campo" placeholder="Nome Completo" minlength="3" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <input type="tel" name="txtTel" id="txtTel" class="form-control valida-campo" placeholder="Telefone" minlength="8" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="email" name="txtEmail" id="txtEmail" class="form-control" placeholder="Email" minlength="5" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-12">
                                <textarea class="form-control" name="txtMensagem" id="txtMensagem" placeholder="Digite sua mensagem" minlength="3" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-12">
                                <button type="submit" onclick="msgForm()" class="btn btn-contato">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-2 text-right">
                    <img class="img-fluid" src="assets/imgs/mao_dinheiro.png" alt="Pessoa">
                </div>
            </div>
        </div>
        <div class="container-fluid text-right">
            <div class="col-sm-12">
                <img class="img-fluid" src="assets/imgs/silhueta_p.png" alt="Pessoa">
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