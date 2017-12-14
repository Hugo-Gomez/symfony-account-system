<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_185e32aa15f327232c4dccfcdeb7275b621f3de0505314ead75e55e3cbc70b8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf84827b0325a06098482848a764e3676ab332611ab9a054953a4b164d8120c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf84827b0325a06098482848a764e3676ab332611ab9a054953a4b164d8120c6->enter($__internal_bf84827b0325a06098482848a764e3676ab332611ab9a054953a4b164d8120c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_711f57782f47ba627a950b9ccfeb45b9f4ba7694c9556d5581095d0b4906b0d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711f57782f47ba627a950b9ccfeb45b9f4ba7694c9556d5581095d0b4906b0d3->enter($__internal_711f57782f47ba627a950b9ccfeb45b9f4ba7694c9556d5581095d0b4906b0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_bf84827b0325a06098482848a764e3676ab332611ab9a054953a4b164d8120c6->leave($__internal_bf84827b0325a06098482848a764e3676ab332611ab9a054953a4b164d8120c6_prof);

        
        $__internal_711f57782f47ba627a950b9ccfeb45b9f4ba7694c9556d5581095d0b4906b0d3->leave($__internal_711f57782f47ba627a950b9ccfeb45b9f4ba7694c9556d5581095d0b4906b0d3_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_92af7dfa684e55d0cbb740cd4fe673c2beee8898a7658b0cc0984f2319449ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92af7dfa684e55d0cbb740cd4fe673c2beee8898a7658b0cc0984f2319449ea3->enter($__internal_92af7dfa684e55d0cbb740cd4fe673c2beee8898a7658b0cc0984f2319449ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_1fb94d96340d7c143fd5a07bd6a009c37be86cf05d89a6a083a720b74caf555c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb94d96340d7c143fd5a07bd6a009c37be86cf05d89a6a083a720b74caf555c->enter($__internal_1fb94d96340d7c143fd5a07bd6a009c37be86cf05d89a6a083a720b74caf555c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1fb94d96340d7c143fd5a07bd6a009c37be86cf05d89a6a083a720b74caf555c->leave($__internal_1fb94d96340d7c143fd5a07bd6a009c37be86cf05d89a6a083a720b74caf555c_prof);

        
        $__internal_92af7dfa684e55d0cbb740cd4fe673c2beee8898a7658b0cc0984f2319449ea3->leave($__internal_92af7dfa684e55d0cbb740cd4fe673c2beee8898a7658b0cc0984f2319449ea3_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_fe841406923a2e3f70665f0e5295815f0ad08e9b0a96439879818aa4aed12232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe841406923a2e3f70665f0e5295815f0ad08e9b0a96439879818aa4aed12232->enter($__internal_fe841406923a2e3f70665f0e5295815f0ad08e9b0a96439879818aa4aed12232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_30db4a7ac98d4d692780d8a0accac205853daf34af45018c0f703114f579a1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30db4a7ac98d4d692780d8a0accac205853daf34af45018c0f703114f579a1a5->enter($__internal_30db4a7ac98d4d692780d8a0accac205853daf34af45018c0f703114f579a1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_30db4a7ac98d4d692780d8a0accac205853daf34af45018c0f703114f579a1a5->leave($__internal_30db4a7ac98d4d692780d8a0accac205853daf34af45018c0f703114f579a1a5_prof);

        
        $__internal_fe841406923a2e3f70665f0e5295815f0ad08e9b0a96439879818aa4aed12232->leave($__internal_fe841406923a2e3f70665f0e5295815f0ad08e9b0a96439879818aa4aed12232_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_cd8c015a5f14452e0f0bf5a8774ed0dc9a96e86ee9d3ff4a146874b45842bf49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8c015a5f14452e0f0bf5a8774ed0dc9a96e86ee9d3ff4a146874b45842bf49->enter($__internal_cd8c015a5f14452e0f0bf5a8774ed0dc9a96e86ee9d3ff4a146874b45842bf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_a17d9c8bdbf5eaf518a9a5b5db433167487bb339f0228890c9e9f55a179fa209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17d9c8bdbf5eaf518a9a5b5db433167487bb339f0228890c9e9f55a179fa209->enter($__internal_a17d9c8bdbf5eaf518a9a5b5db433167487bb339f0228890c9e9f55a179fa209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_a17d9c8bdbf5eaf518a9a5b5db433167487bb339f0228890c9e9f55a179fa209->leave($__internal_a17d9c8bdbf5eaf518a9a5b5db433167487bb339f0228890c9e9f55a179fa209_prof);

        
        $__internal_cd8c015a5f14452e0f0bf5a8774ed0dc9a96e86ee9d3ff4a146874b45842bf49->leave($__internal_cd8c015a5f14452e0f0bf5a8774ed0dc9a96e86ee9d3ff4a146874b45842bf49_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_54935a18bcb26bff99dce33df117a1871d08e664f7347627215c5df81870c1cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54935a18bcb26bff99dce33df117a1871d08e664f7347627215c5df81870c1cb->enter($__internal_54935a18bcb26bff99dce33df117a1871d08e664f7347627215c5df81870c1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_7db141a6f9acc42be088d4430ac440a536a3683142f4741d30ae1c9594f8e4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db141a6f9acc42be088d4430ac440a536a3683142f4741d30ae1c9594f8e4c5->enter($__internal_7db141a6f9acc42be088d4430ac440a536a3683142f4741d30ae1c9594f8e4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_5a2bba4f5a06f479c8296441320adc8557802f22f26e9f429e60047d3ab7fec0 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_0b0d3be2b42b59c13b15e88a133c834033e4040d1d4064fe2311761c7229930c = "{{") && ('' === $__internal_0b0d3be2b42b59c13b15e88a133c834033e4040d1d4064fe2311761c7229930c || 0 === strpos($__internal_5a2bba4f5a06f479c8296441320adc8557802f22f26e9f429e60047d3ab7fec0, $__internal_0b0d3be2b42b59c13b15e88a133c834033e4040d1d4064fe2311761c7229930c)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_7db141a6f9acc42be088d4430ac440a536a3683142f4741d30ae1c9594f8e4c5->leave($__internal_7db141a6f9acc42be088d4430ac440a536a3683142f4741d30ae1c9594f8e4c5_prof);

        
        $__internal_54935a18bcb26bff99dce33df117a1871d08e664f7347627215c5df81870c1cb->leave($__internal_54935a18bcb26bff99dce33df117a1871d08e664f7347627215c5df81870c1cb_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_96a1814094dbcdd6504a7e8b0efcf046bd1dd1688a7707dec5ca95488c86ad4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a1814094dbcdd6504a7e8b0efcf046bd1dd1688a7707dec5ca95488c86ad4d->enter($__internal_96a1814094dbcdd6504a7e8b0efcf046bd1dd1688a7707dec5ca95488c86ad4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_82a97bd14ae6019a45ac9c9d4625d4428e1577c087c2891dc87f01b9d91f079e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a97bd14ae6019a45ac9c9d4625d4428e1577c087c2891dc87f01b9d91f079e->enter($__internal_82a97bd14ae6019a45ac9c9d4625d4428e1577c087c2891dc87f01b9d91f079e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_82a97bd14ae6019a45ac9c9d4625d4428e1577c087c2891dc87f01b9d91f079e->leave($__internal_82a97bd14ae6019a45ac9c9d4625d4428e1577c087c2891dc87f01b9d91f079e_prof);

        
        $__internal_96a1814094dbcdd6504a7e8b0efcf046bd1dd1688a7707dec5ca95488c86ad4d->leave($__internal_96a1814094dbcdd6504a7e8b0efcf046bd1dd1688a7707dec5ca95488c86ad4d_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_8770ea07bde4a840a4c424b15991ac14803b06b2dc03fb0b58b932d57709b2dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8770ea07bde4a840a4c424b15991ac14803b06b2dc03fb0b58b932d57709b2dc->enter($__internal_8770ea07bde4a840a4c424b15991ac14803b06b2dc03fb0b58b932d57709b2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_750cd614463765f4856ac882f561fb4335cf9107ee13e7de9cf69e48f6f21285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750cd614463765f4856ac882f561fb4335cf9107ee13e7de9cf69e48f6f21285->enter($__internal_750cd614463765f4856ac882f561fb4335cf9107ee13e7de9cf69e48f6f21285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_750cd614463765f4856ac882f561fb4335cf9107ee13e7de9cf69e48f6f21285->leave($__internal_750cd614463765f4856ac882f561fb4335cf9107ee13e7de9cf69e48f6f21285_prof);

        
        $__internal_8770ea07bde4a840a4c424b15991ac14803b06b2dc03fb0b58b932d57709b2dc->leave($__internal_8770ea07bde4a840a4c424b15991ac14803b06b2dc03fb0b58b932d57709b2dc_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7e1c38a29a9c67e9fe48f8a6ba5b19b0a46c6fb8d119694778e16528fa89ab25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1c38a29a9c67e9fe48f8a6ba5b19b0a46c6fb8d119694778e16528fa89ab25->enter($__internal_7e1c38a29a9c67e9fe48f8a6ba5b19b0a46c6fb8d119694778e16528fa89ab25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_329f441970f0f2fba19d89716a122b5f2f1fd7148f66195e25f2010ef2941041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329f441970f0f2fba19d89716a122b5f2f1fd7148f66195e25f2010ef2941041->enter($__internal_329f441970f0f2fba19d89716a122b5f2f1fd7148f66195e25f2010ef2941041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_329f441970f0f2fba19d89716a122b5f2f1fd7148f66195e25f2010ef2941041->leave($__internal_329f441970f0f2fba19d89716a122b5f2f1fd7148f66195e25f2010ef2941041_prof);

        
        $__internal_7e1c38a29a9c67e9fe48f8a6ba5b19b0a46c6fb8d119694778e16528fa89ab25->leave($__internal_7e1c38a29a9c67e9fe48f8a6ba5b19b0a46c6fb8d119694778e16528fa89ab25_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_e4679cd1346832762dcdffc001696d587dbaa86360105d2306fd870ff531fc27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4679cd1346832762dcdffc001696d587dbaa86360105d2306fd870ff531fc27->enter($__internal_e4679cd1346832762dcdffc001696d587dbaa86360105d2306fd870ff531fc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_5f78173a0bba3cd990c63b4a26144f91a3eb53db14eb9b085a631ec4a0688e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f78173a0bba3cd990c63b4a26144f91a3eb53db14eb9b085a631ec4a0688e2d->enter($__internal_5f78173a0bba3cd990c63b4a26144f91a3eb53db14eb9b085a631ec4a0688e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_5f78173a0bba3cd990c63b4a26144f91a3eb53db14eb9b085a631ec4a0688e2d->leave($__internal_5f78173a0bba3cd990c63b4a26144f91a3eb53db14eb9b085a631ec4a0688e2d_prof);

        
        $__internal_e4679cd1346832762dcdffc001696d587dbaa86360105d2306fd870ff531fc27->leave($__internal_e4679cd1346832762dcdffc001696d587dbaa86360105d2306fd870ff531fc27_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_f4c7d73b80ee0276707ebe82c53143d9e0f079399ce2c86f28989255dffbc5a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c7d73b80ee0276707ebe82c53143d9e0f079399ce2c86f28989255dffbc5a5->enter($__internal_f4c7d73b80ee0276707ebe82c53143d9e0f079399ce2c86f28989255dffbc5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_01754051aa8eaa80181c7fb97d04e445761d703f745bf5d113dcc9b5cd25843b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01754051aa8eaa80181c7fb97d04e445761d703f745bf5d113dcc9b5cd25843b->enter($__internal_01754051aa8eaa80181c7fb97d04e445761d703f745bf5d113dcc9b5cd25843b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_01754051aa8eaa80181c7fb97d04e445761d703f745bf5d113dcc9b5cd25843b->leave($__internal_01754051aa8eaa80181c7fb97d04e445761d703f745bf5d113dcc9b5cd25843b_prof);

        
        $__internal_f4c7d73b80ee0276707ebe82c53143d9e0f079399ce2c86f28989255dffbc5a5->leave($__internal_f4c7d73b80ee0276707ebe82c53143d9e0f079399ce2c86f28989255dffbc5a5_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b62b927e506c517fdaff22cfd9f6580230dfc56cc3135c270ac4b56d0701bb8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62b927e506c517fdaff22cfd9f6580230dfc56cc3135c270ac4b56d0701bb8b->enter($__internal_b62b927e506c517fdaff22cfd9f6580230dfc56cc3135c270ac4b56d0701bb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_06993336d4aad831d943aa4ba26457d4baa5add89f0962e083848f423f59a5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06993336d4aad831d943aa4ba26457d4baa5add89f0962e083848f423f59a5d0->enter($__internal_06993336d4aad831d943aa4ba26457d4baa5add89f0962e083848f423f59a5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_06993336d4aad831d943aa4ba26457d4baa5add89f0962e083848f423f59a5d0->leave($__internal_06993336d4aad831d943aa4ba26457d4baa5add89f0962e083848f423f59a5d0_prof);

        
        $__internal_b62b927e506c517fdaff22cfd9f6580230dfc56cc3135c270ac4b56d0701bb8b->leave($__internal_b62b927e506c517fdaff22cfd9f6580230dfc56cc3135c270ac4b56d0701bb8b_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d5cb72f0c4a4b9df6f09619d8fb5c742d90360e836572bb478fcbae676e9e3dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5cb72f0c4a4b9df6f09619d8fb5c742d90360e836572bb478fcbae676e9e3dc->enter($__internal_d5cb72f0c4a4b9df6f09619d8fb5c742d90360e836572bb478fcbae676e9e3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_8bc540a21a0520a25afabd9e96bdbc8630e10b3b375dc3fc40b6784235d0e3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc540a21a0520a25afabd9e96bdbc8630e10b3b375dc3fc40b6784235d0e3c8->enter($__internal_8bc540a21a0520a25afabd9e96bdbc8630e10b3b375dc3fc40b6784235d0e3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_8bc540a21a0520a25afabd9e96bdbc8630e10b3b375dc3fc40b6784235d0e3c8->leave($__internal_8bc540a21a0520a25afabd9e96bdbc8630e10b3b375dc3fc40b6784235d0e3c8_prof);

        
        $__internal_d5cb72f0c4a4b9df6f09619d8fb5c742d90360e836572bb478fcbae676e9e3dc->leave($__internal_d5cb72f0c4a4b9df6f09619d8fb5c742d90360e836572bb478fcbae676e9e3dc_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b62dfcd8b97f83f1e2e285ce933cde16ec8711ba07db11b21947ad4fab7aa0d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62dfcd8b97f83f1e2e285ce933cde16ec8711ba07db11b21947ad4fab7aa0d3->enter($__internal_b62dfcd8b97f83f1e2e285ce933cde16ec8711ba07db11b21947ad4fab7aa0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_fba34f9ce3335868262f38d7341a18e5072c81b5f5a50097c218a25b7dd791aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba34f9ce3335868262f38d7341a18e5072c81b5f5a50097c218a25b7dd791aa->enter($__internal_fba34f9ce3335868262f38d7341a18e5072c81b5f5a50097c218a25b7dd791aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_fba34f9ce3335868262f38d7341a18e5072c81b5f5a50097c218a25b7dd791aa->leave($__internal_fba34f9ce3335868262f38d7341a18e5072c81b5f5a50097c218a25b7dd791aa_prof);

        
        $__internal_b62dfcd8b97f83f1e2e285ce933cde16ec8711ba07db11b21947ad4fab7aa0d3->leave($__internal_b62dfcd8b97f83f1e2e285ce933cde16ec8711ba07db11b21947ad4fab7aa0d3_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_dbaa7d7deeb914028689adfe029e1d026a039d23fddba896fcdb50821cdd534f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbaa7d7deeb914028689adfe029e1d026a039d23fddba896fcdb50821cdd534f->enter($__internal_dbaa7d7deeb914028689adfe029e1d026a039d23fddba896fcdb50821cdd534f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b72d7ef73a901a71a7b41afd3d585a7328d0514fa40f15f2ee36e4d8d2733c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72d7ef73a901a71a7b41afd3d585a7328d0514fa40f15f2ee36e4d8d2733c45->enter($__internal_b72d7ef73a901a71a7b41afd3d585a7328d0514fa40f15f2ee36e4d8d2733c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_b72d7ef73a901a71a7b41afd3d585a7328d0514fa40f15f2ee36e4d8d2733c45->leave($__internal_b72d7ef73a901a71a7b41afd3d585a7328d0514fa40f15f2ee36e4d8d2733c45_prof);

        
        $__internal_dbaa7d7deeb914028689adfe029e1d026a039d23fddba896fcdb50821cdd534f->leave($__internal_dbaa7d7deeb914028689adfe029e1d026a039d23fddba896fcdb50821cdd534f_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e03b00f329a1da87fe53bf81e93ce626d8e9db93f8f205ea3cb7f1b35c102ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03b00f329a1da87fe53bf81e93ce626d8e9db93f8f205ea3cb7f1b35c102ed0->enter($__internal_e03b00f329a1da87fe53bf81e93ce626d8e9db93f8f205ea3cb7f1b35c102ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_bae4a55fd89c0857e88de28c51a3bd46613f41a4999d5b57fa3910621eb6ed4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae4a55fd89c0857e88de28c51a3bd46613f41a4999d5b57fa3910621eb6ed4b->enter($__internal_bae4a55fd89c0857e88de28c51a3bd46613f41a4999d5b57fa3910621eb6ed4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_bae4a55fd89c0857e88de28c51a3bd46613f41a4999d5b57fa3910621eb6ed4b->leave($__internal_bae4a55fd89c0857e88de28c51a3bd46613f41a4999d5b57fa3910621eb6ed4b_prof);

        
        $__internal_e03b00f329a1da87fe53bf81e93ce626d8e9db93f8f205ea3cb7f1b35c102ed0->leave($__internal_e03b00f329a1da87fe53bf81e93ce626d8e9db93f8f205ea3cb7f1b35c102ed0_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_8d4940af1ae4ff377dd2297c0bf55a52e7ebf5282869a527c9e8cbfaccf49208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4940af1ae4ff377dd2297c0bf55a52e7ebf5282869a527c9e8cbfaccf49208->enter($__internal_8d4940af1ae4ff377dd2297c0bf55a52e7ebf5282869a527c9e8cbfaccf49208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_111851b724f045dcd19bda1a027ad7c1d68d7f2f5d79a294a0b2e880974d0a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111851b724f045dcd19bda1a027ad7c1d68d7f2f5d79a294a0b2e880974d0a3a->enter($__internal_111851b724f045dcd19bda1a027ad7c1d68d7f2f5d79a294a0b2e880974d0a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_111851b724f045dcd19bda1a027ad7c1d68d7f2f5d79a294a0b2e880974d0a3a->leave($__internal_111851b724f045dcd19bda1a027ad7c1d68d7f2f5d79a294a0b2e880974d0a3a_prof);

        
        $__internal_8d4940af1ae4ff377dd2297c0bf55a52e7ebf5282869a527c9e8cbfaccf49208->leave($__internal_8d4940af1ae4ff377dd2297c0bf55a52e7ebf5282869a527c9e8cbfaccf49208_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_b527379da8fc2ce288fa5dc31675021fe01687b6daff7227bd6f7ed1ef313581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b527379da8fc2ce288fa5dc31675021fe01687b6daff7227bd6f7ed1ef313581->enter($__internal_b527379da8fc2ce288fa5dc31675021fe01687b6daff7227bd6f7ed1ef313581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_cc05ca81f4a2bbe6f70f14c411925c400d0e94ce93801b8c7465c4a976335f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc05ca81f4a2bbe6f70f14c411925c400d0e94ce93801b8c7465c4a976335f12->enter($__internal_cc05ca81f4a2bbe6f70f14c411925c400d0e94ce93801b8c7465c4a976335f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_cc05ca81f4a2bbe6f70f14c411925c400d0e94ce93801b8c7465c4a976335f12->leave($__internal_cc05ca81f4a2bbe6f70f14c411925c400d0e94ce93801b8c7465c4a976335f12_prof);

        
        $__internal_b527379da8fc2ce288fa5dc31675021fe01687b6daff7227bd6f7ed1ef313581->leave($__internal_b527379da8fc2ce288fa5dc31675021fe01687b6daff7227bd6f7ed1ef313581_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_dcfae5cad43f0a97e451a8b4a2496bd5eb15716a7cde0771f1c71a30b3263d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcfae5cad43f0a97e451a8b4a2496bd5eb15716a7cde0771f1c71a30b3263d90->enter($__internal_dcfae5cad43f0a97e451a8b4a2496bd5eb15716a7cde0771f1c71a30b3263d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_d4e577868f4314ce22d9d3cd0c9caf34204548a5e6518cf29dff8890ecf14065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e577868f4314ce22d9d3cd0c9caf34204548a5e6518cf29dff8890ecf14065->enter($__internal_d4e577868f4314ce22d9d3cd0c9caf34204548a5e6518cf29dff8890ecf14065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d4e577868f4314ce22d9d3cd0c9caf34204548a5e6518cf29dff8890ecf14065->leave($__internal_d4e577868f4314ce22d9d3cd0c9caf34204548a5e6518cf29dff8890ecf14065_prof);

        
        $__internal_dcfae5cad43f0a97e451a8b4a2496bd5eb15716a7cde0771f1c71a30b3263d90->leave($__internal_dcfae5cad43f0a97e451a8b4a2496bd5eb15716a7cde0771f1c71a30b3263d90_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_57377ae4b9785953b39190d9239c49761e9f5c7b450c19c5fba5872916a1d615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57377ae4b9785953b39190d9239c49761e9f5c7b450c19c5fba5872916a1d615->enter($__internal_57377ae4b9785953b39190d9239c49761e9f5c7b450c19c5fba5872916a1d615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_13177ad18323120348bbe4d161457463d5667a4621ab152b0ca199aa7754ffcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13177ad18323120348bbe4d161457463d5667a4621ab152b0ca199aa7754ffcb->enter($__internal_13177ad18323120348bbe4d161457463d5667a4621ab152b0ca199aa7754ffcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 213
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 220
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_13177ad18323120348bbe4d161457463d5667a4621ab152b0ca199aa7754ffcb->leave($__internal_13177ad18323120348bbe4d161457463d5667a4621ab152b0ca199aa7754ffcb_prof);

        
        $__internal_57377ae4b9785953b39190d9239c49761e9f5c7b450c19c5fba5872916a1d615->leave($__internal_57377ae4b9785953b39190d9239c49761e9f5c7b450c19c5fba5872916a1d615_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9797e32c8e9d2aa6d4410749f6fc6325c7478956d0bcc32f586538a87c774905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9797e32c8e9d2aa6d4410749f6fc6325c7478956d0bcc32f586538a87c774905->enter($__internal_9797e32c8e9d2aa6d4410749f6fc6325c7478956d0bcc32f586538a87c774905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_eedf5a33e4aac7a4802b8ee916df5ba7a7ce03244037e0e8011d5abd009637e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eedf5a33e4aac7a4802b8ee916df5ba7a7ce03244037e0e8011d5abd009637e8->enter($__internal_eedf5a33e4aac7a4802b8ee916df5ba7a7ce03244037e0e8011d5abd009637e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_eedf5a33e4aac7a4802b8ee916df5ba7a7ce03244037e0e8011d5abd009637e8->leave($__internal_eedf5a33e4aac7a4802b8ee916df5ba7a7ce03244037e0e8011d5abd009637e8_prof);

        
        $__internal_9797e32c8e9d2aa6d4410749f6fc6325c7478956d0bcc32f586538a87c774905->leave($__internal_9797e32c8e9d2aa6d4410749f6fc6325c7478956d0bcc32f586538a87c774905_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c4c3ef61e35378c56abc62044855ac4b0fae88e0f41a1bbb333d6d4f0f8150fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4c3ef61e35378c56abc62044855ac4b0fae88e0f41a1bbb333d6d4f0f8150fc->enter($__internal_c4c3ef61e35378c56abc62044855ac4b0fae88e0f41a1bbb333d6d4f0f8150fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_feddba0613875685f533cb122c7c0912478d0f336a96817838a2cba82be6a2f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feddba0613875685f533cb122c7c0912478d0f336a96817838a2cba82be6a2f3->enter($__internal_feddba0613875685f533cb122c7c0912478d0f336a96817838a2cba82be6a2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_feddba0613875685f533cb122c7c0912478d0f336a96817838a2cba82be6a2f3->leave($__internal_feddba0613875685f533cb122c7c0912478d0f336a96817838a2cba82be6a2f3_prof);

        
        $__internal_c4c3ef61e35378c56abc62044855ac4b0fae88e0f41a1bbb333d6d4f0f8150fc->leave($__internal_c4c3ef61e35378c56abc62044855ac4b0fae88e0f41a1bbb333d6d4f0f8150fc_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_480a73e62cfad766adf306d8604efe2b68f1f1ea6791f6299097bb5eef8cc9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480a73e62cfad766adf306d8604efe2b68f1f1ea6791f6299097bb5eef8cc9c6->enter($__internal_480a73e62cfad766adf306d8604efe2b68f1f1ea6791f6299097bb5eef8cc9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_f89a447fef427f0ba2cc800d40f654bc910993857096045e5d61fe6fb74336bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89a447fef427f0ba2cc800d40f654bc910993857096045e5d61fe6fb74336bb->enter($__internal_f89a447fef427f0ba2cc800d40f654bc910993857096045e5d61fe6fb74336bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f89a447fef427f0ba2cc800d40f654bc910993857096045e5d61fe6fb74336bb->leave($__internal_f89a447fef427f0ba2cc800d40f654bc910993857096045e5d61fe6fb74336bb_prof);

        
        $__internal_480a73e62cfad766adf306d8604efe2b68f1f1ea6791f6299097bb5eef8cc9c6->leave($__internal_480a73e62cfad766adf306d8604efe2b68f1f1ea6791f6299097bb5eef8cc9c6_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ce10bed0dbe43cb909d503ccfecccfefc93d8efe02356937eea25cc572d173e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce10bed0dbe43cb909d503ccfecccfefc93d8efe02356937eea25cc572d173e0->enter($__internal_ce10bed0dbe43cb909d503ccfecccfefc93d8efe02356937eea25cc572d173e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_aaf9af0093f8f3f18d9e08c27c25b76790307f45cec59befa1674ebcc58d9455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf9af0093f8f3f18d9e08c27c25b76790307f45cec59befa1674ebcc58d9455->enter($__internal_aaf9af0093f8f3f18d9e08c27c25b76790307f45cec59befa1674ebcc58d9455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_aaf9af0093f8f3f18d9e08c27c25b76790307f45cec59befa1674ebcc58d9455->leave($__internal_aaf9af0093f8f3f18d9e08c27c25b76790307f45cec59befa1674ebcc58d9455_prof);

        
        $__internal_ce10bed0dbe43cb909d503ccfecccfefc93d8efe02356937eea25cc572d173e0->leave($__internal_ce10bed0dbe43cb909d503ccfecccfefc93d8efe02356937eea25cc572d173e0_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_eb49c20f2220b515030d9d5afca88d973f32e8a31d4f020179479c60c62bc6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb49c20f2220b515030d9d5afca88d973f32e8a31d4f020179479c60c62bc6e2->enter($__internal_eb49c20f2220b515030d9d5afca88d973f32e8a31d4f020179479c60c62bc6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_033ec1e2000ffbfb1563776736fd5c732e24c23f1f4a17c837d60da41bd5fef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033ec1e2000ffbfb1563776736fd5c732e24c23f1f4a17c837d60da41bd5fef7->enter($__internal_033ec1e2000ffbfb1563776736fd5c732e24c23f1f4a17c837d60da41bd5fef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_033ec1e2000ffbfb1563776736fd5c732e24c23f1f4a17c837d60da41bd5fef7->leave($__internal_033ec1e2000ffbfb1563776736fd5c732e24c23f1f4a17c837d60da41bd5fef7_prof);

        
        $__internal_eb49c20f2220b515030d9d5afca88d973f32e8a31d4f020179479c60c62bc6e2->leave($__internal_eb49c20f2220b515030d9d5afca88d973f32e8a31d4f020179479c60c62bc6e2_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4276eaa364164aa2b66b98ab9b33d4ec249a65b7682b940ae35a62a9a723785a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4276eaa364164aa2b66b98ab9b33d4ec249a65b7682b940ae35a62a9a723785a->enter($__internal_4276eaa364164aa2b66b98ab9b33d4ec249a65b7682b940ae35a62a9a723785a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_2fbf0d8481227f2b63f615edca8a46272c5649485af13fcaa39c79d8f6934544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbf0d8481227f2b63f615edca8a46272c5649485af13fcaa39c79d8f6934544->enter($__internal_2fbf0d8481227f2b63f615edca8a46272c5649485af13fcaa39c79d8f6934544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2fbf0d8481227f2b63f615edca8a46272c5649485af13fcaa39c79d8f6934544->leave($__internal_2fbf0d8481227f2b63f615edca8a46272c5649485af13fcaa39c79d8f6934544_prof);

        
        $__internal_4276eaa364164aa2b66b98ab9b33d4ec249a65b7682b940ae35a62a9a723785a->leave($__internal_4276eaa364164aa2b66b98ab9b33d4ec249a65b7682b940ae35a62a9a723785a_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b1a686a9ad6c17fba71f9df33c8b974db2f738410edd89d37815dea7a6c264ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a686a9ad6c17fba71f9df33c8b974db2f738410edd89d37815dea7a6c264ae->enter($__internal_b1a686a9ad6c17fba71f9df33c8b974db2f738410edd89d37815dea7a6c264ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_93fd8cf54a818da8e00ee653295dd0408473c2cce6d0b6ea9ad956590079a896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fd8cf54a818da8e00ee653295dd0408473c2cce6d0b6ea9ad956590079a896->enter($__internal_93fd8cf54a818da8e00ee653295dd0408473c2cce6d0b6ea9ad956590079a896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_93fd8cf54a818da8e00ee653295dd0408473c2cce6d0b6ea9ad956590079a896->leave($__internal_93fd8cf54a818da8e00ee653295dd0408473c2cce6d0b6ea9ad956590079a896_prof);

        
        $__internal_b1a686a9ad6c17fba71f9df33c8b974db2f738410edd89d37815dea7a6c264ae->leave($__internal_b1a686a9ad6c17fba71f9df33c8b974db2f738410edd89d37815dea7a6c264ae_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_636053874ce30d9345532e2ff423607593bf5e17c3913c6bb58c7b96b517172f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636053874ce30d9345532e2ff423607593bf5e17c3913c6bb58c7b96b517172f->enter($__internal_636053874ce30d9345532e2ff423607593bf5e17c3913c6bb58c7b96b517172f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_92a15c0877acca70fd61fbddff077c2a67039e1a5b6535e6b0f839ec4833efa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a15c0877acca70fd61fbddff077c2a67039e1a5b6535e6b0f839ec4833efa0->enter($__internal_92a15c0877acca70fd61fbddff077c2a67039e1a5b6535e6b0f839ec4833efa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_92a15c0877acca70fd61fbddff077c2a67039e1a5b6535e6b0f839ec4833efa0->leave($__internal_92a15c0877acca70fd61fbddff077c2a67039e1a5b6535e6b0f839ec4833efa0_prof);

        
        $__internal_636053874ce30d9345532e2ff423607593bf5e17c3913c6bb58c7b96b517172f->leave($__internal_636053874ce30d9345532e2ff423607593bf5e17c3913c6bb58c7b96b517172f_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8774a102edd635a39ba6a8ddc763f13376bfcab58a0f212a11e81f8966a587b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8774a102edd635a39ba6a8ddc763f13376bfcab58a0f212a11e81f8966a587b0->enter($__internal_8774a102edd635a39ba6a8ddc763f13376bfcab58a0f212a11e81f8966a587b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_3f99521751a6507b21c7b68d5adc27ba5f594e3e5cefa014d92077251702c00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f99521751a6507b21c7b68d5adc27ba5f594e3e5cefa014d92077251702c00f->enter($__internal_3f99521751a6507b21c7b68d5adc27ba5f594e3e5cefa014d92077251702c00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_3f99521751a6507b21c7b68d5adc27ba5f594e3e5cefa014d92077251702c00f->leave($__internal_3f99521751a6507b21c7b68d5adc27ba5f594e3e5cefa014d92077251702c00f_prof);

        
        $__internal_8774a102edd635a39ba6a8ddc763f13376bfcab58a0f212a11e81f8966a587b0->leave($__internal_8774a102edd635a39ba6a8ddc763f13376bfcab58a0f212a11e81f8966a587b0_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
