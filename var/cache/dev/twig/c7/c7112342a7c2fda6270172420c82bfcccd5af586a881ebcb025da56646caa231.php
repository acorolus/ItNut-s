<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f8064381b77cbbba4bfd937a46b46abdd1eca2ca47ac726df2e5d7d4aa90bd40 extends Twig_Template
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
        $__internal_22c2b256a7e490d7bca73bea3d4f55013fbc20c1558253f4e3b8b0a8ed738b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c2b256a7e490d7bca73bea3d4f55013fbc20c1558253f4e3b8b0a8ed738b66->enter($__internal_22c2b256a7e490d7bca73bea3d4f55013fbc20c1558253f4e3b8b0a8ed738b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_22c2b256a7e490d7bca73bea3d4f55013fbc20c1558253f4e3b8b0a8ed738b66->leave($__internal_22c2b256a7e490d7bca73bea3d4f55013fbc20c1558253f4e3b8b0a8ed738b66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
