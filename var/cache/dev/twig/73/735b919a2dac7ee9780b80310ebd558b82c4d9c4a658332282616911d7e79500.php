<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d5b17cba9f0bd9ae9bf7b8618c290b049c365eece78811cd2687152c11455116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce97095ae7841962e2d0b2de1c147ec9a92a4409551dc94cfa9a9eecd6a67c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce97095ae7841962e2d0b2de1c147ec9a92a4409551dc94cfa9a9eecd6a67c77->enter($__internal_ce97095ae7841962e2d0b2de1c147ec9a92a4409551dc94cfa9a9eecd6a67c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce97095ae7841962e2d0b2de1c147ec9a92a4409551dc94cfa9a9eecd6a67c77->leave($__internal_ce97095ae7841962e2d0b2de1c147ec9a92a4409551dc94cfa9a9eecd6a67c77_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63263aa23c8dc374b36af36eaed5eda94d2fd9df3499b84892c890f0c56c8665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63263aa23c8dc374b36af36eaed5eda94d2fd9df3499b84892c890f0c56c8665->enter($__internal_63263aa23c8dc374b36af36eaed5eda94d2fd9df3499b84892c890f0c56c8665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_63263aa23c8dc374b36af36eaed5eda94d2fd9df3499b84892c890f0c56c8665->leave($__internal_63263aa23c8dc374b36af36eaed5eda94d2fd9df3499b84892c890f0c56c8665_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_651203469f425c137cf472b61a9d0877d3448420f9026e9eed5b1a2e24bb5dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651203469f425c137cf472b61a9d0877d3448420f9026e9eed5b1a2e24bb5dc3->enter($__internal_651203469f425c137cf472b61a9d0877d3448420f9026e9eed5b1a2e24bb5dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_651203469f425c137cf472b61a9d0877d3448420f9026e9eed5b1a2e24bb5dc3->leave($__internal_651203469f425c137cf472b61a9d0877d3448420f9026e9eed5b1a2e24bb5dc3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
