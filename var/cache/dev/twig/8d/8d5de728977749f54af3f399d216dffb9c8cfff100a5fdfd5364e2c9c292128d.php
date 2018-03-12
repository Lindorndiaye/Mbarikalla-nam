<?php

/* KEURGUIimmoBundle:front:formLog.html.twig */
class __TwigTemplate_bbb75109b566abce76a93e73ced44d177c5df99452d4479c9f33240aa9e0044b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@KEURGUIimmo/layout.html.twig", "KEURGUIimmoBundle:front:formLog.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@KEURGUIimmo/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_675683f40484ab548a15e757bacf063e08e84d2661ff8406c5281312b9074baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675683f40484ab548a15e757bacf063e08e84d2661ff8406c5281312b9074baa->enter($__internal_675683f40484ab548a15e757bacf063e08e84d2661ff8406c5281312b9074baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:formLog.html.twig"));

        $__internal_d71aa62b046df2c73693a8653026e4d0c5036a49a2fe232c0f6326189693a06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71aa62b046df2c73693a8653026e4d0c5036a49a2fe232c0f6326189693a06b->enter($__internal_d71aa62b046df2c73693a8653026e4d0c5036a49a2fe232c0f6326189693a06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:formLog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_675683f40484ab548a15e757bacf063e08e84d2661ff8406c5281312b9074baa->leave($__internal_675683f40484ab548a15e757bacf063e08e84d2661ff8406c5281312b9074baa_prof);

        
        $__internal_d71aa62b046df2c73693a8653026e4d0c5036a49a2fe232c0f6326189693a06b->leave($__internal_d71aa62b046df2c73693a8653026e4d0c5036a49a2fe232c0f6326189693a06b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8328c4370ba400a2efc35af0dd5e730f7f32cf597d284881463118a468ec6cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8328c4370ba400a2efc35af0dd5e730f7f32cf597d284881463118a468ec6cc->enter($__internal_d8328c4370ba400a2efc35af0dd5e730f7f32cf597d284881463118a468ec6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cd2150ccda2a333e8bab3a76cf471c62ae9154c7237c3035784c1d89a1b626e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd2150ccda2a333e8bab3a76cf471c62ae9154c7237c3035784c1d89a1b626e->enter($__internal_0cd2150ccda2a333e8bab3a76cf471c62ae9154c7237c3035784c1d89a1b626e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "



";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form');
        echo "


";
        
        $__internal_0cd2150ccda2a333e8bab3a76cf471c62ae9154c7237c3035784c1d89a1b626e->leave($__internal_0cd2150ccda2a333e8bab3a76cf471c62ae9154c7237c3035784c1d89a1b626e_prof);

        
        $__internal_d8328c4370ba400a2efc35af0dd5e730f7f32cf597d284881463118a468ec6cc->leave($__internal_d8328c4370ba400a2efc35af0dd5e730f7f32cf597d284881463118a468ec6cc_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_728059b8022c32dfc0c4c46ab1f979224ed54c926e0dd97f68c8c1ce435fd665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_728059b8022c32dfc0c4c46ab1f979224ed54c926e0dd97f68c8c1ce435fd665->enter($__internal_728059b8022c32dfc0c4c46ab1f979224ed54c926e0dd97f68c8c1ce435fd665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_98d59d3c8a2acd5816ec4ad89d3a75f761903f1bbd7e894b9602d360bc6347b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d59d3c8a2acd5816ec4ad89d3a75f761903f1bbd7e894b9602d360bc6347b3->enter($__internal_98d59d3c8a2acd5816ec4ad89d3a75f761903f1bbd7e894b9602d360bc6347b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_98d59d3c8a2acd5816ec4ad89d3a75f761903f1bbd7e894b9602d360bc6347b3->leave($__internal_98d59d3c8a2acd5816ec4ad89d3a75f761903f1bbd7e894b9602d360bc6347b3_prof);

        
        $__internal_728059b8022c32dfc0c4c46ab1f979224ed54c926e0dd97f68c8c1ce435fd665->leave($__internal_728059b8022c32dfc0c4c46ab1f979224ed54c926e0dd97f68c8c1ce435fd665_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:formLog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 6,  72 => 5,  58 => 12,  52 => 8,  50 => 5,  41 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@KEURGUIimmo/layout.html.twig\" %}


{% block body %}
{% block header %}
{{parent()}}
{% endblock %}




{{form(form)}}


{% endblock %}", "KEURGUIimmoBundle:front:formLog.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/formLog.html.twig");
    }
}
