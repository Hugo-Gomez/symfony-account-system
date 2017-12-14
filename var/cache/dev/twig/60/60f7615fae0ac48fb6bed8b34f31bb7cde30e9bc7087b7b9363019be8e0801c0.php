<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_fa669e10edbd8493e22687c493ef444df1db78243888fc08e6eef5b0dc0fcc0c extends Twig_Template
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
        $__internal_65a4384dd887cbf70c0ceb6cc60cdaac2ebc281c7c172948acad60d4098ed558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a4384dd887cbf70c0ceb6cc60cdaac2ebc281c7c172948acad60d4098ed558->enter($__internal_65a4384dd887cbf70c0ceb6cc60cdaac2ebc281c7c172948acad60d4098ed558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_bab5ab26e28c14871bbf1d680bc0c62c12a0216a84229d5168d4a19749b4a714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab5ab26e28c14871bbf1d680bc0c62c12a0216a84229d5168d4a19749b4a714->enter($__internal_bab5ab26e28c14871bbf1d680bc0c62c12a0216a84229d5168d4a19749b4a714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_65a4384dd887cbf70c0ceb6cc60cdaac2ebc281c7c172948acad60d4098ed558->leave($__internal_65a4384dd887cbf70c0ceb6cc60cdaac2ebc281c7c172948acad60d4098ed558_prof);

        
        $__internal_bab5ab26e28c14871bbf1d680bc0c62c12a0216a84229d5168d4a19749b4a714->leave($__internal_bab5ab26e28c14871bbf1d680bc0c62c12a0216a84229d5168d4a19749b4a714_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
