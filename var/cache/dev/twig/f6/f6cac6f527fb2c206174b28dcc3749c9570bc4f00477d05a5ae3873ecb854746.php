<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2be494a12845948cf5a6e74bcbecaff0d1414c089ecc4b5b54ffb983ffe0b74f extends Twig_Template
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
        $__internal_512038ef80a00c74d1f979676e67e3f71b34c3c3a34eb461e01e7912ffd63519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512038ef80a00c74d1f979676e67e3f71b34c3c3a34eb461e01e7912ffd63519->enter($__internal_512038ef80a00c74d1f979676e67e3f71b34c3c3a34eb461e01e7912ffd63519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_512038ef80a00c74d1f979676e67e3f71b34c3c3a34eb461e01e7912ffd63519->leave($__internal_512038ef80a00c74d1f979676e67e3f71b34c3c3a34eb461e01e7912ffd63519_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
