<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="likes")
 */
class Like
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;

     /** @ORM\Column(type="string", length=20) */
     private $name;

     public function getName()
     {
         return $this->name;
     }

     public function setName($n)
     {
         $this->name = $n;
     }

     public function __construct($n)
     {
         $this->name = $n;
     }
}
