<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_70abae97f9c5b89625f51200af04e47c73cc2b8869aa018a8c91182a411eccff extends Twig_Template
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
        $__internal_8a086cdcedb494f8a69e11ea7c3a42dc42dcb9d3091399de6a55977623ba328d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a086cdcedb494f8a69e11ea7c3a42dc42dcb9d3091399de6a55977623ba328d->enter($__internal_8a086cdcedb494f8a69e11ea7c3a42dc42dcb9d3091399de6a55977623ba328d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8a086cdcedb494f8a69e11ea7c3a42dc42dcb9d3091399de6a55977623ba328d->leave($__internal_8a086cdcedb494f8a69e11ea7c3a42dc42dcb9d3091399de6a55977623ba328d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
