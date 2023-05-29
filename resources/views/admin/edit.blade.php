@extends('layouts.adm')

@section('title', 'Editar')
@section('tarjeta', 'Editar los registros')
@section('color.tarjeta', 'bg-blue')

@section('nav-inter')

@endsection

@section('content')
<section class="content py-3">
    <div class="container-fluid ">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar el Estudiante {{$incrip->id}}</h3>
            </div>
            {{-- inicia nuestro formulario --}}
            <form action="{{ route('incrip.update', $incrip->id) }}" method="POST" class="shadow-xl">
              @csrf
              @method('PUT')
              <h3 class="px-3 py-2">Datos del niño/a</h3>
              <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="nom_ape">Nombres y apellidos</label>
                    <input type="text" name="nom_ape" class="form-control shadow " placeholder="Nombres y apellidos" value="{{$incrip->nom_ape}}">
                  </div>
                </div >
              </div>
              <!-- este es el sexo -->
              <div class="form-group clearfix px-4">
                  <div>
                      <p class="text-bold">Sexo</p>
                      <div class="checkbox-container">
                          <div class="icheck-primary d-inline">
                            <input type="radio" name="sexo" value="masculino" {{ $incrip->sexo == 'masculino' ? 'checked' : '' }}>
                              <label for="sexo">Masculino</label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="sexo" name="sexo" value="femenino" {{ $incrip->sexo == 'femenino' ? 'checked' : '' }}>
                              <label for="sexo">Femenino</label>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- comienza la fecha -->
      <div class="col-md-6">
          <div class="card-body">
            <div class="form-group">
              <label for="fechanaci">Fecha de nacimiento</label>
                    <input type="date" name="fechanaci" value="{{$incrip->fechanaci}}" class="form-control shadow"/>
            </div>
          </div>
    </div>
        <!-- comienza las condiciones especiales -->
        <div class="form-group col-sm-6">
          <label for="condiciones">Condiciones especiales</label>
          <div>
            <select class="form-control shadow" name="condiciones">
                <option {{ $incrip->condiciones == 'Seleccione' ? 'selected' : '' }}>Seleccione</option>
                <option {{ $incrip->condiciones == 'Alergias' ? 'selected' : '' }}>Alergias</option>
                <option {{ $incrip->condiciones == 'Enfermedades' ? 'selected' : '' }}>Enfermedades</option>
                <option {{ $incrip->condiciones == 'Asistencia odontologica' ? 'selected' : '' }}>Asistencia odontologica</option>
                <option {{ $incrip->condiciones == 'Intolerancia algun alimento' ? 'selected' : '' }}>Intolerancia algun alimento</option>
                <option {{ $incrip->condiciones == 'Dificultad en la conducta' ? 'selected' : '' }}>Dificultad en la conducta</option>
                <option {{ $incrip->condiciones == 'Dificultad motriz' ? 'selected' : '' }}>Dificultad motriz</option>
                <option {{ $incrip->condiciones == 'Dificultad auditiva' ? 'selected' : '' }}>Dificultad auditiva</option>
                <option {{ $incrip->condiciones == 'Dificultad visual' ? 'selected' : '' }}>Dificultad visual</option>
                <option {{ $incrip->condiciones == 'Autismo' ? 'selected' : '' }}>Autismo</option>
                <option {{ $incrip->condiciones == 'No aplica' ? 'selected' : '' }}>No Aplica</option>
              </select>
            <label for="comentario">Comentarios</label>
            <textarea class="form-control" name="comentario" id="comentarios" rows="5">{{ $incrip->comentario }}</textarea>
          </div>
        </div>
              <hr class="bg-dark" style="opacity: 0.5;">
  
            <h3 class="px-3 py-2">Datos de la madre</h3>
              {{-- <aqui va el card body --}}
                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="nom_ape_ma">Nombres y Apellidos</label>
                        <input type="text" name="nom_ape_ma" value="{{$incrip->nom_ape_ma}}" class="form-control shadow " placeholder="Nombres y apellidos">
                      </div>
                    </div>
                    {{-- <div class="col-sm-4">
                      <div class="form-group">
                        <label for="apellidoma">Apellidos</label>
                        <input type="text" name="apellidoma" class="form-control shadow" placeholder="Apellidos">
                      </div>
                    </div> --}}
                  </div>
                  <div class="row">
                <div class="form-group col-sm-5">
                  <label for="correoma">Correo electrónico</label>
                  <input type="email" class="form-control shadow" name="correoma"  id="correoma" value="{{$incrip->correoma}}" placeholder="Correo Electrónico">
                </div>
                <!-- cedula de identidad -->
                <div class="form-group col-sm-4">
                  <label for="cedulama">Documento de identidad</label>
                  <div class="input-group">
                    <select class="form-control select2 shadow" name="cedulama" id="cedulama">
                      <option {{ $incrip->cedulama == 'V' ? 'selected' : '' }}selected="selected">V</option>
                      <option {{ $incrip->cedulama == 'P' ? 'selected' : '' }}>P</option>
                    </select>
                    <input type="text" name="cedulama" value="{{$incrip->cedulama}}" placebolder="cedula" class="form-control shadow" style="width: 50%">
                  </div>
                </div>
                </div>
                <!-- teléf. -->
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="telefo1ma">Teléf. principal</label>
                      <input type="tel" name="telefo1ma" value="{{$incrip->telefo1ma}}" class="form-control shadow " placeholder="">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="telefo2ma" >Teléf. secundario</label>
                      <input type="tel" name="telefo2ma" value="{{$incrip->telefo2ma}}" class="form-control shadow" placeholder="">
                    </div>
                  </div>
                </div>
                <!-- problemas personales -->
                <div class="form-group col-sm-6">
                  <label for="legalesma">Problemas legales</label>
                  <div>
                    <select name="legalesma" class="form-control shadow" >
                      <option selected="selected" {{ $incrip->legalesma == 'Seleccione' ? 'selected' : '' }}>Seleccione</option>
                      <option {{ $incrip->legalesma == 'Orden de alejamiento' ? 'selected' : '' }}>Orden de alejamiento</option>
                      <option {{ $incrip->legalesma == 'Medidas cautelares' ? 'selected' : '' }}>Medidas cautelares</option>
                      <option {{ $incrip->legalesma == 'No aplica' ? 'selected' : '' }}>No aplicas</option>
                    </select>
                    <label for="comentarioma">Deje aquí sus comentarios:</label>
                    <textarea class="form-control" name="comentarioma" id="comentarioma" rows="5">{{ $incrip->comentarioma}}</textarea>
                  </div>
                </div>
                <hr class="bg-dark" style="opacity: 0.5;">
                <h3 class="px-3 py-2">Datos del padre</h3>
              <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="nom_ape_pa">Nombres y apellidos</label>
                        <input type="text" name="nom_ape_pa"  value="{{$incrip->nom_ape_pa}}" id="nombrepa" class="form-control shadow " placeholder="Nombres y apellidos">
                      </div>
                    </div>
                    {{-- <div class="col-sm-4">
                      <div class="form-group">
                        <label for="apellidopa">Apellidos</label>
                        <input type="text" name="apellidopa" id="apellidopa" class="form-control shadow" placeholder="Apellidos">
                      </div>
                    </div> --}}
                  </div>
                  <div class="row">
                <div class="form-group col-sm-5">
                  <label for="correopa">Correo electrónico</label>
                  <input type="email" class="form-control shadow" id="correopa" name="correopa" value="{{$incrip->correopa}}" placeholder="Correo Electrónico">
                </div>
                <!-- cedula de identidad -->
                <div class="form-group col-sm-4">
                  <label for="cedulapa">Documento de identidad</label>
                  <div class="input-group">
                    <select class="form-control select2 shadow" name="cedulapa" id="cedulapa">
                        <option {{ $incrip->cedulapa == 'V' ? 'selected' : '' }}selected="selected">V</option>
                        <option {{ $incrip->cedulapa == 'P' ? 'selected' : '' }}>P</option>
                      </select>
                    <input type="text" name="cedulapa" placebolder="cedula" class="form-control shadow" value="{{$incrip->cedulapa}}" style="width: 50%">
                  </div>
                </div>
                </div>
                <!-- teléf. -->
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="telefo1pa">Teléf. principal</label>
                      <input type="tel" name="telefo1pa" id="telefo1pa" class="form-control shadow" value="{{$incrip->telefo1pa}}" placeholder="">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="telefo2pa">Teléf. secundario</label>
                      <input type="tel" name="telefo2pa" id="telefo2pa" class="form-control shadow" value="{{$incrip->telefo2pa}}" placeholder="">
                    </div>
                  </div>
                </div>
                <!-- problemas personales -->
                <div class="form-group col-sm-6">
                  <label for="legalespa">Problemas legales</label>
                  <div>
                    <select name="legalespa" class="form-control shadow" >
                        <option selected="selected" {{ $incrip->legalespa == 'Seleccione' ? 'selected' : '' }}>Seleccione</option>
                        <option {{ $incrip->legalespa == 'Orden de alejamiento' ? 'selected' : '' }}>Orden de alejamiento</option>
                        <option {{ $incrip->legalespa == 'Medidas cautelares' ? 'selected' : '' }}>Medidas cautelares</option>
                        <option {{ $incrip->legalespa == 'No aplica' ? 'selected' : '' }}>No aplicas</option>
                      </select>
                    <label for="comentariopa">Comentarios:</label>
                  <textarea class="form-control" name="comentariopa" id="comentariopa" rows="5">{{$incrip->comentariopa}}</textarea>
                  </div>
                </div>
              <hr class="bg-dark" style="opacity: 0.5;">
              <!-- otro -->
              <h3 class="px-3 py-2">Autorizados para el retiro de los niños</h3>
  
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="nom_ape_auto">Nombres y apellidos</label>
                    <input type="text" name="nom_ape_auto" id="nom_ape_auto" class="form-control shadow" value="{{$incrip->nom_ape_auto}}" placeholder="Nombre">
                  </div>
                </div>
                {{-- <div class="col-sm-5">
                  <div class="form-group">
                    <label for="parentesco">Parentesco</em></label>
                    <input type="text" name="parentesco" id="parentesco" class="form-control shadow" placeholder="Parentezco">
                  </div>
                </div> --}}
              </div>
              <div class="form-group col-sm-5">
                <label for="cedu">Documento de identidad</label>
                <div class="input-group">
                    <select class="form-control select2 shadow" name="cedu" id="cedu">
                        <option {{ $incrip->cedu == 'V' ? 'selected' : '' }}selected="selected">V</option>
                        <option {{ $incrip->cedu == 'P' ? 'selected' : '' }}>P</option>
                      </select>
                  <input type="text" name="cedu" id="cedulaauto"  placebolder="cedula" class="form-control shadow" value="{{$incrip->cedu}}" style="width: 50%">
                </div>
              </div>
              <div>
                <label for="comentarioauto">Deje aquí sus comentarios:</label>
                  <textarea class="form-control" id="comentarioauto" name="comentarioauto" rows="5">{{$incrip->comentarioauto}}</textarea>
              </div>
              <!-- para enviar el formulario -->
  
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <script src="/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- InputMask -->
  <script src="/plugins/moment/moment.min.js"></script>
  <script src=""></script>
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
@endsection