<div class="contenedor_cursos col-xs-12">
    <div class="container">
        <section class="contenedor_cursos_busqueda">
            <div class="col-md-12">
                <div class="busqueda col-md-6">
                    <form class="navbar-form" role="search">
                        <label for="srch-term">Búsqueda por</label>
                        <div class="input-group search_bar">
                            <input class="form-control" placeholder="Busqueda" name="srch-term" id="srch-term" type="text">
                            <div class="input-group-btn">
                                <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="contenedor_cursos_partes">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="info_general col-md-12">
                        <div class="info_general_titulo">
                            <?=$lang["cursos"]["info"] ?>
                        </div>
                        <hr>
                        <div class="info_general_contenedor">
                            <div class="col-md-12">
                                <p>Un mensaje general por parte del administrador</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="catalogo_cursos col-md-12">
                        <div class="catalogo_cursos_titulo">
                            <?=$lang["cursos"]["catag"] ?>
                        </div>
                        <hr>
                        <div class="catalogo_cursos_contenedor">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="lista_cursos col-md-12">
                        <div class="lista_cursos_titulo">
                            <?=$lang["cursos"]["courses"] ?>
                        </div>
                        <hr>
                        <div class="lista_cursos_contenedor">
                            <div class="col-md-12">
                                <p>Cursos en los que usted es: Alumno</p>
                               <?php echo $htmlListaCurso?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mis_cursos col-md-12">
                        <div class="mis_cursos_titulo">
                            <?=$lang["cursos"]["my_courses"] ?>
                        </div>
                        <hr>
                        <div class="mis_cursos_contenedor">
                            <div class="col-md-12">
                                <p>Cursos en los que usted es: Alumno</p>
                                <?php echo $htmlMisCurso?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>