<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ContactFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for($i=0; $i < 40; $i++){
           $contact = new Contact();

           $contact->setName('contact ' . $i);
           $contact->setEmail('contact ' . $i . '@contact.com');
           $contact->setCompany($this->getReference('company_' . ($i+1) % 4));
           $manager->persist($contact);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [CompanyFixtures::class];
    }
}
