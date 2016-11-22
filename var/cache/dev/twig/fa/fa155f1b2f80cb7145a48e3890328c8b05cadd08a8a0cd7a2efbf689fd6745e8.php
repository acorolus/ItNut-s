<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_78c7ff5bbb2ce225bd50b04be0949f2a2f6008c93cd8b1ea1768837720c32794 extends Twig_Template
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
        $__internal_1ff9574b33e3b4dddf39e9135980c4f1510e7b11313b59caa860e3eaa0e5b523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff9574b33e3b4dddf39e9135980c4f1510e7b11313b59caa860e3eaa0e5b523->enter($__internal_1ff9574b33e3b4dddf39e9135980c4f1510e7b11313b59caa860e3eaa0e5b523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1ff9574b33e3b4dddf39e9135980c4f1510e7b11313b59caa860e3eaa0e5b523->leave($__internal_1ff9574b33e3b4dddf39e9135980c4f1510e7b11313b59caa860e3eaa0e5b523_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
