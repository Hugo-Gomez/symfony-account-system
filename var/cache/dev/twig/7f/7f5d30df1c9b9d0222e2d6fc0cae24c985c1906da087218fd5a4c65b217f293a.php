<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_1977dddd8ff6602eff58b07f1bc44726d1331de53a8cba1b1b3359d551235c67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b88e52adb92334b649ee243d49347278d1f152ea2259b5ed1df97e412919ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b88e52adb92334b649ee243d49347278d1f152ea2259b5ed1df97e412919ea1->enter($__internal_1b88e52adb92334b649ee243d49347278d1f152ea2259b5ed1df97e412919ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_bd4e43c08b3d46f8089254d3cb5224d5ace5e912a4c6d31bf101865b183d001a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4e43c08b3d46f8089254d3cb5224d5ace5e912a4c6d31bf101865b183d001a->enter($__internal_bd4e43c08b3d46f8089254d3cb5224d5ace5e912a4c6d31bf101865b183d001a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b88e52adb92334b649ee243d49347278d1f152ea2259b5ed1df97e412919ea1->leave($__internal_1b88e52adb92334b649ee243d49347278d1f152ea2259b5ed1df97e412919ea1_prof);

        
        $__internal_bd4e43c08b3d46f8089254d3cb5224d5ace5e912a4c6d31bf101865b183d001a->leave($__internal_bd4e43c08b3d46f8089254d3cb5224d5ace5e912a4c6d31bf101865b183d001a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc31c6a3ba4c1cc8e9562d43118561dd2637b2390b4d5d6896324b3dcb721e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc31c6a3ba4c1cc8e9562d43118561dd2637b2390b4d5d6896324b3dcb721e1d->enter($__internal_dc31c6a3ba4c1cc8e9562d43118561dd2637b2390b4d5d6896324b3dcb721e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b5fab8ef81f5e823b20cb149b2eb47bd36d0a9c99179db57a657bb4f3d9652e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fab8ef81f5e823b20cb149b2eb47bd36d0a9c99179db57a657bb4f3d9652e5->enter($__internal_b5fab8ef81f5e823b20cb149b2eb47bd36d0a9c99179db57a657bb4f3d9652e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b5fab8ef81f5e823b20cb149b2eb47bd36d0a9c99179db57a657bb4f3d9652e5->leave($__internal_b5fab8ef81f5e823b20cb149b2eb47bd36d0a9c99179db57a657bb4f3d9652e5_prof);

        
        $__internal_dc31c6a3ba4c1cc8e9562d43118561dd2637b2390b4d5d6896324b3dcb721e1d->leave($__internal_dc31c6a3ba4c1cc8e9562d43118561dd2637b2390b4d5d6896324b3dcb721e1d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_449411533786cb696fe0cb1e2d57f3b1fd6d54c8658f0759d8edc83fd745bf66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449411533786cb696fe0cb1e2d57f3b1fd6d54c8658f0759d8edc83fd745bf66->enter($__internal_449411533786cb696fe0cb1e2d57f3b1fd6d54c8658f0759d8edc83fd745bf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd75170dbc607b43e80f606c1d38d51758bad676809130eacaa4ab5f284ddc47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd75170dbc607b43e80f606c1d38d51758bad676809130eacaa4ab5f284ddc47->enter($__internal_bd75170dbc607b43e80f606c1d38d51758bad676809130eacaa4ab5f284ddc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_bd75170dbc607b43e80f606c1d38d51758bad676809130eacaa4ab5f284ddc47->leave($__internal_bd75170dbc607b43e80f606c1d38d51758bad676809130eacaa4ab5f284ddc47_prof);

        
        $__internal_449411533786cb696fe0cb1e2d57f3b1fd6d54c8658f0759d8edc83fd745bf66->leave($__internal_449411533786cb696fe0cb1e2d57f3b1fd6d54c8658f0759d8edc83fd745bf66_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
