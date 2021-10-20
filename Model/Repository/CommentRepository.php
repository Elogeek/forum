<?php

namespace App\Repository;

use App\Model\Entity\Comment;
use DB;

class CommentRepository {
    /**
     * Get all public commentary of a subject
     * @param $subject
     * @return array
     */
    public function getComment($subject):array
    {
        $stmt = DB::getInstance()->prepare("SELECT * FROM comment WHERE subject = :subject )");
        $stmt->bindValue(':subject', $subject);
        $state = $stmt->execute();
        $comments = [];
        if ($state)
        {
            foreach ($stmt->fetchAll() as $commentary)
            {
                $comments [] = new Comment($commentary['id'], $commentary['userFk'], $commentary['subject'], $commentary['content']);
            }
        }
        return $comments;
    }

    /**
     * Insert a new commentary
     * @param $userFk
     * @param $subject
     * @param $content
     * @return bool
     */
    public function addComment($userFk, $subject, $content): bool {
        $stmt = DB::getInstance()->prepare("INSERT INTO comment (userFk, subject, content) VALUE ( :userFk, :subject, :content)");
        $stmt->bindValue(':userFk', $userFk);
        $stmt->bindValue(':subject', $subject);
        $stmt->bindValue(':content', $content);

        return $stmt->execute();
    }

    /**
     * Delete a commentary
     * @param $commentId
     * @return bool
     */
    public function deleteComment($commentId): bool
    {
        $stmt = DB::getInstance()->prepare("DELETE FROM comment WHERE id = :commentId");
        $stmt->bindValue(':commentId', $commentId);

        return $stmt->execute();
    }


}