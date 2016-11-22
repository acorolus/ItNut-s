<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_32ff1aff6269329e2dbfd4082b947fac51799eb92c6c8094cabc14f63877fff8 extends Twig_Template
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
        $__internal_0e302c6fc39d57035b42c335c21404950c5fa19311e16e4f28a1c94bb08fee11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e302c6fc39d57035b42c335c21404950c5fa19311e16e4f28a1c94bb08fee11->enter($__internal_0e302c6fc39d57035b42c335c21404950c5fa19311e16e4f28a1c94bb08fee11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0e302c6fc39d57035b42c335c21404950c5fa19311e16e4f28a1c94bb08fee11->leave($__internal_0e302c6fc39d57035b42c335c21404950c5fa19311e16e4f28a1c94bb08fee11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
