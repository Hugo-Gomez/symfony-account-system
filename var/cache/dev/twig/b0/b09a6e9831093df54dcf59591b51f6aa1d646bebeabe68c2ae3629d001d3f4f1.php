<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_eac26bc242fd5ed825e4cb1012c264a10a95312ef02c5c0fa0e8c84e74118b06 extends Twig_Template
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
        $__internal_e89d4087eb13e8515abd5c00f5ce007c61d8b6ce550ab38c9a54de0d97a72ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e89d4087eb13e8515abd5c00f5ce007c61d8b6ce550ab38c9a54de0d97a72ec4->enter($__internal_e89d4087eb13e8515abd5c00f5ce007c61d8b6ce550ab38c9a54de0d97a72ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b8b196c0b35ec31b21ea48f140a202c72f6d1f66e7f951fdcc46d2872fd7498a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b196c0b35ec31b21ea48f140a202c72f6d1f66e7f951fdcc46d2872fd7498a->enter($__internal_b8b196c0b35ec31b21ea48f140a202c72f6d1f66e7f951fdcc46d2872fd7498a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e89d4087eb13e8515abd5c00f5ce007c61d8b6ce550ab38c9a54de0d97a72ec4->leave($__internal_e89d4087eb13e8515abd5c00f5ce007c61d8b6ce550ab38c9a54de0d97a72ec4_prof);

        
        $__internal_b8b196c0b35ec31b21ea48f140a202c72f6d1f66e7f951fdcc46d2872fd7498a->leave($__internal_b8b196c0b35ec31b21ea48f140a202c72f6d1f66e7f951fdcc46d2872fd7498a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
