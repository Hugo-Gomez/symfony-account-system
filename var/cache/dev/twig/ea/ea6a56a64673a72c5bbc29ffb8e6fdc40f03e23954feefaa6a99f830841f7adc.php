<?php

/* :account:show.html.twig */
class __TwigTemplate_636ac0b5cd411efccd6caaba7a2a4c3ea7979d42fbe93f1390e92447c52d2f42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":account:show.html.twig", 1);
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
        $__internal_6f6ebda1c3bd42d7e9fdf92fee2c7a1ed67ae9e07e3342a99026c90478a9bbe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6ebda1c3bd42d7e9fdf92fee2c7a1ed67ae9e07e3342a99026c90478a9bbe3->enter($__internal_6f6ebda1c3bd42d7e9fdf92fee2c7a1ed67ae9e07e3342a99026c90478a9bbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":account:show.html.twig"));

        $__internal_8d680403c60b34a6c29f5613857c8f110b0ca0c8a8acc5ad9b083de80b9a2785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d680403c60b34a6c29f5613857c8f110b0ca0c8a8acc5ad9b083de80b9a2785->enter($__internal_8d680403c60b34a6c29f5613857c8f110b0ca0c8a8acc5ad9b083de80b9a2785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":account:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f6ebda1c3bd42d7e9fdf92fee2c7a1ed67ae9e07e3342a99026c90478a9bbe3->leave($__internal_6f6ebda1c3bd42d7e9fdf92fee2c7a1ed67ae9e07e3342a99026c90478a9bbe3_prof);

        
        $__internal_8d680403c60b34a6c29f5613857c8f110b0ca0c8a8acc5ad9b083de80b9a2785->leave($__internal_8d680403c60b34a6c29f5613857c8f110b0ca0c8a8acc5ad9b083de80b9a2785_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_636f045077086af6840d066f4cfafaee5c2a106d163be92bff014fe76d18d42d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636f045077086af6840d066f4cfafaee5c2a106d163be92bff014fe76d18d42d->enter($__internal_636f045077086af6840d066f4cfafaee5c2a106d163be92bff014fe76d18d42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1aa5f56b8d1395eec585f64ac370252cc37defea7981660026a17f5c61fbb654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa5f56b8d1395eec585f64ac370252cc37defea7981660026a17f5c61fbb654->enter($__internal_1aa5f56b8d1395eec585f64ac370252cc37defea7981660026a17f5c61fbb654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (($this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "balance", array()) < 0)) {
            // line 5
            echo "      <h1 style=\"color: red;\">You are in negative.. <br>Balance : ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "balance", array()), "html", null, true);
            echo "</h1>
    ";
        }
        // line 7
        echo "
    <h1>Account</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Num</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "num", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Balance</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "balance", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_edit", array("id" => $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>

    <h1>Beneficiary</h1>

    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "beneficiary", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["beneficiaries"]) {
            // line 48
            echo "    <p>----------------------------------------</p>
      <table>
          <tbody>
              <tr>
                  <th>Id</th>
                  <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["beneficiaries"], "id", array()), "html", null, true);
            echo "</td>
              </tr>
              <tr>
                  <th>Name of the beneficiary</th>
                  <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["beneficiaries"], "name", array()), "html", null, true);
            echo "</td>
              </tr>
              <tr>
                  <th>Numero of the beneficiary</th>
                  <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["beneficiaries"], "num", array()), "html", null, true);
            echo "</td>
              </tr>
              <tr>
                <th><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_beneficiary", array("id" => $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "id", array()))), "html", null, true);
            echo "\">Create a transaction to this beneficiary</a></th>
              </tr>
          </tbody>
      </table>
      <p>----------------------------------------</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beneficiaries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    <ul>
        <li>
            <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assign_beneficiary", array("id" => $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "id", array()))), "html", null, true);
        echo "\">Create a new beneficiary</a>
        </li>
    </ul>

    <h1>Transactions history</h1>

  ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "transaction", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["transactions"]) {
            // line 79
            echo "  <p>----------------------------------------</p>
    <table>
        <tbody>
            <tr>
                <th>Id of the transaction</th>
                <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["transactions"], "id", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["transactions"], "num", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["transactions"], "amount", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transactions"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Emitter</th>
                <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["transactions"], "startAccount", array()), "name", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Beneficiary</th>
                <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["transactions"], "endAccount", array()), "name", array()), "html", null, true);
            echo "</td>
            </tr>
        </tbody>
    </table>
    <p>----------------------------------------</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transactions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
  ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "endTransaction", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["transactions"]) {
            // line 112
            echo "  <p>----------------------------------------</p>
    <table>
        <tbody>
            <tr>
                <th>Id of the transaction</th>
                <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["transactions"], "id", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["transactions"], "num", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["transactions"], "amount", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transactions"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Emitter</th>
                <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["transactions"], "startAccount", array()), "name", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Beneficiary</th>
                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["transactions"], "endAccount", array()), "name", array()), "html", null, true);
            echo "</td>
            </tr>
        </tbody>
    </table>
  <p>----------------------------------------</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transactions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1aa5f56b8d1395eec585f64ac370252cc37defea7981660026a17f5c61fbb654->leave($__internal_1aa5f56b8d1395eec585f64ac370252cc37defea7981660026a17f5c61fbb654_prof);

        
        $__internal_636f045077086af6840d066f4cfafaee5c2a106d163be92bff014fe76d18d42d->leave($__internal_636f045077086af6840d066f4cfafaee5c2a106d163be92bff014fe76d18d42d_prof);

    }

    public function getTemplateName()
    {
        return ":account:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 137,  280 => 133,  273 => 129,  266 => 125,  259 => 121,  252 => 117,  245 => 112,  241 => 111,  238 => 110,  226 => 104,  219 => 100,  212 => 96,  205 => 92,  198 => 88,  191 => 84,  184 => 79,  180 => 78,  171 => 72,  167 => 70,  155 => 64,  149 => 61,  142 => 57,  135 => 53,  128 => 48,  124 => 47,  115 => 41,  110 => 39,  104 => 36,  98 => 33,  88 => 26,  81 => 22,  74 => 18,  67 => 14,  58 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% if account.balance < 0 %}
      <h1 style=\"color: red;\">You are in negative.. <br>Balance : {{ account.balance }}</h1>
    {% endif %}

    <h1>Account</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ account.id }}</td>
            </tr>
            <tr>
                <th>Num</th>
                <td>{{ account.num }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ account.name }}</td>
            </tr>
            <tr>
                <th>Balance</th>
                <td>{{ account.balance }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('account_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('account_edit', { 'id': account.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>

    <h1>Beneficiary</h1>

    {% for beneficiaries in account.beneficiary %}
    <p>----------------------------------------</p>
      <table>
          <tbody>
              <tr>
                  <th>Id</th>
                  <td>{{ beneficiaries.id }}</td>
              </tr>
              <tr>
                  <th>Name of the beneficiary</th>
                  <td>{{ beneficiaries.name }}</td>
              </tr>
              <tr>
                  <th>Numero of the beneficiary</th>
                  <td>{{ beneficiaries.num }}</td>
              </tr>
              <tr>
                <th><a href=\"{{ path('transaction_beneficiary', { 'id': account.id }) }}\">Create a transaction to this beneficiary</a></th>
              </tr>
          </tbody>
      </table>
      <p>----------------------------------------</p>
    {% endfor %}
    <ul>
        <li>
            <a href=\"{{ path('assign_beneficiary', { 'id': account.id }) }}\">Create a new beneficiary</a>
        </li>
    </ul>

    <h1>Transactions history</h1>

  {% for transactions in account.transaction %}
  <p>----------------------------------------</p>
    <table>
        <tbody>
            <tr>
                <th>Id of the transaction</th>
                <td>{{ transactions.id }}</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>{{ transactions.num }}</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>{{ transactions.amount }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ transactions.date|date('d-m-Y') }}</td>
            </tr>
            <tr>
                <th>Emitter</th>
                <td>{{ transactions.startAccount.name }}</td>
            </tr>
            <tr>
                <th>Beneficiary</th>
                <td>{{ transactions.endAccount.name }}</td>
            </tr>
        </tbody>
    </table>
    <p>----------------------------------------</p>
  {% endfor %}

  {% for transactions in account.endTransaction %}
  <p>----------------------------------------</p>
    <table>
        <tbody>
            <tr>
                <th>Id of the transaction</th>
                <td>{{ transactions.id }}</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>{{ transactions.num }}</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>{{ transactions.amount }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ transactions.date|date('d-m-Y') }}</td>
            </tr>
            <tr>
                <th>Emitter</th>
                <td>{{ transactions.startAccount.name }}</td>
            </tr>
            <tr>
                <th>Beneficiary</th>
                <td>{{ transactions.endAccount.name }}</td>
            </tr>
        </tbody>
    </table>
  <p>----------------------------------------</p>
  {% endfor %}
{% endblock %}
", ":account:show.html.twig", "/symfony/app/Resources/views/account/show.html.twig");
    }
}
