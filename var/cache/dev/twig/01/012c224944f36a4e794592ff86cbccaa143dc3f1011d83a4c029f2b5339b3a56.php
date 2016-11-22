<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d0d96955d1909a5a2320a89c15cc3ffeef06049c7eeb6f1ef04bf85fcfe2ada4 extends Twig_Template
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
        $__internal_0c58e8ef3a10e9dfa8f09c761250f6dfc220444456e3ce5e7211646c9d199af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c58e8ef3a10e9dfa8f09c761250f6dfc220444456e3ce5e7211646c9d199af5->enter($__internal_0c58e8ef3a10e9dfa8f09c761250f6dfc220444456e3ce5e7211646c9d199af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0c58e8ef3a10e9dfa8f09c761250f6dfc220444456e3ce5e7211646c9d199af5->leave($__internal_0c58e8ef3a10e9dfa8f09c761250f6dfc220444456e3ce5e7211646c9d199af5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
