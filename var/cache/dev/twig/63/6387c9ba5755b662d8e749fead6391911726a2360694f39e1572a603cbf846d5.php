<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_5461990a16858af85a6a953f5b94a4ed8dd6b4bd56b55a68f88c470a555a6a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_65209672ad644ffafbf88c16a875cb31fb0e65f57c94e3601fdacd9782c0f57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65209672ad644ffafbf88c16a875cb31fb0e65f57c94e3601fdacd9782c0f57c->enter($__internal_65209672ad644ffafbf88c16a875cb31fb0e65f57c94e3601fdacd9782c0f57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_04ec9e499ae775e83220538d7db936be2372ba31fc3a7e808066501813dd9d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ec9e499ae775e83220538d7db936be2372ba31fc3a7e808066501813dd9d6e->enter($__internal_04ec9e499ae775e83220538d7db936be2372ba31fc3a7e808066501813dd9d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65209672ad644ffafbf88c16a875cb31fb0e65f57c94e3601fdacd9782c0f57c->leave($__internal_65209672ad644ffafbf88c16a875cb31fb0e65f57c94e3601fdacd9782c0f57c_prof);

        
        $__internal_04ec9e499ae775e83220538d7db936be2372ba31fc3a7e808066501813dd9d6e->leave($__internal_04ec9e499ae775e83220538d7db936be2372ba31fc3a7e808066501813dd9d6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0ea36adc171c288e3eadfa863f69fc1ab2f9db2d13c679cab5996a40e51fcd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ea36adc171c288e3eadfa863f69fc1ab2f9db2d13c679cab5996a40e51fcd5->enter($__internal_c0ea36adc171c288e3eadfa863f69fc1ab2f9db2d13c679cab5996a40e51fcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2eac98d773bb16f6cdd6086c6b2b68882bbe933833ecb2be48aa1dba03f3c6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eac98d773bb16f6cdd6086c6b2b68882bbe933833ecb2be48aa1dba03f3c6ee->enter($__internal_2eac98d773bb16f6cdd6086c6b2b68882bbe933833ecb2be48aa1dba03f3c6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2eac98d773bb16f6cdd6086c6b2b68882bbe933833ecb2be48aa1dba03f3c6ee->leave($__internal_2eac98d773bb16f6cdd6086c6b2b68882bbe933833ecb2be48aa1dba03f3c6ee_prof);

        
        $__internal_c0ea36adc171c288e3eadfa863f69fc1ab2f9db2d13c679cab5996a40e51fcd5->leave($__internal_c0ea36adc171c288e3eadfa863f69fc1ab2f9db2d13c679cab5996a40e51fcd5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
