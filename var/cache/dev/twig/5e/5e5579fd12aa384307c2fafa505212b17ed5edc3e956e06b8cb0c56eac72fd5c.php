<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1f7a1a5ae9abce9ae5e0cc3a1b2677e69e817d660267c8a862a9fce6f38f923e extends Twig_Template
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
        $__internal_869b430f20c28c5fc5f925a679c434385a8004faff19c9087cf15ec895a0f70f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869b430f20c28c5fc5f925a679c434385a8004faff19c9087cf15ec895a0f70f->enter($__internal_869b430f20c28c5fc5f925a679c434385a8004faff19c9087cf15ec895a0f70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_884ea7bbc99535b1c4977512e4690a9050838992f70bc4d3f8415c45501d4d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884ea7bbc99535b1c4977512e4690a9050838992f70bc4d3f8415c45501d4d39->enter($__internal_884ea7bbc99535b1c4977512e4690a9050838992f70bc4d3f8415c45501d4d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_869b430f20c28c5fc5f925a679c434385a8004faff19c9087cf15ec895a0f70f->leave($__internal_869b430f20c28c5fc5f925a679c434385a8004faff19c9087cf15ec895a0f70f_prof);

        
        $__internal_884ea7bbc99535b1c4977512e4690a9050838992f70bc4d3f8415c45501d4d39->leave($__internal_884ea7bbc99535b1c4977512e4690a9050838992f70bc4d3f8415c45501d4d39_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
