<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_71bb08940775ad193551234112615539b60e8c054e0817102d08bb4e36623cf2 extends Twig_Template
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
        $__internal_c005e0682a6abb71b3506f44f7177909baa8d3234f0f253fb7a97b631a14acee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c005e0682a6abb71b3506f44f7177909baa8d3234f0f253fb7a97b631a14acee->enter($__internal_c005e0682a6abb71b3506f44f7177909baa8d3234f0f253fb7a97b631a14acee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_98e6231a0b711f606c7aecdf904f3b36e74a5fde79612d0199390afc1476dfdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e6231a0b711f606c7aecdf904f3b36e74a5fde79612d0199390afc1476dfdb->enter($__internal_98e6231a0b711f606c7aecdf904f3b36e74a5fde79612d0199390afc1476dfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_c005e0682a6abb71b3506f44f7177909baa8d3234f0f253fb7a97b631a14acee->leave($__internal_c005e0682a6abb71b3506f44f7177909baa8d3234f0f253fb7a97b631a14acee_prof);

        
        $__internal_98e6231a0b711f606c7aecdf904f3b36e74a5fde79612d0199390afc1476dfdb->leave($__internal_98e6231a0b711f606c7aecdf904f3b36e74a5fde79612d0199390afc1476dfdb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
