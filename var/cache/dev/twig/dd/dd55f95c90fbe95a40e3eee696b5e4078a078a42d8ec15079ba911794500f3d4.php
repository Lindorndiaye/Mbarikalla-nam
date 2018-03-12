<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_2d7b3928862b75f05e4fef3868771cfe7e849b4c6639755427d1b4fc8f93f55e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e305eac76569cc09bf54a54550cd2e2e2979c25b680998e69bc995b13d481850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e305eac76569cc09bf54a54550cd2e2e2979c25b680998e69bc995b13d481850->enter($__internal_e305eac76569cc09bf54a54550cd2e2e2979c25b680998e69bc995b13d481850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_4b8c7356cb98dd5bb58b57a5773eb19ff188b6e6278336eb78e36ebb0d625035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8c7356cb98dd5bb58b57a5773eb19ff188b6e6278336eb78e36ebb0d625035->enter($__internal_4b8c7356cb98dd5bb58b57a5773eb19ff188b6e6278336eb78e36ebb0d625035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e305eac76569cc09bf54a54550cd2e2e2979c25b680998e69bc995b13d481850->leave($__internal_e305eac76569cc09bf54a54550cd2e2e2979c25b680998e69bc995b13d481850_prof);

        
        $__internal_4b8c7356cb98dd5bb58b57a5773eb19ff188b6e6278336eb78e36ebb0d625035->leave($__internal_4b8c7356cb98dd5bb58b57a5773eb19ff188b6e6278336eb78e36ebb0d625035_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0ff84c0f7ef50e1b50ad5a54e2601f2c79db21f67df428be8977ce16068dbc3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff84c0f7ef50e1b50ad5a54e2601f2c79db21f67df428be8977ce16068dbc3e->enter($__internal_0ff84c0f7ef50e1b50ad5a54e2601f2c79db21f67df428be8977ce16068dbc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_fe9e12335c79d77b7215f51eb15f1013c0bc4e24ab4b67e56015bc3b2088e8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9e12335c79d77b7215f51eb15f1013c0bc4e24ab4b67e56015bc3b2088e8ef->enter($__internal_fe9e12335c79d77b7215f51eb15f1013c0bc4e24ab4b67e56015bc3b2088e8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_fe9e12335c79d77b7215f51eb15f1013c0bc4e24ab4b67e56015bc3b2088e8ef->leave($__internal_fe9e12335c79d77b7215f51eb15f1013c0bc4e24ab4b67e56015bc3b2088e8ef_prof);

        
        $__internal_0ff84c0f7ef50e1b50ad5a54e2601f2c79db21f67df428be8977ce16068dbc3e->leave($__internal_0ff84c0f7ef50e1b50ad5a54e2601f2c79db21f67df428be8977ce16068dbc3e_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc2dd11f446f27f09ee8e72cd39d20af8290639e83d4667db9f4f5582eb9c421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2dd11f446f27f09ee8e72cd39d20af8290639e83d4667db9f4f5582eb9c421->enter($__internal_dc2dd11f446f27f09ee8e72cd39d20af8290639e83d4667db9f4f5582eb9c421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8ea86d024698bdd24d4c3591e415da95a62283466be221ad488bd3b5eff4e013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea86d024698bdd24d4c3591e415da95a62283466be221ad488bd3b5eff4e013->enter($__internal_8ea86d024698bdd24d4c3591e415da95a62283466be221ad488bd3b5eff4e013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8ea86d024698bdd24d4c3591e415da95a62283466be221ad488bd3b5eff4e013->leave($__internal_8ea86d024698bdd24d4c3591e415da95a62283466be221ad488bd3b5eff4e013_prof);

        
        $__internal_dc2dd11f446f27f09ee8e72cd39d20af8290639e83d4667db9f4f5582eb9c421->leave($__internal_dc2dd11f446f27f09ee8e72cd39d20af8290639e83d4667db9f4f5582eb9c421_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
