<?php

namespace App\Dto;


use Symfony\Component\Serializer\Annotation\Groups;

class LoginInputDto
{
    #[Groups(['user:write'])]
    public $email;

    #[Groups(['user:write'])]
    public $password;
}