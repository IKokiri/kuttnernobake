<!DOCTYPE html>
<html lang="pt-br">

@component('site/layout.component_head')
@endcomponent

<body>
    <!-- Preloader -->
    <div class="preloader"></div>
     
    @component('site/layout.component_header',["current" => $current])
    @endcomponent  

    @hasSection('carousel')
        @yield('carousel')
    @endif

    @hasSection('highlights')
        @yield('highlights')
    @endif

    @hasSection('page')
        @yield('page')
    @endif

    @component('site/layout.component_footer')
    @endcomponent   

    @component('site/layout.component_scripts')
    @endcomponent 

</body>
<script>

function adicionar_email(){

    field_email = $("#email");

    email = field_email.val();
    
    $.post("/api/newsletter", {email: email}, function(result){
        alert(result.message);
        field_email.val('');
    }).fail(function(result) {
        alert(result.responseJSON.errors['email']);
    })

   
}
$(document).on("click","#enviarEmail",function(){

    assunto = $("#assunto").val();
    nome = $("#nome").val();
    telefone = $("#telefone").val();
    email = $("#email").val();
    empresa = $("#empresa").val();
    mensagem = $("#mensagem").val();

    if(assunto == "" || nome == "" || telefone == "" || email == ""  || empresa == "" || mensagem == ""){
            $("#msgMail").html("Preencha todos os campos.");

            $("#msgMail").removeClass("alert-success")
            $("#msgMail").addClass("alert-danger")
            $("#msgMail").removeClass("hidden")
            return false;
    }

    dados={
        "assunto":assunto,
        "nome":nome,
        "telefone":telefone,
        "email":email,
        "empresa":empresa,
        "mensagem":mensagem
    }

    $.post("/api/contato/orcamento", dados, function(result){
        if(result == "200"){
            $("#msgMail").html("Envio efetuado com sucesso, em breve entraremos em contato");
            $("#msgMail").removeClass("alert-danger")
            $("#msgMail").addClass("alert-success")
            $("#msgMail").removeClass("hidden")
            
        }
    }).fail(function(result) {
        
    })
})

</script>
</html>