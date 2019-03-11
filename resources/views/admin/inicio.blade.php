@extends('admin/layout.app')


@section('page')
 <!-- Begin Page Content -->
 <div class="container-fluid">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total de Inscritos NEWSLETTER</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" id="qtdeInfoNewsletter">0</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

@section('script')
<script>
$(document).ready(function(){

    $.get("api/infoNewsletter/",function(result){
        $("#qtdeInfoNewsletter").html(result.qtdeInscritos);
    }).fail(function(){
        
    });
})
    
</script>
@endsection
