<?php

/* ItNutItNutBundle:Boutique:one.html.twig */
class __TwigTemplate_f244fe9fbbfce81bdcb1000a8889ce7dd9d42ed98d5508772656972dbac3978f extends Twig_Template
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
        $__internal_f82f7abe7a8fa81993971868bd88475534c1725f5e4877e963cd664cbbf55a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82f7abe7a8fa81993971868bd88475534c1725f5e4877e963cd664cbbf55a82->enter($__internal_f82f7abe7a8fa81993971868bd88475534c1725f5e4877e963cd664cbbf55a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ItNutItNutBundle:Boutique:one.html.twig"));

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
        if (twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            // line 76
            echo "                            ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "148b91a_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_148b91a_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/148b91a_healthy_breakfast_vanilla_1.png");
                // line 77
                echo "
                                        <img src=\"";
                // line 78
                echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" alt=\"healthy_breakfast_vanilla\" />
                            ";
            } else {
                // asset "148b91a"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_148b91a") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/148b91a.png");
                // line 77
                echo "
                                        <img src=\"";
                // line 78
                echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["id"] ?? $this->getContext($context, "id")));
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
        if ((twig_length_filter($this->env, ($context["id"] ?? $this->getContext($context, "id"))) > 3)) {
            // line 95
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["id"] ?? $this->getContext($context, "id")));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 96
                echo "                                                ";
                $context["fileIdExt"] = twig_split_filter($this->env, $context["file"], "/");
                // line 97
                echo "                                                ";
                $context["fileId"] = twig_split_filter($this->env, $this->getAttribute(($context["fileIdExt"] ?? $this->getContext($context, "fileIdExt")), 1, array()), ".");
                // line 98
                echo "                                                ";
                $context["fileIdLast"] = twig_split_filter($this->env, $this->getAttribute(($context["fileId"] ?? $this->getContext($context, "fileId")), 0, array()), "_");
                // line 99
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_modify", array("id" => $this->getAttribute(($context["fileIdLast"] ?? $this->getContext($context, "fileIdLast")), 1, array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_modify", array("id" => ($context["shortcode"] ?? $this->getContext($context, "shortcode")))), "html", null, true);
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
        if ((twig_length_filter($this->env, ($context["id"] ?? $this->getContext($context, "id"))) > 3)) {
            // line 109
            echo "                                           ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["id"] ?? $this->getContext($context, "id")));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 110
                echo "                                                ";
                $context["fileIdExt"] = twig_split_filter($this->env, $context["file"], "/");
                // line 111
                echo "                                                ";
                $context["fileId"] = twig_split_filter($this->env, $this->getAttribute(($context["fileIdExt"] ?? $this->getContext($context, "fileIdExt")), 1, array()), ".");
                // line 112
                echo "                                                ";
                $context["fileIdLast"] = twig_split_filter($this->env, $this->getAttribute(($context["fileId"] ?? $this->getContext($context, "fileId")), 0, array()), "_");
                echo " 
                                                <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_delete", array("id" => $this->getAttribute(($context["fileIdLast"] ?? $this->getContext($context, "fileIdLast")), 1, array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("it_nut_it_nut_delete", array("id" => ($context["shortcode"] ?? $this->getContext($context, "shortcode")))), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["prix"] ?? $this->getContext($context, "prix")), "html", null, true);
        echo "€</h4>
                                <h4>";
        // line 136
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo "</h4>
                                <p>";
        // line 137
        echo ($context["description"] ?? $this->getContext($context, "description"));
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
        
        $__internal_f82f7abe7a8fa81993971868bd88475534c1725f5e4877e963cd664cbbf55a82->leave($__internal_f82f7abe7a8fa81993971868bd88475534c1725f5e4877e963cd664cbbf55a82_prof);

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
        return array (  295 => 137,  291 => 136,  287 => 135,  273 => 124,  265 => 118,  259 => 116,  256 => 115,  248 => 113,  243 => 112,  240 => 111,  237 => 110,  232 => 109,  230 => 108,  224 => 104,  218 => 102,  215 => 101,  206 => 99,  203 => 98,  200 => 97,  197 => 96,  192 => 95,  190 => 94,  179 => 85,  176 => 84,  167 => 82,  162 => 81,  159 => 80,  153 => 78,  150 => 77,  143 => 78,  140 => 77,  135 => 76,  133 => 75,  101 => 46,  95 => 43,  89 => 40,  80 => 34,  62 => 18,  42 => 16,  38 => 15,  22 => 1,);
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
                        <a href=\"{{ path('it_nut_it_nut_challenge') }}\">Challenge</a>
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
                        {% if id is empty %}
                            {% image '@ItNutItNutBundle/Resources/public/images/healthy_breakfast_vanilla.png' %}

                                        <img src=\"{{ asset_url }}\" alt=\"healthy_breakfast_vanilla\" />
                            {% endimage %}
                        {% else %}
                            {% for file in id %}
                                <img src=\"{{ asset('')  ~ file }}\" />
                            {% endfor %}
                        {% endif %}
                        </div>
                    </div>

                    <div class=\"col-sm-7 col-lg-7 col-md-7\">
                        <div class=\"thumbnail\">
                            <div class=\"caption\">
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    <ul class=\"nav navbar-nav\">
                                        <li>
                                        {% if id|length > 3 %}
                                            {% for file in id %}
                                                {% set fileIdExt = file|split('/') %}
                                                {% set fileId = fileIdExt.1|split('.') %}
                                                {% set fileIdLast = fileId.0|split('_') %}
                                                <a href=\"{{ path('it_nut_it_nut_modify', { 'id': fileIdLast.1 }) }}\">Modifier</a>
                                            {% endfor %}
                                        {% else %}
                                            <a href=\"{{ path('it_nut_it_nut_modify', { 'id': shortcode }) }}\">Modifier</a>
                                        {% endif %}
                                        </li>
                                    </ul>
                                    <ul class=\"nav navbar-nav\">
                                        <li>
                                        {% if id|length > 3 %}
                                           {% for file in id %}
                                                {% set fileIdExt = file|split('/') %}
                                                {% set fileId = fileIdExt.1|split('.') %}
                                                {% set fileIdLast = fileId.0|split('_') %} 
                                                <a href=\"{{ path('it_nut_it_nut_delete', { 'id': fileIdLast.1 }) }}\">Supprimer</a>
                                            {% endfor %}
                                        {% else %}
                                            <a href=\"{{ path('it_nut_it_nut_delete', { 'id': shortcode }) }}\">Supprimer</a>
                                        {% endif %}

                                            
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
                    
                    <div class=\"col-sm-7 col-lg-7 col-md-7\">
                        <div class=\"thumbnail\">
                            <div class=\"caption\">
                                <h4 class=\"pull-right\">{{ prix }}€</h4>
                                <h4>{{ nom }}</h4>
                                <p>{{ description|raw }}</p>
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

</html>", "ItNutItNutBundle:Boutique:one.html.twig", "/home/aurelie/Sites/ItNut-s/src/ItNut/ItNutBundle/Resources/views/Boutique/one.html.twig");
    }
}
