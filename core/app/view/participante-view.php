<div class="row">
    <div class="col-md-12">
        <div class="btn-group pull-right">

        </div>
        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Participantes de Equipos</h4>
            </div>
            <div class="card-content table-responsive">
                <a href="index.php?view=newParticipante" class="btn btn-default"><i class='fa fa-male'></i>  Nuevo Participante</a>
                <?php
                $users = ParticipanteData::getAll() ;

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
                                <td><?php echo $user->Nombre . "  " . $user->Apellido; ?></td>
                                <td><?php echo $user->Sexo; ?></td>
                                <td><?php echo $user->NumeroDocumento; ?></td>
                                <td><?php echo $user->TipoDocumento; ?></td>
                                <td><?php echo $user->FechaNacimiento; ?></td>

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