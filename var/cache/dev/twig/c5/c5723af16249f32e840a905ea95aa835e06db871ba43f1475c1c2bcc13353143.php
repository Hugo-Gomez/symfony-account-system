<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c321728f4cca836916057f9e8237a7b1ede76f9a89c88ddbab268c19d60c9803 extends Twig_Template
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
        $__internal_ae3c3e939f4cf2ad0b1265f8d31f20fa97f2b29e28debb897dc85843dc2c70c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3c3e939f4cf2ad0b1265f8d31f20fa97f2b29e28debb897dc85843dc2c70c2->enter($__internal_ae3c3e939f4cf2ad0b1265f8d31f20fa97f2b29e28debb897dc85843dc2c70c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_71d78d33bfed70ec97bc2ebe894e6d44576fa734f23488d19e151d779caf825b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d78d33bfed70ec97bc2ebe894e6d44576fa734f23488d19e151d779caf825b->enter($__internal_71d78d33bfed70ec97bc2ebe894e6d44576fa734f23488d19e151d779caf825b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ae3c3e939f4cf2ad0b1265f8d31f20fa97f2b29e28debb897dc85843dc2c70c2->leave($__internal_ae3c3e939f4cf2ad0b1265f8d31f20fa97f2b29e28debb897dc85843dc2c70c2_prof);

        
        $__internal_71d78d33bfed70ec97bc2ebe894e6d44576fa734f23488d19e151d779caf825b->leave($__internal_71d78d33bfed70ec97bc2ebe894e6d44576fa734f23488d19e151d779caf825b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
