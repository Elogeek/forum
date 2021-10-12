<?php
namespace App\Repository;

use App\Model\Entity\Category;
use DB;
use PDO;
use PDOException;

class CategoryRepository {

    /**
     * Get all categories.
     * @return array
     */
    public function getCategory(): array {
        $cat = [];
        $request = DB::getInstance()->prepare("SELECT * FROM category");
        if ($request->execute() && $data = $request->fetchAll()) {
            foreach ($data as $cData) {
                $cat[] = new Category($cData['id'], $cData['name']);
            }
        }
        return $cat;
    }

    /**
     * Return a category based on a given role id.
     * @param int $id
     * @return Category|null
     */
    public function getCatById(int $id): ?Category {
        $request = DB::getInstance()->prepare("SELECT * FROM category WHERE id = :id");
        $request->bindValue(':id', $id);
        $result = $request->execute();
        if ($result && $data = $request->fetch()) {
            return new Category($data['id'], $data['name']);
        }

        return null;
    }

    /**
     * Return a category by name
     * @param string $catName
     * @return Category
     */
    public function getCatByName(string $catName): Category {
        $request = DB::getInstance()->prepare("SELECT * FROM category WHERE name = :name");
        $request->bindValue(':name', $catName);
        $request->execute();
        $cat = new Category();
        if ($data = $request->fetch()) {
            $cat->setId($data['id']);
            $cat->setName($data['name']);
        }

        return $cat;
    }

    /**
     * Add a new category
     * @param Category $cat
     * @return bool
     */
    public function addCat(Category $cat): bool {
        $request = DB::getInstance()->prepare("INSERT INTO category (name) VALUES (:name)");
        $request->bindValue(':name', $cat->getName());
        $request->execute();
        $cat->setId(DB::getInstance()->lastInsertId());
        return $cat->getId() !== null && $cat->getId() > 0;
    }

    /**
     * Delete a category
     * @param Category $cat
     * @return bool
     */
    public function deleteCat(Category $cat): bool {
        $request = DB::getInstance()->prepare("DELETE FROM category WHERE id = :id");
        $request->bindValue('id', $cat->getId());
        return $request->execute();
    }

}