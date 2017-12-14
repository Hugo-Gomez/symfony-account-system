<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_711c05f66b32b47a364b066ed8d0ec4fdd1ce963e8f63e334329cff878c39333 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_b1d5005736017d710b5a46e4241d8c37df5d2d27bf3b84a4e7b0d68084189daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d5005736017d710b5a46e4241d8c37df5d2d27bf3b84a4e7b0d68084189daf->enter($__internal_b1d5005736017d710b5a46e4241d8c37df5d2d27bf3b84a4e7b0d68084189daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_6ed6aa261ef83789802816e7eb8fdfcd210c3a021e5c84dc33cdec3e960bbe61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed6aa261ef83789802816e7eb8fdfcd210c3a021e5c84dc33cdec3e960bbe61->enter($__internal_6ed6aa261ef83789802816e7eb8fdfcd210c3a021e5c84dc33cdec3e960bbe61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1d5005736017d710b5a46e4241d8c37df5d2d27bf3b84a4e7b0d68084189daf->leave($__internal_b1d5005736017d710b5a46e4241d8c37df5d2d27bf3b84a4e7b0d68084189daf_prof);

        
        $__internal_6ed6aa261ef83789802816e7eb8fdfcd210c3a021e5c84dc33cdec3e960bbe61->leave($__internal_6ed6aa261ef83789802816e7eb8fdfcd210c3a021e5c84dc33cdec3e960bbe61_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5de7633db61d5883eceeb6af649c082c589bea9b0f0ef7eed84b50fd61f98c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de7633db61d5883eceeb6af649c082c589bea9b0f0ef7eed84b50fd61f98c9f->enter($__internal_5de7633db61d5883eceeb6af649c082c589bea9b0f0ef7eed84b50fd61f98c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bc480c973488ef9cb95e7ee952fc6358238781f663c6b24ab831fe49d87e5700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc480c973488ef9cb95e7ee952fc6358238781f663c6b24ab831fe49d87e5700->enter($__internal_bc480c973488ef9cb95e7ee952fc6358238781f663c6b24ab831fe49d87e5700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bc480c973488ef9cb95e7ee952fc6358238781f663c6b24ab831fe49d87e5700->leave($__internal_bc480c973488ef9cb95e7ee952fc6358238781f663c6b24ab831fe49d87e5700_prof);

        
        $__internal_5de7633db61d5883eceeb6af649c082c589bea9b0f0ef7eed84b50fd61f98c9f->leave($__internal_5de7633db61d5883eceeb6af649c082c589bea9b0f0ef7eed84b50fd61f98c9f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_611a74564d5b1cf1a3d6b13db45de8f7db4874c68b411b02ce37e41d5dcad69e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_611a74564d5b1cf1a3d6b13db45de8f7db4874c68b411b02ce37e41d5dcad69e->enter($__internal_611a74564d5b1cf1a3d6b13db45de8f7db4874c68b411b02ce37e41d5dcad69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7dd7005950e26e1974564defa6e7ae63730d1d490ce8b41b49d1b732986b4ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd7005950e26e1974564defa6e7ae63730d1d490ce8b41b49d1b732986b4ba2->enter($__internal_7dd7005950e26e1974564defa6e7ae63730d1d490ce8b41b49d1b732986b4ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7dd7005950e26e1974564defa6e7ae63730d1d490ce8b41b49d1b732986b4ba2->leave($__internal_7dd7005950e26e1974564defa6e7ae63730d1d490ce8b41b49d1b732986b4ba2_prof);

        
        $__internal_611a74564d5b1cf1a3d6b13db45de8f7db4874c68b411b02ce37e41d5dcad69e->leave($__internal_611a74564d5b1cf1a3d6b13db45de8f7db4874c68b411b02ce37e41d5dcad69e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba1f9a7b6fec9125136c81eef250c8a5f7f19399d233745acb20ca06ce1f6bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1f9a7b6fec9125136c81eef250c8a5f7f19399d233745acb20ca06ce1f6bda->enter($__internal_ba1f9a7b6fec9125136c81eef250c8a5f7f19399d233745acb20ca06ce1f6bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1d26156958f5f4c3b8263d19aa19c8b3b9166a648a7c08af22e925282d7e2259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d26156958f5f4c3b8263d19aa19c8b3b9166a648a7c08af22e925282d7e2259->enter($__internal_1d26156958f5f4c3b8263d19aa19c8b3b9166a648a7c08af22e925282d7e2259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1d26156958f5f4c3b8263d19aa19c8b3b9166a648a7c08af22e925282d7e2259->leave($__internal_1d26156958f5f4c3b8263d19aa19c8b3b9166a648a7c08af22e925282d7e2259_prof);

        
        $__internal_ba1f9a7b6fec9125136c81eef250c8a5f7f19399d233745acb20ca06ce1f6bda->leave($__internal_ba1f9a7b6fec9125136c81eef250c8a5f7f19399d233745acb20ca06ce1f6bda_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
