<?php

namespace ItNut\ItNutBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use ItNut\ItNutBundle\Entity\Produit;
use Symfony\Component\Finder\Finder;

class ChallengeController extends Controller
{
	public function indexAction()
    {
        /*$em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('ItNutItNutBundle:Produit')->findAll();
        $finder = new Finder();
        $finder->files()->in("images");
        $finder->files()->name('*_*.jpg');
        $infosProduits = array();
        $infosTousProduits = array();
        foreach ($produits as $key => $produit){
            foreach ($finder as $key => $file) {
                if($produit->getShortcode() == array_slice(explode('_',$file->getRelativePathname()), -2, 1)[0]){
                    $produit->setImage($file->getRelativePathname());
                    array_push($infosProduits, $produit);
                    continue 2;
                } else {
                    $produit->setImage("herbalife-default.jpg");
                    array_push($infosProduits, $produit);
                }
            }
        }
                
        foreach ($produits as $key => $produit){
            $keyElement = array_search($produit, $infosProduits);
            array_push($infosTousProduits, $infosProduits[$keyElement]);
        }*/
        
        return $this->render('ItNutItNutBundle:Challenge:index.html.twig');
    }
}