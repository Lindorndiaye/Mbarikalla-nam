<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b79eaeb61f32c56313d9cd006910c1fc8f57405d3cb00577579159e6f33e673d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e0ce64f08018ae6b26a549d619dae087be925a9e776b1c1053f0f8a10316413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0ce64f08018ae6b26a549d619dae087be925a9e776b1c1053f0f8a10316413->enter($__internal_9e0ce64f08018ae6b26a549d619dae087be925a9e776b1c1053f0f8a10316413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_2ff5db94d9e99d7bbc80755dd291ef622186824f17e44e849c30d8d660938410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff5db94d9e99d7bbc80755dd291ef622186824f17e44e849c30d8d660938410->enter($__internal_2ff5db94d9e99d7bbc80755dd291ef622186824f17e44e849c30d8d660938410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e0ce64f08018ae6b26a549d619dae087be925a9e776b1c1053f0f8a10316413->leave($__internal_9e0ce64f08018ae6b26a549d619dae087be925a9e776b1c1053f0f8a10316413_prof);

        
        $__internal_2ff5db94d9e99d7bbc80755dd291ef622186824f17e44e849c30d8d660938410->leave($__internal_2ff5db94d9e99d7bbc80755dd291ef622186824f17e44e849c30d8d660938410_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1e94a242cf1f392a6e9d9eb316b06b9b778a01b81a322a4fef8aac8ed9a1153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e94a242cf1f392a6e9d9eb316b06b9b778a01b81a322a4fef8aac8ed9a1153->enter($__internal_a1e94a242cf1f392a6e9d9eb316b06b9b778a01b81a322a4fef8aac8ed9a1153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_80c611c2e84f056d1d7f161d67d4a156d5944eba6ed3fe4cc0d1ce297b9d0fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c611c2e84f056d1d7f161d67d4a156d5944eba6ed3fe4cc0d1ce297b9d0fb7->enter($__internal_80c611c2e84f056d1d7f161d67d4a156d5944eba6ed3fe4cc0d1ce297b9d0fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_80c611c2e84f056d1d7f161d67d4a156d5944eba6ed3fe4cc0d1ce297b9d0fb7->leave($__internal_80c611c2e84f056d1d7f161d67d4a156d5944eba6ed3fe4cc0d1ce297b9d0fb7_prof);

        
        $__internal_a1e94a242cf1f392a6e9d9eb316b06b9b778a01b81a322a4fef8aac8ed9a1153->leave($__internal_a1e94a242cf1f392a6e9d9eb316b06b9b778a01b81a322a4fef8aac8ed9a1153_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
