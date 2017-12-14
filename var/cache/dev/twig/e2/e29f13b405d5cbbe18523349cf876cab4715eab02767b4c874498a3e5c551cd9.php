<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a05607bc885efb39cf7e908b43e9cf671103fce72e455b569b41cf9c0216d939 extends Twig_Template
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
        $__internal_19749ed3441cd18d45ce960afab84c590e3d9fa784bb2290f864cda025a62eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19749ed3441cd18d45ce960afab84c590e3d9fa784bb2290f864cda025a62eef->enter($__internal_19749ed3441cd18d45ce960afab84c590e3d9fa784bb2290f864cda025a62eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a3d304ad8bf761e55c33cf488271a839c8d08d3935b14478cce17cdce772a049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d304ad8bf761e55c33cf488271a839c8d08d3935b14478cce17cdce772a049->enter($__internal_a3d304ad8bf761e55c33cf488271a839c8d08d3935b14478cce17cdce772a049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_19749ed3441cd18d45ce960afab84c590e3d9fa784bb2290f864cda025a62eef->leave($__internal_19749ed3441cd18d45ce960afab84c590e3d9fa784bb2290f864cda025a62eef_prof);

        
        $__internal_a3d304ad8bf761e55c33cf488271a839c8d08d3935b14478cce17cdce772a049->leave($__internal_a3d304ad8bf761e55c33cf488271a839c8d08d3935b14478cce17cdce772a049_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
