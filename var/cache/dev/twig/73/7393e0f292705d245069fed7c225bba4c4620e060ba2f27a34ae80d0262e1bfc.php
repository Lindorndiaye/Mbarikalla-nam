<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_be9baa6144684acac34bbbe0fb2c6f15ff5d7351446ab80957dd2ff735d6d78f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_83af949470424b10a106bf3a4b31698de41cd528e0149eb07fb70764445d3006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83af949470424b10a106bf3a4b31698de41cd528e0149eb07fb70764445d3006->enter($__internal_83af949470424b10a106bf3a4b31698de41cd528e0149eb07fb70764445d3006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_18b5f19deb42df4a36a7260aee59591b0ace5f082ea87dd56769e2f0dddda890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b5f19deb42df4a36a7260aee59591b0ace5f082ea87dd56769e2f0dddda890->enter($__internal_18b5f19deb42df4a36a7260aee59591b0ace5f082ea87dd56769e2f0dddda890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83af949470424b10a106bf3a4b31698de41cd528e0149eb07fb70764445d3006->leave($__internal_83af949470424b10a106bf3a4b31698de41cd528e0149eb07fb70764445d3006_prof);

        
        $__internal_18b5f19deb42df4a36a7260aee59591b0ace5f082ea87dd56769e2f0dddda890->leave($__internal_18b5f19deb42df4a36a7260aee59591b0ace5f082ea87dd56769e2f0dddda890_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4e3374e1a1863358c2307dd33118916a63b654cbc4dcc7fd00b7098c9766763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e3374e1a1863358c2307dd33118916a63b654cbc4dcc7fd00b7098c9766763->enter($__internal_a4e3374e1a1863358c2307dd33118916a63b654cbc4dcc7fd00b7098c9766763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4c9cbfe3b3428a27e57bb4b0e294152da5932e52e63bb6cfc3dc8e6a800f6ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9cbfe3b3428a27e57bb4b0e294152da5932e52e63bb6cfc3dc8e6a800f6ae2->enter($__internal_4c9cbfe3b3428a27e57bb4b0e294152da5932e52e63bb6cfc3dc8e6a800f6ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4c9cbfe3b3428a27e57bb4b0e294152da5932e52e63bb6cfc3dc8e6a800f6ae2->leave($__internal_4c9cbfe3b3428a27e57bb4b0e294152da5932e52e63bb6cfc3dc8e6a800f6ae2_prof);

        
        $__internal_a4e3374e1a1863358c2307dd33118916a63b654cbc4dcc7fd00b7098c9766763->leave($__internal_a4e3374e1a1863358c2307dd33118916a63b654cbc4dcc7fd00b7098c9766763_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
