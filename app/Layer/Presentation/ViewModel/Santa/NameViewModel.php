<?php

namespace App\Layer\Presentation\ViewModel\Santa;

class NameViewModel
{
    public function getName(string $name): string
    {
        return 'Твое имя: ' . $name;
    }
}
