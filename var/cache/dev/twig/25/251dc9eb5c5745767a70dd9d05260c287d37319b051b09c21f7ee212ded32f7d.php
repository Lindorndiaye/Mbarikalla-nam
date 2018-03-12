<?php

/* :proprietaire:new.html.twig */
class __TwigTemplate_e5bae26ae64d92c7f2a82d4b80401babaa0d46e7c87f3defd942773d6f50c6be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":proprietaire:new.html.twig", 1);
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
        $__internal_2ec7c70f8843accc388700081d35542c3bbc08bdbeb6b986e579843281745d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec7c70f8843accc388700081d35542c3bbc08bdbeb6b986e579843281745d39->enter($__internal_2ec7c70f8843accc388700081d35542c3bbc08bdbeb6b986e579843281745d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:new.html.twig"));

        $__internal_d4161c97a7a259894de3bff31113e8c0ebb5701ae9bee16478ebec054980b318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4161c97a7a259894de3bff31113e8c0ebb5701ae9bee16478ebec054980b318->enter($__internal_d4161c97a7a259894de3bff31113e8c0ebb5701ae9bee16478ebec054980b318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ec7c70f8843accc388700081d35542c3bbc08bdbeb6b986e579843281745d39->leave($__internal_2ec7c70f8843accc388700081d35542c3bbc08bdbeb6b986e579843281745d39_prof);

        
        $__internal_d4161c97a7a259894de3bff31113e8c0ebb5701ae9bee16478ebec054980b318->leave($__internal_d4161c97a7a259894de3bff31113e8c0ebb5701ae9bee16478ebec054980b318_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e82bbe80aabe56a5f8ce0141d2620b669eb55fd3dd61f1f340018d8a1642fc0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82bbe80aabe56a5f8ce0141d2620b669eb55fd3dd61f1f340018d8a1642fc0a->enter($__internal_e82bbe80aabe56a5f8ce0141d2620b669eb55fd3dd61f1f340018d8a1642fc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_696d8b354d395606a4b4b34be41a5c4eadba3883eaa5dfe7dbfd6988c2ac71a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696d8b354d395606a4b4b34be41a5c4eadba3883eaa5dfe7dbfd6988c2ac71a8->enter($__internal_696d8b354d395606a4b4b34be41a5c4eadba3883eaa5dfe7dbfd6988c2ac71a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proprietaire creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_696d8b354d395606a4b4b34be41a5c4eadba3883eaa5dfe7dbfd6988c2ac71a8->leave($__internal_696d8b354d395606a4b4b34be41a5c4eadba3883eaa5dfe7dbfd6988c2ac71a8_prof);

        
        $__internal_e82bbe80aabe56a5f8ce0141d2620b669eb55fd3dd61f1f340018d8a1642fc0a->leave($__internal_e82bbe80aabe56a5f8ce0141d2620b669eb55fd3dd61f1f340018d8a1642fc0a_prof);

    }

    public function getTemplateName()
    {
        return ":proprietaire:new.html.twig";
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
    <h1>Proprietaire creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('proprietaire_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":proprietaire:new.html.twig", "/var/www/html/projet00000/app/Resources/views/proprietaire/new.html.twig");
    }
}
