<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4fc5914bd9a8606b4342a52ea4c895b78f9666da01020d4a384183adfe2f4525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_832d84735da69556a54f3a8f9204c8c5cf19ad2115b46aaa6c97e59ccc6b9b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_832d84735da69556a54f3a8f9204c8c5cf19ad2115b46aaa6c97e59ccc6b9b63->enter($__internal_832d84735da69556a54f3a8f9204c8c5cf19ad2115b46aaa6c97e59ccc6b9b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_38c1c8b8cd2d3df3e5b8479aa5a3be3d370ae823760a7a93a4e8a4aac05224f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c1c8b8cd2d3df3e5b8479aa5a3be3d370ae823760a7a93a4e8a4aac05224f5->enter($__internal_38c1c8b8cd2d3df3e5b8479aa5a3be3d370ae823760a7a93a4e8a4aac05224f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_832d84735da69556a54f3a8f9204c8c5cf19ad2115b46aaa6c97e59ccc6b9b63->leave($__internal_832d84735da69556a54f3a8f9204c8c5cf19ad2115b46aaa6c97e59ccc6b9b63_prof);

        
        $__internal_38c1c8b8cd2d3df3e5b8479aa5a3be3d370ae823760a7a93a4e8a4aac05224f5->leave($__internal_38c1c8b8cd2d3df3e5b8479aa5a3be3d370ae823760a7a93a4e8a4aac05224f5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_20cc3654135770a52cf0484955898e48827a310891a104bbf9a8e17b1b974fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20cc3654135770a52cf0484955898e48827a310891a104bbf9a8e17b1b974fd1->enter($__internal_20cc3654135770a52cf0484955898e48827a310891a104bbf9a8e17b1b974fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c19a934d3a2bb623f949dc39d5a9cbcb03294d443bcd330325968fde9b4e790e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19a934d3a2bb623f949dc39d5a9cbcb03294d443bcd330325968fde9b4e790e->enter($__internal_c19a934d3a2bb623f949dc39d5a9cbcb03294d443bcd330325968fde9b4e790e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c19a934d3a2bb623f949dc39d5a9cbcb03294d443bcd330325968fde9b4e790e->leave($__internal_c19a934d3a2bb623f949dc39d5a9cbcb03294d443bcd330325968fde9b4e790e_prof);

        
        $__internal_20cc3654135770a52cf0484955898e48827a310891a104bbf9a8e17b1b974fd1->leave($__internal_20cc3654135770a52cf0484955898e48827a310891a104bbf9a8e17b1b974fd1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
