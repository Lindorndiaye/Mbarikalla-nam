<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_e4f008f1b87080b038a189a9797386de8f5e32897fc786b9f9f267a9cf0e0463 extends Twig_Template
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
        $__internal_3ba0c0724dc9175d84d3d57a39374a797bbca3c209b945b4bccf33fb23e3f9d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba0c0724dc9175d84d3d57a39374a797bbca3c209b945b4bccf33fb23e3f9d1->enter($__internal_3ba0c0724dc9175d84d3d57a39374a797bbca3c209b945b4bccf33fb23e3f9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_c06473a21f5b8dac2eb8b29870d6b10fe39a65d70aa2f3bcb6bbe7bee6d74e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06473a21f5b8dac2eb8b29870d6b10fe39a65d70aa2f3bcb6bbe7bee6d74e47->enter($__internal_c06473a21f5b8dac2eb8b29870d6b10fe39a65d70aa2f3bcb6bbe7bee6d74e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_3ba0c0724dc9175d84d3d57a39374a797bbca3c209b945b4bccf33fb23e3f9d1->leave($__internal_3ba0c0724dc9175d84d3d57a39374a797bbca3c209b945b4bccf33fb23e3f9d1_prof);

        
        $__internal_c06473a21f5b8dac2eb8b29870d6b10fe39a65d70aa2f3bcb6bbe7bee6d74e47->leave($__internal_c06473a21f5b8dac2eb8b29870d6b10fe39a65d70aa2f3bcb6bbe7bee6d74e47_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ec487a8e3fb9e9a7c18fe37331f2440113b9cd91ac3a99fd8a54972e21282664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec487a8e3fb9e9a7c18fe37331f2440113b9cd91ac3a99fd8a54972e21282664->enter($__internal_ec487a8e3fb9e9a7c18fe37331f2440113b9cd91ac3a99fd8a54972e21282664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_1f27b8bdde757a2cc9d3729a782c85bb3f97debdc3ca28f8ee38724bae3dc0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f27b8bdde757a2cc9d3729a782c85bb3f97debdc3ca28f8ee38724bae3dc0eb->enter($__internal_1f27b8bdde757a2cc9d3729a782c85bb3f97debdc3ca28f8ee38724bae3dc0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1f27b8bdde757a2cc9d3729a782c85bb3f97debdc3ca28f8ee38724bae3dc0eb->leave($__internal_1f27b8bdde757a2cc9d3729a782c85bb3f97debdc3ca28f8ee38724bae3dc0eb_prof);

        
        $__internal_ec487a8e3fb9e9a7c18fe37331f2440113b9cd91ac3a99fd8a54972e21282664->leave($__internal_ec487a8e3fb9e9a7c18fe37331f2440113b9cd91ac3a99fd8a54972e21282664_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_dc48b07c7ea4a570f5ff9fcde3cc2e5c28e5d06c451b1396b2f75031a31ef859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc48b07c7ea4a570f5ff9fcde3cc2e5c28e5d06c451b1396b2f75031a31ef859->enter($__internal_dc48b07c7ea4a570f5ff9fcde3cc2e5c28e5d06c451b1396b2f75031a31ef859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6e3cde003e210c5931c6d4e75b323a4a78129b93a4cbe94fc45f8547b9521445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3cde003e210c5931c6d4e75b323a4a78129b93a4cbe94fc45f8547b9521445->enter($__internal_6e3cde003e210c5931c6d4e75b323a4a78129b93a4cbe94fc45f8547b9521445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_6e3cde003e210c5931c6d4e75b323a4a78129b93a4cbe94fc45f8547b9521445->leave($__internal_6e3cde003e210c5931c6d4e75b323a4a78129b93a4cbe94fc45f8547b9521445_prof);

        
        $__internal_dc48b07c7ea4a570f5ff9fcde3cc2e5c28e5d06c451b1396b2f75031a31ef859->leave($__internal_dc48b07c7ea4a570f5ff9fcde3cc2e5c28e5d06c451b1396b2f75031a31ef859_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_bca5978701fb6a1d1e14c5dcc7d28d4e2883b61d478c4bc31eb79487cfd06de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca5978701fb6a1d1e14c5dcc7d28d4e2883b61d478c4bc31eb79487cfd06de2->enter($__internal_bca5978701fb6a1d1e14c5dcc7d28d4e2883b61d478c4bc31eb79487cfd06de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_cd4fd6381b39bbf9d5f83b13a377396c550840a4891350712497b98d6b078f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4fd6381b39bbf9d5f83b13a377396c550840a4891350712497b98d6b078f6b->enter($__internal_cd4fd6381b39bbf9d5f83b13a377396c550840a4891350712497b98d6b078f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 18, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_cd4fd6381b39bbf9d5f83b13a377396c550840a4891350712497b98d6b078f6b->leave($__internal_cd4fd6381b39bbf9d5f83b13a377396c550840a4891350712497b98d6b078f6b_prof);

        
        $__internal_bca5978701fb6a1d1e14c5dcc7d28d4e2883b61d478c4bc31eb79487cfd06de2->leave($__internal_bca5978701fb6a1d1e14c5dcc7d28d4e2883b61d478c4bc31eb79487cfd06de2_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_7805c17bb8567510e4191578457057a2a3a13d13e758349f9c3e3fb01e0a338d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7805c17bb8567510e4191578457057a2a3a13d13e758349f9c3e3fb01e0a338d->enter($__internal_7805c17bb8567510e4191578457057a2a3a13d13e758349f9c3e3fb01e0a338d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_299048ff555f923c416b5beeb60c52826adda1b343644393168bd5ccac447e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299048ff555f923c416b5beeb60c52826adda1b343644393168bd5ccac447e9d->enter($__internal_299048ff555f923c416b5beeb60c52826adda1b343644393168bd5ccac447e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_0bebdbc1b0ef5a80322117b1dde3d23adf81a06cee46495926b4dcf46a983110 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 23, $this->getSourceContext()); })())) && is_string($__internal_82b3ba0e56ff26794c7c1ca4e1131347467ecc934055b90a335f8de71e950a0a = "{{") && ('' === $__internal_82b3ba0e56ff26794c7c1ca4e1131347467ecc934055b90a335f8de71e950a0a || 0 === strpos($__internal_0bebdbc1b0ef5a80322117b1dde3d23adf81a06cee46495926b4dcf46a983110, $__internal_82b3ba0e56ff26794c7c1ca4e1131347467ecc934055b90a335f8de71e950a0a)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_610fd49c7f8ca59cd4ae5633946bf5360802d00f36e42c42a452dd70f9e7c5c6 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 24, $this->getSourceContext()); })())) && is_string($__internal_6c09346b23aac4de402762352a39ad7d8f9bddeba81b9bbd7d69f6fa554052cd = "}}") && ('' === $__internal_6c09346b23aac4de402762352a39ad7d8f9bddeba81b9bbd7d69f6fa554052cd || $__internal_6c09346b23aac4de402762352a39ad7d8f9bddeba81b9bbd7d69f6fa554052cd === substr($__internal_610fd49c7f8ca59cd4ae5633946bf5360802d00f36e42c42a452dd70f9e7c5c6, -strlen($__internal_6c09346b23aac4de402762352a39ad7d8f9bddeba81b9bbd7d69f6fa554052cd))));
        // line 25
        echo "    ";
        if (((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 25, $this->getSourceContext()); })()) || (isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 25, $this->getSourceContext()); })()))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 27, $this->getSourceContext()); })())) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 28, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if ((isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 31, $this->getSourceContext()); })())) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 32, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_299048ff555f923c416b5beeb60c52826adda1b343644393168bd5ccac447e9d->leave($__internal_299048ff555f923c416b5beeb60c52826adda1b343644393168bd5ccac447e9d_prof);

        
        $__internal_7805c17bb8567510e4191578457057a2a3a13d13e758349f9c3e3fb01e0a338d->leave($__internal_7805c17bb8567510e4191578457057a2a3a13d13e758349f9c3e3fb01e0a338d_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_1e2340dcf36d760390f32391e32dcff8b36e058c3195c11bb4a712b25b1b7917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2340dcf36d760390f32391e32dcff8b36e058c3195c11bb4a712b25b1b7917->enter($__internal_1e2340dcf36d760390f32391e32dcff8b36e058c3195c11bb4a712b25b1b7917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_f090183d9eba8edcc9e9128aff27c21a473ef522216ce4178e34dc7158f24e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f090183d9eba8edcc9e9128aff27c21a473ef522216ce4178e34dc7158f24e51->enter($__internal_f090183d9eba8edcc9e9128aff27c21a473ef522216ce4178e34dc7158f24e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_f090183d9eba8edcc9e9128aff27c21a473ef522216ce4178e34dc7158f24e51->leave($__internal_f090183d9eba8edcc9e9128aff27c21a473ef522216ce4178e34dc7158f24e51_prof);

        
        $__internal_1e2340dcf36d760390f32391e32dcff8b36e058c3195c11bb4a712b25b1b7917->leave($__internal_1e2340dcf36d760390f32391e32dcff8b36e058c3195c11bb4a712b25b1b7917_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_30d40c42087196dfcf4ebebf2c962629efc52f794ce5dc7fdfa2b012da81ec05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d40c42087196dfcf4ebebf2c962629efc52f794ce5dc7fdfa2b012da81ec05->enter($__internal_30d40c42087196dfcf4ebebf2c962629efc52f794ce5dc7fdfa2b012da81ec05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_e9785de308f42636ffd145cd646ac3a9bc47099d095e25a78dc1414dd344e158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9785de308f42636ffd145cd646ac3a9bc47099d095e25a78dc1414dd344e158->enter($__internal_e9785de308f42636ffd145cd646ac3a9bc47099d095e25a78dc1414dd344e158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 48, $this->getSourceContext()); })()) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 51, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_e9785de308f42636ffd145cd646ac3a9bc47099d095e25a78dc1414dd344e158->leave($__internal_e9785de308f42636ffd145cd646ac3a9bc47099d095e25a78dc1414dd344e158_prof);

        
        $__internal_30d40c42087196dfcf4ebebf2c962629efc52f794ce5dc7fdfa2b012da81ec05->leave($__internal_30d40c42087196dfcf4ebebf2c962629efc52f794ce5dc7fdfa2b012da81ec05_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_1c2f3a1d092afe7d7530ccfc0adf1b6836b3d6adadf00752b4abaac723e6227b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2f3a1d092afe7d7530ccfc0adf1b6836b3d6adadf00752b4abaac723e6227b->enter($__internal_1c2f3a1d092afe7d7530ccfc0adf1b6836b3d6adadf00752b4abaac723e6227b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_256b74e41cc7e08cf4a851e49f5dc1db10c4541cd0c6092fa179a01d9d78f53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256b74e41cc7e08cf4a851e49f5dc1db10c4541cd0c6092fa179a01d9d78f53c->enter($__internal_256b74e41cc7e08cf4a851e49f5dc1db10c4541cd0c6092fa179a01d9d78f53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 62, $this->getSourceContext()); })()) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 65, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 66, $this->getSourceContext()); })()))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 69, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 74, $this->getSourceContext()); })()))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_256b74e41cc7e08cf4a851e49f5dc1db10c4541cd0c6092fa179a01d9d78f53c->leave($__internal_256b74e41cc7e08cf4a851e49f5dc1db10c4541cd0c6092fa179a01d9d78f53c_prof);

        
        $__internal_1c2f3a1d092afe7d7530ccfc0adf1b6836b3d6adadf00752b4abaac723e6227b->leave($__internal_1c2f3a1d092afe7d7530ccfc0adf1b6836b3d6adadf00752b4abaac723e6227b_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_804266985ded94e011cb5c2caa93b7fb44eaf353393f95f5f7cf6689e8fd0121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_804266985ded94e011cb5c2caa93b7fb44eaf353393f95f5f7cf6689e8fd0121->enter($__internal_804266985ded94e011cb5c2caa93b7fb44eaf353393f95f5f7cf6689e8fd0121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_70fa8b7650d63970bc6ea4cfdcb6eb350119e70971720ac2374c9e9e26d7eef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fa8b7650d63970bc6ea4cfdcb6eb350119e70971720ac2374c9e9e26d7eef9->enter($__internal_70fa8b7650d63970bc6ea4cfdcb6eb350119e70971720ac2374c9e9e26d7eef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 81, $this->getSourceContext()); })()) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 84, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 85, $this->getSourceContext()); })())))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 88, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 88, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 89, $this->getSourceContext()); })())))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_70fa8b7650d63970bc6ea4cfdcb6eb350119e70971720ac2374c9e9e26d7eef9->leave($__internal_70fa8b7650d63970bc6ea4cfdcb6eb350119e70971720ac2374c9e9e26d7eef9_prof);

        
        $__internal_804266985ded94e011cb5c2caa93b7fb44eaf353393f95f5f7cf6689e8fd0121->leave($__internal_804266985ded94e011cb5c2caa93b7fb44eaf353393f95f5f7cf6689e8fd0121_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_c8dbc11d870e166e6e6e5ab540205641307dc8dc28d9b591c02d3dd031525f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8dbc11d870e166e6e6e5ab540205641307dc8dc28d9b591c02d3dd031525f09->enter($__internal_c8dbc11d870e166e6e6e5ab540205641307dc8dc28d9b591c02d3dd031525f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_5711680123038abd9dc664672c72a98c0926eed74c9c1e3d731a375d501e6666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5711680123038abd9dc664672c72a98c0926eed74c9c1e3d731a375d501e6666->enter($__internal_5711680123038abd9dc664672c72a98c0926eed74c9c1e3d731a375d501e6666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 99, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 103, $this->getSourceContext()); })()), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 106, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 107, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 108, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 108, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 109, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 109, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 110, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 110, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 111, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 112, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 112, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 117, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 117, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 118, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 119, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 119, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 120, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 120, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 121, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 121, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 122, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 122, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 123, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 128, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_5711680123038abd9dc664672c72a98c0926eed74c9c1e3d731a375d501e6666->leave($__internal_5711680123038abd9dc664672c72a98c0926eed74c9c1e3d731a375d501e6666_prof);

        
        $__internal_c8dbc11d870e166e6e6e5ab540205641307dc8dc28d9b591c02d3dd031525f09->leave($__internal_c8dbc11d870e166e6e6e5ab540205641307dc8dc28d9b591c02d3dd031525f09_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_2d6a88dde418f27401054f45b37d0c685baebb9f8256908420c9f967d8dcf496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6a88dde418f27401054f45b37d0c685baebb9f8256908420c9f967d8dcf496->enter($__internal_2d6a88dde418f27401054f45b37d0c685baebb9f8256908420c9f967d8dcf496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_adf5665537e0ae699fe94a7623fc743c2b9c327ddf3a9cc0b7daeea7cdac2d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf5665537e0ae699fe94a7623fc743c2b9c327ddf3a9cc0b7daeea7cdac2d49->enter($__internal_adf5665537e0ae699fe94a7623fc743c2b9c327ddf3a9cc0b7daeea7cdac2d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 134, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_adf5665537e0ae699fe94a7623fc743c2b9c327ddf3a9cc0b7daeea7cdac2d49->leave($__internal_adf5665537e0ae699fe94a7623fc743c2b9c327ddf3a9cc0b7daeea7cdac2d49_prof);

        
        $__internal_2d6a88dde418f27401054f45b37d0c685baebb9f8256908420c9f967d8dcf496->leave($__internal_2d6a88dde418f27401054f45b37d0c685baebb9f8256908420c9f967d8dcf496_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_6bc0d9cd734a558e041c850b238633b1636d30d752b9ae6fd9f5f374a510dd59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc0d9cd734a558e041c850b238633b1636d30d752b9ae6fd9f5f374a510dd59->enter($__internal_6bc0d9cd734a558e041c850b238633b1636d30d752b9ae6fd9f5f374a510dd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_d790e8e49bda6201e2aa5beac5d9e0ce10f98a1694cb21c740dad6908c077036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d790e8e49bda6201e2aa5beac5d9e0ce10f98a1694cb21c740dad6908c077036->enter($__internal_d790e8e49bda6201e2aa5beac5d9e0ce10f98a1694cb21c740dad6908c077036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 140, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 143, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 151, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_d790e8e49bda6201e2aa5beac5d9e0ce10f98a1694cb21c740dad6908c077036->leave($__internal_d790e8e49bda6201e2aa5beac5d9e0ce10f98a1694cb21c740dad6908c077036_prof);

        
        $__internal_6bc0d9cd734a558e041c850b238633b1636d30d752b9ae6fd9f5f374a510dd59->leave($__internal_6bc0d9cd734a558e041c850b238633b1636d30d752b9ae6fd9f5f374a510dd59_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6b6d3da1a4a637cb3613e27ffdaa98fb70c12c4ff2fa0e3ce30634f8239c497b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b6d3da1a4a637cb3613e27ffdaa98fb70c12c4ff2fa0e3ce30634f8239c497b->enter($__internal_6b6d3da1a4a637cb3613e27ffdaa98fb70c12c4ff2fa0e3ce30634f8239c497b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_747234a9eb031ed13475ac1e24cfa45134c42952c982f76c4b6f54dea2625f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747234a9eb031ed13475ac1e24cfa45134c42952c982f76c4b6f54dea2625f22->enter($__internal_747234a9eb031ed13475ac1e24cfa45134c42952c982f76c4b6f54dea2625f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 159, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 160, $this->getSourceContext()); })()))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 161, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 164, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_747234a9eb031ed13475ac1e24cfa45134c42952c982f76c4b6f54dea2625f22->leave($__internal_747234a9eb031ed13475ac1e24cfa45134c42952c982f76c4b6f54dea2625f22_prof);

        
        $__internal_6b6d3da1a4a637cb3613e27ffdaa98fb70c12c4ff2fa0e3ce30634f8239c497b->leave($__internal_6b6d3da1a4a637cb3613e27ffdaa98fb70c12c4ff2fa0e3ce30634f8239c497b_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_87572aaa866fb0a818dce28f295c78d14c6e3a9e4ed7ab0a19a6d37986a2a611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87572aaa866fb0a818dce28f295c78d14c6e3a9e4ed7ab0a19a6d37986a2a611->enter($__internal_87572aaa866fb0a818dce28f295c78d14c6e3a9e4ed7ab0a19a6d37986a2a611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_78bb650c9ba2e47b47f8b97750b8ebb1faf5a8c0ad4bb144b4a3cd3b7ecc6dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78bb650c9ba2e47b47f8b97750b8ebb1faf5a8c0ad4bb144b4a3cd3b7ecc6dfd->enter($__internal_78bb650c9ba2e47b47f8b97750b8ebb1faf5a8c0ad4bb144b4a3cd3b7ecc6dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 170, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 171, $this->getSourceContext()); })()))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 172, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 175, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_78bb650c9ba2e47b47f8b97750b8ebb1faf5a8c0ad4bb144b4a3cd3b7ecc6dfd->leave($__internal_78bb650c9ba2e47b47f8b97750b8ebb1faf5a8c0ad4bb144b4a3cd3b7ecc6dfd_prof);

        
        $__internal_87572aaa866fb0a818dce28f295c78d14c6e3a9e4ed7ab0a19a6d37986a2a611->leave($__internal_87572aaa866fb0a818dce28f295c78d14c6e3a9e4ed7ab0a19a6d37986a2a611_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ca48badfb637adc26423ec6c1878408f91bf7f54bdd20ff622a2453f67c452ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca48badfb637adc26423ec6c1878408f91bf7f54bdd20ff622a2453f67c452ff->enter($__internal_ca48badfb637adc26423ec6c1878408f91bf7f54bdd20ff622a2453f67c452ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_697bfdf48e2c94fe633ac8d60b431a409056beb4a2007a540cbe4311d1d19250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697bfdf48e2c94fe633ac8d60b431a409056beb4a2007a540cbe4311d1d19250->enter($__internal_697bfdf48e2c94fe633ac8d60b431a409056beb4a2007a540cbe4311d1d19250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 183, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_697bfdf48e2c94fe633ac8d60b431a409056beb4a2007a540cbe4311d1d19250->leave($__internal_697bfdf48e2c94fe633ac8d60b431a409056beb4a2007a540cbe4311d1d19250_prof);

        
        $__internal_ca48badfb637adc26423ec6c1878408f91bf7f54bdd20ff622a2453f67c452ff->leave($__internal_ca48badfb637adc26423ec6c1878408f91bf7f54bdd20ff622a2453f67c452ff_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f582187f9ff508518afa548fa9561d2e6a94d73f01b460db957efde4724fabf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f582187f9ff508518afa548fa9561d2e6a94d73f01b460db957efde4724fabf8->enter($__internal_f582187f9ff508518afa548fa9561d2e6a94d73f01b460db957efde4724fabf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_dcbc979d177c46850ca63cc301acabb2f0d0cffea144f215945b344de4858732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbc979d177c46850ca63cc301acabb2f0d0cffea144f215945b344de4858732->enter($__internal_dcbc979d177c46850ca63cc301acabb2f0d0cffea144f215945b344de4858732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 189, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_dcbc979d177c46850ca63cc301acabb2f0d0cffea144f215945b344de4858732->leave($__internal_dcbc979d177c46850ca63cc301acabb2f0d0cffea144f215945b344de4858732_prof);

        
        $__internal_f582187f9ff508518afa548fa9561d2e6a94d73f01b460db957efde4724fabf8->leave($__internal_f582187f9ff508518afa548fa9561d2e6a94d73f01b460db957efde4724fabf8_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_77191f6b38f8a3230f6a50f3012d5d87f3b968e67a656777973d2e600c81ebc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77191f6b38f8a3230f6a50f3012d5d87f3b968e67a656777973d2e600c81ebc7->enter($__internal_77191f6b38f8a3230f6a50f3012d5d87f3b968e67a656777973d2e600c81ebc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_1d4d22d665070ae376f08913ecb26830ae0a0ad06ba60654dd35b4a5b2a90c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4d22d665070ae376f08913ecb26830ae0a0ad06ba60654dd35b4a5b2a90c2d->enter($__internal_1d4d22d665070ae376f08913ecb26830ae0a0ad06ba60654dd35b4a5b2a90c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 194, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 194, $this->getSourceContext()); })())));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1d4d22d665070ae376f08913ecb26830ae0a0ad06ba60654dd35b4a5b2a90c2d->leave($__internal_1d4d22d665070ae376f08913ecb26830ae0a0ad06ba60654dd35b4a5b2a90c2d_prof);

        
        $__internal_77191f6b38f8a3230f6a50f3012d5d87f3b968e67a656777973d2e600c81ebc7->leave($__internal_77191f6b38f8a3230f6a50f3012d5d87f3b968e67a656777973d2e600c81ebc7_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a35d5bd9ac5fed7091bc7c1339f6770bd25a59e5478dfe00910030636321dcaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a35d5bd9ac5fed7091bc7c1339f6770bd25a59e5478dfe00910030636321dcaa->enter($__internal_a35d5bd9ac5fed7091bc7c1339f6770bd25a59e5478dfe00910030636321dcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_70b3727e8c3afc1c6e4163b65067fdd4f02cfd66ad903de42997ac07f9605169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b3727e8c3afc1c6e4163b65067fdd4f02cfd66ad903de42997ac07f9605169->enter($__internal_70b3727e8c3afc1c6e4163b65067fdd4f02cfd66ad903de42997ac07f9605169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 200, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 200, $this->getSourceContext()); })())));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_70b3727e8c3afc1c6e4163b65067fdd4f02cfd66ad903de42997ac07f9605169->leave($__internal_70b3727e8c3afc1c6e4163b65067fdd4f02cfd66ad903de42997ac07f9605169_prof);

        
        $__internal_a35d5bd9ac5fed7091bc7c1339f6770bd25a59e5478dfe00910030636321dcaa->leave($__internal_a35d5bd9ac5fed7091bc7c1339f6770bd25a59e5478dfe00910030636321dcaa_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_7483f3fa5d2773c9e3289064073b2b2ba891e9e595e04a5cb496c20f89b80b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7483f3fa5d2773c9e3289064073b2b2ba891e9e595e04a5cb496c20f89b80b32->enter($__internal_7483f3fa5d2773c9e3289064073b2b2ba891e9e595e04a5cb496c20f89b80b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_d5d6e263ba39d97b24223ea2bfa8a27c66f8af57410f3fea6ec1237acd68aa86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d6e263ba39d97b24223ea2bfa8a27c66f8af57410f3fea6ec1237acd68aa86->enter($__internal_d5d6e263ba39d97b24223ea2bfa8a27c66f8af57410f3fea6ec1237acd68aa86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 208, $this->getSourceContext()); })())) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 209, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 212, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 212, $this->getSourceContext()); })())))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 214, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 214, $this->getSourceContext()); })())))) {
                // line 215
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 215, $this->getSourceContext()); })()))) {
                    // line 216
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 216, $this->getSourceContext()); })()), array("%name%" =>                     // line 217
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 217, $this->getSourceContext()); })()), "%id%" =>                     // line 218
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 218, $this->getSourceContext()); })())));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 221, $this->getSourceContext()); })()));
                }
            }
            // line 224
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 224, $this->getSourceContext()); })()));
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
            // line 225
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 225, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 225, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 225, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 225, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 225, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 225, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_d5d6e263ba39d97b24223ea2bfa8a27c66f8af57410f3fea6ec1237acd68aa86->leave($__internal_d5d6e263ba39d97b24223ea2bfa8a27c66f8af57410f3fea6ec1237acd68aa86_prof);

        
        $__internal_7483f3fa5d2773c9e3289064073b2b2ba891e9e595e04a5cb496c20f89b80b32->leave($__internal_7483f3fa5d2773c9e3289064073b2b2ba891e9e595e04a5cb496c20f89b80b32_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_47cda504ff935b61048b8d5ad45a8f2f82f1efda4c93f2918799c168b2e73c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47cda504ff935b61048b8d5ad45a8f2f82f1efda4c93f2918799c168b2e73c98->enter($__internal_47cda504ff935b61048b8d5ad45a8f2f82f1efda4c93f2918799c168b2e73c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f281c6135a0c8543eebb41f3a6bca0bcf2a28d6f56437dc0ffb0d21c1e947bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f281c6135a0c8543eebb41f3a6bca0bcf2a28d6f56437dc0ffb0d21c1e947bc3->enter($__internal_f281c6135a0c8543eebb41f3a6bca0bcf2a28d6f56437dc0ffb0d21c1e947bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 233, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 233, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 233, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 234, $this->getSourceContext()); })()), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 235, $this->getSourceContext()); })()), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 236, $this->getSourceContext()); })()), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_f281c6135a0c8543eebb41f3a6bca0bcf2a28d6f56437dc0ffb0d21c1e947bc3->leave($__internal_f281c6135a0c8543eebb41f3a6bca0bcf2a28d6f56437dc0ffb0d21c1e947bc3_prof);

        
        $__internal_47cda504ff935b61048b8d5ad45a8f2f82f1efda4c93f2918799c168b2e73c98->leave($__internal_47cda504ff935b61048b8d5ad45a8f2f82f1efda4c93f2918799c168b2e73c98_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_29c6cfb9d4558380c150d232c9d55194af64e4d89e53b306083d56edc5ca2c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c6cfb9d4558380c150d232c9d55194af64e4d89e53b306083d56edc5ca2c63->enter($__internal_29c6cfb9d4558380c150d232c9d55194af64e4d89e53b306083d56edc5ca2c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_74ad60710353ea778d69e1b2284f1a2901fa2df53b8d4df6b3c3e61ff8b5e436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ad60710353ea778d69e1b2284f1a2901fa2df53b8d4df6b3c3e61ff8b5e436->enter($__internal_74ad60710353ea778d69e1b2284f1a2901fa2df53b8d4df6b3c3e61ff8b5e436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 242, $this->getSourceContext()); })()), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_74ad60710353ea778d69e1b2284f1a2901fa2df53b8d4df6b3c3e61ff8b5e436->leave($__internal_74ad60710353ea778d69e1b2284f1a2901fa2df53b8d4df6b3c3e61ff8b5e436_prof);

        
        $__internal_29c6cfb9d4558380c150d232c9d55194af64e4d89e53b306083d56edc5ca2c63->leave($__internal_29c6cfb9d4558380c150d232c9d55194af64e4d89e53b306083d56edc5ca2c63_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_f4269c5807b1f8d92df7e32855566a8efc85cff2594e14434fa0c68fdca7b80c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4269c5807b1f8d92df7e32855566a8efc85cff2594e14434fa0c68fdca7b80c->enter($__internal_f4269c5807b1f8d92df7e32855566a8efc85cff2594e14434fa0c68fdca7b80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_38643e23803654393af7bc78083759548c7bad68f0f70367951dd6bfc3dcd639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38643e23803654393af7bc78083759548c7bad68f0f70367951dd6bfc3dcd639->enter($__internal_38643e23803654393af7bc78083759548c7bad68f0f70367951dd6bfc3dcd639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_38643e23803654393af7bc78083759548c7bad68f0f70367951dd6bfc3dcd639->leave($__internal_38643e23803654393af7bc78083759548c7bad68f0f70367951dd6bfc3dcd639_prof);

        
        $__internal_f4269c5807b1f8d92df7e32855566a8efc85cff2594e14434fa0c68fdca7b80c->leave($__internal_f4269c5807b1f8d92df7e32855566a8efc85cff2594e14434fa0c68fdca7b80c_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_8f3e910ceffe6f5791a3cf79faa9a566f0a09fc61918cc5176a9009be0c79fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3e910ceffe6f5791a3cf79faa9a566f0a09fc61918cc5176a9009be0c79fd8->enter($__internal_8f3e910ceffe6f5791a3cf79faa9a566f0a09fc61918cc5176a9009be0c79fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_54dd940471a12e9a9c2d1589c35c8e9078b3c146183e1957fd241c1e9c3b138d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54dd940471a12e9a9c2d1589c35c8e9078b3c146183e1957fd241c1e9c3b138d->enter($__internal_54dd940471a12e9a9c2d1589c35c8e9078b3c146183e1957fd241c1e9c3b138d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_54dd940471a12e9a9c2d1589c35c8e9078b3c146183e1957fd241c1e9c3b138d->leave($__internal_54dd940471a12e9a9c2d1589c35c8e9078b3c146183e1957fd241c1e9c3b138d_prof);

        
        $__internal_8f3e910ceffe6f5791a3cf79faa9a566f0a09fc61918cc5176a9009be0c79fd8->leave($__internal_8f3e910ceffe6f5791a3cf79faa9a566f0a09fc61918cc5176a9009be0c79fd8_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_edaa151aedf32b7c883fc8dfe74e0505ae23e0bf11e48d87b8547531666a6f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edaa151aedf32b7c883fc8dfe74e0505ae23e0bf11e48d87b8547531666a6f9b->enter($__internal_edaa151aedf32b7c883fc8dfe74e0505ae23e0bf11e48d87b8547531666a6f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_59ae8a59ea9fcb80a48a1e30360d840f5c6f2ca66bd05f183b86dc19bd642883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ae8a59ea9fcb80a48a1e30360d840f5c6f2ca66bd05f183b86dc19bd642883->enter($__internal_59ae8a59ea9fcb80a48a1e30360d840f5c6f2ca66bd05f183b86dc19bd642883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_59ae8a59ea9fcb80a48a1e30360d840f5c6f2ca66bd05f183b86dc19bd642883->leave($__internal_59ae8a59ea9fcb80a48a1e30360d840f5c6f2ca66bd05f183b86dc19bd642883_prof);

        
        $__internal_edaa151aedf32b7c883fc8dfe74e0505ae23e0bf11e48d87b8547531666a6f9b->leave($__internal_edaa151aedf32b7c883fc8dfe74e0505ae23e0bf11e48d87b8547531666a6f9b_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_3b20a33cb9438982d806efec025dbcb9022838ab802d9baaef3bba171c7565bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b20a33cb9438982d806efec025dbcb9022838ab802d9baaef3bba171c7565bd->enter($__internal_3b20a33cb9438982d806efec025dbcb9022838ab802d9baaef3bba171c7565bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_67dff8c5d3a0175d071f6fb9c3517794a6325c40c98ee8faa7b8dbf8ad2d314c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67dff8c5d3a0175d071f6fb9c3517794a6325c40c98ee8faa7b8dbf8ad2d314c->enter($__internal_67dff8c5d3a0175d071f6fb9c3517794a6325c40c98ee8faa7b8dbf8ad2d314c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_67dff8c5d3a0175d071f6fb9c3517794a6325c40c98ee8faa7b8dbf8ad2d314c->leave($__internal_67dff8c5d3a0175d071f6fb9c3517794a6325c40c98ee8faa7b8dbf8ad2d314c_prof);

        
        $__internal_3b20a33cb9438982d806efec025dbcb9022838ab802d9baaef3bba171c7565bd->leave($__internal_3b20a33cb9438982d806efec025dbcb9022838ab802d9baaef3bba171c7565bd_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9990f7d9fd2078237aa2593e48eeca3c25c8f0b7645610bdd05eeea8257cc67c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9990f7d9fd2078237aa2593e48eeca3c25c8f0b7645610bdd05eeea8257cc67c->enter($__internal_9990f7d9fd2078237aa2593e48eeca3c25c8f0b7645610bdd05eeea8257cc67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ac448e1c6c470f233e2b8b9573ee20330e5d563813e8c2a6fd4a78116ea67484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac448e1c6c470f233e2b8b9573ee20330e5d563813e8c2a6fd4a78116ea67484->enter($__internal_ac448e1c6c470f233e2b8b9573ee20330e5d563813e8c2a6fd4a78116ea67484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 267, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 268, $this->getSourceContext()); })()), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 269, $this->getSourceContext()); })()), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_ac448e1c6c470f233e2b8b9573ee20330e5d563813e8c2a6fd4a78116ea67484->leave($__internal_ac448e1c6c470f233e2b8b9573ee20330e5d563813e8c2a6fd4a78116ea67484_prof);

        
        $__internal_9990f7d9fd2078237aa2593e48eeca3c25c8f0b7645610bdd05eeea8257cc67c->leave($__internal_9990f7d9fd2078237aa2593e48eeca3c25c8f0b7645610bdd05eeea8257cc67c_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a6630b32ae444075a2f94b6dda7fbf27d10eb4e71722b7084d3ec058d27cbfd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6630b32ae444075a2f94b6dda7fbf27d10eb4e71722b7084d3ec058d27cbfd4->enter($__internal_a6630b32ae444075a2f94b6dda7fbf27d10eb4e71722b7084d3ec058d27cbfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_97b1bd1e2624f4d54d28eabe333c0fcdeae2954978ca904c04afc6916e220668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b1bd1e2624f4d54d28eabe333c0fcdeae2954978ca904c04afc6916e220668->enter($__internal_97b1bd1e2624f4d54d28eabe333c0fcdeae2954978ca904c04afc6916e220668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 274, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 275, $this->getSourceContext()); })()), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 276, $this->getSourceContext()); })()), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_97b1bd1e2624f4d54d28eabe333c0fcdeae2954978ca904c04afc6916e220668->leave($__internal_97b1bd1e2624f4d54d28eabe333c0fcdeae2954978ca904c04afc6916e220668_prof);

        
        $__internal_a6630b32ae444075a2f94b6dda7fbf27d10eb4e71722b7084d3ec058d27cbfd4->leave($__internal_a6630b32ae444075a2f94b6dda7fbf27d10eb4e71722b7084d3ec058d27cbfd4_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_040c0454a912783a86b9dc684c925241f4b46f56918c0c42e4e69c7bec0e4479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040c0454a912783a86b9dc684c925241f4b46f56918c0c42e4e69c7bec0e4479->enter($__internal_040c0454a912783a86b9dc684c925241f4b46f56918c0c42e4e69c7bec0e4479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_56b45027999a6217fa267576bf8b8155a5f204d2e6af672eb2561e33748c3d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b45027999a6217fa267576bf8b8155a5f204d2e6af672eb2561e33748c3d0b->enter($__internal_56b45027999a6217fa267576bf8b8155a5f204d2e6af672eb2561e33748c3d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 283, $this->getSourceContext()); })())) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 284, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 286, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_56b45027999a6217fa267576bf8b8155a5f204d2e6af672eb2561e33748c3d0b->leave($__internal_56b45027999a6217fa267576bf8b8155a5f204d2e6af672eb2561e33748c3d0b_prof);

        
        $__internal_040c0454a912783a86b9dc684c925241f4b46f56918c0c42e4e69c7bec0e4479->leave($__internal_040c0454a912783a86b9dc684c925241f4b46f56918c0c42e4e69c7bec0e4479_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
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
", "bootstrap_3_layout.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
