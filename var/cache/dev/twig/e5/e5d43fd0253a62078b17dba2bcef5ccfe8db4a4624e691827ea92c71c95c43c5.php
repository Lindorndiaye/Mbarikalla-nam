<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_536960ac75bb62291d7d1d0852165944e5d296ca55adc62151410890c370ecc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b88df0c4a25abf78f0ce91fefe26c88caebe394ece6413b8e0c4bcbce1d20ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b88df0c4a25abf78f0ce91fefe26c88caebe394ece6413b8e0c4bcbce1d20ed->enter($__internal_0b88df0c4a25abf78f0ce91fefe26c88caebe394ece6413b8e0c4bcbce1d20ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_8fa49a7db099325bcd68d338f9db9d8737f2c461d6fb8fda37513d007193e6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa49a7db099325bcd68d338f9db9d8737f2c461d6fb8fda37513d007193e6f1->enter($__internal_8fa49a7db099325bcd68d338f9db9d8737f2c461d6fb8fda37513d007193e6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_0b88df0c4a25abf78f0ce91fefe26c88caebe394ece6413b8e0c4bcbce1d20ed->leave($__internal_0b88df0c4a25abf78f0ce91fefe26c88caebe394ece6413b8e0c4bcbce1d20ed_prof);

        
        $__internal_8fa49a7db099325bcd68d338f9db9d8737f2c461d6fb8fda37513d007193e6f1->leave($__internal_8fa49a7db099325bcd68d338f9db9d8737f2c461d6fb8fda37513d007193e6f1_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_11786e0698287d569b570a2eb8d6b13cbcc6b0ed3ff16f8e79c1743e8ba7e641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11786e0698287d569b570a2eb8d6b13cbcc6b0ed3ff16f8e79c1743e8ba7e641->enter($__internal_11786e0698287d569b570a2eb8d6b13cbcc6b0ed3ff16f8e79c1743e8ba7e641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_fc5b50aba1f44ca5f595e54b7871fb986436edf085f306d8562dfc14babbed60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc5b50aba1f44ca5f595e54b7871fb986436edf085f306d8562dfc14babbed60->enter($__internal_fc5b50aba1f44ca5f595e54b7871fb986436edf085f306d8562dfc14babbed60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_fc5b50aba1f44ca5f595e54b7871fb986436edf085f306d8562dfc14babbed60->leave($__internal_fc5b50aba1f44ca5f595e54b7871fb986436edf085f306d8562dfc14babbed60_prof);

        
        $__internal_11786e0698287d569b570a2eb8d6b13cbcc6b0ed3ff16f8e79c1743e8ba7e641->leave($__internal_11786e0698287d569b570a2eb8d6b13cbcc6b0ed3ff16f8e79c1743e8ba7e641_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_918bc244a4df188a35daa7cd6c6be07bb06441457d1b59dcd5b3cc7ca92e24f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918bc244a4df188a35daa7cd6c6be07bb06441457d1b59dcd5b3cc7ca92e24f1->enter($__internal_918bc244a4df188a35daa7cd6c6be07bb06441457d1b59dcd5b3cc7ca92e24f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ff488b8749413093b662df01c0db31e508b031cdae75fc57867283bef392bf55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff488b8749413093b662df01c0db31e508b031cdae75fc57867283bef392bf55->enter($__internal_ff488b8749413093b662df01c0db31e508b031cdae75fc57867283bef392bf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ff488b8749413093b662df01c0db31e508b031cdae75fc57867283bef392bf55->leave($__internal_ff488b8749413093b662df01c0db31e508b031cdae75fc57867283bef392bf55_prof);

        
        $__internal_918bc244a4df188a35daa7cd6c6be07bb06441457d1b59dcd5b3cc7ca92e24f1->leave($__internal_918bc244a4df188a35daa7cd6c6be07bb06441457d1b59dcd5b3cc7ca92e24f1_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f1b8eadec649b8148e0296c6b6301d0ebe4a288ba63195eb7b9c7786d53d78c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b8eadec649b8148e0296c6b6301d0ebe4a288ba63195eb7b9c7786d53d78c1->enter($__internal_f1b8eadec649b8148e0296c6b6301d0ebe4a288ba63195eb7b9c7786d53d78c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a61ecc0a6f98adf81830f7b7f11c74391291d38c8770d3e5ae2268fe7fe15629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61ecc0a6f98adf81830f7b7f11c74391291d38c8770d3e5ae2268fe7fe15629->enter($__internal_a61ecc0a6f98adf81830f7b7f11c74391291d38c8770d3e5ae2268fe7fe15629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_a61ecc0a6f98adf81830f7b7f11c74391291d38c8770d3e5ae2268fe7fe15629->leave($__internal_a61ecc0a6f98adf81830f7b7f11c74391291d38c8770d3e5ae2268fe7fe15629_prof);

        
        $__internal_f1b8eadec649b8148e0296c6b6301d0ebe4a288ba63195eb7b9c7786d53d78c1->leave($__internal_f1b8eadec649b8148e0296c6b6301d0ebe4a288ba63195eb7b9c7786d53d78c1_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f7ba91d66dc5f9fe08e977fbf214d69cef5472d9b0aaabe23296f882899793f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ba91d66dc5f9fe08e977fbf214d69cef5472d9b0aaabe23296f882899793f2->enter($__internal_f7ba91d66dc5f9fe08e977fbf214d69cef5472d9b0aaabe23296f882899793f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5140e1710204bc4816b4e9f41877298b6c6340d54b4b87779f721364596cd0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5140e1710204bc4816b4e9f41877298b6c6340d54b4b87779f721364596cd0ab->enter($__internal_5140e1710204bc4816b4e9f41877298b6c6340d54b4b87779f721364596cd0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_5140e1710204bc4816b4e9f41877298b6c6340d54b4b87779f721364596cd0ab->leave($__internal_5140e1710204bc4816b4e9f41877298b6c6340d54b4b87779f721364596cd0ab_prof);

        
        $__internal_f7ba91d66dc5f9fe08e977fbf214d69cef5472d9b0aaabe23296f882899793f2->leave($__internal_f7ba91d66dc5f9fe08e977fbf214d69cef5472d9b0aaabe23296f882899793f2_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f2595af5b675d36e9c688378331ee8fb0c7b75f6d428157e3f3299f8a814e0ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2595af5b675d36e9c688378331ee8fb0c7b75f6d428157e3f3299f8a814e0ac->enter($__internal_f2595af5b675d36e9c688378331ee8fb0c7b75f6d428157e3f3299f8a814e0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_098613540cf4b3e00285e8aed043da49eb226087b31cd39b27a14fc596c88a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098613540cf4b3e00285e8aed043da49eb226087b31cd39b27a14fc596c88a20->enter($__internal_098613540cf4b3e00285e8aed043da49eb226087b31cd39b27a14fc596c88a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_098613540cf4b3e00285e8aed043da49eb226087b31cd39b27a14fc596c88a20->leave($__internal_098613540cf4b3e00285e8aed043da49eb226087b31cd39b27a14fc596c88a20_prof);

        
        $__internal_f2595af5b675d36e9c688378331ee8fb0c7b75f6d428157e3f3299f8a814e0ac->leave($__internal_f2595af5b675d36e9c688378331ee8fb0c7b75f6d428157e3f3299f8a814e0ac_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_31896c10d1e4c0ddb03a0e2407ebf7f1ebec5f7822ab7dc9a25a3d2f5805a07c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31896c10d1e4c0ddb03a0e2407ebf7f1ebec5f7822ab7dc9a25a3d2f5805a07c->enter($__internal_31896c10d1e4c0ddb03a0e2407ebf7f1ebec5f7822ab7dc9a25a3d2f5805a07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a33b0e1832d3d2ce115b42d71b16934669d568109a579559827139274f22397f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33b0e1832d3d2ce115b42d71b16934669d568109a579559827139274f22397f->enter($__internal_a33b0e1832d3d2ce115b42d71b16934669d568109a579559827139274f22397f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_a33b0e1832d3d2ce115b42d71b16934669d568109a579559827139274f22397f->leave($__internal_a33b0e1832d3d2ce115b42d71b16934669d568109a579559827139274f22397f_prof);

        
        $__internal_31896c10d1e4c0ddb03a0e2407ebf7f1ebec5f7822ab7dc9a25a3d2f5805a07c->leave($__internal_31896c10d1e4c0ddb03a0e2407ebf7f1ebec5f7822ab7dc9a25a3d2f5805a07c_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_5de7ae7ab4462b3b1f726c11f46504af62515809afe90105f1f34cee0046caab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de7ae7ab4462b3b1f726c11f46504af62515809afe90105f1f34cee0046caab->enter($__internal_5de7ae7ab4462b3b1f726c11f46504af62515809afe90105f1f34cee0046caab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_6339b69256873cb817129f4b99257b06210aea38a2b31e4305e6b3e396626035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6339b69256873cb817129f4b99257b06210aea38a2b31e4305e6b3e396626035->enter($__internal_6339b69256873cb817129f4b99257b06210aea38a2b31e4305e6b3e396626035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 47, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6339b69256873cb817129f4b99257b06210aea38a2b31e4305e6b3e396626035->leave($__internal_6339b69256873cb817129f4b99257b06210aea38a2b31e4305e6b3e396626035_prof);

        
        $__internal_5de7ae7ab4462b3b1f726c11f46504af62515809afe90105f1f34cee0046caab->leave($__internal_5de7ae7ab4462b3b1f726c11f46504af62515809afe90105f1f34cee0046caab_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_4fa2075f22f8d52f0ca5ee434f4fc285f28de18c471980f3796427b1c2288182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa2075f22f8d52f0ca5ee434f4fc285f28de18c471980f3796427b1c2288182->enter($__internal_4fa2075f22f8d52f0ca5ee434f4fc285f28de18c471980f3796427b1c2288182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_44f0c91a22fb0b5329f742e1fd14a4ee458c202b82678f0f33b56af061cbdbfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f0c91a22fb0b5329f742e1fd14a4ee458c202b82678f0f33b56af061cbdbfa->enter($__internal_44f0c91a22fb0b5329f742e1fd14a4ee458c202b82678f0f33b56af061cbdbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_44f0c91a22fb0b5329f742e1fd14a4ee458c202b82678f0f33b56af061cbdbfa->leave($__internal_44f0c91a22fb0b5329f742e1fd14a4ee458c202b82678f0f33b56af061cbdbfa_prof);

        
        $__internal_4fa2075f22f8d52f0ca5ee434f4fc285f28de18c471980f3796427b1c2288182->leave($__internal_4fa2075f22f8d52f0ca5ee434f4fc285f28de18c471980f3796427b1c2288182_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_deb8a97ef497914cd0cebae1a151e287ff2bf111f61999455fd810c381405a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb8a97ef497914cd0cebae1a151e287ff2bf111f61999455fd810c381405a9e->enter($__internal_deb8a97ef497914cd0cebae1a151e287ff2bf111f61999455fd810c381405a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_98c6721df5e823aaeda3a48628bb978c500df7824721641755405f0f2dab1353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c6721df5e823aaeda3a48628bb978c500df7824721641755405f0f2dab1353->enter($__internal_98c6721df5e823aaeda3a48628bb978c500df7824721641755405f0f2dab1353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_98c6721df5e823aaeda3a48628bb978c500df7824721641755405f0f2dab1353->leave($__internal_98c6721df5e823aaeda3a48628bb978c500df7824721641755405f0f2dab1353_prof);

        
        $__internal_deb8a97ef497914cd0cebae1a151e287ff2bf111f61999455fd810c381405a9e->leave($__internal_deb8a97ef497914cd0cebae1a151e287ff2bf111f61999455fd810c381405a9e_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_77abd6524b4914c9a1500a926612d2291375a798da7724a4c9cc3bbe63f4e45a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77abd6524b4914c9a1500a926612d2291375a798da7724a4c9cc3bbe63f4e45a->enter($__internal_77abd6524b4914c9a1500a926612d2291375a798da7724a4c9cc3bbe63f4e45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_9ec07e7f4fb47492f613c2b01c38cf69624e2aa0ba9da67652cbdf7a6b2a4129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec07e7f4fb47492f613c2b01c38cf69624e2aa0ba9da67652cbdf7a6b2a4129->enter($__internal_9ec07e7f4fb47492f613c2b01c38cf69624e2aa0ba9da67652cbdf7a6b2a4129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_9ec07e7f4fb47492f613c2b01c38cf69624e2aa0ba9da67652cbdf7a6b2a4129->leave($__internal_9ec07e7f4fb47492f613c2b01c38cf69624e2aa0ba9da67652cbdf7a6b2a4129_prof);

        
        $__internal_77abd6524b4914c9a1500a926612d2291375a798da7724a4c9cc3bbe63f4e45a->leave($__internal_77abd6524b4914c9a1500a926612d2291375a798da7724a4c9cc3bbe63f4e45a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
