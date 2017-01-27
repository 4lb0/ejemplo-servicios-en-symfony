<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auction
 *
 * @ORM\Table(name="auction")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AuctionRepository")
 */
class Auction
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="reserve", type="decimal", precision=10, scale=2)
     */
    private $reserve = 1;

    /**
     * @var float
     *
     * @ORM\Column(name="minimalAllowedIncrement", type="decimal", precision=10, scale=2)
     */
    private $minimalAllowedIncrement = 0.1;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="auctions",cascade={"persist"})
     */
    private $seller;


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
     * Set description
     *
     * @param string $description
     *
     * @return Auction
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set reserve
     *
     * @param float $reserve
     *
     * @return Auction
     */
    public function setReserve($reserve)
    {
        $this->reserve = $reserve;

        return $this;
    }

    /**
     * Get reserve
     *
     * @return float
     */
    public function getReserve()
    {
        return $this->reserve;
    }

    /**
     * Set minimalAllowedIncrement
     *
     * @param float $minimalAllowedIncrement
     *
     * @return Auction
     */
    public function setMinimalAllowedIncrement($minimalAllowedIncrement)
    {
        $this->minimalAllowedIncrement = $minimalAllowedIncrement;

        return $this;
    }

    /**
     * Get minimalAllowedIncrement
     *
     * @return float
     */
    public function getMinimalAllowedIncrement()
    {
        return $this->minimalAllowedIncrement;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Auction
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set seller
     *
     * @param \AppBundle\Entity\User $seller
     *
     * @return Auction
     */
    public function setSeller(\AppBundle\Entity\User $seller = null)
    {
        $this->seller = $seller;

        return $this;
    }

    /**
     * Get seller
     *
     * @return \AppBundle\Entity\User
     */
    public function getSeller()
    {
        return $this->seller;
    }
}
