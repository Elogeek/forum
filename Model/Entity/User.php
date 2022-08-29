<?php
namespace App\Model\Entity;

class User {

    private ?int $id;
    private ?int $status;
    private ?string $registrationDate;
    private ?string $username;
    private ?string $lastname;
    private ?string $password;
    private ?string $email;
    private ?string $pseudo;
    private ?int $roleFk;

    /**
     * User constructor
     * @param int|null $id
     * @param int|null $status
     * @param string|null $registrationDate
     * @param string|null $username
     * @param string|null $lastname
     * @param string|null $password
     * @param string|null $email
     * @param string|null $pseudo
     * @param int|null $roleFk
     */
    public function __construct(int $id = null, int $status = null, string $registrationDate = null, string $username = null, string $lastname = null, string $password = null, string $email = null, string $pseudo = null, int $roleFk = null) {
        $this->id = $id;
        $this->status = $status;
        $this->registrationDate = $registrationDate;
        $this->username = $username;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->email = $email;
        $this->pseudo = $pseudo;
        $this->roleFk = $roleFk;
    }

    /**
     *  Get id of the user
     * @return int|null
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Set id of the user
     * @param int|null $id
     */
    public function setId(?int $id): void {
        $this->id = $id;
    }

    /**
     * Get status of the user (online,...)
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * Set status of the user
     * @param int|null $status
     * @return User
     */
    public function setStatus(?int $status): User
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get registration date of the user
     * @return string|null
     */
    public function getRegistrationDate(): ?string
    {
        return $this->registrationDate;
    }

    /**
     * Set registration date of the user
     * @param string|null $registrationDate
     * @return User
     */
    public function setRegistrationDate(?string $registrationDate): User
    {
        $this->registrationDate = $registrationDate;
        return $this;
    }

    /**
     *  Get username of the user
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * Set username of the user
     * @param string|null $username
     * @return User
     */
    public function setUsername(?string $username): User
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Get lastname of the user
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * Set lastname of the user
     * @param string|null $lastname
     * @return User
     */
    public function setLastname(?string $lastname):User
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Get email of the user
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Set email of the user
     * @param string|null $email
     * @return User
     */
    public function setEmail(?string $email): User
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get pseudo of the user
     * @return string|null
     */
    public function getPseudo(): ?string {
        return $this->pseudo;
    }

    /**
     * Set pseudo of the user
     * @param string|null $pseudo
     * @return User
     */
    public function setPseudo(?string $pseudo): User {
        $this->pseudo = $pseudo;
        return $this;
    }

    /**
     * Get password of the user
     * @return string|null
     */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Set password of the user
     * @param string|null $password
     * @return User
     */
    public function setPassword(?string $password): User {
        $this->password = $password;
        return $this;
    }

    /**
     * Get role of the user
     * @return int|null
     */
    public function getRoleFk(): ?int {
        return $this->roleFk;
    }

    /**
     * Set role of the user
     * @param false|int|null $roleFk
     * @return User
     */
    public function setRoleFk($roleFk): User {
        $this->roleFk = $roleFk;
        return $this;
    }




}