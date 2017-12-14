<?php

/* :transaction:edit.html.twig */
class __TwigTemplate_657663b17aa283cc4234ff890b675b2466c684cbadc737fcda54e8eff922e78f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":transaction:edit.html.twig", 1);
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
        $__internal_40b1b1ba8d12ee1c463f3947f06cdec1863b46998400a4b679f79f82ab2b43d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b1b1ba8d12ee1c463f3947f06cdec1863b46998400a4b679f79f82ab2b43d9->enter($__internal_40b1b1ba8d12ee1c463f3947f06cdec1863b46998400a4b679f79f82ab2b43d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transaction:edit.html.twig"));

        $__internal_b2cfd72eedc476da1a8063b0809b1d2a1c4f29f99061510abe6f3f2d77ebbdb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2cfd72eedc476da1a8063b0809b1d2a1c4f29f99061510abe6f3f2d77ebbdb4->enter($__internal_b2cfd72eedc476da1a8063b0809b1d2a1c4f29f99061510abe6f3f2d77ebbdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transaction:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40b1b1ba8d12ee1c463f3947f06cdec1863b46998400a4b679f79f82ab2b43d9->leave($__internal_40b1b1ba8d12ee1c463f3947f06cdec1863b46998400a4b679f79f82ab2b43d9_prof);

        
        $__internal_b2cfd72eedc476da1a8063b0809b1d2a1c4f29f99061510abe6f3f2d77ebbdb4->leave($__internal_b2cfd72eedc476da1a8063b0809b1d2a1c4f29f99061510abe6f3f2d77ebbdb4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67c99d0f90fc2b9440fc5597b7174a3e960a3697c2d69000f2a337241dafdec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c99d0f90fc2b9440fc5597b7174a3e960a3697c2d69000f2a337241dafdec5->enter($__internal_67c99d0f90fc2b9440fc5597b7174a3e960a3697c2d69000f2a337241dafdec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_064d0bbcf3603971cbf66252ab0181f046d2adc5c33867a022c084a7f10bd354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064d0bbcf3603971cbf66252ab0181f046d2adc5c33867a022c084a7f10bd354->enter($__internal_064d0bbcf3603971cbf66252ab0181f046d2adc5c33867a022c084a7f10bd354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Transaction edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_index");
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
        
        $__internal_064d0bbcf3603971cbf66252ab0181f046d2adc5c33867a022c084a7f10bd354->leave($__internal_064d0bbcf3603971cbf66252ab0181f046d2adc5c33867a022c084a7f10bd354_prof);

        
        $__internal_67c99d0f90fc2b9440fc5597b7174a3e960a3697c2d69000f2a337241dafdec5->leave($__internal_67c99d0f90fc2b9440fc5597b7174a3e960a3697c2d69000f2a337241dafdec5_prof);

    }

    public function getTemplateName()
    {
        return ":transaction:edit.html.twig";
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
    <h1>Transaction edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('transaction_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":transaction:edit.html.twig", "/symfony/app/Resources/views/transaction/edit.html.twig");
    }
}
