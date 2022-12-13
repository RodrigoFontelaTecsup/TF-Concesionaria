@extends('layouts.app')

@section('content')
    <html>

    <head>
        <style>
            #card-form {}
        </style>

        

    <body>
        <div class="mt-5" id="card-form">
            <div class="mx-auto w-25 p-3 form-outline mb-1 col-lg-offset-2 font-monospace"
                style=" font-weight: bold; font-size: x-large">Datos </div>

            <div class="mx-auto w-25 p-3 form-outline mb-1 col-lg-offset-2">
                <label class="form-label font-monospace" for="date" style=" font-weight: bold">Fecha de Inicio</label>
                <input type="date" id="date" class="form-control"style="border-color:#2A4290" />
            </div>

            <div class="mx-auto w-25 p-3 form-outline mb-1 col-lg-offset-2">
                <label class="form-label font-monospace" for="date" style=" font-weight: bold">Fecha de Fin</label>
                <input type="date" id="date" class="form-control" style="border-color:#2A4290" />
            </div>

            <div class="mx-auto w-25 p-3 form-outline mb-1 col-lg-offset-2">
                <label class="form-label font-monospace" for="form1Example1" style=" font-weight: bold">Precio</label>
                <input type="email" id="form1Example1" class="form-control"style="border-color:#2A4290" />
            </div>

            <div class="mx-auto w-25 p-3 form-outline mb-1 col-lg-offset-2">
                <label class="form-label font-monospace" for="form1Example1" style=" font-weight: bold">Pago</label><br>    
                <select name="" id="">
                    <option value="">rodrigo</option>
                    <option value="">rodrigo</option>
                    <option value="">rodrigo</option>
                    <option value="">rodrigo</option>
                </select>
                <input type="email" id="form1Example1" class="form-control" style="border-color:#2A4290"/>
            </div>

            <div class="mx-auto w-25 p-3 form-outline mb-1 col-lg-offset-2">
                <input type="email" id="form1Example1" class="form-control" style="border-color:#2A4290" />
                <label class="form-label font-monospace" for="form1Example1" style=" font-weight: bold">DNI</label>
            </div>

            <!-- Password input -->
            <div class="mx-auto w-25 p-3 form-outline mb-1">
                <input type="date" id="date" class="form-control" style="border-color:#2A4290" />
                <label class="form-label font-monospace" for="date" style=" font-weight: bold">Fecha de Inicio</label>
            </div>



            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->




                    <!-- Submit button -->
                    <button type="submit" class=" font-monospace btn btn-primary btn-block">Alquilar</button>



        </div>
        {{-- @foreach ($autos as $item)
            <form>
                <fieldset>
                    <legend>Disabled fieldset example</legend>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">{{ $item->id}}</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Disabled select menu</label>
                        <select id="disabledSelect" class="form-select">
                            <option>Disabled select</option>
                            <option>Disabled select</option>
                            <option>Disabled select</option>
                            <option>Disabled select</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                            <label class="form-check-label" for="disabledFieldsetCheck">
                                Can't check this
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </fieldset>
            </form>
        @endforeach --}}


    </body>
    </head>

    </html>
@endsection
