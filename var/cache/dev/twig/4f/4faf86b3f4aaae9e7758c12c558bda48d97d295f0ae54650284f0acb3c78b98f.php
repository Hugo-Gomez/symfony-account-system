<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_63d9c866b577d1f7df0c675067bdfa0f0aac7072434adb1906ffbca9956c40d3 extends Twig_Template
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
        $__internal_cee7640f401957e02d270d75b8e2a983ee105cd0c1389a789b895cb8fbe18673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee7640f401957e02d270d75b8e2a983ee105cd0c1389a789b895cb8fbe18673->enter($__internal_cee7640f401957e02d270d75b8e2a983ee105cd0c1389a789b895cb8fbe18673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_8fa1043a95978447d16013517f54dc395c9e5e9748d3fa1528260624bbe692d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa1043a95978447d16013517f54dc395c9e5e9748d3fa1528260624bbe692d9->enter($__internal_8fa1043a95978447d16013517f54dc395c9e5e9748d3fa1528260624bbe692d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_cee7640f401957e02d270d75b8e2a983ee105cd0c1389a789b895cb8fbe18673->leave($__internal_cee7640f401957e02d270d75b8e2a983ee105cd0c1389a789b895cb8fbe18673_prof);

        
        $__internal_8fa1043a95978447d16013517f54dc395c9e5e9748d3fa1528260624bbe692d9->leave($__internal_8fa1043a95978447d16013517f54dc395c9e5e9748d3fa1528260624bbe692d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
