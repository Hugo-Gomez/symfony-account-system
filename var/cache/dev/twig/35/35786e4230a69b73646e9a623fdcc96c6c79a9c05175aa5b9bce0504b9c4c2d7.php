<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_6471df53b06390191aaf32aa5e837db8295a960ad8ef9a87473e76b85c349460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62ccd3ead2ca056997cf5d8c3c898e299925d4791dab12c4f3d31c0bdd91cf77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62ccd3ead2ca056997cf5d8c3c898e299925d4791dab12c4f3d31c0bdd91cf77->enter($__internal_62ccd3ead2ca056997cf5d8c3c898e299925d4791dab12c4f3d31c0bdd91cf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_5953c27f0beaf6495b7f7d706645faa7a4c9508378910039240832490a750c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5953c27f0beaf6495b7f7d706645faa7a4c9508378910039240832490a750c5f->enter($__internal_5953c27f0beaf6495b7f7d706645faa7a4c9508378910039240832490a750c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_62ccd3ead2ca056997cf5d8c3c898e299925d4791dab12c4f3d31c0bdd91cf77->leave($__internal_62ccd3ead2ca056997cf5d8c3c898e299925d4791dab12c4f3d31c0bdd91cf77_prof);

        
        $__internal_5953c27f0beaf6495b7f7d706645faa7a4c9508378910039240832490a750c5f->leave($__internal_5953c27f0beaf6495b7f7d706645faa7a4c9508378910039240832490a750c5f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
