<?php':author'
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
                $x[] = new Subject($sData['id'],$sData['title'],$sData['content'], $sData['categoryFk'], $sData['auhor-fK'],$sData['commentFk'], $sData['subjectStatFk']);
            }
        }
        return $x;
    }

    /** Return a subject via authorFk
     * @param int $author
     * @return Subject|null
     */
    public function getSubjectByAuthor(int $author): ?Subject {
        $request = DB::getInstance()->prepare("SELECT * from subject WHERE authorFk = :author");
        $request->bindValue(':author', $author);
        $result = $request->execute();
        if ($result && $data = $request->fetch()) {
            return new Subject($data['id'],$data['title'],$data['content'],$data['author-fk']);
        }
        return null;
    }

    /** Return a commentFk of the subject via authorFk
     * @param string $com
     * @return Subject|null
     */
    public function getCommentByAuthor(string $com): ?Subject {
        $request = DB::getInstance()->prepare("SELECT * from subject WHERE authorFk = :author");
        $request->bindValue(':author', $com);
        $result = $request->execute();
        if ($result && $data = $request->fetch()) {
            return new Subject($data['id'],$data['title'],$data['author-fk'], $data['comment_fk']);
        }
        return null;
    }

    // Return a subject via categoryFk

    // Return a commentFk via categoryFk
    // Return a subjectSatutsFk of the category via subjectStatutsFk

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

    /**
     * @param Subject $b
     * @return bool
     */
    public function deleteSubject(Subject $b): bool {
        $request = DB::getInstance()->prepare("DELETE FROM subject WHERE id = :id");
        $request->bindValue('id', $b->getId());
        return $request->execute();
    }

}