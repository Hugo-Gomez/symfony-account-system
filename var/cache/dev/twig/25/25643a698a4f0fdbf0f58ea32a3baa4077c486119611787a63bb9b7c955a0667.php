<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_83b47f53f62ead842cc624067b5a0fcdf86edb664aca498ab35561f897421bad extends Twig_Template
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
        $__internal_efe5da553df957527d6bf57b22da11ee06ea08ab037a65368083dc2961c3326b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe5da553df957527d6bf57b22da11ee06ea08ab037a65368083dc2961c3326b->enter($__internal_efe5da553df957527d6bf57b22da11ee06ea08ab037a65368083dc2961c3326b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_a5bd1a9ab79b4ecd23917590e6eadb226464d80c9a355dd82d450d8949ca8cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5bd1a9ab79b4ecd23917590e6eadb226464d80c9a355dd82d450d8949ca8cc8->enter($__internal_a5bd1a9ab79b4ecd23917590e6eadb226464d80c9a355dd82d450d8949ca8cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_efe5da553df957527d6bf57b22da11ee06ea08ab037a65368083dc2961c3326b->leave($__internal_efe5da553df957527d6bf57b22da11ee06ea08ab037a65368083dc2961c3326b_prof);

        
        $__internal_a5bd1a9ab79b4ecd23917590e6eadb226464d80c9a355dd82d450d8949ca8cc8->leave($__internal_a5bd1a9ab79b4ecd23917590e6eadb226464d80c9a355dd82d450d8949ca8cc8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
