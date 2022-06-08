<?php

class ad
{
    private string $email;
    private string $category;
    private string $title;
    private string $description;

    public function __construct(
        string $email,
        string $category,
        string $title,
        string $description
    ) {
        $this->email = $email;
        $this->category = $category;
        $this->title = $title;
        $this->description = $description;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
