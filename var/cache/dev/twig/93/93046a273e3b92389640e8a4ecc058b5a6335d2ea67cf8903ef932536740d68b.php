<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ef0ede27d5d4643bbe555f97891b1cd35767b8fae92a2310d445ba161ce5175f extends Twig_Template
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
        $__internal_ba940afd95d17883a4e022ab50dc9c011e6f8dba31ff9f4a3d1f0a68e6c0f50c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba940afd95d17883a4e022ab50dc9c011e6f8dba31ff9f4a3d1f0a68e6c0f50c->enter($__internal_ba940afd95d17883a4e022ab50dc9c011e6f8dba31ff9f4a3d1f0a68e6c0f50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_54c032a09fa9ea5d4c80bfc9466f6966ffd48cad190b252073be7972560cfe1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c032a09fa9ea5d4c80bfc9466f6966ffd48cad190b252073be7972560cfe1b->enter($__internal_54c032a09fa9ea5d4c80bfc9466f6966ffd48cad190b252073be7972560cfe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ba940afd95d17883a4e022ab50dc9c011e6f8dba31ff9f4a3d1f0a68e6c0f50c->leave($__internal_ba940afd95d17883a4e022ab50dc9c011e6f8dba31ff9f4a3d1f0a68e6c0f50c_prof);

        
        $__internal_54c032a09fa9ea5d4c80bfc9466f6966ffd48cad190b252073be7972560cfe1b->leave($__internal_54c032a09fa9ea5d4c80bfc9466f6966ffd48cad190b252073be7972560cfe1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
