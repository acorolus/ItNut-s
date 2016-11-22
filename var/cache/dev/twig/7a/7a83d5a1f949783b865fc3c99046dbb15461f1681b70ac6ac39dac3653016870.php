<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_888fc70a26dcdb3149e1b4b479dcf3b7d88fa7a0ec9916f5666ad9f74d6a12cd extends Twig_Template
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
        $__internal_eda3d65c808df365913abd7e2d6b61e2990df5d44bb2e72bcf43690cf63542f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda3d65c808df365913abd7e2d6b61e2990df5d44bb2e72bcf43690cf63542f8->enter($__internal_eda3d65c808df365913abd7e2d6b61e2990df5d44bb2e72bcf43690cf63542f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_eda3d65c808df365913abd7e2d6b61e2990df5d44bb2e72bcf43690cf63542f8->leave($__internal_eda3d65c808df365913abd7e2d6b61e2990df5d44bb2e72bcf43690cf63542f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
