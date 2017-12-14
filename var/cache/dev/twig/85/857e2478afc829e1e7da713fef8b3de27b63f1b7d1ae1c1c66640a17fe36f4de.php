<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_c06c1da63196cb0ca65140c263874f17d68310b19ddc85914394086447d58ba7 extends Twig_Template
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
        $__internal_e1b8c61fab2903addff96b02c3e85dcac373e693537fe937f4328349a98acf82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b8c61fab2903addff96b02c3e85dcac373e693537fe937f4328349a98acf82->enter($__internal_e1b8c61fab2903addff96b02c3e85dcac373e693537fe937f4328349a98acf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_aee5f8d1b4a503a76266afedfe8de23289153757fb4c8f6107af47f4c505d8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee5f8d1b4a503a76266afedfe8de23289153757fb4c8f6107af47f4c505d8ab->enter($__internal_aee5f8d1b4a503a76266afedfe8de23289153757fb4c8f6107af47f4c505d8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_e1b8c61fab2903addff96b02c3e85dcac373e693537fe937f4328349a98acf82->leave($__internal_e1b8c61fab2903addff96b02c3e85dcac373e693537fe937f4328349a98acf82_prof);

        
        $__internal_aee5f8d1b4a503a76266afedfe8de23289153757fb4c8f6107af47f4c505d8ab->leave($__internal_aee5f8d1b4a503a76266afedfe8de23289153757fb4c8f6107af47f4c505d8ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
