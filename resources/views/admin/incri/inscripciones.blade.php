@extends('layouts.adm')

@section('title', 'Inscripciones')
@section('tarjeta', 'Inscripción de estudiante')
@section('color.tarjeta', 'bg-blue')
@section('planti', 'skyblue')
@section('nav-inter')

  {{-- modal para el registro --}}
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Registrar
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #5da3ee; color: white;">
          <h5 class="modal-title" id="exampleModalLabel" >Registro del alumno</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background-color: rgb(231, 231, 231);">
        {{-- aqui comienza el area centrada del modal  --}}
            <section class="content py-3">
              <div class="container-fluid ">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card card-primary">
                        {{-- inicia nuestro formulario --}}
                        <form action="{{ route('inscripciones.store') }}" method="POST" class="shadow-xl">
                            @csrf
                            <h3 class="px-3 py-2">Datos del niño/a</h3>
                            <div class="card-body">
                                      <div class="col-sm-8">
                                        <div class="form-group">
                                          <label for="nom_ape">Nombres y apellidos</label>
                                          <input type="text" name="nom_ape" class="form-control shadow" placeholder="Nombres y apellidos">
                                        </div>
                                      </div >
                                    <div class="form-group col-sm-8">
                                      <div>
                                            <p class="text-bold">Sexo</p>
                                        <div class="checkbox-container">
                                              <div class="icheck-primary d-inline">
                                                <input type="radio" name="sexo" value="masculino">
                                                <label for="sexo">Masculino</label>
                                              </div>
                                              <div class="icheck-primary d-inline">
                                                <input type="radio" id="sexo" name="sexo" value="femenino">
                                                <label for="sexo">Femenino</label>
                                              </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- comienza la fecha -->
                                      <div class="col-sm-8">
                                          <div class="form-group">
                                              <label for="fechanaci">Fecha de nacimiento</label>
                                              <input type="date" name="fechanaci" class="form-control shadow"/>
                                          </div>
                                      </div>
                                    <!-- comienza las condiciones especiales -->
                                    <div class="form-group col-sm-8">
                                          <label for="condiciones">Condiciones especiales</label>
                                      <div>
                                          <select class="form-control shadow" name="condiciones" >
                                              <option selected="selected">Seleccione</option>
                                              <option>Alergias</option>
                                              <option>Enfermedades</option>
                                              <option>Asistencia odontologica</option>
                                              <option>Intolerancia algun alimento</option>
                                              <option>Dificultad en la conducta</option>
                                              <option>Dificultad motriz</option>
                                              <option>Dificultad auditiva</option>
                                              <option>Dificultad visual</option>
                                              <option>Autismo</option>
                                          </select>
                                          <br>
                                            <label for="comentario">Comentarios:</label>
                                            <textarea class="form-control" name="comentario" id="comentarios" rows="5" placeholder="Deje aqui sus comentarios"></textarea>
                                    </div>
                                  </div>
                                      <hr class="bg-dark" style="opacity: 0.5;">
                                      <h3 class="px-3 py-2">Datos de la madre</h3>
                                  {{-- <aqui va el card body --}}
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                        <label for="nom_ape_ma">Nombres y Apellidos</label>
                                        <input type="text" name="nom_ape_ma" class="form-control shadow " placeholder="Nombres y apellidos">
                                      </div>
                                    </div>
                                  <div class="row px-3">
                                    <div class="form-group col-sm-6">
                                      <label for="correoma">Correo electrónico</label>
                                      <input type="email" class="form-control shadow" name="correoma" id="correoma" placeholder="Correo Electrónico">
                                    </div>
                                    <!-- cedula de identidad -->
                                    <div class="form-group col-sm-5">
                                      <label for="cedulama" >Cedúla</label>
                                          <div class="input-group">
                                                <select class="form-control select2 shadow" name="cedulama" id="cedulama">
                                                  <option selected="selected">V</option>
                                                  <option>E</option>
                                                </select>
                                                <input type="text" name="cedulama" placebolder="cedula" class="form-control shadow" style="width: 40%">
                                          </div>
                                    </div>
                                  </div>
                                  <!-- teléf. -->
                                  <div class="row px-3">
                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label for="telefo1ma">Teléf. principal</label>
                                        <input type="tel" name="telefo1ma" class="form-control shadow " placeholder="">
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label for="telefo2ma" >Teléf. secundario</label>
                                        <input type="tel" name="telefo2ma" class="form-control shadow" placeholder="">
                                      </div>
                                    </div>
                                  </div>
                                  <!-- problemas personales -->
                                  <div class="form-group col-sm-8">
                                          <label for="legalesma">Problemas legales</label>
                                  <div>
                                        <select name="legalesma" class="form-control shadow" >
                                          <option selected="selected">Seleccione</option>
                                          <option>Orden de alejamiento</option>
                                          <option>Medidas cautelares</option>
                                          <option>No aplica</option>
                                        </select>
                                        <br>
                                        <label for="comentarioma">Deje aquí sus comentarios:</label>
                                        <textarea class="form-control" id="comentarioma" name="comentarioma" rows="5" placeholder="Deje aqui sus comentarios"></textarea>
                                  </div>
                                  </div>
                                  {{-- comienza el registro del padre --}}
                                  <hr class="bg-dark" style="opacity: 0.5;">
                                  <h3 class="px-3 py-2">Datos del padre</h3>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                        <label for="nom_ape_pa">Nombres y apellidos</label>
                                        <input type="text" name="nom_ape_pa" id="nombrepa" class="form-control shadow " placeholder="Nombres y apellidos">
                                      </div>
                                    </div>
                                  <div class="row px-3">
                                    <div class="form-group col-sm-6">
                                      <label for="correopa">Correo electrónico</label>
                                      <input type="email" class="form-control shadow" id="correopa" name="correopa" placeholder="Correo Electrónico">
                                    </div>
                                    <!-- cedula de identidad -->
                                    <div class="form-group col-sm-5">
                                      <label for="cedulapa">Documento de identidad</label>
                                        <div class="input-group">
                                          <select name="cedulapa" id="cedulapa" class="form-control select2 shadow" >
                                            <option selected="selected">V</option>
                                            <option>E</option>
                                          </select>
                                      <input type="text" name="cedulapa" placebolder="cedula" class="form-control shadow" style="width: 50%">
                                      </div>
                                    </div>
                                  </div>
                                  <!-- teléf. -->
                                  <div class="row px-3">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label for="telefo1pa">Teléf. principal</label>
                                        <input type="tel" name="telefo1pa" id="telefo1pa" class="form-control shadow " placeholder="">
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label for="telefo2pa">Teléf. secundario</label>
                                        <input type="tel" name="telefo2pa" id="telefo2pa" class="form-control shadow" placeholder="">
                                      </div>
                                    </div>
                                  </div>
                                  <!-- problemas personales -->
                                  <div class="form-group col-sm-8">
                                    <label for="legalespa">Problemas legales</label>
                                    <div>
                                      <select name="legalespa" class="form-control shadow" >
                                        <option selected="selected">Seleccione</option>
                                        <option>Orden de alejamiento</option>
                                        <option>Medidas cautelares</option>
                                        <option>No Aplica</option>
                                      </select>
                                      <br>
                                      <label for="comentariopa">Comentarios:</label>
                                    <textarea class="form-control" name="comentariopa" id="comentariopa" rows="5" placeholder="Deje aqui sus comentarios"></textarea>
                                    </div>
                                  </div>
                                  <hr class="bg-dark" style="opacity: 0.5;">
                                  <h3 class="px-3 py-2">Autorizados para el retiro de los niños</h3>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="nom_ape_auto">Nombres y apellidos</label>
                                      <input type="text" name="nom_ape_auto" id="nom_ape_auto" class="form-control shadow " placeholder="Nombre y Apellido">
                                    </div>
                                  </div>
                                <div class="form-group col-sm-6">
                                    <label for="cedu">Documento de identidad</label>
                                  <div class="input-group">
                                    <select name="cedu"  id="cedu" class="form-control select2 shadow" >
                                      <option selected="selected">V</option>
                                      <option>E</option>
                                    </select>
                                    <input type="text" name="cedu" id="cedulaauto"  placebolder="cedula" class="form-control shadow" style="width: 50%">
                                  </div>
                                </div>
                                <div>
                                  <label for="comentarioauto">Deje aquí sus comentarios:</label>
                                  <textarea class="form-control" id="comentarioauto" name="comentarioauto" rows="5" placeholder="Deje aqui sus comentarios"></textarea>
                                </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
      {{-- aqui termina el area centrada del modal  --}}
        </div>
        <div class="modal-footer" style="background-color: rgb(231, 231, 231);">
          {{-- comienzan los botones para enviar o cancelar --}}
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
        @if(\Session::has('registrado'))
        <p>{{ \Session::get('registrado')}}</p>
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
        </div>
      </div>
    </div>
            {{-- comienzan los scrips --}}
            <div>
              <script src="/plugins/jquery/jquery.min.js"></script>
              <!-- Bootstrap 4 -->
              <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
              <!-- Bootstrap4 Duallistbox -->
              <script src="/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
              <!-- InputMask -->
              <script src="/plugins/moment/moment.min.js"></script>
              <script src="/plugins/inputmask/jquery.inputmask.min.js"></script>
              <!-- date-range-picker -->
              <script src="/plugins/daterangepicker/daterangepicker.js"></script>
              <!-- bootstrap color picker -->
              <script src="/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
              <!-- Tempusdominus Bootstrap 4 -->
              <script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
              <!-- Bootstrap Switch -->
              <script src="/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
              <!-- BS-Stepper -->
              <script src="/plugins/bs-stepper/js/bs-stepper.min.js"></script>
              <!-- dropzonejs -->
              <script src="/plugins/dropzone/min/dropzone.min.js"></script>
              <!-- AdminLTE App -->
              <script src="/dist/js/adminlte.min.js"></script>
              <!-- AdminLTE for demo purposes -->
              <script src="/dist/js/demo.js"></script>
              <!-- Page specific script -->
              <script>
                $(function () {
                  //Initialize Select2 Elements
                  $('.select2').select2()
                  //Initialize Select2 Elements
                  $('.select2bs4').select2({
                    theme: 'bootstrap4'
                  })
                  //Datemask dd/mm/yyyy
                  $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
                  //Datemask2 mm/dd/yyyy
                  $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
                  //Money Euro
                  $('[data-mask]').inputmask()
                  //Date picker
                  $('#reservationdate').datetimepicker({
                      format: 'L'
                  });
                  //Date and time picker
                  $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
                  //Date range picker
                  $('#reservation').daterangepicker()
                  //Date range picker with time picker
                  $('#reservationtime').daterangepicker({
                    timePicker: true,
                    timePickerIncrement: 30,
                    locale: {
                      format: 'MM/DD/YYYY hh:mm A'
                    }
                  })
                  //Date range as a button
                  $('#daterange-btn').daterangepicker(
                    {
                      ranges   : {
                        'Today'       : [moment(), moment()],
                        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                      },
                      startDate: moment().subtract(29, 'days'),
                      endDate  : moment()
                    },
                    function (start, end) {
                      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                    }
                  )
                  //Timepicker
                  $('#timepicker').datetimepicker({
                    format: 'LT'
                  })
                  //Bootstrap Duallistbox
                  $('.duallistbox').bootstrapDualListbox()
                  //Colorpicker
                  $('.my-colorpicker1').colorpicker()
                  //color picker with addon
                  $('.my-colorpicker2').colorpicker()
                  $('.my-colorpicker2').on('colorpickerChange', function(event) {
                    $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
                  })
                  $("input[data-bootstrap-switch]").each(function(){
                    $(this).bootstrapSwitch('state', $(this).prop('checked'));
                  })
                })
                // BS-Stepper Init
                document.addEventListener('DOMContentLoaded', function () {
                  window.stepper = new Stepper(document.querySelector('.bs-stepper'))
                })
                // DropzoneJS Demo Code Start
                Dropzone.autoDiscover = false
                // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
                var previewNode = document.querySelector("#template")
                previewNode.id = ""
                var previewTemplate = previewNode.parentNode.innerHTML
                previewNode.parentNode.removeChild(previewNode)
                var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
                  url: "/target-url", // Set the url
                  thumbnailWidth: 80,
                  thumbnailHeight: 80,
                  parallelUploads: 20,
                  previewTemplate: previewTemplate,
                  autoQueue: false, // Make sure the files aren't queued until manually added
                  previewsContainer: "#previews", // Define the container to display the previews
                  clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
                })
                myDropzone.on("addedfile", function(file) {
                  // Hookup the start button
                  file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
                })
                // Update the total progress bar
                myDropzone.on("totaluploadprogress", function(progress) {
                  document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
                })
                myDropzone.on("sending", function(file) {
                  // Show the total progress bar when upload starts
                  document.querySelector("#total-progress").style.opacity = "1"
                  // And disable the start button
                  file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
                })
                // Hide the total progress bar when nothing's uploading anymore
                myDropzone.on("queuecomplete", function(progress) {
                  document.querySelector("#total-progress").style.opacity = "0"
                })
                // Setup the buttons for all transfers
                // The "add files" button doesn't need to be setup because the config
                // `clickable` has already been specified.
                document.querySelector("#actions .start").onclick = function() {
                  myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
                }
                document.querySelector("#actions .cancel").onclick = function() {
                  myDropzone.removeAllFiles(true)
                }
                // DropzoneJS Demo Code End
              </script>
            </div>
  </div>
  {{-- esta es la lista de los estudiantes --}}
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <section class="py-4">
      <div class="table-responsive">
        <table class="table w-full">
          <thead class="thead-dark">
            <tr class="table-secondary">
              <th>Id</th>
              <th>Nombre</th>
              <th>Sexo</th>
              <th>Edad</th>
              <th>Condiciones</th>
              <th>Comentario</th>
              <th>Madre</th>
              <th>Correo electrónico</th>
              <th>Cédula</th>
              <th>Celular</th>
              <th>Celular</th>
              <th>Legales</th>
              <th>Comentario</th>
              <th>Padre</th>
              <th>Correo electrónico</th>
              <th>Cédula</th>
              <th>Celular</th>
              <th>Celular</th>
              <th>Legales</th>
              <th>Comentario</th>
              <th>Autorizado</th>
              <th>Cédula</th>
              <th>Comentario</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($incrip as $row)
            {{-- comienzo de la tabla --}}
              <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->nom_ape}}</td>
                <td>{{$row->sexo}}</td>
                <td>{{$row->fechanaci}}</td>
                <td>{{$row->condiciones}}</td>
                <td>{{$row->comentario}}</td>
                <td>{{$row->nom_ape_ma}}</td>
                <td>{{$row->correoma}}</td>
                <td>{{$row->cedulama}}</td>
                <td>{{$row->telefo1ma}}</td>
                <td>{{$row->telefo2ma}}</td>
                <td>{{$row->legalesma}}</td>
                <td>{{$row->comentarioma}}</td>
                <td>{{$row->nom_ape_pa}}</td>
                <td>{{$row->correopa}}</td>
                <td>{{$row->cedulapa}}</td>
                <td>{{$row->telefo1pa}}</td>
                <td>{{$row->telefo2pa}}</td>
                <td>{{$row->legalespa}}</td>
                <td>{{$row->comentariopa}}</td>
                <td>{{$row->nom_ape_auto}}</td>
                <td>{{$row->cedu}}</td>
                <td>{{$row->comentarioauto}}</td>
                {{-- este td nos permite ver los botones --}}
                <td class="project-actions text-right">
                  <div class="btn-group" role="group">
                    {{-- boton para mostrar --}}
                    <a href="#" class="btn btn-primary btn-sm mx-1 ">
                      <i class="fas fa-eye"></i>
                    </a>
                    {{-- boton para editar --}}
                    <a href="{{route('incrip.edit', $row->id)}}" class="btn btn-success btn-sm mx-1 ">
                      <i class="fas fa-pen"></i>
                    </a>
                    {{-- boton para eliminar original--}}
                    {{-- finales de pruebas --}}
                    <form id="delete-form-{{$row->id}}" action="{{route('incrip.destroy', $row->id)}}" method="post">
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
                                      'success',
                                      '2000'
                          )}})});});
                    </script>
                  </div>
                </td>
              </tr>
            @endforeach
            <!-- más filas de datos agregalas aqui -->
          </tbody>
        </table>
      </div>
    </section>
  </div>

@endsection
@section('content')
@endsection