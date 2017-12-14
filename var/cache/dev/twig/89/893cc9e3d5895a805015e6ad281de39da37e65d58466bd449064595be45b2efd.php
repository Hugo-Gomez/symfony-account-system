<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cc0ebe99faeb723c02154106119a5ef6e33fb1c77b383798314ddb982b2996ee extends Twig_Template
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
        $__internal_331b7967924edddd56273b4f9390812ec3bd19cca6901b3fa134c5c7950fd367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331b7967924edddd56273b4f9390812ec3bd19cca6901b3fa134c5c7950fd367->enter($__internal_331b7967924edddd56273b4f9390812ec3bd19cca6901b3fa134c5c7950fd367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f712f14fd34993d6bf8cee71cf79c9e5174f41b27413ca6bd68099f296d759aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f712f14fd34993d6bf8cee71cf79c9e5174f41b27413ca6bd68099f296d759aa->enter($__internal_f712f14fd34993d6bf8cee71cf79c9e5174f41b27413ca6bd68099f296d759aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_331b7967924edddd56273b4f9390812ec3bd19cca6901b3fa134c5c7950fd367->leave($__internal_331b7967924edddd56273b4f9390812ec3bd19cca6901b3fa134c5c7950fd367_prof);

        
        $__internal_f712f14fd34993d6bf8cee71cf79c9e5174f41b27413ca6bd68099f296d759aa->leave($__internal_f712f14fd34993d6bf8cee71cf79c9e5174f41b27413ca6bd68099f296d759aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
