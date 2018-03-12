<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5ec9cac48aef791d33d87bd85bfd8e01b0dd38e19e4ad71b7ac56d38caca504a extends Twig_Template
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
        $__internal_548b20433c8947c76edac928144601093f87d7fc7f4c1c3a6cacb73f64a391b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548b20433c8947c76edac928144601093f87d7fc7f4c1c3a6cacb73f64a391b4->enter($__internal_548b20433c8947c76edac928144601093f87d7fc7f4c1c3a6cacb73f64a391b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_35e83b6a3a3e76844ab1ef3968a7d93cbb06e680546504b4326a8001cfba33ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e83b6a3a3e76844ab1ef3968a7d93cbb06e680546504b4326a8001cfba33ab->enter($__internal_35e83b6a3a3e76844ab1ef3968a7d93cbb06e680546504b4326a8001cfba33ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_548b20433c8947c76edac928144601093f87d7fc7f4c1c3a6cacb73f64a391b4->leave($__internal_548b20433c8947c76edac928144601093f87d7fc7f4c1c3a6cacb73f64a391b4_prof);

        
        $__internal_35e83b6a3a3e76844ab1ef3968a7d93cbb06e680546504b4326a8001cfba33ab->leave($__internal_35e83b6a3a3e76844ab1ef3968a7d93cbb06e680546504b4326a8001cfba33ab_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6b13e33f4bbb3907aa1d016eee92c0ff328d9f0757dc4c78fd91f81473937bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b13e33f4bbb3907aa1d016eee92c0ff328d9f0757dc4c78fd91f81473937bc9->enter($__internal_6b13e33f4bbb3907aa1d016eee92c0ff328d9f0757dc4c78fd91f81473937bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8f24ffc8e507fdf2ba4dd13621601b584fb7843da7ac14735c4042048dcf22e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f24ffc8e507fdf2ba4dd13621601b584fb7843da7ac14735c4042048dcf22e1->enter($__internal_8f24ffc8e507fdf2ba4dd13621601b584fb7843da7ac14735c4042048dcf22e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_8f24ffc8e507fdf2ba4dd13621601b584fb7843da7ac14735c4042048dcf22e1->leave($__internal_8f24ffc8e507fdf2ba4dd13621601b584fb7843da7ac14735c4042048dcf22e1_prof);

        
        $__internal_6b13e33f4bbb3907aa1d016eee92c0ff328d9f0757dc4c78fd91f81473937bc9->leave($__internal_6b13e33f4bbb3907aa1d016eee92c0ff328d9f0757dc4c78fd91f81473937bc9_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f902095f4772bf19c0ce065e28a65839339dde235b324830c49477c3c95ac488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f902095f4772bf19c0ce065e28a65839339dde235b324830c49477c3c95ac488->enter($__internal_f902095f4772bf19c0ce065e28a65839339dde235b324830c49477c3c95ac488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d042452cca230ce9928b44ce87b7679cfaf6f6fe774f9f439366fd5eb1a240d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d042452cca230ce9928b44ce87b7679cfaf6f6fe774f9f439366fd5eb1a240d1->enter($__internal_d042452cca230ce9928b44ce87b7679cfaf6f6fe774f9f439366fd5eb1a240d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_d042452cca230ce9928b44ce87b7679cfaf6f6fe774f9f439366fd5eb1a240d1->leave($__internal_d042452cca230ce9928b44ce87b7679cfaf6f6fe774f9f439366fd5eb1a240d1_prof);

        
        $__internal_f902095f4772bf19c0ce065e28a65839339dde235b324830c49477c3c95ac488->leave($__internal_f902095f4772bf19c0ce065e28a65839339dde235b324830c49477c3c95ac488_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_17e9deb9fcaabb542a863038a1d94b8f9592697a59297ab40f9b9ceadd57fea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e9deb9fcaabb542a863038a1d94b8f9592697a59297ab40f9b9ceadd57fea7->enter($__internal_17e9deb9fcaabb542a863038a1d94b8f9592697a59297ab40f9b9ceadd57fea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_57ed97d440248566f851519e0b2d7f1d596090ba763ad1af50d398816323dc52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ed97d440248566f851519e0b2d7f1d596090ba763ad1af50d398816323dc52->enter($__internal_57ed97d440248566f851519e0b2d7f1d596090ba763ad1af50d398816323dc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_57ed97d440248566f851519e0b2d7f1d596090ba763ad1af50d398816323dc52->leave($__internal_57ed97d440248566f851519e0b2d7f1d596090ba763ad1af50d398816323dc52_prof);

        
        $__internal_17e9deb9fcaabb542a863038a1d94b8f9592697a59297ab40f9b9ceadd57fea7->leave($__internal_17e9deb9fcaabb542a863038a1d94b8f9592697a59297ab40f9b9ceadd57fea7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
