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
                $x[] = new Subject($sData['id'],$sData['title'],$sData['content'], $sData['categoryFk'], $sData['auhorfK'],$sData['commentFk'], $sData['subject'],$sData['subjectStatFk']);
            }
        }
        return $x;
    }

    /**
     * @param Subject $a
     * @return bool
     */
    public function addSubject(Subject $a): bool {
        $request = DB::getInstance()->prepare(
            "INSERT INTO subject(title,content,categoryFk,authorFk,commentFk,subjectStatFk) 
                    VALUES(:t,:content,:catFk,:authorFk,:commentFk,:subjStatFk)"
        );
        $request->bindValue(':t', $a->getTitle());
        $request->bindValue(':content', $a->getContent());
        $request->bindValue(':catFk', $a->getCategoryFk());
        $request->bindValue(':authorFk', $a->getAuthorFk());
        $request->bindValue(':commentFk', $a->getCommentFk());
        $request->bindValue(':subjectStatFk', $a->getSubjectStatFk());

        $a->setId(DB::getInstance()->lastInsertId());
        return $a->getId() !== null && $a->getId() > 0;
    }

}