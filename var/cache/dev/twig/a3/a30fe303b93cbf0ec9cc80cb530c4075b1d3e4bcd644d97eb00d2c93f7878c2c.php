<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5ad4ad8042891554d90bf7c9e8f632f0720b2a880783d952e7851e32e66d72d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_b6710955fe25da4f18c4a681fb6f2d9eb382433a65e32a0ef82a793c55e8ed7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6710955fe25da4f18c4a681fb6f2d9eb382433a65e32a0ef82a793c55e8ed7f->enter($__internal_b6710955fe25da4f18c4a681fb6f2d9eb382433a65e32a0ef82a793c55e8ed7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6710955fe25da4f18c4a681fb6f2d9eb382433a65e32a0ef82a793c55e8ed7f->leave($__internal_b6710955fe25da4f18c4a681fb6f2d9eb382433a65e32a0ef82a793c55e8ed7f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8809e974198906fb3f0eee65700c5b78b058e49070f4d1c1a47a112eca68301e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8809e974198906fb3f0eee65700c5b78b058e49070f4d1c1a47a112eca68301e->enter($__internal_8809e974198906fb3f0eee65700c5b78b058e49070f4d1c1a47a112eca68301e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8809e974198906fb3f0eee65700c5b78b058e49070f4d1c1a47a112eca68301e->leave($__internal_8809e974198906fb3f0eee65700c5b78b058e49070f4d1c1a47a112eca68301e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57ed346f8d59e3a8daa9103ad02b037ed79ef53c3687272c68655ab73bc8e9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ed346f8d59e3a8daa9103ad02b037ed79ef53c3687272c68655ab73bc8e9e0->enter($__internal_57ed346f8d59e3a8daa9103ad02b037ed79ef53c3687272c68655ab73bc8e9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_57ed346f8d59e3a8daa9103ad02b037ed79ef53c3687272c68655ab73bc8e9e0->leave($__internal_57ed346f8d59e3a8daa9103ad02b037ed79ef53c3687272c68655ab73bc8e9e0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f509c05040f644756b1ab197ef6eb0e22578a1203b3e5d320f5b6efde38623a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f509c05040f644756b1ab197ef6eb0e22578a1203b3e5d320f5b6efde38623a->enter($__internal_9f509c05040f644756b1ab197ef6eb0e22578a1203b3e5d320f5b6efde38623a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9f509c05040f644756b1ab197ef6eb0e22578a1203b3e5d320f5b6efde38623a->leave($__internal_9f509c05040f644756b1ab197ef6eb0e22578a1203b3e5d320f5b6efde38623a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
