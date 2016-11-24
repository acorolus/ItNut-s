<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_3a6e820ca3bb7d5d9716aa1937b7dda738bfec1ee860b86b3524fdca15b37fac extends Twig_Template
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
        $__internal_b8d835f776fff7bbfd067b4b5ff525aa6743971728a8d34edf9b492f90f1698d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d835f776fff7bbfd067b4b5ff525aa6743971728a8d34edf9b492f90f1698d->enter($__internal_b8d835f776fff7bbfd067b4b5ff525aa6743971728a8d34edf9b492f90f1698d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b8d835f776fff7bbfd067b4b5ff525aa6743971728a8d34edf9b492f90f1698d->leave($__internal_b8d835f776fff7bbfd067b4b5ff525aa6743971728a8d34edf9b492f90f1698d_prof);

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
", "@Framework/Form/form_enctype.html.php", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
