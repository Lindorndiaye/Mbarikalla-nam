<?php

/* :client:index.html.twig */
class __TwigTemplate_c2f6dfc8c3e9c30c9c3e05eb0d599fb040a8aed763ba9b0cc2cab7fc675b9354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:index.html.twig", 1);
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
        $__internal_050e3f6d775a55a448606a9539f0ccee980b4cdcab19b40dcfd81b5d5dae2857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050e3f6d775a55a448606a9539f0ccee980b4cdcab19b40dcfd81b5d5dae2857->enter($__internal_050e3f6d775a55a448606a9539f0ccee980b4cdcab19b40dcfd81b5d5dae2857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:index.html.twig"));

        $__internal_3ae7bbf70016af7ce598bb6afcbe1b9d39a834bd6dc13b6927f80d436b0b2514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae7bbf70016af7ce598bb6afcbe1b9d39a834bd6dc13b6927f80d436b0b2514->enter($__internal_3ae7bbf70016af7ce598bb6afcbe1b9d39a834bd6dc13b6927f80d436b0b2514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_050e3f6d775a55a448606a9539f0ccee980b4cdcab19b40dcfd81b5d5dae2857->leave($__internal_050e3f6d775a55a448606a9539f0ccee980b4cdcab19b40dcfd81b5d5dae2857_prof);

        
        $__internal_3ae7bbf70016af7ce598bb6afcbe1b9d39a834bd6dc13b6927f80d436b0b2514->leave($__internal_3ae7bbf70016af7ce598bb6afcbe1b9d39a834bd6dc13b6927f80d436b0b2514_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6be7345c608cdaf580940ae3c1453cbcecce4cc87a0587e4636a43fb3bd54a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be7345c608cdaf580940ae3c1453cbcecce4cc87a0587e4636a43fb3bd54a3f->enter($__internal_6be7345c608cdaf580940ae3c1453cbcecce4cc87a0587e4636a43fb3bd54a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3d19b983e6d157a3536c9d437067e4fb74ed7bf34e40f026406b4f9726fabd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d19b983e6d157a3536c9d437067e4fb74ed7bf34e40f026406b4f9726fabd9->enter($__internal_e3d19b983e6d157a3536c9d437067e4fb74ed7bf34e40f026406b4f9726fabd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Clients list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numpiece</th>
                <th>Nomcomplet</th>
                <th>Tel</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "numpiece", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "nomComplet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_new");
        echo "\">Create a new client</a>
        </li>
    </ul>
";
        
        $__internal_e3d19b983e6d157a3536c9d437067e4fb74ed7bf34e40f026406b4f9726fabd9->leave($__internal_e3d19b983e6d157a3536c9d437067e4fb74ed7bf34e40f026406b4f9726fabd9_prof);

        
        $__internal_6be7345c608cdaf580940ae3c1453cbcecce4cc87a0587e4636a43fb3bd54a3f->leave($__internal_6be7345c608cdaf580940ae3c1453cbcecce4cc87a0587e4636a43fb3bd54a3f_prof);

    }

    public function getTemplateName()
    {
        return ":client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  120 => 39,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Clients list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numpiece</th>
                <th>Nomcomplet</th>
                <th>Tel</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            <tr>
                <td><a href=\"{{ path('client_show', { 'id': client.id }) }}\">{{ client.id }}</a></td>
                <td>{{ client.numpiece }}</td>
                <td>{{ client.nomComplet }}</td>
                <td>{{ client.tel }}</td>
                <td>{{ client.adresse }}</td>
                <td>{{ client.email }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('client_show', { 'id': client.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('client_edit', { 'id': client.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('client_new') }}\">Create a new client</a>
        </li>
    </ul>
{% endblock %}
", ":client:index.html.twig", "/var/www/html/projet00000/app/Resources/views/client/index.html.twig");
    }
}
