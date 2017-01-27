<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Auction;
use AppBundle\Entity\Bid;
use AppBundle\Entity\User;

class LoadSampleData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $albo = new User();
        $albo->setName('albo')->setEmail('albo@pragmore.com');
        $manager->persist($albo);
        
        $daniel = new User();
        $daniel->setName('Dani')->setEmail('daniel@pragmore.com');
        $manager->persist($daniel);
        
        $chris = new User();
        $chris->setName('Mudo')->setEmail('csuarez@pragmore.com');
        $manager->persist($daniel);

        $mac = new Auction();
        $mac->setTitle('Notebook Mac')
            ->setDescription('En muy buenas condiciones. **Apurate!**')
            ->setSeller($daniel)
            ->setReserve(5000)
            ->setMinimalAllowedIncrement(100)
        ;
        $manager->persist($mac);

        $bid1 = new Bid();
        $bid1->setPrice(5000)->setBidder($albo);
        $manager->persist($bid1);

        $bid2 = new Bid();
        $bid2->setPrice(5100)->setBidder($chris);
        $manager->persist($bid2);

        $cuna = new Auction();
        $cuna->setTitle('Cuna blanca')
             ->setDescription("* Medidas: 1x1.5m\n* Laqueada\n* Con cajón\n* Colchón sin cargo")
             ->setSeller($albo)
             ->setMinimalAllowedIncrement(50)
        ;
        $manager->persist($cuna);

        $sillita = new Auction();
        $sillita->setTitle('Silla de comer para bebés')
                ->setDescription('**Muy poco uso!**')
                ->setSeller($albo)
                ->setReserve(500)
                ->setMinimalAllowedIncrement(20)
        ;
        $manager->persist($sillita);

        $manager->flush();
    }
}
