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

class BoutiqueController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
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
        }
        
        return $this->render('ItNutItNutBundle:Boutique:index.html.twig',array('produits' => $infosTousProduits));
    }
    
    public function showOneAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('ItNutItNutBundle:Produit')->findByShortCode($id);

        $finder = new Finder();
        $finder->files()->in("images");
        $files = $finder->files()->name('*'.$id.'*jpg');
        return $this->render('ItNutItNutBundle:Boutique:one.html.twig', array( 'id' => $files, 'prix' => $produit->getPrix(), 'nom' => $produit->getNom(), 'description' => $produit->getDescription(),'shortcode' => str_replace(' ', '-', $produit->getNom())));
    }
    
    public function addAction(Request $request)
    {
        $produit = new Produit();

        $form = $this->createFormBuilder($produit)
            ->add('nom', TextType::class,array('attr' => array('style' => 'width: 80%')))
            ->add('prix', NumberType::class,array('attr' => array('style' => 'width: 20%')))
            ->add('description', TextareaType::class,array('attr' => array('style' => 'width: 100%;height: 200px;')))
            ->add('image', FileType::class)
            ->add('save', SubmitType::class, array('label' => 'Creer un produit'))
            ->getForm();
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $produit = $form->getData();
            $produit->setShortcode(str_replace(' ', '-', $produit->getNom()));
            $fichier = $produit->getImage();

            $nomDeFichier = md5(uniqid()).'.'.$fichier->guessExtension();

            $fichier->move("images",$nomDeFichier);

            $produit->setImage($nomDeFichier);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();

            return $this->render('ItNutItNutBundle:Boutique:success.html.twig', array('produit' => $produit));
        }
    
        return $this->render('ItNutItNutBundle:Boutique:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    public function modifyAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('ItNutItNutBundle:Produit')->findByShortCode($id);
        
        $form = $this->createFormBuilder($produit)
            ->add('nom', TextType::class,array('data' => $produit->getNom(),'attr' => array('style' => 'width: 80%')))
            ->add('prix', NumberType::class,array('data' => $produit->getPrix(),'attr' => array('style' => 'width: 20%')))
            ->add('description', TextareaType::class,array('data' => $produit->getDescription(),'attr' => array('style' => 'width: 100%;height: 200px;')))
            ->add('image', FileType::class,array('data_class' => null))
            ->add('save', SubmitType::class, array('label' => 'Modifier ce produit'))
            ->getForm();
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $produit = $form->getData();
            $produit->setShortcode(str_replace(' ', '-', $produit->getNom()));
//            $fichier = $produit->getImage();

//            $nomDeFichier = md5(uniqid()).'.'.$fichier->guessExtension();

//            $fichier->move("images",$nomDeFichier);

            $produit->setImage("nomDeFichier");
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();

            return $this->render('ItNutItNutBundle:Boutique:success.html.twig', array('produit' => $produit));
        }
    
        return $this->render('ItNutItNutBundle:Boutique:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('ItNutItNutBundle:Produit')->findByShortCode($id);
        $em->remove($produit);
        $em->flush();
        return $this->render('ItNutItNutBundle:Boutique:delete.html.twig', array('produit' => $produit));
    }
}