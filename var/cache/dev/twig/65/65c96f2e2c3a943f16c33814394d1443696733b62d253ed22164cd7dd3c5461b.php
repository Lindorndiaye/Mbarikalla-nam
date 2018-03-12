<?php

/* form_table_layout.html.twig */
class __TwigTemplate_cd8f180ad9e08f24024ed859e7ce2bd121854f3b9134b7476f2761e9bd257187 extends Twig_Template
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
        $__internal_1cb56d9e3f3f3869b8777113315c683de39d8d995670952569d7e17005e7967a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb56d9e3f3f3869b8777113315c683de39d8d995670952569d7e17005e7967a->enter($__internal_1cb56d9e3f3f3869b8777113315c683de39d8d995670952569d7e17005e7967a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_1a35ed61c2bf64bf931091ed528cc2419bf9d4a338deba019789b5ba1a36d7b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a35ed61c2bf64bf931091ed528cc2419bf9d4a338deba019789b5ba1a36d7b2->enter($__internal_1a35ed61c2bf64bf931091ed528cc2419bf9d4a338deba019789b5ba1a36d7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_1cb56d9e3f3f3869b8777113315c683de39d8d995670952569d7e17005e7967a->leave($__internal_1cb56d9e3f3f3869b8777113315c683de39d8d995670952569d7e17005e7967a_prof);

        
        $__internal_1a35ed61c2bf64bf931091ed528cc2419bf9d4a338deba019789b5ba1a36d7b2->leave($__internal_1a35ed61c2bf64bf931091ed528cc2419bf9d4a338deba019789b5ba1a36d7b2_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_929b2880f81ac67efde0978d83b51bb68f4b38ce9370cbf019fe99d7173ecdb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_929b2880f81ac67efde0978d83b51bb68f4b38ce9370cbf019fe99d7173ecdb3->enter($__internal_929b2880f81ac67efde0978d83b51bb68f4b38ce9370cbf019fe99d7173ecdb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f18ce6cda9a63655d72164b6749d82537f8f819ae1f20e7ca5e1d000a597359d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18ce6cda9a63655d72164b6749d82537f8f819ae1f20e7ca5e1d000a597359d->enter($__internal_f18ce6cda9a63655d72164b6749d82537f8f819ae1f20e7ca5e1d000a597359d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f18ce6cda9a63655d72164b6749d82537f8f819ae1f20e7ca5e1d000a597359d->leave($__internal_f18ce6cda9a63655d72164b6749d82537f8f819ae1f20e7ca5e1d000a597359d_prof);

        
        $__internal_929b2880f81ac67efde0978d83b51bb68f4b38ce9370cbf019fe99d7173ecdb3->leave($__internal_929b2880f81ac67efde0978d83b51bb68f4b38ce9370cbf019fe99d7173ecdb3_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3d370b41ba0419e073d8a7bbafa07ff3071953cbd9587ce49e2ae268feff3008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d370b41ba0419e073d8a7bbafa07ff3071953cbd9587ce49e2ae268feff3008->enter($__internal_3d370b41ba0419e073d8a7bbafa07ff3071953cbd9587ce49e2ae268feff3008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_7926b9aa9a576835c3c713aa51f5d9d868e234c93b36ec77dd1518f62f3b4f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7926b9aa9a576835c3c713aa51f5d9d868e234c93b36ec77dd1518f62f3b4f63->enter($__internal_7926b9aa9a576835c3c713aa51f5d9d868e234c93b36ec77dd1518f62f3b4f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_7926b9aa9a576835c3c713aa51f5d9d868e234c93b36ec77dd1518f62f3b4f63->leave($__internal_7926b9aa9a576835c3c713aa51f5d9d868e234c93b36ec77dd1518f62f3b4f63_prof);

        
        $__internal_3d370b41ba0419e073d8a7bbafa07ff3071953cbd9587ce49e2ae268feff3008->leave($__internal_3d370b41ba0419e073d8a7bbafa07ff3071953cbd9587ce49e2ae268feff3008_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_5c50e4b491dccdea6c453a3344255f455666e2497f9369d6d7550395633bf53f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c50e4b491dccdea6c453a3344255f455666e2497f9369d6d7550395633bf53f->enter($__internal_5c50e4b491dccdea6c453a3344255f455666e2497f9369d6d7550395633bf53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_05b0b369defe66af2444bc10e815488d181adffc47b986c1fa511d12f200830d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b0b369defe66af2444bc10e815488d181adffc47b986c1fa511d12f200830d->enter($__internal_05b0b369defe66af2444bc10e815488d181adffc47b986c1fa511d12f200830d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_05b0b369defe66af2444bc10e815488d181adffc47b986c1fa511d12f200830d->leave($__internal_05b0b369defe66af2444bc10e815488d181adffc47b986c1fa511d12f200830d_prof);

        
        $__internal_5c50e4b491dccdea6c453a3344255f455666e2497f9369d6d7550395633bf53f->leave($__internal_5c50e4b491dccdea6c453a3344255f455666e2497f9369d6d7550395633bf53f_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_c06f2929af043d6a977801b5f15d42745f06c41bf2e8e9af4195ff1154c6f7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06f2929af043d6a977801b5f15d42745f06c41bf2e8e9af4195ff1154c6f7b2->enter($__internal_c06f2929af043d6a977801b5f15d42745f06c41bf2e8e9af4195ff1154c6f7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_9732c11cb6b8ebc5b74ed1872e2c89b2e4cab0844d79f70d5d3b17ff55830f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9732c11cb6b8ebc5b74ed1872e2c89b2e4cab0844d79f70d5d3b17ff55830f14->enter($__internal_9732c11cb6b8ebc5b74ed1872e2c89b2e4cab0844d79f70d5d3b17ff55830f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_9732c11cb6b8ebc5b74ed1872e2c89b2e4cab0844d79f70d5d3b17ff55830f14->leave($__internal_9732c11cb6b8ebc5b74ed1872e2c89b2e4cab0844d79f70d5d3b17ff55830f14_prof);

        
        $__internal_c06f2929af043d6a977801b5f15d42745f06c41bf2e8e9af4195ff1154c6f7b2->leave($__internal_c06f2929af043d6a977801b5f15d42745f06c41bf2e8e9af4195ff1154c6f7b2_prof);

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
", "form_table_layout.html.twig", "/var/www/html/mbarikallah/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
