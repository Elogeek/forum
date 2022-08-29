<?php
namespace App\Model\Entity;

class Subject {

    private ?int $id;
    private ?string $status;
    private ?string $datePost;
    private ?string $authorFk;
    private ?string $categoryFk;
    private ?string $name;
    private ?string $description;
    private ?string $content;


    /**
     * Subject constructor.
     * @param int|null $id
     * @param int|null $status
     * @param string|null $datePost
     * @param int|null $authorFk
     * @param int|null $categoryFk
     * @param string|null $name
     * @param string|null $description
     * @param string|null $content
     */
    public function __construct(int $id = null, int $status = null,
                                string $datePost = null, int $authorFk = null, int $categoryFk = null,
                                string $name = null, string $description = null, string $content = null) {
        $this->id = $id;
        $this->status = $status;
        $this->datePost = $datePost;
        $this->authorFk = $authorFk;
        $this->categoryFk = $categoryFk;
        $this->description = $description;
        $this->content = $content;


    }

    /**
     * Get id of the subject
     * @return int|null
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Set id of the subject
     * @param int|null $id
     */
    public function setId(?int $id): void {
        $this->id = $id;
    }

    /**
     * Get status of the subject
     * @return int|null
     */
    public function getStatus(): ?int {
        return $this->status;
    }

    /**
     * Set status of the subject
     * @param int|null $status
     * @return Subject
     */
    public function setStatus(?int $status): Subject {
         $this->status = $status;
         return  $this;
    }

    /**
     * Get topic creation date
     * @return string|null
     */
    public function getDatePost(): ?string {
        return $this->datePost;
    }

    /**
     * Set topic creation date
     * @param string|null $datePost
     * @return Subject
     */
    public function setDatePost(?string $datePost): Subject {
        $this->datePost = $datePost;
        return $this;
    }

    /**
     * Get user (user_fk in the DB) of the subject
     * @return int|null
     */
    public function getAuthorFk(): ?int {
        return $this->authorFk;
    }

    /**
     * Set user (user_fk in the DB) of the subject
     * @param int|null $authorFk
     * @return Subject
     */
    public function setAuthorFk($authorFk): Subject {
        $this->authorFk = $authorFk;
        return $this;
    }

    /**
     * Get category (category_fk in the DB) of the subject
     * @return int|null
     */
    public function getCategoryFk(): ?int {
        return $this->categoryFk;
    }

    /**
     * Set category (category_fk in the DB) of the subject
     * @param int|null $categoryFk
     * @return Subject
     */
    public function setCategoryFk($categoryFk): Subject {
        $this->categoryFk = $categoryFk;
        return $this;
    }

    /**
     * Get name of the subject
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set name of the subject
     * @param string|null $name
     * @return Subject
     */
    public function setName(?string $name): Subject
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get description of Subject
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set description of the subject
     * @param string|null $description
     * @return Subject
     */
    public function setDescription(?string $description): Subject
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get content of the subject
     * @return string|null
     */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * Set content of the subject
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