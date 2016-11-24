<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6005975f0680e4033b2f4ed3e1cf8e7a3ba4a0a5662b1124d0ff0ba152eb9394 extends Twig_Template
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
        $__internal_f923ecd67d0ec4477fe0ddb8b5630c782b33f0f4f0d91606052ebc1d9a286ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f923ecd67d0ec4477fe0ddb8b5630c782b33f0f4f0d91606052ebc1d9a286ec8->enter($__internal_f923ecd67d0ec4477fe0ddb8b5630c782b33f0f4f0d91606052ebc1d9a286ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f923ecd67d0ec4477fe0ddb8b5630c782b33f0f4f0d91606052ebc1d9a286ec8->leave($__internal_f923ecd67d0ec4477fe0ddb8b5630c782b33f0f4f0d91606052ebc1d9a286ec8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e744ceaf9dc44d0b26c078fcee4679f192981d8f7740e69a708816b7c38fe7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e744ceaf9dc44d0b26c078fcee4679f192981d8f7740e69a708816b7c38fe7b->enter($__internal_1e744ceaf9dc44d0b26c078fcee4679f192981d8f7740e69a708816b7c38fe7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1e744ceaf9dc44d0b26c078fcee4679f192981d8f7740e69a708816b7c38fe7b->leave($__internal_1e744ceaf9dc44d0b26c078fcee4679f192981d8f7740e69a708816b7c38fe7b_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
