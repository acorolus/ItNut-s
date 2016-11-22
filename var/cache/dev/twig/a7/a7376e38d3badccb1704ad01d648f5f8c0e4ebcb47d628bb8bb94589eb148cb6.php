<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_dcefa5af0b921a8b9afd223357f7249c1206d7478394779e746ee371faa31c58 extends Twig_Template
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
        $__internal_72b66e3a6ecbc1b0cd0c14f71ab91aab006583a5723db134519a08f4cdfbf77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b66e3a6ecbc1b0cd0c14f71ab91aab006583a5723db134519a08f4cdfbf77a->enter($__internal_72b66e3a6ecbc1b0cd0c14f71ab91aab006583a5723db134519a08f4cdfbf77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_72b66e3a6ecbc1b0cd0c14f71ab91aab006583a5723db134519a08f4cdfbf77a->leave($__internal_72b66e3a6ecbc1b0cd0c14f71ab91aab006583a5723db134519a08f4cdfbf77a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
