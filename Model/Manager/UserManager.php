<?php
namespace App\Repository;

use App\Model\Entity\User;
use DB;

class UserManager {

    /**
     * Get all User in table user
     */
    public function getAllUser(): ?array {
        $array = [];
        $request = DB::getInstance()->prepare("SELECT * FROM user");

        if($request ->execute() && $uDatas = $request->fetchAll()) {
            foreach ($uDatas as $uData) {
                $array[] = new User($uData['id'], $uData['pseudo'], $uData['mail'],$uData['password'],
                    $uData['role_fk'],$uData['userOnline']);
            }
        }
        return $array;
    }

    /**
     * Search a User in table user for log
     * @param $pseudo
     * @return User|null
     */
    public function searchUser($pseudo): ?User {
        $request = DB::getInstance()->prepare("SELECT * FROM user  WHERE pseudo = :pseudo LIMIT 1");
        $request->bindValue(':pseudo', $pseudo);
        $x = $request->execute();
        if($x && $uData = $request->fetch()) {
            $user = new User($uData['id'], $uData['pseudo'], $uData['mail'],$uData['password'],
                $uData['role_fk'],$uData['userOnline']);
        }
        else {
            $user = null;
        }
        return $user;
    }

    /**
     * Search a User in table user by Id
     * @param $id
     * @return User|null
     */
    public function searchUserById($id): ?User {
        $request = DB::getInstance()->prepare("SELECT * FROM user  WHERE id = :id LIMIT 1");
        $request->bindValue(':id', $id);
        $x = $request->execute();
        if($x && $uData = $request->fetch()) {
            $user = new User($uData['id'], $uData['pseudo'], $uData['mail'],$uData['password'],
                $uData['role_fk'],$uData['userOnline']);
        }
        else {
            $user = null;
        }
        return $user;
    }

    /**
     * Add a new user
     * @param $pseudo
     * @param $password
     * @param $mail
     * @return bool
     */
    public function addUser($pseudo, $password, $mail) :bool {
        $request = DB::getInstance()->prepare("INSERT INTO user (pseudo,mail,password,roleFk,userOnline) VALUES (:pseudo,:mail,:password,3,1)");
        $request->bindValue(':pseudo', $pseudo);
        $request->bindValue(':email', $mail);
        $request->bindValue(':password', $password);
        $request->bindValue(':email', $mail);

        return $request->execute();
    }

    /**
     * delete a user
     * @param $userId
     * @return bool
     */
    public function deleteUser($userId) :bool {
        $request = DB::getInstance()->prepare("DELETE FROM user WHERE id = :userId ");
        $request->bindValue(':userId', $userId);

        return $request ->execute();
    }

    /**
     * online a user
     * @param $userId
     * @return bool
     */
    public function userOnline($userId) :bool {
        $request = DB::getInstance()->prepare("UPDATE user SET userOnline = 1 WHERE id = :userId ");
        $request->bindValue(':userId', $userId);

        return $request->execute();
    }

}