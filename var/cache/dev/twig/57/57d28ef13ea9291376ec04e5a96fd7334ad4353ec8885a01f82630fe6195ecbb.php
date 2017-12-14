<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3bf5ccbc147bdf382bca857b61e41beb608292eebe58d38d7cbdb47643bf0b77 extends Twig_Template
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
        $__internal_e52b0096a696e835bfcd6be24de258d7e143f84f49bf90b35b16db63b7d6701f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52b0096a696e835bfcd6be24de258d7e143f84f49bf90b35b16db63b7d6701f->enter($__internal_e52b0096a696e835bfcd6be24de258d7e143f84f49bf90b35b16db63b7d6701f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5399d394fce7d5faf427fe92aa8ec60a5309894160a19a8cd778cd2f59fe4803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5399d394fce7d5faf427fe92aa8ec60a5309894160a19a8cd778cd2f59fe4803->enter($__internal_5399d394fce7d5faf427fe92aa8ec60a5309894160a19a8cd778cd2f59fe4803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e52b0096a696e835bfcd6be24de258d7e143f84f49bf90b35b16db63b7d6701f->leave($__internal_e52b0096a696e835bfcd6be24de258d7e143f84f49bf90b35b16db63b7d6701f_prof);

        
        $__internal_5399d394fce7d5faf427fe92aa8ec60a5309894160a19a8cd778cd2f59fe4803->leave($__internal_5399d394fce7d5faf427fe92aa8ec60a5309894160a19a8cd778cd2f59fe4803_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
