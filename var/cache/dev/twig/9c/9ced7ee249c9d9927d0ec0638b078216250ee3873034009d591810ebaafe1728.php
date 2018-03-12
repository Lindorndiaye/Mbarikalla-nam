<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_eb610b82edb0fcadc081d1039d650f5de39cd469ef87e5860492ea54d7dd44c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_5b23c03809aedb9a771135665bb234c08201d272a01e009e9f55415ac775eb23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b23c03809aedb9a771135665bb234c08201d272a01e009e9f55415ac775eb23->enter($__internal_5b23c03809aedb9a771135665bb234c08201d272a01e009e9f55415ac775eb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_1e046370b7b220d117c6be6ea777a4b1da9613c3e4f2207d68b29aebdac98ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e046370b7b220d117c6be6ea777a4b1da9613c3e4f2207d68b29aebdac98ddb->enter($__internal_1e046370b7b220d117c6be6ea777a4b1da9613c3e4f2207d68b29aebdac98ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b23c03809aedb9a771135665bb234c08201d272a01e009e9f55415ac775eb23->leave($__internal_5b23c03809aedb9a771135665bb234c08201d272a01e009e9f55415ac775eb23_prof);

        
        $__internal_1e046370b7b220d117c6be6ea777a4b1da9613c3e4f2207d68b29aebdac98ddb->leave($__internal_1e046370b7b220d117c6be6ea777a4b1da9613c3e4f2207d68b29aebdac98ddb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9a827a30880dbe0a40ec24157cbae394cc5cd8ee4ddd6023a08322f47b34b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a827a30880dbe0a40ec24157cbae394cc5cd8ee4ddd6023a08322f47b34b9a->enter($__internal_a9a827a30880dbe0a40ec24157cbae394cc5cd8ee4ddd6023a08322f47b34b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7ac1750106b995c18891a841062e777f4e6dbdd786cb05a57653ad20b98d30fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac1750106b995c18891a841062e777f4e6dbdd786cb05a57653ad20b98d30fc->enter($__internal_7ac1750106b995c18891a841062e777f4e6dbdd786cb05a57653ad20b98d30fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_7ac1750106b995c18891a841062e777f4e6dbdd786cb05a57653ad20b98d30fc->leave($__internal_7ac1750106b995c18891a841062e777f4e6dbdd786cb05a57653ad20b98d30fc_prof);

        
        $__internal_a9a827a30880dbe0a40ec24157cbae394cc5cd8ee4ddd6023a08322f47b34b9a->leave($__internal_a9a827a30880dbe0a40ec24157cbae394cc5cd8ee4ddd6023a08322f47b34b9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
