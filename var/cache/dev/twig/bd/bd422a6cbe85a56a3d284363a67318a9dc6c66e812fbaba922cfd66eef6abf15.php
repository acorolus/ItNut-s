<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_c65a5d956aa70ffa6e6215ae099546ec9e498b723a4ea563becbe40dd4a410d1 extends Twig_Template
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
        $__internal_65f0937054f1cdf76d6f888234ae1afce17ab3a84ada8cd64b1358af3bb8e57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f0937054f1cdf76d6f888234ae1afce17ab3a84ada8cd64b1358af3bb8e57e->enter($__internal_65f0937054f1cdf76d6f888234ae1afce17ab3a84ada8cd64b1358af3bb8e57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_65f0937054f1cdf76d6f888234ae1afce17ab3a84ada8cd64b1358af3bb8e57e->leave($__internal_65f0937054f1cdf76d6f888234ae1afce17ab3a84ada8cd64b1358af3bb8e57e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
