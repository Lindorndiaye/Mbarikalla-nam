<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_ce5f0608b9e1ccfb3b9c02421d91ecd5c6236ef2ec6f10777dc92c0da5808a01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_809ffffea2d4f92db8c9809f19ba30702ab2e2912bba5e99e077c38b522bcefe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809ffffea2d4f92db8c9809f19ba30702ab2e2912bba5e99e077c38b522bcefe->enter($__internal_809ffffea2d4f92db8c9809f19ba30702ab2e2912bba5e99e077c38b522bcefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_f9901c6f89859c95471bda88c8e716b14218dd028934bacaf6a452ed426d2522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9901c6f89859c95471bda88c8e716b14218dd028934bacaf6a452ed426d2522->enter($__internal_f9901c6f89859c95471bda88c8e716b14218dd028934bacaf6a452ed426d2522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_809ffffea2d4f92db8c9809f19ba30702ab2e2912bba5e99e077c38b522bcefe->leave($__internal_809ffffea2d4f92db8c9809f19ba30702ab2e2912bba5e99e077c38b522bcefe_prof);

        
        $__internal_f9901c6f89859c95471bda88c8e716b14218dd028934bacaf6a452ed426d2522->leave($__internal_f9901c6f89859c95471bda88c8e716b14218dd028934bacaf6a452ed426d2522_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a4760e4d830c246bb3d7dbb297f7d21d99835d3c4c48fab057cbfc17fea3b60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4760e4d830c246bb3d7dbb297f7d21d99835d3c4c48fab057cbfc17fea3b60a->enter($__internal_a4760e4d830c246bb3d7dbb297f7d21d99835d3c4c48fab057cbfc17fea3b60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6797176946832daad2132921eb4cbf9d281c24224db34af40bceab8fc06dfc2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6797176946832daad2132921eb4cbf9d281c24224db34af40bceab8fc06dfc2d->enter($__internal_6797176946832daad2132921eb4cbf9d281c24224db34af40bceab8fc06dfc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_6797176946832daad2132921eb4cbf9d281c24224db34af40bceab8fc06dfc2d->leave($__internal_6797176946832daad2132921eb4cbf9d281c24224db34af40bceab8fc06dfc2d_prof);

        
        $__internal_a4760e4d830c246bb3d7dbb297f7d21d99835d3c4c48fab057cbfc17fea3b60a->leave($__internal_a4760e4d830c246bb3d7dbb297f7d21d99835d3c4c48fab057cbfc17fea3b60a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
