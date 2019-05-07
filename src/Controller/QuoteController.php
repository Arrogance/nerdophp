<?php

namespace App\Controller;

use App\Entity\Quote;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class QuoteController.
 *
 * @Route("/")
 */
class QuoteController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function getAction(EntityManagerInterface $em)
    {
        dump($em->getRepository(Quote::class)->findAll()); die;
    }
}