<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c29063f6167e9ee548f0c6c0eac7be422fbd4cf22d708c70b86429c73bdfeccc extends Twig_Template
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
        $__internal_47c8d095a742f4ed1edf6108dd6243de028e1e3d4045290022fe3c1504ac39f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47c8d095a742f4ed1edf6108dd6243de028e1e3d4045290022fe3c1504ac39f9->enter($__internal_47c8d095a742f4ed1edf6108dd6243de028e1e3d4045290022fe3c1504ac39f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_4f28119d92f4dbfc8f4451b7d412af652e72201ff7fa1452becce0b62ec7bc83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f28119d92f4dbfc8f4451b7d412af652e72201ff7fa1452becce0b62ec7bc83->enter($__internal_4f28119d92f4dbfc8f4451b7d412af652e72201ff7fa1452becce0b62ec7bc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_47c8d095a742f4ed1edf6108dd6243de028e1e3d4045290022fe3c1504ac39f9->leave($__internal_47c8d095a742f4ed1edf6108dd6243de028e1e3d4045290022fe3c1504ac39f9_prof);

        
        $__internal_4f28119d92f4dbfc8f4451b7d412af652e72201ff7fa1452becce0b62ec7bc83->leave($__internal_4f28119d92f4dbfc8f4451b7d412af652e72201ff7fa1452becce0b62ec7bc83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
