<?php

/* :image:new.html.twig */
class __TwigTemplate_47c05fce2928dd7d64a526f26f5bb80ead54437e82dc95eb0379814daf4e0ce5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":image:new.html.twig", 1);
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
        $__internal_4abb23870f2a03a86f6d747b12de4ba56b437715d4a29cb80c8969e74bd15ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4abb23870f2a03a86f6d747b12de4ba56b437715d4a29cb80c8969e74bd15ebe->enter($__internal_4abb23870f2a03a86f6d747b12de4ba56b437715d4a29cb80c8969e74bd15ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:new.html.twig"));

        $__internal_a14cd1d28c6ba064be327f506086643a8cb17fe5d8805e31348c81962d6d2a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14cd1d28c6ba064be327f506086643a8cb17fe5d8805e31348c81962d6d2a7d->enter($__internal_a14cd1d28c6ba064be327f506086643a8cb17fe5d8805e31348c81962d6d2a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4abb23870f2a03a86f6d747b12de4ba56b437715d4a29cb80c8969e74bd15ebe->leave($__internal_4abb23870f2a03a86f6d747b12de4ba56b437715d4a29cb80c8969e74bd15ebe_prof);

        
        $__internal_a14cd1d28c6ba064be327f506086643a8cb17fe5d8805e31348c81962d6d2a7d->leave($__internal_a14cd1d28c6ba064be327f506086643a8cb17fe5d8805e31348c81962d6d2a7d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_949b58c35c695574ae62a221c5f363c5413955aeb3b883123c8d174376feeb95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_949b58c35c695574ae62a221c5f363c5413955aeb3b883123c8d174376feeb95->enter($__internal_949b58c35c695574ae62a221c5f363c5413955aeb3b883123c8d174376feeb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_377542d39191fe9e38f3206d2c46b670cb403d37113ea99d24480be72f3938c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377542d39191fe9e38f3206d2c46b670cb403d37113ea99d24480be72f3938c7->enter($__internal_377542d39191fe9e38f3206d2c46b670cb403d37113ea99d24480be72f3938c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Image creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_377542d39191fe9e38f3206d2c46b670cb403d37113ea99d24480be72f3938c7->leave($__internal_377542d39191fe9e38f3206d2c46b670cb403d37113ea99d24480be72f3938c7_prof);

        
        $__internal_949b58c35c695574ae62a221c5f363c5413955aeb3b883123c8d174376feeb95->leave($__internal_949b58c35c695574ae62a221c5f363c5413955aeb3b883123c8d174376feeb95_prof);

    }

    public function getTemplateName()
    {
        return ":image:new.html.twig";
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
    <h1>Image creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('image_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":image:new.html.twig", "/var/www/html/projet00000/app/Resources/views/image/new.html.twig");
    }
}
