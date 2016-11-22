<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e726cecfdf8e248a928dbbfc5a6c4e4fbe591d24359b82c986f9bae4651bbbf4 extends Twig_Template
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
        $__internal_cde496ca217c1320ae19e18bd164541a9f3ab819df8b9e00c3139d6a6da15b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde496ca217c1320ae19e18bd164541a9f3ab819df8b9e00c3139d6a6da15b63->enter($__internal_cde496ca217c1320ae19e18bd164541a9f3ab819df8b9e00c3139d6a6da15b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_cde496ca217c1320ae19e18bd164541a9f3ab819df8b9e00c3139d6a6da15b63->leave($__internal_cde496ca217c1320ae19e18bd164541a9f3ab819df8b9e00c3139d6a6da15b63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
