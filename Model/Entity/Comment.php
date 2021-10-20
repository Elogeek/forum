<?php
namespace App\Model\Entity;

class Comment {

    private ?int $id;
    private ?int $userFk;
    private ?string $subject;
    private ?string $content;
    private ?string $datePost;

    /**
     * Commentary constructor.
     * @param int|null $id
     * @param int|null $userFk
     * @param int|null $subject
     * @param string|null $content
     * @param null $datePost
     */
    public function __construct(int $id = null, int $userFk = null, int $subject = null, string $content = null, $datePost = null)
    {
        $this->id = $id;
        $this->userFk = $userFk;
        $this->subject = $subject;
        $this->content = $content;
        $this->datePost = $datePost;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getUserFk(): ?int {
        return $this->userFk;
    }

    /**
     * @param int|null $userFk
     * @return Comment
     */
    public function setUserFk(?int $userFk): Comment {
        $this->userFk = $userFk;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * @param string|null $subject
     * @return Comment
     */
    public function setSubject(?string $subject): Comment {
        $this->subject = $subject;
        return  $this;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * @param string|null $content
     * @return Comment
     */
    public function setContent(?string $content): Comment {
        $this->content = $content;
        return  $this;
    }

    /**
     * @return string|null
     */
    public function getDatePost(): ?string {
        return $this->datePost;
    }

    /**
     * @param string|null $datePost
     */
    public function setDatePost(?string $datePost): void {
        $this->datePost = $datePost;
    }

}