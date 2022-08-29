<?php
namespace App\Model\Entity;

class Token {

    private ?int $id;
    private ?int $userFk;
    private ?string $token;

    /**
     * token construct
     */
    public function __construct(int $id =null, int $userFk = null, string $token = null) {

        $this->id = $id;
        $this->userFk = $userFk;
        $this->token = $token;
    }

    /**
     * Get id of the token
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get user of  the token
     * @return int|null
     */
    public function getUserFk(): ?int
    {
        return $this->userFk;
    }

    /**
     * Set user of  the token
     * @param $userFk
     * @return Token
     */
    public function setUserFk($userFk): Token
    {
        $this->userFk = $userFk;
        return $this;
    }

    /**
     * Get token of the token
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Set token of the token
     * @param string|null $token
     * @return Token
     */
    public function setToken(?string $token): Token
    {
        $this->token = $token;
        return $this;
    }
}