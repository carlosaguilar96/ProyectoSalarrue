@extends('header')
    <body class="m-0" style="background-color: F1F1F1">
        @include('navbar')
        <div class="container py-5 mt-4" style="background-color: F1F1F1; width:100%">
            <div class="row">
                <div class="col-12 mt-4">
                    <p class="text-center" style="font-size:20pt; font-weight:bold; color:black">Nuevo estudiante</p>
                    <p class="text-center" style="font-size:12pt; color:black">Ingresar la información solicitada en el formulario para agregar un nuevo estudiante</p>
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
                                            <label for="nie" class="form-label">NIE</label>
                                            <input type="text" class="form-control" name="nie" id="nie" placeholder="Número de identificación del estudiante">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="carnet" class="form-label">Carnet</label>
                                            <input type="text" class="form-control" name="carnet" id="carnet" placeholder="Carnet del estudiante">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del estudiante">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="apellido" class="form-label">Apellidos</label>
                                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos del estudiante">
                                        </div> 
                                        <div class="col-md-6 mb-3">
                                            <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
                                            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="sexo" class="form-label">Sexo</label>
                                            <select class="form-select" aria-label="Default select example" id="sexo" name="sexo">
                                                <option selected>Seleccionar sexo</option>
                                                <option value="1">Masculino</option>
                                                <option value="2">Femenino</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="correo" class="form-label">Correo</label>
                                            <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo del estudiante">
                                        </div> 
                                        <div class="col-md-6 mb-3">
                                            <label for="grado" class="form-label">Grado académico</label>
                                            <select class="form-select" aria-label="Default select example" id="grado" name="grado">
                                                <option selected>Seleccionar grado académico a cursar</option>
                                                <option value="1">Séptimo Grado</option>
                                                <option value="2">Octavo Grado</option>
                                                <option value="3">Noveno Grado</option>
                                                <option value="4">Primero General</option>
                                                <option value="5">Segundo General</option>
                                                <option value="6">Primero Técnico en Desarrollo de Software</option>
                                                <option value="7">Segundo Técnico en Desarrollo de Software</option>
                                                <option value="8">Tercero Técnico en Desarrollo de Software</option>
                                                <option value="9">Primero Técnico en Servicios Turísticos</option>
                                                <option value="10">Segundo Técnico en Servicios Turísticos</option>
                                                <option value="11">Tercero Técnico en Servicios Turísticos</option>
                                                <option value="12">Primero Técnico Comercial</option>
                                                <option value="13">Segundo Técnico Comercial</option>
                                                <option value="14">Tercero Técnico Comercial</option>
                                                <option value="15">Primero Técnico en Salud</option>
                                                <option value="16">Segundo Técnico en Salud</option>
                                                <option value="17">Tercero Técnico en Salud</option>
                                            </select>
                                        </div>                             
                                    </div>
									<div class="row">
										<button class="btn btn-warning mt-2 mx-auto d-block " style="width:auto;" type="submit">Agregar Estudiante</button>
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