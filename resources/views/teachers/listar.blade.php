@extends('layouts.layoutAdmin')
@section('head')

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- jsGrid -->
  <link rel="stylesheet" href="{{ asset('plugins/jsgrid/jsgrid.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/jsgrid/jsgrid-theme.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endsection

@section('conteudo')
    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <div class="w-100 d-flex justify-content-between align-itens-center">
            <h3 class="card-title align-middle">Listagem de Professores</h3>
            <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Cadastrar novo Professor</button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Grau Escolaridade</th>
                <th>Turma</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($teachers as $teacher)
                  <tr>
                    <td>{{$teacher->name}}</td>
                    <td>{{ \Carbon\Carbon::parse($teacher->birthday_date)->format('d/m/Y')}}</td>
                    <td>{{$teacher->highest_degree}}</td>
                    <td>{{App\Models\SchoolClass::find($teacher->school_class_id) -> name}}</td>
                    <td>
                      <button class="btn btn-info">Informações</button>
                      <button class="btn btn-warning">Editar</button>
                      <button class="btn btn-danger">Deletar</button>
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Novo Professor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('professor.store')}}" id="form-create" method="POST">
          @csrf
          <div class="w-100 d-flex flex-column align-itens-center">
            <div class="form-group">
              <label for="">Nome</label>
              <input class="form-control" type="text" name="name" id="">
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Tipo de Documento</label>
                  <select class="form-control" name="document_type">
                    <option value="1">RG</option>
                    <option value="2">CPF</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="">Documento</label>
              <input class="form-control" type="text" name="document" id="">
            </div>
            <div class="form-group">
              <label for="">Data de Nascimento</label>
              <input class="form-control" type="date" name="birthday_date" id="">
            </div>
            <div class="form-group">
              <label for="">Grau Escolaridade</label>
              <input class="form-control" type="text" name="highest_degree" id="">
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Classe</label>
                  <select class="form-control" name="school_class_id">
                    @foreach ($classes as $class)
                      <option value="{{$class->id}}">{{$class->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" form="form-create">Salvar</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- jsGrid -->
<script src="{{asset('plugins/jsgrid/demos/db.js')}}"></script>
<script src="{{asset('plugins/jsgrid/jsgrid.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>
<!-- Page specific script -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>  
<script>
  $(document).ready(function() {
    $('#classes-select').select2();
    $('#document-select').select2();
  });
  
</script>
@endsection