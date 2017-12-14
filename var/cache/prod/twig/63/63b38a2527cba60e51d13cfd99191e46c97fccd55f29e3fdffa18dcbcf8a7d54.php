<?php

/* account/assignBeneficiary.html.twig */
class __TwigTemplate_a5a2ac994e7a18efe5f40dcbe32452cfa10b55bf993bd548d7627d6c19184323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/assignBeneficiary.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b295022d252326109fc2e1c04c9eb8196d56190a4abf18b4c202be29ef2bdfbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b295022d252326109fc2e1c04c9eb8196d56190a4abf18b4c202be29ef2bdfbd->enter($__internal_b295022d252326109fc2e1c04c9eb8196d56190a4abf18b4c202be29ef2bdfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/assignBeneficiary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b295022d252326109fc2e1c04c9eb8196d56190a4abf18b4c202be29ef2bdfbd->leave($__internal_b295022d252326109fc2e1c04c9eb8196d56190a4abf18b4c202be29ef2bdfbd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ef44ccdf93b7c07dd9f3c85b2de02fd8a0b4c2b47ceb964bfde512180038885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef44ccdf93b7c07dd9f3c85b2de02fd8a0b4c2b47ceb964bfde512180038885->enter($__internal_1ef44ccdf93b7c07dd9f3c85b2de02fd8a0b4c2b47ceb964bfde512180038885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Beneficiary assignement</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["assignForm"] ?? $this->getContext($context, "assignForm")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["assignForm"] ?? $this->getContext($context, "assignForm")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["assignForm"] ?? $this->getContext($context, "assignForm")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1ef44ccdf93b7c07dd9f3c85b2de02fd8a0b4c2b47ceb964bfde512180038885->leave($__internal_1ef44ccdf93b7c07dd9f3c85b2de02fd8a0b4c2b47ceb964bfde512180038885_prof);

    }

    public function getTemplateName()
    {
        return "account/assignBeneficiary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Beneficiary assignement</h1>

    {{ form_start(assignForm) }}
        {{ form_widget(assignForm) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(assignForm) }}

    <ul>
        <li>
            <a href=\"{{ path('account_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "account/assignBeneficiary.html.twig", "/symfony/app/Resources/views/account/assignBeneficiary.html.twig");
    }
}
