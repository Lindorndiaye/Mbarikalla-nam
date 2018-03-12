<?php

/* :contrat:edit.html.twig */
class __TwigTemplate_1d1df1492bfa0485257cccae9ce8a2c393edf5f7294f3942033b9ab9dfc20053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contrat:edit.html.twig", 1);
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
        $__internal_b02d8086ab9e0124da96ce6048f770ea0a375af2d77b9ba9fac4f122e07a79c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b02d8086ab9e0124da96ce6048f770ea0a375af2d77b9ba9fac4f122e07a79c5->enter($__internal_b02d8086ab9e0124da96ce6048f770ea0a375af2d77b9ba9fac4f122e07a79c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrat:edit.html.twig"));

        $__internal_a4ab701e9888834e4bbd4660c426b69880510321ea4adbfbbcad2004dc61d94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ab701e9888834e4bbd4660c426b69880510321ea4adbfbbcad2004dc61d94d->enter($__internal_a4ab701e9888834e4bbd4660c426b69880510321ea4adbfbbcad2004dc61d94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrat:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b02d8086ab9e0124da96ce6048f770ea0a375af2d77b9ba9fac4f122e07a79c5->leave($__internal_b02d8086ab9e0124da96ce6048f770ea0a375af2d77b9ba9fac4f122e07a79c5_prof);

        
        $__internal_a4ab701e9888834e4bbd4660c426b69880510321ea4adbfbbcad2004dc61d94d->leave($__internal_a4ab701e9888834e4bbd4660c426b69880510321ea4adbfbbcad2004dc61d94d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_954d58667cf9c5080838e6a614a0713a42b417007277863301ab6e2a333a0c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954d58667cf9c5080838e6a614a0713a42b417007277863301ab6e2a333a0c01->enter($__internal_954d58667cf9c5080838e6a614a0713a42b417007277863301ab6e2a333a0c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb3637a7d1edffbdb932b945cd318d1c381d41347e3d9eb70443f4383ae741d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3637a7d1edffbdb932b945cd318d1c381d41347e3d9eb70443f4383ae741d2->enter($__internal_cb3637a7d1edffbdb932b945cd318d1c381d41347e3d9eb70443f4383ae741d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contrat edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat_index");
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
        
        $__internal_cb3637a7d1edffbdb932b945cd318d1c381d41347e3d9eb70443f4383ae741d2->leave($__internal_cb3637a7d1edffbdb932b945cd318d1c381d41347e3d9eb70443f4383ae741d2_prof);

        
        $__internal_954d58667cf9c5080838e6a614a0713a42b417007277863301ab6e2a333a0c01->leave($__internal_954d58667cf9c5080838e6a614a0713a42b417007277863301ab6e2a333a0c01_prof);

    }

    public function getTemplateName()
    {
        return ":contrat:edit.html.twig";
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
    <h1>Contrat edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('contrat_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":contrat:edit.html.twig", "/var/www/html/projet00000/app/Resources/views/contrat/edit.html.twig");
    }
}
