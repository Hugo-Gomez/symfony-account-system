<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ef0160912d67be99ee2a19c83e7db796c257132c3d290855f0611250adc64ace extends Twig_Template
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
        $__internal_d368db6daa49130d29525aa4ad138221dd58152dedf8711034d59cad7d96444c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d368db6daa49130d29525aa4ad138221dd58152dedf8711034d59cad7d96444c->enter($__internal_d368db6daa49130d29525aa4ad138221dd58152dedf8711034d59cad7d96444c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_faf9a961a5b65093c564f84879426f437808183374787aafc54e5948c044c268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf9a961a5b65093c564f84879426f437808183374787aafc54e5948c044c268->enter($__internal_faf9a961a5b65093c564f84879426f437808183374787aafc54e5948c044c268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d368db6daa49130d29525aa4ad138221dd58152dedf8711034d59cad7d96444c->leave($__internal_d368db6daa49130d29525aa4ad138221dd58152dedf8711034d59cad7d96444c_prof);

        
        $__internal_faf9a961a5b65093c564f84879426f437808183374787aafc54e5948c044c268->leave($__internal_faf9a961a5b65093c564f84879426f437808183374787aafc54e5948c044c268_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
