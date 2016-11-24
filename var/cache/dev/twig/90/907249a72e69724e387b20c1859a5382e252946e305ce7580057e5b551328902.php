<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f317915d9396aed6f41fd2ec6753d1b691c67d2bfec9e55d247e8f50289da84d extends Twig_Template
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
        $__internal_dbc7f019993e73eb199def6ba53786a1d071f2514eb5ff527a7834f27f09bde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc7f019993e73eb199def6ba53786a1d071f2514eb5ff527a7834f27f09bde9->enter($__internal_dbc7f019993e73eb199def6ba53786a1d071f2514eb5ff527a7834f27f09bde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_dbc7f019993e73eb199def6ba53786a1d071f2514eb5ff527a7834f27f09bde9->leave($__internal_dbc7f019993e73eb199def6ba53786a1d071f2514eb5ff527a7834f27f09bde9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
