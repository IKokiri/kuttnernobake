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
                            <th>Logos</th>
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
                            <th>Logos</th>
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
                                <a href="javascript:void(0)" data-toggle="modal" 
                                    onclick="carregarEmails({{$company->id}})"
                                    data-target="#emailModal" class="text-center btn btn-info btn-circle">
                                    <i class="fas fa-mail-bulk"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="modal" 
                                    onclick="carregarEnderecos({{$company->id}})"
                                    data-target="#addressModal" class="text-center btn btn-info btn-circle">
                                    <i class="fas fa-map-marked-alt"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="modal" 
                                    onclick="carregarHorarios({{$company->id}})"
                                    data-target="#scheduleModal" class="text-center btn btn-info btn-circle">
                                    <i class="fas fa-clock"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="modal" 
                                    onclick="carregarLogoCompany({{$company->id}})"
                                    data-target="#logoModal" class="text-center btn btn-info btn-circle">
                                    <i class="fas fa-image"></i>
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
<!-- Modal -->
<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Emails</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form method="POST" action="">
            @csrf
            
            <div class="modal-body">
                <div class="row container">
                    <div class="col-md-8">
                        <label for="exampleInputEmail1">E-Mail</label>
                        <input type="text" class="form-control" name="email" id="email"  placeholder="E-Mail">
                    </div>   
                    <div class="col-md-4"> 
                    <label for="">.</label>
                   <div>
                        <a href="javascript:void(0)" onclick="adicionarEmail()">
                            <i class="fas fa-plus-square fa-2x"></i>
                        </a>
                   </div> 
                    </div>  
                              
                </div>    

                <input type="hidden" name="company_id" id="company_id">
                
                <div class="card-body">
                    <div class="gridEmails">
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
<!-- Modal -->
<div class="modal fade" id="addressModal" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Endereços</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form method="POST" action="">
            @csrf
            
            <div class="modal-body">
                <div class="row container">
                    <div class="col-md-8">
                        <label for="exampleInputEmail1">Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco"  placeholder="Endereço">
                    </div>   
                    <div class="col-md-4"> 
                    <label for="">.</label>
                   <div>
                        <a href="javascript:void(0)" onclick="adicionarEndereco()">
                            <i class="fas fa-plus-square fa-2x"></i>
                        </a>
                   </div> 
                   
                    </div>  
                    <div class="mb-3">
                    <code id="enderecoSelecionado"></code>
                  </div>  
                </div>    

                <input type="hidden" name="company_id" id="company_id">
                <input type="hidden" name="place_id" id="place_id">
               
                <div class="card-body">
                    <div class="gridEnderecos">
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
<!-- Modal -->
<div class="modal fade" id="scheduleModal" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Horários</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form method="POST" action="">
            @csrf
            
            <div class="modal-body">
                <div class="row container">
                    <div class="col-md-5">
                        <label for="dia_inicio">Dia Início</label>
                        <input type="text" class="form-control" name="dia_inicio" id="dia_inicio"  
                        placeholder="Segunda">
                    </div> 
                    <div class="col-md-5">
                        <label for="dia_fim">Dia Fim</label>
                        <input type="text" class="form-control" name="dia_fim" id="dia_fim"  
                        placeholder="Sexta">
                    </div>   
                    <div class="col-md-5">
                        <label for="hora_inicio">Horário Início</label>
                        <input type="text" class="form-control" name="hora_inicio" id="hora_inicio"  
                        placeholder="08:00">
                    </div> 
                    <div class="col-md-5">
                        <label for="hora_fim">Horário Fim</label>
                        <input type="text" class="form-control" name="hora_fim" id="hora_fim"  
                        placeholder="18:00">
                    </div>  
                    <div class="col-md-2"> 
                    <label for="">.</label>
                   <div>
                        <a href="javascript:void(0)" onclick="adicionarHorario()">
                            <i class="fas fa-plus-square fa-2x"></i>
                        </a>
                   </div> 
                   
                    </div>  
                    <div class="mb-3">
                    
                  </div>  
                </div>    

                <input type="hidden" name="company_id" id="company_id">
                <input type="hidden" name="place_id" id="place_id">
               
                <div class="card-body">
                    <div class="gridHorarios">
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
<!-- Modal -->
<div class="modal fade" id="logoModal" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
  <<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Imagens</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>        
        <div class="modal-body">
                    
            <div class="row imagens form-group">
            </div>
            
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file">
                    <label class="custom-file-label" id="filename" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Selecione o arquivo...</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text" id="inputGroupFileAddon02"  style="cursor:pointer" onclick="enviarLogoCompany()">Upload</span>
                </div>
                <input type="hidden" name="company_id" id="company_id">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
        </div> 
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

document.getElementById("endereco").addEventListener ('keyup', (event) => {
    endereco = $("#endereco").val();
    endereco = endereco.replace(" ","+");
    
    $.ajax({
        headers:"",
        type:"get",
        url:"https://maps.googleapis.com/maps/api/geocode/json?address="+endereco+"&key=AIzaSyBUkoTXt1bL6oLyPUFFdVQXVlJpxbW-jWQ",
        success:function(result){
            if(result.status == "OK"){
                add = result['results'][0].formatted_address;
                place_id = result['results'][0].place_id;
                $("#place_id").val(place_id);
                link = "<span id='addrres' onclick='setarEndereco(\""+add+"\")' style='cursor:pointer'>"+add+"</span>"

                $("#enderecoSelecionado").html(link);
            }else{
                $("#enderecoSelecionado").html("Não encontrado");
            }
            
        },error:function(){
            $("#enderecoSelecionado").html("");
        }
    })
});

function setarEndereco(endereco){
    $("#endereco").val(endereco);
}

// OPERAÇÕES DE TELEFONE
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

// OPERAÇÕES DE EMAIL
function carregarEmails(company_id){

$("#company_id").val(company_id);

$.ajax({
    type: "get",
    url: "/admin/empresas/buscarEmails/"+company_id,
    data:{
    },success:function(result){
        
        emails = "";

        $.each(result,function(key, value){
            
            emailPadrao = value.default ? "btn-success" : "btn-danger"

            emails += '<div class="row form-group">'+
                            '<div class="col-md-10">'+
                                '<button type="button" class="btn btn-primary btn-block">'+
                                     value.email+
                                '</button>'+
                            '</div>'+'<div class="col-md-1">'+
                                '<a href="javascript:void(0)" onclick="padraoEmail('+value.id+')" class="btn '+emailPadrao+'">'+
                                '<i class="fa fa-check-square"></i>'+
                                '</a>'+
                            '</div>'+
                            '<div class="col-md-1">'+
                                '<a href="javascript:void(0)" onclick="removerEmail('+value.id+')" class="btn btn-danger">'+
                                '<i class="fa fa-trash"></i>'+
                                '</a>'+
                            '</div>'+
                            
                        '</div>';
        })
        
        $(".gridEmails").html(emails);
    }
}).done(function(){

})
}

function adicionarEmail(){

email = $("#email").val();
company_id = $("#company_id").val();

$.ajax({
    type:"post",
    url:"/admin/emails",
    data:{
        email:email,
        company_id:company_id
    },success:function(){
        carregarEmails(company_id);
    }
})

}

function padraoEmail(email_id){

    company_id = $("#company_id").val();

    $.ajax({
        type:'put',
        url:'/admin/emails/'+email_id+'/padrao',
        data:{
            id:email_id,
            company_id:company_id
        },success:function(result){
            carregarEmails(company_id)
        }
    })
}


function removerEmail(email_id){

    company_id = $("#company_id").val();

    $.ajax({
        type:'delete',
        url:'/admin/emails/'+email_id,
        success:function(result){
            carregarEmails(company_id)
        }
    })
}
// OPERAÇÕES DE ENDEREÇO
function carregarEnderecos(company_id){

$("#company_id").val(company_id);

$.ajax({
    type: "get",
    url: "/admin/empresas/buscarEnderecos/"+company_id,
    data:{
    },success:function(result){
        
        enderecos = "";

        $.each(result,function(key, value){
            
            enderecoPadrao = value.default ? "btn-success" : "btn-danger"

            enderecos += '<div class="row form-group">'+
                            '<div class="col-md-10">'+
                                '<button type="button" class="btn btn-primary btn-block">'+
                                     value.address+
                                '</button>'+
                            '</div>'+'<div class="col-md-1">'+
                                '<a href="javascript:void(0)" onclick="padraoEndereco('+value.id+')" class="btn '+enderecoPadrao+'">'+
                                '<i class="fa fa-check-square"></i>'+
                                '</a>'+
                            '</div>'+
                            '<div class="col-md-1">'+
                                '<a href="javascript:void(0)" onclick="removerEndereco('+value.id+')" class="btn btn-danger">'+
                                '<i class="fa fa-trash"></i>'+
                                '</a>'+
                            '</div>'+
                            
                        '</div>';
        })
        
        $(".gridEnderecos").html(enderecos);
    }
}).done(function(){

})
}

function adicionarEndereco(){

endereco = $("#endereco").val();
place_id = $("#place_id").val();
company_id = $("#company_id").val();

$.ajax({
    type:"post",
    url:"/admin/enderecos",
    data:{
        address:endereco,
        place_id:place_id,
        company_id:company_id
    },success:function(){
        carregarEnderecos(company_id);
    }
})

}

function padraoEndereco(endereco_id){

    company_id = $("#company_id").val();

    $.ajax({
        type:'put',
        url:'/admin/enderecos/'+endereco_id+'/padrao',
        data:{
            id:endereco_id,
            company_id:company_id
        },success:function(result){
            carregarEnderecos(company_id)
        }
    })
}


function removerEndereco(endereco_id){

    company_id = $("#company_id").val();

    $.ajax({
        type:'delete',
        url:'/admin/enderecos/'+endereco_id,
        success:function(result){
            carregarEnderecos(company_id)
        }
    })
}
// OPERAÇÕES DE Horarios
function carregarHorarios(company_id){

$("#company_id").val(company_id);

$.ajax({
    type: "get",
    url: "/admin/empresas/buscarHorarios/"+company_id,
    data:{
    },success:function(result){
        
        horarios = "";

        $.each(result,function(key, value){
            
            horarioPadrao = value.default ? "btn-success" : "btn-danger"

            horarios += '<div class="row form-group">'+
                            '<div class="col-md-10">'+
                                '<button type="button" class="btn btn-primary btn-block">'+
                                     value.start_date+" "+value.end_date+" "+value.start_time+" "+value.end_time+
                                '</button>'+
                            '</div>'+'<div class="col-md-1">'+
                                '<a href="javascript:void(0)" onclick="padraoHorario('+value.id+')" class="btn '+horarioPadrao+'">'+
                                '<i class="fa fa-check-square"></i>'+
                                '</a>'+
                            '</div>'+
                            '<div class="col-md-1">'+
                                '<a href="javascript:void(0)" onclick="removerHorario('+value.id+')" class="btn btn-danger">'+
                                '<i class="fa fa-trash"></i>'+
                                '</a>'+
                            '</div>'+
                            
                        '</div>';
        })
        
        $(".gridHorarios").html(horarios);
    }
}).done(function(){

})
}

function adicionarHorario(){

start_date = $("#dia_inicio").val();
start_time = $("#hora_inicio").val();
end_date = $("#dia_fim").val();
end_time = $("#hora_fim").val();
company_id = $("#company_id").val();

$.ajax({
    type:"post",
    url:"/admin/horarios",
    data:{
        start_date:start_date,
        start_time:start_time,
        end_date:end_date,
        end_time:end_time,
        company_id:company_id
    },success:function(){
        carregarHorarios(company_id);
    }
})

}

function padraoHorario(horario_id){

    company_id = $("#company_id").val();

    $.ajax({
        type:'put',
        url:'/admin/horarios/'+horario_id+'/padrao',
        data:{
            id:horario_id,
            company_id:company_id
        },success:function(result){
            carregarHorarios(company_id)
        }
    })
}


function removerHorario(horario_id){

    company_id = $("#company_id").val();

    $.ajax({
        type:'delete',
        url:'/admin/horarios/'+horario_id,
        success:function(result){
            carregarHorarios(company_id)
        }
    })
}

function enviarLogoCompany(){

file = $("#file").prop('files')[0];
company_id = $("#company_id").val();

var formData = new FormData();

formData.append('file', file);
formData.append('company_id', company_id);

$.ajax({
    type:"post",
    url:"/admin/empresaLogo",
    dataType: 'JSON',
    data:formData,
    processData: false,
    cache: false,
    contentType: false,
    success:function(data){        

        company_id = $("#company_id").val();
        carregarLogoCompany(company_id);

    },       
}).done(function(){
    
});

}


function apagarLogo(logo_id){

company_id = $("#company_id").val();

$.ajax({
    type: "delete",
    url:"/admin/empresaLogo/"+logo_id,
    dataType:"JSON",
    success:function(){

        carregarLogoCompany(company_id);
    },
}).done(function(){

});
}

function setarCompanyId(company_id){
    $("#company_id").val(company_id);
}

function carregarLogoCompany(company_id){
    
setarCompanyId(company_id);

$.ajax({
    type:"get",
    url:"/admin/empresas/"+company_id+"/buscarLogos",
    dataType:"JSON",
    success:function(result){

        cardLogo = "";

        $.each(result,function(key, logo){

            logoPadrao = logo.default ? "btn-success" : "btn-danger"
            cardLogo +='<div class="col-4">'+
                    '<div class="card">'+
                    '<img src="/'+logo.path+'" class="card-img-top" alt="...">'+
                    '<div class="card-body">'+
                    '<a href="javascript:void(0)" onclick="apagarLogo('+logo.id+')" title="Remover" class="btn btn-danger btn-circle">'+
                    '<i class="fas fa-trash"></i>'+
                    '</a>'+
                    '<a href="javascript:void(0)" onclick="padraoLogo('+logo.id+')" title="padraoLogo" class="pull-right btn '+logoPadrao+' btn-circle">'+
                    '<i class="fas fa-check"></i>'+
                    '</a>'+
                    '</div>'+
                    '</div>'+
                    '</div>';
        })

        $(".imagens").html(cardLogo);
       
    },
}).done(function(){

})

}

function padraoLogo(logo_id){

company_id = $("#company_id").val();

$.ajax({
    type:'put',
    url:'/admin/empresaLogo/'+logo_id+'/padrao',
    data:{
        id:logo_id,
        company_id:company_id
    },success:function(result){
        carregarLogoCompany(company_id)
    }
})
}
</script>
@endsection
