@extends('layout.main')

@section('content')

<form method="post" action="{{route('captura.store')}}">

  @csrf


<div class="mt-5">
  <div class="row">
    <div class="col">
      <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Usuario</span>
      <select class="form-select" aria-label="Default select example" name="user" id="user">
       @forelse ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
        @empty
        <option value="0">No data</option>
        @endforelse        
    
      </select>
    </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Fecha de recepción</span>
        <input type="text" class="form-control" id="receipt_date"  aria-describedby="basic-addon1" name="receipt_date" >
      </div>
    </div>

  <div class="col">
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Número de solicitud</span>
      <input type="text" class="form-control" placeholder="N°" aria-label="Username" aria-describedby="basic-addon1" name="application" id="application">
    </div>
  </div>

  <div class="col">
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Tipo de solicitud</span>
      <select class="form-select" aria-label="Default select example" name="type_application" id="type_application">
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
        <select class="form-select" aria-label="Default select example" name="status_application">
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
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="payment_type" id="payment_type">
      </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Metódo de pago</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="payment_method" id="payment_method">
      </div>
    </div>
    <div class="col">
      
        <span class="input-group-text" id="basic-addon1">Complemento de pago
        <span class="input-group-text text-right" id="basic-addon1">
          <div class="p-1 ">Si
          <input class="form-check-input" type="radio" name="payment_complement" id="payment_complement_yes" value="1" >          
        </div>
        
        <div class="p-1 text-right">No
          <input class="form-check-input" type="radio" name="payment_complement" id="payment_complement_no" value="0" >          
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
          <input class="form-check-input" type="radio" name="patrimonial_registration" id="patrimonial_registration_yes" value="1" >          
        </div>
        
        <div class="p-1 text-right">No
          <input class="form-check-input" type="radio" name="patrimonial_registration" id="patrimonial_registration_no" value="0" >          
        </div>
      </span>
        </span>     
    </div>
    <div class="col">
      <span class="input-group-text" id="basic-addon1">Formato de Viáticos
        <span class="input-group-text text-right" id="basic-addon1">
          <div class="p-1 ">Si
          <input class="form-check-input" type="radio" name="travel_format" id="travel_format_yes" value="1" >          
        </div>
        
        <div class="p-1 text-right">No
          <input class="form-check-input" type="radio" name="travel_format" id="travel_format_no" value="0" >          
        </div>
      </span>
        </span>
    </div>
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Beneficiario/Nombre</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="beneficiary_name" id="beneficiary_name">
      </div>
    </div>
    <div class="col">      
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Concepto Aplicación/Gasto</span>
        <textarea class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="concept" id="concept"></textarea>
        <!--<input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">-->
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Proyecto p3e</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="project_p3e" id="project_p3e">
      </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre del Proyecto</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="project_name" id="project_name">
      </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Fondo</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="fund" id="fund">
      </div>
    </div>
    <div class="col">      
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Bolsa</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="stock" id="stock">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre de la Bolsa</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="stock_name" id="stock_name">
      </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Ures</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="ures" id="ures">
      </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre de la Ures</span>
        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="ures_name" id="ures_name">
      </div>
    </div>
    <div class="col">      
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Monto Solicitado $</span>
        <input type="text" class="form-control" placeholder="$0.0" aria-label="Username" aria-describedby="basic-addon1" name="request_amount" id="request_amount">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="input-group mb-3">
        &nbsp;
      </div>
    </div>
    <div class="col">
      <div class="input-group mb-3">
      <div class="d-grid col-9 mx-auto">
        <button class="btn btn-primary"   id="btn_save_new"  type="submit" ><i class="bi bi-floppy-fill"></i> &nbsp;    GUARDAR NUEVO</button> 
      </div>
      </div>
    </div>
      <div class="col">
        <div class="input-group mb-3">
        <div class="d-grid col-9 mx-auto">
          <button type="button" class="btn btn-success" disabled data-bs-toggle="button" id="btn_update" onclick="update_captura()"><i class="bi bi-arrow-clockwise"></i>&nbsp;ACTUALIZAR</button>
        </div>
        </div>
      </div>
      <div class="col">
        <div class="input-group mb-3">
          &nbsp;
        </div>
      </div>

</div>
</div>
<input type="hidden" name="id" id="id">


</form> 

  

 

<div class="mt-5">
  <table id="datos" class="table mt-4 table-striped">
    <thead>
      <tr  class="table-info">
        <th scope="col" class="text-muted">SOLICITUD</th>
        <th scope="col" class="text-muted">DESCRIPCIÓN</th>
        <th scope="col" class="text-muted">MOTNO</th>
        <th scope="col" class="text-muted">PROVEEDOR*</th>
        <th scope="col" class="text-muted">TIPO</th>
        <th scope="col" class="text-muted">DEPENDENCIA</th>
        <th scope="col"class="text-muted">PENDIENTES</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      
      @forelse($records as $record)
      <tr>
      <td>{{ $record->application }}</td>
      <td class="lead">{{ $record->concept }}</td>
      <td class="lead">{{ $record->request_amount }}</td>
      <td class="lead">{{ $record->ures }}</td>
      <td class="lead">{{ $record->type_application }}</td>
      <td class="lead">{{ $record->ures_name }}</td>
      <td class="lead">fatlta pendientes</td>
      <td>
        <div class="btn-toolbar separed" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group me-2" role="group" aria-label="Second group">
            <button type="button" class="btn btn-info btn-sm" id="btn_update" onclick="edit_captura({{ $record->id }})"><i class="bi bi-pencil-square"></i>  Editar&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</button> 
          </div> 
        </div>
          <div class="btn-toolbar separed" role="toolbar" aria-label="Toolbar with button groups">         
          <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill" onclick="delete_captura({{ $record->id }})"></i>  Eliminar &nbsp; &nbsp; </button>
          </div>
        </div>
      </td>
    </tr>
      @empty
      
      @endforelse
    
    </tbody>
  </table>
</div>
@endsection