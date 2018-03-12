<?php

/* :paiement:show.html.twig */
class __TwigTemplate_7dba3108ab21cba18020f82a171380c356d6ebc44de92fd29479975da695bf62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":paiement:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_824d09e3693fb52450d68e0bac327b952ddcde74c530fe6e087850048bddc2f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_824d09e3693fb52450d68e0bac327b952ddcde74c530fe6e087850048bddc2f4->enter($__internal_824d09e3693fb52450d68e0bac327b952ddcde74c530fe6e087850048bddc2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:show.html.twig"));

        $__internal_750c11705274354b48c2a280d6366f50dd0156bdefa46e727424eb6690d7083a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750c11705274354b48c2a280d6366f50dd0156bdefa46e727424eb6690d7083a->enter($__internal_750c11705274354b48c2a280d6366f50dd0156bdefa46e727424eb6690d7083a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_824d09e3693fb52450d68e0bac327b952ddcde74c530fe6e087850048bddc2f4->leave($__internal_824d09e3693fb52450d68e0bac327b952ddcde74c530fe6e087850048bddc2f4_prof);

        
        $__internal_750c11705274354b48c2a280d6366f50dd0156bdefa46e727424eb6690d7083a->leave($__internal_750c11705274354b48c2a280d6366f50dd0156bdefa46e727424eb6690d7083a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a98e50e61bf297e1434d0fbdcad2f14715d1e258aa5271b6a2250ea8ba2e8c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98e50e61bf297e1434d0fbdcad2f14715d1e258aa5271b6a2250ea8ba2e8c80->enter($__internal_a98e50e61bf297e1434d0fbdcad2f14715d1e258aa5271b6a2250ea8ba2e8c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7eff5c70810895b71881d40df3fe9c4d872d447427e1c5f989a950baa6a0894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7eff5c70810895b71881d40df3fe9c4d872d447427e1c5f989a950baa6a0894->enter($__internal_b7eff5c70810895b71881d40df3fe9c4d872d447427e1c5f989a950baa6a0894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Paiement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new Twig_Error_Runtime('Variable "paiement" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datepaiement</th>
                <td>";
        // line 14
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new Twig_Error_Runtime('Variable "paiement" does not exist.', 14, $this->getSourceContext()); })()), "datePaiement", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new Twig_Error_Runtime('Variable "paiement" does not exist.', 14, $this->getSourceContext()); })()), "datePaiement", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new Twig_Error_Runtime('Variable "paiement" does not exist.', 18, $this->getSourceContext()); })()), "montant", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new Twig_Error_Runtime('Variable "paiement" does not exist.', 28, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 31, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 33, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b7eff5c70810895b71881d40df3fe9c4d872d447427e1c5f989a950baa6a0894->leave($__internal_b7eff5c70810895b71881d40df3fe9c4d872d447427e1c5f989a950baa6a0894_prof);

        
        $__internal_a98e50e61bf297e1434d0fbdcad2f14715d1e258aa5271b6a2250ea8ba2e8c80->leave($__internal_a98e50e61bf297e1434d0fbdcad2f14715d1e258aa5271b6a2250ea8ba2e8c80_prof);

    }

    public function getTemplateName()
    {
        return ":paiement:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  95 => 31,  89 => 28,  83 => 25,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Paiement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ paiement.id }}</td>
            </tr>
            <tr>
                <th>Datepaiement</th>
                <td>{% if paiement.datePaiement %}{{ paiement.datePaiement|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>{{ paiement.montant }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('paiement_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('paiement_edit', { 'id': paiement.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":paiement:show.html.twig", "/var/www/html/projet00000/app/Resources/views/paiement/show.html.twig");
    }
}
