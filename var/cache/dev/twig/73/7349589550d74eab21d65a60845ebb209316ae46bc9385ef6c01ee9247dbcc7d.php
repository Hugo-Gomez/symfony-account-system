<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_675697d4a91571e44653f70a9b31e507782709e46c39cdc2752ee6188e4b0464 extends Twig_Template
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
        $__internal_f9a12cf7c47e578ecebcbfd25f852f13b3ee06a751f083892bdc118dcf372822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a12cf7c47e578ecebcbfd25f852f13b3ee06a751f083892bdc118dcf372822->enter($__internal_f9a12cf7c47e578ecebcbfd25f852f13b3ee06a751f083892bdc118dcf372822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_96bd061383bd6f62021890f65cdc901e3f42a29a61fd67ac04b0486b56e34ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96bd061383bd6f62021890f65cdc901e3f42a29a61fd67ac04b0486b56e34ac1->enter($__internal_96bd061383bd6f62021890f65cdc901e3f42a29a61fd67ac04b0486b56e34ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f9a12cf7c47e578ecebcbfd25f852f13b3ee06a751f083892bdc118dcf372822->leave($__internal_f9a12cf7c47e578ecebcbfd25f852f13b3ee06a751f083892bdc118dcf372822_prof);

        
        $__internal_96bd061383bd6f62021890f65cdc901e3f42a29a61fd67ac04b0486b56e34ac1->leave($__internal_96bd061383bd6f62021890f65cdc901e3f42a29a61fd67ac04b0486b56e34ac1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
