<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="articles")
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;

     /** @ORM\Column(type="text") */
     private $content;

     public function getContent()
     {
         return $this->content;
     }

     public function setContent($s)
     {
         $this->content = $s;
     }

     public function __construct()
     {

     }
}
