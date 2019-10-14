<?php

namespace onibus;

include_once('../../config.php');

include_once($_SERVER['DOCUMENT_ROOT'].'/'.$config['nameProject'].'/model/Database.php');


use onibus\Database;

/**

 *

 */

class Tables

{

    protected $nameTable;

    protected $columnsTable;

    protected $connection;



    public $printSql = false;



    function __construct()

    {

        $this->connection = new Database();

        $result = $this->connection->exec("SHOW COLUMNS FROM ".$this->nameTable);

        while($item = mysqli_fetch_assoc($result))

        {

            $this->columnsTable[] = $item;

        }



//        print_r('<br>');

//        print_r($this->columnsTable);

    }



    public function formatValueForTable($value = null,$type)

    {

        if($type != "int")

        {

            $endValue = empty($value) ? "NULL" : "'".$value."'";

        }

        else

        {

            $endValue = empty($value) ? "NULL" : $value;

        }



        return $endValue;



    }



    public function save()

    {

        if(method_exists($this, "beforeSave"))

        {

            $this->beforeSave($this);

        }



        $columns        = array();

        $values         = array();

        $columnsAndVal  = array();

        $columnsId      = array();

        $isUpdate       = false;

        foreach ($this->columnsTable as $column)

        {

            $method = 'get'.ucfirst($column['Field']);

            $type = explode("(",$column['Type']);



            if($column['Key'] != "PRI")

            {

                $columns[]       = $column['Field'];

                $values[]        = $this->formatValueForTable($this->$method(),$type[0]);

                $columnsAndVal[] = $column['Field']." = ".$this->formatValueForTable($this->$method(),$type[0]);

            }

            else

            {

                if(!empty($this->$method()) && !is_null($this->$method()))

                {

                    $columnsId[]  = $column['Field']." = ".$this->formatValueForTable($this->$method(),$type[0]);

                    $isUpdate = true;

                }

            }

        }



        if(!$isUpdate)

        {

            $sqlInitial = "INSERT INTO ".$this->nameTable;

            $sqlColuns  = " (".implode(",",$columns).") ";

            $sqlValues  = "VALUES (".implode(",",$values).")";

        }

        else

        {

            $sqlInitial = "UPDATE ".$this->nameTable." ";

            $sqlColuns  = "SET ".implode(",",$columnsAndVal)." ";

            $sqlValues  = "WHERE ".implode(" AND ",$columnsId)." ";

        }



        $sql = $sqlInitial.$sqlColuns.$sqlValues;



        if($this->printSql)

        {

            print_r($sql);

        }     



        $result = $this->connection->exec($sql);



        if(method_exists($this, "afterSave"))

        {

            $this->afterSave($this);

        }

    }



    public function find($where)

    {

        $sql = "SELECT * FROM ".$this->nameTable." WHERE ".$where;

        

        if($this->printSql)

        {

            print_r($sql);

        } 



        $result = $this->connection->exec($sql);

        $arrayObj = array();

        while($item = mysqli_fetch_assoc($result))

        {

            $model = "\\onibus\\".ucfirst($this->nameTable);

            $object = new $model();



            foreach ($this->columnsTable as $column)

            {

                $val = $item[$column['Field']];

                $method = 'set'.ucfirst($column['Field']);

                $object->$method($val);

            }



            $arrayObj[] = $object;

        }

        return $arrayObj;

    }



    public function findFirst($where)

    {

        $this->find($where." LIMIT 1");

    }





}

