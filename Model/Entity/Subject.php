<?php
namespace App\Model\Entity;

class Subject {

    private ?int $id;
    private ?string $title;
    private ?string $content;
    private ?int $categoryFk;
    private ?int $authorFk;
    private ?int $commentFk;
    private ?int $subjectStatFk;

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
     * @return string|null
     */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void {
        $this->title = $title;
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
     * @return int|null
     */
    public function getCategoryFk(): ?int {
        return $this->categoryFk;
    }

    /**
     * @param int|null $categoryFk
     */
    public function setCategoryFk(?int $categoryFk): void {
        $this->categoryFk = $categoryFk;
    }

    /**
     * @return int|null
     */
    public function getAuthorFk(): ?int {
        return $this->authorFk;
    }

    /**
     * @param int|null $authorFk
     */
    public function setAuthorFk(?int $authorFk): void {
        $this->authorFk = $authorFk;
    }

    /**
     * @return int|null
     */
    public function getCommentFk(): ?int {
        return $this->commentFk;
    }

    /**
     * @param int|null $commentFk
     */
    public function setCommentFk(?int $commentFk): void {
        $this->commentFk = $commentFk;
    }

    /**
     * @return int|null
     */
    public function getSubjectStatFk(): ?int {
        return $this->subjectStatFk;
    }

    /**
     * @param int|null $subjectStatFk
     */
    public function setSubjectStatFk(?int $subjectStatFk): void {
        $this->subjectStatFk = $subjectStatFk;
    }

}