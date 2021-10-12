<?php
namespace App\Repository;

use App\Model\Entity\Role;
use DB;
use PDO;
use PDOException;

/**
 * Class RoleRepository
 */
class RoleRepository {

    /**
     * Get all rôles.
     * @return array
     */
    public function getRoles(): array {
        $roles = [];
        $request = DB::getInstance()->prepare("SELECT * FROM role");
        if ($request->execute() && $data = $request->fetchAll()) {
            foreach ($data as $roleData) {
                $roles[] = new Role($roleData['id'], $roleData['name']);
            }
        }
        return $roles;
    }

    /**
     * Return a Role object based on a given role id.
     * @param int $id
     * @return Role|null
     */
    public function getRoleById(int $id): ?Role {
        $request = DB::getInstance()->prepare("SELECT * FROM role WHERE id = :id");
        $request->bindValue(':id', $id);
        $result = $request->execute();
        if ($result && $data = $request->fetch()) {
            return new Role($data['id'], $data['name']);
        }

        return null;
    }

    /**
     * Return a Role by name
     * @param string $roleName
     * @return Role|null
     */
    public function getRoleByName(string $roleName): ?Role {
        $request = DB::getInstance()->prepare("SELECT * FROM role WHERE name = :name");
        $request->bindValue(':name', $roleName);
        $request->execute();
        $role = new Role();
        if ($rdata = $request->fetch()) {
            $role->setId($rdata['id']);
            $role->setName($rdata['name']);
        }

        return $role;
    }

    /**
     * Add a new role
     * @param Role $role
     * @return bool
     */
    public function addRole(Role &$role): bool {
        $request = DB::getInstance()->prepare("INSERT INTO role (name) VALUES (:role)");
        $request->bindValue(':role', $role->getName());
        $request->execute();
        $role->setId(DB::getInstance()->lastInsertId());
        return $role->getId() !== null && $role->getId() > 0;
    }

    /**
     * Delete a role
     * @param Role $role
     * @return bool
     */
    public function deleteRole(Role $role): bool {
        $request = DB::getInstance()->prepare("DELETE FROM role WHERE id = :id");
        $request->bindValue('id', $role->getId());
        return $request->execute();
    }

}