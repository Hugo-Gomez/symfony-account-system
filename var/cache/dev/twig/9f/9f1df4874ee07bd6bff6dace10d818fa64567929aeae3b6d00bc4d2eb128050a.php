<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7c488c14b84e541d65ffbcfa88223b153cff10b6eaf7aa4c188c096b0d075f50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_520c8541846c9299e92c48a9f498a9d774788733837ec7d6ad8378d380fd8b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_520c8541846c9299e92c48a9f498a9d774788733837ec7d6ad8378d380fd8b3f->enter($__internal_520c8541846c9299e92c48a9f498a9d774788733837ec7d6ad8378d380fd8b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_a347b585756f5c4b0cfa9c065628df3a4097b2e4ab24656d4fcabc21a0cbb505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a347b585756f5c4b0cfa9c065628df3a4097b2e4ab24656d4fcabc21a0cbb505->enter($__internal_a347b585756f5c4b0cfa9c065628df3a4097b2e4ab24656d4fcabc21a0cbb505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_520c8541846c9299e92c48a9f498a9d774788733837ec7d6ad8378d380fd8b3f->leave($__internal_520c8541846c9299e92c48a9f498a9d774788733837ec7d6ad8378d380fd8b3f_prof);

        
        $__internal_a347b585756f5c4b0cfa9c065628df3a4097b2e4ab24656d4fcabc21a0cbb505->leave($__internal_a347b585756f5c4b0cfa9c065628df3a4097b2e4ab24656d4fcabc21a0cbb505_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04915bac06bfc11986d44984d1a09bf33009c346eb232d526aa5c7e5710d8690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04915bac06bfc11986d44984d1a09bf33009c346eb232d526aa5c7e5710d8690->enter($__internal_04915bac06bfc11986d44984d1a09bf33009c346eb232d526aa5c7e5710d8690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c246e78f4948c3f71ad07b2506d7807b1e877d1676ee88622f1de5783cf82521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c246e78f4948c3f71ad07b2506d7807b1e877d1676ee88622f1de5783cf82521->enter($__internal_c246e78f4948c3f71ad07b2506d7807b1e877d1676ee88622f1de5783cf82521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c246e78f4948c3f71ad07b2506d7807b1e877d1676ee88622f1de5783cf82521->leave($__internal_c246e78f4948c3f71ad07b2506d7807b1e877d1676ee88622f1de5783cf82521_prof);

        
        $__internal_04915bac06bfc11986d44984d1a09bf33009c346eb232d526aa5c7e5710d8690->leave($__internal_04915bac06bfc11986d44984d1a09bf33009c346eb232d526aa5c7e5710d8690_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d65ccff4b25ff9ea7886cc6281499aa838513ba6d47d26c7990ff273963df92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65ccff4b25ff9ea7886cc6281499aa838513ba6d47d26c7990ff273963df92b->enter($__internal_d65ccff4b25ff9ea7886cc6281499aa838513ba6d47d26c7990ff273963df92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6146feefa6cd9a59c1023b878bb7cf1bfd4f64e26bfe8adc6c04cd9323a300b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6146feefa6cd9a59c1023b878bb7cf1bfd4f64e26bfe8adc6c04cd9323a300b3->enter($__internal_6146feefa6cd9a59c1023b878bb7cf1bfd4f64e26bfe8adc6c04cd9323a300b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6146feefa6cd9a59c1023b878bb7cf1bfd4f64e26bfe8adc6c04cd9323a300b3->leave($__internal_6146feefa6cd9a59c1023b878bb7cf1bfd4f64e26bfe8adc6c04cd9323a300b3_prof);

        
        $__internal_d65ccff4b25ff9ea7886cc6281499aa838513ba6d47d26c7990ff273963df92b->leave($__internal_d65ccff4b25ff9ea7886cc6281499aa838513ba6d47d26c7990ff273963df92b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90d39b95b37a0c81b5fa64e9a5bc25f1829fda9500ae823b3c6e168774568dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d39b95b37a0c81b5fa64e9a5bc25f1829fda9500ae823b3c6e168774568dc8->enter($__internal_90d39b95b37a0c81b5fa64e9a5bc25f1829fda9500ae823b3c6e168774568dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_70333661af5f675a9b2cb52684a3dbf79b4911eeef5429a3a48d29b20353e655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70333661af5f675a9b2cb52684a3dbf79b4911eeef5429a3a48d29b20353e655->enter($__internal_70333661af5f675a9b2cb52684a3dbf79b4911eeef5429a3a48d29b20353e655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_70333661af5f675a9b2cb52684a3dbf79b4911eeef5429a3a48d29b20353e655->leave($__internal_70333661af5f675a9b2cb52684a3dbf79b4911eeef5429a3a48d29b20353e655_prof);

        
        $__internal_90d39b95b37a0c81b5fa64e9a5bc25f1829fda9500ae823b3c6e168774568dc8->leave($__internal_90d39b95b37a0c81b5fa64e9a5bc25f1829fda9500ae823b3c6e168774568dc8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
