<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_36e5302dac2fd2f6097a57714d2bb23992f82f56534bf5520a087fa28fae227d extends Twig_Template
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
        $__internal_8f7477cc8617434b75168164c719075427f677593ef2277c10ae82449838b8e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f7477cc8617434b75168164c719075427f677593ef2277c10ae82449838b8e0->enter($__internal_8f7477cc8617434b75168164c719075427f677593ef2277c10ae82449838b8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_86a101c89d664b2d1839301baf23f495f9b80e8fa51442eb77284d675479c12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a101c89d664b2d1839301baf23f495f9b80e8fa51442eb77284d675479c12e->enter($__internal_86a101c89d664b2d1839301baf23f495f9b80e8fa51442eb77284d675479c12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_8f7477cc8617434b75168164c719075427f677593ef2277c10ae82449838b8e0->leave($__internal_8f7477cc8617434b75168164c719075427f677593ef2277c10ae82449838b8e0_prof);

        
        $__internal_86a101c89d664b2d1839301baf23f495f9b80e8fa51442eb77284d675479c12e->leave($__internal_86a101c89d664b2d1839301baf23f495f9b80e8fa51442eb77284d675479c12e_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_8ce7cda3b1dacf8a203d994211d145dd14140006d337e0c36228fc6342c3959b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce7cda3b1dacf8a203d994211d145dd14140006d337e0c36228fc6342c3959b->enter($__internal_8ce7cda3b1dacf8a203d994211d145dd14140006d337e0c36228fc6342c3959b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_77257ed03792f09e4b71d99ac416dfa724d8e7bacf11b517dfc4503b3aa08928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77257ed03792f09e4b71d99ac416dfa724d8e7bacf11b517dfc4503b3aa08928->enter($__internal_77257ed03792f09e4b71d99ac416dfa724d8e7bacf11b517dfc4503b3aa08928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_77257ed03792f09e4b71d99ac416dfa724d8e7bacf11b517dfc4503b3aa08928->leave($__internal_77257ed03792f09e4b71d99ac416dfa724d8e7bacf11b517dfc4503b3aa08928_prof);

        
        $__internal_8ce7cda3b1dacf8a203d994211d145dd14140006d337e0c36228fc6342c3959b->leave($__internal_8ce7cda3b1dacf8a203d994211d145dd14140006d337e0c36228fc6342c3959b_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8775a73576aaec8b20bdc374798a90eb806a8801063e1cc7c7934d415d91e67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8775a73576aaec8b20bdc374798a90eb806a8801063e1cc7c7934d415d91e67d->enter($__internal_8775a73576aaec8b20bdc374798a90eb806a8801063e1cc7c7934d415d91e67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d0d0115cec61d6d8426fa02eef10820bde44c8a299eb283c8d3b75b09a8f1f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d0115cec61d6d8426fa02eef10820bde44c8a299eb283c8d3b75b09a8f1f03->enter($__internal_d0d0115cec61d6d8426fa02eef10820bde44c8a299eb283c8d3b75b09a8f1f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_d0d0115cec61d6d8426fa02eef10820bde44c8a299eb283c8d3b75b09a8f1f03->leave($__internal_d0d0115cec61d6d8426fa02eef10820bde44c8a299eb283c8d3b75b09a8f1f03_prof);

        
        $__internal_8775a73576aaec8b20bdc374798a90eb806a8801063e1cc7c7934d415d91e67d->leave($__internal_8775a73576aaec8b20bdc374798a90eb806a8801063e1cc7c7934d415d91e67d_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_82c2391bca0c7aaafbb20771243600e144b7d34e0d72c100647c2c2329c6d0a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c2391bca0c7aaafbb20771243600e144b7d34e0d72c100647c2c2329c6d0a6->enter($__internal_82c2391bca0c7aaafbb20771243600e144b7d34e0d72c100647c2c2329c6d0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a2eca6a5e3336fbf388c883ee00624b6c398f2a9f130976e6f929295c3b8fa59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2eca6a5e3336fbf388c883ee00624b6c398f2a9f130976e6f929295c3b8fa59->enter($__internal_a2eca6a5e3336fbf388c883ee00624b6c398f2a9f130976e6f929295c3b8fa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_a2eca6a5e3336fbf388c883ee00624b6c398f2a9f130976e6f929295c3b8fa59->leave($__internal_a2eca6a5e3336fbf388c883ee00624b6c398f2a9f130976e6f929295c3b8fa59_prof);

        
        $__internal_82c2391bca0c7aaafbb20771243600e144b7d34e0d72c100647c2c2329c6d0a6->leave($__internal_82c2391bca0c7aaafbb20771243600e144b7d34e0d72c100647c2c2329c6d0a6_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c1038cee40b56cdbeb941c412bf613fd2ad6d6352bb8016ddfc3efc0436f50fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1038cee40b56cdbeb941c412bf613fd2ad6d6352bb8016ddfc3efc0436f50fa->enter($__internal_c1038cee40b56cdbeb941c412bf613fd2ad6d6352bb8016ddfc3efc0436f50fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fb5bed7549070bf0fe8e2100681def6a0e1baa1b1345f0790170bc833be269b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5bed7549070bf0fe8e2100681def6a0e1baa1b1345f0790170bc833be269b4->enter($__internal_fb5bed7549070bf0fe8e2100681def6a0e1baa1b1345f0790170bc833be269b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_fb5bed7549070bf0fe8e2100681def6a0e1baa1b1345f0790170bc833be269b4->leave($__internal_fb5bed7549070bf0fe8e2100681def6a0e1baa1b1345f0790170bc833be269b4_prof);

        
        $__internal_c1038cee40b56cdbeb941c412bf613fd2ad6d6352bb8016ddfc3efc0436f50fa->leave($__internal_c1038cee40b56cdbeb941c412bf613fd2ad6d6352bb8016ddfc3efc0436f50fa_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_8a772e24ef79f17dd4a62fbc7b523e3877728f0a324008eef79513c730687abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a772e24ef79f17dd4a62fbc7b523e3877728f0a324008eef79513c730687abe->enter($__internal_8a772e24ef79f17dd4a62fbc7b523e3877728f0a324008eef79513c730687abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_415dea77d9f8dd27bc105249a4d13568d57c1bc01741511605d9ad9c80fc44b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415dea77d9f8dd27bc105249a4d13568d57c1bc01741511605d9ad9c80fc44b5->enter($__internal_415dea77d9f8dd27bc105249a4d13568d57c1bc01741511605d9ad9c80fc44b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_415dea77d9f8dd27bc105249a4d13568d57c1bc01741511605d9ad9c80fc44b5->leave($__internal_415dea77d9f8dd27bc105249a4d13568d57c1bc01741511605d9ad9c80fc44b5_prof);

        
        $__internal_8a772e24ef79f17dd4a62fbc7b523e3877728f0a324008eef79513c730687abe->leave($__internal_8a772e24ef79f17dd4a62fbc7b523e3877728f0a324008eef79513c730687abe_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2892147a56cfe01ff1b2defd87bf88ab9c7d7608ada65ea8336f925532729392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2892147a56cfe01ff1b2defd87bf88ab9c7d7608ada65ea8336f925532729392->enter($__internal_2892147a56cfe01ff1b2defd87bf88ab9c7d7608ada65ea8336f925532729392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_36adea146bbbbe51e05adf928b8b85a6b09bc3a5bf2ff4be7533c2db2600f820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36adea146bbbbe51e05adf928b8b85a6b09bc3a5bf2ff4be7533c2db2600f820->enter($__internal_36adea146bbbbe51e05adf928b8b85a6b09bc3a5bf2ff4be7533c2db2600f820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_36adea146bbbbe51e05adf928b8b85a6b09bc3a5bf2ff4be7533c2db2600f820->leave($__internal_36adea146bbbbe51e05adf928b8b85a6b09bc3a5bf2ff4be7533c2db2600f820_prof);

        
        $__internal_2892147a56cfe01ff1b2defd87bf88ab9c7d7608ada65ea8336f925532729392->leave($__internal_2892147a56cfe01ff1b2defd87bf88ab9c7d7608ada65ea8336f925532729392_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_f08043428445c308fabf4516c2d20d3eda341df18a850da906cce955da1536f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08043428445c308fabf4516c2d20d3eda341df18a850da906cce955da1536f3->enter($__internal_f08043428445c308fabf4516c2d20d3eda341df18a850da906cce955da1536f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_6cbecc6be6c40293b515891c73df4f8295c8f9f35c5a0aca6bf1b2a3d5e20275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbecc6be6c40293b515891c73df4f8295c8f9f35c5a0aca6bf1b2a3d5e20275->enter($__internal_6cbecc6be6c40293b515891c73df4f8295c8f9f35c5a0aca6bf1b2a3d5e20275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_6cbecc6be6c40293b515891c73df4f8295c8f9f35c5a0aca6bf1b2a3d5e20275->leave($__internal_6cbecc6be6c40293b515891c73df4f8295c8f9f35c5a0aca6bf1b2a3d5e20275_prof);

        
        $__internal_f08043428445c308fabf4516c2d20d3eda341df18a850da906cce955da1536f3->leave($__internal_f08043428445c308fabf4516c2d20d3eda341df18a850da906cce955da1536f3_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_03a2904dd437962d18e86adfc0e9e7d229a1e874ebae0ecf951f37b2d321654a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a2904dd437962d18e86adfc0e9e7d229a1e874ebae0ecf951f37b2d321654a->enter($__internal_03a2904dd437962d18e86adfc0e9e7d229a1e874ebae0ecf951f37b2d321654a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_a3054fa01e902df20d7607b82bd095dc8d424968135349684f1dad3d613aa460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3054fa01e902df20d7607b82bd095dc8d424968135349684f1dad3d613aa460->enter($__internal_a3054fa01e902df20d7607b82bd095dc8d424968135349684f1dad3d613aa460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_a3054fa01e902df20d7607b82bd095dc8d424968135349684f1dad3d613aa460->leave($__internal_a3054fa01e902df20d7607b82bd095dc8d424968135349684f1dad3d613aa460_prof);

        
        $__internal_03a2904dd437962d18e86adfc0e9e7d229a1e874ebae0ecf951f37b2d321654a->leave($__internal_03a2904dd437962d18e86adfc0e9e7d229a1e874ebae0ecf951f37b2d321654a_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_5b9a2fb5dcb78b87212c9bfffaeec661a49922809865897fd067e57923b4e69b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9a2fb5dcb78b87212c9bfffaeec661a49922809865897fd067e57923b4e69b->enter($__internal_5b9a2fb5dcb78b87212c9bfffaeec661a49922809865897fd067e57923b4e69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_fec54a98453e1692ed5386666a82f0f87a03e34ceb6f9ae7bc086f7a3c4a446d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec54a98453e1692ed5386666a82f0f87a03e34ceb6f9ae7bc086f7a3c4a446d->enter($__internal_fec54a98453e1692ed5386666a82f0f87a03e34ceb6f9ae7bc086f7a3c4a446d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_fec54a98453e1692ed5386666a82f0f87a03e34ceb6f9ae7bc086f7a3c4a446d->leave($__internal_fec54a98453e1692ed5386666a82f0f87a03e34ceb6f9ae7bc086f7a3c4a446d_prof);

        
        $__internal_5b9a2fb5dcb78b87212c9bfffaeec661a49922809865897fd067e57923b4e69b->leave($__internal_5b9a2fb5dcb78b87212c9bfffaeec661a49922809865897fd067e57923b4e69b_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_49d0d753075a5ef9b4e1ac39ca1e2156ace5bcadc600cd26f6b880cc36be2e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d0d753075a5ef9b4e1ac39ca1e2156ace5bcadc600cd26f6b880cc36be2e08->enter($__internal_49d0d753075a5ef9b4e1ac39ca1e2156ace5bcadc600cd26f6b880cc36be2e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_f9b8670633b55851b9bc76c52982fe9f3f1fd7ac75aad5172dab273f66e5bf13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b8670633b55851b9bc76c52982fe9f3f1fd7ac75aad5172dab273f66e5bf13->enter($__internal_f9b8670633b55851b9bc76c52982fe9f3f1fd7ac75aad5172dab273f66e5bf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_f9b8670633b55851b9bc76c52982fe9f3f1fd7ac75aad5172dab273f66e5bf13->leave($__internal_f9b8670633b55851b9bc76c52982fe9f3f1fd7ac75aad5172dab273f66e5bf13_prof);

        
        $__internal_49d0d753075a5ef9b4e1ac39ca1e2156ace5bcadc600cd26f6b880cc36be2e08->leave($__internal_49d0d753075a5ef9b4e1ac39ca1e2156ace5bcadc600cd26f6b880cc36be2e08_prof);

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
", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/mbarikallah/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
