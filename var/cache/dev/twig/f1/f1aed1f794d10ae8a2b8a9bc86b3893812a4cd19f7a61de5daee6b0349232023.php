<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1c4e518dc8451653edf3ad9336f2db9b568433ebfec617f8bc74d1e779fbeffe extends Twig_Template
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
        $__internal_522a925ca0d472306ef0437c9663b611f8fb0f5372fa5dcf5fc27dc24b19de3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522a925ca0d472306ef0437c9663b611f8fb0f5372fa5dcf5fc27dc24b19de3d->enter($__internal_522a925ca0d472306ef0437c9663b611f8fb0f5372fa5dcf5fc27dc24b19de3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_30a62d2670520597089a11687d3b4d61f879185076c3d7eb42f3a4ee6fd0d58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a62d2670520597089a11687d3b4d61f879185076c3d7eb42f3a4ee6fd0d58d->enter($__internal_30a62d2670520597089a11687d3b4d61f879185076c3d7eb42f3a4ee6fd0d58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_522a925ca0d472306ef0437c9663b611f8fb0f5372fa5dcf5fc27dc24b19de3d->leave($__internal_522a925ca0d472306ef0437c9663b611f8fb0f5372fa5dcf5fc27dc24b19de3d_prof);

        
        $__internal_30a62d2670520597089a11687d3b4d61f879185076c3d7eb42f3a4ee6fd0d58d->leave($__internal_30a62d2670520597089a11687d3b4d61f879185076c3d7eb42f3a4ee6fd0d58d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
