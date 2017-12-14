<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5e74ca109ebb76cf7984b73efcc51366546503f91bdf503fe12696478a20b222 extends Twig_Template
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
        $__internal_65f45863d96d3f3f032a925f5af735ebb3573976f006f02d390a2e146f7c1aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f45863d96d3f3f032a925f5af735ebb3573976f006f02d390a2e146f7c1aba->enter($__internal_65f45863d96d3f3f032a925f5af735ebb3573976f006f02d390a2e146f7c1aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_78d6b5430fcf3a76e9dbe5da7ee7b5d0a0fa22786a3b9166f9e89d232a55b6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d6b5430fcf3a76e9dbe5da7ee7b5d0a0fa22786a3b9166f9e89d232a55b6f9->enter($__internal_78d6b5430fcf3a76e9dbe5da7ee7b5d0a0fa22786a3b9166f9e89d232a55b6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_65f45863d96d3f3f032a925f5af735ebb3573976f006f02d390a2e146f7c1aba->leave($__internal_65f45863d96d3f3f032a925f5af735ebb3573976f006f02d390a2e146f7c1aba_prof);

        
        $__internal_78d6b5430fcf3a76e9dbe5da7ee7b5d0a0fa22786a3b9166f9e89d232a55b6f9->leave($__internal_78d6b5430fcf3a76e9dbe5da7ee7b5d0a0fa22786a3b9166f9e89d232a55b6f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
