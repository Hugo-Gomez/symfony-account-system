<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f12f92a63f5e297d94e7793a319af649e49d8084c19b5265d700e636a5c5a29a extends Twig_Template
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
        $__internal_c44afc2692e4f0cdaa13bafd4380903f1958b3a7d960e2270aa4256963883bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44afc2692e4f0cdaa13bafd4380903f1958b3a7d960e2270aa4256963883bf2->enter($__internal_c44afc2692e4f0cdaa13bafd4380903f1958b3a7d960e2270aa4256963883bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_c38108a827b132f50c64aafaadf630835707da0272c83339b9c4f2c44a6bc96b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38108a827b132f50c64aafaadf630835707da0272c83339b9c4f2c44a6bc96b->enter($__internal_c38108a827b132f50c64aafaadf630835707da0272c83339b9c4f2c44a6bc96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c44afc2692e4f0cdaa13bafd4380903f1958b3a7d960e2270aa4256963883bf2->leave($__internal_c44afc2692e4f0cdaa13bafd4380903f1958b3a7d960e2270aa4256963883bf2_prof);

        
        $__internal_c38108a827b132f50c64aafaadf630835707da0272c83339b9c4f2c44a6bc96b->leave($__internal_c38108a827b132f50c64aafaadf630835707da0272c83339b9c4f2c44a6bc96b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
