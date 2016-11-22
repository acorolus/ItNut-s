<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ea4eb36ec621ef77c298943ec2d16ef9ab8c323f9922f34914103feb0c87a570 extends Twig_Template
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
        $__internal_77379d074b653e229d7f508e1deb3e3c583c60b4ff9b0d7cc0cd307d8e18ac3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77379d074b653e229d7f508e1deb3e3c583c60b4ff9b0d7cc0cd307d8e18ac3d->enter($__internal_77379d074b653e229d7f508e1deb3e3c583c60b4ff9b0d7cc0cd307d8e18ac3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_77379d074b653e229d7f508e1deb3e3c583c60b4ff9b0d7cc0cd307d8e18ac3d->leave($__internal_77379d074b653e229d7f508e1deb3e3c583c60b4ff9b0d7cc0cd307d8e18ac3d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
