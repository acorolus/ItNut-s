<?php

namespace ItNut\ItNutBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ItNut\ItNutBundle\Entity\Produit;

class LoadProduitData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $produit1 = new Produit();
        $produit1->setNom('Mélange pour Boisson Protéinée');
        $produit1->setDescription('Augmentez votre apport en protéines avec ce produit versatile qui offre deux alternatives. A préparer comme une collation à apport calorique contrôlé et riche en protéines - ou à ajouter à votre Shake de Formula 1* préféré pour obtenir une boisson délicieuse et onctueuse.<br/><b>\r\nAPPORTS ESSENTIELS></b><br/><ul><li>\r\n\r\n15 g de protéines de haute qualité</li><li>\r\n7 g de glucides</li><li>\r\n20 vitamines and minéraux</li><li>\r\nPeut être mélangé à de l\'eau</li><li>\r\nSaveur vanille</li></ul><br/><b>\r\nAVANTAGES PRODUIT</b><br/>\r\n\r\nLe Mélange pour boisson protéinée est une alternative de choix pour vous aider à atteindre votre apport quotidien en protéines. Les protéines sont les éléments constituants des muscles. Elles sont indispensables au bon fonctionnement des cellules et à la croissance et la réparation tissulaire. Le corps n\'est pas capable de stocker les protéines et ne peut pas les produire lui-même. Il est donc primordial d\'en consommer suffisamment au quotidien.\r\n<br/>\r\n<b>Nouveauté</b>');
        $produit1->setPrix(62);
        $produit1->setShortcode("Mélange-pour-Boisson-Protéinée");
        $produit1->setImage("nomDeFichier");

        $produit2->setNom("Graines de soja grillées");
        $produit2->setDescription("Ce délicieux encas salé est idéal si vous êtes en déplacement. Chaque sachet contient 9g de protéines et 113 kcal. Les Graines de Soja Grillées constituent une excellente alternative aux autres encas salés tels que les chips ou les biscuits apéritifs.<br/><b>\r\n\r\nAPPORTS ESSENTIELS</b><br/><ul><li>\r\nRiches en protéines (9g par sachet) qui contribuent à augmenter la masse musculaire.</li><li>\r\n113 calories par sachet, soit moins que dans les encas salés classiques.</li><li>\r\nDes graines grillées à sec et légèrement salées – un vrai délice.</li><li>\r\nEn sachet, un format très pratique pour les déplacements.</li></ul><br/><b>\r\nAVANTAGES PRODUIT</b><br/><ul><li>\r\nUn encas équilibré et gourmand.</li><li>\r\nUne alternative aux encas salés tels que les chips, les biscuits apéritifs et les fruits secs salés, ou si vous souhaitez contrôler votre poids.</li><li>\r\nAide à augmenter votre consommation de protéines.</li><li>\r\nIdéal si vous menez une vie très active et si vous avez envie d’un encas équilibré alors que vous êtes en déplacement.</li></ul>");
        $produit2->setPrix(30.99);
        $produit2->setShortcode("herbalife-graines-soja-grillees");
        $produit2->setImage("");

        $produit3->setNom("Boulette de viande bio");
        $produit3->setDescription("Voici les nouvelles boulettes de viande bio faites par Herbalife.\r\n\r\nProduites dans nos fermes bio, nous vous garantissons une qualité maximale.");
        $produit3->setPrix(90);
        $produit3->setShortcode("Boulette-de-viande-bio");
        $produit3->setImage("");

        $produit4->setNom("chocolat");
        $produit4->setDescription("chocolat chaud");
        $produit4->setPrix(5);
        $produit4->setShortcode("chocolat");
        $produit4->setImage("");

        $produit5->setNom("pack");
        $produit5->setDescription("pack petit déjeuner");
        $produit5->setPrix(122.5);
        $produit5->setShortcode("pack");
        $produit5->setImage("7a8cffce06f088f3e11279f235c04a66.png");

        $produit6->setNom("Aloé Mangue");
        $produit6->setDescription("Concentré  d\'aloé vera.");
        $produit6->setPrix(41.5);
        $produit6->setShortcode("Aloé-Mangue");
        $produit6->setImage("87e3b30e41686a9b1248c75992259b29.png");

        $manager->persist($produit1);
        $manager->persist($produit2);
        $manager->persist($produit3);
        $manager->persist($produit4);
        $manager->persist($produit5);
        $manager->persist($produit6);
        $manager->flush();
    }
}