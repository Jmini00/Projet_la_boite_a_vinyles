<?php

namespace App\Entity;

class Comment
{
    private int $id;
    private string $content;
    private string $commentDate;
    private int $status;
    private string $vinyleId;
    private string $userId;
    private string $userName;
    private string $userEmail;


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getCommentDate(): \DateTime
    {
        return \DateTime::createFromFormat('Y-m-d H:i:s', $this->commentDate);
    }

    public function setCommentDate(string $commentDate): void
    {
        $this->commentDate = $commentDate;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getVinyleId(): string
    {
        return $this->vinyleId;
    }
 
    public function setVinyleId(string $vinyleId): void
    {
        $this->vinyleId = $vinyleId;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    public function getUserEmail(): string
    {
        return $this->userEmail;
    }

    public function setUserEmail(string $userEmail): void
    {
        $this->userEmail = $userEmail;
    }
}
