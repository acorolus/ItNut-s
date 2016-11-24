<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_82187edda690e2421d83d7f1bff67941cbbc44d7495fd6bfc34462f32aa50e08 extends Twig_Template
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
        $__internal_44ce347bed4fb0f57af09a89a4af17a3b898355d4a78688c116cd9a93e6f8f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ce347bed4fb0f57af09a89a4af17a3b898355d4a78688c116cd9a93e6f8f8b->enter($__internal_44ce347bed4fb0f57af09a89a4af17a3b898355d4a78688c116cd9a93e6f8f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_44ce347bed4fb0f57af09a89a4af17a3b898355d4a78688c116cd9a93e6f8f8b->leave($__internal_44ce347bed4fb0f57af09a89a4af17a3b898355d4a78688c116cd9a93e6f8f8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
