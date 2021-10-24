<?php

namespace domain\note;

use interfaces\domain\note\NoteInterface;

class Note implements NoteInterface
{
    protected int $id;
    protected int $user_id;
    protected string $header;
    protected string $contents;

    public function __construct(int $id, int $user_id, string $header, string $contents)
    {
        $this->id = $id;
        $this->contents = $contents;
        $this->user_id = $user_id;
        $this->header = $header;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @param string $header
     */
    public function setHeader(string $header): void
    {
        $this->header = $header;
    }

    /**
     * @param string $contents
     */
    public function setContents(string $contents): void
    {
        $this->contents = $contents;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * @return string
     */
    public function getContents(): string
    {
        return $this->contents;
    }
}