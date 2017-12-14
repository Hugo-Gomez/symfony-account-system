<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3c82e0b2f4417d91f86896db7d955918a1f191021362516d8e8caa3096515a76 extends Twig_Template
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
        $__internal_b566e78d4e847df09a9cc0c2f4d32443f19b071252c44370aac9e1a65e835ca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b566e78d4e847df09a9cc0c2f4d32443f19b071252c44370aac9e1a65e835ca1->enter($__internal_b566e78d4e847df09a9cc0c2f4d32443f19b071252c44370aac9e1a65e835ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f54240b28456a4a5734e912b2d61baf7fbc532516ac94f23bd4409df93406656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54240b28456a4a5734e912b2d61baf7fbc532516ac94f23bd4409df93406656->enter($__internal_f54240b28456a4a5734e912b2d61baf7fbc532516ac94f23bd4409df93406656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b566e78d4e847df09a9cc0c2f4d32443f19b071252c44370aac9e1a65e835ca1->leave($__internal_b566e78d4e847df09a9cc0c2f4d32443f19b071252c44370aac9e1a65e835ca1_prof);

        
        $__internal_f54240b28456a4a5734e912b2d61baf7fbc532516ac94f23bd4409df93406656->leave($__internal_f54240b28456a4a5734e912b2d61baf7fbc532516ac94f23bd4409df93406656_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
