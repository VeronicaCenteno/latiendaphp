@extends('layouts.principal')

@section('contenido')

    <form class="col s12">
        <div class="row" >
            <div class="col s8" >
                <h1 class=" teal-text lighten-1" >Nuevo Producto </h1>
            </div>
        </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nombre del Producto" 
          id="Nombre" 
          type="text" 
          class="validate">
          <label for="Nombre">Nombre del producto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input 
           id="disabled" 
           type="text" 
           class="validate">
          <label for="desc">Descripcion</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="precio" type="password" class="validate">
          <label for="precio">Precio</label>
        </div>
      </div>
      <div class="row">
      <div class="file-field input-field">
      <div class="btn">
        <span>Ingresar Imagen...</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
        <a class="waves-effect waves-light btn">Guardar</a>
          </div>

      </div>
    </form>

  @endsection