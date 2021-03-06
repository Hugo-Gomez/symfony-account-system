<?php

/* form_div_layout.html.twig */
class __TwigTemplate_1a07afe941388e4356cd9f23814cdd8c86cee53d887c887c4f76b0ec77a09389 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa7f1e8739a955733ae7dbdc9e7081fbd5ce7b8fad4e1388173343053fbbf4cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7f1e8739a955733ae7dbdc9e7081fbd5ce7b8fad4e1388173343053fbbf4cc->enter($__internal_fa7f1e8739a955733ae7dbdc9e7081fbd5ce7b8fad4e1388173343053fbbf4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 244
        $this->displayBlock('form_label', $context, $blocks);
        // line 266
        $this->displayBlock('button_label', $context, $blocks);
        // line 270
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 278
        $this->displayBlock('form_row', $context, $blocks);
        // line 286
        $this->displayBlock('button_row', $context, $blocks);
        // line 292
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 298
        $this->displayBlock('form', $context, $blocks);
        // line 304
        $this->displayBlock('form_start', $context, $blocks);
        // line 318
        $this->displayBlock('form_end', $context, $blocks);
        // line 325
        $this->displayBlock('form_errors', $context, $blocks);
        // line 335
        $this->displayBlock('form_rest', $context, $blocks);
        // line 356
        echo "
";
        // line 359
        $this->displayBlock('form_rows', $context, $blocks);
        // line 365
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 372
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 377
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_fa7f1e8739a955733ae7dbdc9e7081fbd5ce7b8fad4e1388173343053fbbf4cc->leave($__internal_fa7f1e8739a955733ae7dbdc9e7081fbd5ce7b8fad4e1388173343053fbbf4cc_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_6309755fdf82fc387e57fcd149eb94a8473adbcdbe368044c48d2fe7fa0488ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6309755fdf82fc387e57fcd149eb94a8473adbcdbe368044c48d2fe7fa0488ae->enter($__internal_6309755fdf82fc387e57fcd149eb94a8473adbcdbe368044c48d2fe7fa0488ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_6309755fdf82fc387e57fcd149eb94a8473adbcdbe368044c48d2fe7fa0488ae->leave($__internal_6309755fdf82fc387e57fcd149eb94a8473adbcdbe368044c48d2fe7fa0488ae_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_55b7460b18ab061bd8d77311faaea5977047e6921cbbd1a84399c7587a6f20c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b7460b18ab061bd8d77311faaea5977047e6921cbbd1a84399c7587a6f20c0->enter($__internal_55b7460b18ab061bd8d77311faaea5977047e6921cbbd1a84399c7587a6f20c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_55b7460b18ab061bd8d77311faaea5977047e6921cbbd1a84399c7587a6f20c0->leave($__internal_55b7460b18ab061bd8d77311faaea5977047e6921cbbd1a84399c7587a6f20c0_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_960a31b381dd7d1bd792520e2690cb7de039ff9dd45aa2a93a01815f4f0d7419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960a31b381dd7d1bd792520e2690cb7de039ff9dd45aa2a93a01815f4f0d7419->enter($__internal_960a31b381dd7d1bd792520e2690cb7de039ff9dd45aa2a93a01815f4f0d7419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_960a31b381dd7d1bd792520e2690cb7de039ff9dd45aa2a93a01815f4f0d7419->leave($__internal_960a31b381dd7d1bd792520e2690cb7de039ff9dd45aa2a93a01815f4f0d7419_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_f56b68eaef6a3a0fa38b65e6597c93541338284944e254b0c0ff541fdca6b4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56b68eaef6a3a0fa38b65e6597c93541338284944e254b0c0ff541fdca6b4f9->enter($__internal_f56b68eaef6a3a0fa38b65e6597c93541338284944e254b0c0ff541fdca6b4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_f56b68eaef6a3a0fa38b65e6597c93541338284944e254b0c0ff541fdca6b4f9->leave($__internal_f56b68eaef6a3a0fa38b65e6597c93541338284944e254b0c0ff541fdca6b4f9_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_7829abf9a6c65a8fde0a8c2c68e8649221161dfdf5a0550f49ab01cc146d8794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7829abf9a6c65a8fde0a8c2c68e8649221161dfdf5a0550f49ab01cc146d8794->enter($__internal_7829abf9a6c65a8fde0a8c2c68e8649221161dfdf5a0550f49ab01cc146d8794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_7829abf9a6c65a8fde0a8c2c68e8649221161dfdf5a0550f49ab01cc146d8794->leave($__internal_7829abf9a6c65a8fde0a8c2c68e8649221161dfdf5a0550f49ab01cc146d8794_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_49d874e04a72205f1eaf5cb613110f78f461cbf043e24eba9a9629e413511ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d874e04a72205f1eaf5cb613110f78f461cbf043e24eba9a9629e413511ddd->enter($__internal_49d874e04a72205f1eaf5cb613110f78f461cbf043e24eba9a9629e413511ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_49d874e04a72205f1eaf5cb613110f78f461cbf043e24eba9a9629e413511ddd->leave($__internal_49d874e04a72205f1eaf5cb613110f78f461cbf043e24eba9a9629e413511ddd_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f78c9ff30bb2e2f5785e7b62940acbe32c761727476eeb69995a1ef9b8ff6a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78c9ff30bb2e2f5785e7b62940acbe32c761727476eeb69995a1ef9b8ff6a62->enter($__internal_f78c9ff30bb2e2f5785e7b62940acbe32c761727476eeb69995a1ef9b8ff6a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_f78c9ff30bb2e2f5785e7b62940acbe32c761727476eeb69995a1ef9b8ff6a62->leave($__internal_f78c9ff30bb2e2f5785e7b62940acbe32c761727476eeb69995a1ef9b8ff6a62_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_de9004755431a2a93e59b6719abc89885bbf3f75d1f063cc3ffa21d9fdd93cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9004755431a2a93e59b6719abc89885bbf3f75d1f063cc3ffa21d9fdd93cfc->enter($__internal_de9004755431a2a93e59b6719abc89885bbf3f75d1f063cc3ffa21d9fdd93cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if (((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple"))) && ( !$this->getAttribute(($context["attr"] ?? null), "size", array(), "any", true, true) || ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_de9004755431a2a93e59b6719abc89885bbf3f75d1f063cc3ffa21d9fdd93cfc->leave($__internal_de9004755431a2a93e59b6719abc89885bbf3f75d1f063cc3ffa21d9fdd93cfc_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_78d15d3e3825fea98ca521e83c162f236e735a0cda25d30a10bb0523ecbf2894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d15d3e3825fea98ca521e83c162f236e735a0cda25d30a10bb0523ecbf2894->enter($__internal_78d15d3e3825fea98ca521e83c162f236e735a0cda25d30a10bb0523ecbf2894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    $__internal_4ecf84ef56fbdd7f83f645dcbf45f4df21173a713940f88b8807889184104f31 = array("attr" => $this->getAttribute($context["choice"], "attr", array()));
                    if (!is_array($__internal_4ecf84ef56fbdd7f83f645dcbf45f4df21173a713940f88b8807889184104f31)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_4ecf84ef56fbdd7f83f645dcbf45f4df21173a713940f88b8807889184104f31);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_78d15d3e3825fea98ca521e83c162f236e735a0cda25d30a10bb0523ecbf2894->leave($__internal_78d15d3e3825fea98ca521e83c162f236e735a0cda25d30a10bb0523ecbf2894_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_66e66a1fbe8e48d31fcc154779227fb5ff4d72edfba3efe75f95a80ff5a43b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e66a1fbe8e48d31fcc154779227fb5ff4d72edfba3efe75f95a80ff5a43b28->enter($__internal_66e66a1fbe8e48d31fcc154779227fb5ff4d72edfba3efe75f95a80ff5a43b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_66e66a1fbe8e48d31fcc154779227fb5ff4d72edfba3efe75f95a80ff5a43b28->leave($__internal_66e66a1fbe8e48d31fcc154779227fb5ff4d72edfba3efe75f95a80ff5a43b28_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_60c053fd7918c7656f99d3121800dc41639410c4cc43aaca6b2582ac88ecd7d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c053fd7918c7656f99d3121800dc41639410c4cc43aaca6b2582ac88ecd7d3->enter($__internal_60c053fd7918c7656f99d3121800dc41639410c4cc43aaca6b2582ac88ecd7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_60c053fd7918c7656f99d3121800dc41639410c4cc43aaca6b2582ac88ecd7d3->leave($__internal_60c053fd7918c7656f99d3121800dc41639410c4cc43aaca6b2582ac88ecd7d3_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_9591bacf78f355d5ac1cc608c8bae1260d8e0d533561bcc0756c50f9240f59a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9591bacf78f355d5ac1cc608c8bae1260d8e0d533561bcc0756c50f9240f59a8->enter($__internal_9591bacf78f355d5ac1cc608c8bae1260d8e0d533561bcc0756c50f9240f59a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_9591bacf78f355d5ac1cc608c8bae1260d8e0d533561bcc0756c50f9240f59a8->leave($__internal_9591bacf78f355d5ac1cc608c8bae1260d8e0d533561bcc0756c50f9240f59a8_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_6fbdd68b8e3d3470f8de1b9adb8e01bcc1783a85151f64444b19d0178f149442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fbdd68b8e3d3470f8de1b9adb8e01bcc1783a85151f64444b19d0178f149442->enter($__internal_6fbdd68b8e3d3470f8de1b9adb8e01bcc1783a85151f64444b19d0178f149442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_6fbdd68b8e3d3470f8de1b9adb8e01bcc1783a85151f64444b19d0178f149442->leave($__internal_6fbdd68b8e3d3470f8de1b9adb8e01bcc1783a85151f64444b19d0178f149442_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_45e6919a3d097d0aaf9378f7d0820590065bb89eaf6cdcf4f9dcaa9c1226bd62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e6919a3d097d0aaf9378f7d0820590065bb89eaf6cdcf4f9dcaa9c1226bd62->enter($__internal_45e6919a3d097d0aaf9378f7d0820590065bb89eaf6cdcf4f9dcaa9c1226bd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = (((($context["widget"] ?? $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_45e6919a3d097d0aaf9378f7d0820590065bb89eaf6cdcf4f9dcaa9c1226bd62->leave($__internal_45e6919a3d097d0aaf9378f7d0820590065bb89eaf6cdcf4f9dcaa9c1226bd62_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_ef961c4d478a09cb279c79f2d5d8e44bdbb075358d448babbb2d2851951e03f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef961c4d478a09cb279c79f2d5d8e44bdbb075358d448babbb2d2851951e03f5->enter($__internal_ef961c4d478a09cb279c79f2d5d8e44bdbb075358d448babbb2d2851951e03f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_ef961c4d478a09cb279c79f2d5d8e44bdbb075358d448babbb2d2851951e03f5->leave($__internal_ef961c4d478a09cb279c79f2d5d8e44bdbb075358d448babbb2d2851951e03f5_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_29f33394bf8f65778208fdabd9e23bc161b606bbc92ba825830c6b6c42f05f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f33394bf8f65778208fdabd9e23bc161b606bbc92ba825830c6b6c42f05f2d->enter($__internal_29f33394bf8f65778208fdabd9e23bc161b606bbc92ba825830c6b6c42f05f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_29f33394bf8f65778208fdabd9e23bc161b606bbc92ba825830c6b6c42f05f2d->leave($__internal_29f33394bf8f65778208fdabd9e23bc161b606bbc92ba825830c6b6c42f05f2d_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_5dfdd287938e6edaa0d7f6d584cf4450fc172ba1f47d6b1edfe80badbb87cabe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dfdd287938e6edaa0d7f6d584cf4450fc172ba1f47d6b1edfe80badbb87cabe->enter($__internal_5dfdd287938e6edaa0d7f6d584cf4450fc172ba1f47d6b1edfe80badbb87cabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5dfdd287938e6edaa0d7f6d584cf4450fc172ba1f47d6b1edfe80badbb87cabe->leave($__internal_5dfdd287938e6edaa0d7f6d584cf4450fc172ba1f47d6b1edfe80badbb87cabe_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_8875ff003bbb64f5624128665c6ef06b74c3777a0e4aa8a2debf3ba9897230ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8875ff003bbb64f5624128665c6ef06b74c3777a0e4aa8a2debf3ba9897230ff->enter($__internal_8875ff003bbb64f5624128665c6ef06b74c3777a0e4aa8a2debf3ba9897230ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_8875ff003bbb64f5624128665c6ef06b74c3777a0e4aa8a2debf3ba9897230ff->leave($__internal_8875ff003bbb64f5624128665c6ef06b74c3777a0e4aa8a2debf3ba9897230ff_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_8682e323b7b9f606f455703ea98b2e89ba7fcb77dce7b0906bbe0d985c9c493a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8682e323b7b9f606f455703ea98b2e89ba7fcb77dce7b0906bbe0d985c9c493a->enter($__internal_8682e323b7b9f606f455703ea98b2e89ba7fcb77dce7b0906bbe0d985c9c493a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8682e323b7b9f606f455703ea98b2e89ba7fcb77dce7b0906bbe0d985c9c493a->leave($__internal_8682e323b7b9f606f455703ea98b2e89ba7fcb77dce7b0906bbe0d985c9c493a_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_a280a7b3e651d4d43ea90239484ca0d6ab79088cfc2cf340071540f938c25920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a280a7b3e651d4d43ea90239484ca0d6ab79088cfc2cf340071540f938c25920->enter($__internal_a280a7b3e651d4d43ea90239484ca0d6ab79088cfc2cf340071540f938c25920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a280a7b3e651d4d43ea90239484ca0d6ab79088cfc2cf340071540f938c25920->leave($__internal_a280a7b3e651d4d43ea90239484ca0d6ab79088cfc2cf340071540f938c25920_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_8587539dbff2e0188e1cc0324966dfe147e497cc18fc059a67625b9782d9accb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8587539dbff2e0188e1cc0324966dfe147e497cc18fc059a67625b9782d9accb->enter($__internal_8587539dbff2e0188e1cc0324966dfe147e497cc18fc059a67625b9782d9accb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_8587539dbff2e0188e1cc0324966dfe147e497cc18fc059a67625b9782d9accb->leave($__internal_8587539dbff2e0188e1cc0324966dfe147e497cc18fc059a67625b9782d9accb_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_9dc94b19f8970cc956ffbd8c6959ac21684aeeba39e125157809c6138b0884d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc94b19f8970cc956ffbd8c6959ac21684aeeba39e125157809c6138b0884d0->enter($__internal_9dc94b19f8970cc956ffbd8c6959ac21684aeeba39e125157809c6138b0884d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9dc94b19f8970cc956ffbd8c6959ac21684aeeba39e125157809c6138b0884d0->leave($__internal_9dc94b19f8970cc956ffbd8c6959ac21684aeeba39e125157809c6138b0884d0_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_8db713daa92801af0b8e77932551295e289515b954d95ea8d3790e9c8390e007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db713daa92801af0b8e77932551295e289515b954d95ea8d3790e9c8390e007->enter($__internal_8db713daa92801af0b8e77932551295e289515b954d95ea8d3790e9c8390e007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8db713daa92801af0b8e77932551295e289515b954d95ea8d3790e9c8390e007->leave($__internal_8db713daa92801af0b8e77932551295e289515b954d95ea8d3790e9c8390e007_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_085bdb49e7ff6456c4cd5f7af2fa596850b0da0e4d9af4c3211180d9f90494c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085bdb49e7ff6456c4cd5f7af2fa596850b0da0e4d9af4c3211180d9f90494c7->enter($__internal_085bdb49e7ff6456c4cd5f7af2fa596850b0da0e4d9af4c3211180d9f90494c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_085bdb49e7ff6456c4cd5f7af2fa596850b0da0e4d9af4c3211180d9f90494c7->leave($__internal_085bdb49e7ff6456c4cd5f7af2fa596850b0da0e4d9af4c3211180d9f90494c7_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_86e6b94f823a39458030ada8fbeef66344558b6357ae3810baf629ee126d7486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e6b94f823a39458030ada8fbeef66344558b6357ae3810baf629ee126d7486->enter($__internal_86e6b94f823a39458030ada8fbeef66344558b6357ae3810baf629ee126d7486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_86e6b94f823a39458030ada8fbeef66344558b6357ae3810baf629ee126d7486->leave($__internal_86e6b94f823a39458030ada8fbeef66344558b6357ae3810baf629ee126d7486_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_4402d0c5a34bffac45074e0b9170a2450cdb829f58db52e14782494dabb04271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4402d0c5a34bffac45074e0b9170a2450cdb829f58db52e14782494dabb04271->enter($__internal_4402d0c5a34bffac45074e0b9170a2450cdb829f58db52e14782494dabb04271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 220
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 221
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 222
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 223
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_4402d0c5a34bffac45074e0b9170a2450cdb829f58db52e14782494dabb04271->leave($__internal_4402d0c5a34bffac45074e0b9170a2450cdb829f58db52e14782494dabb04271_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_b2e20e16329372823e3009aa150b296acbf393943d5a69457057639f65b37bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e20e16329372823e3009aa150b296acbf393943d5a69457057639f65b37bde->enter($__internal_b2e20e16329372823e3009aa150b296acbf393943d5a69457057639f65b37bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_b2e20e16329372823e3009aa150b296acbf393943d5a69457057639f65b37bde->leave($__internal_b2e20e16329372823e3009aa150b296acbf393943d5a69457057639f65b37bde_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_94138f3febbd8a1c7c54539531b354e0972df5625ae70fc0b06bff6ffd401f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94138f3febbd8a1c7c54539531b354e0972df5625ae70fc0b06bff6ffd401f91->enter($__internal_94138f3febbd8a1c7c54539531b354e0972df5625ae70fc0b06bff6ffd401f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_94138f3febbd8a1c7c54539531b354e0972df5625ae70fc0b06bff6ffd401f91->leave($__internal_94138f3febbd8a1c7c54539531b354e0972df5625ae70fc0b06bff6ffd401f91_prof);

    }

    // line 244
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d6b3bfede15e2e81b67cf55628322f0f03e567854439bab78f7ef94190f1f988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b3bfede15e2e81b67cf55628322f0f03e567854439bab78f7ef94190f1f988->enter($__internal_d6b3bfede15e2e81b67cf55628322f0f03e567854439bab78f7ef94190f1f988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 245
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 246
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 247
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 249
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 250
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 252
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 253
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 254
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 255
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 256
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 259
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 262
            echo "<label";
            if (($context["label_attr"] ?? $this->getContext($context, "label_attr"))) {
                $__internal_087ec5cfc96f9342a8e36dde2a6117869812ca67f0e8dce52335f41455ae8c04 = array("attr" => ($context["label_attr"] ?? $this->getContext($context, "label_attr")));
                if (!is_array($__internal_087ec5cfc96f9342a8e36dde2a6117869812ca67f0e8dce52335f41455ae8c04)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_087ec5cfc96f9342a8e36dde2a6117869812ca67f0e8dce52335f41455ae8c04);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_d6b3bfede15e2e81b67cf55628322f0f03e567854439bab78f7ef94190f1f988->leave($__internal_d6b3bfede15e2e81b67cf55628322f0f03e567854439bab78f7ef94190f1f988_prof);

    }

    // line 266
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_26fb5a2b27002b53f8f4d6842cfad107bb7ff9ebd33cc09b316083491060f543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26fb5a2b27002b53f8f4d6842cfad107bb7ff9ebd33cc09b316083491060f543->enter($__internal_26fb5a2b27002b53f8f4d6842cfad107bb7ff9ebd33cc09b316083491060f543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_26fb5a2b27002b53f8f4d6842cfad107bb7ff9ebd33cc09b316083491060f543->leave($__internal_26fb5a2b27002b53f8f4d6842cfad107bb7ff9ebd33cc09b316083491060f543_prof);

    }

    // line 270
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_fd1be28ea91925889e1a219af261079aeda65dd046771e5d2cfccc05552e5608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1be28ea91925889e1a219af261079aeda65dd046771e5d2cfccc05552e5608->enter($__internal_fd1be28ea91925889e1a219af261079aeda65dd046771e5d2cfccc05552e5608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 275
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_fd1be28ea91925889e1a219af261079aeda65dd046771e5d2cfccc05552e5608->leave($__internal_fd1be28ea91925889e1a219af261079aeda65dd046771e5d2cfccc05552e5608_prof);

    }

    // line 278
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ad08f9e7876647fe1c98ab3ae94d34e9f0ace08f58283a88f6d6ad7ac790cb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad08f9e7876647fe1c98ab3ae94d34e9f0ace08f58283a88f6d6ad7ac790cb58->enter($__internal_ad08f9e7876647fe1c98ab3ae94d34e9f0ace08f58283a88f6d6ad7ac790cb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 279
        echo "<div>";
        // line 280
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 281
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 282
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 283
        echo "</div>";
        
        $__internal_ad08f9e7876647fe1c98ab3ae94d34e9f0ace08f58283a88f6d6ad7ac790cb58->leave($__internal_ad08f9e7876647fe1c98ab3ae94d34e9f0ace08f58283a88f6d6ad7ac790cb58_prof);

    }

    // line 286
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3c09ed6c6090ce4045bf75ad2cffca70233ff90ce64f83800f7b159d9d67302d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c09ed6c6090ce4045bf75ad2cffca70233ff90ce64f83800f7b159d9d67302d->enter($__internal_3c09ed6c6090ce4045bf75ad2cffca70233ff90ce64f83800f7b159d9d67302d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 287
        echo "<div>";
        // line 288
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 289
        echo "</div>";
        
        $__internal_3c09ed6c6090ce4045bf75ad2cffca70233ff90ce64f83800f7b159d9d67302d->leave($__internal_3c09ed6c6090ce4045bf75ad2cffca70233ff90ce64f83800f7b159d9d67302d_prof);

    }

    // line 292
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_dad72c325c809b2271813696f082ba1df88d2d22620ce51ace4418bb72f0acfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad72c325c809b2271813696f082ba1df88d2d22620ce51ace4418bb72f0acfb->enter($__internal_dad72c325c809b2271813696f082ba1df88d2d22620ce51ace4418bb72f0acfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 293
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        
        $__internal_dad72c325c809b2271813696f082ba1df88d2d22620ce51ace4418bb72f0acfb->leave($__internal_dad72c325c809b2271813696f082ba1df88d2d22620ce51ace4418bb72f0acfb_prof);

    }

    // line 298
    public function block_form($context, array $blocks = array())
    {
        $__internal_db97532e2d6f0e1a74f89f952c355deb4ecff65e555c8d638980a61e370efeff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db97532e2d6f0e1a74f89f952c355deb4ecff65e555c8d638980a61e370efeff->enter($__internal_db97532e2d6f0e1a74f89f952c355deb4ecff65e555c8d638980a61e370efeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 299
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        // line 300
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 301
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_db97532e2d6f0e1a74f89f952c355deb4ecff65e555c8d638980a61e370efeff->leave($__internal_db97532e2d6f0e1a74f89f952c355deb4ecff65e555c8d638980a61e370efeff_prof);

    }

    // line 304
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_16d029f8295b0d95cda7f5e60c2d8700fcd30247ce7def934d7030c578f956bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d029f8295b0d95cda7f5e60c2d8700fcd30247ce7def934d7030c578f956bb->enter($__internal_16d029f8295b0d95cda7f5e60c2d8700fcd30247ce7def934d7030c578f956bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 305
        $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "setMethodRendered", array(), "method");
        // line 306
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
        // line 307
        if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 308
            $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
        } else {
            // line 310
            $context["form_method"] = "POST";
        }
        // line 312
        echo "<form name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if ((($context["action"] ?? $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
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
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 313
        if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
            // line 314
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_16d029f8295b0d95cda7f5e60c2d8700fcd30247ce7def934d7030c578f956bb->leave($__internal_16d029f8295b0d95cda7f5e60c2d8700fcd30247ce7def934d7030c578f956bb_prof);

    }

    // line 318
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_39cbb38e87ff861baa5e0d8752a29ec3f088fc043259efa3190df2a4dfe3b129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cbb38e87ff861baa5e0d8752a29ec3f088fc043259efa3190df2a4dfe3b129->enter($__internal_39cbb38e87ff861baa5e0d8752a29ec3f088fc043259efa3190df2a4dfe3b129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 319
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? $this->getContext($context, "render_rest")))) {
            // line 320
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        }
        // line 322
        echo "</form>";
        
        $__internal_39cbb38e87ff861baa5e0d8752a29ec3f088fc043259efa3190df2a4dfe3b129->leave($__internal_39cbb38e87ff861baa5e0d8752a29ec3f088fc043259efa3190df2a4dfe3b129_prof);

    }

    // line 325
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f8575a1ad1f69ad2040301400ee4e5c51617ee614ab3a12bdbba28a50b7b841d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8575a1ad1f69ad2040301400ee4e5c51617ee614ab3a12bdbba28a50b7b841d->enter($__internal_f8575a1ad1f69ad2040301400ee4e5c51617ee614ab3a12bdbba28a50b7b841d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 326
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 327
            echo "<ul>";
            // line 328
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 329
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "</ul>";
        }
        
        $__internal_f8575a1ad1f69ad2040301400ee4e5c51617ee614ab3a12bdbba28a50b7b841d->leave($__internal_f8575a1ad1f69ad2040301400ee4e5c51617ee614ab3a12bdbba28a50b7b841d_prof);

    }

    // line 335
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_0e3f9f45dc00e58b18e938478c5ebf44d15bebaa84fdfd327fa02cba260ae683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3f9f45dc00e58b18e938478c5ebf44d15bebaa84fdfd327fa02cba260ae683->enter($__internal_0e3f9f45dc00e58b18e938478c5ebf44d15bebaa84fdfd327fa02cba260ae683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 337
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 338
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 342
        if (( !$this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))))) {
            // line 343
            $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "setMethodRendered", array(), "method");
            // line 344
            $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
            // line 345
            if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
                // line 346
                $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
            } else {
                // line 348
                $context["form_method"] = "POST";
            }
            // line 351
            if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
                // line 352
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_0e3f9f45dc00e58b18e938478c5ebf44d15bebaa84fdfd327fa02cba260ae683->leave($__internal_0e3f9f45dc00e58b18e938478c5ebf44d15bebaa84fdfd327fa02cba260ae683_prof);

    }

    // line 359
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_40e53fb0042c7eb3a4bca8af044f3443baa63ee40b81b5a3ab247309940511ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e53fb0042c7eb3a4bca8af044f3443baa63ee40b81b5a3ab247309940511ba->enter($__internal_40e53fb0042c7eb3a4bca8af044f3443baa63ee40b81b5a3ab247309940511ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 361
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_40e53fb0042c7eb3a4bca8af044f3443baa63ee40b81b5a3ab247309940511ba->leave($__internal_40e53fb0042c7eb3a4bca8af044f3443baa63ee40b81b5a3ab247309940511ba_prof);

    }

    // line 365
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_e4e31d9b309a2377faca4c5c33491bcfd14ca7061cdf781702c597a3fdbeb50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e31d9b309a2377faca4c5c33491bcfd14ca7061cdf781702c597a3fdbeb50f->enter($__internal_e4e31d9b309a2377faca4c5c33491bcfd14ca7061cdf781702c597a3fdbeb50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 366
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 367
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 368
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 369
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_e4e31d9b309a2377faca4c5c33491bcfd14ca7061cdf781702c597a3fdbeb50f->leave($__internal_e4e31d9b309a2377faca4c5c33491bcfd14ca7061cdf781702c597a3fdbeb50f_prof);

    }

    // line 372
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_95646301e869de8b625dbae55c047f7a01eac6172e6161a866f160402db0197d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95646301e869de8b625dbae55c047f7a01eac6172e6161a866f160402db0197d->enter($__internal_95646301e869de8b625dbae55c047f7a01eac6172e6161a866f160402db0197d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 373
        if ( !twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 374
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_95646301e869de8b625dbae55c047f7a01eac6172e6161a866f160402db0197d->leave($__internal_95646301e869de8b625dbae55c047f7a01eac6172e6161a866f160402db0197d_prof);

    }

    // line 377
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_ac9b5ba974881aa4e3f2b3294d0021645669b921d12dd44018efba1f2a2e7828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9b5ba974881aa4e3f2b3294d0021645669b921d12dd44018efba1f2a2e7828->enter($__internal_ac9b5ba974881aa4e3f2b3294d0021645669b921d12dd44018efba1f2a2e7828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 378
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_ac9b5ba974881aa4e3f2b3294d0021645669b921d12dd44018efba1f2a2e7828->leave($__internal_ac9b5ba974881aa4e3f2b3294d0021645669b921d12dd44018efba1f2a2e7828_prof);

    }

    // line 382
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_c3ff0c170cd7c28b9d86237dae8ecfb286e5cfe9cea9a3961fa78ff1ca0445d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ff0c170cd7c28b9d86237dae8ecfb286e5cfe9cea9a3961fa78ff1ca0445d9->enter($__internal_c3ff0c170cd7c28b9d86237dae8ecfb286e5cfe9cea9a3961fa78ff1ca0445d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 383
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 384
            echo " ";
            // line 385
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 386
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 387
$context["attrvalue"] === true)) {
                // line 388
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 389
$context["attrvalue"] === false)) {
                // line 390
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c3ff0c170cd7c28b9d86237dae8ecfb286e5cfe9cea9a3961fa78ff1ca0445d9->leave($__internal_c3ff0c170cd7c28b9d86237dae8ecfb286e5cfe9cea9a3961fa78ff1ca0445d9_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1336 => 390,  1334 => 389,  1329 => 388,  1327 => 387,  1322 => 386,  1320 => 385,  1318 => 384,  1314 => 383,  1308 => 382,  1301 => 379,  1292 => 378,  1286 => 377,  1279 => 374,  1273 => 373,  1267 => 372,  1260 => 369,  1256 => 368,  1252 => 367,  1246 => 366,  1240 => 365,  1229 => 361,  1225 => 360,  1219 => 359,  1208 => 352,  1206 => 351,  1203 => 348,  1200 => 346,  1198 => 345,  1196 => 344,  1194 => 343,  1192 => 342,  1185 => 338,  1183 => 337,  1179 => 336,  1173 => 335,  1165 => 331,  1157 => 329,  1153 => 328,  1151 => 327,  1149 => 326,  1143 => 325,  1136 => 322,  1133 => 320,  1131 => 319,  1125 => 318,  1115 => 314,  1113 => 313,  1086 => 312,  1083 => 310,  1080 => 308,  1078 => 307,  1076 => 306,  1074 => 305,  1068 => 304,  1061 => 301,  1059 => 300,  1057 => 299,  1051 => 298,  1044 => 293,  1038 => 292,  1031 => 289,  1029 => 288,  1027 => 287,  1021 => 286,  1014 => 283,  1012 => 282,  1010 => 281,  1008 => 280,  1006 => 279,  1000 => 278,  993 => 275,  987 => 270,  976 => 266,  955 => 262,  951 => 259,  948 => 256,  947 => 255,  946 => 254,  944 => 253,  942 => 252,  939 => 250,  937 => 249,  934 => 247,  932 => 246,  930 => 245,  924 => 244,  917 => 239,  915 => 238,  909 => 237,  902 => 234,  900 => 233,  894 => 232,  881 => 229,  877 => 226,  874 => 223,  873 => 222,  872 => 221,  870 => 220,  868 => 219,  862 => 218,  855 => 215,  853 => 214,  847 => 213,  840 => 210,  838 => 209,  832 => 208,  825 => 205,  823 => 204,  817 => 203,  810 => 200,  808 => 199,  802 => 198,  794 => 195,  792 => 194,  786 => 193,  779 => 190,  777 => 189,  771 => 188,  764 => 185,  762 => 184,  756 => 183,  749 => 180,  743 => 179,  736 => 176,  734 => 175,  728 => 174,  721 => 171,  719 => 170,  713 => 168,  705 => 164,  701 => 163,  697 => 160,  691 => 159,  685 => 158,  679 => 157,  673 => 156,  667 => 155,  661 => 154,  655 => 153,  650 => 149,  644 => 148,  638 => 147,  632 => 146,  626 => 145,  620 => 144,  614 => 143,  608 => 142,  602 => 139,  600 => 138,  596 => 137,  593 => 135,  591 => 134,  585 => 133,  577 => 129,  567 => 128,  562 => 127,  560 => 126,  557 => 124,  555 => 123,  549 => 122,  541 => 118,  539 => 116,  538 => 115,  537 => 114,  536 => 113,  532 => 112,  529 => 110,  527 => 109,  521 => 108,  513 => 104,  511 => 103,  509 => 102,  507 => 101,  505 => 100,  501 => 99,  498 => 97,  496 => 96,  490 => 95,  473 => 92,  467 => 91,  450 => 88,  444 => 87,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 382,  153 => 377,  151 => 372,  149 => 365,  147 => 359,  144 => 356,  142 => 335,  140 => 325,  138 => 318,  136 => 304,  134 => 298,  132 => 292,  130 => 286,  128 => 278,  126 => 270,  124 => 266,  122 => 244,  120 => 237,  118 => 232,  116 => 218,  114 => 213,  112 => 208,  110 => 203,  108 => 198,  106 => 193,  104 => 188,  102 => 183,  100 => 179,  98 => 174,  96 => 168,  94 => 133,  92 => 122,  90 => 108,  88 => 95,  86 => 91,  84 => 87,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
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
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig");
    }
}
