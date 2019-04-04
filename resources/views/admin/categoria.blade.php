@extends('admin/layout.app')


@section('page')
 <!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Categorias</h1>
    <p class="mb-4">Cadastro de categorias dos produtos KNBS</p>

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
                            <th>Categoria</th>
                            <th>Descrição</th>
                            <th>Data</th>
                            <th>Alterar</th>
                            <th>Remover</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Categoria</th>
                            <th>Descrição</th>
                            <th>Data</th>
                            <th>Alterar</th>
                            <th>Remover</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->category}}</td>
                            <td>{{substr($category->description,0,20)}}...</td>
                            <td>{{$category->created_at}}</td>
                            <td class="text-center">
                                <a href="javascript:void(0)" onclick='edit({{$category->id}})' id="alterar" data-toggle="modal" data-target="#exampleModal" title="Alterar" class="btn btn-warning btn-circle">
                                    <i class="fas fa-pen"></i>
                                </a>                        
                            </td>
                            <td class="text-center">
                            
                                <a href="javascript:void(0)" onclick="ativarConfirmarApagar({{$category->id}})" title="Remover" class="btn btn-danger btn-circle apagar_{{$category->id}}">
                                    <i class="fas fa-trash"></i>
                                </a>     
                            
                                <a href="javascript:void(0)" title="Remover" id="apagar" onclick="remover({{$category->id}})" class="btn btn-success btn-circle confirmarApagar_{{$category->id}}">
                                    <i class="fas fa-check-circle "></i>
                                </a>  
                                <a href="javascript:void(0)" title="Remover" onclick="desativarConfirmarApagar()" class="btn btn-danger btn-circle confirmarApagar_{{$category->id}}">
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
        <h5 class="modal-title" id="exampleModalLabel">Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form method="POST" action="/admin/categoria">
            @csrf
            
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Categoria</label>
                    <input type="text" class="form-control" name="category" id="category"  placeholder="Categoria">
                    <input type="hidden" name="id" id="id">
                    
                </div>    
                
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

    $("#category").val(dados.category);    
    tinyMCE.activeEditor.setContent(dados.description);
    $("#id").val(dados.id);

}

function buscarId(id){

    $.get("/admin/categoria/"+id+"/editar",function(result){
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
        url:"/admin/categoria/apagar/"+id
    }).done(function(){   
        window.location.href = "/admin/categoria";      
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
        category = $("#category").val();
        description = $("#description").val();
        
        
        if(id){
            
            $.ajax({
                type:"put",
                url:"/admin/categoria/"+id,
                data:{
                    category: category,
                    description: description
                }
            }).done(function(){   
                window.location.href = "/admin/categoria";      
            })
        }else{
            $.ajax({
                type:"post",
                url:"/admin/categoria",
                data:{
                    category: category,
                    description: description}
            }).done(function(){   
                window.location.href = "/admin/categoria";      
            })
        }
    })

    $('.modal').on('hidden.bs.modal', function (e) {
        
        $("input").val("");
        tinyMCE.activeEditor.setContent("");
        
    })
})
</script>
@endsection
