<?php
namespace App\Model\Entity;

class User {

    private ?int $id;
    private ?string $pseudo;
    private ?string $mail;
    private ?string $password;
    private ?int $roleFk;
    private ?int $userOnline;

    /**
     * @param int|null $id
     * @param string|null $pseudo
     * @param string|null $mail
     * @param string|null $password
     * @param int|null $roleFk
     * @param int|null $userOnline
     */
    public function __construct(int $id = null, string $pseudo = null, string $mail = null, string $password = null, int $roleFk = null, int $userOnline = null) {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->mail = $mail;
        $this->password = $password;
        $this->roleFk = $roleFk;
        $this->userOnline = $userOnline;
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
    public function getPseudo(): ?string {
        return $this->pseudo;
    }

    /**
     * @param string|null $pseudo
     * @return User
     */
    public function setPseudo(?string $pseudo): User {
        $this->pseudo = $pseudo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMail(): ?string {
        return $this->mail;
    }

    /**
     * @param string|null $mail
     * @return User
     */
    public function setMail(?string $mail): User {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * @param string|null $password
     * @return User
     */
    public function setPassword(?string $password): User {
        $this->password = $password;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRoleFk(): ?int {
        return $this->roleFk;
    }

    /**
     * @param int|null $roleFk
     * @return User
     */
    public function setRoleFk(?int $roleFk): User {
        $this->roleFk = $roleFk;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUserOnline(): ?int {
        return $this->userOnline;
    }

    /**
     * @param int|null $userOnline
     * @return User
     */
    public function setUserOnline(?int $userOnline): User {
        $this->userOnline = $userOnline;
        return $this;
    }

}