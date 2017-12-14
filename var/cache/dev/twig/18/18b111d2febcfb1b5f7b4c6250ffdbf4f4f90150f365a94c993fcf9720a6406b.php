<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9b9b747220cade568fd7609e95856fbdfc6999a1447edfc2182e0a40bc04cf47 extends Twig_Template
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
        $__internal_1af4a44d73616eda15c120760fa31860c548be9b2599037bd40f6480df3e4a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af4a44d73616eda15c120760fa31860c548be9b2599037bd40f6480df3e4a75->enter($__internal_1af4a44d73616eda15c120760fa31860c548be9b2599037bd40f6480df3e4a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_20bfff861efd02f20e4ca130077a3038e48bcbb8b610165926aca32578ffc3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bfff861efd02f20e4ca130077a3038e48bcbb8b610165926aca32578ffc3d0->enter($__internal_20bfff861efd02f20e4ca130077a3038e48bcbb8b610165926aca32578ffc3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1af4a44d73616eda15c120760fa31860c548be9b2599037bd40f6480df3e4a75->leave($__internal_1af4a44d73616eda15c120760fa31860c548be9b2599037bd40f6480df3e4a75_prof);

        
        $__internal_20bfff861efd02f20e4ca130077a3038e48bcbb8b610165926aca32578ffc3d0->leave($__internal_20bfff861efd02f20e4ca130077a3038e48bcbb8b610165926aca32578ffc3d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
