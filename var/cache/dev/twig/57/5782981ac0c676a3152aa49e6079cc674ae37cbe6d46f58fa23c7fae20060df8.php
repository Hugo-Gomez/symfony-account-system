<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_6a5ad3915ac2cdcf3c6b790d5988080c6a326276bab7894bd7a4b6c2d52c24b9 extends Twig_Template
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
        $__internal_1764a910c0d647965dc4d8ad594e753b0006c552c1be834ed8935ba92ea8c249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1764a910c0d647965dc4d8ad594e753b0006c552c1be834ed8935ba92ea8c249->enter($__internal_1764a910c0d647965dc4d8ad594e753b0006c552c1be834ed8935ba92ea8c249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_7a27fe8a61a2b6f6a5e091905b0d30b967078fa9c998661721ae275dc2c4441c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a27fe8a61a2b6f6a5e091905b0d30b967078fa9c998661721ae275dc2c4441c->enter($__internal_7a27fe8a61a2b6f6a5e091905b0d30b967078fa9c998661721ae275dc2c4441c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1764a910c0d647965dc4d8ad594e753b0006c552c1be834ed8935ba92ea8c249->leave($__internal_1764a910c0d647965dc4d8ad594e753b0006c552c1be834ed8935ba92ea8c249_prof);

        
        $__internal_7a27fe8a61a2b6f6a5e091905b0d30b967078fa9c998661721ae275dc2c4441c->leave($__internal_7a27fe8a61a2b6f6a5e091905b0d30b967078fa9c998661721ae275dc2c4441c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
