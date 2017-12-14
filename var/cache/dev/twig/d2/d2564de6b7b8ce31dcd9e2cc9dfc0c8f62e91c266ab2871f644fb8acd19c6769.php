<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3c1d3e5489332a39e6a1e2bf6f5b3a590ee94367d3a4cb78f2eead856e8e6209 extends Twig_Template
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
        $__internal_f408dece8b0c3b4546977782356c7fa44b1065ed3e271928299663ba0bde7c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f408dece8b0c3b4546977782356c7fa44b1065ed3e271928299663ba0bde7c15->enter($__internal_f408dece8b0c3b4546977782356c7fa44b1065ed3e271928299663ba0bde7c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_9d76fe02231580ea3b77816403613933168ed1da1845f16567a21736cf80d35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d76fe02231580ea3b77816403613933168ed1da1845f16567a21736cf80d35f->enter($__internal_9d76fe02231580ea3b77816403613933168ed1da1845f16567a21736cf80d35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f408dece8b0c3b4546977782356c7fa44b1065ed3e271928299663ba0bde7c15->leave($__internal_f408dece8b0c3b4546977782356c7fa44b1065ed3e271928299663ba0bde7c15_prof);

        
        $__internal_9d76fe02231580ea3b77816403613933168ed1da1845f16567a21736cf80d35f->leave($__internal_9d76fe02231580ea3b77816403613933168ed1da1845f16567a21736cf80d35f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
