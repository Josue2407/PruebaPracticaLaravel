@extends('layouts.plantillabase')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.4.0/css/searchPanes.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
@endsection


@section('contenido')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{URL::asset('img/slide2.jpg')}}" class="d-block w-100" alt="primer imagen">
      <div class="carousel-caption d-none d-md-block">
        <h3>Primer Slide</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{URL::asset('img/slide5.jpg')}}" class="d-block w-100" alt="segunda imagen">
      <div class="carousel-caption d-none d-md-block">
        <h3>Segundo Slide</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{URL::asset('img/slide8.jpg')}}" class="d-block w-100" alt="tercer imagen">
      <div class="carousel-caption d-none d-md-block">
        <h3>Tercer Slide</h3>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<br>
<div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="{{URL::asset('img/card1.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Titulo 1</h3>
          <p class="card-text">Este es un parrafo y texto de ejemplo.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="{{URL::asset('img/card2.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Titulo 2</h3>
          <p class="card-text">Este es un parrafo y texto de ejemplo.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="{{URL::asset('img/card3.jpeg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Titulo 3</h3>
          <p class="card-text">Este es un parrafo y texto de ejemplo.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<br>
<br>
  <a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><img src="{{URL::asset('img/cover.jpg')}}" alt="imagen cover" width="100%" height="30%"></a>


<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Ingreso de Información</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/mi-prueba" method="POST">
          @csrf
        <div class="mb-3 row">
          <label for="inputnombre" class="col-sm-2 col-form-label">Nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputapellidos" class="col-sm-2 col-form-label">Apellidos</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="apellido" name="apellido">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email">
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-sm-3">
          <label for="inputhabilidades" class="col-sm-2 col-form-label">Habilidades</label>
          </div>
          <div class="col-sm-4">
          <select class="form-select" id="habilidades" name="habilidades">
            <option selected value="PHP">PHP</option>
            <option value="HTML">HTML</option>
            <option value="CSS">CSS</option>
            <option value="Laravel">Laravel</option>
            <option value="Java">Java</option>
            <option value="Javascript">Javascript</option>
            <option value="Angular">Angular</option>
            <option value="Node">Node</option>
            <option value="Linux">Linux</option>
            <option value="Servidores">Servidores</option>
          </select>
          </div>
          <div class="col-sm-2">
            <label for="inputEdad" class="col-sm-2 col-form-label">Edad</label>
          </div>
          <div class="col-sm-3">
            <input type="number" class="form-control" id="edad" name="edad">
          </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" type="submit">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<br>
<br>
<div class="container">
  <div class="table-responsive">
  <table class="table text-center table-bordered table-hover table-responsive" id="data">
  <thead class="bg-primary text-white">
    <tr>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Email</th>
      <th>Edad</th>
      <th>Habilidades</th>
    </tr>
  </thead>
  <tbody id="tabla">
    
  </tbody>
</table>
  </div>

</div>

<script>
 let uri = 'http://127.0.0.1:8000/api/ApiDatos'
 fetch(uri)
    .then(response => response.json())
    .then(data => mostrarData(data))
    .catch(error => console.log(error))


    const mostrarData = (data) =>{
      console.log(data)
      let body = ''
      for(let i = 0; i<data.length;i++){
        body += `<tr>
      <td>${data[i].nombre}</td>
      <td>${data[i].apellido}</td>
      <td>${data[i].email}</td>
      <td>${data[i].edad}</td>
      <td>${data[i].habilidades}</td>
    </tr>`
      }
      document.getElementById('tabla').innerHTML = body

      $(document).ready(function() {
    $('#data').DataTable({
      searchPanes: {
        initCollapsed: true
        },
        dom: 'Plfrtip',
        columnDefs: [
            {
                searchPanes: {
                    show: true
                },
                targets: [3, 4]
            }
        ]
    });
});
    }

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/searchpanes/1.4.0/js/dataTables.searchPanes.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>

<script>
  
</script>

@endsection