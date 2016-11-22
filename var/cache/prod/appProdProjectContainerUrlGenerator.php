<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'it_nut_it_nut_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ItNut\\ItNutBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'it_nut_it_nut_boutique' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ItNut\\ItNutBundle\\Controller\\BoutiqueController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/boutique',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'it_nut_it_nut_boutique_show_one' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ItNut\\ItNutBundle\\Controller\\BoutiqueController::showOneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/boutique/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'it_nut_it_nut_boutique_show_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ItNut\\ItNutBundle\\Controller\\BoutiqueController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/boutique/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'it_nut_it_nut_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ItNut\\ItNutBundle\\Controller\\BoutiqueController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/boutique/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'it_nut_it_nut_modify' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ItNut\\ItNutBundle\\Controller\\BoutiqueController::modifyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/boutique/modify',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
