<?php

namespace sarassoroberto\usm\model;

use \PDO;
use sarassoroberto\usm\config\local\AppConfig;
use sarassoroberto\usm\entity\User;
use sarassoroberto\usm\entity\Interesse;

class InteresseModel
{
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO('mysql:dbname=' . AppConfig::DB_NAME . ';host=' . AppConfig::DB_HOST, AppConfig::DB_USER, AppConfig::DB_PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            // TODO: togliere echo
            echo $e->getMessage();
        }
    }

    // CRUD
    public function create(Interesse $interesse)
    {
        try {
            $pdostm = $this->conn->prepare('INSERT INTO Interesse (nome) VALUES (:nome);');
            $pdostm->bindValue(':nome', $interesse->getNome(), PDO::PARAM_STR);
            $pdostm->execute();
        } catch (\PDOException $e) {
            throw $e;
        }
    }



    public function readAll()
    {
        $pdostm = $this->conn->prepare('SELECT * FROM interesse;');
        $pdostm->execute();
        //$result = $pdostm->fetchAll();
        // $user = array_map('Userfactory::fromArray',$result);
        return $pdostm->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Interesse::class, ['', '']);
    }

    public function readOne($userId)
    {
        try {
            $sql = "SELECT InteresseId FROM user_interesse WHERE userId=:userId";
            $pdostm = $this->conn->prepare($sql);
            $pdostm->bindValue(':userId', $userId, PDO::PARAM_INT);
            $pdostm->execute();
            $result = $pdostm->fetchAll(PDO::FETCH_ASSOC);

            return count($result) === 0 ? null : $result[0];
        } catch (\Throwable $th) {
            echo "qualcosa è andato storto";
            echo " " . $th->getMessage();
            //throw $th;
        }
    }


    // public function update($user, $InteresseId)
    // {
    //     // $sql = "UPDATE `usm_3`.`user_interesse` SET `InteresseId`='9' WHERE  `userId`=21 AND `InteresseId`=1 LIMIT 1;
    //     $sql = "UPDATE user_interesse SET InteresseId =:InteresseId
    //                             WHERE userId=:userId AND";
    //     $pdostm = $this->conn->prepare($sql);
    //     $pdostm ->bindValue(':userId', $user->getUserId(), PDO::PARAM_INT);
    //     $pdostm->bindValue(':InteresseId', $InteresseId, PDO::PARAM_INT);

    //     try {
    //         $pdostm->execute();

    //         if ($pdostm->rowCount() === 0) {
    //             return false;
    //         } elseif ($pdostm->rowCount() === 1) {
    //             return true;
    //         }
    //     } catch (\Throwable $th) {
    //         throw $th;
    //     }
    // }

    public function delete(int $InteresseId): bool
    {
        $sql = "DELETE FROM Interesse WHERE InteresseId=:InteresseId";

        $pdostm = $this->conn->prepare($sql);
        $pdostm->bindValue(':InteresseId', $InteresseId, PDO::PARAM_INT);
        $pdostm->execute();


        if ($pdostm->rowCount() === 0) {
            return false;
        } elseif ($pdostm->rowCount() === 1) {
            return true;
        }
    }

    public function deleteInteresse(int $userId)
    {
        
        $sql = "DELETE FROM user_interesse WHERE userId = :userId";
        $pdostm = $this->conn->prepare($sql);
        $pdostm->bindValue(':userId', $userId, PDO::PARAM_INT);
        $pdostm->execute();

        if ($pdostm->rowCount() === 0) {
            return false;
        } elseif ($pdostm->rowCount() === 1) {
            return true;
        }
    }



    public function findByEmail(string $email): ?User
    {
        try {
            $sql = "SELECT * FROM User WHERE email=:email";
            $pdostm = $this->conn->prepare($sql);
            $pdostm->bindValue('email', $email, PDO::PARAM_STR);
            $pdostm->execute();
            $result = $pdostm->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, User::class, ['', '', '', '', '']);

            return count($result) === 0 ? null : $result[0];
        } catch (\Throwable $th) {
            echo "qualcosa è andato storto";
            echo " " . $th->getMessage();
            //throw $th;
        }
    }

    public function addInteresse($user_id, $interesse)
    {
        try {
            $pdostm = $this->conn->prepare('INSERT INTO user_interesse (userId, InteresseId) VALUES (:userid,:InteresseId);');
            $pdostm->bindValue(':userid', $user_id, PDO::PARAM_STR);
            $pdostm->bindValue(':InteresseId', $interesse, PDO::PARAM_STR);
            $pdostm->execute();
        } catch (\PDOException $e) {
            throw $e;
        }
    }
}
