<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_880637eceafdee411d6f74af6ef55995f9b76df71397b2b58c41db517a0fa1fa extends Twig_Template
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
        $__internal_f764e640b7d772c225da27865006da5bc6b1cf287fc7a860a362c2f7986f333c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f764e640b7d772c225da27865006da5bc6b1cf287fc7a860a362c2f7986f333c->enter($__internal_f764e640b7d772c225da27865006da5bc6b1cf287fc7a860a362c2f7986f333c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f764e640b7d772c225da27865006da5bc6b1cf287fc7a860a362c2f7986f333c->leave($__internal_f764e640b7d772c225da27865006da5bc6b1cf287fc7a860a362c2f7986f333c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a53d4adb56c8fd73614fb6e23022fe6ce07361811e0543e883d2a5198cb3a090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53d4adb56c8fd73614fb6e23022fe6ce07361811e0543e883d2a5198cb3a090->enter($__internal_a53d4adb56c8fd73614fb6e23022fe6ce07361811e0543e883d2a5198cb3a090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a53d4adb56c8fd73614fb6e23022fe6ce07361811e0543e883d2a5198cb3a090->leave($__internal_a53d4adb56c8fd73614fb6e23022fe6ce07361811e0543e883d2a5198cb3a090_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6b3ce6e9b59789b5eaec6632fbbf2b66a20870e9abe37be9738b5524c9d22da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b3ce6e9b59789b5eaec6632fbbf2b66a20870e9abe37be9738b5524c9d22da->enter($__internal_c6b3ce6e9b59789b5eaec6632fbbf2b66a20870e9abe37be9738b5524c9d22da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c6b3ce6e9b59789b5eaec6632fbbf2b66a20870e9abe37be9738b5524c9d22da->leave($__internal_c6b3ce6e9b59789b5eaec6632fbbf2b66a20870e9abe37be9738b5524c9d22da_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6de20d190fae404f4b2334d5789d8d862699913f4b9fec65c3b41f537647e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6de20d190fae404f4b2334d5789d8d862699913f4b9fec65c3b41f537647e78->enter($__internal_d6de20d190fae404f4b2334d5789d8d862699913f4b9fec65c3b41f537647e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d6de20d190fae404f4b2334d5789d8d862699913f4b9fec65c3b41f537647e78->leave($__internal_d6de20d190fae404f4b2334d5789d8d862699913f4b9fec65c3b41f537647e78_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
