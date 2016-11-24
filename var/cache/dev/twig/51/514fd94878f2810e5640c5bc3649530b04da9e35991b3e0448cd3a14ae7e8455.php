<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d5a4a67eb0298487a0a98025b2e4070a740da3985fe385d7cd82fdb77368935c extends Twig_Template
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
        $__internal_3feaaad4c2c37e75d00d9230bc7a3ece7b9c5b9bf9c9d927459b739c731605af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3feaaad4c2c37e75d00d9230bc7a3ece7b9c5b9bf9c9d927459b739c731605af->enter($__internal_3feaaad4c2c37e75d00d9230bc7a3ece7b9c5b9bf9c9d927459b739c731605af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3feaaad4c2c37e75d00d9230bc7a3ece7b9c5b9bf9c9d927459b739c731605af->leave($__internal_3feaaad4c2c37e75d00d9230bc7a3ece7b9c5b9bf9c9d927459b739c731605af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
