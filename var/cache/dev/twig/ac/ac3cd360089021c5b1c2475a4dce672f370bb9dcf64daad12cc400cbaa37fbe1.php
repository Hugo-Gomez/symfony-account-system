<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_feacbf4bb4682d55cb3ff81398c67c9a21ecc8dbc62b82ed201774d400ed600b extends Twig_Template
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
        $__internal_5c91e28c80c3e04a63604a7a9b55f4a93039787b31f6e00738cc70c044447f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c91e28c80c3e04a63604a7a9b55f4a93039787b31f6e00738cc70c044447f5d->enter($__internal_5c91e28c80c3e04a63604a7a9b55f4a93039787b31f6e00738cc70c044447f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_166d60f6aa340563414d33cd03ecfdb9754acdc78862ead06a67e8605819a8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166d60f6aa340563414d33cd03ecfdb9754acdc78862ead06a67e8605819a8e8->enter($__internal_166d60f6aa340563414d33cd03ecfdb9754acdc78862ead06a67e8605819a8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5c91e28c80c3e04a63604a7a9b55f4a93039787b31f6e00738cc70c044447f5d->leave($__internal_5c91e28c80c3e04a63604a7a9b55f4a93039787b31f6e00738cc70c044447f5d_prof);

        
        $__internal_166d60f6aa340563414d33cd03ecfdb9754acdc78862ead06a67e8605819a8e8->leave($__internal_166d60f6aa340563414d33cd03ecfdb9754acdc78862ead06a67e8605819a8e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
