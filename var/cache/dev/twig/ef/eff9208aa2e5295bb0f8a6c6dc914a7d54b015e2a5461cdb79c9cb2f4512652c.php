<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b381bc51034a7a41ce09b20b837208bafd30867da100db8d5ff432b360871243 extends Twig_Template
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
        $__internal_d109593bbf55fe6dd05b259a4cc67c7f7e77888f1494fdf42bfa48e45d8e52db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d109593bbf55fe6dd05b259a4cc67c7f7e77888f1494fdf42bfa48e45d8e52db->enter($__internal_d109593bbf55fe6dd05b259a4cc67c7f7e77888f1494fdf42bfa48e45d8e52db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_7fc50eeae311c480c278a025d9445ef34c4207490fb23a4823370376d185cb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc50eeae311c480c278a025d9445ef34c4207490fb23a4823370376d185cb48->enter($__internal_7fc50eeae311c480c278a025d9445ef34c4207490fb23a4823370376d185cb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d109593bbf55fe6dd05b259a4cc67c7f7e77888f1494fdf42bfa48e45d8e52db->leave($__internal_d109593bbf55fe6dd05b259a4cc67c7f7e77888f1494fdf42bfa48e45d8e52db_prof);

        
        $__internal_7fc50eeae311c480c278a025d9445ef34c4207490fb23a4823370376d185cb48->leave($__internal_7fc50eeae311c480c278a025d9445ef34c4207490fb23a4823370376d185cb48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
