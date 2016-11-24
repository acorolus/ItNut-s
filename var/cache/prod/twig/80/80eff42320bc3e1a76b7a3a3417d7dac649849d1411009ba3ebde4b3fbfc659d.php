<?php

/* ItNutItNutBundle:Boutique:one.html.twig */
class __TwigTemplate_869bb1f162704b225de129185bb26963ac63622ecc71d4445453f7bece5166b7 extends Twig_Template
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
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "5e9b891_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e9b891_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5e9b891_part_1_boutique_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "5e9b891"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e9b891") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5e9b891.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
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
        echo "\">Accueil</a>
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
        if (twig_test_empty(($context["id"] ?? null))) {
            // line 76
            echo "                            ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "148b91a_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_148b91a_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/148b91a_healthy_breakfast_vanilla_1.png");
                // line 77
                echo "
                                        <img src=\"";
                // line 78
                echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
                echo "\" alt=\"healthy_breakfast_vanilla\" />
                            ";
            } else {
                // asset "148b91a"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_148b91a") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/148b91a.png");
                // line 77
                echo "
                                        <img src=\"";
                // line 78
                echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
                echo "\" alt=\"healthy_breakfast_vanilla\" />
                            ";
            }
            unset($context["asset_url"]);
            // line 80
            echo "                        ";
        } else {
            // line 81
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["id"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 82
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("") . $context["file"]), "html", null, true);
                echo "\" />
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                        ";
        }
        // line 85
        echo "                        </div>
                    </div>

                    <div class=\"col-sm-7 col-lg-7 col-md-7\">
                        <div class=\"thumbnail\">
                            <div class=\"caption\">
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    <ul class=\"nav navbar-nav\">
                                        <li>
                                        ";
        // line 94
        if ((twig_length_filter($this->env, ($context["id"] ?? null)) > 3)) {
            // line 95
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["id"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 96
                echo "                                                ";
                $context["fileIdExt"] = twig_split_filter($this->env, $context["file"], "/");
                // line 97
                echo "                                                ";
                $context["fileId"] = twig_split_filter($this->env, $this->getAttribute(($context["fileIdExt"] ?? null), 1, array()), ".");
                // line 98
                echo "                                                ";
                $context["fileIdLast"] = twig_split_filter($this->env, $this->getAttribute(($context["fileId"] ?? null), 0, array()), "_");
                // line 99
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_modify", array("id" => $this->getAttribute(($context["fileIdLast"] ?? null), 1, array()))), "html", null, true);
                echo "\">Modifier</a>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                                        ";
        } else {
            // line 102
            echo "                                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_modify", array("id" => ($context["shortcode"] ?? null))), "html", null, true);
            echo "\">Modifier</a>
                                        ";
        }
        // line 104
        echo "                                        </li>
                                    </ul>
                                    <ul class=\"nav navbar-nav\">
                                        <li>
                                        ";
        // line 108
        if ((twig_length_filter($this->env, ($context["id"] ?? null)) > 3)) {
            // line 109
            echo "                                           ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["id"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 110
                echo "                                                ";
                $context["fileIdExt"] = twig_split_filter($this->env, $context["file"], "/");
                // line 111
                echo "                                                ";
                $context["fileId"] = twig_split_filter($this->env, $this->getAttribute(($context["fileIdExt"] ?? null), 1, array()), ".");
                // line 112
                echo "                                                ";
                $context["fileIdLast"] = twig_split_filter($this->env, $this->getAttribute(($context["fileId"] ?? null), 0, array()), "_");
                echo " 
                                                <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_delete", array("id" => $this->getAttribute(($context["fileIdLast"] ?? null), 1, array()))), "html", null, true);
                echo "\">Supprimer</a>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                                        ";
        } else {
            // line 116
            echo "                                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_delete", array("id" => ($context["shortcode"] ?? null))), "html", null, true);
            echo "\">Supprimer</a>
                                        ";
        }
        // line 118
        echo "
                                            
                                        </li>
                                    </ul>
                                    <ul class=\"nav navbar-nav navbar-nav-right\">
                                        <li>
                                            <a href=\"";
        // line 124
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
        // line 135
        echo twig_escape_filter($this->env, ($context["prix"] ?? null), "html", null, true);
        echo "€</h4>
                                <h4>";
        // line 136
        echo twig_escape_filter($this->env, ($context["nom"] ?? null), "html", null, true);
        echo "</h4>
                                <p>";
        // line 137
        echo ($context["description"] ?? null);
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
        return array (  292 => 137,  288 => 136,  284 => 135,  270 => 124,  262 => 118,  256 => 116,  253 => 115,  245 => 113,  240 => 112,  237 => 111,  234 => 110,  229 => 109,  227 => 108,  221 => 104,  215 => 102,  212 => 101,  203 => 99,  200 => 98,  197 => 97,  194 => 96,  189 => 95,  187 => 94,  176 => 85,  173 => 84,  164 => 82,  159 => 81,  156 => 80,  150 => 78,  147 => 77,  140 => 78,  137 => 77,  132 => 76,  130 => 75,  98 => 46,  92 => 43,  86 => 40,  77 => 34,  59 => 18,  39 => 16,  35 => 15,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ItNutItNutBundle:Boutique:one.html.twig", "/home/aurelie/Sites/ItNut-s/src/ItNut/ItNutBundle/Resources/views/Boutique/one.html.twig");
    }
}
