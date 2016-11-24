<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_ed2a3fe5587b457342c08d3e9e13f1f56380bbe4a429d92a235695c521edd9b9 extends Twig_Template
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
        $__internal_bd9fc887c59a8e73bfefb66ae0b4491ce9b318711b01abca2fbec5ff9a8a4904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9fc887c59a8e73bfefb66ae0b4491ce9b318711b01abca2fbec5ff9a8a4904->enter($__internal_bd9fc887c59a8e73bfefb66ae0b4491ce9b318711b01abca2fbec5ff9a8a4904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_bd9fc887c59a8e73bfefb66ae0b4491ce9b318711b01abca2fbec5ff9a8a4904->leave($__internal_bd9fc887c59a8e73bfefb66ae0b4491ce9b318711b01abca2fbec5ff9a8a4904_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
