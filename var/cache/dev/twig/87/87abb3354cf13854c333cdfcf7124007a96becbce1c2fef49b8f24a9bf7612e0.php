<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ee3202196f8f9655b9cfd903f0818e44bbe4e255a69718c3b1795eb486dfb2c8 extends Twig_Template
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
        $__internal_056a8bff38fc813529cd06e5a8af2fad6fe1910842752765ef35a6a423176d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056a8bff38fc813529cd06e5a8af2fad6fe1910842752765ef35a6a423176d61->enter($__internal_056a8bff38fc813529cd06e5a8af2fad6fe1910842752765ef35a6a423176d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_056a8bff38fc813529cd06e5a8af2fad6fe1910842752765ef35a6a423176d61->leave($__internal_056a8bff38fc813529cd06e5a8af2fad6fe1910842752765ef35a6a423176d61_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e7e69a2f6e96e1b956e9af7224ebd335c3fccc6897dc4c27eb74759bbfbf3310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e69a2f6e96e1b956e9af7224ebd335c3fccc6897dc4c27eb74759bbfbf3310->enter($__internal_e7e69a2f6e96e1b956e9af7224ebd335c3fccc6897dc4c27eb74759bbfbf3310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e7e69a2f6e96e1b956e9af7224ebd335c3fccc6897dc4c27eb74759bbfbf3310->leave($__internal_e7e69a2f6e96e1b956e9af7224ebd335c3fccc6897dc4c27eb74759bbfbf3310_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9706ee3eab6b7552fe4633a12d30baa3d5da43e16135fb8eca9bf2d19c118b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9706ee3eab6b7552fe4633a12d30baa3d5da43e16135fb8eca9bf2d19c118b0f->enter($__internal_9706ee3eab6b7552fe4633a12d30baa3d5da43e16135fb8eca9bf2d19c118b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9706ee3eab6b7552fe4633a12d30baa3d5da43e16135fb8eca9bf2d19c118b0f->leave($__internal_9706ee3eab6b7552fe4633a12d30baa3d5da43e16135fb8eca9bf2d19c118b0f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd17e423ee36902971b7c875c4fcbd4f3ffbebe83f9424f189799ea1477641a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd17e423ee36902971b7c875c4fcbd4f3ffbebe83f9424f189799ea1477641a1->enter($__internal_cd17e423ee36902971b7c875c4fcbd4f3ffbebe83f9424f189799ea1477641a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cd17e423ee36902971b7c875c4fcbd4f3ffbebe83f9424f189799ea1477641a1->leave($__internal_cd17e423ee36902971b7c875c4fcbd4f3ffbebe83f9424f189799ea1477641a1_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
