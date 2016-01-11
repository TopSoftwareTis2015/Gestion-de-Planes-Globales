<?php
 class db
{
    /*establese la conexion*/
    protected $_conect;
    /*trabaja los query*/
    protected $_query;
    /*resultados de las consultas*/
    protected $_row;
    protected $_result;
    public function __construct()
    {
        $this->_conect=DatabaseConeccion::create();
    }
    /*trae todos los datos de las tablas indicadas en el array tabla*/
    public function selectAll($table = array(),$condicion = array(),$relacion = array()){
        $result = array();
        try{           
            if(!array($table)){
                die("Las Tablas deben de estar en formato arreglo");
            }
            if(count($table)>1){               
                foreach($table as $id=>$valor){                   
                    if($id==0){
                        $tablas = $valor." INNER JOIN ".next($table)." ON(".$relacion[$id].")";                       
                    }
                    else{
                        if($id!=1){                       
                            $tablas.= " INNER JOIN ".$valor." ON(".$relacion[$id-1].")";
                        }
                    }
                }                           
            }           
            else{
                $tablas = $table[0];
            }
            if(empty($condicion))
            {
                $sql = "SELECT * FROM $tablas";               
                $this->_query = $this->_conect->prepare($sql);
                $this->_query->execute();
            }
            else{               
                foreach($condicion as $key=>$value){
                    $parametros[] = "$key=?";
                    $condic[] = $value;
                }           
                $condiciones = implode(" AND ",$parametros);
                $sql = "SELECT * FROM $tablas WHERE $condiciones";               
               $this->_query = $this->_conect->prepare($sql);               
                $this->_query->execute($condic);
            }   
            while($this->_row = $this->_query->fetch()){   
                $result[] = $this->_row;           
            }           
            return $result;
        }
        catch(PDOExeption $e){
            echo $e->getMessaage();
        }
    }   
    /*ejecuta una sentencia de MySQL Preparada usando el formato de PDO*/
    public function ejecutarSentencia($query,$parametro = NULL,$return = false)
    {
        $result=array();
        try{                   
            $this->_query = $this->_conect->prepare($query);
            $this->_query->execute($parametro);   
            if($return==true){                                   
                while($this->_row = $this->_query->fetch()){   
                    $result[] = $this->_row;
                }               
                return $result;
            }           
        }
        catch(PDOExeption $e){
            echo $e->getMessaage();
        }
    }       
    /*inserta registros en la base de datos*/    
    public function insert($table,$valores)
    {
        if(!is_array($valores)){
            echo "Los datos deben de estar en formato de arreglo";
        }
        try{               
            foreach($valores as $id=>$valor){                               
                $parametros[] = '?';                               
                $campos[] = $id;   
                $value[] = $valor;
            }
            $val = implode(",",$parametros);
            if(!empty($campos)){
                $fields = implode(",",$campos);
                $sql = "INSERT INTO $table ($fields) VALUES ($val)";           
            }               
            $insert=$this->_conect->prepare($sql);           
            $insert->execute($value);
        }
        catch(PDOExeption $e){
            echo $e->getMessaage();
        }   
    }   
    /*Actualiza registros de la base de datos*/
    public function update($table,$valores,$condicion)
    {
        if(!is_array($valores)){
            echo "Los datos deben de estar en formato de arreglo";
        }
        try{           
            foreach($valores as $id=>$valor){
                $parametro[]="$id=?";
                $values[]=$valor;
            }
            foreach($condicion as $key=>$value){
                $de=explode(".",$value);
                if(count($de)>1){
                    $parametro_condicion[]="$key=$value";                   
                }
                else{
                    $parametro_condicion[]="$key=?";
                    $values[]=$value;                   
                }
            }               
            $parm=implode(",",$parametro);           
            if(count($condiciones)>0){
                $condiciones=implode(" AND ",$parametro_condicion);
                $sql="UPDATE $table SET $parm WHERE $condiciones"; 
            }       
            else{
                $sql="UPDATE $table SET $parm"; 
            }                                                   
            $update=$this->_conect->prepare($sql);           
            $update->execute($values);
        }
        catch(PDOExeption $e){
            echo $e->getMessaage();
        }   
    }
    /*borra registros de la base de datos*/
    public function deleteAll($table,$condicion = NULL,$return = false)
    {
        try{   
            foreach($condicion as $key=>$value){
                $de=explode(".",$value);
                if(count($de)>1){
                    $valorCondicion[] = "$key=".$value;
                }
                else{
                    $valorCondicion[] = "$key='".$value."'";
                }
            }               
            $condiciones = implode(" AND ",$valorCondicion);               
           $this->_result = $this->_conect->exec("DELETE FROM $table WHERE $condiciones");           
            if($return){
                return $this->_result;
            }               
        }
        catch(PDOExeption $e){
            echo $e->getMessaage();
        }
    }
    #reinicia la base de datos 
    public function reiniciarTabla($table){
        try{           
            $this->_result = $this->_conect->exec("TRUNCATE TABLE $table");               
        }
        catch(PDOExeption $e){
            echo $e->getMessaage();
        }
    }
}