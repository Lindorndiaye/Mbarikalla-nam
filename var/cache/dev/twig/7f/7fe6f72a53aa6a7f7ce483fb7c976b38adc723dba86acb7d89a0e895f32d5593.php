<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8bb2433433235aa76c4bb28e1e9188e027003ce5be40fb23cb4b196b8ff987e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_3e2dd0d70ae91ef9bfcdebed4a618e0ffea9c4da9fd32af324e628c56633aa50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2dd0d70ae91ef9bfcdebed4a618e0ffea9c4da9fd32af324e628c56633aa50->enter($__internal_3e2dd0d70ae91ef9bfcdebed4a618e0ffea9c4da9fd32af324e628c56633aa50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_62b731e5b2227c6187b3f5c632ec0cdce953fee161ec828497eb495a5c1f3800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b731e5b2227c6187b3f5c632ec0cdce953fee161ec828497eb495a5c1f3800->enter($__internal_62b731e5b2227c6187b3f5c632ec0cdce953fee161ec828497eb495a5c1f3800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e2dd0d70ae91ef9bfcdebed4a618e0ffea9c4da9fd32af324e628c56633aa50->leave($__internal_3e2dd0d70ae91ef9bfcdebed4a618e0ffea9c4da9fd32af324e628c56633aa50_prof);

        
        $__internal_62b731e5b2227c6187b3f5c632ec0cdce953fee161ec828497eb495a5c1f3800->leave($__internal_62b731e5b2227c6187b3f5c632ec0cdce953fee161ec828497eb495a5c1f3800_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b5afa6a191635bfa330eb5ac1810c43a9dc60cd3553c129e19b1b64ce25d3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b5afa6a191635bfa330eb5ac1810c43a9dc60cd3553c129e19b1b64ce25d3b2->enter($__internal_9b5afa6a191635bfa330eb5ac1810c43a9dc60cd3553c129e19b1b64ce25d3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8b0933e6334b0e32a9a13af450bbb383391393201d629a1d6c9f30af4f652833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0933e6334b0e32a9a13af450bbb383391393201d629a1d6c9f30af4f652833->enter($__internal_8b0933e6334b0e32a9a13af450bbb383391393201d629a1d6c9f30af4f652833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8b0933e6334b0e32a9a13af450bbb383391393201d629a1d6c9f30af4f652833->leave($__internal_8b0933e6334b0e32a9a13af450bbb383391393201d629a1d6c9f30af4f652833_prof);

        
        $__internal_9b5afa6a191635bfa330eb5ac1810c43a9dc60cd3553c129e19b1b64ce25d3b2->leave($__internal_9b5afa6a191635bfa330eb5ac1810c43a9dc60cd3553c129e19b1b64ce25d3b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_01b43da945d9925eea2bac84ce41c84aa7660a3bcbf77669522ba69da5276da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b43da945d9925eea2bac84ce41c84aa7660a3bcbf77669522ba69da5276da6->enter($__internal_01b43da945d9925eea2bac84ce41c84aa7660a3bcbf77669522ba69da5276da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cd05e9945541170c1cc7776a13a0d90d0e5a0aa4fa6229c8a4d97ed24f70f517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd05e9945541170c1cc7776a13a0d90d0e5a0aa4fa6229c8a4d97ed24f70f517->enter($__internal_cd05e9945541170c1cc7776a13a0d90d0e5a0aa4fa6229c8a4d97ed24f70f517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cd05e9945541170c1cc7776a13a0d90d0e5a0aa4fa6229c8a4d97ed24f70f517->leave($__internal_cd05e9945541170c1cc7776a13a0d90d0e5a0aa4fa6229c8a4d97ed24f70f517_prof);

        
        $__internal_01b43da945d9925eea2bac84ce41c84aa7660a3bcbf77669522ba69da5276da6->leave($__internal_01b43da945d9925eea2bac84ce41c84aa7660a3bcbf77669522ba69da5276da6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6687598368b7d99f6f57080749749efc85d0084d0cd7fb4bf49bdef844b0e1e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6687598368b7d99f6f57080749749efc85d0084d0cd7fb4bf49bdef844b0e1e9->enter($__internal_6687598368b7d99f6f57080749749efc85d0084d0cd7fb4bf49bdef844b0e1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3f712c4c790fb25ca7b067f71f1502b69d409cccd99b5a067b0158dccae35e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f712c4c790fb25ca7b067f71f1502b69d409cccd99b5a067b0158dccae35e9e->enter($__internal_3f712c4c790fb25ca7b067f71f1502b69d409cccd99b5a067b0158dccae35e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3f712c4c790fb25ca7b067f71f1502b69d409cccd99b5a067b0158dccae35e9e->leave($__internal_3f712c4c790fb25ca7b067f71f1502b69d409cccd99b5a067b0158dccae35e9e_prof);

        
        $__internal_6687598368b7d99f6f57080749749efc85d0084d0cd7fb4bf49bdef844b0e1e9->leave($__internal_6687598368b7d99f6f57080749749efc85d0084d0cd7fb4bf49bdef844b0e1e9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
