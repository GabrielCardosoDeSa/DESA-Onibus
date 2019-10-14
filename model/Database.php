<?php
namespace onibus;
/**
 *    Classe de ligaçao com o banco de dados de forma geral
 */
class Database
{
    private $system = "mysql";
    private $host = "sql259.main-hosting.eu";
    private $user = "u459296590_dev";
    private $pass = "q1w2e3r4";
    private $db   = "u459296590_oni";
    private $link;

    function __construct()
    {
        $this->link = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        if (!$this->link) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
    }

    function __destruct()
    {
        mysqli_close($this->link);
    }

    public function find($sql)
    {
        $query = mysqli_query($this->link,$sql);
        return mysqli_fetch_array($query);
    }

    public function exec($sql)
    {
        $query = mysqli_query($this->link,$sql);
        /*
         * construir regras melhores
         */
        return $query;
    }



}
