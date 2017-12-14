<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_96e4a58f14bd0f95a415a96ccce6158a4b4dcfd58ba73d8afd1030261ad47f4f extends Twig_Template
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
        $__internal_fa9e53765aa8778b3059633c6551ab1234a277f9ea7f437be4878ee9402ef7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9e53765aa8778b3059633c6551ab1234a277f9ea7f437be4878ee9402ef7c1->enter($__internal_fa9e53765aa8778b3059633c6551ab1234a277f9ea7f437be4878ee9402ef7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_f4e2988b248fdf43d91633de25bae1e7165a07c55042a8b65ad8075f2a7a47d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e2988b248fdf43d91633de25bae1e7165a07c55042a8b65ad8075f2a7a47d2->enter($__internal_f4e2988b248fdf43d91633de25bae1e7165a07c55042a8b65ad8075f2a7a47d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_fa9e53765aa8778b3059633c6551ab1234a277f9ea7f437be4878ee9402ef7c1->leave($__internal_fa9e53765aa8778b3059633c6551ab1234a277f9ea7f437be4878ee9402ef7c1_prof);

        
        $__internal_f4e2988b248fdf43d91633de25bae1e7165a07c55042a8b65ad8075f2a7a47d2->leave($__internal_f4e2988b248fdf43d91633de25bae1e7165a07c55042a8b65ad8075f2a7a47d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
