<?php
namespace App\Model\Entity;

class Comment {

    private ?int $id;
    private ?int $userFk;
    private ?string $subject;
    private ?string $content;
    private ?string $datePost;

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
     */
    public function setUserFk(?int $userFk): void {
        $this->userFk = $userFk;
    }

    /**
     * @return string|null
     */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * @param string|null $subject
     */
    public function setSubject(?string $subject): void {
        $this->subject = $subject;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * @param string|null $content
     */
    public function setContent(?string $content): void {
        $this->content = $content;
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