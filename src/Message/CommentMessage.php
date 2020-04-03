<?php

namespace App;

class CommentMessage
{
    private $id;
    private $context;

    public function __construct(int $id, array $context)
    {
        $this->id = $id;
        $this->context = $context;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getContext() : array
    {
        return $this->context;
    }
}