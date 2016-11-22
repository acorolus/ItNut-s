<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_aa4e646a99443aec35a2dee483e43516c84f1036f6eabb1c1b2866e8d6c85b2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_389fe936d6cd23087e7bf172591e8fc45344456b14d6e32adc66adaaf3094170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389fe936d6cd23087e7bf172591e8fc45344456b14d6e32adc66adaaf3094170->enter($__internal_389fe936d6cd23087e7bf172591e8fc45344456b14d6e32adc66adaaf3094170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_389fe936d6cd23087e7bf172591e8fc45344456b14d6e32adc66adaaf3094170->leave($__internal_389fe936d6cd23087e7bf172591e8fc45344456b14d6e32adc66adaaf3094170_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_359ed37397444cff881b51962949fd659e5707b85cfb8bc417e28866a2647bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359ed37397444cff881b51962949fd659e5707b85cfb8bc417e28866a2647bf6->enter($__internal_359ed37397444cff881b51962949fd659e5707b85cfb8bc417e28866a2647bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_359ed37397444cff881b51962949fd659e5707b85cfb8bc417e28866a2647bf6->leave($__internal_359ed37397444cff881b51962949fd659e5707b85cfb8bc417e28866a2647bf6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d1a02939fc5d001662ab1f320f8ce616c1876865e8212395cb0df98aa3abfba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1a02939fc5d001662ab1f320f8ce616c1876865e8212395cb0df98aa3abfba->enter($__internal_6d1a02939fc5d001662ab1f320f8ce616c1876865e8212395cb0df98aa3abfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d1a02939fc5d001662ab1f320f8ce616c1876865e8212395cb0df98aa3abfba->leave($__internal_6d1a02939fc5d001662ab1f320f8ce616c1876865e8212395cb0df98aa3abfba_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7faa13d96d032ee3fd33422d858d38f3aa1c9214000842ca014f4391ad1b24f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7faa13d96d032ee3fd33422d858d38f3aa1c9214000842ca014f4391ad1b24f1->enter($__internal_7faa13d96d032ee3fd33422d858d38f3aa1c9214000842ca014f4391ad1b24f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7faa13d96d032ee3fd33422d858d38f3aa1c9214000842ca014f4391ad1b24f1->leave($__internal_7faa13d96d032ee3fd33422d858d38f3aa1c9214000842ca014f4391ad1b24f1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
