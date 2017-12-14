<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6269d85483bc1213693de2a21d09cc2c761d848c66a2081274999deb532242a3 extends Twig_Template
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
        $__internal_6d67ceab41e7df90e4a820a819207fea127c3724c4e9566eab0f2555c34b1c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d67ceab41e7df90e4a820a819207fea127c3724c4e9566eab0f2555c34b1c7e->enter($__internal_6d67ceab41e7df90e4a820a819207fea127c3724c4e9566eab0f2555c34b1c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_cec5d35e6509b65fbc6f9cf75b4d1539376be8f456bc885d902e4b221c3dc94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec5d35e6509b65fbc6f9cf75b4d1539376be8f456bc885d902e4b221c3dc94a->enter($__internal_cec5d35e6509b65fbc6f9cf75b4d1539376be8f456bc885d902e4b221c3dc94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6d67ceab41e7df90e4a820a819207fea127c3724c4e9566eab0f2555c34b1c7e->leave($__internal_6d67ceab41e7df90e4a820a819207fea127c3724c4e9566eab0f2555c34b1c7e_prof);

        
        $__internal_cec5d35e6509b65fbc6f9cf75b4d1539376be8f456bc885d902e4b221c3dc94a->leave($__internal_cec5d35e6509b65fbc6f9cf75b4d1539376be8f456bc885d902e4b221c3dc94a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
