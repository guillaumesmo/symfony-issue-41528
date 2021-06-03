<?php

declare(strict_types=1);

namespace App\Entity\User;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Thing
{
    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="things")
     * @ORM\Id
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     * @ORM\Id
     */
    private $value;
}
