<?php

/* :bien:new.html.twig */
class __TwigTemplate_30a4cd8ef45f1cb04f345933dea2174c160282381ccb4c502ce6f7dd4cb46505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":bien:new.html.twig", 1);
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
        $__internal_9244ec30992149ab6ed37eab827059c506b0312fbb57e71b658d02c497d744fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9244ec30992149ab6ed37eab827059c506b0312fbb57e71b658d02c497d744fb->enter($__internal_9244ec30992149ab6ed37eab827059c506b0312fbb57e71b658d02c497d744fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bien:new.html.twig"));

        $__internal_ddb2a246e10a52520654374369c165a8c7589103a9fb399848aacac6552d8f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb2a246e10a52520654374369c165a8c7589103a9fb399848aacac6552d8f88->enter($__internal_ddb2a246e10a52520654374369c165a8c7589103a9fb399848aacac6552d8f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bien:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9244ec30992149ab6ed37eab827059c506b0312fbb57e71b658d02c497d744fb->leave($__internal_9244ec30992149ab6ed37eab827059c506b0312fbb57e71b658d02c497d744fb_prof);

        
        $__internal_ddb2a246e10a52520654374369c165a8c7589103a9fb399848aacac6552d8f88->leave($__internal_ddb2a246e10a52520654374369c165a8c7589103a9fb399848aacac6552d8f88_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d7ac54dae8deea9e6c0e41cf70676218158cdd95b1c22800dfb2f0880cbabc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7ac54dae8deea9e6c0e41cf70676218158cdd95b1c22800dfb2f0880cbabc5->enter($__internal_2d7ac54dae8deea9e6c0e41cf70676218158cdd95b1c22800dfb2f0880cbabc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6bc331bc13734f50fb163a61fe6f3f5798e03cb3986f9067bfec76a05123301b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc331bc13734f50fb163a61fe6f3f5798e03cb3986f9067bfec76a05123301b->enter($__internal_6bc331bc13734f50fb163a61fe6f3f5798e03cb3986f9067bfec76a05123301b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bien creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6bc331bc13734f50fb163a61fe6f3f5798e03cb3986f9067bfec76a05123301b->leave($__internal_6bc331bc13734f50fb163a61fe6f3f5798e03cb3986f9067bfec76a05123301b_prof);

        
        $__internal_2d7ac54dae8deea9e6c0e41cf70676218158cdd95b1c22800dfb2f0880cbabc5->leave($__internal_2d7ac54dae8deea9e6c0e41cf70676218158cdd95b1c22800dfb2f0880cbabc5_prof);

    }

    public function getTemplateName()
    {
        return ":bien:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Bien creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('bien_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":bien:new.html.twig", "/var/www/html/projet00000/app/Resources/views/bien/new.html.twig");
    }
}
