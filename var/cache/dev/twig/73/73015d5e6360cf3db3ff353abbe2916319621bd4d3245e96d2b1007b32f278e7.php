<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_38691ed99025618abe58eadf5a88f2e3a54947717ce9fa299a4b50c9ed2e3fa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_fc878a151d4c90ba31deb62522a8f80e04f9c1322831a0e3a79a0d0429651870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc878a151d4c90ba31deb62522a8f80e04f9c1322831a0e3a79a0d0429651870->enter($__internal_fc878a151d4c90ba31deb62522a8f80e04f9c1322831a0e3a79a0d0429651870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_9021e47437df4424ec9fa44c20e23924494042371ef3b10eb87b37111939b259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9021e47437df4424ec9fa44c20e23924494042371ef3b10eb87b37111939b259->enter($__internal_9021e47437df4424ec9fa44c20e23924494042371ef3b10eb87b37111939b259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc878a151d4c90ba31deb62522a8f80e04f9c1322831a0e3a79a0d0429651870->leave($__internal_fc878a151d4c90ba31deb62522a8f80e04f9c1322831a0e3a79a0d0429651870_prof);

        
        $__internal_9021e47437df4424ec9fa44c20e23924494042371ef3b10eb87b37111939b259->leave($__internal_9021e47437df4424ec9fa44c20e23924494042371ef3b10eb87b37111939b259_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_33997c9f71170049fb51bfd261c71c2857df8d1f2c41db0f6376295cd13d340f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33997c9f71170049fb51bfd261c71c2857df8d1f2c41db0f6376295cd13d340f->enter($__internal_33997c9f71170049fb51bfd261c71c2857df8d1f2c41db0f6376295cd13d340f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6450d17cc0843d8c3d991e0a9f81d71110d001ab94a95a5fbf5d3fa029c3fe60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6450d17cc0843d8c3d991e0a9f81d71110d001ab94a95a5fbf5d3fa029c3fe60->enter($__internal_6450d17cc0843d8c3d991e0a9f81d71110d001ab94a95a5fbf5d3fa029c3fe60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6450d17cc0843d8c3d991e0a9f81d71110d001ab94a95a5fbf5d3fa029c3fe60->leave($__internal_6450d17cc0843d8c3d991e0a9f81d71110d001ab94a95a5fbf5d3fa029c3fe60_prof);

        
        $__internal_33997c9f71170049fb51bfd261c71c2857df8d1f2c41db0f6376295cd13d340f->leave($__internal_33997c9f71170049fb51bfd261c71c2857df8d1f2c41db0f6376295cd13d340f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a39ee1ee7a08d9a315bedd96cdf9f0eafc697822447debc15a755f95444270b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39ee1ee7a08d9a315bedd96cdf9f0eafc697822447debc15a755f95444270b2->enter($__internal_a39ee1ee7a08d9a315bedd96cdf9f0eafc697822447debc15a755f95444270b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa9d47b494f3ec87fcd0f82fa5a271ea56d06bd310c1124d3862c6796dc5eac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9d47b494f3ec87fcd0f82fa5a271ea56d06bd310c1124d3862c6796dc5eac9->enter($__internal_aa9d47b494f3ec87fcd0f82fa5a271ea56d06bd310c1124d3862c6796dc5eac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_aa9d47b494f3ec87fcd0f82fa5a271ea56d06bd310c1124d3862c6796dc5eac9->leave($__internal_aa9d47b494f3ec87fcd0f82fa5a271ea56d06bd310c1124d3862c6796dc5eac9_prof);

        
        $__internal_a39ee1ee7a08d9a315bedd96cdf9f0eafc697822447debc15a755f95444270b2->leave($__internal_a39ee1ee7a08d9a315bedd96cdf9f0eafc697822447debc15a755f95444270b2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
