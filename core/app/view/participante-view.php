<?php
/*
 * VISTA DE PRUEBA PARA EL PARTICIPANTE PARA EL SISTEMA SIGTO
 * autnor: johan canon
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="btn-group pull-right">
            <!--<div class="btn-group pull-right">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-download"></i> Descargar <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="report/clients-word.php">Word 2007 (.docx)</a></li>
              </ul>
            </div>
            -->
        </div>
        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Participantes de Equipos</h4>
            </div>
            <div class="card-content table-responsive">
                <a href="index.php?view=newpacient" class="btn btn-default"><i class='fa fa-male'></i>  Nuevo Participante</a>
                <?php
                $users = ParticipanteData::getParticipantes();  
//                $users = PacientData::getAll();
                if (count($users) > 0) {
                    // si hay usuarios
                    ?>

                    <table class="table table-bordered table-hover">
                        <thead>
                        <th>Nombre completo</th>
                        <th>Sexo</th>
                        <th>Numero de Documentol</th>
                        <th>Fecha Nacimiento</th>
                        <th></th>
                        </thead>
                        <?php
                        foreach ($users as $user) {
                            ?>
                            <tr>
                                <td><?php echo $user->nombre . " " . $user->apellido; ?></td>
                                <td><?php echo $user->sexo; ?></td>
                                <td><?php echo $user->numeroDocumento; ?></td>
                                <td><?php echo $user->fechaNacimiento; ?></td>
                                <td style="width:280px;">
                                    <a href="index.php?view=pacienthistory&id=<?php echo $user->id; ?>" class="btn btn-default btn-xs">Historial</a>
                                    <a href="index.php?view=editpacient&id=<?php echo $user->id; ?>" class="btn btn-warning btn-xs">Editar</a>
                                    <a href="index.php?view=delpacient&id=<?php echo $user->id; ?>" class="btn btn-danger btn-xs">Eliminar</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
    <?php
} else {
    echo "<p class='alert alert-danger'>No hay pacientes</p>";
}
?>


    </div>
</div>