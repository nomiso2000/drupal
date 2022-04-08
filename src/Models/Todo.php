<?php

namespace App\Models;
use JsonSerializable;

/**
 * @Entity
 * @Table(name="todos")
 */


class Todo implements JsonSerializable {
    /**
     * @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue
     */
    private ?int $id;

     /**
     * @Column(name="user_id", type="integer", nullable=false)
     */
    private ?int $user_id;

    /**
     * @Column(name="task", type="string", length=250, nullable=false)
     */
    private string $task;

    /**
     * @Column(name="status", type="boolean", nullable=false)
     */
    private bool $status = false;



        public function __construct(?int $user_id, string $task,  bool $status)
    {
        $this->user_id = $user_id;
        $this->task = $task;
        $this->status = $status;
    }

        public function getId(): ?int {
        return $this->id;
    }

        public function jsonSerialize() {
        return
        [
            'id' => $this->getId(),
        ];
    }
    public function geUserId(): int {
        return $this->user_id;
    }
    public function getTask(): string {
        return $this->task;
    }
    public function getStatus(): bool {
        return $this->status;
    }
    public function changeStatus(){
        if($this->status == 1) {
          $this->status = 0;
        }  else {
          $this->status = 1;
        }
    }

}
