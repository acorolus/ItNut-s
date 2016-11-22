<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9c670d9f165cba424cf4390220a7df6a46fab95293ac5ae489b45ab5cd5fc37a extends Twig_Template
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
        $__internal_f64a4be81b3cbe607a32eae0b75547c1acf5a080d5cccb62bc88cb2279578a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64a4be81b3cbe607a32eae0b75547c1acf5a080d5cccb62bc88cb2279578a09->enter($__internal_f64a4be81b3cbe607a32eae0b75547c1acf5a080d5cccb62bc88cb2279578a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f64a4be81b3cbe607a32eae0b75547c1acf5a080d5cccb62bc88cb2279578a09->leave($__internal_f64a4be81b3cbe607a32eae0b75547c1acf5a080d5cccb62bc88cb2279578a09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
