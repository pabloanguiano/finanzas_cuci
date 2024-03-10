@extends('layout.main')

@section('content')

<form action="POST" action="{{route('capture.store')}}">

  @csrf

<div class="mt-5">
  <div class="row">
    <div class="col">
      <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Usuario</span>
      <select class="form-select" aria-label="Default select example">
        @forelse ($users as $user)
        <option selected>Open this select menu</option>
        @empty
        <option selected>No data</option>
        @endforelse        
        <option value="1">One</option>
      </select>
    </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Fecha de recepción</span>
        <input type="text" class="form-control" id="datepicker"  aria-describedby="basic-addon1">
      </div>
    </div>

  <div class="col">
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Número de solicitud</span>
      <input type="text" class="form-control" placeholder="N°" aria-label="Username" aria-describedby="basic-addon1">
    </div>
  </div>

  <div class="col">
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Tipo de solicitud</span>
      <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
  </div>

</div>
  <div class="row">
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Status</span>
        <select class="form-select" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Forma de pago</span>
        <select class="form-select" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Método de pago</span>
        <select class="form-select" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>
    <div class="col">
      
        <span class="input-group-text" id="basic-addon1">Complemento de pago
        <span class="input-group-text text-right" id="basic-addon1">
          <div class="p-1 ">Si
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>          
        </div>
        
        <div class="p-1 text-right">No
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>          
        </div>
      </span>
        </span>
     
    </div>
  </div>

  <div class="row mt-3">
    <div class="col">
      <span class="input-group-text" id="basic-addon1">Alta patrimonial
        <span class="input-group-text text-right" id="basic-addon1">
          <div class="p-1 ">Si
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>          
        </div>
        
        <div class="p-1 text-right">No
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>          
        </div>
      </span>
        </span>     
    </div>
    <div class="col">
      <span class="input-group-text" id="basic-addon1">Formato de Viáticos
        <span class="input-group-text text-right" id="basic-addon1">
          <div class="p-1 ">Si
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>          
        </div>
        
        <div class="p-1 text-right">No
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>          
        </div>
      </span>
        </span>
    </div>
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Beneficiario/Nombre</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
      </div>
    </div>
    <div class="col">      
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Concepto Aplicación/Gasto</span>
        <textarea class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1"></textarea>
        <!--<input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">-->
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Proyecto p3e</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
      </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre del Proyecto</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
      </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Fondo</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
      </div>
    </div>
    <div class="col">      
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Bolsa</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre de la Bolsa</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
      </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Ures</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
      </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre de la Ures</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
      </div>
    </div>
    <div class="col">      
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Monto Solicitado $</span>
        <input type="text" class="form-control" placeholder="$0.0" aria-label="Username" aria-describedby="basic-addon1">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="d-grid col-2 mx-auto">
        <button class="btn btn-primary" type="button">GUARDAR</button>        
      </div>
</div>
</div>
</div>

</form> 

  

 

<div class="mt-5">
  <table id="datos" class="table mt-4 table-striped">
    <thead>
      <tr  class="table-info">
        <th scope="col"># SOLICITUD</th>
        <th scope="col">DESCRIPCIÓN</th>
        <th scope="col">MOTNO</th>
        <th scope="col">PROVEEDOR</th>
        <th scope="col">TIPO</th>
        <th scope="col">DEPENDENCIA</th>
        <th scope="col">PENDIENTES</th>
        <th scope="col"><input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text"  id="searchTerm" placeholder="Buscar" ></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group me-2" role="group" aria-label="Second group">
            <button type="button" class="btn btn-success">Actualizar</button>            
          </div>
          <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-danger">Eliminar</button>
          </div>
        </div>
      </td>
      </tr>
      <tr>
        <td>20</td>
        <td>Mark</td>
        <td>jose</td>
        <td>@mdo</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group me-2" role="group" aria-label="Second group">
            <button type="button" class="btn btn-success">Actualizar</button>            
          </div>
          <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-danger">Eliminar</button>
          </div>
        </div>
      </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group me-2" role="group" aria-label="Second group">
            <button type="button" class="btn btn-success">Actualizar</button>            
          </div>
          <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-danger">Eliminar</button>
          </div>
        </div>
      </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection