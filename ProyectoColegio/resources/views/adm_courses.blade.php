
<!DOCTYPE html> 


@extends("layouts.mcdn")
@section("title")
Administrar Estudiantes
@endsection

@section("headex")

@endsection

@section("context")
<div class="container">
        <br>
        <h2 style="text-align: center;">Administrar Cursos 
            @if(Session::has('period'))
                {{Session::get('period')}}
            @endif            
        </h2>
        <br>
        <button class="btn btn-success " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Agregar Curso</button>
        <br>
        <div class="collapse mt-2" id="collapseExample">
            <form class="row" id="formAdd" action="add_course" method="GET">
                <div class="input-group">
                    <br>
                    <div class="input-group-prepend ">
                        <label for="grade_id" class="input-group-text" for="inputGroupSelect01">Curso</label>
                        <br>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="grade_id" required="">
                        <option selected value="0">Seleccionar</option>
                        <option value="1">Pre-Kinder</option>
                        <option value="2">Kinder</option>
                        <option value="3">Primero Básico</option>
                        <option value="4">Segundo Básico</option>
                        <option value="5">Tercero Básico</option>
                        <option value="6">Cuarto Básico</option>
                        <option value="7">Quinto Básico</option>
                        <option value="8">Sexto Básico</option>
                        <option value="9">Séptimo Básico</option>
                        <option value="10">Octavo Básico</option>
                        <option value="11">Primero Medio</option>
                        <option value="12">Segundo Medio</option>
                        <option value="13">Tercero Medio</option>
                        <option value="14">Cuarto Medio</option>                        
                    </select>
                </div>
                <br>
                <div class="input-group">
                    <br>
                    <div class="input-group-prepend ">
                        <label for="letter" class="input-group-text" for="inputGroupSelect02">Letra</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect02" name="letter" required="">
                        <option selected value="0">Seleccionar</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                    </select>
                </div>
                <br>

                <div class="form-group col-4">
                    <br>
                    <label for="year" style="color: white;">.</label>
                    <button id="sendform" type="button" class="form-control btn btn-success">Agregar</button>
                </div>
            </form>
            <script>
                $("#sendform").click(function(){
                    var curso = $("#inputGroupSelect01").val(); 
                    var seccion = $("#inputGroupSelect02").val(); 
                    if(curso != 0 && seccion != 0){
                         $("#formAdd").submit() 
                    }
                    else{
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Seleccione campos faltantes.',
                            })
                    }
                });
            </script>
        </div>
        <br>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-sm" style="text-align: center;" id="list_course">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Curso</th>
                        <th scope="col">Sección</th>
                        <th scope="col">Docente</th>
                        <th scope="col">Gestión Curso</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($grades as $row)
                        <tr>
                            <td>{{$row["nombre_curso"]}}</td>
                            <td>{{$row["seccion"]}}</td>
                            <!-- {{$row["profesor"]}} -->
                            <td> El Almeja <button class="btn btn-primary btn-sm">Gestionar</button></td>                                                    
                            <td>                                                
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCurso" data-backdrop="static" data-whatever="@mdo" disabled="">Gestionar Curso</button>
                                
                                <div class="modal fade" id="modalCurso" tabindex="-1" role="dialog" aria-labelledby="cursoModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="cursoModalLabel">Gestión de Curso</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <br>
                                            <button class="btn btn-success btn-sm " type="button" data-toggle="collapse" data-target="#collapseAsignatura" aria-expanded="false" aria-controls="collapseAsignatura">Agregar Asignatura</button>
                                            <br>
                                            <div class="collapse mt-2" id="collapseAsignatura">
                                                <form action="" method="" class="row" id="formAddAsignatura">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend ">
                                                            <label for="grade_id" class="input-group-text" for="inputGroupSelect03">Curso</label>
                                                            <br>
                                                        </div>
                                                        <select class="custom-select" id="inputGroupSelect03" name="grade_id" required="">
                                                            <option selected value="0">Seleccionar</option>
                                                            <option value="1">Pre-Kinder</option>
                                                            <option value="2">Kinder</option>
                                                            <option value="3">Primero Básico</option>
                                                            <option value="4">Segundo Básico</option>
                                                            <option value="5">Tercero Básico</option>
                                                            <option value="6">Cuarto Básico</option>
                                                            <option value="7">Quinto Básico</option>
                                                            <option value="8">Sexto Básico</option>
                                                            <option value="9">Séptimo Básico</option>
                                                            <option value="10">Octavo Básico</option>
                                                            <option value="11">Primero Medio</option>
                                                            <option value="12">Segundo Medio</option>
                                                            <option value="13">Tercero Medio</option>
                                                            <option value="14">Cuarto Medio</option>                        
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                                <div class="table-responsive">
                                                    <table class="table table-sm" style="text-align: center;" id="list_course">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th scope="col">Asignatura</th>
                                                                <th scope="col">Docente</th>
                                                                <th scope="col">#</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Calculo</td>
                                                                <td>El sapo</td>
                                                                <td><button class="btn btn-danger">Eliminar</button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>    
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td> 
                            <td>
                                <a href="/del_course?id={{$row["id"]}}" class="btn btn-danger ">Eliminar</a>
                            </td>
                        </tr>               
                    @endforeach                      
                </tbody>
            </table>
        </div>
        <script>
            $(document).ready( function () {
                $('#list_course').DataTable({
                        order: [],
                        language: {
                            "decimal": "",
                            "emptyTable": "No hay información",
                            "info": "Mostrando _START_ a _END_ de _TOTAL_ Filas",
                            "infoEmpty": "Mostrando 0 to 0 of 0 Filas",
                            "infoFiltered": "(Filtrado de MAX total Filas)",
                            "infoPostFix": "",
                            "thousands": ",",
                            "lengthMenu": "Mostrar _MENU_ Filas",
                            "loadingRecords": "Cargando...",
                            "processing": "Procesando...",
                            "search": "Buscar:",
                            "zeroRecords": "Sin resultados encontrados",
                            "paginate": {
                                "first": "Primero",
                                "last": "Ultimo",
                                "next": "Siguiente",
                                "previous": "Anterior"
                                }
                        },
                    });
            } );
        </script>
    </div>
@endsection