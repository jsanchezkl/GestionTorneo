<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Nuevo Participante</h4>
            </div>
            <div class="card-content table-responsive">

                <form class="form-horizontal" method="post" id="addparticipante" 
                      action="index.php?view=addParticipante" role="form">


                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
                        <div class="col-md-6">
                            <input type="text" name="Nombre" required class="form-control" 
                                   id="Nombre" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Apellido</label>
                        <div class="col-md-6">
                            <input type="text" name="Apellido"  class="form-control" 
                                   id="Apellido" placeholder="Apellido">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Genero*</label>
                        <div class="col-md-6">
                            <label class="checkbox-inline">
                                <input type="radio" id="inlineCheckbox1" name="Sexo" required value="H"> Hombre
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" id="inlineCheckbox2" name="Sexo" required value="M"> Mujer
                            </label>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento</label>
                        <div class="col-md-6">
                            <input type="date" name="FechaNacimiento" class="form-control" 
                                   id="FechaNacimiento" placeholder="Fecha de Nacimiento">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Numero de Documento*</label>
                        <div class="col-md-6">
                            <input type="text" name="NumeroDocumento" class="form-control"
                                   id="NumeroDocumento" placeholder="numeroDocumento">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Tipo de Documento*</label>
                        <div class="col-md-6">
                            <input type="text" name="TipoDocumento" class="form-control" 
                                   id="TipoDocumento" placeholder="Tipo de Documento">
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary">Agregar Paciente</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>