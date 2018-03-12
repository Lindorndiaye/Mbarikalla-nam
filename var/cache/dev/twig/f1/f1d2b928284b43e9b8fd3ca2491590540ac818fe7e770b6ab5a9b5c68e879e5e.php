<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_eb2521ddb5fedc66146b1a23da0e58bf902da9cf9e3daa9e2b2f0dc19890bc7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18f321465190ba6a55c5c4a75b35f64dbb2728a3a3dfc03779210989bcbe2ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f321465190ba6a55c5c4a75b35f64dbb2728a3a3dfc03779210989bcbe2ebc->enter($__internal_18f321465190ba6a55c5c4a75b35f64dbb2728a3a3dfc03779210989bcbe2ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_b0d41631f64be4fc266d348f817a008a3ab9b92a502abf48795a2d38991f47f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d41631f64be4fc266d348f817a008a3ab9b92a502abf48795a2d38991f47f0->enter($__internal_b0d41631f64be4fc266d348f817a008a3ab9b92a502abf48795a2d38991f47f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_18f321465190ba6a55c5c4a75b35f64dbb2728a3a3dfc03779210989bcbe2ebc->leave($__internal_18f321465190ba6a55c5c4a75b35f64dbb2728a3a3dfc03779210989bcbe2ebc_prof);

        
        $__internal_b0d41631f64be4fc266d348f817a008a3ab9b92a502abf48795a2d38991f47f0->leave($__internal_b0d41631f64be4fc266d348f817a008a3ab9b92a502abf48795a2d38991f47f0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ab1bde5d9b30a8d0da44ae736ed656c165ca3cf50f11f9fe1d88006cbd995a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab1bde5d9b30a8d0da44ae736ed656c165ca3cf50f11f9fe1d88006cbd995a68->enter($__internal_ab1bde5d9b30a8d0da44ae736ed656c165ca3cf50f11f9fe1d88006cbd995a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0aad765f3dcfb9ad3186ec991c3084ec6ba96b445f513378ad068c895582871a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aad765f3dcfb9ad3186ec991c3084ec6ba96b445f513378ad068c895582871a->enter($__internal_0aad765f3dcfb9ad3186ec991c3084ec6ba96b445f513378ad068c895582871a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_0aad765f3dcfb9ad3186ec991c3084ec6ba96b445f513378ad068c895582871a->leave($__internal_0aad765f3dcfb9ad3186ec991c3084ec6ba96b445f513378ad068c895582871a_prof);

        
        $__internal_ab1bde5d9b30a8d0da44ae736ed656c165ca3cf50f11f9fe1d88006cbd995a68->leave($__internal_ab1bde5d9b30a8d0da44ae736ed656c165ca3cf50f11f9fe1d88006cbd995a68_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0c7f491c5ba4be7bebde1c7087a4ab774840016e3c5b8bbf13299f7fac3b5695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c7f491c5ba4be7bebde1c7087a4ab774840016e3c5b8bbf13299f7fac3b5695->enter($__internal_0c7f491c5ba4be7bebde1c7087a4ab774840016e3c5b8bbf13299f7fac3b5695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ee76d882b98be2aed22da059b88d776ed24cfdbf9727ca33d6577b1c78efb3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee76d882b98be2aed22da059b88d776ed24cfdbf9727ca33d6577b1c78efb3d9->enter($__internal_ee76d882b98be2aed22da059b88d776ed24cfdbf9727ca33d6577b1c78efb3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_ee76d882b98be2aed22da059b88d776ed24cfdbf9727ca33d6577b1c78efb3d9->leave($__internal_ee76d882b98be2aed22da059b88d776ed24cfdbf9727ca33d6577b1c78efb3d9_prof);

        
        $__internal_0c7f491c5ba4be7bebde1c7087a4ab774840016e3c5b8bbf13299f7fac3b5695->leave($__internal_0c7f491c5ba4be7bebde1c7087a4ab774840016e3c5b8bbf13299f7fac3b5695_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_993f3ab143238aa98b8225a4eaeaf2210fd9c808df48a06a336bdb10fe6d9f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993f3ab143238aa98b8225a4eaeaf2210fd9c808df48a06a336bdb10fe6d9f73->enter($__internal_993f3ab143238aa98b8225a4eaeaf2210fd9c808df48a06a336bdb10fe6d9f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c673ab2e492eee9644d693ae75baacd795c480f24c2d05c1a3877bac058d06e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c673ab2e492eee9644d693ae75baacd795c480f24c2d05c1a3877bac058d06e6->enter($__internal_c673ab2e492eee9644d693ae75baacd795c480f24c2d05c1a3877bac058d06e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c673ab2e492eee9644d693ae75baacd795c480f24c2d05c1a3877bac058d06e6->leave($__internal_c673ab2e492eee9644d693ae75baacd795c480f24c2d05c1a3877bac058d06e6_prof);

        
        $__internal_993f3ab143238aa98b8225a4eaeaf2210fd9c808df48a06a336bdb10fe6d9f73->leave($__internal_993f3ab143238aa98b8225a4eaeaf2210fd9c808df48a06a336bdb10fe6d9f73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
