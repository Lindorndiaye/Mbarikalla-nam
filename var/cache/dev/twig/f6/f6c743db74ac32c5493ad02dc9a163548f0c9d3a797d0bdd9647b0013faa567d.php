<?php

/* :image:edit.html.twig */
class __TwigTemplate_6313d166c252e95f93e5d4aa65a14e250da65131a2559b141e4194c7c0327b63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":image:edit.html.twig", 1);
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
        $__internal_e51dd9d1c6901915a3690d64ce7887a71ffbb5e03d9987126934e0bb3dc5b0e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e51dd9d1c6901915a3690d64ce7887a71ffbb5e03d9987126934e0bb3dc5b0e0->enter($__internal_e51dd9d1c6901915a3690d64ce7887a71ffbb5e03d9987126934e0bb3dc5b0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:edit.html.twig"));

        $__internal_37dbd4a5d8fc04e21d79a8bb054428fb5ac9e146b4332dd5f9dda5844ba630f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37dbd4a5d8fc04e21d79a8bb054428fb5ac9e146b4332dd5f9dda5844ba630f0->enter($__internal_37dbd4a5d8fc04e21d79a8bb054428fb5ac9e146b4332dd5f9dda5844ba630f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e51dd9d1c6901915a3690d64ce7887a71ffbb5e03d9987126934e0bb3dc5b0e0->leave($__internal_e51dd9d1c6901915a3690d64ce7887a71ffbb5e03d9987126934e0bb3dc5b0e0_prof);

        
        $__internal_37dbd4a5d8fc04e21d79a8bb054428fb5ac9e146b4332dd5f9dda5844ba630f0->leave($__internal_37dbd4a5d8fc04e21d79a8bb054428fb5ac9e146b4332dd5f9dda5844ba630f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ab86386be870b5f255c766c31063a58a41d5f7ad3b79ebd9f044a076a1f97fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab86386be870b5f255c766c31063a58a41d5f7ad3b79ebd9f044a076a1f97fc->enter($__internal_6ab86386be870b5f255c766c31063a58a41d5f7ad3b79ebd9f044a076a1f97fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87d83087bc05b193b5ec331d3a0c5b3147feef2bd4111e4000656c29664c56b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d83087bc05b193b5ec331d3a0c5b3147feef2bd4111e4000656c29664c56b5->enter($__internal_87d83087bc05b193b5ec331d3a0c5b3147feef2bd4111e4000656c29664c56b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Image edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_index");
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
        
        $__internal_87d83087bc05b193b5ec331d3a0c5b3147feef2bd4111e4000656c29664c56b5->leave($__internal_87d83087bc05b193b5ec331d3a0c5b3147feef2bd4111e4000656c29664c56b5_prof);

        
        $__internal_6ab86386be870b5f255c766c31063a58a41d5f7ad3b79ebd9f044a076a1f97fc->leave($__internal_6ab86386be870b5f255c766c31063a58a41d5f7ad3b79ebd9f044a076a1f97fc_prof);

    }

    public function getTemplateName()
    {
        return ":image:edit.html.twig";
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
    <h1>Image edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('image_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":image:edit.html.twig", "/var/www/html/projet00000/app/Resources/views/image/edit.html.twig");
    }
}
