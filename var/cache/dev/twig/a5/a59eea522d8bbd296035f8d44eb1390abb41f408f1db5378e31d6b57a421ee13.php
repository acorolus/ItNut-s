<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d755f814f6b9485452446b2cd51014d7b1a1910d36e2834cea3cfeb8c9e909d3 extends Twig_Template
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
        $__internal_5faf90e8e0a07ab8a79752dadbe4f87580969ae6275d4886acb9ef0f4a0be452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5faf90e8e0a07ab8a79752dadbe4f87580969ae6275d4886acb9ef0f4a0be452->enter($__internal_5faf90e8e0a07ab8a79752dadbe4f87580969ae6275d4886acb9ef0f4a0be452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5faf90e8e0a07ab8a79752dadbe4f87580969ae6275d4886acb9ef0f4a0be452->leave($__internal_5faf90e8e0a07ab8a79752dadbe4f87580969ae6275d4886acb9ef0f4a0be452_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
