<?php

/* :proprietaire:index.html.twig */
class __TwigTemplate_5aedbc6556131b8cac7cfb20c279d980454dab8ecf5c34f4f6ccb41f84959ab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":proprietaire:index.html.twig", 1);
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
        $__internal_14045156def4b44666d3af0634c675e207f821e0fada2d4fd8d48769e01e25eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14045156def4b44666d3af0634c675e207f821e0fada2d4fd8d48769e01e25eb->enter($__internal_14045156def4b44666d3af0634c675e207f821e0fada2d4fd8d48769e01e25eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:index.html.twig"));

        $__internal_f8ab0434b691f1a0da235e53c82a9dc7c459880fe0a5328acbdeca139de44128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ab0434b691f1a0da235e53c82a9dc7c459880fe0a5328acbdeca139de44128->enter($__internal_f8ab0434b691f1a0da235e53c82a9dc7c459880fe0a5328acbdeca139de44128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14045156def4b44666d3af0634c675e207f821e0fada2d4fd8d48769e01e25eb->leave($__internal_14045156def4b44666d3af0634c675e207f821e0fada2d4fd8d48769e01e25eb_prof);

        
        $__internal_f8ab0434b691f1a0da235e53c82a9dc7c459880fe0a5328acbdeca139de44128->leave($__internal_f8ab0434b691f1a0da235e53c82a9dc7c459880fe0a5328acbdeca139de44128_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea96bb66c35fd0d88a443bf60e6d09964f1e8ef7dcb3a61a42b6d720b5681530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea96bb66c35fd0d88a443bf60e6d09964f1e8ef7dcb3a61a42b6d720b5681530->enter($__internal_ea96bb66c35fd0d88a443bf60e6d09964f1e8ef7dcb3a61a42b6d720b5681530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2925ef33252fd4d87ccc4510d600e3a1bbf3edf5d2eb6adb20766c76895c68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2925ef33252fd4d87ccc4510d600e3a1bbf3edf5d2eb6adb20766c76895c68f->enter($__internal_d2925ef33252fd4d87ccc4510d600e3a1bbf3edf5d2eb6adb20766c76895c68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proprietaires list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numpiece</th>
                <th>Nomcomplet</th>
                <th>Adresse</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Comptebancaire</th>
                <th>Prixpropritaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proprietaires"]) || array_key_exists("proprietaires", $context) ? $context["proprietaires"] : (function () { throw new Twig_Error_Runtime('Variable "proprietaires" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["proprietaire"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "numpiece", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "nomcomplet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "comptebancaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "prixPropritaire", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proprietaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_new");
        echo "\">Create a new proprietaire</a>
        </li>
    </ul>
";
        
        $__internal_d2925ef33252fd4d87ccc4510d600e3a1bbf3edf5d2eb6adb20766c76895c68f->leave($__internal_d2925ef33252fd4d87ccc4510d600e3a1bbf3edf5d2eb6adb20766c76895c68f_prof);

        
        $__internal_ea96bb66c35fd0d88a443bf60e6d09964f1e8ef7dcb3a61a42b6d720b5681530->leave($__internal_ea96bb66c35fd0d88a443bf60e6d09964f1e8ef7dcb3a61a42b6d720b5681530_prof);

    }

    public function getTemplateName()
    {
        return ":proprietaire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  130 => 43,  118 => 37,  112 => 34,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  75 => 23,  72 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Proprietaires list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numpiece</th>
                <th>Nomcomplet</th>
                <th>Adresse</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Comptebancaire</th>
                <th>Prixpropritaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for proprietaire in proprietaires %}
            <tr>
                <td><a href=\"{{ path('proprietaire_show', { 'id': proprietaire.id }) }}\">{{ proprietaire.id }}</a></td>
                <td>{{ proprietaire.numpiece }}</td>
                <td>{{ proprietaire.nomcomplet }}</td>
                <td>{{ proprietaire.adresse }}</td>
                <td>{{ proprietaire.tel }}</td>
                <td>{{ proprietaire.email }}</td>
                <td>{{ proprietaire.comptebancaire }}</td>
                <td>{{ proprietaire.prixPropritaire }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('proprietaire_show', { 'id': proprietaire.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('proprietaire_edit', { 'id': proprietaire.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('proprietaire_new') }}\">Create a new proprietaire</a>
        </li>
    </ul>
{% endblock %}
", ":proprietaire:index.html.twig", "/var/www/html/projet00000/app/Resources/views/proprietaire/index.html.twig");
    }
}
