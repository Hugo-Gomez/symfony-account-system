<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2f4dc74fab9706d879d5108094f7db1f690380cb7db2992b2ad1992f38d4e729 extends Twig_Template
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
        $__internal_c8d2b8f3c705a09df84e21472d8b8626b35ee6a28ad684e62819425cb1322e9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d2b8f3c705a09df84e21472d8b8626b35ee6a28ad684e62819425cb1322e9c->enter($__internal_c8d2b8f3c705a09df84e21472d8b8626b35ee6a28ad684e62819425cb1322e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7bf78432b838d160c2820a0a3e41396e345e3e473069848ed95ecaacce4bc136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf78432b838d160c2820a0a3e41396e345e3e473069848ed95ecaacce4bc136->enter($__internal_7bf78432b838d160c2820a0a3e41396e345e3e473069848ed95ecaacce4bc136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c8d2b8f3c705a09df84e21472d8b8626b35ee6a28ad684e62819425cb1322e9c->leave($__internal_c8d2b8f3c705a09df84e21472d8b8626b35ee6a28ad684e62819425cb1322e9c_prof);

        
        $__internal_7bf78432b838d160c2820a0a3e41396e345e3e473069848ed95ecaacce4bc136->leave($__internal_7bf78432b838d160c2820a0a3e41396e345e3e473069848ed95ecaacce4bc136_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
