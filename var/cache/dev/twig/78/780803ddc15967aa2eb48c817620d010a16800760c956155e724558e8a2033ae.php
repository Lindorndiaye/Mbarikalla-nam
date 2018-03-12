<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_c7f20545214aec0afb3e5483023ebbe1692db77c3f404be2a609c5160020ed36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae39b31eac0ca5c8f1e57d2015a0a7e09031f3f082acfa4c0dfb6a5bc67649ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae39b31eac0ca5c8f1e57d2015a0a7e09031f3f082acfa4c0dfb6a5bc67649ce->enter($__internal_ae39b31eac0ca5c8f1e57d2015a0a7e09031f3f082acfa4c0dfb6a5bc67649ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_9012ac5f28922f284b7f35265582c0c9b3b046e86a84be4580d8dd6df93303c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9012ac5f28922f284b7f35265582c0c9b3b046e86a84be4580d8dd6df93303c0->enter($__internal_9012ac5f28922f284b7f35265582c0c9b3b046e86a84be4580d8dd6df93303c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae39b31eac0ca5c8f1e57d2015a0a7e09031f3f082acfa4c0dfb6a5bc67649ce->leave($__internal_ae39b31eac0ca5c8f1e57d2015a0a7e09031f3f082acfa4c0dfb6a5bc67649ce_prof);

        
        $__internal_9012ac5f28922f284b7f35265582c0c9b3b046e86a84be4580d8dd6df93303c0->leave($__internal_9012ac5f28922f284b7f35265582c0c9b3b046e86a84be4580d8dd6df93303c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2b9a1be5f1d37bab2d7bae69365259d51704577bc27bccd6ff039fa2b86fff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b9a1be5f1d37bab2d7bae69365259d51704577bc27bccd6ff039fa2b86fff8->enter($__internal_d2b9a1be5f1d37bab2d7bae69365259d51704577bc27bccd6ff039fa2b86fff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bf0aaf895843d4a53caf90d8f4a7b72e521662d72e04de46d0917032f058d2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0aaf895843d4a53caf90d8f4a7b72e521662d72e04de46d0917032f058d2d3->enter($__internal_bf0aaf895843d4a53caf90d8f4a7b72e521662d72e04de46d0917032f058d2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_bf0aaf895843d4a53caf90d8f4a7b72e521662d72e04de46d0917032f058d2d3->leave($__internal_bf0aaf895843d4a53caf90d8f4a7b72e521662d72e04de46d0917032f058d2d3_prof);

        
        $__internal_d2b9a1be5f1d37bab2d7bae69365259d51704577bc27bccd6ff039fa2b86fff8->leave($__internal_d2b9a1be5f1d37bab2d7bae69365259d51704577bc27bccd6ff039fa2b86fff8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
