<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Auction;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }

    public function auctionsAction(Request $request)
    {
        $auctions = $this->getDoctrine()
            ->getRepository('AppBundle:Auction')
            ->findAll();
        return $this->render('default/auctions.html.twig', [
            'auctions' => $auctions,
        ]);
    }

    /**
     * @Route("/auction/{id}", name="auction")
     */
    public function auctionAction(Auction $auction)
    {
        return $this->render('default/auction.html.twig', [
            'auction' => $auction,
        ]);
    }
}
