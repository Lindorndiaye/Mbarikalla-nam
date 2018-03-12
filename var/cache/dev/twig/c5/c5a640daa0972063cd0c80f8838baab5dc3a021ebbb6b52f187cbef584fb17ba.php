<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2028663b13a5f0e72479de69273ec070d70318482917ddfc06cc2d0465eedfb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27519b9704fdc7c11abb14c579371a442c54c7db17ed81a0c10af5e0041c3b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27519b9704fdc7c11abb14c579371a442c54c7db17ed81a0c10af5e0041c3b33->enter($__internal_27519b9704fdc7c11abb14c579371a442c54c7db17ed81a0c10af5e0041c3b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1f96c594ba9eb7b8ee356334ae0d3ad861f75341eaf61483315f1a9faf8b44fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f96c594ba9eb7b8ee356334ae0d3ad861f75341eaf61483315f1a9faf8b44fb->enter($__internal_1f96c594ba9eb7b8ee356334ae0d3ad861f75341eaf61483315f1a9faf8b44fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27519b9704fdc7c11abb14c579371a442c54c7db17ed81a0c10af5e0041c3b33->leave($__internal_27519b9704fdc7c11abb14c579371a442c54c7db17ed81a0c10af5e0041c3b33_prof);

        
        $__internal_1f96c594ba9eb7b8ee356334ae0d3ad861f75341eaf61483315f1a9faf8b44fb->leave($__internal_1f96c594ba9eb7b8ee356334ae0d3ad861f75341eaf61483315f1a9faf8b44fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c12119300c3422a9af6304169c4d68c34f0ea2d0bb65c9ef61359d5f9a47e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c12119300c3422a9af6304169c4d68c34f0ea2d0bb65c9ef61359d5f9a47e88->enter($__internal_7c12119300c3422a9af6304169c4d68c34f0ea2d0bb65c9ef61359d5f9a47e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_263e9b76f0292b5c18e53ea5a249a27314e3df42540106f2f99a203c24d361e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263e9b76f0292b5c18e53ea5a249a27314e3df42540106f2f99a203c24d361e0->enter($__internal_263e9b76f0292b5c18e53ea5a249a27314e3df42540106f2f99a203c24d361e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_263e9b76f0292b5c18e53ea5a249a27314e3df42540106f2f99a203c24d361e0->leave($__internal_263e9b76f0292b5c18e53ea5a249a27314e3df42540106f2f99a203c24d361e0_prof);

        
        $__internal_7c12119300c3422a9af6304169c4d68c34f0ea2d0bb65c9ef61359d5f9a47e88->leave($__internal_7c12119300c3422a9af6304169c4d68c34f0ea2d0bb65c9ef61359d5f9a47e88_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_285599fc78b0865c48337a6b96444b71af566a96c70b29019cd896f1a74f95e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285599fc78b0865c48337a6b96444b71af566a96c70b29019cd896f1a74f95e8->enter($__internal_285599fc78b0865c48337a6b96444b71af566a96c70b29019cd896f1a74f95e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7ece166bd39ee7fe0dcc68b4a3f2f87fef5c9beffc52172193c4488d7583cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ece166bd39ee7fe0dcc68b4a3f2f87fef5c9beffc52172193c4488d7583cac->enter($__internal_c7ece166bd39ee7fe0dcc68b4a3f2f87fef5c9beffc52172193c4488d7583cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_c7ece166bd39ee7fe0dcc68b4a3f2f87fef5c9beffc52172193c4488d7583cac->leave($__internal_c7ece166bd39ee7fe0dcc68b4a3f2f87fef5c9beffc52172193c4488d7583cac_prof);

        
        $__internal_285599fc78b0865c48337a6b96444b71af566a96c70b29019cd896f1a74f95e8->leave($__internal_285599fc78b0865c48337a6b96444b71af566a96c70b29019cd896f1a74f95e8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_359c15b2bb730f2d683b40923f9a230e6bbac0e901ce72776ae000e89f246d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_359c15b2bb730f2d683b40923f9a230e6bbac0e901ce72776ae000e89f246d56->enter($__internal_359c15b2bb730f2d683b40923f9a230e6bbac0e901ce72776ae000e89f246d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d13c754836c48630e18a526e67075e397ebe00d474e6d584032f9b1835b46555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13c754836c48630e18a526e67075e397ebe00d474e6d584032f9b1835b46555->enter($__internal_d13c754836c48630e18a526e67075e397ebe00d474e6d584032f9b1835b46555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d13c754836c48630e18a526e67075e397ebe00d474e6d584032f9b1835b46555->leave($__internal_d13c754836c48630e18a526e67075e397ebe00d474e6d584032f9b1835b46555_prof);

        
        $__internal_359c15b2bb730f2d683b40923f9a230e6bbac0e901ce72776ae000e89f246d56->leave($__internal_359c15b2bb730f2d683b40923f9a230e6bbac0e901ce72776ae000e89f246d56_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/mbarikallah/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
