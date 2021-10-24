<?php

namespace domain\note;

use interfaces\note\NoteDBInterface;
use interfaces\note\NoteInterface;

class NoteDB implements NoteDBInterface
{
    // With this approach we heavily rely on MySQL
    // It would be hard to move to other DB ( for example MongoDB )
    // But it's easy this way
    protected \mysqli $mysqli;

    public function __construct(\mysqli $mysqli)
    {
        $this->mysqli = $mysqli;
    }

    /**
     * @param int $id
     * @return NoteInterface|null
     */
    function findById(int $id): ?NoteInterface
    {
        // TODO: Implement findById() method.
    }

    /**
     * @param int $user_id
     * @return array|null
     */
    function findByUserId(int $user_id): ?array
    {
        // TODO: Implement findByUserId() method.
    }

    /**
     * @param NoteInterface $note
     * @return bool
     */
    function save(NoteInterface $note): bool
    {
        // TODO: Implement save() method.
    }

    /**
     * @param NoteInterface $note
     * @return bool
     */
    function delete(NoteInterface $note): bool
    {
        // TODO: Implement delete() method.
    }
}