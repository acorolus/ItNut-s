<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_866e09db28299488a21816f3918784a1e992b02086c0d150cb6d7084b8a16973 extends Twig_Template
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
        $__internal_3fcbc2a7c703cc559dc7bcc54b8ce45220171ddfbc36b847c9f540190cd11f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fcbc2a7c703cc559dc7bcc54b8ce45220171ddfbc36b847c9f540190cd11f58->enter($__internal_3fcbc2a7c703cc559dc7bcc54b8ce45220171ddfbc36b847c9f540190cd11f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3fcbc2a7c703cc559dc7bcc54b8ce45220171ddfbc36b847c9f540190cd11f58->leave($__internal_3fcbc2a7c703cc559dc7bcc54b8ce45220171ddfbc36b847c9f540190cd11f58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
