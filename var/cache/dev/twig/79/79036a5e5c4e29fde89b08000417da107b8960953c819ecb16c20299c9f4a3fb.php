<?php

/* :paiement:edit.html.twig */
class __TwigTemplate_c778debc2674400e3bda863110e2d9c932b62e3bcca85bffe8d0261865f43774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":paiement:edit.html.twig", 1);
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
        $__internal_5e766bb2f91aba4853019fb7ccf479466c1d3e47de650029351cab5d6fe62f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e766bb2f91aba4853019fb7ccf479466c1d3e47de650029351cab5d6fe62f30->enter($__internal_5e766bb2f91aba4853019fb7ccf479466c1d3e47de650029351cab5d6fe62f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:edit.html.twig"));

        $__internal_b531afb97170e07a681260dda7abe185ccba206f613003a0059ccab62defb86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b531afb97170e07a681260dda7abe185ccba206f613003a0059ccab62defb86c->enter($__internal_b531afb97170e07a681260dda7abe185ccba206f613003a0059ccab62defb86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e766bb2f91aba4853019fb7ccf479466c1d3e47de650029351cab5d6fe62f30->leave($__internal_5e766bb2f91aba4853019fb7ccf479466c1d3e47de650029351cab5d6fe62f30_prof);

        
        $__internal_b531afb97170e07a681260dda7abe185ccba206f613003a0059ccab62defb86c->leave($__internal_b531afb97170e07a681260dda7abe185ccba206f613003a0059ccab62defb86c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29401aea7a1c5feb590b82f18cc4053427eb560deef24912c94860db69be1132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29401aea7a1c5feb590b82f18cc4053427eb560deef24912c94860db69be1132->enter($__internal_29401aea7a1c5feb590b82f18cc4053427eb560deef24912c94860db69be1132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d6830d997868ff5c4064e8c286c420975359e344197f721920d2053e15a973d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6830d997868ff5c4064e8c286c420975359e344197f721920d2053e15a973d->enter($__internal_8d6830d997868ff5c4064e8c286c420975359e344197f721920d2053e15a973d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Paiement edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_index");
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
        
        $__internal_8d6830d997868ff5c4064e8c286c420975359e344197f721920d2053e15a973d->leave($__internal_8d6830d997868ff5c4064e8c286c420975359e344197f721920d2053e15a973d_prof);

        
        $__internal_29401aea7a1c5feb590b82f18cc4053427eb560deef24912c94860db69be1132->leave($__internal_29401aea7a1c5feb590b82f18cc4053427eb560deef24912c94860db69be1132_prof);

    }

    public function getTemplateName()
    {
        return ":paiement:edit.html.twig";
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
    <h1>Paiement edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('paiement_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":paiement:edit.html.twig", "/var/www/html/projet00000/app/Resources/views/paiement/edit.html.twig");
    }
}
