<?php

/* ItNutItNutBundle:Boutique:delete.html.twig */
class __TwigTemplate_e4498a15dabf5f4b3754149cb89af946c132a2e19843ed314821bd7d03f557af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c92ef1751c2f8f66f63433fd2ad337cc3640fdbee8fbe5963af455130bfda54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92ef1751c2f8f66f63433fd2ad337cc3640fdbee8fbe5963af455130bfda54f->enter($__internal_c92ef1751c2f8f66f63433fd2ad337cc3640fdbee8fbe5963af455130bfda54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ItNutItNutBundle:Boutique:delete.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>ItNut - Pour une vie meilleur</title>

    ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5e9b891_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e9b891_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/5e9b891_part_1_bootstrap.min_1.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "5e9b891_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e9b891_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/5e9b891_part_1_boutique_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "5e9b891"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e9b891") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/5e9b891.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "
</head>

<body>
        <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_homepage");
        echo "\">ItNut</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_homepage");
        echo "\">Accueil</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_boutique");
        echo "\">Boutique</a>
                    </li>
                    <li>
                        <a href=\"challenge.html\">Challenge</a>
                    </li>
                    
                </ul>
                <ul class=\"nav navbar-nav navbar-nav-right\">
                    <li>
                        <a href=\"#\">Sign In</a>
                    </li>
                    <li>
                        <a href=\"#\">Sign Up</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-md-12\">

                <div class=\"row\">

                    <div class=\"col-sm-12 col-lg-12 col-md-12\">
                        <div class=\"thumbnail\">
                            <div class=\"caption\">
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    <ul class=\"nav navbar-nav\">
                                        <li>
                                            Vous venez de supprimer un produit.<br/>Vous trouverez ci dessous ses informations.
                                        </li>
                                    </ul>
                                    <ul class=\"nav navbar-nav navbar-nav-right\">
                                        <li>
                                            <a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_boutique");
        echo "\">Tous les produits</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                                        
                    <div class=\"col-sm-5 col-lg-5 col-md-5\">
                        <div class=\"thumbnail\">
                            <div class=\"caption\">
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    <ul class=\"nav\">
                                        <li>
                                            <h3>Nom : ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h3>
                                        </li>
                                        <li>
                                            <h3>Prix : ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prix", array()), "html", null, true);
        echo "€</h3>
                                        </li>
                                        <li>
                                            <h3>Shortcode : ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "shortcode", array()), "html", null, true);
        echo "</h3>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-7 col-lg-7 col-md-7\">
                        <div class=\"thumbnail\">
                            <div class=\"caption\">
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    <ul class=\"nav navbar-nav\">
                                        <li>
                                            <h3>Description : ";
        // line 116
        echo $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "description", array());
        echo "</h3>
                                        </li>
                                    </ul>      
                                </div>
                            </div>
                        </div>
                    </div>
              </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class=\"container\">

        <hr>

        

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=\"js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"js/bootstrap.min.js\"></script>

</body>

</html>";
        
        $__internal_c92ef1751c2f8f66f63433fd2ad337cc3640fdbee8fbe5963af455130bfda54f->leave($__internal_c92ef1751c2f8f66f63433fd2ad337cc3640fdbee8fbe5963af455130bfda54f_prof);

    }

    public function getTemplateName()
    {
        return "ItNutItNutBundle:Boutique:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 116,  167 => 103,  161 => 100,  155 => 97,  138 => 83,  94 => 42,  88 => 39,  79 => 33,  62 => 18,  42 => 16,  38 => 15,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>ItNut - Pour une vie meilleur</title>

    {% stylesheets '@ItNutItNutBundle/Resources/public/css/*' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
    {% endstylesheets %}

</head>

<body>
        <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{ path('it_nut_it_nut_homepage') }}\">ItNut</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"{{ path('it_nut_it_nut_homepage') }}\">Accueil</a>
                    </li>
                    <li>
                        <a href=\"{{ path('it_nut_it_nut_boutique') }}\">Boutique</a>
                    </li>
                    <li>
                        <a href=\"challenge.html\">Challenge</a>
                    </li>
                    
                </ul>
                <ul class=\"nav navbar-nav navbar-nav-right\">
                    <li>
                        <a href=\"#\">Sign In</a>
                    </li>
                    <li>
                        <a href=\"#\">Sign Up</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-md-12\">

                <div class=\"row\">

                    <div class=\"col-sm-12 col-lg-12 col-md-12\">
                        <div class=\"thumbnail\">
                            <div class=\"caption\">
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    <ul class=\"nav navbar-nav\">
                                        <li>
                                            Vous venez de supprimer un produit.<br/>Vous trouverez ci dessous ses informations.
                                        </li>
                                    </ul>
                                    <ul class=\"nav navbar-nav navbar-nav-right\">
                                        <li>
                                            <a href=\"{{ path('it_nut_it_nut_boutique') }}\">Tous les produits</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                                        
                    <div class=\"col-sm-5 col-lg-5 col-md-5\">
                        <div class=\"thumbnail\">
                            <div class=\"caption\">
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    <ul class=\"nav\">
                                        <li>
                                            <h3>Nom : {{ produit.nom }}</h3>
                                        </li>
                                        <li>
                                            <h3>Prix : {{ produit.prix }}€</h3>
                                        </li>
                                        <li>
                                            <h3>Shortcode : {{ produit.shortcode }}</h3>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-7 col-lg-7 col-md-7\">
                        <div class=\"thumbnail\">
                            <div class=\"caption\">
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    <ul class=\"nav navbar-nav\">
                                        <li>
                                            <h3>Description : {{ produit.description |raw }}</h3>
                                        </li>
                                    </ul>      
                                </div>
                            </div>
                        </div>
                    </div>
              </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class=\"container\">

        <hr>

        

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=\"js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"js/bootstrap.min.js\"></script>

</body>

</html>", "ItNutItNutBundle:Boutique:delete.html.twig", "/home/aurelie/Sites/ItNut-s/src/ItNut/ItNutBundle/Resources/views/Boutique/delete.html.twig");
    }
}