<?php

/* :account:index.html.twig */
class __TwigTemplate_00969455c8a9084bc5b9d9a47874a1ca35ca2cabcdd956bd07898812b02926b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":account:index.html.twig", 1);
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
        $__internal_3304a81df4221d4eeecfa076815a249a20374961e42529d05d52a239313713a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3304a81df4221d4eeecfa076815a249a20374961e42529d05d52a239313713a0->enter($__internal_3304a81df4221d4eeecfa076815a249a20374961e42529d05d52a239313713a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":account:index.html.twig"));

        $__internal_11f168186cf9394147a3d66102a7192d97b3a5d59c93e496ef90fcaaee3113d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f168186cf9394147a3d66102a7192d97b3a5d59c93e496ef90fcaaee3113d9->enter($__internal_11f168186cf9394147a3d66102a7192d97b3a5d59c93e496ef90fcaaee3113d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":account:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3304a81df4221d4eeecfa076815a249a20374961e42529d05d52a239313713a0->leave($__internal_3304a81df4221d4eeecfa076815a249a20374961e42529d05d52a239313713a0_prof);

        
        $__internal_11f168186cf9394147a3d66102a7192d97b3a5d59c93e496ef90fcaaee3113d9->leave($__internal_11f168186cf9394147a3d66102a7192d97b3a5d59c93e496ef90fcaaee3113d9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fe5b58099ac2d19a867b5fb7752df5af8277d7c97b0e205854e259fa63c0789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe5b58099ac2d19a867b5fb7752df5af8277d7c97b0e205854e259fa63c0789->enter($__internal_1fe5b58099ac2d19a867b5fb7752df5af8277d7c97b0e205854e259fa63c0789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7295d7c2d0efc021afd4fa15ca568500cf1714dfca7695860898fca840626c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7295d7c2d0efc021afd4fa15ca568500cf1714dfca7695860898fca840626c4e->enter($__internal_7295d7c2d0efc021afd4fa15ca568500cf1714dfca7695860898fca840626c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Accounts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Num</th>
                <th>Name</th>
                <th>Balance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["accounts"] ?? $this->getContext($context, "accounts")));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_show", array("id" => $this->getAttribute($context["account"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "num", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "balance", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_show", array("id" => $this->getAttribute($context["account"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_edit", array("id" => $this->getAttribute($context["account"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_new");
        echo "\">Create a new account</a>
        </li>
    </ul>
";
        
        $__internal_7295d7c2d0efc021afd4fa15ca568500cf1714dfca7695860898fca840626c4e->leave($__internal_7295d7c2d0efc021afd4fa15ca568500cf1714dfca7695860898fca840626c4e_prof);

        
        $__internal_1fe5b58099ac2d19a867b5fb7752df5af8277d7c97b0e205854e259fa63c0789->leave($__internal_1fe5b58099ac2d19a867b5fb7752df5af8277d7c97b0e205854e259fa63c0789_prof);

    }

    public function getTemplateName()
    {
        return ":account:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Accounts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Num</th>
                <th>Name</th>
                <th>Balance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for account in accounts %}
            <tr>
                <td><a href=\"{{ path('account_show', { 'id': account.id }) }}\">{{ account.id }}</a></td>
                <td>{{ account.num }}</td>
                <td>{{ account.name }}</td>
                <td>{{ account.balance }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('account_show', { 'id': account.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('account_edit', { 'id': account.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('account_new') }}\">Create a new account</a>
        </li>
    </ul>
{% endblock %}
", ":account:index.html.twig", "/symfony/app/Resources/views/account/index.html.twig");
    }
}
