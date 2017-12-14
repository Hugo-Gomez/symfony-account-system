<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a2636246442180cb183975f7387e6184e0a57a12fa43f6fcd181cafc33ad0e8a extends Twig_Template
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
        $__internal_14600d5b09c293070a02d951243fcf9889c72b3c25f44f3dcaf33e1b35ab3fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14600d5b09c293070a02d951243fcf9889c72b3c25f44f3dcaf33e1b35ab3fd1->enter($__internal_14600d5b09c293070a02d951243fcf9889c72b3c25f44f3dcaf33e1b35ab3fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_87a87e7a695368b3a940c2dbb40292e1484a690d99325756e06a640c34afbede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a87e7a695368b3a940c2dbb40292e1484a690d99325756e06a640c34afbede->enter($__internal_87a87e7a695368b3a940c2dbb40292e1484a690d99325756e06a640c34afbede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_14600d5b09c293070a02d951243fcf9889c72b3c25f44f3dcaf33e1b35ab3fd1->leave($__internal_14600d5b09c293070a02d951243fcf9889c72b3c25f44f3dcaf33e1b35ab3fd1_prof);

        
        $__internal_87a87e7a695368b3a940c2dbb40292e1484a690d99325756e06a640c34afbede->leave($__internal_87a87e7a695368b3a940c2dbb40292e1484a690d99325756e06a640c34afbede_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
