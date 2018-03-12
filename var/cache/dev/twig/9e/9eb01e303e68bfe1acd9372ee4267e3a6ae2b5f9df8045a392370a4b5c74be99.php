<?php

/* :contrat:new.html.twig */
class __TwigTemplate_5de4d52750b6118301d1186fd17493edbf32b96beb1ece1ca5b524746f01432f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contrat:new.html.twig", 1);
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
        $__internal_93aac472d811808edf28114c45adfd41df5f4b9d7f203af3406e74e50971c36e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93aac472d811808edf28114c45adfd41df5f4b9d7f203af3406e74e50971c36e->enter($__internal_93aac472d811808edf28114c45adfd41df5f4b9d7f203af3406e74e50971c36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrat:new.html.twig"));

        $__internal_2595956eb1a5e23c2ec5ad4aa6537f6eda5676b104f71e7248afea57aad67cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2595956eb1a5e23c2ec5ad4aa6537f6eda5676b104f71e7248afea57aad67cf4->enter($__internal_2595956eb1a5e23c2ec5ad4aa6537f6eda5676b104f71e7248afea57aad67cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrat:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93aac472d811808edf28114c45adfd41df5f4b9d7f203af3406e74e50971c36e->leave($__internal_93aac472d811808edf28114c45adfd41df5f4b9d7f203af3406e74e50971c36e_prof);

        
        $__internal_2595956eb1a5e23c2ec5ad4aa6537f6eda5676b104f71e7248afea57aad67cf4->leave($__internal_2595956eb1a5e23c2ec5ad4aa6537f6eda5676b104f71e7248afea57aad67cf4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b8f15593db8e39688b72074e70726901fb5bef73630d3ebd6f43104e18fd9aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8f15593db8e39688b72074e70726901fb5bef73630d3ebd6f43104e18fd9aa->enter($__internal_4b8f15593db8e39688b72074e70726901fb5bef73630d3ebd6f43104e18fd9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77dc756ced8561f2667af9b83f682ed3c0b216ee027110c22e0510ebfacf433e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77dc756ced8561f2667af9b83f682ed3c0b216ee027110c22e0510ebfacf433e->enter($__internal_77dc756ced8561f2667af9b83f682ed3c0b216ee027110c22e0510ebfacf433e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contrat creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_77dc756ced8561f2667af9b83f682ed3c0b216ee027110c22e0510ebfacf433e->leave($__internal_77dc756ced8561f2667af9b83f682ed3c0b216ee027110c22e0510ebfacf433e_prof);

        
        $__internal_4b8f15593db8e39688b72074e70726901fb5bef73630d3ebd6f43104e18fd9aa->leave($__internal_4b8f15593db8e39688b72074e70726901fb5bef73630d3ebd6f43104e18fd9aa_prof);

    }

    public function getTemplateName()
    {
        return ":contrat:new.html.twig";
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
    <h1>Contrat creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('contrat_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":contrat:new.html.twig", "/var/www/html/projet00000/app/Resources/views/contrat/new.html.twig");
    }
}
