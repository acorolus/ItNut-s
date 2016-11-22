<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_37547a686402438f74b203b5936d76886452331d367b603e4cdfe45cd232b746 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be3f2dd9907ce6bae6a869e041152f3b66cd32448a87df45142708e4be5d9b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3f2dd9907ce6bae6a869e041152f3b66cd32448a87df45142708e4be5d9b84->enter($__internal_be3f2dd9907ce6bae6a869e041152f3b66cd32448a87df45142708e4be5d9b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_be3f2dd9907ce6bae6a869e041152f3b66cd32448a87df45142708e4be5d9b84->leave($__internal_be3f2dd9907ce6bae6a869e041152f3b66cd32448a87df45142708e4be5d9b84_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f19bf5ad4e3a104772f3a1c0200661c4b90ff6b98b83d82c731f21ed0feae053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19bf5ad4e3a104772f3a1c0200661c4b90ff6b98b83d82c731f21ed0feae053->enter($__internal_f19bf5ad4e3a104772f3a1c0200661c4b90ff6b98b83d82c731f21ed0feae053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f19bf5ad4e3a104772f3a1c0200661c4b90ff6b98b83d82c731f21ed0feae053->leave($__internal_f19bf5ad4e3a104772f3a1c0200661c4b90ff6b98b83d82c731f21ed0feae053_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
