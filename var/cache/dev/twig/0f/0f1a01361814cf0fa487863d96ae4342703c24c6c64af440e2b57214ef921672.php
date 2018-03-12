<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8b40b482cae1edbeba3fecef412beff93282c784c6300621d3578d75e0441adc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bf2061780ac25422accd834f8a5e35a2467cfa43256cb758ff7e4e866574766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf2061780ac25422accd834f8a5e35a2467cfa43256cb758ff7e4e866574766->enter($__internal_0bf2061780ac25422accd834f8a5e35a2467cfa43256cb758ff7e4e866574766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_02155035601babf6f43ea0ae7e6939a0562806db8fc3b70acd9efefa72f8ebce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02155035601babf6f43ea0ae7e6939a0562806db8fc3b70acd9efefa72f8ebce->enter($__internal_02155035601babf6f43ea0ae7e6939a0562806db8fc3b70acd9efefa72f8ebce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0bf2061780ac25422accd834f8a5e35a2467cfa43256cb758ff7e4e866574766->leave($__internal_0bf2061780ac25422accd834f8a5e35a2467cfa43256cb758ff7e4e866574766_prof);

        
        $__internal_02155035601babf6f43ea0ae7e6939a0562806db8fc3b70acd9efefa72f8ebce->leave($__internal_02155035601babf6f43ea0ae7e6939a0562806db8fc3b70acd9efefa72f8ebce_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a5a1b57d9596cdc7b921bb95f32ea13c963cf26aaa8da9e732abf55c8aee795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5a1b57d9596cdc7b921bb95f32ea13c963cf26aaa8da9e732abf55c8aee795->enter($__internal_2a5a1b57d9596cdc7b921bb95f32ea13c963cf26aaa8da9e732abf55c8aee795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3a0f289238be8b9f266f562c1684b9ed0cc453a2fc8a7148350838cfb4863ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0f289238be8b9f266f562c1684b9ed0cc453a2fc8a7148350838cfb4863ab7->enter($__internal_3a0f289238be8b9f266f562c1684b9ed0cc453a2fc8a7148350838cfb4863ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3a0f289238be8b9f266f562c1684b9ed0cc453a2fc8a7148350838cfb4863ab7->leave($__internal_3a0f289238be8b9f266f562c1684b9ed0cc453a2fc8a7148350838cfb4863ab7_prof);

        
        $__internal_2a5a1b57d9596cdc7b921bb95f32ea13c963cf26aaa8da9e732abf55c8aee795->leave($__internal_2a5a1b57d9596cdc7b921bb95f32ea13c963cf26aaa8da9e732abf55c8aee795_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
