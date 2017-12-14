<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a1058a4b45fbe44e5e7a6501898701f52e1058d2d3be5e3d6d34517c9bcbe21d extends Twig_Template
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
        $__internal_a28551865ad4902ae1041cc5ba189d4e0d21aa641a6068d1a258b0d3279b2764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28551865ad4902ae1041cc5ba189d4e0d21aa641a6068d1a258b0d3279b2764->enter($__internal_a28551865ad4902ae1041cc5ba189d4e0d21aa641a6068d1a258b0d3279b2764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e90ed525e70a23c1222aa6a0e7d41fbef9ee5ab32e8948d0dbed1de9bf53b88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90ed525e70a23c1222aa6a0e7d41fbef9ee5ab32e8948d0dbed1de9bf53b88c->enter($__internal_e90ed525e70a23c1222aa6a0e7d41fbef9ee5ab32e8948d0dbed1de9bf53b88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a28551865ad4902ae1041cc5ba189d4e0d21aa641a6068d1a258b0d3279b2764->leave($__internal_a28551865ad4902ae1041cc5ba189d4e0d21aa641a6068d1a258b0d3279b2764_prof);

        
        $__internal_e90ed525e70a23c1222aa6a0e7d41fbef9ee5ab32e8948d0dbed1de9bf53b88c->leave($__internal_e90ed525e70a23c1222aa6a0e7d41fbef9ee5ab32e8948d0dbed1de9bf53b88c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
