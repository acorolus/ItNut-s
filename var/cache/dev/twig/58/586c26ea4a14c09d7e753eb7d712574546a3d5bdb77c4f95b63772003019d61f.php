<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_cb54116226c8ee0611fc03d36abaed6bb849c4e3c891dbf27a03240a04000b7c extends Twig_Template
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
        $__internal_f869af3cc2bc14e7c9c37ffeaf6b9f7e1ca4718f684806b4163ee3bf49e7803e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f869af3cc2bc14e7c9c37ffeaf6b9f7e1ca4718f684806b4163ee3bf49e7803e->enter($__internal_f869af3cc2bc14e7c9c37ffeaf6b9f7e1ca4718f684806b4163ee3bf49e7803e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f869af3cc2bc14e7c9c37ffeaf6b9f7e1ca4718f684806b4163ee3bf49e7803e->leave($__internal_f869af3cc2bc14e7c9c37ffeaf6b9f7e1ca4718f684806b4163ee3bf49e7803e_prof);

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
", "@Framework/Form/integer_widget.html.php", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
