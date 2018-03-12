<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d82928bfce1ecfdb845b713f70d29d2025aeaafd976eb9668d84dc022e630196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_7e81e595398dac2361fbeb247d01a120535c2be971112ccf48360e7a19a243e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e81e595398dac2361fbeb247d01a120535c2be971112ccf48360e7a19a243e4->enter($__internal_7e81e595398dac2361fbeb247d01a120535c2be971112ccf48360e7a19a243e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0f962600b237a2a1ce2c88c0c0b3291a0d48fc1a7570b193844c51a96d022727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f962600b237a2a1ce2c88c0c0b3291a0d48fc1a7570b193844c51a96d022727->enter($__internal_0f962600b237a2a1ce2c88c0c0b3291a0d48fc1a7570b193844c51a96d022727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e81e595398dac2361fbeb247d01a120535c2be971112ccf48360e7a19a243e4->leave($__internal_7e81e595398dac2361fbeb247d01a120535c2be971112ccf48360e7a19a243e4_prof);

        
        $__internal_0f962600b237a2a1ce2c88c0c0b3291a0d48fc1a7570b193844c51a96d022727->leave($__internal_0f962600b237a2a1ce2c88c0c0b3291a0d48fc1a7570b193844c51a96d022727_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c82a5af56118c9a3bf8b3ea33956556c7b32163c6eef5b9f8bc543e49fbd7a4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82a5af56118c9a3bf8b3ea33956556c7b32163c6eef5b9f8bc543e49fbd7a4d->enter($__internal_c82a5af56118c9a3bf8b3ea33956556c7b32163c6eef5b9f8bc543e49fbd7a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1fa16d47ecfda0b82bc0171f0ace282858d093c96a7fa09770477e8ce6675bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa16d47ecfda0b82bc0171f0ace282858d093c96a7fa09770477e8ce6675bc2->enter($__internal_1fa16d47ecfda0b82bc0171f0ace282858d093c96a7fa09770477e8ce6675bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1fa16d47ecfda0b82bc0171f0ace282858d093c96a7fa09770477e8ce6675bc2->leave($__internal_1fa16d47ecfda0b82bc0171f0ace282858d093c96a7fa09770477e8ce6675bc2_prof);

        
        $__internal_c82a5af56118c9a3bf8b3ea33956556c7b32163c6eef5b9f8bc543e49fbd7a4d->leave($__internal_c82a5af56118c9a3bf8b3ea33956556c7b32163c6eef5b9f8bc543e49fbd7a4d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9a438e186d8f8d18c64ec7deebea350393371f3bac269f2d5a24544388f0d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a438e186d8f8d18c64ec7deebea350393371f3bac269f2d5a24544388f0d69->enter($__internal_d9a438e186d8f8d18c64ec7deebea350393371f3bac269f2d5a24544388f0d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_39145e99a62079772f04f61dacce1450b5d2e2ce806bd065cdd6cd6ba65c98b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39145e99a62079772f04f61dacce1450b5d2e2ce806bd065cdd6cd6ba65c98b3->enter($__internal_39145e99a62079772f04f61dacce1450b5d2e2ce806bd065cdd6cd6ba65c98b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_39145e99a62079772f04f61dacce1450b5d2e2ce806bd065cdd6cd6ba65c98b3->leave($__internal_39145e99a62079772f04f61dacce1450b5d2e2ce806bd065cdd6cd6ba65c98b3_prof);

        
        $__internal_d9a438e186d8f8d18c64ec7deebea350393371f3bac269f2d5a24544388f0d69->leave($__internal_d9a438e186d8f8d18c64ec7deebea350393371f3bac269f2d5a24544388f0d69_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b4df4b67edb87d3398fdc99f2c8cbc89548e927448fd34dcb36ef623c28a11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4df4b67edb87d3398fdc99f2c8cbc89548e927448fd34dcb36ef623c28a11e->enter($__internal_7b4df4b67edb87d3398fdc99f2c8cbc89548e927448fd34dcb36ef623c28a11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_155215301c1120cbd35fb33010a35c0896bd65e7e3a5bee377987822e1e6847d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155215301c1120cbd35fb33010a35c0896bd65e7e3a5bee377987822e1e6847d->enter($__internal_155215301c1120cbd35fb33010a35c0896bd65e7e3a5bee377987822e1e6847d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_155215301c1120cbd35fb33010a35c0896bd65e7e3a5bee377987822e1e6847d->leave($__internal_155215301c1120cbd35fb33010a35c0896bd65e7e3a5bee377987822e1e6847d_prof);

        
        $__internal_7b4df4b67edb87d3398fdc99f2c8cbc89548e927448fd34dcb36ef623c28a11e->leave($__internal_7b4df4b67edb87d3398fdc99f2c8cbc89548e927448fd34dcb36ef623c28a11e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/mbarikallah/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
