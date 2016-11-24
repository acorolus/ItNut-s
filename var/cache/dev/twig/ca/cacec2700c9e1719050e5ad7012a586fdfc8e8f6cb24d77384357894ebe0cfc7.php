<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_662f216be6ad57e0d66ccb6449d14df09449d6f619c4ce8a7906a63872e2a91f extends Twig_Template
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
        $__internal_63492ccda2b4a0321c0fdb900d1cf8662068838afd2e54e86a7ba6b9e0f7163a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63492ccda2b4a0321c0fdb900d1cf8662068838afd2e54e86a7ba6b9e0f7163a->enter($__internal_63492ccda2b4a0321c0fdb900d1cf8662068838afd2e54e86a7ba6b9e0f7163a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_63492ccda2b4a0321c0fdb900d1cf8662068838afd2e54e86a7ba6b9e0f7163a->leave($__internal_63492ccda2b4a0321c0fdb900d1cf8662068838afd2e54e86a7ba6b9e0f7163a_prof);

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
", "@Framework/Form/choice_options.html.php", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
