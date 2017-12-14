<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6990b8847cc1fcb566f301b151d8ecde41ab75cb160ab40018d11c7b5595a5a3 extends Twig_Template
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
        $__internal_3d73a3b14c630111697e826d58a37e9e2af16f775b90fbbc9aaf9830b8c525ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d73a3b14c630111697e826d58a37e9e2af16f775b90fbbc9aaf9830b8c525ec->enter($__internal_3d73a3b14c630111697e826d58a37e9e2af16f775b90fbbc9aaf9830b8c525ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_2f337b19d51c20626cfbb2b05e2f721944112d05b4ee7008a3529009bcb56d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f337b19d51c20626cfbb2b05e2f721944112d05b4ee7008a3529009bcb56d7b->enter($__internal_2f337b19d51c20626cfbb2b05e2f721944112d05b4ee7008a3529009bcb56d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3d73a3b14c630111697e826d58a37e9e2af16f775b90fbbc9aaf9830b8c525ec->leave($__internal_3d73a3b14c630111697e826d58a37e9e2af16f775b90fbbc9aaf9830b8c525ec_prof);

        
        $__internal_2f337b19d51c20626cfbb2b05e2f721944112d05b4ee7008a3529009bcb56d7b->leave($__internal_2f337b19d51c20626cfbb2b05e2f721944112d05b4ee7008a3529009bcb56d7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
