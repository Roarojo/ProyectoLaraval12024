@extends('app.inicio')
@section('titulo')
   Resta
@endsection
@section('contenido')
<div class="container-fluid p-5 my-5 ">
    <center>
    <label class="form-label" for="form2Example1">Resta de 2 numeros</label>
</center>
<form action="{{route('restarnumeros')}}" method="POST">
    @csrf
     
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
  <label class="form-label" for="form2Example1">Numero 2</label>
    <input 
        name="numero1" 
        type="text" 
        id="form2Example1" 
        class="form-control @error('numero1')@enderror" />
        @error('numero1')
          <p class="bg-red">
             {{$message}}
          </p>
        @enderror
    
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
  <label class="form-label" for="form2Example2">Numero 2</label>
    <input 
        name="numero2" 
        type="text" 
        id="form2Example2" 
        class="form-control @error('numero2')@enderror" />
        @error('numero2')
          <p class="bg-red">
             {{$message}}
          </p>
        @enderror
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    

  <!-- Submit button -->
  <button  
      type="submit" data-mdb-button-init data-mdb-ripple-init 
      class="btn btn-primary btn-block mb-4">
      Resta
    </button>
    
    
  </div>
</form>
</div>
@endsection