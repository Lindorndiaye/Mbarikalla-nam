<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ec7735b437caf91ca5b680247da50a4be5eae7835aa20dd86b0df0705d78bc21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_ccf62f5d769c8606da6910a2ff7b79065b38019fe45eb081e050dcee877ac79a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf62f5d769c8606da6910a2ff7b79065b38019fe45eb081e050dcee877ac79a->enter($__internal_ccf62f5d769c8606da6910a2ff7b79065b38019fe45eb081e050dcee877ac79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_a95fe3b3f1955cbbb49d8e2af200b9772c8bd49d1d5a77d4ed64ced752a322fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95fe3b3f1955cbbb49d8e2af200b9772c8bd49d1d5a77d4ed64ced752a322fb->enter($__internal_a95fe3b3f1955cbbb49d8e2af200b9772c8bd49d1d5a77d4ed64ced752a322fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccf62f5d769c8606da6910a2ff7b79065b38019fe45eb081e050dcee877ac79a->leave($__internal_ccf62f5d769c8606da6910a2ff7b79065b38019fe45eb081e050dcee877ac79a_prof);

        
        $__internal_a95fe3b3f1955cbbb49d8e2af200b9772c8bd49d1d5a77d4ed64ced752a322fb->leave($__internal_a95fe3b3f1955cbbb49d8e2af200b9772c8bd49d1d5a77d4ed64ced752a322fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2b02c2407ea9fc2f99e14ef858837d4035a6af40a27bc356b1e653b1b791c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b02c2407ea9fc2f99e14ef858837d4035a6af40a27bc356b1e653b1b791c9f->enter($__internal_d2b02c2407ea9fc2f99e14ef858837d4035a6af40a27bc356b1e653b1b791c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_db9204ec15462e121045edc7a3bd4430bc8e455fb279baccc25ab91d6d26b433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9204ec15462e121045edc7a3bd4430bc8e455fb279baccc25ab91d6d26b433->enter($__internal_db9204ec15462e121045edc7a3bd4430bc8e455fb279baccc25ab91d6d26b433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_db9204ec15462e121045edc7a3bd4430bc8e455fb279baccc25ab91d6d26b433->leave($__internal_db9204ec15462e121045edc7a3bd4430bc8e455fb279baccc25ab91d6d26b433_prof);

        
        $__internal_d2b02c2407ea9fc2f99e14ef858837d4035a6af40a27bc356b1e653b1b791c9f->leave($__internal_d2b02c2407ea9fc2f99e14ef858837d4035a6af40a27bc356b1e653b1b791c9f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
