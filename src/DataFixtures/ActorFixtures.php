<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use App\Service\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker;


class ActorFixtures extends Fixture implements DependentFixtureInterface
{
    const ACTORS = [
        'Andrew Lincoln' => [
            'program'    => 'program_0',
        ],
        'Norman Reedus' => [
            'program'    => 'program_0',
        ],
        'Lauren Cohan' => [
            'program'    => 'program_0',
        ],
        'Danai Gurira' => [
            'program'    => 'program_0',
        ],
        'Peter Crouch' => [
            'program'    => 'program_0',
        ],
    ];
    public function load(ObjectManager $manager)
    {
        $faker  =  Faker\Factory::create('fr_FR');
        $slugify = new Slugify();
        //foreach (self::ACTORS as $key => $name)
        for ($i = 0; $i < 5; $i++)
        {
            $actor = new Actor();
            $actor->setName($faker->name);
            $actor->setSlug($slugify->generate($actor->getName()));
            $manager->persist($actor);
            //$this->addReference('actor_' . $key, $actor);
            $this->addReference('actor_' . $i, $actor);
        }
        $manager->flush();
    }
    public function getDependencies()
    {
        return [ProgramFixtures::class];
    }
}