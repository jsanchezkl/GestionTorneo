<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ParticipanteData
 *
 * @author user
 */
class ParticipanteData {
    //put your code here    
    public static $tablename = "participante";
    
    public function ParticipanteData(){
        $this->nombre = "";
        $this->apellido = "";
        $this->sexo = "";
        $this->tipoDocumento = "";
        $this->numeroDocumento = "";
        $this->fechaNacimiento = "";
        $this->idEquipo = "";
    }
    
    /*
     * Muestra de todos los participantes
     */
    
    public static function  getParticipantes(){
//        $sql = "select * from '".self::$tablename."' ORDER by `IdParticipante` ASC";
        $sql = "SELECT * FROM `participante` ORDER by `IdParticipante` ASC";
//        $sql = "SELECT * FROM '".self::$tablename."' ORDER by `IdParticipante` ASC";
        $query = Executor::doit($sql);
        return Model::many($query[0],new ParticipanteData()) ;
    }
    
}
