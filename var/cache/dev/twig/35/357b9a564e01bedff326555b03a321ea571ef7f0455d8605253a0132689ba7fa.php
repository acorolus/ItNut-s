<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_3ec07014d637a0e4c437d421af1c919f7b7091d6b3fd9828fec24f7828ca7b00 extends Twig_Template
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
        $__internal_b96bb67d34f6142a4ae47698966404e9c1a5116cc4f1d7ec34e9238c992dc2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96bb67d34f6142a4ae47698966404e9c1a5116cc4f1d7ec34e9238c992dc2ee->enter($__internal_b96bb67d34f6142a4ae47698966404e9c1a5116cc4f1d7ec34e9238c992dc2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b96bb67d34f6142a4ae47698966404e9c1a5116cc4f1d7ec34e9238c992dc2ee->leave($__internal_b96bb67d34f6142a4ae47698966404e9c1a5116cc4f1d7ec34e9238c992dc2ee_prof);

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
", "@Framework/Form/attributes.html.php", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
