<?php

/* :client:show.html.twig */
class __TwigTemplate_3b9c0c90dcaee36f6ba07467527f78c1b8dba8e2c02626408a036814c5fe338b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:show.html.twig", 1);
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
        $__internal_86aee7b5d05a5a7674329b4c5100de8a21cb461efa512bc96d03e50afee2bc7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86aee7b5d05a5a7674329b4c5100de8a21cb461efa512bc96d03e50afee2bc7f->enter($__internal_86aee7b5d05a5a7674329b4c5100de8a21cb461efa512bc96d03e50afee2bc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:show.html.twig"));

        $__internal_276aad71845543d6926ecdd83b23348ab55321af20527b6c9202eeb3671fcc29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276aad71845543d6926ecdd83b23348ab55321af20527b6c9202eeb3671fcc29->enter($__internal_276aad71845543d6926ecdd83b23348ab55321af20527b6c9202eeb3671fcc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86aee7b5d05a5a7674329b4c5100de8a21cb461efa512bc96d03e50afee2bc7f->leave($__internal_86aee7b5d05a5a7674329b4c5100de8a21cb461efa512bc96d03e50afee2bc7f_prof);

        
        $__internal_276aad71845543d6926ecdd83b23348ab55321af20527b6c9202eeb3671fcc29->leave($__internal_276aad71845543d6926ecdd83b23348ab55321af20527b6c9202eeb3671fcc29_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3578fd01c9e43f3ede6ea58c9cf6f795a9d1f4e64144b216b7667931e73ae4fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3578fd01c9e43f3ede6ea58c9cf6f795a9d1f4e64144b216b7667931e73ae4fd->enter($__internal_3578fd01c9e43f3ede6ea58c9cf6f795a9d1f4e64144b216b7667931e73ae4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6610e44becbc1fee006caa3cad44547d9c7bc035f0dcad5e0533e2e2556ede01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6610e44becbc1fee006caa3cad44547d9c7bc035f0dcad5e0533e2e2556ede01->enter($__internal_6610e44becbc1fee006caa3cad44547d9c7bc035f0dcad5e0533e2e2556ede01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numpiece</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 14, $this->getSourceContext()); })()), "numpiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomcomplet</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 18, $this->getSourceContext()); })()), "nomComplet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 22, $this->getSourceContext()); })()), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 26, $this->getSourceContext()); })()), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 30, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 40, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 43, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 45, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6610e44becbc1fee006caa3cad44547d9c7bc035f0dcad5e0533e2e2556ede01->leave($__internal_6610e44becbc1fee006caa3cad44547d9c7bc035f0dcad5e0533e2e2556ede01_prof);

        
        $__internal_3578fd01c9e43f3ede6ea58c9cf6f795a9d1f4e64144b216b7667931e73ae4fd->leave($__internal_3578fd01c9e43f3ede6ea58c9cf6f795a9d1f4e64144b216b7667931e73ae4fd_prof);

    }

    public function getTemplateName()
    {
        return ":client:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  114 => 43,  108 => 40,  102 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Client</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ client.id }}</td>
            </tr>
            <tr>
                <th>Numpiece</th>
                <td>{{ client.numpiece }}</td>
            </tr>
            <tr>
                <th>Nomcomplet</th>
                <td>{{ client.nomComplet }}</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>{{ client.tel }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ client.adresse }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ client.email }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('client_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('client_edit', { 'id': client.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":client:show.html.twig", "/var/www/html/projet00000/app/Resources/views/client/show.html.twig");
    }
}
