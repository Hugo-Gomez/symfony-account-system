<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_fddfd9a0ba4a4fe36b972b22e4eab59a8b7b0d6487f219a33edb6abdf50aa6f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45758be70a2a1cb802779d7737ceab98b38b696cf65d6eefe18835b26fe0aae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45758be70a2a1cb802779d7737ceab98b38b696cf65d6eefe18835b26fe0aae6->enter($__internal_45758be70a2a1cb802779d7737ceab98b38b696cf65d6eefe18835b26fe0aae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_391b4d9207e1bcd3d1e0161cd175ec537712207ec937811c8cb7b07e1bec0bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391b4d9207e1bcd3d1e0161cd175ec537712207ec937811c8cb7b07e1bec0bb6->enter($__internal_391b4d9207e1bcd3d1e0161cd175ec537712207ec937811c8cb7b07e1bec0bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45758be70a2a1cb802779d7737ceab98b38b696cf65d6eefe18835b26fe0aae6->leave($__internal_45758be70a2a1cb802779d7737ceab98b38b696cf65d6eefe18835b26fe0aae6_prof);

        
        $__internal_391b4d9207e1bcd3d1e0161cd175ec537712207ec937811c8cb7b07e1bec0bb6->leave($__internal_391b4d9207e1bcd3d1e0161cd175ec537712207ec937811c8cb7b07e1bec0bb6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4c8c11778543213e025611f4a5ba67c603cf02cbb7809ac99b539c556c3391c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4c8c11778543213e025611f4a5ba67c603cf02cbb7809ac99b539c556c3391c->enter($__internal_a4c8c11778543213e025611f4a5ba67c603cf02cbb7809ac99b539c556c3391c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5db55eed4742a2bf94e1e19ab87cf1659941074fdd0f651d1d489fdd0db8589f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db55eed4742a2bf94e1e19ab87cf1659941074fdd0f651d1d489fdd0db8589f->enter($__internal_5db55eed4742a2bf94e1e19ab87cf1659941074fdd0f651d1d489fdd0db8589f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5db55eed4742a2bf94e1e19ab87cf1659941074fdd0f651d1d489fdd0db8589f->leave($__internal_5db55eed4742a2bf94e1e19ab87cf1659941074fdd0f651d1d489fdd0db8589f_prof);

        
        $__internal_a4c8c11778543213e025611f4a5ba67c603cf02cbb7809ac99b539c556c3391c->leave($__internal_a4c8c11778543213e025611f4a5ba67c603cf02cbb7809ac99b539c556c3391c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f94a840b7665c9d538b7290cfadf9435fa87343911bdf1f12259e253b4bf8dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f94a840b7665c9d538b7290cfadf9435fa87343911bdf1f12259e253b4bf8dba->enter($__internal_f94a840b7665c9d538b7290cfadf9435fa87343911bdf1f12259e253b4bf8dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e64bf3f63a0f0379c8c621855e10d6dd8c7c1f28058bf0f6e20ab76fd6f26ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64bf3f63a0f0379c8c621855e10d6dd8c7c1f28058bf0f6e20ab76fd6f26ca2->enter($__internal_e64bf3f63a0f0379c8c621855e10d6dd8c7c1f28058bf0f6e20ab76fd6f26ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e64bf3f63a0f0379c8c621855e10d6dd8c7c1f28058bf0f6e20ab76fd6f26ca2->leave($__internal_e64bf3f63a0f0379c8c621855e10d6dd8c7c1f28058bf0f6e20ab76fd6f26ca2_prof);

        
        $__internal_f94a840b7665c9d538b7290cfadf9435fa87343911bdf1f12259e253b4bf8dba->leave($__internal_f94a840b7665c9d538b7290cfadf9435fa87343911bdf1f12259e253b4bf8dba_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
