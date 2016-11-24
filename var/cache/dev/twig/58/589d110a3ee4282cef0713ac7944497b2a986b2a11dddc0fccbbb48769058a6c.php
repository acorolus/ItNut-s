<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_061f1d76a5e686cd7809995cd4d3fc1f4c1294393e57d9d5a707b9026d69b108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38f33ad1de50a2900d528d1cbf013fc641733f0400e0d88cfccae99faf2808a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f33ad1de50a2900d528d1cbf013fc641733f0400e0d88cfccae99faf2808a9->enter($__internal_38f33ad1de50a2900d528d1cbf013fc641733f0400e0d88cfccae99faf2808a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_38f33ad1de50a2900d528d1cbf013fc641733f0400e0d88cfccae99faf2808a9->leave($__internal_38f33ad1de50a2900d528d1cbf013fc641733f0400e0d88cfccae99faf2808a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
