<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_983f35d674c8d10421c504f7769687bb9b252c50c9ee65cf225eef47b979734b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_1cac214de65d114a53253119452faae554b18b1852ac1a02095ba5dca05fe588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cac214de65d114a53253119452faae554b18b1852ac1a02095ba5dca05fe588->enter($__internal_1cac214de65d114a53253119452faae554b18b1852ac1a02095ba5dca05fe588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_745af013c58d79fcaf8d8913d8ee9e72d1b376101100dd96eddc22f9bb292670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745af013c58d79fcaf8d8913d8ee9e72d1b376101100dd96eddc22f9bb292670->enter($__internal_745af013c58d79fcaf8d8913d8ee9e72d1b376101100dd96eddc22f9bb292670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cac214de65d114a53253119452faae554b18b1852ac1a02095ba5dca05fe588->leave($__internal_1cac214de65d114a53253119452faae554b18b1852ac1a02095ba5dca05fe588_prof);

        
        $__internal_745af013c58d79fcaf8d8913d8ee9e72d1b376101100dd96eddc22f9bb292670->leave($__internal_745af013c58d79fcaf8d8913d8ee9e72d1b376101100dd96eddc22f9bb292670_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a15853fbd97811ffc5399809f1cffa5c3666b718835cfc09947f72f1eba6615e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15853fbd97811ffc5399809f1cffa5c3666b718835cfc09947f72f1eba6615e->enter($__internal_a15853fbd97811ffc5399809f1cffa5c3666b718835cfc09947f72f1eba6615e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dda17c09bcfc5a1331ca871b8e91f7d18885a3837f440d9639dd6cbcd5dccaee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda17c09bcfc5a1331ca871b8e91f7d18885a3837f440d9639dd6cbcd5dccaee->enter($__internal_dda17c09bcfc5a1331ca871b8e91f7d18885a3837f440d9639dd6cbcd5dccaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_dda17c09bcfc5a1331ca871b8e91f7d18885a3837f440d9639dd6cbcd5dccaee->leave($__internal_dda17c09bcfc5a1331ca871b8e91f7d18885a3837f440d9639dd6cbcd5dccaee_prof);

        
        $__internal_a15853fbd97811ffc5399809f1cffa5c3666b718835cfc09947f72f1eba6615e->leave($__internal_a15853fbd97811ffc5399809f1cffa5c3666b718835cfc09947f72f1eba6615e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
