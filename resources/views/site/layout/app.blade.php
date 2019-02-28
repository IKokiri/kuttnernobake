<!DOCTYPE html>
<html lang="en">

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
   
</script>
</html>