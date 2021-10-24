<?php

namespace interfaces\note;

interface NoteDBInterface
{
    function findById(int $id):?NoteInterface;

    // Don't quite remember the syntax for returning an array
    function findByUserId(int $user_id):?array;

    function save(NoteInterface $note): bool;
    function delete(NoteInterface $note): bool;
}