<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Quote.
 *
 * @ORM\Entity()
 * @ORM\Table(name="quotes",
 * indexes={
 *     @ORM\Index(name="channel",
 *         columns={"channel"}
 *     )
 * })
 */
class Quote
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="channel", type="string")
     */
    protected $channel;
}