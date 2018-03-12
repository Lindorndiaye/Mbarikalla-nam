<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_f6b45a1c4fcb7a9677879011515d7e1c9870fd855ae16417891524b255662481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a39b8ed0cf92133d832981eda8ea83ba848fa11cd8644ca403a6406cd3e9c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a39b8ed0cf92133d832981eda8ea83ba848fa11cd8644ca403a6406cd3e9c22->enter($__internal_3a39b8ed0cf92133d832981eda8ea83ba848fa11cd8644ca403a6406cd3e9c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_b490bcc798fe9fd0002bffa0168f242de417eddedaff53f3095358dda11ea182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b490bcc798fe9fd0002bffa0168f242de417eddedaff53f3095358dda11ea182->enter($__internal_b490bcc798fe9fd0002bffa0168f242de417eddedaff53f3095358dda11ea182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_3a39b8ed0cf92133d832981eda8ea83ba848fa11cd8644ca403a6406cd3e9c22->leave($__internal_3a39b8ed0cf92133d832981eda8ea83ba848fa11cd8644ca403a6406cd3e9c22_prof);

        
        $__internal_b490bcc798fe9fd0002bffa0168f242de417eddedaff53f3095358dda11ea182->leave($__internal_b490bcc798fe9fd0002bffa0168f242de417eddedaff53f3095358dda11ea182_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
