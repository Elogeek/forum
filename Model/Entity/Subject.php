<?php
namespace App\Model\Entity;

class Subject {

    private ?int $id;
    private ?string $title;
    private ?string $content;
    private ?int $categoryFk;
    private ?int $authorFk;
    private ?int $commentFk;


    /**
     * Subject constructor.
     * @param int|null $id
     * @param int|null $title
     * @param string|null $content
     * @param int|null $categoryFk
     * @param int|null $authorFk
     * @param string|null $commentFk
     */
    public function __construct(int $id = null, int $title = null, string $content = null, int $categoryFk = null, int $authorFk = null, string $commentFk = null) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->categoryFk = $categoryFk;
        $this->authorFk = $authorFk;
        $this->commentFk = $commentFk;
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
     * @return string|null
     */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return Subject
     */
    public function setTitle(?string $title): Subject {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * @param string|null $content
     * @return Subject
     */
    public function setContent(?string $content): Subject{
        $this->content = $content;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCategoryFk(): ?int {
        return $this->categoryFk;
    }

    /**
     * @param int|null $categoryFk
     * @return Subject
     */
    public function setCategoryFk(?int $categoryFk): Subject {
        $this->categoryFk = $categoryFk;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAuthorFk(): ?int {
        return $this->authorFk;
    }

    /**
     * @param int|null $authorFk
     * @return Subject
     */
    public function setAuthorFk(?int $authorFk): Subject {
        $this->authorFk = $authorFk;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCommentFk(): ?int {
        return $this->commentFk;
    }

    /**
     * @param int|null $commentFk
     * @return Subject
     */
    public function setCommentFk(?int $commentFk): Subject {
        $this->commentFk = $commentFk;
        return $this;
    }

}