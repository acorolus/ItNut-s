<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6bea9b422cd1761d7dd0dc76b87aa1c906dd67228accc9240dcc86f8f0c7f94c extends Twig_Template
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
        $__internal_d8e2c80da76e5d880b4b739783980911ad2d5190e2ff75fa73e31505f667d251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e2c80da76e5d880b4b739783980911ad2d5190e2ff75fa73e31505f667d251->enter($__internal_d8e2c80da76e5d880b4b739783980911ad2d5190e2ff75fa73e31505f667d251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d8e2c80da76e5d880b4b739783980911ad2d5190e2ff75fa73e31505f667d251->leave($__internal_d8e2c80da76e5d880b4b739783980911ad2d5190e2ff75fa73e31505f667d251_prof);

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
", "@Framework/Form/button_row.html.php", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
