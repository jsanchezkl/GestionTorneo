<?php

if (count($_POST) > 0) {
    $user = new ParticipanteData();
    $user->Nombre = $_POST["Nombre"];
        $user->Apellido = $_POST["Apellido"];
        $user->Sexo = $_POST["Sexo"];
        $user->TipoDocumento = $_POST["TipoDocumento"];
        $user->NumeroDocumento = $_POST["NumeroDocumento"];
        $user->FechaNacimiento = $_POST["FechaNacimiento"];
//	$user->idEquipo = $_POST["idEquipo"];
    $user->add();

    print "<script>window.location='index.php?view=participante';</script>";
}