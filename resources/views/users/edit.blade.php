@extends("layouts.app")

@section("content")
<div class = "d-flex align-items-center flex-column gap-3">
<h1>Editar Usuarios</h1>
@if (session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
    </div>
@endif
<div class="container bootstrap snippets bootdeys">
<div class="row">
  <div class="col-xs-12 col-sm-9">
    <form class="form-horizontal" action={{route("users.update",$user)}} method="POST" >
        @method("PATCH")
        @csrf
        <div class="panel panel-default">
          <div class="panel-body text-center">
           <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-circle profile-avatar" alt="User avatar">
          </div>
        </div>
      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Informacion Usuario</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Correo</label>
            <div class="col-sm-10">
              {{$user->email}}
            </div>
          </div>
          <div class="panel-body">
            {{-- <div class="form-group">
                <label class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" value={{$user->name}} required maxlength="80">
                  @error('name')
                 <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                </div>
              </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Contraseña actual</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="current_password" required minlength="6" maxlength="255" >
                @error('current_password')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div> --}}
            {{-- <div class="form-group">
              <label class="col-sm-2 control-label">Nueva contraseña</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" required minlength="6" maxlength="255">
                @error('password')
                 <div class="alert alert-danger">{{ $message }}</div>
                @enderror

              </div>
            </div> --}}
            <tr>
                <td>
                    <strong>
                        <span class="glyphicon glyphicon-calendar text-primary"></span>
                        Estado
                    </strong>
                </td>
                <td class="text-primary">
<strong>
                        <span class="glyphicon glyphicon-calendar text-primary"></span>
                        {{$user->estado}}
                    </strong>

                        <input type="text" name="estado" class="d-none"  value={{$user->estado == 'activo'? 'inactivo': 'activo'}}>
                          @error('estado')
                 <div class="alert alert-danger">{{ $message }}</div>
                 @enderror


                </td>
            </tr>
            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-{{$user->estado == 'activo'? 'warning': 'success'}} " >{{$user->estado == 'activo'? 'inactivar': 'activar'}}</button>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>


    </form>
  </div>
</div>
</div>
</div>
@endsection