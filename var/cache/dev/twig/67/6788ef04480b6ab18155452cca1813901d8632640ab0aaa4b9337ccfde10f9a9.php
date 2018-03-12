<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c9e1287c82e8444793f069c737ab18c0123dc44592f27135918f87828797181b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_b271bdc0bed63402bc5867008eb7ee6819c8d4d7f7707c38b19bc6203f091127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b271bdc0bed63402bc5867008eb7ee6819c8d4d7f7707c38b19bc6203f091127->enter($__internal_b271bdc0bed63402bc5867008eb7ee6819c8d4d7f7707c38b19bc6203f091127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_22bf01ce9bdac9a560a261f7404f5b2c5145457123aadf0774e1cbef6c3769bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bf01ce9bdac9a560a261f7404f5b2c5145457123aadf0774e1cbef6c3769bb->enter($__internal_22bf01ce9bdac9a560a261f7404f5b2c5145457123aadf0774e1cbef6c3769bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b271bdc0bed63402bc5867008eb7ee6819c8d4d7f7707c38b19bc6203f091127->leave($__internal_b271bdc0bed63402bc5867008eb7ee6819c8d4d7f7707c38b19bc6203f091127_prof);

        
        $__internal_22bf01ce9bdac9a560a261f7404f5b2c5145457123aadf0774e1cbef6c3769bb->leave($__internal_22bf01ce9bdac9a560a261f7404f5b2c5145457123aadf0774e1cbef6c3769bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_78dfd2c2bd46090b435c7f66c89f427cc896897a16917511aecdb7a780c1ad0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78dfd2c2bd46090b435c7f66c89f427cc896897a16917511aecdb7a780c1ad0e->enter($__internal_78dfd2c2bd46090b435c7f66c89f427cc896897a16917511aecdb7a780c1ad0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7ad2ec85a7dd500a35824136f85a46c3261b56585e5c775cb403914f9002b245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad2ec85a7dd500a35824136f85a46c3261b56585e5c775cb403914f9002b245->enter($__internal_7ad2ec85a7dd500a35824136f85a46c3261b56585e5c775cb403914f9002b245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7ad2ec85a7dd500a35824136f85a46c3261b56585e5c775cb403914f9002b245->leave($__internal_7ad2ec85a7dd500a35824136f85a46c3261b56585e5c775cb403914f9002b245_prof);

        
        $__internal_78dfd2c2bd46090b435c7f66c89f427cc896897a16917511aecdb7a780c1ad0e->leave($__internal_78dfd2c2bd46090b435c7f66c89f427cc896897a16917511aecdb7a780c1ad0e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
