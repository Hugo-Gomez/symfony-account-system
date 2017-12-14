<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_ca60fc9741608381959867970fb144d94fe8e886339932e326050277b7001a26 extends Twig_Template
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
        $__internal_7710080fb6215db6341bc50c4fe48ba62f8c321a26b9ba1e32c245f002c1fed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7710080fb6215db6341bc50c4fe48ba62f8c321a26b9ba1e32c245f002c1fed0->enter($__internal_7710080fb6215db6341bc50c4fe48ba62f8c321a26b9ba1e32c245f002c1fed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_e3ce04f908d9e574fe68551636166fd449c3c28d17f9d8b0f507e33287e2185f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ce04f908d9e574fe68551636166fd449c3c28d17f9d8b0f507e33287e2185f->enter($__internal_e3ce04f908d9e574fe68551636166fd449c3c28d17f9d8b0f507e33287e2185f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7710080fb6215db6341bc50c4fe48ba62f8c321a26b9ba1e32c245f002c1fed0->leave($__internal_7710080fb6215db6341bc50c4fe48ba62f8c321a26b9ba1e32c245f002c1fed0_prof);

        
        $__internal_e3ce04f908d9e574fe68551636166fd449c3c28d17f9d8b0f507e33287e2185f->leave($__internal_e3ce04f908d9e574fe68551636166fd449c3c28d17f9d8b0f507e33287e2185f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
