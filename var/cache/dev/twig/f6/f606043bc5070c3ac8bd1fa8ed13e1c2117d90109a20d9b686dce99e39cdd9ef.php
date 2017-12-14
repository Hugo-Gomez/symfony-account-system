<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_eb49a0d19edbe11c45df8e323f62a2c43600482c72259225b8d8d4a5dcdbb548 extends Twig_Template
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
        $__internal_09b7611d7b7bc50158a3616912cc2b824ca8458231f0c130975c28a2278e3c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09b7611d7b7bc50158a3616912cc2b824ca8458231f0c130975c28a2278e3c96->enter($__internal_09b7611d7b7bc50158a3616912cc2b824ca8458231f0c130975c28a2278e3c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_dcb8c2a1c2873048f64223a4e47261b40929159341a2695577cd30fa0f6c33cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb8c2a1c2873048f64223a4e47261b40929159341a2695577cd30fa0f6c33cb->enter($__internal_dcb8c2a1c2873048f64223a4e47261b40929159341a2695577cd30fa0f6c33cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_09b7611d7b7bc50158a3616912cc2b824ca8458231f0c130975c28a2278e3c96->leave($__internal_09b7611d7b7bc50158a3616912cc2b824ca8458231f0c130975c28a2278e3c96_prof);

        
        $__internal_dcb8c2a1c2873048f64223a4e47261b40929159341a2695577cd30fa0f6c33cb->leave($__internal_dcb8c2a1c2873048f64223a4e47261b40929159341a2695577cd30fa0f6c33cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
