<?php
namespace App\Repository;

use App\Model\Entity\Subject;
use DB;

class SubjectRepository {

    /**
     * Get all subjects.
     * @return array
     */
    public function getSubject(): array {
        $x = [];
        $request = DB::getInstance()->prepare("SELECT * FROM subject");
        if ($request->execute() && $data = $request->fetchAll()) {
            foreach ($data as $sData) {
                $x[] = new Subject($sData['id'],$sData['title'],$sData['content'], $sData['categoryFk'], $sData['auhorfK'],$sData['commentFk'], $sData['subject'],$sData['statusFk']);
            }
        }
        return $x;
    }

    pu

}