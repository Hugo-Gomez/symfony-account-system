<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_18a2c10d31833b3cc9f8f6548c7fdaba59e05bb62f09dff42d60f1122f377412 extends Twig_Template
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
        $__internal_ed801c2a29171c2735a41551ef5d82b76c6da738d3f2732678de53bc2712774c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed801c2a29171c2735a41551ef5d82b76c6da738d3f2732678de53bc2712774c->enter($__internal_ed801c2a29171c2735a41551ef5d82b76c6da738d3f2732678de53bc2712774c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_22b2a5d11f5e4b5f304f4138851b0536cec880fb4964e9d97faed25f17b2e569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b2a5d11f5e4b5f304f4138851b0536cec880fb4964e9d97faed25f17b2e569->enter($__internal_22b2a5d11f5e4b5f304f4138851b0536cec880fb4964e9d97faed25f17b2e569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ed801c2a29171c2735a41551ef5d82b76c6da738d3f2732678de53bc2712774c->leave($__internal_ed801c2a29171c2735a41551ef5d82b76c6da738d3f2732678de53bc2712774c_prof);

        
        $__internal_22b2a5d11f5e4b5f304f4138851b0536cec880fb4964e9d97faed25f17b2e569->leave($__internal_22b2a5d11f5e4b5f304f4138851b0536cec880fb4964e9d97faed25f17b2e569_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
