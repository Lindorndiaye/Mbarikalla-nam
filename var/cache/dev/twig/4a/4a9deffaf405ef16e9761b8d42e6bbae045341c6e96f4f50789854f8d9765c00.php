<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ae38a88d83c1083708e163032df406961bf94125b1e2f262900dfc8dd8820af0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_500a7233b22472b4630697b2468482c5698a541865af322ec37a530a455cd95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500a7233b22472b4630697b2468482c5698a541865af322ec37a530a455cd95c->enter($__internal_500a7233b22472b4630697b2468482c5698a541865af322ec37a530a455cd95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_172fc58a29ccc30985a1212d1554e6b913112f45d971899d378b5da23b797f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172fc58a29ccc30985a1212d1554e6b913112f45d971899d378b5da23b797f49->enter($__internal_172fc58a29ccc30985a1212d1554e6b913112f45d971899d378b5da23b797f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_500a7233b22472b4630697b2468482c5698a541865af322ec37a530a455cd95c->leave($__internal_500a7233b22472b4630697b2468482c5698a541865af322ec37a530a455cd95c_prof);

        
        $__internal_172fc58a29ccc30985a1212d1554e6b913112f45d971899d378b5da23b797f49->leave($__internal_172fc58a29ccc30985a1212d1554e6b913112f45d971899d378b5da23b797f49_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f06571e904eb547e51f4347329599e09e826606b8270bbc5f4a591a5c6684619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06571e904eb547e51f4347329599e09e826606b8270bbc5f4a591a5c6684619->enter($__internal_f06571e904eb547e51f4347329599e09e826606b8270bbc5f4a591a5c6684619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_05d267b662b5b69c4a2978a763259de33ee1a2311c862a5798c689ec41bb3f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d267b662b5b69c4a2978a763259de33ee1a2311c862a5798c689ec41bb3f5f->enter($__internal_05d267b662b5b69c4a2978a763259de33ee1a2311c862a5798c689ec41bb3f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_05d267b662b5b69c4a2978a763259de33ee1a2311c862a5798c689ec41bb3f5f->leave($__internal_05d267b662b5b69c4a2978a763259de33ee1a2311c862a5798c689ec41bb3f5f_prof);

        
        $__internal_f06571e904eb547e51f4347329599e09e826606b8270bbc5f4a591a5c6684619->leave($__internal_f06571e904eb547e51f4347329599e09e826606b8270bbc5f4a591a5c6684619_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
