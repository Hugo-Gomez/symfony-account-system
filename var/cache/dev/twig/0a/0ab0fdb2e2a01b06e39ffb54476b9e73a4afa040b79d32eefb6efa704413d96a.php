<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_23509451b0712e06d981065a9ff070337fb212d0f4f46061878079dfd0dc21cf extends Twig_Template
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
        $__internal_400facb89d34e93f1bc9d7544f877af278838bab386d0d926882772b44e0fad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400facb89d34e93f1bc9d7544f877af278838bab386d0d926882772b44e0fad1->enter($__internal_400facb89d34e93f1bc9d7544f877af278838bab386d0d926882772b44e0fad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_5ec814c26d7e19471ded191d4fa54ee206ff703d577a011d051fe60388829a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec814c26d7e19471ded191d4fa54ee206ff703d577a011d051fe60388829a96->enter($__internal_5ec814c26d7e19471ded191d4fa54ee206ff703d577a011d051fe60388829a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_400facb89d34e93f1bc9d7544f877af278838bab386d0d926882772b44e0fad1->leave($__internal_400facb89d34e93f1bc9d7544f877af278838bab386d0d926882772b44e0fad1_prof);

        
        $__internal_5ec814c26d7e19471ded191d4fa54ee206ff703d577a011d051fe60388829a96->leave($__internal_5ec814c26d7e19471ded191d4fa54ee206ff703d577a011d051fe60388829a96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
