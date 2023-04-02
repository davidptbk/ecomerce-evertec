@extends("layouts.app")

@section("content")
<div class = "d-flex align-items-center flex-column gap-3">
<h1>Usuario</h1>

<div class="container bg-white border rounded p-4">
    <div class="panel-body inf-content">
        <div class="row">
            <div class="col-md-4">
                <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario"> 
            </div>
            <div class="col-md-6">
                <div class="flex justify-content-between ">
                    <span> Informacion Usuario</span>
                    <a href={{route('users.edit',$user)}} type="button" class="btn btn-primary">Editar</a>
                </div><br>
                <div class="table-responsive">
                <table class="table table-user-information">
                    <tbody>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                    Nombre                                            
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{$user->name}}      
                            </td>
                        </tr>
                        
    
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                    Correo electronico                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{$user->email}} 
                            </td>
                        </tr>
    
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-calendar text-primary"></span>
                                    Fecha de creacion                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{$user->created_at}}
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-calendar text-primary"></span>
                                    Ultima actualizacion                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{$user->updated_at}}
                            </td>
                        </tr>                                    
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    </div> 
</div>                              
@endsection