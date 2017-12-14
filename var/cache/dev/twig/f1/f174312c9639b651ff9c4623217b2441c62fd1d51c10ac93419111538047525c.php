<?php

/* base.html.twig */
class __TwigTemplate_071aec71e7db35d5e14f133ff0c8359aadca9b56063783e196eece60bbee2cf3 extends Twig_Template
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
        $__internal_58f2027c63657d2e7046fd2016059fe1a4b1a1f815c22b7083f3b65ae5bc6aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58f2027c63657d2e7046fd2016059fe1a4b1a1f815c22b7083f3b65ae5bc6aeb->enter($__internal_58f2027c63657d2e7046fd2016059fe1a4b1a1f815c22b7083f3b65ae5bc6aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cfa6fade4d594d446f007b9bddcd1ee3dbe1f68e47b1adb176b03e3546ad0e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa6fade4d594d446f007b9bddcd1ee3dbe1f68e47b1adb176b03e3546ad0e55->enter($__internal_cfa6fade4d594d446f007b9bddcd1ee3dbe1f68e47b1adb176b03e3546ad0e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_58f2027c63657d2e7046fd2016059fe1a4b1a1f815c22b7083f3b65ae5bc6aeb->leave($__internal_58f2027c63657d2e7046fd2016059fe1a4b1a1f815c22b7083f3b65ae5bc6aeb_prof);

        
        $__internal_cfa6fade4d594d446f007b9bddcd1ee3dbe1f68e47b1adb176b03e3546ad0e55->leave($__internal_cfa6fade4d594d446f007b9bddcd1ee3dbe1f68e47b1adb176b03e3546ad0e55_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fad0a1286b3d485dc964fd0d71bce4e615c6498ceecb82e94ededfb8026174f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fad0a1286b3d485dc964fd0d71bce4e615c6498ceecb82e94ededfb8026174f->enter($__internal_1fad0a1286b3d485dc964fd0d71bce4e615c6498ceecb82e94ededfb8026174f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af5fb893694acf75fdd44a785da810f1c88b9ea156d38399979bda6b3c8a7623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5fb893694acf75fdd44a785da810f1c88b9ea156d38399979bda6b3c8a7623->enter($__internal_af5fb893694acf75fdd44a785da810f1c88b9ea156d38399979bda6b3c8a7623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_af5fb893694acf75fdd44a785da810f1c88b9ea156d38399979bda6b3c8a7623->leave($__internal_af5fb893694acf75fdd44a785da810f1c88b9ea156d38399979bda6b3c8a7623_prof);

        
        $__internal_1fad0a1286b3d485dc964fd0d71bce4e615c6498ceecb82e94ededfb8026174f->leave($__internal_1fad0a1286b3d485dc964fd0d71bce4e615c6498ceecb82e94ededfb8026174f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ae733798b6ccd542790057953919fd67030a24bc15d432930248323e5496765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae733798b6ccd542790057953919fd67030a24bc15d432930248323e5496765->enter($__internal_0ae733798b6ccd542790057953919fd67030a24bc15d432930248323e5496765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_053cdf193d5793b7295e590f1895a9b9b07a15fd75b6cfa6388e884e3cbde6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053cdf193d5793b7295e590f1895a9b9b07a15fd75b6cfa6388e884e3cbde6b9->enter($__internal_053cdf193d5793b7295e590f1895a9b9b07a15fd75b6cfa6388e884e3cbde6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_053cdf193d5793b7295e590f1895a9b9b07a15fd75b6cfa6388e884e3cbde6b9->leave($__internal_053cdf193d5793b7295e590f1895a9b9b07a15fd75b6cfa6388e884e3cbde6b9_prof);

        
        $__internal_0ae733798b6ccd542790057953919fd67030a24bc15d432930248323e5496765->leave($__internal_0ae733798b6ccd542790057953919fd67030a24bc15d432930248323e5496765_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f310176ea696fe7f738234abde2003b2a0bb6693c20b1c4b0dc50efc1d7440f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f310176ea696fe7f738234abde2003b2a0bb6693c20b1c4b0dc50efc1d7440f->enter($__internal_9f310176ea696fe7f738234abde2003b2a0bb6693c20b1c4b0dc50efc1d7440f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10b217b1ac080fa2a3f90c69764c0b296cacd1d0bff81fe5e7ea7de97e99efe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b217b1ac080fa2a3f90c69764c0b296cacd1d0bff81fe5e7ea7de97e99efe9->enter($__internal_10b217b1ac080fa2a3f90c69764c0b296cacd1d0bff81fe5e7ea7de97e99efe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_10b217b1ac080fa2a3f90c69764c0b296cacd1d0bff81fe5e7ea7de97e99efe9->leave($__internal_10b217b1ac080fa2a3f90c69764c0b296cacd1d0bff81fe5e7ea7de97e99efe9_prof);

        
        $__internal_9f310176ea696fe7f738234abde2003b2a0bb6693c20b1c4b0dc50efc1d7440f->leave($__internal_9f310176ea696fe7f738234abde2003b2a0bb6693c20b1c4b0dc50efc1d7440f_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_480b8284e3e385067a47588e84c2154f0d519b573250bb46d72bc41ed990e487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480b8284e3e385067a47588e84c2154f0d519b573250bb46d72bc41ed990e487->enter($__internal_480b8284e3e385067a47588e84c2154f0d519b573250bb46d72bc41ed990e487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9894b75d0fae135332fed578199a8c61502e8f9f0d4754ccb7aecc42495e4c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9894b75d0fae135332fed578199a8c61502e8f9f0d4754ccb7aecc42495e4c06->enter($__internal_9894b75d0fae135332fed578199a8c61502e8f9f0d4754ccb7aecc42495e4c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9894b75d0fae135332fed578199a8c61502e8f9f0d4754ccb7aecc42495e4c06->leave($__internal_9894b75d0fae135332fed578199a8c61502e8f9f0d4754ccb7aecc42495e4c06_prof);

        
        $__internal_480b8284e3e385067a47588e84c2154f0d519b573250bb46d72bc41ed990e487->leave($__internal_480b8284e3e385067a47588e84c2154f0d519b573250bb46d72bc41ed990e487_prof);

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
        return array (  166 => 19,  152 => 17,  147 => 16,  138 => 15,  121 => 14,  111 => 10,  97 => 8,  92 => 7,  83 => 6,  65 => 5,  53 => 20,  50 => 15,  48 => 14,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
