<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_922151d2b6505459c3f477388a2bdffb6a6d4a03299f33450759f1a03b1d79a0 extends Twig_Template
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
        $__internal_f24091d1ff6d35eb37f8fd7235c0db3e3ac678875a3dd1f2ce93d853c1041e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f24091d1ff6d35eb37f8fd7235c0db3e3ac678875a3dd1f2ce93d853c1041e35->enter($__internal_f24091d1ff6d35eb37f8fd7235c0db3e3ac678875a3dd1f2ce93d853c1041e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f24091d1ff6d35eb37f8fd7235c0db3e3ac678875a3dd1f2ce93d853c1041e35->leave($__internal_f24091d1ff6d35eb37f8fd7235c0db3e3ac678875a3dd1f2ce93d853c1041e35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/aurelie/Sites/ItNut-s/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
