@extends('header')
    <body class="m-0" style="background-color: F1F1F1">
        @include('navbar')
        <div class="container py-5 mt-4" style="background-color: F1F1F1; width:100%">
            <div class="row text-center">
                <div class="col-12 my-4">
                    <p class="text-center" style="font-size:20pt; font-weight:bold; color:black">Gestión de usuarios</p>
                    <p class="text-center" style="font-size:12pt; color:black">Opciones para la gestión de estudiantes, profesores y administradores</p>
                </div>
            </div>
            <div class="row text-center" style="align-items: center;display: flex;justify-content: center;">
                <div class="col-md-4 mb-3">
                    <a href="{{ route('admin.crearEstudiante') }}">
                        <div class="card" style="width: 100%; height:200">
                          <h5 class="card-header bg-warning">Agregar estudiante</h5>
                          <div class="card-body">
                            <p class="card-text" style="font-size:70pt"><i class="fa-solid fa-user-plus"></i></p>
                          </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="#">
                        <div class="card" style="width: 100%; height:200">
                          <h5 class="card-header bg-warning">Gestión de estudiantes</h5>
                          <div class="card-body">
                            <p class="card-text" style="font-size:70pt"><i class="fa-solid fa-list"></i></p>
                          </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row text-center" style="align-items: center;display: flex;justify-content: center;">
                <div class="col-md-4 mb-3">
                    <a href="{{ route('admin.crearProfesor') }}">
                        <div class="card" style="width: 100%; height:200">
                          <h5 class="card-header bg-warning">Agregar profesor</h5>
                          <div class="card-body">
                            <p class="card-text" style="font-size:70pt"><i class="fa-solid fa-user-plus"></i></p>
                          </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="#">
                        <div class="card" style="width: 100%; height:200">
                          <h5 class="card-header bg-warning">Gestión de profesores</h5>
                          <div class="card-body">
                            <p class="card-text" style="font-size:70pt"><i class="fa-solid fa-list"></i></p>
                          </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row text-center" style="align-items: center;display: flex;justify-content: center;">
                <div class="col-md-4 mb-3">
                    <a href="#">
                        <div class="card" style="width: 100%; height:200">
                          <h5 class="card-header bg-warning">Agregar administrador</h5>
                          <div class="card-body">
                            <p class="card-text" style="font-size:70pt"><i class="fa-solid fa-user-plus"></i></p>
                          </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="#">
                        <div class="card" style="width: 100%; height:200">
                          <h5 class="card-header bg-warning">Gestión de administradores</h5>
                          <div class="card-body">
                            <p class="card-text" style="font-size:70pt"><i class="fa-solid fa-list"></i></p>
                          </div>
                        </div>
                    </a>
                </div>
            </div>
            </div>
        </div>
        @include('footer')
    </body>
</html>    