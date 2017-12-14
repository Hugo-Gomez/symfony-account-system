<?php

/* :account:new.html.twig */
class __TwigTemplate_eeb595a62d3278c31ae463b50e303463333f58376570cf95c9309c25b140730d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":account:new.html.twig", 1);
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
        $__internal_180ab0430943f522239d3d6203f5fcaab7081c391b77d59da976f672c5736a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180ab0430943f522239d3d6203f5fcaab7081c391b77d59da976f672c5736a6e->enter($__internal_180ab0430943f522239d3d6203f5fcaab7081c391b77d59da976f672c5736a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":account:new.html.twig"));

        $__internal_8c6fd2c1f83ddbcabf4a010763b7ea941395e87b906cc5329aecf5ade83d94e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6fd2c1f83ddbcabf4a010763b7ea941395e87b906cc5329aecf5ade83d94e8->enter($__internal_8c6fd2c1f83ddbcabf4a010763b7ea941395e87b906cc5329aecf5ade83d94e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":account:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_180ab0430943f522239d3d6203f5fcaab7081c391b77d59da976f672c5736a6e->leave($__internal_180ab0430943f522239d3d6203f5fcaab7081c391b77d59da976f672c5736a6e_prof);

        
        $__internal_8c6fd2c1f83ddbcabf4a010763b7ea941395e87b906cc5329aecf5ade83d94e8->leave($__internal_8c6fd2c1f83ddbcabf4a010763b7ea941395e87b906cc5329aecf5ade83d94e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b72634faa8667fc878ce3883dd7d0ea28a110fe6c054597556455950bfa637d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b72634faa8667fc878ce3883dd7d0ea28a110fe6c054597556455950bfa637d->enter($__internal_8b72634faa8667fc878ce3883dd7d0ea28a110fe6c054597556455950bfa637d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7dcb1bf7f5db29be921321c0260b5707292109d18891937f147d6b115a229cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcb1bf7f5db29be921321c0260b5707292109d18891937f147d6b115a229cc0->enter($__internal_7dcb1bf7f5db29be921321c0260b5707292109d18891937f147d6b115a229cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Account creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7dcb1bf7f5db29be921321c0260b5707292109d18891937f147d6b115a229cc0->leave($__internal_7dcb1bf7f5db29be921321c0260b5707292109d18891937f147d6b115a229cc0_prof);

        
        $__internal_8b72634faa8667fc878ce3883dd7d0ea28a110fe6c054597556455950bfa637d->leave($__internal_8b72634faa8667fc878ce3883dd7d0ea28a110fe6c054597556455950bfa637d_prof);

    }

    public function getTemplateName()
    {
        return ":account:new.html.twig";
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
    <h1>Account creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('account_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":account:new.html.twig", "/symfony/app/Resources/views/account/new.html.twig");
    }
}
