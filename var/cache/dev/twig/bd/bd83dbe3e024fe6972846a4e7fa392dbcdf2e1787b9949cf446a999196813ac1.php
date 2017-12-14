<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_beafd917d60f4e756cb29eea7f90157baf49c7b82c371bb0724b6f6054a0c407 extends Twig_Template
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
        $__internal_2c9d1cf501696a9180f8f2536f6184733e6947e2992bef63c98b0e4e9a3adabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9d1cf501696a9180f8f2536f6184733e6947e2992bef63c98b0e4e9a3adabf->enter($__internal_2c9d1cf501696a9180f8f2536f6184733e6947e2992bef63c98b0e4e9a3adabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_cec5e68db4cb069b80c6db98cdd5cae07a0cd370b1461bdb48cc578c1e9e3dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec5e68db4cb069b80c6db98cdd5cae07a0cd370b1461bdb48cc578c1e9e3dc6->enter($__internal_cec5e68db4cb069b80c6db98cdd5cae07a0cd370b1461bdb48cc578c1e9e3dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2c9d1cf501696a9180f8f2536f6184733e6947e2992bef63c98b0e4e9a3adabf->leave($__internal_2c9d1cf501696a9180f8f2536f6184733e6947e2992bef63c98b0e4e9a3adabf_prof);

        
        $__internal_cec5e68db4cb069b80c6db98cdd5cae07a0cd370b1461bdb48cc578c1e9e3dc6->leave($__internal_cec5e68db4cb069b80c6db98cdd5cae07a0cd370b1461bdb48cc578c1e9e3dc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
