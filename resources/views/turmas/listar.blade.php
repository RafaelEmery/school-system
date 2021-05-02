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
            <h3 class="card-title align-middle">Listagem das turmas</h3>
            <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Criar nova Turma</button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Data de Início</th>
                <th>Data de Fim</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($classes as $class)
                  <tr>
                    <td>{{$class->name}}</td>
                    <td>{{$class->start_date}}</td>
                    <td>{{$class->end_date}}</td>
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('classes.store')}}" id="form-create" method="POST">
          @csrf
          <div class="w-100 d-flex flex-column align-itens-center">
            <div class="form-group">
              <label for="">Nome</label>
              <input class="form-control" type="text" name="name" id="">
            </div>
            <div class="form-group">
              <label for="">Data de Início</label>
              <input class="form-control" type="date" name="start_date" id="">
            </div>
            <div class="form-group">
              <label for="">Data de Fim</label>
              <input class="form-control" type="date" name="end_date" id="">
            </div>
            <label for="">Professores</label>
            <select class="" name="teachers[]" id="teacher-select" multiple="multiple">
              @foreach ($teachers as $teacher)
                <option value="{{$teacher->id}}">{{$teacher->name}}</option>
              @endforeach
            </select>
            <label class="mt-3" for="">Alunos</label>
            <select class="" name="students[]" id="student-select" multiple="multiple">
              @foreach ($students as $student)
                <option value="{{$student->id}}">{{$student->name}}</option>
              @endforeach
            </select>
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
    $('#teacher-select').select2();
    $('#student-select').select2();
  });

  // $(function () {
  //   $("#jsGrid1").jsGrid({
  //       height: "100%",
  //       width: "100%",

  //       sorting: true,
  //       paging: true,

  //       data: db.clients,

  //       fields: [
  //           { name: "Código", type: "number", width: 30 },
  //           { name: "Nome", itemTemplate: function(value) {
  //                           return $("<a>").attr("href", value).text(value);
  //                       }, width: 150 },
  //           { name: "Data de Inicio", type: "number", width: 70 },
  //           { name: "Data de Termino", type: "number", width: 70 },
  //       ]
  //   });
  // });
</script>
@endsection