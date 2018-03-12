<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_16427af773004c6faca09e5373e0454f18ad812b454ce15051ec84e960461102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_4583db34939a11e4bc3ca6a03692e21a8257f1f89b424d4fa67cefae685e1f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4583db34939a11e4bc3ca6a03692e21a8257f1f89b424d4fa67cefae685e1f93->enter($__internal_4583db34939a11e4bc3ca6a03692e21a8257f1f89b424d4fa67cefae685e1f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b9f38a68fb6128b8efdfc5d60659b97474d0c756fbe696b9a6f4819f8056649a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f38a68fb6128b8efdfc5d60659b97474d0c756fbe696b9a6f4819f8056649a->enter($__internal_b9f38a68fb6128b8efdfc5d60659b97474d0c756fbe696b9a6f4819f8056649a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4583db34939a11e4bc3ca6a03692e21a8257f1f89b424d4fa67cefae685e1f93->leave($__internal_4583db34939a11e4bc3ca6a03692e21a8257f1f89b424d4fa67cefae685e1f93_prof);

        
        $__internal_b9f38a68fb6128b8efdfc5d60659b97474d0c756fbe696b9a6f4819f8056649a->leave($__internal_b9f38a68fb6128b8efdfc5d60659b97474d0c756fbe696b9a6f4819f8056649a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cfd8328154849d07ef736e76cada14bba6375f4c4a58d0edb26f3ba4fd1c8b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd8328154849d07ef736e76cada14bba6375f4c4a58d0edb26f3ba4fd1c8b9e->enter($__internal_cfd8328154849d07ef736e76cada14bba6375f4c4a58d0edb26f3ba4fd1c8b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4c599de068ed2f69ba60dc204e8559e2f9d31be09f5b2d92e57111f207deba09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c599de068ed2f69ba60dc204e8559e2f9d31be09f5b2d92e57111f207deba09->enter($__internal_4c599de068ed2f69ba60dc204e8559e2f9d31be09f5b2d92e57111f207deba09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_4c599de068ed2f69ba60dc204e8559e2f9d31be09f5b2d92e57111f207deba09->leave($__internal_4c599de068ed2f69ba60dc204e8559e2f9d31be09f5b2d92e57111f207deba09_prof);

        
        $__internal_cfd8328154849d07ef736e76cada14bba6375f4c4a58d0edb26f3ba4fd1c8b9e->leave($__internal_cfd8328154849d07ef736e76cada14bba6375f4c4a58d0edb26f3ba4fd1c8b9e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/mbarikallah/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
