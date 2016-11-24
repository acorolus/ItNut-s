<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // it_nut_it_nut_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'it_nut_it_nut_homepage');
            }

            return array (  '_controller' => 'ItNut\\ItNutBundle\\Controller\\DefaultController::indexAction',  '_route' => 'it_nut_it_nut_homepage',);
        }

        if (0 === strpos($pathinfo, '/boutique')) {
            // it_nut_it_nut_boutique
            if ($pathinfo === '/boutique') {
                return array (  '_controller' => 'ItNut\\ItNutBundle\\Controller\\BoutiqueController::indexAction',  '_route' => 'it_nut_it_nut_boutique',);
            }

            // it_nut_it_nut_boutique_show_one
            if (0 === strpos($pathinfo, '/boutique/show') && preg_match('#^/boutique/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'it_nut_it_nut_boutique_show_one')), array (  '_controller' => 'ItNut\\ItNutBundle\\Controller\\BoutiqueController::showOneAction',));
            }

            // it_nut_it_nut_boutique_show_add
            if ($pathinfo === '/boutique/add') {
                return array (  '_controller' => 'ItNut\\ItNutBundle\\Controller\\BoutiqueController::addAction',  '_route' => 'it_nut_it_nut_boutique_show_add',);
            }

            // it_nut_it_nut_delete
            if (0 === strpos($pathinfo, '/boutique/delete') && preg_match('#^/boutique/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'it_nut_it_nut_delete')), array (  '_controller' => 'ItNut\\ItNutBundle\\Controller\\BoutiqueController::deleteAction',));
            }

            // it_nut_it_nut_modify
            if (0 === strpos($pathinfo, '/boutique/modify') && preg_match('#^/boutique/modify/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'it_nut_it_nut_modify')), array (  '_controller' => 'ItNut\\ItNutBundle\\Controller\\BoutiqueController::modifyAction',));
            }

        }

        // it_nut_it_nut_challenge
        if ($pathinfo === '/challenge') {
            return array (  '_controller' => 'ItNut\\ItNutBundle\\Controller\\ChallengeController::indexAction',  '_route' => 'it_nut_it_nut_challenge',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
