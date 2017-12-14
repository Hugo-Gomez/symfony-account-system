<?php

/* :transaction:new.html.twig */
class __TwigTemplate_509cad7d0c04738798e8a461a4281a34157a05d4ea9f5064701fc673b75ca979 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":transaction:new.html.twig", 1);
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
        $__internal_5ca718d0707e65a4f2aa731b2778c5d9609a601feb02e38e2394fe9e2e509440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca718d0707e65a4f2aa731b2778c5d9609a601feb02e38e2394fe9e2e509440->enter($__internal_5ca718d0707e65a4f2aa731b2778c5d9609a601feb02e38e2394fe9e2e509440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transaction:new.html.twig"));

        $__internal_4d7ccbf2627ec1219d1541d3ffed2c41af3a5173300c8d1842480e0e3760bc41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7ccbf2627ec1219d1541d3ffed2c41af3a5173300c8d1842480e0e3760bc41->enter($__internal_4d7ccbf2627ec1219d1541d3ffed2c41af3a5173300c8d1842480e0e3760bc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transaction:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ca718d0707e65a4f2aa731b2778c5d9609a601feb02e38e2394fe9e2e509440->leave($__internal_5ca718d0707e65a4f2aa731b2778c5d9609a601feb02e38e2394fe9e2e509440_prof);

        
        $__internal_4d7ccbf2627ec1219d1541d3ffed2c41af3a5173300c8d1842480e0e3760bc41->leave($__internal_4d7ccbf2627ec1219d1541d3ffed2c41af3a5173300c8d1842480e0e3760bc41_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b054e33ff0a24e559aa161c62e282d58028d2a6d0b1d5f4b3860ef16f1471a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b054e33ff0a24e559aa161c62e282d58028d2a6d0b1d5f4b3860ef16f1471a2->enter($__internal_3b054e33ff0a24e559aa161c62e282d58028d2a6d0b1d5f4b3860ef16f1471a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e27dc9d221794faf8ae1a7c3506afe86c015789dbbce096c4d649add671b8116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27dc9d221794faf8ae1a7c3506afe86c015789dbbce096c4d649add671b8116->enter($__internal_e27dc9d221794faf8ae1a7c3506afe86c015789dbbce096c4d649add671b8116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Transaction creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e27dc9d221794faf8ae1a7c3506afe86c015789dbbce096c4d649add671b8116->leave($__internal_e27dc9d221794faf8ae1a7c3506afe86c015789dbbce096c4d649add671b8116_prof);

        
        $__internal_3b054e33ff0a24e559aa161c62e282d58028d2a6d0b1d5f4b3860ef16f1471a2->leave($__internal_3b054e33ff0a24e559aa161c62e282d58028d2a6d0b1d5f4b3860ef16f1471a2_prof);

    }

    public function getTemplateName()
    {
        return ":transaction:new.html.twig";
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

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('transaction_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":transaction:new.html.twig", "/symfony/app/Resources/views/transaction/new.html.twig");
    }
}
