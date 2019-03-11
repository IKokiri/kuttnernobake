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
                <div class="text-right col-md-1">
                    <a href="/admin/newsletter/csv">
                        <i class="fas fa-file-csv fa-2x"></i>
                    </a>                             
                </div>
                <div class="text-right col-md-1">
                     
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
                            <th>Data</th>
                            <th>Alterar</th>
                            <th>Remover</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Categoria</th>
                            <th>Data</th>
                            <th>Alterar</th>
                            <th>Remover</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                        <td>{{$category->category}}</td>
                        <td>{{$category->created_at}}</td>
                        <td class="text-center">
                            <a href="/admin/categoria/alterar/{{$category->id}}" title="Alterar" class="btn btn-warning btn-circle">
                                <i class="fas fa-pen"></i>
                            </a>                        
                        </td>
                        <td class="text-center">
                            <a href="/admin/categoria/apagar/{{$category->id}}" title="Remover" class="btn btn-danger btn-circle">
                                <i class="fas fa-trash"></i>
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
  <div class="modal-dialog" role="document">
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
                </div>           
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </div>
      </form>
    </div>
  </div>
</div>

<!-- /modal -->
@endsection

@section('script')
<script>
$(document).ready(function(){

    // $.get("api/infoNewsletter/",function(result){
    //     $("#qtdeInfoNewsletter").html(result.qtdeInscritos);
    // }).fail(function(){
        
    // });
})
</script>
@endsection
