@extends('layouts.app')

@section('content')
<html>
    <head>
    <style>
    </style>
        <body>
            
        
                <div  >

                        <div class="mx-auto w-25 p-3 form-outline mb-1 col-lg-offset-2 font-monospace" style=" font-weight: bold; font-size: x-large">Datos </div>
                       
                        <div class="mx-auto w-25 p-3 form-outline mb-1 col-lg-offset-2" >
                        <input type="date" id="date" class="form-control"style="border-color:#2A4290" />
                            
                            <label class="form-label font-monospace" for="date" style=" font-weight: bold">Fecha de Inicio</label>
                        </div>
                        
                        <div class="mx-auto w-25 p-3 form-outline mb-1 col-lg-offset-2">
                            <input type="date" id="date" class="form-control" style="border-color:#2A4290"/>
                            <label class="form-label font-monospace" for="date" style=" font-weight: bold">Fecha de Fin</label>
                        </div>

                        <div class="mx-auto w-25 p-3 form-outline mb-1 col-lg-offset-2">
                            <input type="email" id="form1Example1" class="form-control"style="border-color:#2A4290" />
                            <label class="form-label font-monospace" for="form1Example1" style=" font-weight: bold">Precio</label>
                        </div>

                        <div class="mx-auto w-25 p-3 form-outline mb-1 col-lg-offset-2">
                            <input type="email" id="form1Example1" class="form-control" style="border-color:#2A4290"/>
                            <label class="form-label font-monospace" for="form1Example1" style=" font-weight: bold">Pago</label>
                        </div>

                        <div class="mx-auto w-25 p-3 form-outline mb-1 col-lg-offset-2">
                            <input type="email" id="form1Example1" class="form-control" style="border-color:#2A4290"/>
                            <label class="form-label font-monospace" for="form1Example1" style=" font-weight: bold">DNI</label>
                        </div>

                        <!-- Password input -->
                        <div class="mx-auto w-25 p-3 form-outline mb-1">
                        <input type="date" id="date" class="form-control" style="border-color:#2A4290"/>
                            <label class="form-label font-monospace" for="date" style=" font-weight: bold">Fecha de Inicio</label>
                        </div>

                       

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->


                            

                        <!-- Submit button -->
                            <button type="submit" class=" font-monospace btn btn-primary btn-block">Alquilar</button>
                        
                          

                            </div>
        </body>
    </head>
</html>
@endsection
