<?php

/* :paiement:new.html.twig */
class __TwigTemplate_2dccbec366cfdd05954c56bf44c41da98a524c8a9e2ea3930b8230919ea1fdd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":paiement:new.html.twig", 1);
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
        $__internal_a21afbe9a401181c9e278547dc03a6af9fb1a59c91555814bd545c9fba8db0ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21afbe9a401181c9e278547dc03a6af9fb1a59c91555814bd545c9fba8db0ed->enter($__internal_a21afbe9a401181c9e278547dc03a6af9fb1a59c91555814bd545c9fba8db0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:new.html.twig"));

        $__internal_8168b298623bce7061b1e34760395576638307cc399241df4d1fb133e73e03c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8168b298623bce7061b1e34760395576638307cc399241df4d1fb133e73e03c2->enter($__internal_8168b298623bce7061b1e34760395576638307cc399241df4d1fb133e73e03c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a21afbe9a401181c9e278547dc03a6af9fb1a59c91555814bd545c9fba8db0ed->leave($__internal_a21afbe9a401181c9e278547dc03a6af9fb1a59c91555814bd545c9fba8db0ed_prof);

        
        $__internal_8168b298623bce7061b1e34760395576638307cc399241df4d1fb133e73e03c2->leave($__internal_8168b298623bce7061b1e34760395576638307cc399241df4d1fb133e73e03c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df98d1ae00ad9bafdda107aee512995d97c7c95ff20fa2cc03ea399b9de88a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df98d1ae00ad9bafdda107aee512995d97c7c95ff20fa2cc03ea399b9de88a21->enter($__internal_df98d1ae00ad9bafdda107aee512995d97c7c95ff20fa2cc03ea399b9de88a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9085c83870041b6e622bb2420c6a99aaeff72562760c4a20688a09bdc8473a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9085c83870041b6e622bb2420c6a99aaeff72562760c4a20688a09bdc8473a93->enter($__internal_9085c83870041b6e622bb2420c6a99aaeff72562760c4a20688a09bdc8473a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Paiement creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9085c83870041b6e622bb2420c6a99aaeff72562760c4a20688a09bdc8473a93->leave($__internal_9085c83870041b6e622bb2420c6a99aaeff72562760c4a20688a09bdc8473a93_prof);

        
        $__internal_df98d1ae00ad9bafdda107aee512995d97c7c95ff20fa2cc03ea399b9de88a21->leave($__internal_df98d1ae00ad9bafdda107aee512995d97c7c95ff20fa2cc03ea399b9de88a21_prof);

    }

    public function getTemplateName()
    {
        return ":paiement:new.html.twig";
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
    <h1>Paiement creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('paiement_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":paiement:new.html.twig", "/var/www/html/projet00000/app/Resources/views/paiement/new.html.twig");
    }
}
