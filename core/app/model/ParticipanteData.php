<?php

class ParticipanteData {

    public static $tablename = "Participante";

    public function ParticipanteData() {
        $this->Nombre = "";
        $this->Apellido = "";
        $this->Sexo = "";
        $this->TipoDocumento = "";
        $this->NumeroDocumento = "";
        $this->FechaNacimiento = "";
        $this->idEquipo = "";
    }

    public function add() {
        $sql = "insert into " . self::$tablename . "  (Nombre, Apellido , Sexo , TipoDocumento , NumeroDocumento , FechaNacimiento , idEquipo ) ";
        // EL DATO DEL CAMPO IDEQUIPO ESTA QUEMADO MIENTRAS SE INGERSA LA VISTA
        $sql .= "value (\"$this->Nombre\",\"$this->Apellido\",\"$this->Sexo\" ,\"$this->TipoDocumento\" , $this->NumeroDocumento ,'$this->FechaNacimiento', 2 )";
        return Executor::doit($sql);
    }

    public static function delById($id) {
        $sql = "delete from " . self::$tablename . " where id=$id";
        Executor::doit($sql);
    }

    public function del() {
        $sql = "delete from " . self::$tablename . " where id=$this->id";
        Executor::doit($sql);
    }

// partiendo de que ya tenemos creado un objecto CategoryData previamente utilizamos el contexto
    public function update() {
        $sql = "update " . self::$tablename . " set name=\"$this->name\" where id=$this->id";
        Executor::doit($sql);
    }

    public static function getById($id) {
        $sql = "select * from " . self::$tablename . " where id=$id";
        $query = Executor::doit($sql);
        return Model::one($query[0], new CategoryData());
    }

    public static function getAll() {
        $sql = "select * from " . self::$tablename;
        $query = Executor::doit($sql);
        return Model::many($query[0], new CategoryData());
    }

    public static function getLike($q) {
        $sql = "select * from " . self::$tablename . " where name like '%$q%'";
        $query = Executor::doit($sql);
        return Model::many($query[0], new CategoryData());
    }

}
