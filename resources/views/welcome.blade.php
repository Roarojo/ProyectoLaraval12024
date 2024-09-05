@extends('app.inicio')
@section('titulo')
   Pagina 1
@endsection
@section('contenido')
<div class="container-fluid">
<table class="table">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Nombre</th>
      <th scope="col">Profesión</th>
      <th scope="col">Imagen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Steve Jobs</td>
      <td>CEO Apple</td>
      <td>
      <img src="{{asset('imagenes/SteveJobs.jpg')}}">
        </td>
      </tr> 
    <tr>
      <th scope="row">2</th>
      <td>Steve Wozniak</td>
      <td>CEO Apple</td>
      <td><img src="{{asset('imagenes/Wozniak.jpg')}}"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Elon Musk</td>
      <td>CEO Starlink</td>
      <td>
      <img src="{{asset('imagenes/Elon.jpg')}}">
    </td>
    </tr>
  </tbody>
</table>
</div>
@endsection

