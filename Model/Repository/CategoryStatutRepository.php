<?php
namespace App\Repository;

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

    // Return a name statut of the category by id
    public  function showNameStatCat(string $nameStat): CategoryStatut {
        $request = DB::getInstance()->prepare()
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

    // Add a statut of the category in the BDD
    // Delete a statut of  the category in the BDD
}