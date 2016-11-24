<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_77f90ebbc7ac3e13861c949cc2e371e6ec68c9d6a38ed761467f9c967fe59c54 extends Twig_Template
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
        $__internal_d7f1ffdd44d9f9a46016a97c6687354a94d3c07652a7829afe021d8b2d27c85e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f1ffdd44d9f9a46016a97c6687354a94d3c07652a7829afe021d8b2d27c85e->enter($__internal_d7f1ffdd44d9f9a46016a97c6687354a94d3c07652a7829afe021d8b2d27c85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d7f1ffdd44d9f9a46016a97c6687354a94d3c07652a7829afe021d8b2d27c85e->leave($__internal_d7f1ffdd44d9f9a46016a97c6687354a94d3c07652a7829afe021d8b2d27c85e_prof);

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
", "@Framework/Form/form_rows.html.php", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
