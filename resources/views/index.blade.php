@extends('app.sesion')
@section('titulo')
   Login
@endsection
@section('contenido')
<div class="container-fluid p-5 my-5 ">
    <center>
    <label class="form-label" for="form2Example1">Control Usuarios</label>
</center>
<form action="{{route('validar')}}" method="POST">
    @csrf
    @if (session('error'))
      @push('scripts')
      <!--SweetAlert-->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
            Swal.fire({
                position: "center",
                icon: "error",
                title: "Usuario Incorrecto",
                showConfirmButton: false,
                timer: 1500
                });
      </script>
      @endpush
    @endif
     
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
  <label class="form-label" for="form2Example1">Correo</label>
    <input 
        name="email" 
        type="email" 
        id="form2Example1" 
        class="form-control @error('email')@enderror" />
        @error('email')
          <p class="bg-red">
             {{$message}}
          </p>
        @enderror
    
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
  <label class="form-label" for="form2Example2">Password</label>
    <input 
        name="password" 
        type="password" 
        id="form2Example2" 
        class="form-control @error('password')@enderror" />
        @error('password')
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
      Aceptar
    </button>
    
    
  </div>
</form>
</div>
@endsection