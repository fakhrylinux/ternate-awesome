<?php

namespace Fakhry\Informatika\Karyawan\TernateAwesome\Model;

class Post
{
    private int $id;
    private string $title;
    private string $image;
    private string $caption;

    public function __construct(string $title = "", string $image = "", string $caption = "")
    {
        $this->title = $title;
        $this->image = $image;
        $this->caption = $caption;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getCaption(): string
    {
        return $this->caption;
    }

    public function setCaption(string $caption): void
    {
        $this->caption = $caption;
    }
}