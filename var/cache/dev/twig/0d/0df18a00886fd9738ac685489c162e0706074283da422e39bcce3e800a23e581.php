<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_c69b016ef299ec2de9505b507d76c4c1ebd5888842c6980e0fdbcb403185c5a1 extends Twig_Template
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
        $__internal_deb17737128ab21100381f9b68cbab6c2e56d5bfdf8cc8bc58b3ca5cdc2f694b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb17737128ab21100381f9b68cbab6c2e56d5bfdf8cc8bc58b3ca5cdc2f694b->enter($__internal_deb17737128ab21100381f9b68cbab6c2e56d5bfdf8cc8bc58b3ca5cdc2f694b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_fb237ec53e8746a4beed7c35ab3315d20438770054799ca4d93a7eef0859e704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb237ec53e8746a4beed7c35ab3315d20438770054799ca4d93a7eef0859e704->enter($__internal_fb237ec53e8746a4beed7c35ab3315d20438770054799ca4d93a7eef0859e704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_deb17737128ab21100381f9b68cbab6c2e56d5bfdf8cc8bc58b3ca5cdc2f694b->leave($__internal_deb17737128ab21100381f9b68cbab6c2e56d5bfdf8cc8bc58b3ca5cdc2f694b_prof);

        
        $__internal_fb237ec53e8746a4beed7c35ab3315d20438770054799ca4d93a7eef0859e704->leave($__internal_fb237ec53e8746a4beed7c35ab3315d20438770054799ca4d93a7eef0859e704_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
