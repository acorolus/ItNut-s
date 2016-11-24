<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_afaec2b3e8f370cb3a28a0f82f5edfeed3b8130b8f66a84c463ece3293611df4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f7e83f3c621adf2d0feb218dba09bcdf806646a2c990349525ee051faa05e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7e83f3c621adf2d0feb218dba09bcdf806646a2c990349525ee051faa05e86->enter($__internal_2f7e83f3c621adf2d0feb218dba09bcdf806646a2c990349525ee051faa05e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f7e83f3c621adf2d0feb218dba09bcdf806646a2c990349525ee051faa05e86->leave($__internal_2f7e83f3c621adf2d0feb218dba09bcdf806646a2c990349525ee051faa05e86_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c08c0403e611e409e2e24f4ee2ac70b192cec55d0eadda945b2bbe138f56d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c08c0403e611e409e2e24f4ee2ac70b192cec55d0eadda945b2bbe138f56d8d->enter($__internal_8c08c0403e611e409e2e24f4ee2ac70b192cec55d0eadda945b2bbe138f56d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8c08c0403e611e409e2e24f4ee2ac70b192cec55d0eadda945b2bbe138f56d8d->leave($__internal_8c08c0403e611e409e2e24f4ee2ac70b192cec55d0eadda945b2bbe138f56d8d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_310adddfe7f5060984b52cbc123133db77e438c4d89b9e15b2a8f8630300c672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310adddfe7f5060984b52cbc123133db77e438c4d89b9e15b2a8f8630300c672->enter($__internal_310adddfe7f5060984b52cbc123133db77e438c4d89b9e15b2a8f8630300c672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_310adddfe7f5060984b52cbc123133db77e438c4d89b9e15b2a8f8630300c672->leave($__internal_310adddfe7f5060984b52cbc123133db77e438c4d89b9e15b2a8f8630300c672_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c8f8e285c7f63cc867e5fcce8337c17ccb139e04dd489ad1752991312b12e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8f8e285c7f63cc867e5fcce8337c17ccb139e04dd489ad1752991312b12e2e->enter($__internal_4c8f8e285c7f63cc867e5fcce8337c17ccb139e04dd489ad1752991312b12e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4c8f8e285c7f63cc867e5fcce8337c17ccb139e04dd489ad1752991312b12e2e->leave($__internal_4c8f8e285c7f63cc867e5fcce8337c17ccb139e04dd489ad1752991312b12e2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
