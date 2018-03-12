<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a224514b30ae07afb4d2130e38a8bc20319a6ec4cde5ec4b872d7a97365865f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_78598600ca0680caf8576311c6c6005721edbca9de418a3707343958609def70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78598600ca0680caf8576311c6c6005721edbca9de418a3707343958609def70->enter($__internal_78598600ca0680caf8576311c6c6005721edbca9de418a3707343958609def70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_6315348f8c8cf407ddf4bd897bcfbcbae4295015afc33aef0f52c6c6c7187867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6315348f8c8cf407ddf4bd897bcfbcbae4295015afc33aef0f52c6c6c7187867->enter($__internal_6315348f8c8cf407ddf4bd897bcfbcbae4295015afc33aef0f52c6c6c7187867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78598600ca0680caf8576311c6c6005721edbca9de418a3707343958609def70->leave($__internal_78598600ca0680caf8576311c6c6005721edbca9de418a3707343958609def70_prof);

        
        $__internal_6315348f8c8cf407ddf4bd897bcfbcbae4295015afc33aef0f52c6c6c7187867->leave($__internal_6315348f8c8cf407ddf4bd897bcfbcbae4295015afc33aef0f52c6c6c7187867_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cef46c802330926d095c36f11e3ffc1b06e704689dc7d218177b435c63e63ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef46c802330926d095c36f11e3ffc1b06e704689dc7d218177b435c63e63ec5->enter($__internal_cef46c802330926d095c36f11e3ffc1b06e704689dc7d218177b435c63e63ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_22962ae7ee9abbdff9dfcef52e9f82df98cc30d3a4d833be974a725175470e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22962ae7ee9abbdff9dfcef52e9f82df98cc30d3a4d833be974a725175470e90->enter($__internal_22962ae7ee9abbdff9dfcef52e9f82df98cc30d3a4d833be974a725175470e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_22962ae7ee9abbdff9dfcef52e9f82df98cc30d3a4d833be974a725175470e90->leave($__internal_22962ae7ee9abbdff9dfcef52e9f82df98cc30d3a4d833be974a725175470e90_prof);

        
        $__internal_cef46c802330926d095c36f11e3ffc1b06e704689dc7d218177b435c63e63ec5->leave($__internal_cef46c802330926d095c36f11e3ffc1b06e704689dc7d218177b435c63e63ec5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
