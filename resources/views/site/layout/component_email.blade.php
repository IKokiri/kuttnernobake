<!-- Contact Form Section -->
<section class="contact-form-section"  id="orcamentoContato">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Title Column -->
            <div class="image-column col-md-4 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <div class="image"><img src="/images/contato/kuttner no bake solutions mail.jpg" alt=""></div>
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
                    <form method="post" action="sendemail">
                    
                            <div class="row clearfix">
                            <div class="column col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="subject" style="font-weight: bold; color:black" value="<?= isset($_GET['produto'])?$_GET['produto']:'' ?>" placeholder="Assunto"
                                        required>
                                </div>
                            </div>
                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="username" value="" placeholder="Nome*"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Email*"
                                            required>
                                    </div>
                                    
                                </div>
                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                    
                                    <div class="form-group">
                                        <input type="tel" name="telefone" value=""
                                            placeholder="(19) 99999-9999" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="empresa" value="" placeholder="Empresa"
                                            required>
                                    </div>
                                    
                                </div>
                              
                                <!-- <div class="column col-md-12 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <button type="submit" class="theme-btn">Enviar</button>
                                    </div>
                                </div> -->
                            </div>
                            
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Mensagem"><?= isset($_GET['produto'])?"Boa Tarde.\n\nGostaria de receber um orçamento referente ao produto ".explode("-",$_GET['produto'])[1]." com as seguintes especificações:\n\nObrigado(a).":'' ?></textarea>
                                    </div>
                            
                            <div class="form-group">
                                <button type="submit" class="theme-btn">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>