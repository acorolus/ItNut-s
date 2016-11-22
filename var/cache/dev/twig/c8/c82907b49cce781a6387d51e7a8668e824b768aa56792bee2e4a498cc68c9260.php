<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5f942c25bf293cc781fae67baa9388ae1ecaaded32113ce16bac416d70dae467 extends Twig_Template
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
        $__internal_d1b18a581406fba8a9fabae6bac9d2c229f8056ee88aaecd807b0fe8da26bde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b18a581406fba8a9fabae6bac9d2c229f8056ee88aaecd807b0fe8da26bde4->enter($__internal_d1b18a581406fba8a9fabae6bac9d2c229f8056ee88aaecd807b0fe8da26bde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d1b18a581406fba8a9fabae6bac9d2c229f8056ee88aaecd807b0fe8da26bde4->leave($__internal_d1b18a581406fba8a9fabae6bac9d2c229f8056ee88aaecd807b0fe8da26bde4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
