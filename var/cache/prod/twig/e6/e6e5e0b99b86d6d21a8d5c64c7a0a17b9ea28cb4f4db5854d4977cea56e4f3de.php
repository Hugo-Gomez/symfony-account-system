<?php

/* account/show.html.twig */
class __TwigTemplate_b2dd0b1973d63094343a571542429cd79f128785387ab94d31f64c9de81a7660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/show.html.twig", 1);
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
        $__internal_1cc80dcef8cdac3f2106e8d0b3ab8df76c78d96080e0ebce95be45e5bdedc1e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc80dcef8cdac3f2106e8d0b3ab8df76c78d96080e0ebce95be45e5bdedc1e0->enter($__internal_1cc80dcef8cdac3f2106e8d0b3ab8df76c78d96080e0ebce95be45e5bdedc1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cc80dcef8cdac3f2106e8d0b3ab8df76c78d96080e0ebce95be45e5bdedc1e0->leave($__internal_1cc80dcef8cdac3f2106e8d0b3ab8df76c78d96080e0ebce95be45e5bdedc1e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1ab6c3fa8c25ce572b22103a57e43c7ae13b4df5093cd5020dd536b7af9ae2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ab6c3fa8c25ce572b22103a57e43c7ae13b4df5093cd5020dd536b7af9ae2f->enter($__internal_a1ab6c3fa8c25ce572b22103a57e43c7ae13b4df5093cd5020dd536b7af9ae2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a1ab6c3fa8c25ce572b22103a57e43c7ae13b4df5093cd5020dd536b7af9ae2f->leave($__internal_a1ab6c3fa8c25ce572b22103a57e43c7ae13b4df5093cd5020dd536b7af9ae2f_prof);

    }

    public function getTemplateName()
    {
        return "account/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 137,  271 => 133,  264 => 129,  257 => 125,  250 => 121,  243 => 117,  236 => 112,  232 => 111,  229 => 110,  217 => 104,  210 => 100,  203 => 96,  196 => 92,  189 => 88,  182 => 84,  175 => 79,  171 => 78,  162 => 72,  158 => 70,  146 => 64,  140 => 61,  133 => 57,  126 => 53,  119 => 48,  115 => 47,  106 => 41,  101 => 39,  95 => 36,  89 => 33,  79 => 26,  72 => 22,  65 => 18,  58 => 14,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
", "account/show.html.twig", "/symfony/app/Resources/views/account/show.html.twig");
    }
}
