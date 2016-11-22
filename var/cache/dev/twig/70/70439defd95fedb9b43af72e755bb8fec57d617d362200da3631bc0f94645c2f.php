<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7177379308b2137124f1729d81fc3ca9d0d87d153c408924b452c609cd039e97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_61e7ce9e273aa7fbeb8bab835a589a076383a4c6043a82d3c79ba7af3c1e8e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e7ce9e273aa7fbeb8bab835a589a076383a4c6043a82d3c79ba7af3c1e8e76->enter($__internal_61e7ce9e273aa7fbeb8bab835a589a076383a4c6043a82d3c79ba7af3c1e8e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61e7ce9e273aa7fbeb8bab835a589a076383a4c6043a82d3c79ba7af3c1e8e76->leave($__internal_61e7ce9e273aa7fbeb8bab835a589a076383a4c6043a82d3c79ba7af3c1e8e76_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79518628af01b4abaccf2e43a0b9321e573bab56b49ba582315ad7470455d809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79518628af01b4abaccf2e43a0b9321e573bab56b49ba582315ad7470455d809->enter($__internal_79518628af01b4abaccf2e43a0b9321e573bab56b49ba582315ad7470455d809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_79518628af01b4abaccf2e43a0b9321e573bab56b49ba582315ad7470455d809->leave($__internal_79518628af01b4abaccf2e43a0b9321e573bab56b49ba582315ad7470455d809_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebd7b4cd2f62d98af361e642f2cb4cb2f411a2fe645067efb2e46bd2ff6cf163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd7b4cd2f62d98af361e642f2cb4cb2f411a2fe645067efb2e46bd2ff6cf163->enter($__internal_ebd7b4cd2f62d98af361e642f2cb4cb2f411a2fe645067efb2e46bd2ff6cf163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ebd7b4cd2f62d98af361e642f2cb4cb2f411a2fe645067efb2e46bd2ff6cf163->leave($__internal_ebd7b4cd2f62d98af361e642f2cb4cb2f411a2fe645067efb2e46bd2ff6cf163_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e277c1e7c86c9f39c8a238fd34c479ca394325b37e090d75b4bf15e527e8cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e277c1e7c86c9f39c8a238fd34c479ca394325b37e090d75b4bf15e527e8cab->enter($__internal_3e277c1e7c86c9f39c8a238fd34c479ca394325b37e090d75b4bf15e527e8cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3e277c1e7c86c9f39c8a238fd34c479ca394325b37e090d75b4bf15e527e8cab->leave($__internal_3e277c1e7c86c9f39c8a238fd34c479ca394325b37e090d75b4bf15e527e8cab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
