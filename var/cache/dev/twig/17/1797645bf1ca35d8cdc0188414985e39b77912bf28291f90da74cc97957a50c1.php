<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_818317bc668ea7262f5fc90ae0ada9d8a3744c46467b237400d3539e38a1dfbe extends Twig_Template
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
        $__internal_a33c4f1822c2a5d14a89f8b1b8e8ea37f17676475faf2f40969d847b0386cccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33c4f1822c2a5d14a89f8b1b8e8ea37f17676475faf2f40969d847b0386cccd->enter($__internal_a33c4f1822c2a5d14a89f8b1b8e8ea37f17676475faf2f40969d847b0386cccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a33c4f1822c2a5d14a89f8b1b8e8ea37f17676475faf2f40969d847b0386cccd->leave($__internal_a33c4f1822c2a5d14a89f8b1b8e8ea37f17676475faf2f40969d847b0386cccd_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
