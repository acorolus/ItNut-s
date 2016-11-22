<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_47004f62656e43346c0df7811f54269ecd45c72be8541fe6220f7fbc612eb88b extends Twig_Template
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
        $__internal_3a76212375a40b283d54ef75725fe71cb9fc65d316c996b0ffa0cc537b1a6430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a76212375a40b283d54ef75725fe71cb9fc65d316c996b0ffa0cc537b1a6430->enter($__internal_3a76212375a40b283d54ef75725fe71cb9fc65d316c996b0ffa0cc537b1a6430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3a76212375a40b283d54ef75725fe71cb9fc65d316c996b0ffa0cc537b1a6430->leave($__internal_3a76212375a40b283d54ef75725fe71cb9fc65d316c996b0ffa0cc537b1a6430_prof);

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
", "@Framework/Form/url_widget.html.php", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
