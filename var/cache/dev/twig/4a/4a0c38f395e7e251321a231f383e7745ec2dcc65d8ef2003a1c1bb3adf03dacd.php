<?php

/* :reservation:edit.html.twig */
class __TwigTemplate_4f49f87febc8643e625ca9f37b094b842e9906937fa4a3f163a76900b420e1f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8434e3ab266383d7277dac4c41104700f26067a3633d1d376b1a666bba8527df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8434e3ab266383d7277dac4c41104700f26067a3633d1d376b1a666bba8527df->enter($__internal_8434e3ab266383d7277dac4c41104700f26067a3633d1d376b1a666bba8527df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:edit.html.twig"));

        $__internal_acc77cd2e68e167351f2f4493a13529d774b073aa0fcd635e6ad9c1ac059dbae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc77cd2e68e167351f2f4493a13529d774b073aa0fcd635e6ad9c1ac059dbae->enter($__internal_acc77cd2e68e167351f2f4493a13529d774b073aa0fcd635e6ad9c1ac059dbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8434e3ab266383d7277dac4c41104700f26067a3633d1d376b1a666bba8527df->leave($__internal_8434e3ab266383d7277dac4c41104700f26067a3633d1d376b1a666bba8527df_prof);

        
        $__internal_acc77cd2e68e167351f2f4493a13529d774b073aa0fcd635e6ad9c1ac059dbae->leave($__internal_acc77cd2e68e167351f2f4493a13529d774b073aa0fcd635e6ad9c1ac059dbae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_702f2d4b4043de65c065cac635b3290290cf9e238b970c8ffc4537fc7265bc2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702f2d4b4043de65c065cac635b3290290cf9e238b970c8ffc4537fc7265bc2f->enter($__internal_702f2d4b4043de65c065cac635b3290290cf9e238b970c8ffc4537fc7265bc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_158149a6a56f705dd0c96af6e44ec87152fba67157e07bb108aa2689b1c103e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158149a6a56f705dd0c96af6e44ec87152fba67157e07bb108aa2689b1c103e9->enter($__internal_158149a6a56f705dd0c96af6e44ec87152fba67157e07bb108aa2689b1c103e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_158149a6a56f705dd0c96af6e44ec87152fba67157e07bb108aa2689b1c103e9->leave($__internal_158149a6a56f705dd0c96af6e44ec87152fba67157e07bb108aa2689b1c103e9_prof);

        
        $__internal_702f2d4b4043de65c065cac635b3290290cf9e238b970c8ffc4537fc7265bc2f->leave($__internal_702f2d4b4043de65c065cac635b3290290cf9e238b970c8ffc4537fc7265bc2f_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reservation edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":reservation:edit.html.twig", "/var/www/html/projet00000/app/Resources/views/reservation/edit.html.twig");
    }
}
