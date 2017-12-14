<?php

/* :account:transactionBeneficiary.html.twig */
class __TwigTemplate_1294fcaf3a4394567088c1d721396b0e11ed07c892ec2f14284bfb7cc69b9568 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":account:transactionBeneficiary.html.twig", 1);
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
        $__internal_0e68a77c293c8e2756a9f4c04ac6916bf335bbba55c50be03866fcd79efdb80c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e68a77c293c8e2756a9f4c04ac6916bf335bbba55c50be03866fcd79efdb80c->enter($__internal_0e68a77c293c8e2756a9f4c04ac6916bf335bbba55c50be03866fcd79efdb80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":account:transactionBeneficiary.html.twig"));

        $__internal_81b4cc3577c4d5d8bd9eca53454eb84ef6c1c2936da947bb5ef4eb8e65ca2ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b4cc3577c4d5d8bd9eca53454eb84ef6c1c2936da947bb5ef4eb8e65ca2ea1->enter($__internal_81b4cc3577c4d5d8bd9eca53454eb84ef6c1c2936da947bb5ef4eb8e65ca2ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":account:transactionBeneficiary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e68a77c293c8e2756a9f4c04ac6916bf335bbba55c50be03866fcd79efdb80c->leave($__internal_0e68a77c293c8e2756a9f4c04ac6916bf335bbba55c50be03866fcd79efdb80c_prof);

        
        $__internal_81b4cc3577c4d5d8bd9eca53454eb84ef6c1c2936da947bb5ef4eb8e65ca2ea1->leave($__internal_81b4cc3577c4d5d8bd9eca53454eb84ef6c1c2936da947bb5ef4eb8e65ca2ea1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7a770226c8059016176512bfa0f28ecb7f99e9244f7b98591914123fde2d08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a770226c8059016176512bfa0f28ecb7f99e9244f7b98591914123fde2d08f->enter($__internal_e7a770226c8059016176512bfa0f28ecb7f99e9244f7b98591914123fde2d08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bef1e9616789f47aff55ebecd4b511476d0518f4cc2da834a27f1439390398b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef1e9616789f47aff55ebecd4b511476d0518f4cc2da834a27f1439390398b7->enter($__internal_bef1e9616789f47aff55ebecd4b511476d0518f4cc2da834a27f1439390398b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Transaction creation</h1>

";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["transactionForm"] ?? $this->getContext($context, "transactionForm")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["transactionForm"] ?? $this->getContext($context, "transactionForm")), 'widget');
        echo "
    <input type=\"submit\" value=\"Create\" />
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["transactionForm"] ?? $this->getContext($context, "transactionForm")), 'form_end');
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
        
        $__internal_bef1e9616789f47aff55ebecd4b511476d0518f4cc2da834a27f1439390398b7->leave($__internal_bef1e9616789f47aff55ebecd4b511476d0518f4cc2da834a27f1439390398b7_prof);

        
        $__internal_e7a770226c8059016176512bfa0f28ecb7f99e9244f7b98591914123fde2d08f->leave($__internal_e7a770226c8059016176512bfa0f28ecb7f99e9244f7b98591914123fde2d08f_prof);

    }

    public function getTemplateName()
    {
        return ":account:transactionBeneficiary.html.twig";
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
<h1>Transaction creation</h1>

{{ form_start(transactionForm) }}
    {{ form_widget(transactionForm) }}
    <input type=\"submit\" value=\"Create\" />
{{ form_end(transactionForm) }}

<ul>
    <li>
        <a href=\"{{ path('account_index') }}\">Back to the list</a>
    </li>
</ul>
{% endblock %}
", ":account:transactionBeneficiary.html.twig", "/symfony/app/Resources/views/account/transactionBeneficiary.html.twig");
    }
}
