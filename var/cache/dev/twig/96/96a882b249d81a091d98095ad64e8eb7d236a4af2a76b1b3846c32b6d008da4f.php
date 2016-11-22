<?php

/* ::base.html.twig */
class __TwigTemplate_484e2644f3e58f3e2f6ef66eee94ce30a7e89d77e4cfb1b2346060b4628f5dd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40ac54c97ed3549b19a54d98dff68c943ebc297ade8f3e84bb03deac99080635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ac54c97ed3549b19a54d98dff68c943ebc297ade8f3e84bb03deac99080635->enter($__internal_40ac54c97ed3549b19a54d98dff68c943ebc297ade8f3e84bb03deac99080635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_40ac54c97ed3549b19a54d98dff68c943ebc297ade8f3e84bb03deac99080635->leave($__internal_40ac54c97ed3549b19a54d98dff68c943ebc297ade8f3e84bb03deac99080635_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c71980178a03d100946d3be61a8565804b3dd52be47bec4675240cb3237eeff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c71980178a03d100946d3be61a8565804b3dd52be47bec4675240cb3237eeff->enter($__internal_8c71980178a03d100946d3be61a8565804b3dd52be47bec4675240cb3237eeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8c71980178a03d100946d3be61a8565804b3dd52be47bec4675240cb3237eeff->leave($__internal_8c71980178a03d100946d3be61a8565804b3dd52be47bec4675240cb3237eeff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40a70a6f22f5cdd960d273ff3624f66b48522ccd4d308b4edc5a50fa851ef864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a70a6f22f5cdd960d273ff3624f66b48522ccd4d308b4edc5a50fa851ef864->enter($__internal_40a70a6f22f5cdd960d273ff3624f66b48522ccd4d308b4edc5a50fa851ef864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_40a70a6f22f5cdd960d273ff3624f66b48522ccd4d308b4edc5a50fa851ef864->leave($__internal_40a70a6f22f5cdd960d273ff3624f66b48522ccd4d308b4edc5a50fa851ef864_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4809f5adcf00d4079e24a2da32d67853457179b66c2a841a73d81711429019f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4809f5adcf00d4079e24a2da32d67853457179b66c2a841a73d81711429019f7->enter($__internal_4809f5adcf00d4079e24a2da32d67853457179b66c2a841a73d81711429019f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4809f5adcf00d4079e24a2da32d67853457179b66c2a841a73d81711429019f7->leave($__internal_4809f5adcf00d4079e24a2da32d67853457179b66c2a841a73d81711429019f7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b266d7d46ca402c9de31dac235e7491215a70cb0ec530f8041b13d517f829215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b266d7d46ca402c9de31dac235e7491215a70cb0ec530f8041b13d517f829215->enter($__internal_b266d7d46ca402c9de31dac235e7491215a70cb0ec530f8041b13d517f829215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b266d7d46ca402c9de31dac235e7491215a70cb0ec530f8041b13d517f829215->leave($__internal_b266d7d46ca402c9de31dac235e7491215a70cb0ec530f8041b13d517f829215_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/aurelie/Sites/ItNut/app/Resources/views/base.html.twig");
    }
}
