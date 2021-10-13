<?php
namespace App\Repository;

use App\Model\Entity\Category;
use App\Model\Entity\CategoryStatut;
use DB;

class CategoryStatutRepository {

    /** Return all statut of the category
     * @return array
     */
    public function getStatutCat(): array {
        $statCat = [];
        $request = DB::getInstance()->prepare("SELECT * FROM categoryStatut");
        if ($request->execute() && $data = $request->fetchAll()) {
            foreach ($data as $catStatData) {
                $statCat[] = new CategoryStatut($catStatData['id'], $catStatData['name']);
            }
        }
        return $statCat;
    }

    /** Return a statut of the category by id
     * @param int $id
     * @return CategoryStatut|null
     */
    public function showStatById(int $id) : ?CategoryStatut {
        $request = DB::getInstance()->prepare("SELECT * FROM categoryStatut WHERE id = :id");
        $request->bindValue(':id', $id);
        $result = $request->execute();
        if ($result && $data = $request->fetch()) {
            return new CategoryStatut( $data['id'], $data['name']);
        }

        return null;
    }

    /** Return a name statut of the category by id
     * @param string $nameStat
     * @return Category
     */
    public  function showNameStatCat(string $nameStat): Category {
        $request = DB::getInstance()->prepare("SELECT * FROM categoryStatut WHERE name = :name");
        $request->bindValue(':name', $nameStat);
        $request->execute();
        $res = new Category();
        if ($data = $request->fetch()) {
            $res->setId($data['id']);
            $res->setName($data['name']);
        }
        return $res;
    }

    /** Modify statut of the category in the BDD
     * @param CategoryStatut $newStatut
     * @return bool
     */
    public function getModifyStatCat(CategoryStatut $newStatut) : bool {
        $request = DB::getInstance()->prepare("UPDATE categoryStatut SET name = :name WHERE id = :id");
        $request->bindValue(':name', $newStatut->getName());
        $request->bindValue(':id', $newStatut->getId());
        return $request->execute();
    }

    /** Add a statut of the category in the BDD
     * @param Category $category
     * @return bool
     */
    public function addCategory(Category $category): bool {
        $request = DB::getInstance()->prepare("INSERT INTO categoryStatut (name) VALUES (:n)");
        $request->bindValue(':n', $category->getName());
        $request->execute();
        $category->setId(DB::getInstance()->lastInsertId());
        return $category->getId() !== null && $category->getId() > 0;
    }

    // Delete a statut of  the category in the BDD
    public function deleteCategory(CategoryStatut $deleteCat): bool {
        $request = DB::getInstance()->prepare("DELETE * FROM categoryStatut WHERE id = :id");
        $request->bindValue(':id', $deleteCat->getId());
        return $request->execute();

    }

}