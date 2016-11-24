<?php

/* ::base.html.twig */
class __TwigTemplate_e4bdd2a03091d83677a435a6b5b9ddb5e191ec81c5a92a71704ddfd86369102c extends Twig_Template
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
        $__internal_115b935187f0415568c0de3a7df6897b017e222ea4abe06e4c290602aedbdfbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115b935187f0415568c0de3a7df6897b017e222ea4abe06e4c290602aedbdfbb->enter($__internal_115b935187f0415568c0de3a7df6897b017e222ea4abe06e4c290602aedbdfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_115b935187f0415568c0de3a7df6897b017e222ea4abe06e4c290602aedbdfbb->leave($__internal_115b935187f0415568c0de3a7df6897b017e222ea4abe06e4c290602aedbdfbb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6a7378f79f8973e321c1cfa8a346f805634f0b670ee6e5fa29e4d82c31cfaaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a7378f79f8973e321c1cfa8a346f805634f0b670ee6e5fa29e4d82c31cfaaf->enter($__internal_c6a7378f79f8973e321c1cfa8a346f805634f0b670ee6e5fa29e4d82c31cfaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c6a7378f79f8973e321c1cfa8a346f805634f0b670ee6e5fa29e4d82c31cfaaf->leave($__internal_c6a7378f79f8973e321c1cfa8a346f805634f0b670ee6e5fa29e4d82c31cfaaf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b9ebe785d4ae728ac8c3ff7f0c54ba0fe2f7bd7c24c881e179bcd688c369fe49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ebe785d4ae728ac8c3ff7f0c54ba0fe2f7bd7c24c881e179bcd688c369fe49->enter($__internal_b9ebe785d4ae728ac8c3ff7f0c54ba0fe2f7bd7c24c881e179bcd688c369fe49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b9ebe785d4ae728ac8c3ff7f0c54ba0fe2f7bd7c24c881e179bcd688c369fe49->leave($__internal_b9ebe785d4ae728ac8c3ff7f0c54ba0fe2f7bd7c24c881e179bcd688c369fe49_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd29dd887e5c016266e170a2e097437827fc0c0eaccd71563e235eac3501921b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd29dd887e5c016266e170a2e097437827fc0c0eaccd71563e235eac3501921b->enter($__internal_bd29dd887e5c016266e170a2e097437827fc0c0eaccd71563e235eac3501921b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd29dd887e5c016266e170a2e097437827fc0c0eaccd71563e235eac3501921b->leave($__internal_bd29dd887e5c016266e170a2e097437827fc0c0eaccd71563e235eac3501921b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7dec34c92f60eef62d90825403c46398d71f18a0ca7d047e719d229611525aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dec34c92f60eef62d90825403c46398d71f18a0ca7d047e719d229611525aa0->enter($__internal_7dec34c92f60eef62d90825403c46398d71f18a0ca7d047e719d229611525aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7dec34c92f60eef62d90825403c46398d71f18a0ca7d047e719d229611525aa0->leave($__internal_7dec34c92f60eef62d90825403c46398d71f18a0ca7d047e719d229611525aa0_prof);

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
", "::base.html.twig", "/home/aurelie/Sites/ItNut-s/app/Resources/views/base.html.twig");
    }
}
