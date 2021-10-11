<?php
namespace App\Model\Entity;

class User {

    private ?int $id;
    private ?string $pseudo;
    private ?string $mail;
    private ?string $password;
    private ?int $role;
    private ?int $userOnline;

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
    public function getPseudo(): ?string {
        return $this->pseudo;
    }

    /**
     * @param string|null $pseudo
     */
    public function setPseudo(?string $pseudo): void {
        $this->pseudo = $pseudo;
    }

    /**
     * @return string|null
     */
    public function getMail(): ?string {
        return $this->mail;
    }

    /**
     * @param string|null $mail
     */
    public function setMail(?string $mail): void {
        $this->mail = $mail;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void {
        $this->password = $password;
    }

    /**
     * @return int|null
     */
    public function getRole(): ?int {
        return $this->role;
    }

    /**
     * @param int|null $role
     */
    public function setRole(?int $role): void {
        $this->role = $role;
    }

    /**
     * @return int|null
     */
    public function getUserOnline(): ?int {
        return $this->userOnline;
    }

    /**
     * @param int|null $userOnline
     */
    public function setUserOnline(?int $userOnline): void {
        $this->userOnline = $userOnline;
    }

}