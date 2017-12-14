<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_8b14cc59e2f0fb4662e2ca6d176d3ad2ebe22da6db0422cf8a280adffea63c0d extends Twig_Template
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
        $__internal_6c23ce68c6544350cec8e4f24d8d454f0daf6df06a3715df348c7bf6edb85542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c23ce68c6544350cec8e4f24d8d454f0daf6df06a3715df348c7bf6edb85542->enter($__internal_6c23ce68c6544350cec8e4f24d8d454f0daf6df06a3715df348c7bf6edb85542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_41385d5b68deaeb2b00bcfafa36610f0a04cdce5ff4ca61453cca0f1ed069a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41385d5b68deaeb2b00bcfafa36610f0a04cdce5ff4ca61453cca0f1ed069a36->enter($__internal_41385d5b68deaeb2b00bcfafa36610f0a04cdce5ff4ca61453cca0f1ed069a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6c23ce68c6544350cec8e4f24d8d454f0daf6df06a3715df348c7bf6edb85542->leave($__internal_6c23ce68c6544350cec8e4f24d8d454f0daf6df06a3715df348c7bf6edb85542_prof);

        
        $__internal_41385d5b68deaeb2b00bcfafa36610f0a04cdce5ff4ca61453cca0f1ed069a36->leave($__internal_41385d5b68deaeb2b00bcfafa36610f0a04cdce5ff4ca61453cca0f1ed069a36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
