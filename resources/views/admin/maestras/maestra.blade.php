@extends('layouts.adm')

@section('title', 'Maestra')

@section('tarjeta', 'Maestras')
@section('color.tarjeta', 'bg-pink')
@section('nav-inter')
@section('planti', 'lightpink')
<div class="tab-content" id="myTabContent">
{{-- esta es la lista de los estudiantes --}}
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  {{-- comienzo de la etiqueta no eliminar --}}
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar</button>
@if(count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif

@if(\Session::has('success'))
<p>{{ \Session::get('success')}}</p>
<script>
  Swal.fire({
  icon: 'success',
  title: 'Registrado',
  text: 'La maestra se ha registrado correctamente',
  showConfirmButton: false,
  timer: 2000
})
</script>
@endif
<!-- Modal para registrar -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(231, 145, 191); color: black;">
        <h3 class="modal-title" id="exampleModalLabel">Registrar maestras</h3>
      </div>
      <div class="modal-body" style="background-color: rgb(231, 231, 231);">
        <section class="content py-3">
          <div class="container-fluid ">
            <div class="row">
              <div class="col-md-8">
                <div class="card card-primary">
                    {{-- inicia nuestro formulario y el centro del modal ... --}}
                    <form action="{{route('maestra.store')}}" method="POST" class="shadow-xl">
                        {{csrf_field()}}
                        <div class="card-body">
                                <div class="row">
                                  <div class="col-sm-8">
                                    <div class="form-group">
                                      <input type="text" name="nombre" class="form-control shadow" placeholder="Nombres">
                                    </div>
                                  </div >
                                </div>
                                <div class="row">
                                  <div class="col-sm-8">
                                    <div class="form-group">
                                      <input type="text" name="apellido" class="form-control shadow" placeholder="Apellidos">
                                    </div>
                                  </div >
                                </div>
                                <div class="row">
                                  <div class="form-group col-sm-8">
                                    <div class="input-group">
                                      <select class="form-control select2 shadow" name="cedula" id="cedula">
                                        <option selected="selected">V</option>
                                        <option>E</option>
                                      </select>
                                        <input type="text" name="cedula" placebolder="Cédula" class="form-control shadow" style="width: 50%">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-8">
                                    <div class="form-group">
                                      <input type="text" name="salon" class="form-control shadow" placeholder="Salón asignado">
                                    </div>
                                  </div >
                                </div>
                                <div class="row">
                                  <div class="col-sm-8">
                                    <div class="form-group">
                                      <textarea class="form-control" name="comentarios" rows="5" placeholder="Actas levantadas"></textarea>
                                    </div>
                                  </div >
                                </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                          </div>
                          <div class="modal-footer" style="background-color: rgb(231, 231, 231);">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                          </div>
                        </form>
                      </div>
    </div>
  </div>
  {{-- este es el final de modal para registrar--}}


  {{-- comienza la lista de las maestras --}}
<section class="py-4">
  <div class="table-responsive">
    <table class="table w-full">
      <thead class="thead-dark">
        <tr class="table-secondary">
          <th>Id</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Cedula</th>
          <th>Salon</th>
          <th>Comentarios</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($maestras as $row)
            {{-- comienzo de la tabla --}}
              <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->nombre}}</td>
                <td>{{$row->apellido}}</td>
                <td>{{$row->cedula}}</td>
                <td>{{$row->salon}}</td>
                <td>{{$row->comentarios}}</td>
                {{-- este td nos permite ver los botones --}}
                <td class="project-actions text-right">
                  <div class="btn-group" role="group">
                      {{-- boton para mostrar --}}
                      <!-- Button trigger modal -->
                      <button class="btn btn-primary btn-sm mx-1 " data-toggle="modal" data-target="#mostrarModal">
                        <i class="fas fa-eye"></i>
                      </button>

                      {{-- boton para editar --}}
                      <button  class="btn btn-success btn-sm mx-1" data-toggle="modal" data-target="#editarModal">
                        <i class="fas fa-pen"></i>
                      </button>
                      
                      {{-- boton para eliminar --}}
                      <form id="delete-form-{{$row->id}}" action="{{route('maestra.destroy', $row->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm mx-1 delete-button" type="button" data-id="{{$row->id}}">
                            <i class="fas fa-trash"></i>
                        </button>
                      </form>
                      <script>
                        // Escuchamos el evento click en los botones de eliminación
                        var deleteButtons = document.querySelectorAll('.delete-button');
                        deleteButtons.forEach(function(button) {
                            button.addEventListener('click', function(event) {
                                event.preventDefault();
                                // Mostramos el mensaje de confirmación
                              Swal.fire({
                                title: '¿Estás seguro que quieres eliminar el registro?',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Elimínar'
                              }).then((result) => {
                                if (result.isConfirmed) {
                                    // Enviamos el formulario para eliminar el registro
                                    var form = document.querySelector('#delete-form-' + button.dataset.id);
                                    form.submit();
                                    // Mostramos el mensaje de éxito
                                    Swal.fire(
                                        'Eliminado',
                                        'Registro eliminado correctamente',
                                        'success'
                            )}})});});
                      </script>
                  </div>
                </td>
              </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>
</div>

{{-- inicio con el favor de dios del modal editar --}}
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #40cc8b; color: white;">
        <h5 class="modal-title" id="editarModalLabel">Editar Maestras {{$row->id}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('maestra.update', $row->id)}}" method="POST" class="shadow-xl">
          {{csrf_field()}}
          @method('put')
          <div class="card-body">
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <input type="text" name="nombre" class="form-control shadow" placeholder="Nombres" value="{{$row->nombre}}">
                      </div>
                    </div >
                  </div>
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <input type="text" name="apellido" class="form-control shadow" placeholder="Apellidos" value="{{$row->apellido}}">
                      </div>
                    </div >
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <div class="input-group">
                        <select class="form-control select2 shadow" name="cedula">
                          <option {{ $row->cedula == 'V' ? 'selected' : '' }}selected="selected">V</option>
                          <option {{ $row->cedula == 'E' ? 'selected' : '' }}selected="selected">E</option>
                        </select>
                          <input type="text" name="cedula" placebolder="Cédula" value="{{$row->cedula}}" class="form-control shadow" style="width: 50%">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <input type="text" name="salon" value="{{$row->salon}}" class="form-control shadow" placeholder="Salón asignado">
                      </div>
                    </div >
                  </div>
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <textarea class="form-control" name="comentarios" rows="5" placeholder="Actas levantadas">{{$row->comentarios}}</textarea>
                      </div>
                    </div >
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-success">Guardar cambios</button>
                </div>
            </form>
            </div>
            
      </div>
    </div>
  </div>
{{-- fin del editar los campos --}}

{{-- inicio del modal para mostrar los registros del sistema --}}
<!-- Modal -->
<div class="modal fade" id="mostrarModal" tabindex="-1" aria-labelledby="mostrarModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mostrarModalLabel">Mostrar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



  @endsection
@section('content')

@endsection