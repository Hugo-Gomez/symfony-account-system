<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a60ef01151a37c7b2f0e9a9c9ad62acda4a73992d3c4f98575012be04ba360e9 extends Twig_Template
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
        $__internal_6ade3e5e0122e6e08b34c5b3ff2184fe72d887db3870c8e82385ab32085291a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ade3e5e0122e6e08b34c5b3ff2184fe72d887db3870c8e82385ab32085291a6->enter($__internal_6ade3e5e0122e6e08b34c5b3ff2184fe72d887db3870c8e82385ab32085291a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_0e3d95d30d185fbb03c47fcf1daf9d32eb0b3cd14bd7e16cb2b7f5bf146a3af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3d95d30d185fbb03c47fcf1daf9d32eb0b3cd14bd7e16cb2b7f5bf146a3af0->enter($__internal_0e3d95d30d185fbb03c47fcf1daf9d32eb0b3cd14bd7e16cb2b7f5bf146a3af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_6ade3e5e0122e6e08b34c5b3ff2184fe72d887db3870c8e82385ab32085291a6->leave($__internal_6ade3e5e0122e6e08b34c5b3ff2184fe72d887db3870c8e82385ab32085291a6_prof);

        
        $__internal_0e3d95d30d185fbb03c47fcf1daf9d32eb0b3cd14bd7e16cb2b7f5bf146a3af0->leave($__internal_0e3d95d30d185fbb03c47fcf1daf9d32eb0b3cd14bd7e16cb2b7f5bf146a3af0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
