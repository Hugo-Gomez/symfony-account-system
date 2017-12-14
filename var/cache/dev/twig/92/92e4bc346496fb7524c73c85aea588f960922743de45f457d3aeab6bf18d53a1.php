<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f1d5fc7537b5f9c2163807e4fcaa062369b4d6e8aaa02cedb34011460f93d0db extends Twig_Template
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
        $__internal_9231bb16b55a3638a7987dd5c60c69c501e29e91659ce1a9f9137374da9ad549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9231bb16b55a3638a7987dd5c60c69c501e29e91659ce1a9f9137374da9ad549->enter($__internal_9231bb16b55a3638a7987dd5c60c69c501e29e91659ce1a9f9137374da9ad549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_9598fcf91ce287c81a497d2cf06a2d82cbb891aed90c3a4d4eb34cafd2a6406d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9598fcf91ce287c81a497d2cf06a2d82cbb891aed90c3a4d4eb34cafd2a6406d->enter($__internal_9598fcf91ce287c81a497d2cf06a2d82cbb891aed90c3a4d4eb34cafd2a6406d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9231bb16b55a3638a7987dd5c60c69c501e29e91659ce1a9f9137374da9ad549->leave($__internal_9231bb16b55a3638a7987dd5c60c69c501e29e91659ce1a9f9137374da9ad549_prof);

        
        $__internal_9598fcf91ce287c81a497d2cf06a2d82cbb891aed90c3a4d4eb34cafd2a6406d->leave($__internal_9598fcf91ce287c81a497d2cf06a2d82cbb891aed90c3a4d4eb34cafd2a6406d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
