<?php

namespace App\DataFixtures;

use App\Entity\Company;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CompanyFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $company1 = new Company();

        $company1->setName('Lead Marketing');
        $company1->setEmail('contact@leadmarketing-pro.com');
        $company1->setFrench(1);
        $company1->setType($this->getReference('type_0'));
        $manager->persist($company1);
        $this->addReference('company_0', $company1);

        $company2 = new Company();

        $company2->setName('ReCom');
        $company2->setEmail('contact@ReCom.com');
        $company2->setFrench(0);
        $company2->setType($this->getReference('type_0'));
        $manager->persist($company2);
        $this->addReference('company_1', $company2);

        $company3 = new Company();

        $company3->setName('Je lance mon entreprise');
        $company3->setEmail('jlme@entreprise.com');
        $company3->setFrench(1);
        $company3->setType($this->getReference('type_1'));
        $manager->persist($company3);
        $this->addReference('company_2', $company3);

        $company4 = new Company();

        $company4->setName('Petite Entreprise');
        $company4->setEmail('petiteentreprise@gmail.com');
        $company4->setFrench(1);
        $company4->setType($this->getReference('type_1'));
        $manager->persist($company4);
        $this->addReference('company_3', $company4);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [TypeFixtures::class];
    }
}
