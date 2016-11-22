<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_c4093c05980d159aa2d7ca3e5a1302b9912c5dd27ff888c2d33c33565385f31b extends Twig_Template
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
        $__internal_889fc451c0f495629b406804d44844b266a2c01ec2b795614af9a783c14b6dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889fc451c0f495629b406804d44844b266a2c01ec2b795614af9a783c14b6dfb->enter($__internal_889fc451c0f495629b406804d44844b266a2c01ec2b795614af9a783c14b6dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_889fc451c0f495629b406804d44844b266a2c01ec2b795614af9a783c14b6dfb->leave($__internal_889fc451c0f495629b406804d44844b266a2c01ec2b795614af9a783c14b6dfb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
