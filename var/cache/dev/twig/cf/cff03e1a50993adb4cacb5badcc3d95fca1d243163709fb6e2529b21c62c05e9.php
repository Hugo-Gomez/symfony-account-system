<?php

/* AccountBundle:Default:index.html.twig */
class __TwigTemplate_c59dafef6c66b9d985acf34f5b6e7b97c908319967c3b13e7e6d13e8fa938bde extends Twig_Template
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
        $__internal_bf26703b995b6b0bc54d7fc5ab52ec8f41fe99fcda923bc7c393d56e3daf18f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf26703b995b6b0bc54d7fc5ab52ec8f41fe99fcda923bc7c393d56e3daf18f1->enter($__internal_bf26703b995b6b0bc54d7fc5ab52ec8f41fe99fcda923bc7c393d56e3daf18f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Default:index.html.twig"));

        $__internal_385e0742cf60392f7559153b97c79713d9c9a61818b1f2077e2796bd11b98513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385e0742cf60392f7559153b97c79713d9c9a61818b1f2077e2796bd11b98513->enter($__internal_385e0742cf60392f7559153b97c79713d9c9a61818b1f2077e2796bd11b98513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_bf26703b995b6b0bc54d7fc5ab52ec8f41fe99fcda923bc7c393d56e3daf18f1->leave($__internal_bf26703b995b6b0bc54d7fc5ab52ec8f41fe99fcda923bc7c393d56e3daf18f1_prof);

        
        $__internal_385e0742cf60392f7559153b97c79713d9c9a61818b1f2077e2796bd11b98513->leave($__internal_385e0742cf60392f7559153b97c79713d9c9a61818b1f2077e2796bd11b98513_prof);

    }

    public function getTemplateName()
    {
        return "AccountBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "AccountBundle:Default:index.html.twig", "/symfony/src/AccountBundle/Resources/views/Default/index.html.twig");
    }
}
