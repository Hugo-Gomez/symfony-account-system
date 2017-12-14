<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_39c16cf552a586d270508450e264879d6bc3cb376bd9ad7d16980d1d84fd4260 extends Twig_Template
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
        $__internal_177d6c8ab03fa5003444ffecff2b0c9a1f8c0faa77087a76138e942ae604bca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177d6c8ab03fa5003444ffecff2b0c9a1f8c0faa77087a76138e942ae604bca6->enter($__internal_177d6c8ab03fa5003444ffecff2b0c9a1f8c0faa77087a76138e942ae604bca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ebaa6b9f67a1384ca5ff1876760b9328401637f2ffc9cdd075eba926cd6f8788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebaa6b9f67a1384ca5ff1876760b9328401637f2ffc9cdd075eba926cd6f8788->enter($__internal_ebaa6b9f67a1384ca5ff1876760b9328401637f2ffc9cdd075eba926cd6f8788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_177d6c8ab03fa5003444ffecff2b0c9a1f8c0faa77087a76138e942ae604bca6->leave($__internal_177d6c8ab03fa5003444ffecff2b0c9a1f8c0faa77087a76138e942ae604bca6_prof);

        
        $__internal_ebaa6b9f67a1384ca5ff1876760b9328401637f2ffc9cdd075eba926cd6f8788->leave($__internal_ebaa6b9f67a1384ca5ff1876760b9328401637f2ffc9cdd075eba926cd6f8788_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
