@extends("layouts.app")

@section("content")
<div class = "d-flex align-items-center flex-column gap-3" >
<h1>Usuarios</h1>

<div class="container bg-white border rounded" >
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo Electronico</th>
        <th scope="col"> Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
          <th scope="row"> {{$user -> id}} </th>
          <td> {{$user -> name}} </td>
          <td> {{$user -> email}} </td>
          <td><button>Editar</button><button>Mostrar</button> </td>
          
        </tr>
        @endforeach
    </tbody> 
    
  </table>
</div>
  <div class="flex">
    {!! $users->links() !!}
  </div>
</div>
@endsection