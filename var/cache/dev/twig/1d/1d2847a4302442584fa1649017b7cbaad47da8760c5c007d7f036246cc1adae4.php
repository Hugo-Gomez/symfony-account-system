<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7e3395681d47f547a66b8cdd9f36a5ed929b517b0c64146ec067851f277704b0 extends Twig_Template
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
        $__internal_2f657c3a23ec5f5db5ef504a56cc33a2873c3c8e405c7e40b3375fb177e8b172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f657c3a23ec5f5db5ef504a56cc33a2873c3c8e405c7e40b3375fb177e8b172->enter($__internal_2f657c3a23ec5f5db5ef504a56cc33a2873c3c8e405c7e40b3375fb177e8b172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_3cca94bdc5358fa31d4d960d9d85ba7209f10af8e074dbf9b68d015cbae80ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cca94bdc5358fa31d4d960d9d85ba7209f10af8e074dbf9b68d015cbae80ac9->enter($__internal_3cca94bdc5358fa31d4d960d9d85ba7209f10af8e074dbf9b68d015cbae80ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2f657c3a23ec5f5db5ef504a56cc33a2873c3c8e405c7e40b3375fb177e8b172->leave($__internal_2f657c3a23ec5f5db5ef504a56cc33a2873c3c8e405c7e40b3375fb177e8b172_prof);

        
        $__internal_3cca94bdc5358fa31d4d960d9d85ba7209f10af8e074dbf9b68d015cbae80ac9->leave($__internal_3cca94bdc5358fa31d4d960d9d85ba7209f10af8e074dbf9b68d015cbae80ac9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
