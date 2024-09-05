@extends('app.inicio')
@section('titulo')
   Resultado
@endsection
@section('contenido')

   @push('scripts')
   <!--SweetAlert-->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
         Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Resultado "+{{$resultado}},
            showConfirmButton: false,
            timer: 1500
            });
   </script>
   
   @endpush
   la {{$oper}} es : {{$resultado}}
@endsection