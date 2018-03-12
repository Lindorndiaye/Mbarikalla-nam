<?php

/* :reservation:show.html.twig */
class __TwigTemplate_74a21c80947038defb15a9b25913cf9218d2641d4cff01f69900785a9b3e7ace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:show.html.twig", 1);
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
        $__internal_3f1c623843c5ff935865cd18e1f39e317a5daa4c04fa7da431001d7a0fc2bed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f1c623843c5ff935865cd18e1f39e317a5daa4c04fa7da431001d7a0fc2bed1->enter($__internal_3f1c623843c5ff935865cd18e1f39e317a5daa4c04fa7da431001d7a0fc2bed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:show.html.twig"));

        $__internal_b5c7279ee2f73f0d5f43fbd756ca711ee3768cabe02f0b536eede805f57aacd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c7279ee2f73f0d5f43fbd756ca711ee3768cabe02f0b536eede805f57aacd6->enter($__internal_b5c7279ee2f73f0d5f43fbd756ca711ee3768cabe02f0b536eede805f57aacd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f1c623843c5ff935865cd18e1f39e317a5daa4c04fa7da431001d7a0fc2bed1->leave($__internal_3f1c623843c5ff935865cd18e1f39e317a5daa4c04fa7da431001d7a0fc2bed1_prof);

        
        $__internal_b5c7279ee2f73f0d5f43fbd756ca711ee3768cabe02f0b536eede805f57aacd6->leave($__internal_b5c7279ee2f73f0d5f43fbd756ca711ee3768cabe02f0b536eede805f57aacd6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_87f2d7070c373a6fc6cd03c1e79a615f1cd8f89f5b894f70333114c07e02e751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f2d7070c373a6fc6cd03c1e79a615f1cd8f89f5b894f70333114c07e02e751->enter($__internal_87f2d7070c373a6fc6cd03c1e79a615f1cd8f89f5b894f70333114c07e02e751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ca417ab706e92114f6443220f661e9fa81ad05ed85d174c06be4c63af9fbd31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca417ab706e92114f6443220f661e9fa81ad05ed85d174c06be4c63af9fbd31->enter($__internal_9ca417ab706e92114f6443220f661e9fa81ad05ed85d174c06be4c63af9fbd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datereservation</th>
                <td>";
        // line 14
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 14, $this->getSourceContext()); })()), "datereservation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 14, $this->getSourceContext()); })()), "datereservation", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 18, $this->getSourceContext()); })()), "etat", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 28, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
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
        
        $__internal_9ca417ab706e92114f6443220f661e9fa81ad05ed85d174c06be4c63af9fbd31->leave($__internal_9ca417ab706e92114f6443220f661e9fa81ad05ed85d174c06be4c63af9fbd31_prof);

        
        $__internal_87f2d7070c373a6fc6cd03c1e79a615f1cd8f89f5b894f70333114c07e02e751->leave($__internal_87f2d7070c373a6fc6cd03c1e79a615f1cd8f89f5b894f70333114c07e02e751_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 33,  99 => 31,  93 => 28,  87 => 25,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reservation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reservation.id }}</td>
            </tr>
            <tr>
                <th>Datereservation</th>
                <td>{% if reservation.datereservation %}{{ reservation.datereservation|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{% if reservation.etat %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('reservation_edit', { 'id': reservation.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":reservation:show.html.twig", "/var/www/html/projet00000/app/Resources/views/reservation/show.html.twig");
    }
}
