<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7320bfab1c3e3a1e1c24a20e9ac9f9b84046759e35ac214af1ce601bc6db4810 extends Twig_Template
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
        $__internal_6341c29cc31273f9f58e4b50577592cf9550bb0504b6c662d60942a551666b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6341c29cc31273f9f58e4b50577592cf9550bb0504b6c662d60942a551666b4b->enter($__internal_6341c29cc31273f9f58e4b50577592cf9550bb0504b6c662d60942a551666b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_dd7315b2734020d2c6349bb6b03c4249451e5889a4f9378574601febd033f954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7315b2734020d2c6349bb6b03c4249451e5889a4f9378574601febd033f954->enter($__internal_dd7315b2734020d2c6349bb6b03c4249451e5889a4f9378574601febd033f954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_6341c29cc31273f9f58e4b50577592cf9550bb0504b6c662d60942a551666b4b->leave($__internal_6341c29cc31273f9f58e4b50577592cf9550bb0504b6c662d60942a551666b4b_prof);

        
        $__internal_dd7315b2734020d2c6349bb6b03c4249451e5889a4f9378574601febd033f954->leave($__internal_dd7315b2734020d2c6349bb6b03c4249451e5889a4f9378574601febd033f954_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
