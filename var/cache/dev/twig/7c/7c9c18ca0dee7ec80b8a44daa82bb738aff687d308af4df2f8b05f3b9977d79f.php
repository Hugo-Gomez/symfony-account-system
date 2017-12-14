<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c4a4877b7273c9c43301159d3078640d26032e5615d58a659271c14da9ff16a0 extends Twig_Template
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
        $__internal_3823705416d1c644df904db80e49c146c96ad5544621b0f182b9ba77c0ecf52e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3823705416d1c644df904db80e49c146c96ad5544621b0f182b9ba77c0ecf52e->enter($__internal_3823705416d1c644df904db80e49c146c96ad5544621b0f182b9ba77c0ecf52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c3d3eb6222bd2ede84c042330b6d66c260655cd9d3bd1b701004915b2d3602d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d3eb6222bd2ede84c042330b6d66c260655cd9d3bd1b701004915b2d3602d0->enter($__internal_c3d3eb6222bd2ede84c042330b6d66c260655cd9d3bd1b701004915b2d3602d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3823705416d1c644df904db80e49c146c96ad5544621b0f182b9ba77c0ecf52e->leave($__internal_3823705416d1c644df904db80e49c146c96ad5544621b0f182b9ba77c0ecf52e_prof);

        
        $__internal_c3d3eb6222bd2ede84c042330b6d66c260655cd9d3bd1b701004915b2d3602d0->leave($__internal_c3d3eb6222bd2ede84c042330b6d66c260655cd9d3bd1b701004915b2d3602d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
