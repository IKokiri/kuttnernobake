<!-- Contact Form Section -->
<section class="contact-form-section"  id="orcamentoContato">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Title Column -->
            <div class="image-column col-md-4 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <div class="image"><img src="/images/kuttner no bake solutions mail.jpeg" alt=""></div>
                </div>
            </div>
            <!-- Form Column -->
            <div class="form-column col-md-8 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>Entre em contato</h2>
                    </div>
                    <!--Contact Form-->
                    <div class="contact-form style-two">
                    <div method="post" action="sendemail">
                    
                            <div class="row clearfix">
                            <div class="column col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" id="assunto" name="subject" style="font-weight: bold; color:black" value="<?= isset($_GET['produto'])?$_GET['produto']:'' ?>" placeholder="Assunto"
                                        required>
                                </div>
                            </div>
                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text"  id="nome" name="username" value="" placeholder="Nome*"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email"  id="email" name="email" value="" placeholder="Email*"
                                            required>
                                    </div>
                                    
                                </div>
                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                    
                                    <div class="form-group">
                                        <input type="tel"  id="telefone" name="telefone" value=""
                                            placeholder="(19) 99999-9999" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  id="empresa" name="empresa" value="" placeholder="Empresa"
                                            required>
                                    </div>
                                    
                                </div>
                            </div>
                            
                                    <div class="form-group">
                                        <textarea name="message"  id="mensagem" placeholder="Mensagem"><?= isset($_GET['produto'])?"Boa Tarde.\n\nGostaria de receber um orçamento referente ao produto ".explode("-",$_GET['produto'])[1]." com as seguintes especificações:\n\nObrigado(a).":'' ?></textarea>
                                    </div>
                                    <div id="msgMail" class="alert  hidden" role="alert">
                                    
                                    </div>
                            <div class="form-group">
                                <button type="submit" id='enviarEmail' class="theme-btn">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>

</script>orcamento@kuttner-nbs.com.br