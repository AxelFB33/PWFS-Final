@extends('layout')

@section('titulo', 'Stock')

@section('contenido')

<!-- content -->
<div class="container espacio">
        <table class="table table-striped">
           <tbody>
              <tr>
                 <td colspan="1">
                    <form class="well form-horizontal" method="post" action="/stock" enctype="multipart/form-data">
                    {{csrf_field()}}
                       <fieldset>
                        <div class="form-group">
                            <div class="col-md-8 inputGroupContainer">
                                <h2 class="cfg_titulo_form">Control de Stock</h2>
                            </div>
                           <ul style="color:red;" class="alert">
                                 @foreach ($errors->all() as $error)
                              <li>
                                 {{$error}}
                              </li>
                                 @endforeach
                           </ul>
                        </div>
                          <div class="form-group">
                             <label class="col-md-4 control-label">Nombre: </label>
                             <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="nombre" name="nombre" placeholder="Nombre" class="form-control" required="true" value="{{old("nombre")}}" type="text"></div>
                             </div>
                          </div>
						  <div class="form-group">
                             <label class="col-md-4 control-label">Imagen Producto: </label>
                             <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="imagen" name="imagen" class="form-control" type="file"></div>
                             </div>
                          </div>
                          <div class="form-group">
                             <label class="col-md-4 control-label">Tipo: </label>
                             <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="tipo" name="tipo" placeholder="Tipo" class="form-control" required="true" value="{{old("tipo")}}" type="text"></div>
                             </div>
                          </div>
                          <div class="form-group">
                             <label class="col-md-4 control-label">Descripcion: </label>
                             <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="descripcion" name="descripcion" placeholder="Descripcion" class="form-control" required="true" value="{{old("descripcion")}}" type="text"></div>
                             </div>
                          </div>
                          <div class="form-group">
                             <label class="col-md-4 control-label">Precio: </label>
                             <div class="col-md-8 inputGroupContainer">
                                <div class="input-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span><input id="precio" name="precio" placeholder="Precio" class="form-control" required="true" value="{{old("precio")}}" type="number"></div>
                                </div>
                             </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md inputGroupContainer" style="text-align: right;">
                                <button type="submit" class="btn posicion_boton btn-lg">Agregar Producto</button>
                            </div>
                         </div>
                       </fieldset>
                    </form>
                 </td>
              </tr>
           </tbody>
        </table>
     </div>

@endsection