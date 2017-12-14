<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_3f67ef230faf69fe84ead6c9049bab57593ee26f35959d44301ce6a795568ed5 extends Twig_Template
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
        $__internal_c9b3d0aeafe9cb31121d4004150e2fe25f292757e0eb3c339cf707d681880e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b3d0aeafe9cb31121d4004150e2fe25f292757e0eb3c339cf707d681880e85->enter($__internal_c9b3d0aeafe9cb31121d4004150e2fe25f292757e0eb3c339cf707d681880e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_63c7d5c49d34401b6ca0f03386a1c8d7dd9f3cc50b7ebccf1ee7541467924afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c7d5c49d34401b6ca0f03386a1c8d7dd9f3cc50b7ebccf1ee7541467924afd->enter($__internal_63c7d5c49d34401b6ca0f03386a1c8d7dd9f3cc50b7ebccf1ee7541467924afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c9b3d0aeafe9cb31121d4004150e2fe25f292757e0eb3c339cf707d681880e85->leave($__internal_c9b3d0aeafe9cb31121d4004150e2fe25f292757e0eb3c339cf707d681880e85_prof);

        
        $__internal_63c7d5c49d34401b6ca0f03386a1c8d7dd9f3cc50b7ebccf1ee7541467924afd->leave($__internal_63c7d5c49d34401b6ca0f03386a1c8d7dd9f3cc50b7ebccf1ee7541467924afd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
