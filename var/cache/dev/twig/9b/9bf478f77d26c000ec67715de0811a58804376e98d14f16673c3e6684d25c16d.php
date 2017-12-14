<?php

/* :account:assignBeneficiary.html.twig */
class __TwigTemplate_57b7e46d17006d54f71286e87d2aedbd25b6fbcf5183d193cc0d44a10253a5b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":account:assignBeneficiary.html.twig", 1);
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
        $__internal_526b98a5826ebe6346fc1c59ce7dfde6d73d4fb44e95f5713b2d5510bc94749c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526b98a5826ebe6346fc1c59ce7dfde6d73d4fb44e95f5713b2d5510bc94749c->enter($__internal_526b98a5826ebe6346fc1c59ce7dfde6d73d4fb44e95f5713b2d5510bc94749c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":account:assignBeneficiary.html.twig"));

        $__internal_4c3cfb9b8f6b6dbd13a78db58e79f2a17bd93c2205e1ab5b7298b1bdd262f3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3cfb9b8f6b6dbd13a78db58e79f2a17bd93c2205e1ab5b7298b1bdd262f3fc->enter($__internal_4c3cfb9b8f6b6dbd13a78db58e79f2a17bd93c2205e1ab5b7298b1bdd262f3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":account:assignBeneficiary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_526b98a5826ebe6346fc1c59ce7dfde6d73d4fb44e95f5713b2d5510bc94749c->leave($__internal_526b98a5826ebe6346fc1c59ce7dfde6d73d4fb44e95f5713b2d5510bc94749c_prof);

        
        $__internal_4c3cfb9b8f6b6dbd13a78db58e79f2a17bd93c2205e1ab5b7298b1bdd262f3fc->leave($__internal_4c3cfb9b8f6b6dbd13a78db58e79f2a17bd93c2205e1ab5b7298b1bdd262f3fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26da0a5382b91b0d8d9c3ea29ff9e798800dbac220f97adf38f6a74e9ddbce25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26da0a5382b91b0d8d9c3ea29ff9e798800dbac220f97adf38f6a74e9ddbce25->enter($__internal_26da0a5382b91b0d8d9c3ea29ff9e798800dbac220f97adf38f6a74e9ddbce25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82332e1166319745c7438ee12241115789df40367d1af2503025aca66cb67e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82332e1166319745c7438ee12241115789df40367d1af2503025aca66cb67e4c->enter($__internal_82332e1166319745c7438ee12241115789df40367d1af2503025aca66cb67e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_82332e1166319745c7438ee12241115789df40367d1af2503025aca66cb67e4c->leave($__internal_82332e1166319745c7438ee12241115789df40367d1af2503025aca66cb67e4c_prof);

        
        $__internal_26da0a5382b91b0d8d9c3ea29ff9e798800dbac220f97adf38f6a74e9ddbce25->leave($__internal_26da0a5382b91b0d8d9c3ea29ff9e798800dbac220f97adf38f6a74e9ddbce25_prof);

    }

    public function getTemplateName()
    {
        return ":account:assignBeneficiary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
", ":account:assignBeneficiary.html.twig", "/symfony/app/Resources/views/account/assignBeneficiary.html.twig");
    }
}
