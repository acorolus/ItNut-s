<?php

/* ItNutItNutBundle:Challenge:index.html.twig */
class __TwigTemplate_23dea80efbc0aefc9f72e572a559b46af7c7900fa4b97c8cc8ad346d53e22222 extends Twig_Template
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e9b891_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5e9b891_part_1_bootstrap.min_1.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "5e9b891_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e9b891_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5e9b891_part_1_boutique_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "5e9b891"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e9b891") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5e9b891.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
        echo "\">Acceuil</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_boutique");
        echo "\">Boutique</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_challenge");
        echo "\">Challenge</a>
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

                    <!--<div class=\"col-sm-12 col-lg-12 col-md-12\">
                        <div class=\"thumbnail\">
                            <div class=\"caption\">
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    <ul class=\"nav navbar-nav navbar-nav-right\">
                                        <li>
                                            <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_boutique");
        echo "\">Tous les produits</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!-- La ligne suivante correspond à la dimension de la div 12 est la taille max-->
                    <div class=\"col-sm-12 col-lg-12 col-md-12\">
                        <div class=\"thumbnail\">
                            <div class=\"caption\">
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                PAGE CHALLENGE
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

        <!-- Footer -->
        <prixter>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; DevOps Team</p>
                </div>
            </div>
        </prixter>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=\"js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"js/bootstrap.min.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "ItNutItNutBundle:Challenge:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 78,  97 => 45,  91 => 42,  85 => 39,  76 => 33,  59 => 18,  39 => 16,  35 => 15,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ItNutItNutBundle:Challenge:index.html.twig", "/Users/nicolaspinaud/Sites/ItNut-s/src/ItNut/ItNutBundle/Resources/views/Challenge/index.html.twig");
    }
}
