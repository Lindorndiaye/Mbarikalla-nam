<?php

/* :proprietaire:edit.html.twig */
class __TwigTemplate_af34a0031ce72032e7700849f622177c61506ef3eb90d567c6abea3de97d6774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":proprietaire:edit.html.twig", 1);
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
        $__internal_4fe19b3a4295f10c6e4012e8694ae1045246cd26ac30d4d56aa100f24b6b5904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fe19b3a4295f10c6e4012e8694ae1045246cd26ac30d4d56aa100f24b6b5904->enter($__internal_4fe19b3a4295f10c6e4012e8694ae1045246cd26ac30d4d56aa100f24b6b5904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:edit.html.twig"));

        $__internal_398dd9cf97babdda0617205c15fd7e26987d6af00f363aff167e8a8f7e6a1799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398dd9cf97babdda0617205c15fd7e26987d6af00f363aff167e8a8f7e6a1799->enter($__internal_398dd9cf97babdda0617205c15fd7e26987d6af00f363aff167e8a8f7e6a1799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe19b3a4295f10c6e4012e8694ae1045246cd26ac30d4d56aa100f24b6b5904->leave($__internal_4fe19b3a4295f10c6e4012e8694ae1045246cd26ac30d4d56aa100f24b6b5904_prof);

        
        $__internal_398dd9cf97babdda0617205c15fd7e26987d6af00f363aff167e8a8f7e6a1799->leave($__internal_398dd9cf97babdda0617205c15fd7e26987d6af00f363aff167e8a8f7e6a1799_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_091d7729b4df39a6141da7b94a311c540fc66c2922af5e85a5f26f0fac30e4df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091d7729b4df39a6141da7b94a311c540fc66c2922af5e85a5f26f0fac30e4df->enter($__internal_091d7729b4df39a6141da7b94a311c540fc66c2922af5e85a5f26f0fac30e4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd8b78e3403dc6457f69688396e0dc27da207bf8085df2fa4003bded648224fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8b78e3403dc6457f69688396e0dc27da207bf8085df2fa4003bded648224fd->enter($__internal_fd8b78e3403dc6457f69688396e0dc27da207bf8085df2fa4003bded648224fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proprietaire edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_index");
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
        
        $__internal_fd8b78e3403dc6457f69688396e0dc27da207bf8085df2fa4003bded648224fd->leave($__internal_fd8b78e3403dc6457f69688396e0dc27da207bf8085df2fa4003bded648224fd_prof);

        
        $__internal_091d7729b4df39a6141da7b94a311c540fc66c2922af5e85a5f26f0fac30e4df->leave($__internal_091d7729b4df39a6141da7b94a311c540fc66c2922af5e85a5f26f0fac30e4df_prof);

    }

    public function getTemplateName()
    {
        return ":proprietaire:edit.html.twig";
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
    <h1>Proprietaire edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('proprietaire_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":proprietaire:edit.html.twig", "/var/www/html/projet00000/app/Resources/views/proprietaire/edit.html.twig");
    }
}
