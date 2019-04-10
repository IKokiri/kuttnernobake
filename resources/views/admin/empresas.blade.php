@extends('admin/layout.app')


@section('page')
 <!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Empresas</h1>
    <p class="mb-4">Cadastro da empresa KNBS</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">Registros</h6>
                </div>
                <div class="text-right col-md-12">
                     
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-plus-square fa-2x"></i>
                    </a>      
                </div>
            </div>            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Data</th>
                            <th>Telefones</th>
                            <th>Emails</th>
                            <th>Endereços</th>
                            <th>Horários</th>
                            <th>Alterar</th>
                            <th>Remover</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>Data</th>
                            <th>Telefones</th>
                            <th>Emails</th>
                            <th>Endereços</th>
                            <th>Horários</th>
                            <th>Alterar</th>
                            <th>Remover</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($companies as $company)
                        <tr>
                            <td>{{$company->name}}</td>
                            <td>{{$company->created_at}}</td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="modal" 
                                onclick="carregarTelefones({{$company->id}})"
                                data-target="#phoneModal" class="text-center btn btn-info btn-circle">
                                    <i class="fas fa-phone"></i>
                                </a> 
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" class="text-center btn btn-info btn-circle">
                                    <i class="fas fa-mail-bulk"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" class="text-center btn btn-info btn-circle">
                                    <i class="fas fa-map-marked-alt"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" class="text-center btn btn-info btn-circle">
                                    <i class="fas fa-clock"></i>
                                </a>
                                </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" onclick='edit({{$company->id}})' id="alterar" data-toggle="modal" data-target="#exampleModal" title="Alterar" class="btn btn-warning btn-circle">
                                    <i class="fas fa-pen"></i>
                                </a>                        
                            </td>
                            <td class="text-center">
                            
                                <a href="javascript:void(0)" onclick="ativarConfirmarApagar({{$company->id}})" title="Remover" class="btn btn-danger btn-circle apagar_{{$company->id}}">
                                    <i class="fas fa-trash"></i>
                                </a>     
                            
                                <a href="javascript:void(0)" title="Remover" id="apagar" onclick="remover({{$company->id}})" class="btn btn-success btn-circle confirmarApagar_{{$company->id}}">
                                    <i class="fas fa-check-circle "></i>
                                </a>  
                                <a href="javascript:void(0)" title="Remover" onclick="desativarConfirmarApagar()" class="btn btn-danger btn-circle confirmarApagar_{{$company->id}}">
                                    <i class="fas fa-ban"></i>
                                </a>          
                               
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form method="POST" action="">
            @csrf
            
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" name="name" id="name"  placeholder="Nome">
                    <input type="hidden" name="id" id="id">                    
                </div>    
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>            
      </form>
    </div>
  </div>
</div>
<!-- /modal -->
<!-- Modal -->
<div class="modal fade" id="phoneModal" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Telefones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form method="POST" action="">
            @csrf
            
            <div class="modal-body">
                <div class="row container">
                    <div class="col-md-2">
                        <label for="exampleInputEmail1">DDI</label>
                        <input type="text" class="form-control" name="ddi" id="ddi"  placeholder="DDI">
                    </div>
                    <div class="col-md-4">
                        <label for="exampleInputEmail1">Telefone</label>
                        <input type="text" class="form-control" name="phone" id="phone"  placeholder="Telefone">
                    </div>   
                    <div class="col-md-4"> 
                    <label for="">.</label>
                   <div>
                        <a href="javascript:void(0)" onclick="adicionarTelefone()">
                            <i class="fas fa-plus-square fa-2x"></i>
                        </a>
                   </div> 
                    </div>  
                              
                </div>    

                <input type="hidden" name="company_id" id="company_id">
                
                <div class="card-body">
                    <div class="gridTelefones">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
            </div>            
      </form>
    </div>
  </div>
</div>
<!-- /modal -->
@endsection

@section('script')
<script>

function start(){
    desativarConfirmarApagar();
}

function edit(id){
    
    result = buscarId(id);

}

function preencher(dados){

    $("#name").val(dados.name);    
    $("#id").val(dados.id);

}

function buscarId(id){

    $.get("/admin/empresas/"+id+"/edit",function(result){
         preencher(result);
    }).fail(function(){
        
    });
}

function ativarConfirmarApagar(id){
    $(".confirmarApagar_"+id).show();
    $(".apagar_"+id).hide();
}

function desativarConfirmarApagar(){
    $("*[class*=confirmarApagar]").hide();
    $("*[class*=apagar]").show();
}
function remover(id){
    $.ajax({
        type:"delete",
        url:"/admin/empresas/"+id
    }).done(function(){   
        window.location.href = "/admin/empresas";      
    })
}

$(document).ready(function(){
    
    start();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('form').submit(function(){

        event.preventDefault();
        
        id = $("#id").val();
        name = $("#name").val();
                
        if(id){
            
            $.ajax({
                type:"put",
                url:"/admin/empresas/"+id,
                data:{
                    name: name
                }
            }).done(function(){   
                window.location.href = "/admin/empresas";      
            })
        }else{
            $.ajax({
                type:"post",
                url:"/admin/empresas",
                data:{
                    name: name
                }
            }).done(function(){   
                window.location.href = "/admin/empresas";      
            })
        }
    })

    $('.modal').on('hidden.bs.modal', function (e) {
        
        $("input").val("");
        
        
    })
})

function carregarTelefones(company_id){

    $("#company_id").val(company_id);

    $.ajax({
        type: "get",
        url: "/admin/empresas/buscarPhones/"+company_id,
        data:{
        },success:function(result){
            
            telefones = "";

            $.each(result,function(key, value){
                
                telPadrao = value.default ? "btn-success" : "btn-danger"

                telefones += '<div class="row form-group">'+
                                '<div class="col-md-10">'+
                                    '<button type="button" class="btn btn-primary btn-block">'+
                                        "+"+value.ddi+" "+value.phone+
                                    '</button>'+
                                '</div>'+'<div class="col-md-1">'+
                                    '<a href="javascript:void(0)" onclick="telefonePadrao('+value.id+')" class="btn '+telPadrao+'">'+
                                    '<i class="fa fa-check-square"></i>'+
                                    '</a>'+
                                '</div>'+
                                '<div class="col-md-1">'+
                                    '<a href="javascript:void(0)" onclick="removerTelefone('+value.id+')" class="btn btn-danger">'+
                                    '<i class="fa fa-trash"></i>'+
                                    '</a>'+
                                '</div>'+
                                
                            '</div>';
                
            })
            
            $(".gridTelefones").html(telefones);
        }
    }).done(function(){

    })
}

function adicionarTelefone(){

    phone = $("#phone").val();
    ddi = $("#ddi").val();
    company_id = $("#company_id").val();

    $.ajax({
        type:"post",
        url:"/admin/telefones",
        data:{
            ddi:ddi,
            phone:phone,
            company_id:company_id
        },success:function(){
            carregarTelefones(company_id);
        }
    })

}

function telefonePadrao(phone_id){
    
    company_id = $("#company_id").val();

    $.ajax({
        type:'put',
        url:'/admin/telefones/'+phone_id+'/padrao',
        data:{
            id:phone_id,
            company_id:company_id
        },success:function(result){
            carregarTelefones(company_id)
        }
    })
}


function removerTelefone(phone_id){
    
    company_id = $("#company_id").val();

    $.ajax({
        type:'delete',
        url:'/admin/telefones/'+phone_id,
        success:function(result){
            carregarTelefones(company_id)
        }
    })
}

</script>
@endsection
