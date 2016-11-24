<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_cab3a340ad35a6e9a8169a956fa72690814a58e4feac1af13baa75843f05054c extends Twig_Template
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
        $__internal_4dfd148d75ef87aa69eadd74541657c12dd2d66f3f2c7c7dcce4e8ab146a9e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfd148d75ef87aa69eadd74541657c12dd2d66f3f2c7c7dcce4e8ab146a9e96->enter($__internal_4dfd148d75ef87aa69eadd74541657c12dd2d66f3f2c7c7dcce4e8ab146a9e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_4dfd148d75ef87aa69eadd74541657c12dd2d66f3f2c7c7dcce4e8ab146a9e96->leave($__internal_4dfd148d75ef87aa69eadd74541657c12dd2d66f3f2c7c7dcce4e8ab146a9e96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
