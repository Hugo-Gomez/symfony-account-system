<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4766e4281c2331cbc0413b08ba3d2e4e4d7ea7a34ed0bafc06f1cf568f6fc5c7 extends Twig_Template
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
        $__internal_bb4c6af4e8a6a3cb47c9fdc19e0fdc740b655e4a3011f24ff0ae071154bd76bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4c6af4e8a6a3cb47c9fdc19e0fdc740b655e4a3011f24ff0ae071154bd76bb->enter($__internal_bb4c6af4e8a6a3cb47c9fdc19e0fdc740b655e4a3011f24ff0ae071154bd76bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_02916852a3f168477892e1f736b203c9f25984465d8a99bdb7712650d904ddc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02916852a3f168477892e1f736b203c9f25984465d8a99bdb7712650d904ddc9->enter($__internal_02916852a3f168477892e1f736b203c9f25984465d8a99bdb7712650d904ddc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_bb4c6af4e8a6a3cb47c9fdc19e0fdc740b655e4a3011f24ff0ae071154bd76bb->leave($__internal_bb4c6af4e8a6a3cb47c9fdc19e0fdc740b655e4a3011f24ff0ae071154bd76bb_prof);

        
        $__internal_02916852a3f168477892e1f736b203c9f25984465d8a99bdb7712650d904ddc9->leave($__internal_02916852a3f168477892e1f736b203c9f25984465d8a99bdb7712650d904ddc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
