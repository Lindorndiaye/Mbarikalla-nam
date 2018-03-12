<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b28e99a880636873fed646f5c5d16a7fd6d27e7ba80b2fff4cbdfb784a622922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80da9b2b1b67d855a7bf1ac5e0ac134b02caae900ec795b3a3b9599d30d2c22a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80da9b2b1b67d855a7bf1ac5e0ac134b02caae900ec795b3a3b9599d30d2c22a->enter($__internal_80da9b2b1b67d855a7bf1ac5e0ac134b02caae900ec795b3a3b9599d30d2c22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5afa9434fe633a61e6c7117b28b154fb3ad1b83d2a4a6fec082d347ec0070fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5afa9434fe633a61e6c7117b28b154fb3ad1b83d2a4a6fec082d347ec0070fa3->enter($__internal_5afa9434fe633a61e6c7117b28b154fb3ad1b83d2a4a6fec082d347ec0070fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80da9b2b1b67d855a7bf1ac5e0ac134b02caae900ec795b3a3b9599d30d2c22a->leave($__internal_80da9b2b1b67d855a7bf1ac5e0ac134b02caae900ec795b3a3b9599d30d2c22a_prof);

        
        $__internal_5afa9434fe633a61e6c7117b28b154fb3ad1b83d2a4a6fec082d347ec0070fa3->leave($__internal_5afa9434fe633a61e6c7117b28b154fb3ad1b83d2a4a6fec082d347ec0070fa3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_143950cdb46fe2d0b02f18e9586ea6370a44658616b2bed1bcbbcc48f110e44e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_143950cdb46fe2d0b02f18e9586ea6370a44658616b2bed1bcbbcc48f110e44e->enter($__internal_143950cdb46fe2d0b02f18e9586ea6370a44658616b2bed1bcbbcc48f110e44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85eb6bd9a0051602ea2c85363ac00e9d4217c304ef5fa0fa108903a8ab366f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85eb6bd9a0051602ea2c85363ac00e9d4217c304ef5fa0fa108903a8ab366f4b->enter($__internal_85eb6bd9a0051602ea2c85363ac00e9d4217c304ef5fa0fa108903a8ab366f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_85eb6bd9a0051602ea2c85363ac00e9d4217c304ef5fa0fa108903a8ab366f4b->leave($__internal_85eb6bd9a0051602ea2c85363ac00e9d4217c304ef5fa0fa108903a8ab366f4b_prof);

        
        $__internal_143950cdb46fe2d0b02f18e9586ea6370a44658616b2bed1bcbbcc48f110e44e->leave($__internal_143950cdb46fe2d0b02f18e9586ea6370a44658616b2bed1bcbbcc48f110e44e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81f3291fb1b4455e373e67694f4094d7fbf08a90bb2fe38eeeb82643602ce2da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f3291fb1b4455e373e67694f4094d7fbf08a90bb2fe38eeeb82643602ce2da->enter($__internal_81f3291fb1b4455e373e67694f4094d7fbf08a90bb2fe38eeeb82643602ce2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d0e82e99b57d0a619153bd809335628477ceb3bb153488fc2753db1df3f54b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e82e99b57d0a619153bd809335628477ceb3bb153488fc2753db1df3f54b4a->enter($__internal_d0e82e99b57d0a619153bd809335628477ceb3bb153488fc2753db1df3f54b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d0e82e99b57d0a619153bd809335628477ceb3bb153488fc2753db1df3f54b4a->leave($__internal_d0e82e99b57d0a619153bd809335628477ceb3bb153488fc2753db1df3f54b4a_prof);

        
        $__internal_81f3291fb1b4455e373e67694f4094d7fbf08a90bb2fe38eeeb82643602ce2da->leave($__internal_81f3291fb1b4455e373e67694f4094d7fbf08a90bb2fe38eeeb82643602ce2da_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0264d9563ea6b8bea89b9e3cb52728e67141e8e9cef855e5fb2c3b09ce17cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0264d9563ea6b8bea89b9e3cb52728e67141e8e9cef855e5fb2c3b09ce17cd9->enter($__internal_d0264d9563ea6b8bea89b9e3cb52728e67141e8e9cef855e5fb2c3b09ce17cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b0d5453153aa10b927d48095b1d13abd5ebb3fcbd71ee24f99b415fe1e1affdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d5453153aa10b927d48095b1d13abd5ebb3fcbd71ee24f99b415fe1e1affdb->enter($__internal_b0d5453153aa10b927d48095b1d13abd5ebb3fcbd71ee24f99b415fe1e1affdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_b0d5453153aa10b927d48095b1d13abd5ebb3fcbd71ee24f99b415fe1e1affdb->leave($__internal_b0d5453153aa10b927d48095b1d13abd5ebb3fcbd71ee24f99b415fe1e1affdb_prof);

        
        $__internal_d0264d9563ea6b8bea89b9e3cb52728e67141e8e9cef855e5fb2c3b09ce17cd9->leave($__internal_d0264d9563ea6b8bea89b9e3cb52728e67141e8e9cef855e5fb2c3b09ce17cd9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/mbarikallah/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
