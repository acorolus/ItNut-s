<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_92fa631a79e458b498f1ab0d705b05b334cd3f566e69b7f79fa67afa3c5e321a extends Twig_Template
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
        $__internal_7a3fcdf1aa7c5f5cb670d4d529ba65759b62b14cd52c0011481123868fda9989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3fcdf1aa7c5f5cb670d4d529ba65759b62b14cd52c0011481123868fda9989->enter($__internal_7a3fcdf1aa7c5f5cb670d4d529ba65759b62b14cd52c0011481123868fda9989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7a3fcdf1aa7c5f5cb670d4d529ba65759b62b14cd52c0011481123868fda9989->leave($__internal_7a3fcdf1aa7c5f5cb670d4d529ba65759b62b14cd52c0011481123868fda9989_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
