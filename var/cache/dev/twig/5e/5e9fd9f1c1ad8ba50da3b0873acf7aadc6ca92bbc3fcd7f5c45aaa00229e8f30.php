<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ee4813555887a93e0b877a1927fe5c22461cb2a8a5baf0d4db2f83aa0d7944b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_a96c32162a116f06405de02b22fcdeb955c242959ff8bb0f42c7a47e784546d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96c32162a116f06405de02b22fcdeb955c242959ff8bb0f42c7a47e784546d9->enter($__internal_a96c32162a116f06405de02b22fcdeb955c242959ff8bb0f42c7a47e784546d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_cb15587eb5a57241dec6a2f39e32e31e2bb3906d03b2e9dfb945989a8ec32bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb15587eb5a57241dec6a2f39e32e31e2bb3906d03b2e9dfb945989a8ec32bf9->enter($__internal_cb15587eb5a57241dec6a2f39e32e31e2bb3906d03b2e9dfb945989a8ec32bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a96c32162a116f06405de02b22fcdeb955c242959ff8bb0f42c7a47e784546d9->leave($__internal_a96c32162a116f06405de02b22fcdeb955c242959ff8bb0f42c7a47e784546d9_prof);

        
        $__internal_cb15587eb5a57241dec6a2f39e32e31e2bb3906d03b2e9dfb945989a8ec32bf9->leave($__internal_cb15587eb5a57241dec6a2f39e32e31e2bb3906d03b2e9dfb945989a8ec32bf9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df8b60b1583b38a744cf20ca2914f4e95cbc43bfd2bfbbbfc00d53077cfa3df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8b60b1583b38a744cf20ca2914f4e95cbc43bfd2bfbbbfc00d53077cfa3df1->enter($__internal_df8b60b1583b38a744cf20ca2914f4e95cbc43bfd2bfbbbfc00d53077cfa3df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e22d5755d374326508f266a07265d69666c406633011e8b656fcb0750eaa2e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22d5755d374326508f266a07265d69666c406633011e8b656fcb0750eaa2e9f->enter($__internal_e22d5755d374326508f266a07265d69666c406633011e8b656fcb0750eaa2e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e22d5755d374326508f266a07265d69666c406633011e8b656fcb0750eaa2e9f->leave($__internal_e22d5755d374326508f266a07265d69666c406633011e8b656fcb0750eaa2e9f_prof);

        
        $__internal_df8b60b1583b38a744cf20ca2914f4e95cbc43bfd2bfbbbfc00d53077cfa3df1->leave($__internal_df8b60b1583b38a744cf20ca2914f4e95cbc43bfd2bfbbbfc00d53077cfa3df1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
