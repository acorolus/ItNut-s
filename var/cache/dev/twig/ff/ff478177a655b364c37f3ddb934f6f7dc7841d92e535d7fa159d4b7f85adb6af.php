<?php

/* ItNutItNutBundle:Boutique:index.html.twig */
class __TwigTemplate_9d7298040f9131291ad86a61f04b8d20c70f904b8ec9c049165e3eae1d80a02f extends Twig_Template
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
        $__internal_7100b8f6899c04c70f106e036d81a723980eddadb2f1f69414c044f3e3d55f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7100b8f6899c04c70f106e036d81a723980eddadb2f1f69414c044f3e3d55f43->enter($__internal_7100b8f6899c04c70f106e036d81a723980eddadb2f1f69414c044f3e3d55f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ItNutItNutBundle:Boutique:index.html.twig"));

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
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_homepage");
        echo "\">ItNut</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_homepage");
        echo "\">Acceuil</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 43
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

            <div class=\"col-md-2\">
                <p class=\"lead\">ItNut</p>
                <div class=\"list-group\">
                    <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_boutique_show_add");
        echo "\" class=\"list-group-item\">Ajouter un produit</a>
                </div>
            </div>

            <div class=\"col-md-12\">

                <div class=\"row\">
                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 80
            echo "                        <div class=\"col-sm-4 col-lg-4 col-md-4\">
                            <div class=\"thumbnail\">
                                <img src=\"";
            // line 82
            echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images") . "/") . $this->getAttribute($context["produit"], "image", array())), "html", null, true);
            echo "\" />
                                <div class=\"caption\">
                                    <h4><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_boutique_show_one", array("id" => $this->getAttribute($context["produit"], "shortcode", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</a>
                                    </h4>
                                    <p>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($context["produit"], "description", array()), "<br/>"), 0, array()), "html", null, true);
            echo "</p>
                                    <h4 class=\"pull-left\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "€</h4>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class=\"container\">

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; DevOps Team</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    ";
        // line 123
        echo "
</body>

</html>";
        
        $__internal_7100b8f6899c04c70f106e036d81a723980eddadb2f1f69414c044f3e3d55f43->leave($__internal_7100b8f6899c04c70f106e036d81a723980eddadb2f1f69414c044f3e3d55f43_prof);

    }

    public function getTemplateName()
    {
        return "ItNutItNutBundle:Boutique:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 123,  172 => 92,  161 => 87,  157 => 86,  150 => 84,  145 => 82,  141 => 80,  137 => 79,  127 => 72,  95 => 43,  89 => 40,  80 => 34,  62 => 18,  42 => 16,  38 => 15,  22 => 1,);
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
                        <a href=\"{{ path('it_nut_it_nut_homepage') }}\">Acceuil</a>
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

            <div class=\"col-md-2\">
                <p class=\"lead\">ItNut</p>
                <div class=\"list-group\">
                    <a href=\"{{ path('it_nut_it_nut_boutique_show_add') }}\" class=\"list-group-item\">Ajouter un produit</a>
                </div>
            </div>

            <div class=\"col-md-12\">

                <div class=\"row\">
                    {% for produit in produits %}
                        <div class=\"col-sm-4 col-lg-4 col-md-4\">
                            <div class=\"thumbnail\">
                                <img src=\"{{ asset('images')  ~ '/' ~ produit.image }}\" />
                                <div class=\"caption\">
                                    <h4><a href=\"{{ path('it_nut_it_nut_boutique_show_one', { 'id': produit.shortcode }) }}\">{{ produit.nom }}</a>
                                    </h4>
                                    <p>{{ produit.description|raw|split('<br/>').0 }}</p>
                                    <h4 class=\"pull-left\">{{ produit.prix }}€</h4>
                                </div>
                            </div>
                        </div>
                    {% endfor %}

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class=\"container\">

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; DevOps Team</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    {#<!-- jQuery -->
    <script src=\"bootstrap/js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"bootstrap/js/bootstrap.min.js\"></script>#}

</body>

</html>", "ItNutItNutBundle:Boutique:index.html.twig", "/home/aurelie/Sites/ItNut/src/ItNut/ItNutBundle/Resources/views/Boutique/index.html.twig");
    }
}
