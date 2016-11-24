<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_fa63a91f20580700ae98b2fd2c8ea0e91a0cd74ca54f6d4c40b3103a83e2ca30 extends Twig_Template
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
        $__internal_f6f395e476f28e3b376c169b9cd566aea40e651bf6efa95e1f1e996dabcc5ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f395e476f28e3b376c169b9cd566aea40e651bf6efa95e1f1e996dabcc5ba3->enter($__internal_f6f395e476f28e3b376c169b9cd566aea40e651bf6efa95e1f1e996dabcc5ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f6f395e476f28e3b376c169b9cd566aea40e651bf6efa95e1f1e996dabcc5ba3->leave($__internal_f6f395e476f28e3b376c169b9cd566aea40e651bf6efa95e1f1e996dabcc5ba3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
