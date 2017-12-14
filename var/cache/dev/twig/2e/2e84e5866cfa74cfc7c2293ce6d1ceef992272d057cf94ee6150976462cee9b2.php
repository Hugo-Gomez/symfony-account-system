<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_4928ce1342ff126272828a42ddf569c8f207cabaf9bf833bdf4e1e35a8ed1a05 extends Twig_Template
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
        $__internal_597dfc0acee6048d9e19958341f3275d57537304bf60ca347b3e6711ad638c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_597dfc0acee6048d9e19958341f3275d57537304bf60ca347b3e6711ad638c6a->enter($__internal_597dfc0acee6048d9e19958341f3275d57537304bf60ca347b3e6711ad638c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f02cf48d4613871254432ee0121ee63b77189d410cad621751151fd43aa6f4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02cf48d4613871254432ee0121ee63b77189d410cad621751151fd43aa6f4f4->enter($__internal_f02cf48d4613871254432ee0121ee63b77189d410cad621751151fd43aa6f4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_597dfc0acee6048d9e19958341f3275d57537304bf60ca347b3e6711ad638c6a->leave($__internal_597dfc0acee6048d9e19958341f3275d57537304bf60ca347b3e6711ad638c6a_prof);

        
        $__internal_f02cf48d4613871254432ee0121ee63b77189d410cad621751151fd43aa6f4f4->leave($__internal_f02cf48d4613871254432ee0121ee63b77189d410cad621751151fd43aa6f4f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
