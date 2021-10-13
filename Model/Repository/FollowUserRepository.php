<?php
namespace App\Repository;

use App\Model\Entity\FollowUser;
use DB;

class FollowUserRepository {

    /**
     * Get all userOnline.
     * @return array
     */
    public function getUserOnline(): array {
        $uOnline = [];
        $request = DB::getInstance()->prepare("SELECT * FROM followUser");
        if ($request->execute() && $data = $request->fetchAll()) {
            foreach ($data as $uData) {
                $uOnline[] = new FollowUser($uData['id'], $uData['name']);
            }
        }
        return $uOnline;
    }

    /**
     * Return a nama statut by user (online/disconnect)
     * @param string $onlineUser
     * @return FollowUser|null
     */
    public function getConnectUser(string $onlineUser): ?FollowUser {
        $request = DB::getInstance()->prepare("SELECT * FROM followUser WHERE name = :name");
        $request->bindValue(':name', $onlineUser);
        $request->execute();
        $result = new FollowUser();
        if ($uData = $request->fetch()) {
            $result->setId($uData['id']);
            $result->setName($uData['name']);
        }

        return $result;
    }

    /**
     * Add a new statut user
     * @param FollowUser $followU
     * @return bool
     */
    public function addStatUser(FollowUser $followU): bool {
        $request = DB::getInstance()->prepare("INSERT INTO followUser (name) VALUES (:n)");
        $request->bindValue(':n', $followU->getName());
        $request->execute();
        $followU->setId(DB::getInstance()->lastInsertId());
        return $followU->getId() !== null && $followU->getId() > 0;
    }

    /**
     * Delete a statut user
     * @param FollowUser $f
     * @return bool
     */
    public function deleteStatUser(FollowUser $f): bool {
        $request = DB::getInstance()->prepare("DELETE FROM followUser WHERE id = :id");
        $request->bindValue('id', $f->getId());
        return $request->execute();
    }

}