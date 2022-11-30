<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $program = new Program();
        $program->setTitle('Buffy contre les vampires');
        $program->setSynopsis('Buffy Summers est une Tueuse de vampires issue d\'une longue lignée d\'Élues luttant contre les forces du mal, notamment les vampires et les démons. À l\'instar des précédentes Tueuses, elle bénéficie des enseignements de son Observateur, chargé de la guider et de l\'entraîner.');
        $program->setPoster('build/images/buffyfaith.webp');
        $program->setCategory($this->getReference('category_Fantastique'));
        $manager->persist($program);

        $program1 = new Program();
        $program1->setTitle('Walking dead');
        $program1->setSynopsis('Des zombies envahissent la terre');
        $program1->setPoster('build/images/walkingdead.jpeg');
        $program1->setCategory($this->getReference('category_Horreur'));
        $manager->persist($program1);

        $program2 = new Program();
        $program2->setTitle('The 100');
        $program2->setSynopsis('Après une apocalypse nucléaire, les 318 survivants se réfugient dans des stations spatiales et parviennent à y vivre et à se reproduire, atteignant le nombre de 4000 ; 97 ans plus tard, une centaine de jeunes délinquants redescendent sur Terre.');
        $program2->setPoster('build/images/th.jpeg');
        $program2->setCategory($this->getReference('category_Science-fiction'));
        $manager->persist($program2);

        $program3 = new Program();
        $program3->setTitle('Mr Robot');
        $program3->setSynopsis('Elliot Alderson est un jeune informaticien vivant à New York, qui travaille en tant qu\'ingénieur en sécurité informatique pour Allsafe Security. Celui-ci luttant constamment contre un trouble d\'anxiété sociale et de dépression.');
        $program3->setPoster('build/images/robot.jpeg');
        $program3->setCategory($this->getReference('category_Drame'));
        $manager->persist($program3);

        $program4 = new Program();
        $program4->setTitle('The handmaid\'s tale');
        $program4->setSynopsis('Dans une dictature où la stérilité a frappé les femmes, ces dernières sont divisées en trois catégories : les Epouses, qui dominent la maison, les Marthas, qui l\'entretiennent, et les Servantes, dont le rôle est la reproduction.');
        $program4->setPoster('build/images/handmaid.jpeg');
        $program4->setCategory($this->getReference('category_Drame'));
        $manager->persist($program4);

        $manager->flush();
    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
            CategoryFixtures::class,
        ];
    }
}
