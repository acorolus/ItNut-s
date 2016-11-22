<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/5e9b891')) {
            // _assetic_5e9b891
            if ($pathinfo === '/css/5e9b891.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5e9b891',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_5e9b891',);
            }

            if (0 === strpos($pathinfo, '/css/5e9b891_part_1_bo')) {
                // _assetic_5e9b891_0
                if ($pathinfo === '/css/5e9b891_part_1_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5e9b891',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_5e9b891_0',);
                }

                // _assetic_5e9b891_1
                if ($pathinfo === '/css/5e9b891_part_1_boutique_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5e9b891',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_5e9b891_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/38da727')) {
            // _assetic_38da727
            if ($pathinfo === '/images/38da727.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '38da727',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_38da727',);
            }

            // _assetic_38da727_0
            if ($pathinfo === '/images/38da727_herbalife3_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '38da727',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_38da727_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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
