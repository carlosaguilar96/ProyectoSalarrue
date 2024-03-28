@extends('header')
    <body class="m-0" style="background-color: F1F1F1">
        @include('navbar')
        <div class="container py-5 mt-4" style="background-color: F1F1F1; width:100%">
            <div class="row">
                <div class="col-12 mt-4">
                    <p class="text-center" style="font-size:20pt; font-weight:bold; color:black">Nuevo profesor</p>
                    <p class="text-center" style="font-size:12pt; color:black">Ingresar la información solicitada en el formulario para agregar un nuevo profesor</p>
                </div>
                <div class="col-12 my-4">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
						<div class="card-body p-5 text-center">																		
								@if ($errors->any())
									<div class="alert alert-danger my-2 pb-0">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
								@if(session('error'))
									<div class="alert alert-danger">
										{{ session('error') }}
									</div>
								@endif
								<form method="POST" action="">
									@csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="dui" class="form-label">DUI</label>
                                            <input type="text" class="form-control" name="dui" id="dui" placeholder="Documento único de identidad del profesor">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="carnet" class="form-label">Carnet</label>
                                            <input type="text" class="form-control" name="carnet" id="carnet" placeholder="Carnet del profesor">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del profesor">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="apellido" class="form-label">Apellidos</label>
                                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos del profesor">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="correo" class="form-label">Correo</label>
                                            <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo del profesor">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="titulos" class="form-label">Títulos</label>
                                            <input type="text" class="form-control" name="titulos" id="titulos" placeholder="Títulos del profesor">
                                        </div>                           
                                    </div>
									<div class="row">
										<button class="btn btn-warning mt-2 mx-auto d-block " style="width:auto;" type="submit">Agregar Profesor</button>
									</div>										
								</form>		
							</div>										
						</div>
					</div>
                </div>
            </div>
        </div>
        @include('footer')
    </body>
</html>