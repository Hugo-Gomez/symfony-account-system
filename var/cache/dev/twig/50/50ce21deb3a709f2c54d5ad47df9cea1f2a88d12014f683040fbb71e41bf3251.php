<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3f77ab3c202fa2d2bddd3918a382f2da479c0da718eca1def2d06140c3fc364e extends Twig_Template
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
        $__internal_2d410002adfee8609070d1bd52cbb31c933b2bd67f77cf43dd3715bf10e5db9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d410002adfee8609070d1bd52cbb31c933b2bd67f77cf43dd3715bf10e5db9d->enter($__internal_2d410002adfee8609070d1bd52cbb31c933b2bd67f77cf43dd3715bf10e5db9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_caa82bcf7b1cb53f93d24479289b7cca3bd8e95627e560273411422c42d3341b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa82bcf7b1cb53f93d24479289b7cca3bd8e95627e560273411422c42d3341b->enter($__internal_caa82bcf7b1cb53f93d24479289b7cca3bd8e95627e560273411422c42d3341b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2d410002adfee8609070d1bd52cbb31c933b2bd67f77cf43dd3715bf10e5db9d->leave($__internal_2d410002adfee8609070d1bd52cbb31c933b2bd67f77cf43dd3715bf10e5db9d_prof);

        
        $__internal_caa82bcf7b1cb53f93d24479289b7cca3bd8e95627e560273411422c42d3341b->leave($__internal_caa82bcf7b1cb53f93d24479289b7cca3bd8e95627e560273411422c42d3341b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
