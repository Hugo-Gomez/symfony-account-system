<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b3d95af8a8a59c0b9193ddee5a76cce51b43ffabe704985b1f2c3adc251aeee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_477131f5dd595d5c24b89905fb5a2b359b37415f9f4796332b1cbb7a990087b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477131f5dd595d5c24b89905fb5a2b359b37415f9f4796332b1cbb7a990087b8->enter($__internal_477131f5dd595d5c24b89905fb5a2b359b37415f9f4796332b1cbb7a990087b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ed32313f328e03148a0f1fe2a18d784643f78eb49a56e33acd3ad65135437231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed32313f328e03148a0f1fe2a18d784643f78eb49a56e33acd3ad65135437231->enter($__internal_ed32313f328e03148a0f1fe2a18d784643f78eb49a56e33acd3ad65135437231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_477131f5dd595d5c24b89905fb5a2b359b37415f9f4796332b1cbb7a990087b8->leave($__internal_477131f5dd595d5c24b89905fb5a2b359b37415f9f4796332b1cbb7a990087b8_prof);

        
        $__internal_ed32313f328e03148a0f1fe2a18d784643f78eb49a56e33acd3ad65135437231->leave($__internal_ed32313f328e03148a0f1fe2a18d784643f78eb49a56e33acd3ad65135437231_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c4047e5b1c9c69a844c341477a9fa6e7257cbc61e7b5fc4a351ceff2268f66bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4047e5b1c9c69a844c341477a9fa6e7257cbc61e7b5fc4a351ceff2268f66bd->enter($__internal_c4047e5b1c9c69a844c341477a9fa6e7257cbc61e7b5fc4a351ceff2268f66bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_38e3cbb08fac825ea4757db7a04431e46a0d6e14d7944c9e7bb019d56fa543e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e3cbb08fac825ea4757db7a04431e46a0d6e14d7944c9e7bb019d56fa543e8->enter($__internal_38e3cbb08fac825ea4757db7a04431e46a0d6e14d7944c9e7bb019d56fa543e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_38e3cbb08fac825ea4757db7a04431e46a0d6e14d7944c9e7bb019d56fa543e8->leave($__internal_38e3cbb08fac825ea4757db7a04431e46a0d6e14d7944c9e7bb019d56fa543e8_prof);

        
        $__internal_c4047e5b1c9c69a844c341477a9fa6e7257cbc61e7b5fc4a351ceff2268f66bd->leave($__internal_c4047e5b1c9c69a844c341477a9fa6e7257cbc61e7b5fc4a351ceff2268f66bd_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a99b270f1fa7f30dd3145747efb4520df1dd5f83fc64175879e1562067303361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99b270f1fa7f30dd3145747efb4520df1dd5f83fc64175879e1562067303361->enter($__internal_a99b270f1fa7f30dd3145747efb4520df1dd5f83fc64175879e1562067303361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_99583101fb40dbf613ca88f34159a299557bec95d50992f0be5b7c05228d5af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99583101fb40dbf613ca88f34159a299557bec95d50992f0be5b7c05228d5af1->enter($__internal_99583101fb40dbf613ca88f34159a299557bec95d50992f0be5b7c05228d5af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_99583101fb40dbf613ca88f34159a299557bec95d50992f0be5b7c05228d5af1->leave($__internal_99583101fb40dbf613ca88f34159a299557bec95d50992f0be5b7c05228d5af1_prof);

        
        $__internal_a99b270f1fa7f30dd3145747efb4520df1dd5f83fc64175879e1562067303361->leave($__internal_a99b270f1fa7f30dd3145747efb4520df1dd5f83fc64175879e1562067303361_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
