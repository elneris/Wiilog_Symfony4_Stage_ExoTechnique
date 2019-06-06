<?php

namespace App\DataFixtures;

use App\Entity\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TypeFixtures extends Fixture
{
    const TYPE = [
        'Prospect',
        'Client'
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::TYPE as $key => $typeName){
            $type = new Type();
            $type->setName($typeName);
            $manager->persist($type);
            $this->addReference('type_' . $key, $type);
        }

        $manager->flush();
    }
}
