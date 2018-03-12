<?php

/* :client:edit.html.twig */
class __TwigTemplate_5ebb8f95e21262ecfc0e1013d0645bdf9cfbf738404d1f699152f27597134af9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:edit.html.twig", 1);
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
        $__internal_50f5f3941565c1b9f5967bf31556e2559280d6914f21ee773d1b157df785cb70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f5f3941565c1b9f5967bf31556e2559280d6914f21ee773d1b157df785cb70->enter($__internal_50f5f3941565c1b9f5967bf31556e2559280d6914f21ee773d1b157df785cb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:edit.html.twig"));

        $__internal_c50a0191a42b004f40467e64d63e56324eb817af37f375d6495799eba959ba76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50a0191a42b004f40467e64d63e56324eb817af37f375d6495799eba959ba76->enter($__internal_c50a0191a42b004f40467e64d63e56324eb817af37f375d6495799eba959ba76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50f5f3941565c1b9f5967bf31556e2559280d6914f21ee773d1b157df785cb70->leave($__internal_50f5f3941565c1b9f5967bf31556e2559280d6914f21ee773d1b157df785cb70_prof);

        
        $__internal_c50a0191a42b004f40467e64d63e56324eb817af37f375d6495799eba959ba76->leave($__internal_c50a0191a42b004f40467e64d63e56324eb817af37f375d6495799eba959ba76_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_82b1722b74ab34614eee54578bb3158a3abdd31f6e1827d590eafad3c1adea9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b1722b74ab34614eee54578bb3158a3abdd31f6e1827d590eafad3c1adea9a->enter($__internal_82b1722b74ab34614eee54578bb3158a3abdd31f6e1827d590eafad3c1adea9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39e057df8bfaf4013dc6b218abe8dfb5e5eb06e6c0435858768faeacfe672862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e057df8bfaf4013dc6b218abe8dfb5e5eb06e6c0435858768faeacfe672862->enter($__internal_39e057df8bfaf4013dc6b218abe8dfb5e5eb06e6c0435858768faeacfe672862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
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
        
        $__internal_39e057df8bfaf4013dc6b218abe8dfb5e5eb06e6c0435858768faeacfe672862->leave($__internal_39e057df8bfaf4013dc6b218abe8dfb5e5eb06e6c0435858768faeacfe672862_prof);

        
        $__internal_82b1722b74ab34614eee54578bb3158a3abdd31f6e1827d590eafad3c1adea9a->leave($__internal_82b1722b74ab34614eee54578bb3158a3abdd31f6e1827d590eafad3c1adea9a_prof);

    }

    public function getTemplateName()
    {
        return ":client:edit.html.twig";
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
    <h1>Client edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('client_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":client:edit.html.twig", "/var/www/html/projet00000/app/Resources/views/client/edit.html.twig");
    }
}
