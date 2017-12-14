<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6a42d8a7a450841c9b68b33102723ed922b00fdb75fa7740ea0183cfc30274dc extends Twig_Template
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
        $__internal_e1f7566c71ce648a10ba5900c57c5d9378828d29c65581db407f3e2403670cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f7566c71ce648a10ba5900c57c5d9378828d29c65581db407f3e2403670cab->enter($__internal_e1f7566c71ce648a10ba5900c57c5d9378828d29c65581db407f3e2403670cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_800137e981b2440fe7d5df9ab5c58736197f29d99d807360bfe45052de3651d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800137e981b2440fe7d5df9ab5c58736197f29d99d807360bfe45052de3651d8->enter($__internal_800137e981b2440fe7d5df9ab5c58736197f29d99d807360bfe45052de3651d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e1f7566c71ce648a10ba5900c57c5d9378828d29c65581db407f3e2403670cab->leave($__internal_e1f7566c71ce648a10ba5900c57c5d9378828d29c65581db407f3e2403670cab_prof);

        
        $__internal_800137e981b2440fe7d5df9ab5c58736197f29d99d807360bfe45052de3651d8->leave($__internal_800137e981b2440fe7d5df9ab5c58736197f29d99d807360bfe45052de3651d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
