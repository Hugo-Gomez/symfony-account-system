<?php

/* base.html.twig */
class __TwigTemplate_9be5d8ea971897795bae98da8137870eadf79d88769436ba8c585db24031a091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76a9fe8fe5e80f4a0a70730d464cc3f6ffc2fa834076359e7f8fbcd6bc632a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a9fe8fe5e80f4a0a70730d464cc3f6ffc2fa834076359e7f8fbcd6bc632a11->enter($__internal_76a9fe8fe5e80f4a0a70730d464cc3f6ffc2fa834076359e7f8fbcd6bc632a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_76a9fe8fe5e80f4a0a70730d464cc3f6ffc2fa834076359e7f8fbcd6bc632a11->leave($__internal_76a9fe8fe5e80f4a0a70730d464cc3f6ffc2fa834076359e7f8fbcd6bc632a11_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_832ac979275980cf7ab145eef77666c0fec405281ed1da136170ab622cd93321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832ac979275980cf7ab145eef77666c0fec405281ed1da136170ab622cd93321->enter($__internal_832ac979275980cf7ab145eef77666c0fec405281ed1da136170ab622cd93321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_832ac979275980cf7ab145eef77666c0fec405281ed1da136170ab622cd93321->leave($__internal_832ac979275980cf7ab145eef77666c0fec405281ed1da136170ab622cd93321_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_993e6ca5efd4c415916c8a8d49dfaedd7c006359194e759fdc574187856453d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993e6ca5efd4c415916c8a8d49dfaedd7c006359194e759fdc574187856453d0->enter($__internal_993e6ca5efd4c415916c8a8d49dfaedd7c006359194e759fdc574187856453d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "          ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fddb9b6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fddb9b6_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/fddb9b6_part_1.css");
            // line 8
            echo "          <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
          ";
        } else {
            // asset "fddb9b6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fddb9b6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/fddb9b6.css");
            echo "          <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
          ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        ";
        
        $__internal_993e6ca5efd4c415916c8a8d49dfaedd7c006359194e759fdc574187856453d0->leave($__internal_993e6ca5efd4c415916c8a8d49dfaedd7c006359194e759fdc574187856453d0_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa0b3d82bf50556d0871634d2742aa621f8be3f24fc558a51a4f1d63295eaffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0b3d82bf50556d0871634d2742aa621f8be3f24fc558a51a4f1d63295eaffd->enter($__internal_fa0b3d82bf50556d0871634d2742aa621f8be3f24fc558a51a4f1d63295eaffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa0b3d82bf50556d0871634d2742aa621f8be3f24fc558a51a4f1d63295eaffd->leave($__internal_fa0b3d82bf50556d0871634d2742aa621f8be3f24fc558a51a4f1d63295eaffd_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed02b38c24de6d211721d88a1ee65e6a8afdc023ef7c84e6116a98531e5a5f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed02b38c24de6d211721d88a1ee65e6a8afdc023ef7c84e6116a98531e5a5f89->enter($__internal_ed02b38c24de6d211721d88a1ee65e6a8afdc023ef7c84e6116a98531e5a5f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "          ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "215113c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_215113c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/215113c_part_1.js");
            // line 17
            echo "          <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
        } else {
            // asset "215113c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_215113c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/215113c.js");
            echo "          <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "        ";
        
        $__internal_ed02b38c24de6d211721d88a1ee65e6a8afdc023ef7c84e6116a98531e5a5f89->leave($__internal_ed02b38c24de6d211721d88a1ee65e6a8afdc023ef7c84e6116a98531e5a5f89_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 19,  125 => 17,  120 => 16,  114 => 15,  103 => 14,  96 => 10,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 20,  47 => 15,  45 => 14,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
          {% stylesheets '@bootstrap_css' %}
          <link rel=\"stylesheet\" href=\"{{ asset_url }}\">
          {% endstylesheets %}
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
          {% javascripts '@bootstrap_js' %}
          <script src=\"{{ asset_url }}\"></script>
          {% endjavascripts %}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/symfony/app/Resources/views/base.html.twig");
    }
}
