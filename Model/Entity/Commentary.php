<?php
namespace App\Model\Entity;

class Commentary {

    private ?int $id;
    private ?string $status;
    private ?int $authorFk;
    private ?string $subjectFk;
    private ?string $content;
    private ?string $datePost;

    /**
     * Comment constructor.
     * @param int|null $id
     * @param int|null $status
     * @param int|null $authorFk
     * @param int|null $subjectFk
     * @param string|null $content
     * @param null $datePost
     */
    public function __construct(int $id = null, int $status = null, int $authorFk = null, int $subjectFk = null, string $content = null, $datePost = null)
    {
        $this->id = $id;
        $this->status = $status;
        $this->authorFk = $authorFk;
        $this->subjectFk = $subjectFk;
        $this->content = $content;
        $this->datePost = $datePost;
    }

    /**
     * Get id of the comment
     * @return int|null
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Set id of the comment
     * @param int|null $id
     */
    public function setId(?int $id): void {
        $this->id = $id;
    }

    /**
     * Get status of the comment
     * @return int|null
     */
    public function getStatus(): ?int {
        return $this->status;
    }

    /**
     * Set status of the comment
     * @param int|null $status
     * @return Commentary
     */
    public function setStatus(?int $status): Commentary {
        $this->status = $status;
        return $this;
    }

    /**
     * Get author(user_fk) of the comment
     * @return int|null
     */
    public function getAuthorFk(): ?int {
        return $this->authorFk;
    }

    /**
     * Set author(user_fk) of the comment
     * @param int|null $authorFk
     * @return Commentary
     */
    public function setUserFk(?int $authorFk): Commentary {
        $this->authorFk = $authorFk;
        return $this;
    }

    /**
     * Get subject (subject_fk) of the comment
     * @return int|null
     */
    public function getSubjectFk(): ?int {
        return $this->subjectFk;
    }

    /**
     * Set subject of the comment
     * @param $subjectFk
     * @return Commentary
     */
    public function setSubject($subjectFk): Commentary {
        $this->subjectFk = $subjectFk;
        return  $this;
    }

    /**
     * Get content of the comment
     * @return string|null
     */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * Set content of the comment
     * @param string|null $content
     * @return Commentary
     */
    public function setContent(?string $content): Commentary {
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