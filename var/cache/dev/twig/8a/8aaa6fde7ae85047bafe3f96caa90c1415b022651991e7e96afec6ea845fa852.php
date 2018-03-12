<?php

/* :client:new.html.twig */
class __TwigTemplate_819cc7c5cbd50a8f852b4114ac80ac398f9af7c68e1244b423b01cbd21c2e851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:new.html.twig", 1);
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
        $__internal_029a5c69163d52e9d5a510655636223bd1a2d41cf18e52f8aa6b62d5188bb55e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_029a5c69163d52e9d5a510655636223bd1a2d41cf18e52f8aa6b62d5188bb55e->enter($__internal_029a5c69163d52e9d5a510655636223bd1a2d41cf18e52f8aa6b62d5188bb55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $__internal_8fea1cea2dcea460ba61f592e3c7a2ab0c29347cf86db06d0d057b30e42adde3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fea1cea2dcea460ba61f592e3c7a2ab0c29347cf86db06d0d057b30e42adde3->enter($__internal_8fea1cea2dcea460ba61f592e3c7a2ab0c29347cf86db06d0d057b30e42adde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_029a5c69163d52e9d5a510655636223bd1a2d41cf18e52f8aa6b62d5188bb55e->leave($__internal_029a5c69163d52e9d5a510655636223bd1a2d41cf18e52f8aa6b62d5188bb55e_prof);

        
        $__internal_8fea1cea2dcea460ba61f592e3c7a2ab0c29347cf86db06d0d057b30e42adde3->leave($__internal_8fea1cea2dcea460ba61f592e3c7a2ab0c29347cf86db06d0d057b30e42adde3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba4f8ed22015f8dac4c6a0c56b8971547ec6cb56dd47dc991603f40965d6b74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4f8ed22015f8dac4c6a0c56b8971547ec6cb56dd47dc991603f40965d6b74c->enter($__internal_ba4f8ed22015f8dac4c6a0c56b8971547ec6cb56dd47dc991603f40965d6b74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28c34dad51d93775a6eab76d19c0f0d8f6ba3c6b185bf85bf40947969bdc28aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c34dad51d93775a6eab76d19c0f0d8f6ba3c6b185bf85bf40947969bdc28aa->enter($__internal_28c34dad51d93775a6eab76d19c0f0d8f6ba3c6b185bf85bf40947969bdc28aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_28c34dad51d93775a6eab76d19c0f0d8f6ba3c6b185bf85bf40947969bdc28aa->leave($__internal_28c34dad51d93775a6eab76d19c0f0d8f6ba3c6b185bf85bf40947969bdc28aa_prof);

        
        $__internal_ba4f8ed22015f8dac4c6a0c56b8971547ec6cb56dd47dc991603f40965d6b74c->leave($__internal_ba4f8ed22015f8dac4c6a0c56b8971547ec6cb56dd47dc991603f40965d6b74c_prof);

    }

    public function getTemplateName()
    {
        return ":client:new.html.twig";
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
    <h1>Client creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('client_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":client:new.html.twig", "/var/www/html/projet00000/app/Resources/views/client/new.html.twig");
    }
}
