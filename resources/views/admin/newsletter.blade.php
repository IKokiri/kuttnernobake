@extends('admin/layout.app')


@section('page')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Newsletter</h1>
    <p class="mb-4">Grupo de assinantes para recebimento de novidades.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Inscritos</h6>
            <div class="text-right">
                <a href="/admin/newsletter/csv">
                    <i class="fas fa-file-csv fa-2x"></i>
                </a>            
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th>Email</th>
                        <th>Data</th>
                        <th>Remover</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th>Email</th>
                        <th>Data</th>
                        <th>Remover</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($news as $new)
                        <tr>
                        <td>{{$new->email}}</td>
                        <td>{{$new->created_at}}</td>
                        <td class="text-center">
                            <a href="/admin/newsletter/apagar/{{$new->id}}" class="btn btn-danger btn-circle">
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
@endsection