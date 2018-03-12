<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_1217f84580908c8b51bc1642d425d3f8e5b6436f58d2426ea829543067c82b17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99e8c1a74da662018f79ade9c419bc7653f4ddd8a0a5fd997140b6f2b9ffaa49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e8c1a74da662018f79ade9c419bc7653f4ddd8a0a5fd997140b6f2b9ffaa49->enter($__internal_99e8c1a74da662018f79ade9c419bc7653f4ddd8a0a5fd997140b6f2b9ffaa49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_05c67e1fba075549f02913b2084cdc0381e814ddae4c027274fc263e4e81ba17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c67e1fba075549f02913b2084cdc0381e814ddae4c027274fc263e4e81ba17->enter($__internal_05c67e1fba075549f02913b2084cdc0381e814ddae4c027274fc263e4e81ba17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_99e8c1a74da662018f79ade9c419bc7653f4ddd8a0a5fd997140b6f2b9ffaa49->leave($__internal_99e8c1a74da662018f79ade9c419bc7653f4ddd8a0a5fd997140b6f2b9ffaa49_prof);

        
        $__internal_05c67e1fba075549f02913b2084cdc0381e814ddae4c027274fc263e4e81ba17->leave($__internal_05c67e1fba075549f02913b2084cdc0381e814ddae4c027274fc263e4e81ba17_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
