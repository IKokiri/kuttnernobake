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
    
    emails = $("#email").val();
    
    $.ajax({
        url: "/api/newsletter",
        type: 'POST',
        dataType: 'JSON',
        data: {

            email: emails

        }, success: function (data) {
        }
    }).done(function () {
        $('#table_principal').DataTable();
    });
}
   
</script>
</html>