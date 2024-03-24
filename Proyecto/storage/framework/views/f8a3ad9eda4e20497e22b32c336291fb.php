
    <body class="m-0" style="background-color: F1F1F1">
        <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container py-5 mt-4" style="background-color: F1F1F1; width:100%">
            <div class="row text-center">
                <div class="col-xl-7">
                    <div class="row" style="align-items: center;display: flex;justify-content: center;">
                      <div class="col-12">
                        <div class="card my-3" style="max-width: 100%;">
                          <div class="row g-0">
                              <div class="col-md-3" style="align-items: center;display: flex;justify-content: center;">
                                  <img height="200" width="200" src="http://127.0.0.1:8000/img/foto.png" class="img rounded-start mx-auto d-block p-2" alt="...">
                              </div>
                              <div class="col-md-9">
                                  <div class="card-body text-center">
                                      <h3 class="card-title text-center" style="font-size:20pt; font-weight:bold">Nombre del usuario</h3>
                                      <p class="card-text text-center" style="font-style:italic">Administrador</p>
                                      <a href="#" class="btn btn-warning text-center mt-4">Ver información</a>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-3 col-md-4 col-6 mb-3">
                        <a href="#">
                        <div class="card" style="width: 100%; height:200">
                          <h5 class="card-header bg-warning">Gestión docentes</h5>
                          <div class="card-body">
                            <p class="card-text" style="font-size:70pt"><i class="fa-solid fa-users"></i></p>
                          </div>
                        </div>
                        </a>
                      </div>
                      <div class="col-xl-4 col-lg-3 col-md-4 col-6 mb-3">
                        <a href="#">
                        <div class="card" style="width: 100%; height:200">
                          <h5 class="card-header bg-warning">Gestión estudiantes</h5>
                          <div class="card-body">
                            <p class="card-text" style="font-size:70pt"><i class="fa-solid fa-users"></i></p>
                          </div>
                        </div>
                        </a>
                      </div>
                      <div class="col-xl-4 col-lg-3 col-md-4 col-6 mb-3">
                        <a href="#">
                        <div class="card" style="width: 100%; height:200">
                          <h5 class="card-header bg-warning">Gestión año escolar</h5>
                          <div class="card-body">
                            <p class="card-text" style="font-size:70pt"><i class="fa-regular fa-calendar-days"></i></p>
                          </div>
                        </div>
                        </a>
                      </div>
                      <div class="col-xl-4 col-lg-3 col-md-4 col-6 mb-3">
                        <a href="#">
                        <div class="card" style="width: 100%; height:200">
                          <h5 class="card-header bg-warning">Gestión secciones</h5>
                          <div class="card-body">
                            <p class="card-text" style="font-size:70pt"><i class="fa-solid fa-chalkboard-user"></i></p>
                          </div>
                        </div>
                        </a>
                      </div>
                      <div class="col-xl-4 col-lg-3 col-md-4 col-6 mb-3">
                        <a href="#">
                        <div class="card" style="width: 100%; height:200">
                          <h5 class="card-header bg-warning">Gestión grados</h5>
                          <div class="card-body">
                            <p class="card-text" style="font-size:70pt"><i class="fa-solid fa-school"></i></p>
                          </div>
                        </div>
                        </a>
                      </div>
                      <div class="col-xl-4 col-lg-3 col-md-4 col-6 mb-3">
                        <a href="#">
                        <div class="card" style="width: 100%; height:200">
                          <h5 class="card-header bg-warning">Gestión materias</h5>
                          <div class="card-body">
                            <p class="card-text" style="font-size:70pt"><i class="fa-solid fa-book"></i></p>
                          </div>
                        </div>
                        </a>
                      </div>
                      <div class="col-xl-4 col-lg-3 col-md-4 col-6 mb-3">
                        <a href="#">
                        <div class="card" style="width: 100%; height:200">
                          <h5 class="card-header bg-warning">Gestión administradores</h5>
                          <div class="card-body">
                            <p class="card-text" style="font-size:70pt"><i class="fa-solid fa-users"></i></p>
                          </div>
                        </div>
                        </a>
                      </div>
                      <div class="col-xl-4 col-lg-3 col-md-4 col-6 mb-3">
                        <a href="#">
                        <div class="card" style="width: 100%; height:200">
                          <h5 class="card-header bg-warning">Gestión usuarios</h5>
                          <div class="card-body">
                            <p class="card-text" style="font-size:70pt"><i class="fa-solid fa-users"></i></p>
                          </div>
                        </div>
                        </a>
                      </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="card my-3">
                        <div class="card-header bg-warning">
                            <h5 class="heading-section text-center">Calendario</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="content w-100 mt-0">
                                    <div class="calendar-container pt-0">
                                      <div class="calendar"> 
                                        <div class="year-header"> 
                                          <span class="left-button fa fa-chevron-left" id="prev"> </span> 
                                          <span class="year" id="label"></span> 
                                          <span class="right-button fa fa-chevron-right" id="next"> </span>
                                        </div> 
                                        <table class="months-table w-100"> 
                                          <tbody>
                                            <tr class="months-row">
                                              <td class="month">Jan</td> 
                                              <td class="month">Feb</td> 
                                              <td class="month">Mar</td> 
                                              <td class="month">Apr</td> 
                                              <td class="month">May</td> 
                                              <td class="month">Jun</td> 
                                              <td class="month">Jul</td>
                                              <td class="month">Aug</td> 
                                              <td class="month">Sep</td> 
                                              <td class="month">Oct</td>          
                                              <td class="month">Nov</td>
                                              <td class="month">Dec</td>
                                            </tr>
                                          </tbody>
                                        </table> 
                                        
                                        <table class="days-table w-100"> 
                                          <td class="day">Sun</td> 
                                          <td class="day">Mon</td> 
                                          <td class="day">Tue</td> 
                                          <td class="day">Wed</td> 
                                          <td class="day">Thu</td> 
                                          <td class="day">Fri</td> 
                                          <td class="day">Sat</td>
                                        </table> 
                                        <div class="frame"> 
                                          <table class="dates-table w-100"> 
                                          <tbody class="tbody">             
                                          </tbody> 
                                          </table>
                                        </div>
                                        <button class="button" id="add-button">Añadir Evento</button>
                                    </div>
                                </div>
                                <div class="events-container">
                                </div>
                                <div class="dialog" id="dialog">
                                    <h2 class="dialog-header"> Add New Event </h2>
                                    <form class="form" id="form">
                                      <div class="form-container" align="center">
                                        <label class="form-label" id="valueFromMyButton" for="name">Event name</label>
                                        <input class="input" type="text" id="name" maxlength="36">
                                        <label class="form-label" id="valueFromMyButton" for="count">Number of people to invite</label>
                                        <input class="input" type="number" id="count" min="0" max="1000000" maxlength="7">
                                        <input type="button" value="Cancel" class="button" id="cancel-button">
                                        <input type="button" value="OK" class="button button-white" id="ok-button">
                                      </div>
                                    </form>
                                  </div>
                            </div></div></div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <script src="http://127.0.0.1:8000/calendar/js/jquery.min.js"></script>
        <script src="http://127.0.0.1:8000/calendar/js/popper.js"></script>
        <script src="http://127.0.0.1:8000/calendar/js/bootstrap.min.js"></script>
        <script src="http://127.0.0.1:8000/calendar/js/main.js"></script>
    </body>
</html>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoSalarrue\Proyecto\resources\views/admin/inicio.blade.php ENDPATH**/ ?>