<?php
/**
 *Connexion à la base de données.
 **/


    namespace Core\Database;

    use \PDO;

    /**
     * Class MysqlDatabase Connexion à la base de donnée au niveau du contructeur
     * @package App
     */

    class MysqlDatabase
    {
        private $db_name;

        private $db_user;

        private $db_pass;

        private $db_host;

        private $pdo;

        public function __construct($db_name, $db_user = 'dbo708503737', $db_pass = 'motdepasse:Jack', $db_host = 'db708503737.db.1and1.com')
        {
            $this->db_name = $db_name;

            $this->db_user = $db_user;

            $this->db_pass = $db_pass;

            $this->db_host = $db_host;
        }

        /*
         * Connexion à la base de donnée via la variable @getPDO
         */
        private function getPDO()
        {
            if($this->pdo === null)
            {
                $pdo = new PDO('mysql:dbname=db708503737;host=db708503737.db.1and1.com', 'dbo708503737', 'motdepasse:Jack');

                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $this->pdo = $pdo;
            }

            return $this->pdo;
        }

        public function query($statement, $class_name = null, $one = false)
        {
            $req = $this->getPDO()->query($statement);

            if(
                strpos($statement, 'UPDATE') === 0 ||

                strpos($statement, 'INSERT') === 0
            ){
                return $req;
            }

            if ($class_name === null){

                $req->setFetchMode(PDO::FETCH_OBJ);
            }
            else{

                $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
            }

            if ($one)
            {

                $datas = $req->fetch();
            }
            else
            {
                $datas = $req->fetchAll();
            }

            return $datas;
        }

        public function prepare($statement, $attributes, $class_name = null, $one = false)
        {
            $req = $this->getPDO()->prepare($statement);

            $res = $req->execute($attributes);

            if(
                strpos($statement, 'UPDATE') === 0 ||

                strpos($statement, 'INSERT') === 0
            ){
                return $res;
            }



            if ($class_name === null) {

                $req->setFetchMode(PDO::FETCH_OBJ);

            }else
            {
                $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
            }



            if ($one)
            {
                $datas = $req->fetch();
            }
            else
            {
                $datas = $req->fetchAll();
            }

            return $datas;



        }


        public function lastInsertId() {

            return $this->getPDO()->lastInsertId();

        }




    }


