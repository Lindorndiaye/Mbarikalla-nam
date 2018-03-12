<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_b32f5bf1c6606206297fb62b1f132c9653d955fc9ce101b3a012417eb2c1a397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_b561394ceb075b88605cb70d2a758bdfe7628ae97f1834356855c8b6973f523c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b561394ceb075b88605cb70d2a758bdfe7628ae97f1834356855c8b6973f523c->enter($__internal_b561394ceb075b88605cb70d2a758bdfe7628ae97f1834356855c8b6973f523c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_a7246908e42ffb0b1eddc101f3f7f5ee225f90fda0f31b6d647975509ac16b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7246908e42ffb0b1eddc101f3f7f5ee225f90fda0f31b6d647975509ac16b0f->enter($__internal_a7246908e42ffb0b1eddc101f3f7f5ee225f90fda0f31b6d647975509ac16b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b561394ceb075b88605cb70d2a758bdfe7628ae97f1834356855c8b6973f523c->leave($__internal_b561394ceb075b88605cb70d2a758bdfe7628ae97f1834356855c8b6973f523c_prof);

        
        $__internal_a7246908e42ffb0b1eddc101f3f7f5ee225f90fda0f31b6d647975509ac16b0f->leave($__internal_a7246908e42ffb0b1eddc101f3f7f5ee225f90fda0f31b6d647975509ac16b0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50c39bc44b87da85612860642dce73c6e28daec94c10f2f27cdef8e530080f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c39bc44b87da85612860642dce73c6e28daec94c10f2f27cdef8e530080f7a->enter($__internal_50c39bc44b87da85612860642dce73c6e28daec94c10f2f27cdef8e530080f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_feba02c22ea3503c49bbe1070ec47b4f53facad90ef3c9b1a761e0ca8860ae3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feba02c22ea3503c49bbe1070ec47b4f53facad90ef3c9b1a761e0ca8860ae3d->enter($__internal_feba02c22ea3503c49bbe1070ec47b4f53facad90ef3c9b1a761e0ca8860ae3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_feba02c22ea3503c49bbe1070ec47b4f53facad90ef3c9b1a761e0ca8860ae3d->leave($__internal_feba02c22ea3503c49bbe1070ec47b4f53facad90ef3c9b1a761e0ca8860ae3d_prof);

        
        $__internal_50c39bc44b87da85612860642dce73c6e28daec94c10f2f27cdef8e530080f7a->leave($__internal_50c39bc44b87da85612860642dce73c6e28daec94c10f2f27cdef8e530080f7a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
