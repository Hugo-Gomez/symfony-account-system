<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_38000460a86a840d7f0c37c5f46fed151cb87ee91ec83de6c4cecf1500892017 extends Twig_Template
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
        $__internal_81241a94f173c7b29e4ba8e41118b427130d631485359d413cdb9f286981575c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81241a94f173c7b29e4ba8e41118b427130d631485359d413cdb9f286981575c->enter($__internal_81241a94f173c7b29e4ba8e41118b427130d631485359d413cdb9f286981575c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_5a45b74120665f7925392b021704fb32cdb27ab8d2cee6cb207f62cb83f83b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a45b74120665f7925392b021704fb32cdb27ab8d2cee6cb207f62cb83f83b53->enter($__internal_5a45b74120665f7925392b021704fb32cdb27ab8d2cee6cb207f62cb83f83b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_81241a94f173c7b29e4ba8e41118b427130d631485359d413cdb9f286981575c->leave($__internal_81241a94f173c7b29e4ba8e41118b427130d631485359d413cdb9f286981575c_prof);

        
        $__internal_5a45b74120665f7925392b021704fb32cdb27ab8d2cee6cb207f62cb83f83b53->leave($__internal_5a45b74120665f7925392b021704fb32cdb27ab8d2cee6cb207f62cb83f83b53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
