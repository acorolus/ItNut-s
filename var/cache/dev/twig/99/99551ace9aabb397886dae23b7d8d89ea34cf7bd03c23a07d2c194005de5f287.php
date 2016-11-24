<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f3b63d8f2e7891c633303307034311480e45d9f1e00f2a708c8b8a81e5bfc67f extends Twig_Template
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
        $__internal_5f58bd78233ba8d3ddef6f2dace4afda98d18e4a12bade2b76bc9ba0de7d2c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f58bd78233ba8d3ddef6f2dace4afda98d18e4a12bade2b76bc9ba0de7d2c38->enter($__internal_5f58bd78233ba8d3ddef6f2dace4afda98d18e4a12bade2b76bc9ba0de7d2c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_5f58bd78233ba8d3ddef6f2dace4afda98d18e4a12bade2b76bc9ba0de7d2c38->leave($__internal_5f58bd78233ba8d3ddef6f2dace4afda98d18e4a12bade2b76bc9ba0de7d2c38_prof);

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
", "@Framework/Form/number_widget.html.php", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
