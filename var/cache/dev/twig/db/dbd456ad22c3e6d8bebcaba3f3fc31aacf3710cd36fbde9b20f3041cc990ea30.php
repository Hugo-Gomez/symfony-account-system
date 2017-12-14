<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_917378fb36c2c840c38c7c1701b874bbcd170797838a2dcd931b3304ca492010 extends Twig_Template
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
        $__internal_7819ed8bf8150630f2cfa9a95c6d888f5d5d440a0aae7b2e4617b0479bca08a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7819ed8bf8150630f2cfa9a95c6d888f5d5d440a0aae7b2e4617b0479bca08a8->enter($__internal_7819ed8bf8150630f2cfa9a95c6d888f5d5d440a0aae7b2e4617b0479bca08a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_625911709e52208914e4d458a5ee2a31b9db6ac3cec1dd13ea4c9514c9c03c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625911709e52208914e4d458a5ee2a31b9db6ac3cec1dd13ea4c9514c9c03c83->enter($__internal_625911709e52208914e4d458a5ee2a31b9db6ac3cec1dd13ea4c9514c9c03c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7819ed8bf8150630f2cfa9a95c6d888f5d5d440a0aae7b2e4617b0479bca08a8->leave($__internal_7819ed8bf8150630f2cfa9a95c6d888f5d5d440a0aae7b2e4617b0479bca08a8_prof);

        
        $__internal_625911709e52208914e4d458a5ee2a31b9db6ac3cec1dd13ea4c9514c9c03c83->leave($__internal_625911709e52208914e4d458a5ee2a31b9db6ac3cec1dd13ea4c9514c9c03c83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
