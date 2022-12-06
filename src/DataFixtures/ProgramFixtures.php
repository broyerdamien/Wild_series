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
        $program->setPoster('https://s1.qwant.com/thumbr/474x245/1/f/2266f1862540fedec9f84a3c54ad47c59207b9bd8789d207c7833ff6b628d8/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.Dise4UiAa1HgNCu6ZOPAGQHaD1%26pid%3DApi&q=0&b=1&p=0&a=0');
        $program->setCategory($this->getReference('category_Fantastique'));
        $manager->persist($program);

        $program1 = new Program();
        $program1->setTitle('Walking dead');
        $program1->setSynopsis('Des zombies envahissent la terre');
        $program1->setPoster('https://s1.qwant.com/thumbr/474x269/9/1/177a1c733c3c6765656f60a5e2bd71542c2b258e2af43c583fdb2a13fffcb8/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.xizQWWh0Df0z7FUjAUSyAAHaEN%26pid%3DApi&q=0&b=1&p=0&a=0');
        $program1->setCategory($this->getReference('category_Horreur'));
        $manager->persist($program1);

        $program2 = new Program();
        $program2->setTitle('The 100');
        $program2->setSynopsis('Après une apocalypse nucléaire, les 318 survivants se réfugient dans des stations spatiales et parviennent à y vivre et à se reproduire, atteignant le nombre de 4000 ; 97 ans plus tard, une centaine de jeunes délinquants redescendent sur Terre.');
        $program2->setPoster('https://s1.qwant.com/thumbr/474x258/b/3/3246bfa21e02c53e95848cc56b03929d8893c791b5976966bce31c2a580926/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.8dihkQFFS_9X_M0xE8lsPQHaEC%26pid%3DApi&q=0&b=1&p=0&a=0');
        $program2->setCategory($this->getReference('category_Science-fiction'));
        $manager->persist($program2);

        $program3 = new Program();
        $program3->setTitle('Mr Robot');
        $program3->setSynopsis('Elliot Alderson est un jeune informaticien vivant à New York, qui travaille en tant qu\'ingénieur en sécurité informatique pour Allsafe Security. Celui-ci luttant constamment contre un trouble d\'anxiété sociale et de dépression.');
        $program3->setPoster('https://s2.qwant.com/thumbr/474x711/e/f/5875629329893b1be614b729acf81329e29507ef08c33ea93d8d983e6eb1db/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.AJNFxt2XG7GRQvpSM2mgcgHaLH%26pid%3DApi&q=0&b=1&p=0&a=0');
        $program3->setCategory($this->getReference('category_Drame'));
        $manager->persist($program3);

        $program4 = new Program();
        $program4->setTitle('The handmaid\'s tale');
        $program4->setSynopsis('Dans une dictature où la stérilité a frappé les femmes, ces dernières sont divisées en trois catégories : les Epouses, qui dominent la maison, les Marthas, qui l\'entretiennent, et les Servantes, dont le rôle est la reproduction.');
        $program4->setPoster('https://s2.qwant.com/thumbr/474x266/6/7/8d8e8866766180afe2dc828d8c128035df893e487656535430ea6b8fad9942/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.ol8uUl6JPzuwIKVBGA5sxQHaEK%26pid%3DApi&q=0&b=1&p=0&a=0');
        $program4->setCategory($this->getReference('category_Drame'));
        $manager->persist($program4);

        $program5 = new Program();
        $program5->setTitle('Breaking bad');
        $program5->setSynopsis('Atteint d\'un cancer incurable, le professeur de chimie Walter White décide de tout mettre en oeuvre pour mettre définitivement à l\'abri sa famille. Sa solution ? Fabriquer et vendre du crystal meth. Il fait appel à Jesse, un de ses anciens élèves devenu un petit dealer de seconde zone...');
        $program5->setPoster('https://fr.web.img3.acsta.net/c_310_420/pictures/19/06/18/12/11/3956503.jpg');
        $program5->setCategory($this->getReference('category_Drame'));
        $manager->persist($program5);

        $program6 = new Program();
        $program6->setTitle('Peaky Blinders');
        $program6->setSynopsis('En 1919, la révolte gronde dans le Birmingham de l\'après-Guerre. Les "Peaky Blinders", dont plusieurs membres sont issus de la famille Shelby, comptent parmi les éléments les plus dangereux. Campbell, un impitoyable chef de la police débarqué de Belfast, a pour mission de nettoyer la ville.');
        $program6->setPoster('https://fr.web.img6.acsta.net/c_310_420/pictures/22/06/07/11/57/5231272.jpg');
        $program6->setCategory($this->getReference('category_Drame'));
        $manager->persist($program6);

        $program7 = new Program();
        $program7->setTitle('The Big Bang Theory');
        $program7->setSynopsis('Leonard Hofstadter et Sheldon Cooper vivent en colocation à Pasadena, ville de l\'agglomération de Los Angeles. Ce sont tous deux des physiciens surdoués, « geeks » de surcroît. C\'est d\'ailleurs autour de cela qu\'est axée la majeure partie comique de la série. Ils partagent quasiment tout leur temps libre avec leurs deux amis Howard Wolowitz et Rajesh Koothrappali pour jouer à des jeux vidéo comme Halo, organiser un marathon de la saga Star Wars, jouer à des jeux de société comme le Boggle klingon ou de rôles tel que Donjons et Dragons, voire discuter de théories scientifiques très complexes.Leur univers routinier est perturbé lorsqu\'une jeune femme, Penny, s\'installe dans l\'appartement d\'en face. Leonard a immédiatement des vues sur elle et va tout faire pour la séduire ainsi que l\'intégrer au groupe et à son univers, auquel elle ne connaît rien.');
        $program7->setPoster('https://s2.qwant.com/thumbr/474x266/c/c/e0e96a5f1607903755736fe5e3e1a32a10d9666f2197b581d82ca9fc565b2d/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.DBte2btJu0ylEyfOc1GS5QFNC7%26pid%3DApi&q=0&b=1&p=0&a=0');
        $program7->setCategory($this->getReference('category_Comédie'));
        $manager->persist($program7);

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
