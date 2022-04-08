<?php

namespace App\Models;
use JsonSerializable;

/**
 * @Entity
 * @Table(name="users")
 */


class User implements JsonSerializable {
    /**
     * @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue
     */
    private ?int $id;

    /**
     * @Column(name="email", type="string", length=250, nullable=false)
     */
    private string $email;


    /**
     * @Column(name="password", type="string", length=250, nullable=false)
     */
    private string $password;

        public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

        public function getId(): ?int {
        return $this->id;
    }

        public function jsonSerialize() {
        return
        [
            'id' => $this->getId(),
            'email' => $this->getEmail(),
        ];
    }
    public function getEmail(): string {
        return $this->email;
    }
    public function getPassword(): string {
        return $this->password;
    }

}
