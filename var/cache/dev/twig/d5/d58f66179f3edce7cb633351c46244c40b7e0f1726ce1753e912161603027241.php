<?php

/* form_table_layout.html.twig */
class __TwigTemplate_127986c5684a4a9dad6154015459e0445512d06f55bcf4fae8aa4762d2ae7856 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dafb94c0da46d8b5e99669f40848c07f75e886b2b170208e5cf3c51f84968e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dafb94c0da46d8b5e99669f40848c07f75e886b2b170208e5cf3c51f84968e4->enter($__internal_8dafb94c0da46d8b5e99669f40848c07f75e886b2b170208e5cf3c51f84968e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_12377aedeb91d5200428612706d45d157f387344ab7a1bed7ccef01c9d6e75b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12377aedeb91d5200428612706d45d157f387344ab7a1bed7ccef01c9d6e75b7->enter($__internal_12377aedeb91d5200428612706d45d157f387344ab7a1bed7ccef01c9d6e75b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_8dafb94c0da46d8b5e99669f40848c07f75e886b2b170208e5cf3c51f84968e4->leave($__internal_8dafb94c0da46d8b5e99669f40848c07f75e886b2b170208e5cf3c51f84968e4_prof);

        
        $__internal_12377aedeb91d5200428612706d45d157f387344ab7a1bed7ccef01c9d6e75b7->leave($__internal_12377aedeb91d5200428612706d45d157f387344ab7a1bed7ccef01c9d6e75b7_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_385966f9c0ca0dee122c66881242cb2cf656f961b7a89c484ebefcf9fb2d1556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385966f9c0ca0dee122c66881242cb2cf656f961b7a89c484ebefcf9fb2d1556->enter($__internal_385966f9c0ca0dee122c66881242cb2cf656f961b7a89c484ebefcf9fb2d1556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4ef5f50f8debf438fc087968a855e78ce7c4efa6971845225ecff0718e3fede0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef5f50f8debf438fc087968a855e78ce7c4efa6971845225ecff0718e3fede0->enter($__internal_4ef5f50f8debf438fc087968a855e78ce7c4efa6971845225ecff0718e3fede0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_4ef5f50f8debf438fc087968a855e78ce7c4efa6971845225ecff0718e3fede0->leave($__internal_4ef5f50f8debf438fc087968a855e78ce7c4efa6971845225ecff0718e3fede0_prof);

        
        $__internal_385966f9c0ca0dee122c66881242cb2cf656f961b7a89c484ebefcf9fb2d1556->leave($__internal_385966f9c0ca0dee122c66881242cb2cf656f961b7a89c484ebefcf9fb2d1556_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e2dd1f4634814ba23cfa8a7559b8c79de52ff1f7a7b2238645c691e15df9116d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2dd1f4634814ba23cfa8a7559b8c79de52ff1f7a7b2238645c691e15df9116d->enter($__internal_e2dd1f4634814ba23cfa8a7559b8c79de52ff1f7a7b2238645c691e15df9116d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_476883de7916314a792f236ca25b726c0c96f645004ad59f062b2d40e63490dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476883de7916314a792f236ca25b726c0c96f645004ad59f062b2d40e63490dd->enter($__internal_476883de7916314a792f236ca25b726c0c96f645004ad59f062b2d40e63490dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_476883de7916314a792f236ca25b726c0c96f645004ad59f062b2d40e63490dd->leave($__internal_476883de7916314a792f236ca25b726c0c96f645004ad59f062b2d40e63490dd_prof);

        
        $__internal_e2dd1f4634814ba23cfa8a7559b8c79de52ff1f7a7b2238645c691e15df9116d->leave($__internal_e2dd1f4634814ba23cfa8a7559b8c79de52ff1f7a7b2238645c691e15df9116d_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_44b8b199e1e51ef3fdc52d5cbb00a3eec0dc7f10743aefd0ae56a2add6caa7ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b8b199e1e51ef3fdc52d5cbb00a3eec0dc7f10743aefd0ae56a2add6caa7ce->enter($__internal_44b8b199e1e51ef3fdc52d5cbb00a3eec0dc7f10743aefd0ae56a2add6caa7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_ff6d51e1eac74b38db8eaef2dc941c9ecaadfd0bc3c6f360b821895b246bf82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6d51e1eac74b38db8eaef2dc941c9ecaadfd0bc3c6f360b821895b246bf82f->enter($__internal_ff6d51e1eac74b38db8eaef2dc941c9ecaadfd0bc3c6f360b821895b246bf82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_ff6d51e1eac74b38db8eaef2dc941c9ecaadfd0bc3c6f360b821895b246bf82f->leave($__internal_ff6d51e1eac74b38db8eaef2dc941c9ecaadfd0bc3c6f360b821895b246bf82f_prof);

        
        $__internal_44b8b199e1e51ef3fdc52d5cbb00a3eec0dc7f10743aefd0ae56a2add6caa7ce->leave($__internal_44b8b199e1e51ef3fdc52d5cbb00a3eec0dc7f10743aefd0ae56a2add6caa7ce_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_b28403512516131a50af198619e2ba0e5f4e90131fd69fa41113ffff10da481e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28403512516131a50af198619e2ba0e5f4e90131fd69fa41113ffff10da481e->enter($__internal_b28403512516131a50af198619e2ba0e5f4e90131fd69fa41113ffff10da481e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_2882a1d87beb5314f6c2624c2f2711616603399372bbf22f525633cb3453ca53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2882a1d87beb5314f6c2624c2f2711616603399372bbf22f525633cb3453ca53->enter($__internal_2882a1d87beb5314f6c2624c2f2711616603399372bbf22f525633cb3453ca53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_2882a1d87beb5314f6c2624c2f2711616603399372bbf22f525633cb3453ca53->leave($__internal_2882a1d87beb5314f6c2624c2f2711616603399372bbf22f525633cb3453ca53_prof);

        
        $__internal_b28403512516131a50af198619e2ba0e5f4e90131fd69fa41113ffff10da481e->leave($__internal_b28403512516131a50af198619e2ba0e5f4e90131fd69fa41113ffff10da481e_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
