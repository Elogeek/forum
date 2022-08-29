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
}