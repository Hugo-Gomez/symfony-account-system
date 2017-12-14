<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_96d6734b5f9fc89815e79b0a4a7549cc6408a7f0cf7b9425c174ab4c697f0bfa extends Twig_Template
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
        $__internal_ab08c1cd82e1fc899bcd35aa836ba186329bcbbda043641d0598a2401f96a27f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab08c1cd82e1fc899bcd35aa836ba186329bcbbda043641d0598a2401f96a27f->enter($__internal_ab08c1cd82e1fc899bcd35aa836ba186329bcbbda043641d0598a2401f96a27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_bf1e645e3ca46c0eac5bc97bede0a94983dbb34082b5b0706f449836eff2f0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1e645e3ca46c0eac5bc97bede0a94983dbb34082b5b0706f449836eff2f0c9->enter($__internal_bf1e645e3ca46c0eac5bc97bede0a94983dbb34082b5b0706f449836eff2f0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ab08c1cd82e1fc899bcd35aa836ba186329bcbbda043641d0598a2401f96a27f->leave($__internal_ab08c1cd82e1fc899bcd35aa836ba186329bcbbda043641d0598a2401f96a27f_prof);

        
        $__internal_bf1e645e3ca46c0eac5bc97bede0a94983dbb34082b5b0706f449836eff2f0c9->leave($__internal_bf1e645e3ca46c0eac5bc97bede0a94983dbb34082b5b0706f449836eff2f0c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
