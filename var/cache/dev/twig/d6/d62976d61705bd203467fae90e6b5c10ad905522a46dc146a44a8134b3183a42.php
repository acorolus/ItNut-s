<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ddb77b62cbe6b12fc922179804d877207444a429f2966654df139e8bb8624ad6 extends Twig_Template
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
        $__internal_014b4d4705f3f13bc5b38cc59b268686c254dc6a185603eb4de2ed4c1df7a761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014b4d4705f3f13bc5b38cc59b268686c254dc6a185603eb4de2ed4c1df7a761->enter($__internal_014b4d4705f3f13bc5b38cc59b268686c254dc6a185603eb4de2ed4c1df7a761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_014b4d4705f3f13bc5b38cc59b268686c254dc6a185603eb4de2ed4c1df7a761->leave($__internal_014b4d4705f3f13bc5b38cc59b268686c254dc6a185603eb4de2ed4c1df7a761_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ff53ae3ea5c203b720c5f812c8996ed4729df0c9099cd101722d76d90939dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff53ae3ea5c203b720c5f812c8996ed4729df0c9099cd101722d76d90939dc8->enter($__internal_3ff53ae3ea5c203b720c5f812c8996ed4729df0c9099cd101722d76d90939dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3ff53ae3ea5c203b720c5f812c8996ed4729df0c9099cd101722d76d90939dc8->leave($__internal_3ff53ae3ea5c203b720c5f812c8996ed4729df0c9099cd101722d76d90939dc8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c05f5d0f88bd9150698cf0b6950a9503c12ca608dc3c66dc0f3fcba3e8f600c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05f5d0f88bd9150698cf0b6950a9503c12ca608dc3c66dc0f3fcba3e8f600c7->enter($__internal_c05f5d0f88bd9150698cf0b6950a9503c12ca608dc3c66dc0f3fcba3e8f600c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c05f5d0f88bd9150698cf0b6950a9503c12ca608dc3c66dc0f3fcba3e8f600c7->leave($__internal_c05f5d0f88bd9150698cf0b6950a9503c12ca608dc3c66dc0f3fcba3e8f600c7_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
