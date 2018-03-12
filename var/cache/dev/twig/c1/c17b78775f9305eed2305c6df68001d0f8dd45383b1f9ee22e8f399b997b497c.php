<?php

/* :bien:edit.html.twig */
class __TwigTemplate_efdc87f67d2f87a377647786d027b2a0323ea3950226bab635d674ed021eac23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":bien:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b3d8718d685fd68244eb586dbf36f08473a5ca4b2089ebba95c1918edd60cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3d8718d685fd68244eb586dbf36f08473a5ca4b2089ebba95c1918edd60cf2->enter($__internal_6b3d8718d685fd68244eb586dbf36f08473a5ca4b2089ebba95c1918edd60cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bien:edit.html.twig"));

        $__internal_6dcf62d7684c3721c70c77679d99c16eb5051eda659db8d8e806cbcc96809c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dcf62d7684c3721c70c77679d99c16eb5051eda659db8d8e806cbcc96809c59->enter($__internal_6dcf62d7684c3721c70c77679d99c16eb5051eda659db8d8e806cbcc96809c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bien:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b3d8718d685fd68244eb586dbf36f08473a5ca4b2089ebba95c1918edd60cf2->leave($__internal_6b3d8718d685fd68244eb586dbf36f08473a5ca4b2089ebba95c1918edd60cf2_prof);

        
        $__internal_6dcf62d7684c3721c70c77679d99c16eb5051eda659db8d8e806cbcc96809c59->leave($__internal_6dcf62d7684c3721c70c77679d99c16eb5051eda659db8d8e806cbcc96809c59_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e889360341b832207013434ed9e39f0b12d3d0351de329613e799b25403aa7ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e889360341b832207013434ed9e39f0b12d3d0351de329613e799b25403aa7ff->enter($__internal_e889360341b832207013434ed9e39f0b12d3d0351de329613e799b25403aa7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fa0ffdce508072ff873b9b3c70c3441833648a2a6bdf9c86e4308c3c46709e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa0ffdce508072ff873b9b3c70c3441833648a2a6bdf9c86e4308c3c46709e6->enter($__internal_9fa0ffdce508072ff873b9b3c70c3441833648a2a6bdf9c86e4308c3c46709e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bien edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9fa0ffdce508072ff873b9b3c70c3441833648a2a6bdf9c86e4308c3c46709e6->leave($__internal_9fa0ffdce508072ff873b9b3c70c3441833648a2a6bdf9c86e4308c3c46709e6_prof);

        
        $__internal_e889360341b832207013434ed9e39f0b12d3d0351de329613e799b25403aa7ff->leave($__internal_e889360341b832207013434ed9e39f0b12d3d0351de329613e799b25403aa7ff_prof);

    }

    public function getTemplateName()
    {
        return ":bien:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Bien edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('bien_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":bien:edit.html.twig", "/var/www/html/projet00000/app/Resources/views/bien/edit.html.twig");
    }
}
