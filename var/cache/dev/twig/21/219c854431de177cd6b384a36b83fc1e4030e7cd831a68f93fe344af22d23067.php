<?php

/* :reservation:new.html.twig */
class __TwigTemplate_c017403fd4f06906f042e365e7c794b8e9e5783358e67c313a0b3b3932c7f2f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:new.html.twig", 1);
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
        $__internal_9a9b3147e5f49a0fdb3f654cbedfd3a4cc7a455e819419b289c420a72526332f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a9b3147e5f49a0fdb3f654cbedfd3a4cc7a455e819419b289c420a72526332f->enter($__internal_9a9b3147e5f49a0fdb3f654cbedfd3a4cc7a455e819419b289c420a72526332f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:new.html.twig"));

        $__internal_8c44d909c7b46e48578981a7e6d7de03dea4fffee5b9cfd3fea2f8f2ec3911a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c44d909c7b46e48578981a7e6d7de03dea4fffee5b9cfd3fea2f8f2ec3911a2->enter($__internal_8c44d909c7b46e48578981a7e6d7de03dea4fffee5b9cfd3fea2f8f2ec3911a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a9b3147e5f49a0fdb3f654cbedfd3a4cc7a455e819419b289c420a72526332f->leave($__internal_9a9b3147e5f49a0fdb3f654cbedfd3a4cc7a455e819419b289c420a72526332f_prof);

        
        $__internal_8c44d909c7b46e48578981a7e6d7de03dea4fffee5b9cfd3fea2f8f2ec3911a2->leave($__internal_8c44d909c7b46e48578981a7e6d7de03dea4fffee5b9cfd3fea2f8f2ec3911a2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d460be49e37c9d21984943d11c6d89b1f0f38d7281c16ac42c3582702d3989db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d460be49e37c9d21984943d11c6d89b1f0f38d7281c16ac42c3582702d3989db->enter($__internal_d460be49e37c9d21984943d11c6d89b1f0f38d7281c16ac42c3582702d3989db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f69f4f938093e31ff43c0fa2d7fcf2f9e1893d874a8d8e87b5f2f6990c18b13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69f4f938093e31ff43c0fa2d7fcf2f9e1893d874a8d8e87b5f2f6990c18b13f->enter($__internal_f69f4f938093e31ff43c0fa2d7fcf2f9e1893d874a8d8e87b5f2f6990c18b13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f69f4f938093e31ff43c0fa2d7fcf2f9e1893d874a8d8e87b5f2f6990c18b13f->leave($__internal_f69f4f938093e31ff43c0fa2d7fcf2f9e1893d874a8d8e87b5f2f6990c18b13f_prof);

        
        $__internal_d460be49e37c9d21984943d11c6d89b1f0f38d7281c16ac42c3582702d3989db->leave($__internal_d460be49e37c9d21984943d11c6d89b1f0f38d7281c16ac42c3582702d3989db_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:new.html.twig";
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
    <h1>Reservation creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":reservation:new.html.twig", "/var/www/html/projet00000/app/Resources/views/reservation/new.html.twig");
    }
}
