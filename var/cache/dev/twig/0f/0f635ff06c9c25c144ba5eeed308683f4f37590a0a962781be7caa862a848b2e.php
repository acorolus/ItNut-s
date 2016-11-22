<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_43b138d823c1ba14fa9e11990c1ad78df54d553aea7eca38b8f03b6901c5d245 extends Twig_Template
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
        $__internal_f856eb7920252b996904de187bda2b0c7a282bf2891b60257ced9704835b0674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f856eb7920252b996904de187bda2b0c7a282bf2891b60257ced9704835b0674->enter($__internal_f856eb7920252b996904de187bda2b0c7a282bf2891b60257ced9704835b0674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f856eb7920252b996904de187bda2b0c7a282bf2891b60257ced9704835b0674->leave($__internal_f856eb7920252b996904de187bda2b0c7a282bf2891b60257ced9704835b0674_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/aurelie/Sites/ItNut/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
