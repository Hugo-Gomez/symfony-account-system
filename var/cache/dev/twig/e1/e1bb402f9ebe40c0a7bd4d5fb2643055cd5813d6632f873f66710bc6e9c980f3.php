<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_8f0d266a25dc40de1b80a546fdc3bcfb5b1c91259df7c087e557880e44cfc9d7 extends Twig_Template
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
        $__internal_144feccf1bf576cfec4a94d6f77868e27538abc5851abd156b83882cfd837159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144feccf1bf576cfec4a94d6f77868e27538abc5851abd156b83882cfd837159->enter($__internal_144feccf1bf576cfec4a94d6f77868e27538abc5851abd156b83882cfd837159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_ea7f3b86274096139df736a5c2538a478edf180c29046d4b83f8d2ca22cd6690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7f3b86274096139df736a5c2538a478edf180c29046d4b83f8d2ca22cd6690->enter($__internal_ea7f3b86274096139df736a5c2538a478edf180c29046d4b83f8d2ca22cd6690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_144feccf1bf576cfec4a94d6f77868e27538abc5851abd156b83882cfd837159->leave($__internal_144feccf1bf576cfec4a94d6f77868e27538abc5851abd156b83882cfd837159_prof);

        
        $__internal_ea7f3b86274096139df736a5c2538a478edf180c29046d4b83f8d2ca22cd6690->leave($__internal_ea7f3b86274096139df736a5c2538a478edf180c29046d4b83f8d2ca22cd6690_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
