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

    /** Return a subject via categoryFk
     * @param string $sub
     * @return Subject|null
     */
    public function getSubjectByCat(string $sub): ?Subject {
        $req = DB::getInstance()->prepare("SELECT * from subject WHERE categoryFk = :cat");
        $req->bindValue(':cat', $sub);
        $result = $req->execute();
        if ($result && $data = $req->fetch()) {
            return new Subject($data['id'],$data['title'],$data['content'],$data['category-fk'],$data['author-fk']);
        }
        return null;
    }

    /** Return a commentFk via categoryFk
     * @param string $com
     * @return Subject|null
     */
    public function getComByCat(string $com): ?Subject {
        $request = DB::getInstance()->prepare("SELECT * from subject WHERE categoryFk = :cat");
        $request->bindValue(':cat', $com);
        $result = $request->execute();
        if ($result && $data = $request->fetch()) {
            return new Subject($data['category-fk'],$data['author-fk'],$data['comment_fk']);
        }
        return null;
    }

    /** Return a statut of the Subject object based on a given role subject_status_fk
     * @param int $id
     * @return Subject|null
     */
    public function getStatById(int $id): ?Subject {
        $req = DB::getInstance()->prepare("SELECT * FROM subject WHERE subject_status_fk = :subStat");
        $req->bindValue(':subStat', $id);
        $result = $req->execute();
        if ($result && $data = $req->fetch()) {
            return new Subject($data['id'], $data['name']);
        }

        return null;
    }

    /** Return all subject closed (id=>4=>clôturer)
     * @param int $id
     * @return bool|array|null
     */
    public function showSubjectClose(int $id): bool|array {
        $req = DB::getInstance()->prepare("SELECT COUNT(subject_status_fk) FROM subject WHERE id ='4'");
        $req->bindValue(':id', $id);
        $res = $req->execute();
        if ($req->execute() && $data = $req->fetchAll()) {
            foreach ($data as $d) {
                $result[] = new Subject($d['id'], $d['name']);
            }
        } else if (isset($result)) {
            return $res;
        }
        return true;
    }

    // Return all subject open(id=>1=>créer)
    public function showSubjectOpen(): ?Subject {
        $req = DB::getInstance()->prepare("SELECT COUNT(subject_status_fk) FROM subject WHERE id ='1'");

    }
    /** Add a subject in the BDD
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