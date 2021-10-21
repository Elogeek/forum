<?php
namespace App\Repository;

use App\Model\Entity\Subject;
use DB;

class SubjectManager {

    /**
     * Get all subjects.
     * @param $catId
     * @return array|null
     */
    public function getSubject($catId): ?array {
        $x = [];
        $request = DB::getInstance()->prepare("SELECT * FROM subject WHERE categoryFk = :catId ORDER BY datePost DESC");
        $request->bindValue(':catId', $catId);
        if ($request->execute() && $data = $request->fetchAll()) {
            foreach ($data as $sData) {
                $x[] = new Subject($sData['id'],$sData['title'],$sData['content'], $sData['categoryFk'], $sData['auhorFK'],$sData['commentFk'],$sData['datePost']);
            }
        }
        return $x;
    }

    /**
     * get a subjects
     * @param $subjectId
     * @return Subject
     */
    public function getSubjectById($subjectId):Subject {
        $request = DB::getInstance()->prepare("SELECT * FROM subject WHERE id = :subjectId ");
        $request->bindValue(':subjectId', $subjectId);
        $a = $request->execute();
        $subjects = null;

        if($a) {
            $sData = $request->fetch();
            $subjects = new Subject($sData['id'],$sData['title'],$sData['content'], $sData['categoryFk'], $sData['auhorFK'],$sData['commentFk'],$sData['datePost']);
        }
        return $subjects;
    }

    /**
     * Search a subject
     * @param $subjectId
     * @return Subject|null
     */
    public function searchSubject($subjectId): ?Subject {
        $stmt = DB::getInstance()->prepare("SELECT * FROM subject  WHERE id = :subjectId LIMIT 1");
        $stmt->bindValue(':subjectId', $subjectId);
        $state = $stmt->execute();
        if($state && $sData = $stmt->fetch())
        {
            $subject = new Subject($sData['id'],$sData['title'],$sData['content'], $sData['categoryFk'], $sData['auhorFK'],$sData['commentFk'],$sData['datePost']);
        }
        else {
            $subject = null;
        }

        return $subject;
    }

    /** Add a subject in the BDD
     * @param Subject $a
     * @return bool
     */
    public function addSubject(Subject $a): bool {
        $request = DB::getInstance()->prepare(
            "INSERT INTO subject(title,content,categoryFk,authorFk,commentFk,datepost) 
                    VALUES(:t,:content,:catFk,:authorFk,:commentFk,:dateP)"
        );
        $request->bindValue(':t', $a->getTitle());
        $request->bindValue(':content', $a->getContent());
        $request->bindValue(':catFk', $a->getCategoryFk());
        $request->bindValue(':authorFk', $a->getAuthorFk());
        $request->bindValue(':commentFk', $a->getCommentFk());
        $request->bindValue(':dateP', $a->getDatePost());

        $a->setId(DB::getInstance()->lastInsertId());
        return $a->getId() !== null && $a->getId() > 0;
    }

    /**
     * @param Subject $b
     * @return bool
     */
    public function deleteSubject(Subject $b): bool {
        $request = DB::getInstance()->prepare("DELETE FROM subject WHERE id = :id");
        $request->bindValue('id', $b->getId());
        return $request->execute();
    }

    /** Modify infos a subject in the BDD
     * @param $subjectId
     * @param $title
     * @param $content
     * @return bool
     */
    public function updateSubject($subjectId, $title, $content) :bool {
        $stmt = DB::getInstance()->prepare("UPDATE subject SET title = :title, content = :content WHERE id = :subjectId ");
        $stmt->bindValue(':title', $title);
        $stmt->bindValue(':content', $content);
        $stmt->bindValue(':subjectId', $subjectId);

        return $stmt->execute();
    }

}