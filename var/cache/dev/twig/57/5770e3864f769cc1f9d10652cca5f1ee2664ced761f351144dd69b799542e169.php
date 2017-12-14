<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7884ca42f086ff2bc1d6f8f5dd1a1a5ab7665dbf7c78b285e67aa24d2a4260e8 extends Twig_Template
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
        $__internal_ddccb1f4a023fcf9867b5b159a12eb1a6b9ae9004f63d910ae0823c7b6faad38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddccb1f4a023fcf9867b5b159a12eb1a6b9ae9004f63d910ae0823c7b6faad38->enter($__internal_ddccb1f4a023fcf9867b5b159a12eb1a6b9ae9004f63d910ae0823c7b6faad38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_789c8f2fd67aac670201caf5c2f37240f1d433aa6ec6b7e9a0bf3732a15e681b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789c8f2fd67aac670201caf5c2f37240f1d433aa6ec6b7e9a0bf3732a15e681b->enter($__internal_789c8f2fd67aac670201caf5c2f37240f1d433aa6ec6b7e9a0bf3732a15e681b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ddccb1f4a023fcf9867b5b159a12eb1a6b9ae9004f63d910ae0823c7b6faad38->leave($__internal_ddccb1f4a023fcf9867b5b159a12eb1a6b9ae9004f63d910ae0823c7b6faad38_prof);

        
        $__internal_789c8f2fd67aac670201caf5c2f37240f1d433aa6ec6b7e9a0bf3732a15e681b->leave($__internal_789c8f2fd67aac670201caf5c2f37240f1d433aa6ec6b7e9a0bf3732a15e681b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
