<?php

/* :transaction:index.html.twig */
class __TwigTemplate_bbed12ec2ea1ecd44d6db4c697612d7780c6e05ef70aa56e8677cd2e4aad33d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":transaction:index.html.twig", 1);
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
        $__internal_2b2b342e9619a17b6769af4a640691329bc451ea00fe980601d8612960786c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b2b342e9619a17b6769af4a640691329bc451ea00fe980601d8612960786c3b->enter($__internal_2b2b342e9619a17b6769af4a640691329bc451ea00fe980601d8612960786c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transaction:index.html.twig"));

        $__internal_ecd94603fce069e8cc8c31fbc475ee569f9831634cb5dd5fe2606797b925f2a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd94603fce069e8cc8c31fbc475ee569f9831634cb5dd5fe2606797b925f2a3->enter($__internal_ecd94603fce069e8cc8c31fbc475ee569f9831634cb5dd5fe2606797b925f2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transaction:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b2b342e9619a17b6769af4a640691329bc451ea00fe980601d8612960786c3b->leave($__internal_2b2b342e9619a17b6769af4a640691329bc451ea00fe980601d8612960786c3b_prof);

        
        $__internal_ecd94603fce069e8cc8c31fbc475ee569f9831634cb5dd5fe2606797b925f2a3->leave($__internal_ecd94603fce069e8cc8c31fbc475ee569f9831634cb5dd5fe2606797b925f2a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_381b93b65e2e999dcb735847045ec578813999787841a0e9b882e10091cc8b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381b93b65e2e999dcb735847045ec578813999787841a0e9b882e10091cc8b20->enter($__internal_381b93b65e2e999dcb735847045ec578813999787841a0e9b882e10091cc8b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fdcf416370d0c91d79f41ad6f845fbe020fb374afa273ddc3205105e7a98483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdcf416370d0c91d79f41ad6f845fbe020fb374afa273ddc3205105e7a98483->enter($__internal_1fdcf416370d0c91d79f41ad6f845fbe020fb374afa273ddc3205105e7a98483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Transactions list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Num</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transactions"] ?? $this->getContext($context, "transactions")));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_show", array("id" => $this->getAttribute($context["transaction"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "num", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "amount", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["transaction"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaction"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_show", array("id" => $this->getAttribute($context["transaction"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_edit", array("id" => $this->getAttribute($context["transaction"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_new");
        echo "\">Create a new transaction</a>
        </li>
    </ul>
";
        
        $__internal_1fdcf416370d0c91d79f41ad6f845fbe020fb374afa273ddc3205105e7a98483->leave($__internal_1fdcf416370d0c91d79f41ad6f845fbe020fb374afa273ddc3205105e7a98483_prof);

        
        $__internal_381b93b65e2e999dcb735847045ec578813999787841a0e9b882e10091cc8b20->leave($__internal_381b93b65e2e999dcb735847045ec578813999787841a0e9b882e10091cc8b20_prof);

    }

    public function getTemplateName()
    {
        return ":transaction:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  112 => 35,  100 => 29,  94 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Transactions list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Num</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for transaction in transactions %}
            <tr>
                <td><a href=\"{{ path('transaction_show', { 'id': transaction.id }) }}\">{{ transaction.id }}</a></td>
                <td>{{ transaction.num }}</td>
                <td>{{ transaction.amount }}</td>
                <td>{% if transaction.date %}{{ transaction.date|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('transaction_show', { 'id': transaction.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('transaction_edit', { 'id': transaction.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('transaction_new') }}\">Create a new transaction</a>
        </li>
    </ul>
{% endblock %}
", ":transaction:index.html.twig", "/symfony/app/Resources/views/transaction/index.html.twig");
    }
}
