<?php

/* :account:edit.html.twig */
class __TwigTemplate_76c9ec1f121654effe195f72b0e2d84c3fe08fb7b004e4b3e14c03161b1e6284 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":account:edit.html.twig", 1);
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
        $__internal_3a3a103154fd8021683a2dc8009f7129b24d869f3239764c97d7ac396ee2b96f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3a103154fd8021683a2dc8009f7129b24d869f3239764c97d7ac396ee2b96f->enter($__internal_3a3a103154fd8021683a2dc8009f7129b24d869f3239764c97d7ac396ee2b96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":account:edit.html.twig"));

        $__internal_98caadfbb4689e4f56c053f6b5b3f8bdcb99e13e2c6a850c6bd7593177921d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98caadfbb4689e4f56c053f6b5b3f8bdcb99e13e2c6a850c6bd7593177921d1a->enter($__internal_98caadfbb4689e4f56c053f6b5b3f8bdcb99e13e2c6a850c6bd7593177921d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":account:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a3a103154fd8021683a2dc8009f7129b24d869f3239764c97d7ac396ee2b96f->leave($__internal_3a3a103154fd8021683a2dc8009f7129b24d869f3239764c97d7ac396ee2b96f_prof);

        
        $__internal_98caadfbb4689e4f56c053f6b5b3f8bdcb99e13e2c6a850c6bd7593177921d1a->leave($__internal_98caadfbb4689e4f56c053f6b5b3f8bdcb99e13e2c6a850c6bd7593177921d1a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b3af6c2e28b959de86bc11c2c24313f631b7187010e55bb13826d7af80044a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b3af6c2e28b959de86bc11c2c24313f631b7187010e55bb13826d7af80044a4->enter($__internal_9b3af6c2e28b959de86bc11c2c24313f631b7187010e55bb13826d7af80044a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00b90529123203b52dfce4b2dc3e64a40d6b1a1fb7bd115c0e81e7cc887d9c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b90529123203b52dfce4b2dc3e64a40d6b1a1fb7bd115c0e81e7cc887d9c4d->enter($__internal_00b90529123203b52dfce4b2dc3e64a40d6b1a1fb7bd115c0e81e7cc887d9c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Account edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_00b90529123203b52dfce4b2dc3e64a40d6b1a1fb7bd115c0e81e7cc887d9c4d->leave($__internal_00b90529123203b52dfce4b2dc3e64a40d6b1a1fb7bd115c0e81e7cc887d9c4d_prof);

        
        $__internal_9b3af6c2e28b959de86bc11c2c24313f631b7187010e55bb13826d7af80044a4->leave($__internal_9b3af6c2e28b959de86bc11c2c24313f631b7187010e55bb13826d7af80044a4_prof);

    }

    public function getTemplateName()
    {
        return ":account:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Account edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('account_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":account:edit.html.twig", "/symfony/app/Resources/views/account/edit.html.twig");
    }
}
