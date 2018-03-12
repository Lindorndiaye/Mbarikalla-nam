<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_8b6cb7dd720fa4b9247353bd983ad368030e9f976161dbd79596e57b0f53dee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_75db77ff811420bb28db3733bb139c7b4349020873907046be5b63ed5f0dd12f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75db77ff811420bb28db3733bb139c7b4349020873907046be5b63ed5f0dd12f->enter($__internal_75db77ff811420bb28db3733bb139c7b4349020873907046be5b63ed5f0dd12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_52494dd0cc9969c40e6c0b62d9dd71c10b11b0813818299fe77b84e0b808d9e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52494dd0cc9969c40e6c0b62d9dd71c10b11b0813818299fe77b84e0b808d9e6->enter($__internal_52494dd0cc9969c40e6c0b62d9dd71c10b11b0813818299fe77b84e0b808d9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75db77ff811420bb28db3733bb139c7b4349020873907046be5b63ed5f0dd12f->leave($__internal_75db77ff811420bb28db3733bb139c7b4349020873907046be5b63ed5f0dd12f_prof);

        
        $__internal_52494dd0cc9969c40e6c0b62d9dd71c10b11b0813818299fe77b84e0b808d9e6->leave($__internal_52494dd0cc9969c40e6c0b62d9dd71c10b11b0813818299fe77b84e0b808d9e6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80e1722d909d0ee53cd8acf1efc41f7fa25ff12795500c2423f0c59954aaa3fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e1722d909d0ee53cd8acf1efc41f7fa25ff12795500c2423f0c59954aaa3fb->enter($__internal_80e1722d909d0ee53cd8acf1efc41f7fa25ff12795500c2423f0c59954aaa3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4989991a1929015e3a74a08f489632d0aeff03a1845fdcf4dfef7c1eadf83d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4989991a1929015e3a74a08f489632d0aeff03a1845fdcf4dfef7c1eadf83d47->enter($__internal_4989991a1929015e3a74a08f489632d0aeff03a1845fdcf4dfef7c1eadf83d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_4989991a1929015e3a74a08f489632d0aeff03a1845fdcf4dfef7c1eadf83d47->leave($__internal_4989991a1929015e3a74a08f489632d0aeff03a1845fdcf4dfef7c1eadf83d47_prof);

        
        $__internal_80e1722d909d0ee53cd8acf1efc41f7fa25ff12795500c2423f0c59954aaa3fb->leave($__internal_80e1722d909d0ee53cd8acf1efc41f7fa25ff12795500c2423f0c59954aaa3fb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
