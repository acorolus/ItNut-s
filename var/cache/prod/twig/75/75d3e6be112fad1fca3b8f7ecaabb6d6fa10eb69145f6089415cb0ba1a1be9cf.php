<?php

/* ItNutItNutBundle:Boutique:one.html.twig */
class __TwigTemplate_107c422bebecb90328634fc81164c3303a7ce67a6cce521200dd4ed47046cf7a extends Twig_Template
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
                        <a href=\"";
        // line 46
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

                    <div class=\"col-sm-5 col-lg-5 col-md-5\">
                        <div class=\"thumbnail\">
                            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["id"]) ? $context["id"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 76
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("") . $context["file"]), "html", null, true);
            echo "\" />
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                        </div>
                    </div>

                    <div class=\"col-sm-7 col-lg-7 col-md-7\">
                        <div class=\"thumbnail\">
                            <div class=\"caption\">
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    <ul class=\"nav navbar-nav\">
                                        <li>
                                            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["id"]) ? $context["id"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 88
            echo "                                                ";
            $context["fileIdExt"] = twig_split_filter($this->env, $context["file"], "/");
            // line 89
            echo "                                                ";
            $context["fileId"] = twig_split_filter($this->env, $this->getAttribute((isset($context["fileIdExt"]) ? $context["fileIdExt"] : null), 1, array()), ".");
            // line 90
            echo "                                                ";
            $context["fileIdLast"] = twig_split_filter($this->env, $this->getAttribute((isset($context["fileId"]) ? $context["fileId"] : null), 0, array()), "_");
            // line 91
            echo "                                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_modify", array("id" => $this->getAttribute((isset($context["fileIdLast"]) ? $context["fileIdLast"] : null), 1, array()))), "html", null, true);
            echo "\">Modifier</a>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                                        </li>
                                    </ul>
                                    <ul class=\"nav navbar-nav\">
                                        <li>
                                            ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["id"]) ? $context["id"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 98
            echo "                                                ";
            $context["fileIdExt"] = twig_split_filter($this->env, $context["file"], "/");
            // line 99
            echo "                                                ";
            $context["fileId"] = twig_split_filter($this->env, $this->getAttribute((isset($context["fileIdExt"]) ? $context["fileIdExt"] : null), 1, array()), ".");
            // line 100
            echo "                                                ";
            $context["fileIdLast"] = twig_split_filter($this->env, $this->getAttribute((isset($context["fileId"]) ? $context["fileId"] : null), 0, array()), "_");
            // line 101
            echo "                                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_delete", array("id" => $this->getAttribute((isset($context["fileIdLast"]) ? $context["fileIdLast"] : null), 1, array()))), "html", null, true);
            echo "\">Supprimer</a>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                        </li>
                                    </ul>
                                    <ul class=\"nav navbar-nav navbar-nav-right\">
                                        <li>
                                            <a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_boutique");
        echo "\">Tous les produits</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-sm-7 col-lg-7 col-md-7\">
                        <div class=\"thumbnail\">
                            <div class=\"caption\">
                                <h4 class=\"pull-right\">";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["prix"]) ? $context["prix"] : null), "html", null, true);
        echo "€</h4>
                                <h4>";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : null), "html", null, true);
        echo "</h4>
                                <p>";
        // line 120
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</p>
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
        return "ItNutItNutBundle:Boutique:one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 120,  228 => 119,  224 => 118,  210 => 107,  204 => 103,  195 => 101,  192 => 100,  189 => 99,  186 => 98,  182 => 97,  176 => 93,  167 => 91,  164 => 90,  161 => 89,  158 => 88,  154 => 87,  143 => 78,  134 => 76,  130 => 75,  98 => 46,  92 => 43,  86 => 40,  77 => 34,  59 => 18,  39 => 16,  35 => 15,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ItNutItNutBundle:Boutique:one.html.twig", "/Users/nicolaspinaud/Sites/ItNut-s/src/ItNut/ItNutBundle/Resources/views/Boutique/one.html.twig");
    }
}
