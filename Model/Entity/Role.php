<?php
namespace App\Model\Entity;

class Role {

    private ?int $id;
    private ?string $name;

    /**
     * Role constructor.
     * @param int|null $id
     * @param string|null $name
     */
    public function __construct(int $id = null, string $name = null) {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * Get id of the role
     * @return int|null
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Set id of the role
     * @param int|null $id
     */
    public function setId(?int $id): void {
        $this->id = $id;
    }

    /**
     * Get name of the role
     * @return string|null
     */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Set name of the role
     * @param string|null $name
     */
    public function setName(?string $name): void {
        $this->name = $name;
    }

}