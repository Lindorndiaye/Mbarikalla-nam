<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_e4bccb4f6d7476cb80393a6546997f32abd39e012d627a89e9f4a403c87989c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10622e3c9c4419bee3452309f88e8becc2634276d15880bcf127e26c649d7c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10622e3c9c4419bee3452309f88e8becc2634276d15880bcf127e26c649d7c64->enter($__internal_10622e3c9c4419bee3452309f88e8becc2634276d15880bcf127e26c649d7c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_896ed4d3aa76c02a68e8f70fe71995b8430bc67ae1feda129f6ebdc50e874035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896ed4d3aa76c02a68e8f70fe71995b8430bc67ae1feda129f6ebdc50e874035->enter($__internal_896ed4d3aa76c02a68e8f70fe71995b8430bc67ae1feda129f6ebdc50e874035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10622e3c9c4419bee3452309f88e8becc2634276d15880bcf127e26c649d7c64->leave($__internal_10622e3c9c4419bee3452309f88e8becc2634276d15880bcf127e26c649d7c64_prof);

        
        $__internal_896ed4d3aa76c02a68e8f70fe71995b8430bc67ae1feda129f6ebdc50e874035->leave($__internal_896ed4d3aa76c02a68e8f70fe71995b8430bc67ae1feda129f6ebdc50e874035_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53faa04d3d92e77a0f18f892ec4176bc55f2d2e4d50ce62606017e415936f244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53faa04d3d92e77a0f18f892ec4176bc55f2d2e4d50ce62606017e415936f244->enter($__internal_53faa04d3d92e77a0f18f892ec4176bc55f2d2e4d50ce62606017e415936f244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_03ec317dbbb9f8e96446702d1ddcf51067803ee2cda341ce000b271737eaa590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ec317dbbb9f8e96446702d1ddcf51067803ee2cda341ce000b271737eaa590->enter($__internal_03ec317dbbb9f8e96446702d1ddcf51067803ee2cda341ce000b271737eaa590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_03ec317dbbb9f8e96446702d1ddcf51067803ee2cda341ce000b271737eaa590->leave($__internal_03ec317dbbb9f8e96446702d1ddcf51067803ee2cda341ce000b271737eaa590_prof);

        
        $__internal_53faa04d3d92e77a0f18f892ec4176bc55f2d2e4d50ce62606017e415936f244->leave($__internal_53faa04d3d92e77a0f18f892ec4176bc55f2d2e4d50ce62606017e415936f244_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ef6f2de0991fb2b2ace973409587211d42582abd72cbc4850d60a58a4339b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef6f2de0991fb2b2ace973409587211d42582abd72cbc4850d60a58a4339b53->enter($__internal_5ef6f2de0991fb2b2ace973409587211d42582abd72cbc4850d60a58a4339b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb66f4ad69481fa4075da48bd58f8a49f92ac93cd7337cf4244124805bb33e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb66f4ad69481fa4075da48bd58f8a49f92ac93cd7337cf4244124805bb33e4a->enter($__internal_eb66f4ad69481fa4075da48bd58f8a49f92ac93cd7337cf4244124805bb33e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_eb66f4ad69481fa4075da48bd58f8a49f92ac93cd7337cf4244124805bb33e4a->leave($__internal_eb66f4ad69481fa4075da48bd58f8a49f92ac93cd7337cf4244124805bb33e4a_prof);

        
        $__internal_5ef6f2de0991fb2b2ace973409587211d42582abd72cbc4850d60a58a4339b53->leave($__internal_5ef6f2de0991fb2b2ace973409587211d42582abd72cbc4850d60a58a4339b53_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
