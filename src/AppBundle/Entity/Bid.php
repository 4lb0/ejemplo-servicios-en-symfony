<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bid
 *
 * @ORM\Table(name="bid")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BidRepository")
 */
class Bid
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2)
     */
    private $price;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="bids", cascade={"persist"})
     */
    private $bidder;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Bid
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set bidder
     *
     * @param \AppBundle\Entity\User $bidder
     *
     * @return Bid
     */
    public function setBidder(\AppBundle\Entity\User $bidder = null)
    {
        $this->bidder = $bidder;

        return $this;
    }

    /**
     * Get bidder
     *
     * @return \AppBundle\Entity\User
     */
    public function getBidder()
    {
        return $this->bidder;
    }
}
