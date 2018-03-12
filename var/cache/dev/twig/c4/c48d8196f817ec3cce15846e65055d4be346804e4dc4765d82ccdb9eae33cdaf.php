<?php

/* form_table_layout.html.twig */
class __TwigTemplate_a9d9e61439db4592eb05dd707b8fdd1102c398af384bb259d9b7112c2207ea35 extends Twig_Template
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
        $__internal_54c3191106a165739125fa4fc251d6f9191048e7f2658bd3f51ec49b6d6adea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c3191106a165739125fa4fc251d6f9191048e7f2658bd3f51ec49b6d6adea4->enter($__internal_54c3191106a165739125fa4fc251d6f9191048e7f2658bd3f51ec49b6d6adea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_3793c830867c0d4fcae79dd504955f91de227219ff4ef3cf8bf4ff4062ece455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3793c830867c0d4fcae79dd504955f91de227219ff4ef3cf8bf4ff4062ece455->enter($__internal_3793c830867c0d4fcae79dd504955f91de227219ff4ef3cf8bf4ff4062ece455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_54c3191106a165739125fa4fc251d6f9191048e7f2658bd3f51ec49b6d6adea4->leave($__internal_54c3191106a165739125fa4fc251d6f9191048e7f2658bd3f51ec49b6d6adea4_prof);

        
        $__internal_3793c830867c0d4fcae79dd504955f91de227219ff4ef3cf8bf4ff4062ece455->leave($__internal_3793c830867c0d4fcae79dd504955f91de227219ff4ef3cf8bf4ff4062ece455_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0eb6b6c8ad61e8c3580d18c8cc4d5ac49629dfdc313f569a1b73e884567a68a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb6b6c8ad61e8c3580d18c8cc4d5ac49629dfdc313f569a1b73e884567a68a6->enter($__internal_0eb6b6c8ad61e8c3580d18c8cc4d5ac49629dfdc313f569a1b73e884567a68a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fbe2f720e5c434cbf690e5863b2330b7a8a109d6f3ee59d97469b3beea8ddcc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe2f720e5c434cbf690e5863b2330b7a8a109d6f3ee59d97469b3beea8ddcc2->enter($__internal_fbe2f720e5c434cbf690e5863b2330b7a8a109d6f3ee59d97469b3beea8ddcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_fbe2f720e5c434cbf690e5863b2330b7a8a109d6f3ee59d97469b3beea8ddcc2->leave($__internal_fbe2f720e5c434cbf690e5863b2330b7a8a109d6f3ee59d97469b3beea8ddcc2_prof);

        
        $__internal_0eb6b6c8ad61e8c3580d18c8cc4d5ac49629dfdc313f569a1b73e884567a68a6->leave($__internal_0eb6b6c8ad61e8c3580d18c8cc4d5ac49629dfdc313f569a1b73e884567a68a6_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7b01861118e6f876b4f63515402dd40972bd184d4b596f7c98fb801dc67748ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b01861118e6f876b4f63515402dd40972bd184d4b596f7c98fb801dc67748ad->enter($__internal_7b01861118e6f876b4f63515402dd40972bd184d4b596f7c98fb801dc67748ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_7e0086b79214988ce75df7785650c10873bf70dcda77e0977f987b666c819bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0086b79214988ce75df7785650c10873bf70dcda77e0977f987b666c819bfa->enter($__internal_7e0086b79214988ce75df7785650c10873bf70dcda77e0977f987b666c819bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_7e0086b79214988ce75df7785650c10873bf70dcda77e0977f987b666c819bfa->leave($__internal_7e0086b79214988ce75df7785650c10873bf70dcda77e0977f987b666c819bfa_prof);

        
        $__internal_7b01861118e6f876b4f63515402dd40972bd184d4b596f7c98fb801dc67748ad->leave($__internal_7b01861118e6f876b4f63515402dd40972bd184d4b596f7c98fb801dc67748ad_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_430c80eb2dc86233fdc6868000a3bf644b4d5fabcf1b83b66a7ced4d5f74561c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430c80eb2dc86233fdc6868000a3bf644b4d5fabcf1b83b66a7ced4d5f74561c->enter($__internal_430c80eb2dc86233fdc6868000a3bf644b4d5fabcf1b83b66a7ced4d5f74561c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_17f211cacb19ae0fb9a3aaed4967622c01bab8b03f1ff81cfda6b14b8323ba71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f211cacb19ae0fb9a3aaed4967622c01bab8b03f1ff81cfda6b14b8323ba71->enter($__internal_17f211cacb19ae0fb9a3aaed4967622c01bab8b03f1ff81cfda6b14b8323ba71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_17f211cacb19ae0fb9a3aaed4967622c01bab8b03f1ff81cfda6b14b8323ba71->leave($__internal_17f211cacb19ae0fb9a3aaed4967622c01bab8b03f1ff81cfda6b14b8323ba71_prof);

        
        $__internal_430c80eb2dc86233fdc6868000a3bf644b4d5fabcf1b83b66a7ced4d5f74561c->leave($__internal_430c80eb2dc86233fdc6868000a3bf644b4d5fabcf1b83b66a7ced4d5f74561c_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_53bbdd09ee5df47afb984a6afc8a0c1a8c6d2e95c78f16f363b1aff281cbbbff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53bbdd09ee5df47afb984a6afc8a0c1a8c6d2e95c78f16f363b1aff281cbbbff->enter($__internal_53bbdd09ee5df47afb984a6afc8a0c1a8c6d2e95c78f16f363b1aff281cbbbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_ed4e3d57f3ba3448984d8f75c7859bbdd2bdfceefd67f763663b4ab1b527621c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4e3d57f3ba3448984d8f75c7859bbdd2bdfceefd67f763663b4ab1b527621c->enter($__internal_ed4e3d57f3ba3448984d8f75c7859bbdd2bdfceefd67f763663b4ab1b527621c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_ed4e3d57f3ba3448984d8f75c7859bbdd2bdfceefd67f763663b4ab1b527621c->leave($__internal_ed4e3d57f3ba3448984d8f75c7859bbdd2bdfceefd67f763663b4ab1b527621c_prof);

        
        $__internal_53bbdd09ee5df47afb984a6afc8a0c1a8c6d2e95c78f16f363b1aff281cbbbff->leave($__internal_53bbdd09ee5df47afb984a6afc8a0c1a8c6d2e95c78f16f363b1aff281cbbbff_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
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
", "form_table_layout.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
