<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5fa45e1bf696c1733db08e9c579bfe9c2be7c6e5156d498b34b7baa92b973d21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1be0c197fe5a8036cdff2e54aec3449512b090e01a62969e9aeeb8fa106352ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be0c197fe5a8036cdff2e54aec3449512b090e01a62969e9aeeb8fa106352ba->enter($__internal_1be0c197fe5a8036cdff2e54aec3449512b090e01a62969e9aeeb8fa106352ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d04eac23f6b5ea3b81add34c6772da4c6bf6eaa275deaacf4c90cbec34c45213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04eac23f6b5ea3b81add34c6772da4c6bf6eaa275deaacf4c90cbec34c45213->enter($__internal_d04eac23f6b5ea3b81add34c6772da4c6bf6eaa275deaacf4c90cbec34c45213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1be0c197fe5a8036cdff2e54aec3449512b090e01a62969e9aeeb8fa106352ba->leave($__internal_1be0c197fe5a8036cdff2e54aec3449512b090e01a62969e9aeeb8fa106352ba_prof);

        
        $__internal_d04eac23f6b5ea3b81add34c6772da4c6bf6eaa275deaacf4c90cbec34c45213->leave($__internal_d04eac23f6b5ea3b81add34c6772da4c6bf6eaa275deaacf4c90cbec34c45213_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5c40ca1b4451b62872a0de9333b8f702d37ce3aa49146387abe98c698cf032c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c40ca1b4451b62872a0de9333b8f702d37ce3aa49146387abe98c698cf032c->enter($__internal_c5c40ca1b4451b62872a0de9333b8f702d37ce3aa49146387abe98c698cf032c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0306da565e971b7c401a26480c6ca8693717293bd8d023f10a135efb222afd04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0306da565e971b7c401a26480c6ca8693717293bd8d023f10a135efb222afd04->enter($__internal_0306da565e971b7c401a26480c6ca8693717293bd8d023f10a135efb222afd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0306da565e971b7c401a26480c6ca8693717293bd8d023f10a135efb222afd04->leave($__internal_0306da565e971b7c401a26480c6ca8693717293bd8d023f10a135efb222afd04_prof);

        
        $__internal_c5c40ca1b4451b62872a0de9333b8f702d37ce3aa49146387abe98c698cf032c->leave($__internal_c5c40ca1b4451b62872a0de9333b8f702d37ce3aa49146387abe98c698cf032c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1ca48829fb672f468a00b4fc6126bf26c28232eb9e491dc267119a405d09eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ca48829fb672f468a00b4fc6126bf26c28232eb9e491dc267119a405d09eb0->enter($__internal_d1ca48829fb672f468a00b4fc6126bf26c28232eb9e491dc267119a405d09eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_40b6e42454d1ca8ac0f3a05309bbfae51e8a40c57a65919d6928ebc6729dea7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b6e42454d1ca8ac0f3a05309bbfae51e8a40c57a65919d6928ebc6729dea7e->enter($__internal_40b6e42454d1ca8ac0f3a05309bbfae51e8a40c57a65919d6928ebc6729dea7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_40b6e42454d1ca8ac0f3a05309bbfae51e8a40c57a65919d6928ebc6729dea7e->leave($__internal_40b6e42454d1ca8ac0f3a05309bbfae51e8a40c57a65919d6928ebc6729dea7e_prof);

        
        $__internal_d1ca48829fb672f468a00b4fc6126bf26c28232eb9e491dc267119a405d09eb0->leave($__internal_d1ca48829fb672f468a00b4fc6126bf26c28232eb9e491dc267119a405d09eb0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3e969c83e11abf865aecf7021f573f0fe0798119e478358ca6d51b5f7b697b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e969c83e11abf865aecf7021f573f0fe0798119e478358ca6d51b5f7b697b5->enter($__internal_d3e969c83e11abf865aecf7021f573f0fe0798119e478358ca6d51b5f7b697b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3bc6cb7b82ed9a39a15b901ceb4765609db254eabed751d310d9e2a459c3a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3bc6cb7b82ed9a39a15b901ceb4765609db254eabed751d310d9e2a459c3a9f->enter($__internal_c3bc6cb7b82ed9a39a15b901ceb4765609db254eabed751d310d9e2a459c3a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c3bc6cb7b82ed9a39a15b901ceb4765609db254eabed751d310d9e2a459c3a9f->leave($__internal_c3bc6cb7b82ed9a39a15b901ceb4765609db254eabed751d310d9e2a459c3a9f_prof);

        
        $__internal_d3e969c83e11abf865aecf7021f573f0fe0798119e478358ca6d51b5f7b697b5->leave($__internal_d3e969c83e11abf865aecf7021f573f0fe0798119e478358ca6d51b5f7b697b5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
