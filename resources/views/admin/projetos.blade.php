@extends('admin/layout.app')


@section('page')
 <!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Projetos</h1>
    <p class="mb-4">Cadastro de projetos KNBS</p>

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
                            <th>Cliente</th>
                            <th>Produto</th>
                            <th>Data</th>
                            <th>Imagem</th>
                            <th>Alterar</th>
                            <th>Remover</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Cliente</th>
                            <th>Produto</th>
                            <th>Data</th>
                            <th>Imagem</th>
                            <th>Alterar</th>
                            <th>Remover</th>
                        </tr>
                    </tfoot>
                    <tbody>
                   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Projetos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form method="POST" action="/admin/products">
            @csrf            
            <div class="modal-body">  

                <div class="form-group">
                    <label for="client_id">Cliente</label>
                    <select class="form-control" name="client_id" id="client_id">
                    </select>  
                </div>  
                <div class="form-group">
                    <label for="product_id">Produto</label>
                    <select class="form-control" name="product_id" id="product_id">
                    </select>  
                </div>  

                <input type="hidden" name="id" id="id"> 
                
            <textarea name="description" id="description" cols="30" rows="20"></textarea>       
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
<div class="modal fade" id="modalImagens" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
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
                        <span class="input-group-text" id="inputGroupFileAddon02"  style="cursor:pointer" onclick="enviarImagemProduto()">Upload</span>
                </div>
                <input type="hidden" name="product_id" id="product_id">
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
    buscaProdutos();
    buscarClientes();
}

function buscaProdutos(){
    $.ajax({
        type:"get",
        url:"/api/admin/produtos"
    }).done(function(result){   
        
        product_id = $("#product_id");

        product_id.append("<option value='0'>Selecione</option>");
        
        $.each(result,function(values, value){
            product_id.append("<option value="+value.id+">"+value.product+"</option>");
        })
    })    
}

function buscarClientes(){
    $.ajax({
        type:"get",
        url:"/api/admin/clientes"
    }).done(function(result){   
        
        client_id = $("#client_id");

        client_id.append("<option value='0'>Selecione</option>")
        
        $.each(result,function(values, value){
            client_id.append("<option value="+value.id+">"+value.name+"</option>");
        })
    })    
}

function edit(id){
    
    result = buscarId(id);

}

function preencher(dados){
    $("#product").val(dados.product);
    $("#category_id").val(dados.category_id);
    tinyMCE.activeEditor.setContent(dados.description);
    $("#id").val(dados.id);
}

function buscarId(id){

    $.get("/admin/produtos/"+id+"/editar",function(result){
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
        url:"/admin/produtos/"+id
    }).done(function(){   
        window.location.href = "/admin/produtos";      
    })
}

function enviarImagemProduto(){

    file = $("#file").prop('files')[0];
    product_id = $("#product_id").val();
    
    var formData = new FormData();


    formData.append('file', file);
    formData.append('product_id', product_id);

    $.ajax({
        type:"post",
        url:"/admin/produtoImagem",
        dataType: 'JSON',
        data:formData,
        processData: false,
        cache: false,
        contentType: false,
        success:function(data){
            

            product_id = $("#product_id").val();
            carregarImagensProduto(product_id);
            
        
        },       
    }).done(function(){
        
    });

}

function apagarImagem(image_id){

    product_id = $("#product_id").val();

    $.ajax({
        type: "delete",
        url:"/admin/produtoImagem/"+image_id,
        dataType:"JSON",
        success:function(){

            carregarImagensProduto(product_id);
        },
    }).done(function(){

    });
}

function carregarImagensProduto(product_id){
        
    setarProductId(product_id);

    $.ajax({
        type:"get",
        url:"/admin/produtos/"+product_id+"/buscarImagens",
        dataType:"JSON",
        success:function(result){

            cardImage = "";

            $.each(result,function(key, imagem){
                cardImage +='<div class="col-4">'+
                        '<div class="card">'+
                        '<img src="/'+imagem.path+'" class="card-img-top" alt="...">'+
                        '<div class="card-body">'+
                        '<a href="javascript:void(0)" onclick="apagarImagem('+imagem.id+')" title="Remover" class="btn btn-danger btn-circle">'+
                        '<i class="fas fa-trash"></i>'+
                        '</a>'+
                        '</div>'+
                        '</div>'+
                        '</div>';
            })

            $(".imagens").html(cardImage);
           
        },
    }).done(function(){

    })

}

function setarProductId(product_id){
    $("#product_id").val(product_id);
}

$(document).ready(function(){
    $(document).on("change","#file",function(){
        filename = $(this).val();
        filename = filename.split("\\");
        $("#filename").html(filename[2]);
    })
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    start();

    $('form').submit(function(){

        event.preventDefault();

        product = $("#product").val();
        description = $("#description").val();
        category_id = $("#category_id").val();        
        id = $("#id").val();
        
        dados = {
            product : product,
            description : description,
            category_id : category_id
        }


        if(id){
            
        $.ajax({
                type:"put",
                url:"/admin/produtos/"+id,
                data:dados
            }).done(function(){   
                window.location.href = "/admin/produtos";      
            })
        }else{
            $.ajax({
                type:"post",
                url:"/admin/produtos",
                data:dados
            }).done(function(){   
                window.location.href = "/admin/produtos";      
            })
        }
    })

    $('.modal').on('hidden.bs.modal', function (e) {
        
        $("input").val("");
        $("select").val("0");
        tinyMCE.activeEditor.setContent("");
        
    })
})
</script>
@endsection