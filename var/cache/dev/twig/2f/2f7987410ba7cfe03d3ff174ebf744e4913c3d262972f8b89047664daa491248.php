<?php

/* :transaction:show.html.twig */
class __TwigTemplate_2305c4dd26543ff9bde201899437f67195d36c1a6e6cb716f00534b904ffb60e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":transaction:show.html.twig", 1);
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
        $__internal_89c9d38c5bb23a8c7cfa87cccce196bcfc58ce5718bf0d9641c218a0da5fcd34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c9d38c5bb23a8c7cfa87cccce196bcfc58ce5718bf0d9641c218a0da5fcd34->enter($__internal_89c9d38c5bb23a8c7cfa87cccce196bcfc58ce5718bf0d9641c218a0da5fcd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transaction:show.html.twig"));

        $__internal_5eaca0f7fee2f9ca2f61c19ef043577db4b01b03219a161066cbff6d46609bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eaca0f7fee2f9ca2f61c19ef043577db4b01b03219a161066cbff6d46609bed->enter($__internal_5eaca0f7fee2f9ca2f61c19ef043577db4b01b03219a161066cbff6d46609bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transaction:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89c9d38c5bb23a8c7cfa87cccce196bcfc58ce5718bf0d9641c218a0da5fcd34->leave($__internal_89c9d38c5bb23a8c7cfa87cccce196bcfc58ce5718bf0d9641c218a0da5fcd34_prof);

        
        $__internal_5eaca0f7fee2f9ca2f61c19ef043577db4b01b03219a161066cbff6d46609bed->leave($__internal_5eaca0f7fee2f9ca2f61c19ef043577db4b01b03219a161066cbff6d46609bed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cef6afff4500e48a6ff17724c2d1575aba445151e272b4eab959d06b9c9a9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cef6afff4500e48a6ff17724c2d1575aba445151e272b4eab959d06b9c9a9b4->enter($__internal_3cef6afff4500e48a6ff17724c2d1575aba445151e272b4eab959d06b9c9a9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1978e7c7d73f370d8ecaa6de1dc23a91bee943443e0bdc91c9ea0314ff38a1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1978e7c7d73f370d8ecaa6de1dc23a91bee943443e0bdc91c9ea0314ff38a1ab->enter($__internal_1978e7c7d73f370d8ecaa6de1dc23a91bee943443e0bdc91c9ea0314ff38a1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Transaction</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["transaction"] ?? $this->getContext($context, "transaction")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Num</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["transaction"] ?? $this->getContext($context, "transaction")), "num", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["transaction"] ?? $this->getContext($context, "transaction")), "amount", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["transaction"] ?? $this->getContext($context, "transaction")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["transaction"] ?? $this->getContext($context, "transaction")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_edit", array("id" => $this->getAttribute(($context["transaction"] ?? $this->getContext($context, "transaction")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1978e7c7d73f370d8ecaa6de1dc23a91bee943443e0bdc91c9ea0314ff38a1ab->leave($__internal_1978e7c7d73f370d8ecaa6de1dc23a91bee943443e0bdc91c9ea0314ff38a1ab_prof);

        
        $__internal_3cef6afff4500e48a6ff17724c2d1575aba445151e272b4eab959d06b9c9a9b4->leave($__internal_3cef6afff4500e48a6ff17724c2d1575aba445151e272b4eab959d06b9c9a9b4_prof);

    }

    public function getTemplateName()
    {
        return ":transaction:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  102 => 35,  96 => 32,  90 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Transaction</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ transaction.id }}</td>
            </tr>
            <tr>
                <th>Num</th>
                <td>{{ transaction.num }}</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>{{ transaction.amount }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if transaction.date %}{{ transaction.date|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('transaction_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('transaction_edit', { 'id': transaction.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":transaction:show.html.twig", "/symfony/app/Resources/views/transaction/show.html.twig");
    }
}
