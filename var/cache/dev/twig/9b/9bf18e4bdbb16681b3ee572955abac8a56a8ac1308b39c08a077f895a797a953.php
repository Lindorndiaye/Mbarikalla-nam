<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5e5f82d0e8598d5fafb24793f96efcd76dddce1bbf6a316330e22cd1e6334bf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_62bb6aa7646c228809fc1cf7c56783ea86f87e7199cd5452b990d61d7403ed7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62bb6aa7646c228809fc1cf7c56783ea86f87e7199cd5452b990d61d7403ed7d->enter($__internal_62bb6aa7646c228809fc1cf7c56783ea86f87e7199cd5452b990d61d7403ed7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c4e09708fd695605278b49ed65f0b73baaf790f5db0525af01c9491cd59804ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e09708fd695605278b49ed65f0b73baaf790f5db0525af01c9491cd59804ac->enter($__internal_c4e09708fd695605278b49ed65f0b73baaf790f5db0525af01c9491cd59804ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62bb6aa7646c228809fc1cf7c56783ea86f87e7199cd5452b990d61d7403ed7d->leave($__internal_62bb6aa7646c228809fc1cf7c56783ea86f87e7199cd5452b990d61d7403ed7d_prof);

        
        $__internal_c4e09708fd695605278b49ed65f0b73baaf790f5db0525af01c9491cd59804ac->leave($__internal_c4e09708fd695605278b49ed65f0b73baaf790f5db0525af01c9491cd59804ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1811f398dcb2ac95d5d09dcb3ca6456ec3cb8a25d98c4fb7dc4542cc8a037e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1811f398dcb2ac95d5d09dcb3ca6456ec3cb8a25d98c4fb7dc4542cc8a037e77->enter($__internal_1811f398dcb2ac95d5d09dcb3ca6456ec3cb8a25d98c4fb7dc4542cc8a037e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2984bd967796eaa7c84352acdbd338bf6bb603567737ff9d48801af7134f44f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2984bd967796eaa7c84352acdbd338bf6bb603567737ff9d48801af7134f44f6->enter($__internal_2984bd967796eaa7c84352acdbd338bf6bb603567737ff9d48801af7134f44f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2984bd967796eaa7c84352acdbd338bf6bb603567737ff9d48801af7134f44f6->leave($__internal_2984bd967796eaa7c84352acdbd338bf6bb603567737ff9d48801af7134f44f6_prof);

        
        $__internal_1811f398dcb2ac95d5d09dcb3ca6456ec3cb8a25d98c4fb7dc4542cc8a037e77->leave($__internal_1811f398dcb2ac95d5d09dcb3ca6456ec3cb8a25d98c4fb7dc4542cc8a037e77_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ee4f3328db57cd94da6319367e86c10a93358c9318002b9583da9bb58ec7afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee4f3328db57cd94da6319367e86c10a93358c9318002b9583da9bb58ec7afe->enter($__internal_5ee4f3328db57cd94da6319367e86c10a93358c9318002b9583da9bb58ec7afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_40cf6d7ce9561a69288ec9abc033537bf2b8086915263d709cec970eabfde09a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40cf6d7ce9561a69288ec9abc033537bf2b8086915263d709cec970eabfde09a->enter($__internal_40cf6d7ce9561a69288ec9abc033537bf2b8086915263d709cec970eabfde09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_40cf6d7ce9561a69288ec9abc033537bf2b8086915263d709cec970eabfde09a->leave($__internal_40cf6d7ce9561a69288ec9abc033537bf2b8086915263d709cec970eabfde09a_prof);

        
        $__internal_5ee4f3328db57cd94da6319367e86c10a93358c9318002b9583da9bb58ec7afe->leave($__internal_5ee4f3328db57cd94da6319367e86c10a93358c9318002b9583da9bb58ec7afe_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1128310140a35c881d686205922b430bdacb35a92dad8d469bddc02c3a5439ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1128310140a35c881d686205922b430bdacb35a92dad8d469bddc02c3a5439ef->enter($__internal_1128310140a35c881d686205922b430bdacb35a92dad8d469bddc02c3a5439ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a665c1bbfe0b0d3507cc07470f1697b61f0238a287d51f05347a65aeea86c1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a665c1bbfe0b0d3507cc07470f1697b61f0238a287d51f05347a65aeea86c1e2->enter($__internal_a665c1bbfe0b0d3507cc07470f1697b61f0238a287d51f05347a65aeea86c1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a665c1bbfe0b0d3507cc07470f1697b61f0238a287d51f05347a65aeea86c1e2->leave($__internal_a665c1bbfe0b0d3507cc07470f1697b61f0238a287d51f05347a65aeea86c1e2_prof);

        
        $__internal_1128310140a35c881d686205922b430bdacb35a92dad8d469bddc02c3a5439ef->leave($__internal_1128310140a35c881d686205922b430bdacb35a92dad8d469bddc02c3a5439ef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
