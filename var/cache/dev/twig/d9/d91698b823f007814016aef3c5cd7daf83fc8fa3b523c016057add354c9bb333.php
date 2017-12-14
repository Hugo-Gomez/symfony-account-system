<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_d3f31b0c4ef4d0db98e935095f83084c9d0d681a90a20cd067d27dbf5b1f6199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
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
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ed373122218091fe17e91d13f99fb5fd933392110eead342b54862d1cd7c84d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed373122218091fe17e91d13f99fb5fd933392110eead342b54862d1cd7c84d->enter($__internal_5ed373122218091fe17e91d13f99fb5fd933392110eead342b54862d1cd7c84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_107a5d91d307e0e5211d68eb3f81de23fd8f9045471b8ca52d68ae1a1d049469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107a5d91d307e0e5211d68eb3f81de23fd8f9045471b8ca52d68ae1a1d049469->enter($__internal_107a5d91d307e0e5211d68eb3f81de23fd8f9045471b8ca52d68ae1a1d049469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ed373122218091fe17e91d13f99fb5fd933392110eead342b54862d1cd7c84d->leave($__internal_5ed373122218091fe17e91d13f99fb5fd933392110eead342b54862d1cd7c84d_prof);

        
        $__internal_107a5d91d307e0e5211d68eb3f81de23fd8f9045471b8ca52d68ae1a1d049469->leave($__internal_107a5d91d307e0e5211d68eb3f81de23fd8f9045471b8ca52d68ae1a1d049469_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_522d2fe2c00b05716295c93674d8dd3bd7a45767250096757af3841cecab17f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522d2fe2c00b05716295c93674d8dd3bd7a45767250096757af3841cecab17f6->enter($__internal_522d2fe2c00b05716295c93674d8dd3bd7a45767250096757af3841cecab17f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_44376d0eb9824d816e410ce0aba0b28c44adbac344eeca72fb54053b146c33b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44376d0eb9824d816e410ce0aba0b28c44adbac344eeca72fb54053b146c33b8->enter($__internal_44376d0eb9824d816e410ce0aba0b28c44adbac344eeca72fb54053b146c33b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_44376d0eb9824d816e410ce0aba0b28c44adbac344eeca72fb54053b146c33b8->leave($__internal_44376d0eb9824d816e410ce0aba0b28c44adbac344eeca72fb54053b146c33b8_prof);

        
        $__internal_522d2fe2c00b05716295c93674d8dd3bd7a45767250096757af3841cecab17f6->leave($__internal_522d2fe2c00b05716295c93674d8dd3bd7a45767250096757af3841cecab17f6_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_3973243fd462d0163f20d16501aff40e6ac23375994bcbdbc01e3100081ce9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3973243fd462d0163f20d16501aff40e6ac23375994bcbdbc01e3100081ce9fa->enter($__internal_3973243fd462d0163f20d16501aff40e6ac23375994bcbdbc01e3100081ce9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_ade7f03e9266e011c8ca6926aabfef032e55165dadca7e6be1d3a4401c572bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade7f03e9266e011c8ca6926aabfef032e55165dadca7e6be1d3a4401c572bd9->enter($__internal_ade7f03e9266e011c8ca6926aabfef032e55165dadca7e6be1d3a4401c572bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_ade7f03e9266e011c8ca6926aabfef032e55165dadca7e6be1d3a4401c572bd9->leave($__internal_ade7f03e9266e011c8ca6926aabfef032e55165dadca7e6be1d3a4401c572bd9_prof);

        
        $__internal_3973243fd462d0163f20d16501aff40e6ac23375994bcbdbc01e3100081ce9fa->leave($__internal_3973243fd462d0163f20d16501aff40e6ac23375994bcbdbc01e3100081ce9fa_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1c8a4cdc81246c8c0f816779f1bfcf7ff30c00a928dcd3941934e4a7849037dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8a4cdc81246c8c0f816779f1bfcf7ff30c00a928dcd3941934e4a7849037dc->enter($__internal_1c8a4cdc81246c8c0f816779f1bfcf7ff30c00a928dcd3941934e4a7849037dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_91ce22a5a09d3cbd1b88206d8629e8653103b7d9b737fddec8e45c283b4b3812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ce22a5a09d3cbd1b88206d8629e8653103b7d9b737fddec8e45c283b4b3812->enter($__internal_91ce22a5a09d3cbd1b88206d8629e8653103b7d9b737fddec8e45c283b4b3812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_91ce22a5a09d3cbd1b88206d8629e8653103b7d9b737fddec8e45c283b4b3812->leave($__internal_91ce22a5a09d3cbd1b88206d8629e8653103b7d9b737fddec8e45c283b4b3812_prof);

        
        $__internal_1c8a4cdc81246c8c0f816779f1bfcf7ff30c00a928dcd3941934e4a7849037dc->leave($__internal_1c8a4cdc81246c8c0f816779f1bfcf7ff30c00a928dcd3941934e4a7849037dc_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_4650c85009561f6b5ba83928c2ee269d7316e1918dded5224e4643f5f2cf5b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4650c85009561f6b5ba83928c2ee269d7316e1918dded5224e4643f5f2cf5b63->enter($__internal_4650c85009561f6b5ba83928c2ee269d7316e1918dded5224e4643f5f2cf5b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_7e2f04b0bf3bac2362eca85e91ccb3211c6fe4fc46ec81e41d4494ee31e75eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2f04b0bf3bac2362eca85e91ccb3211c6fe4fc46ec81e41d4494ee31e75eb8->enter($__internal_7e2f04b0bf3bac2362eca85e91ccb3211c6fe4fc46ec81e41d4494ee31e75eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_7e2f04b0bf3bac2362eca85e91ccb3211c6fe4fc46ec81e41d4494ee31e75eb8->leave($__internal_7e2f04b0bf3bac2362eca85e91ccb3211c6fe4fc46ec81e41d4494ee31e75eb8_prof);

        
        $__internal_4650c85009561f6b5ba83928c2ee269d7316e1918dded5224e4643f5f2cf5b63->leave($__internal_4650c85009561f6b5ba83928c2ee269d7316e1918dded5224e4643f5f2cf5b63_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_aa95fc8491980dceb2c35a0b9b0aeeef9034ebb45630b73ce01d06a28201f540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa95fc8491980dceb2c35a0b9b0aeeef9034ebb45630b73ce01d06a28201f540->enter($__internal_aa95fc8491980dceb2c35a0b9b0aeeef9034ebb45630b73ce01d06a28201f540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_737c5c5242533616e32b6d823f1246fd073fbd08c113be77dc626f4f33725fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737c5c5242533616e32b6d823f1246fd073fbd08c113be77dc626f4f33725fa6->enter($__internal_737c5c5242533616e32b6d823f1246fd073fbd08c113be77dc626f4f33725fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_737c5c5242533616e32b6d823f1246fd073fbd08c113be77dc626f4f33725fa6->leave($__internal_737c5c5242533616e32b6d823f1246fd073fbd08c113be77dc626f4f33725fa6_prof);

        
        $__internal_aa95fc8491980dceb2c35a0b9b0aeeef9034ebb45630b73ce01d06a28201f540->leave($__internal_aa95fc8491980dceb2c35a0b9b0aeeef9034ebb45630b73ce01d06a28201f540_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_def5c1f6eed21712176a74ebda48646af7acffdb26eeaf81c78deff030a2b97c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def5c1f6eed21712176a74ebda48646af7acffdb26eeaf81c78deff030a2b97c->enter($__internal_def5c1f6eed21712176a74ebda48646af7acffdb26eeaf81c78deff030a2b97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_8e8a5e201903b8fc8d9ee52b58277099065c8376b35d1fe144cf400f23a40b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e8a5e201903b8fc8d9ee52b58277099065c8376b35d1fe144cf400f23a40b52->enter($__internal_8e8a5e201903b8fc8d9ee52b58277099065c8376b35d1fe144cf400f23a40b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_8e8a5e201903b8fc8d9ee52b58277099065c8376b35d1fe144cf400f23a40b52->leave($__internal_8e8a5e201903b8fc8d9ee52b58277099065c8376b35d1fe144cf400f23a40b52_prof);

        
        $__internal_def5c1f6eed21712176a74ebda48646af7acffdb26eeaf81c78deff030a2b97c->leave($__internal_def5c1f6eed21712176a74ebda48646af7acffdb26eeaf81c78deff030a2b97c_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_ec33f258d150aa58e525301d6535653b69ffb7cc11652a53878a2a6946dd3aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec33f258d150aa58e525301d6535653b69ffb7cc11652a53878a2a6946dd3aa1->enter($__internal_ec33f258d150aa58e525301d6535653b69ffb7cc11652a53878a2a6946dd3aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_157ea54d8c189459b80d35c88131d9d4a70bac6f0b629d7d395f204af94a1db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157ea54d8c189459b80d35c88131d9d4a70bac6f0b629d7d395f204af94a1db2->enter($__internal_157ea54d8c189459b80d35c88131d9d4a70bac6f0b629d7d395f204af94a1db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_157ea54d8c189459b80d35c88131d9d4a70bac6f0b629d7d395f204af94a1db2->leave($__internal_157ea54d8c189459b80d35c88131d9d4a70bac6f0b629d7d395f204af94a1db2_prof);

        
        $__internal_ec33f258d150aa58e525301d6535653b69ffb7cc11652a53878a2a6946dd3aa1->leave($__internal_ec33f258d150aa58e525301d6535653b69ffb7cc11652a53878a2a6946dd3aa1_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_477a430b27ffdbee19f66593dd0a03ab34938df90c8d0ab0b94ca021d80f32bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477a430b27ffdbee19f66593dd0a03ab34938df90c8d0ab0b94ca021d80f32bf->enter($__internal_477a430b27ffdbee19f66593dd0a03ab34938df90c8d0ab0b94ca021d80f32bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_52e87e79875087e446bbef12c4b281c60856dd2a140f163bc92f674c17d8557d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e87e79875087e446bbef12c4b281c60856dd2a140f163bc92f674c17d8557d->enter($__internal_52e87e79875087e446bbef12c4b281c60856dd2a140f163bc92f674c17d8557d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_52e87e79875087e446bbef12c4b281c60856dd2a140f163bc92f674c17d8557d->leave($__internal_52e87e79875087e446bbef12c4b281c60856dd2a140f163bc92f674c17d8557d_prof);

        
        $__internal_477a430b27ffdbee19f66593dd0a03ab34938df90c8d0ab0b94ca021d80f32bf->leave($__internal_477a430b27ffdbee19f66593dd0a03ab34938df90c8d0ab0b94ca021d80f32bf_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_fcccefd3a3d301e416f63c459b95a1db72437cb9bdb51d530a85d43c62593425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcccefd3a3d301e416f63c459b95a1db72437cb9bdb51d530a85d43c62593425->enter($__internal_fcccefd3a3d301e416f63c459b95a1db72437cb9bdb51d530a85d43c62593425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0d3f525d4a9fe7a20da44f7a74f5e500b9113e2e666503733009a6986a9f5340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3f525d4a9fe7a20da44f7a74f5e500b9113e2e666503733009a6986a9f5340->enter($__internal_0d3f525d4a9fe7a20da44f7a74f5e500b9113e2e666503733009a6986a9f5340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_0d3f525d4a9fe7a20da44f7a74f5e500b9113e2e666503733009a6986a9f5340->leave($__internal_0d3f525d4a9fe7a20da44f7a74f5e500b9113e2e666503733009a6986a9f5340_prof);

        
        $__internal_fcccefd3a3d301e416f63c459b95a1db72437cb9bdb51d530a85d43c62593425->leave($__internal_fcccefd3a3d301e416f63c459b95a1db72437cb9bdb51d530a85d43c62593425_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7f9ce82c9a332cea9b4a617b953760ebb0f75514eb8e0b99b88def146e04fd7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9ce82c9a332cea9b4a617b953760ebb0f75514eb8e0b99b88def146e04fd7f->enter($__internal_7f9ce82c9a332cea9b4a617b953760ebb0f75514eb8e0b99b88def146e04fd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f323abcaf114f997a153eac3bf58074a670974764dceee4615c86aeaf5b2ee34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f323abcaf114f997a153eac3bf58074a670974764dceee4615c86aeaf5b2ee34->enter($__internal_f323abcaf114f997a153eac3bf58074a670974764dceee4615c86aeaf5b2ee34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_f323abcaf114f997a153eac3bf58074a670974764dceee4615c86aeaf5b2ee34->leave($__internal_f323abcaf114f997a153eac3bf58074a670974764dceee4615c86aeaf5b2ee34_prof);

        
        $__internal_7f9ce82c9a332cea9b4a617b953760ebb0f75514eb8e0b99b88def146e04fd7f->leave($__internal_7f9ce82c9a332cea9b4a617b953760ebb0f75514eb8e0b99b88def146e04fd7f_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_bbee2eed5ed1809b62de6e44cab090dafe89cd4067057ee599322ba62076a50c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbee2eed5ed1809b62de6e44cab090dafe89cd4067057ee599322ba62076a50c->enter($__internal_bbee2eed5ed1809b62de6e44cab090dafe89cd4067057ee599322ba62076a50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9594d937a5a84c30c24c9fe24aec6d3c7a36e65d1c118761b4989ea11015fa2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9594d937a5a84c30c24c9fe24aec6d3c7a36e65d1c118761b4989ea11015fa2a->enter($__internal_9594d937a5a84c30c24c9fe24aec6d3c7a36e65d1c118761b4989ea11015fa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_9594d937a5a84c30c24c9fe24aec6d3c7a36e65d1c118761b4989ea11015fa2a->leave($__internal_9594d937a5a84c30c24c9fe24aec6d3c7a36e65d1c118761b4989ea11015fa2a_prof);

        
        $__internal_bbee2eed5ed1809b62de6e44cab090dafe89cd4067057ee599322ba62076a50c->leave($__internal_bbee2eed5ed1809b62de6e44cab090dafe89cd4067057ee599322ba62076a50c_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1227eb398307a4edd3fa8cd66675e3f1bb4ed99e082b14254d16da1bf72a47bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1227eb398307a4edd3fa8cd66675e3f1bb4ed99e082b14254d16da1bf72a47bb->enter($__internal_1227eb398307a4edd3fa8cd66675e3f1bb4ed99e082b14254d16da1bf72a47bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_bf725f35828196f12348c1754e6e6658ab2e3ace1a57ee3ad570af8b0b469d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf725f35828196f12348c1754e6e6658ab2e3ace1a57ee3ad570af8b0b469d0d->enter($__internal_bf725f35828196f12348c1754e6e6658ab2e3ace1a57ee3ad570af8b0b469d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_bf725f35828196f12348c1754e6e6658ab2e3ace1a57ee3ad570af8b0b469d0d->leave($__internal_bf725f35828196f12348c1754e6e6658ab2e3ace1a57ee3ad570af8b0b469d0d_prof);

        
        $__internal_1227eb398307a4edd3fa8cd66675e3f1bb4ed99e082b14254d16da1bf72a47bb->leave($__internal_1227eb398307a4edd3fa8cd66675e3f1bb4ed99e082b14254d16da1bf72a47bb_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_82dcb4460ee0b37b499d8e951385d64e7dab440fc53eaa74667cfd83f396cd41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82dcb4460ee0b37b499d8e951385d64e7dab440fc53eaa74667cfd83f396cd41->enter($__internal_82dcb4460ee0b37b499d8e951385d64e7dab440fc53eaa74667cfd83f396cd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0a30932162e6107b4303967fb7ccc792a87d54a47eba942c4a0ae5e8d90db361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a30932162e6107b4303967fb7ccc792a87d54a47eba942c4a0ae5e8d90db361->enter($__internal_0a30932162e6107b4303967fb7ccc792a87d54a47eba942c4a0ae5e8d90db361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_0a30932162e6107b4303967fb7ccc792a87d54a47eba942c4a0ae5e8d90db361->leave($__internal_0a30932162e6107b4303967fb7ccc792a87d54a47eba942c4a0ae5e8d90db361_prof);

        
        $__internal_82dcb4460ee0b37b499d8e951385d64e7dab440fc53eaa74667cfd83f396cd41->leave($__internal_82dcb4460ee0b37b499d8e951385d64e7dab440fc53eaa74667cfd83f396cd41_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_30e9b16b9497b8d2eca89703726b27a177c598931abec0ca5ba32fffe0aca100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e9b16b9497b8d2eca89703726b27a177c598931abec0ca5ba32fffe0aca100->enter($__internal_30e9b16b9497b8d2eca89703726b27a177c598931abec0ca5ba32fffe0aca100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6f6c67da3fdcfdc667796c2c97e3bc2acd79db6402e007412a16154d555f663e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6c67da3fdcfdc667796c2c97e3bc2acd79db6402e007412a16154d555f663e->enter($__internal_6f6c67da3fdcfdc667796c2c97e3bc2acd79db6402e007412a16154d555f663e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6f6c67da3fdcfdc667796c2c97e3bc2acd79db6402e007412a16154d555f663e->leave($__internal_6f6c67da3fdcfdc667796c2c97e3bc2acd79db6402e007412a16154d555f663e_prof);

        
        $__internal_30e9b16b9497b8d2eca89703726b27a177c598931abec0ca5ba32fffe0aca100->leave($__internal_30e9b16b9497b8d2eca89703726b27a177c598931abec0ca5ba32fffe0aca100_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_c545a00727d564182757e0f355cbde5e26392d8dc4ff6cb891d3143cece92875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c545a00727d564182757e0f355cbde5e26392d8dc4ff6cb891d3143cece92875->enter($__internal_c545a00727d564182757e0f355cbde5e26392d8dc4ff6cb891d3143cece92875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_005392a4b659906c5795f9876c35608de2239b41a2fa709b59e8d209fcc23291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005392a4b659906c5795f9876c35608de2239b41a2fa709b59e8d209fcc23291->enter($__internal_005392a4b659906c5795f9876c35608de2239b41a2fa709b59e8d209fcc23291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_005392a4b659906c5795f9876c35608de2239b41a2fa709b59e8d209fcc23291->leave($__internal_005392a4b659906c5795f9876c35608de2239b41a2fa709b59e8d209fcc23291_prof);

        
        $__internal_c545a00727d564182757e0f355cbde5e26392d8dc4ff6cb891d3143cece92875->leave($__internal_c545a00727d564182757e0f355cbde5e26392d8dc4ff6cb891d3143cece92875_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_27063da0afe1f166f99e450e77334ce8c53204212d49d6a234c6bfa697635942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27063da0afe1f166f99e450e77334ce8c53204212d49d6a234c6bfa697635942->enter($__internal_27063da0afe1f166f99e450e77334ce8c53204212d49d6a234c6bfa697635942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_ba72ac562d0be3931b38b79b0d134f24e0dc081b37fc6d61f8c2f796fad2bf52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba72ac562d0be3931b38b79b0d134f24e0dc081b37fc6d61f8c2f796fad2bf52->enter($__internal_ba72ac562d0be3931b38b79b0d134f24e0dc081b37fc6d61f8c2f796fad2bf52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ba72ac562d0be3931b38b79b0d134f24e0dc081b37fc6d61f8c2f796fad2bf52->leave($__internal_ba72ac562d0be3931b38b79b0d134f24e0dc081b37fc6d61f8c2f796fad2bf52_prof);

        
        $__internal_27063da0afe1f166f99e450e77334ce8c53204212d49d6a234c6bfa697635942->leave($__internal_27063da0afe1f166f99e450e77334ce8c53204212d49d6a234c6bfa697635942_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_00d8090fde2fdc78be0a26c98133abf803044ed1366e73da690ef1282891e27f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d8090fde2fdc78be0a26c98133abf803044ed1366e73da690ef1282891e27f->enter($__internal_00d8090fde2fdc78be0a26c98133abf803044ed1366e73da690ef1282891e27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_bfb2d095857b9c746ec38e5d67039a3d23eea34251ffe687cc35d004520e7aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb2d095857b9c746ec38e5d67039a3d23eea34251ffe687cc35d004520e7aee->enter($__internal_bfb2d095857b9c746ec38e5d67039a3d23eea34251ffe687cc35d004520e7aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_bfb2d095857b9c746ec38e5d67039a3d23eea34251ffe687cc35d004520e7aee->leave($__internal_bfb2d095857b9c746ec38e5d67039a3d23eea34251ffe687cc35d004520e7aee_prof);

        
        $__internal_00d8090fde2fdc78be0a26c98133abf803044ed1366e73da690ef1282891e27f->leave($__internal_00d8090fde2fdc78be0a26c98133abf803044ed1366e73da690ef1282891e27f_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2911a27f6805cad653914c4b84eba1aaf803d67c668fca6589970646e57a9088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2911a27f6805cad653914c4b84eba1aaf803d67c668fca6589970646e57a9088->enter($__internal_2911a27f6805cad653914c4b84eba1aaf803d67c668fca6589970646e57a9088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_51a4a34bf322f62fdceeaba7044b795bfba10d1d0ca93b21e8dcb9a1d9cf5b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a4a34bf322f62fdceeaba7044b795bfba10d1d0ca93b21e8dcb9a1d9cf5b25->enter($__internal_51a4a34bf322f62fdceeaba7044b795bfba10d1d0ca93b21e8dcb9a1d9cf5b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_51a4a34bf322f62fdceeaba7044b795bfba10d1d0ca93b21e8dcb9a1d9cf5b25->leave($__internal_51a4a34bf322f62fdceeaba7044b795bfba10d1d0ca93b21e8dcb9a1d9cf5b25_prof);

        
        $__internal_2911a27f6805cad653914c4b84eba1aaf803d67c668fca6589970646e57a9088->leave($__internal_2911a27f6805cad653914c4b84eba1aaf803d67c668fca6589970646e57a9088_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_b357b606ca5e90fe5b8f04a94147f55e1821b9da2174e01551a5f60dce7dcf62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b357b606ca5e90fe5b8f04a94147f55e1821b9da2174e01551a5f60dce7dcf62->enter($__internal_b357b606ca5e90fe5b8f04a94147f55e1821b9da2174e01551a5f60dce7dcf62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_057373d0496b4ce64d6a6752d56865e23b5c9e1ae22bbbbee9511df5e3d3d541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057373d0496b4ce64d6a6752d56865e23b5c9e1ae22bbbbee9511df5e3d3d541->enter($__internal_057373d0496b4ce64d6a6752d56865e23b5c9e1ae22bbbbee9511df5e3d3d541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_057373d0496b4ce64d6a6752d56865e23b5c9e1ae22bbbbee9511df5e3d3d541->leave($__internal_057373d0496b4ce64d6a6752d56865e23b5c9e1ae22bbbbee9511df5e3d3d541_prof);

        
        $__internal_b357b606ca5e90fe5b8f04a94147f55e1821b9da2174e01551a5f60dce7dcf62->leave($__internal_b357b606ca5e90fe5b8f04a94147f55e1821b9da2174e01551a5f60dce7dcf62_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_62980cc747b9a587f9a98db0fa1826320ce71ab96d9ced347117e2e4e7330ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62980cc747b9a587f9a98db0fa1826320ce71ab96d9ced347117e2e4e7330ae5->enter($__internal_62980cc747b9a587f9a98db0fa1826320ce71ab96d9ced347117e2e4e7330ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_4cbcc1bc5d4e4e7fc4f211c561470df471ac669da66a053f65f7141599f1d1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cbcc1bc5d4e4e7fc4f211c561470df471ac669da66a053f65f7141599f1d1d8->enter($__internal_4cbcc1bc5d4e4e7fc4f211c561470df471ac669da66a053f65f7141599f1d1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4cbcc1bc5d4e4e7fc4f211c561470df471ac669da66a053f65f7141599f1d1d8->leave($__internal_4cbcc1bc5d4e4e7fc4f211c561470df471ac669da66a053f65f7141599f1d1d8_prof);

        
        $__internal_62980cc747b9a587f9a98db0fa1826320ce71ab96d9ced347117e2e4e7330ae5->leave($__internal_62980cc747b9a587f9a98db0fa1826320ce71ab96d9ced347117e2e4e7330ae5_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_a42672c16f45bdfd55fd83a24985c88f9006ecdce6005bca57ebaa9ca3411013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42672c16f45bdfd55fd83a24985c88f9006ecdce6005bca57ebaa9ca3411013->enter($__internal_a42672c16f45bdfd55fd83a24985c88f9006ecdce6005bca57ebaa9ca3411013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_2dd987602c4c3349b6000b55dd6342bf226a8ec0f15f7074f66cee8723ee4171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd987602c4c3349b6000b55dd6342bf226a8ec0f15f7074f66cee8723ee4171->enter($__internal_2dd987602c4c3349b6000b55dd6342bf226a8ec0f15f7074f66cee8723ee4171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2dd987602c4c3349b6000b55dd6342bf226a8ec0f15f7074f66cee8723ee4171->leave($__internal_2dd987602c4c3349b6000b55dd6342bf226a8ec0f15f7074f66cee8723ee4171_prof);

        
        $__internal_a42672c16f45bdfd55fd83a24985c88f9006ecdce6005bca57ebaa9ca3411013->leave($__internal_a42672c16f45bdfd55fd83a24985c88f9006ecdce6005bca57ebaa9ca3411013_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_0edb58f89f351ee3673695e07e776ece9f821d7f6248d42e9a3e6e4f094eb1f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0edb58f89f351ee3673695e07e776ece9f821d7f6248d42e9a3e6e4f094eb1f1->enter($__internal_0edb58f89f351ee3673695e07e776ece9f821d7f6248d42e9a3e6e4f094eb1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_f899812c90c13c0b17097f738f25595c6b3aea1ea31f2f6988be8e3bb4d6eb1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f899812c90c13c0b17097f738f25595c6b3aea1ea31f2f6988be8e3bb4d6eb1a->enter($__internal_f899812c90c13c0b17097f738f25595c6b3aea1ea31f2f6988be8e3bb4d6eb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f899812c90c13c0b17097f738f25595c6b3aea1ea31f2f6988be8e3bb4d6eb1a->leave($__internal_f899812c90c13c0b17097f738f25595c6b3aea1ea31f2f6988be8e3bb4d6eb1a_prof);

        
        $__internal_0edb58f89f351ee3673695e07e776ece9f821d7f6248d42e9a3e6e4f094eb1f1->leave($__internal_0edb58f89f351ee3673695e07e776ece9f821d7f6248d42e9a3e6e4f094eb1f1_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a938b6f80978e1b82f759dd23492c1700dfe4cd3b2cdbde4131e63069eec795d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a938b6f80978e1b82f759dd23492c1700dfe4cd3b2cdbde4131e63069eec795d->enter($__internal_a938b6f80978e1b82f759dd23492c1700dfe4cd3b2cdbde4131e63069eec795d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_377c0d0693569791c51b185038a527f89f607776e116cbbdf3d5e5fc98f39a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377c0d0693569791c51b185038a527f89f607776e116cbbdf3d5e5fc98f39a4b->enter($__internal_377c0d0693569791c51b185038a527f89f607776e116cbbdf3d5e5fc98f39a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_377c0d0693569791c51b185038a527f89f607776e116cbbdf3d5e5fc98f39a4b->leave($__internal_377c0d0693569791c51b185038a527f89f607776e116cbbdf3d5e5fc98f39a4b_prof);

        
        $__internal_a938b6f80978e1b82f759dd23492c1700dfe4cd3b2cdbde4131e63069eec795d->leave($__internal_a938b6f80978e1b82f759dd23492c1700dfe4cd3b2cdbde4131e63069eec795d_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_50d7f3a85ca27f5fc720e95f1d671a4d59126afe9c490d288731fbcb2b58fa20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d7f3a85ca27f5fc720e95f1d671a4d59126afe9c490d288731fbcb2b58fa20->enter($__internal_50d7f3a85ca27f5fc720e95f1d671a4d59126afe9c490d288731fbcb2b58fa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_f2bb52055b981ed8202a2b6b59a3b9cf7c2d2a071f0cc51b884a51b97f788093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2bb52055b981ed8202a2b6b59a3b9cf7c2d2a071f0cc51b884a51b97f788093->enter($__internal_f2bb52055b981ed8202a2b6b59a3b9cf7c2d2a071f0cc51b884a51b97f788093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_f2bb52055b981ed8202a2b6b59a3b9cf7c2d2a071f0cc51b884a51b97f788093->leave($__internal_f2bb52055b981ed8202a2b6b59a3b9cf7c2d2a071f0cc51b884a51b97f788093_prof);

        
        $__internal_50d7f3a85ca27f5fc720e95f1d671a4d59126afe9c490d288731fbcb2b58fa20->leave($__internal_50d7f3a85ca27f5fc720e95f1d671a4d59126afe9c490d288731fbcb2b58fa20_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0df230f90553c84565321e3a5b8de9d530afdc3c9ca404723dae1546c36eb57f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df230f90553c84565321e3a5b8de9d530afdc3c9ca404723dae1546c36eb57f->enter($__internal_0df230f90553c84565321e3a5b8de9d530afdc3c9ca404723dae1546c36eb57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_40d82dd5993eb2ddd83f923fd1ab8f4e740ad9c3bba89a8d33bf9d02add69082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d82dd5993eb2ddd83f923fd1ab8f4e740ad9c3bba89a8d33bf9d02add69082->enter($__internal_40d82dd5993eb2ddd83f923fd1ab8f4e740ad9c3bba89a8d33bf9d02add69082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_40d82dd5993eb2ddd83f923fd1ab8f4e740ad9c3bba89a8d33bf9d02add69082->leave($__internal_40d82dd5993eb2ddd83f923fd1ab8f4e740ad9c3bba89a8d33bf9d02add69082_prof);

        
        $__internal_0df230f90553c84565321e3a5b8de9d530afdc3c9ca404723dae1546c36eb57f->leave($__internal_0df230f90553c84565321e3a5b8de9d530afdc3c9ca404723dae1546c36eb57f_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
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
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
