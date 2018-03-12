<?php

/* KEURGUIimmoBundle::layOut.html.twig */
class __TwigTemplate_2d967fa0832f1c872ecb5650ccd1b7dfa5123064057f7f312e5d033dc57c369a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "KEURGUIimmoBundle::layOut.html.twig", 1);
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
        $__internal_8cea5583768669c94979ae03247b0933f22e90d476183aef415df14e778db836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cea5583768669c94979ae03247b0933f22e90d476183aef415df14e778db836->enter($__internal_8cea5583768669c94979ae03247b0933f22e90d476183aef415df14e778db836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::layOut.html.twig"));

        $__internal_ec628cb9776a3bb96a604799cad0942cfd779c701fbb81e6542a625e697d4cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec628cb9776a3bb96a604799cad0942cfd779c701fbb81e6542a625e697d4cfa->enter($__internal_ec628cb9776a3bb96a604799cad0942cfd779c701fbb81e6542a625e697d4cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::layOut.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cea5583768669c94979ae03247b0933f22e90d476183aef415df14e778db836->leave($__internal_8cea5583768669c94979ae03247b0933f22e90d476183aef415df14e778db836_prof);

        
        $__internal_ec628cb9776a3bb96a604799cad0942cfd779c701fbb81e6542a625e697d4cfa->leave($__internal_ec628cb9776a3bb96a604799cad0942cfd779c701fbb81e6542a625e697d4cfa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c029941e0234932af5b7d75b356fcd4f590faaf399610f3adc66f6085c3eb65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c029941e0234932af5b7d75b356fcd4f590faaf399610f3adc66f6085c3eb65->enter($__internal_3c029941e0234932af5b7d75b356fcd4f590faaf399610f3adc66f6085c3eb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e2d084e6be05ce5c4a888f6e152c34e47d5fce0354899ad47622d6c15e183ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e2d084e6be05ce5c4a888f6e152c34e47d5fce0354899ad47622d6c15e183ed->enter($__internal_1e2d084e6be05ce5c4a888f6e152c34e47d5fce0354899ad47622d6c15e183ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Biens list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombien</th>
                <th>Etat</th>
                <th>Description</th>
                <th>Prixlocation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "nomBien", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "etat", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "prixLocation", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_new");
        echo "\">Create a new bien</a>
        </li>
    </ul>
";
        
        $__internal_1e2d084e6be05ce5c4a888f6e152c34e47d5fce0354899ad47622d6c15e183ed->leave($__internal_1e2d084e6be05ce5c4a888f6e152c34e47d5fce0354899ad47622d6c15e183ed_prof);

        
        $__internal_3c029941e0234932af5b7d75b356fcd4f590faaf399610f3adc66f6085c3eb65->leave($__internal_3c029941e0234932af5b7d75b356fcd4f590faaf399610f3adc66f6085c3eb65_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle::layOut.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  119 => 37,  107 => 31,  101 => 28,  94 => 24,  90 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Biens list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombien</th>
                <th>Etat</th>
                <th>Description</th>
                <th>Prixlocation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for bien in biens %}
            <tr>
                <td><a href=\"{{ path('bien_show', { 'id': bien.id }) }}\">{{ bien.id }}</a></td>
                <td>{{ bien.nomBien }}</td>
                <td>{% if bien.etat %}Yes{% else %}No{% endif %}</td>
                <td>{{ bien.description }}</td>
                <td>{{ bien.prixLocation }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('bien_show', { 'id': bien.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('bien_edit', { 'id': bien.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('bien_new') }}\">Create a new bien</a>
        </li>
    </ul>
{% endblock %}
", "KEURGUIimmoBundle::layOut.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/layOut.html.twig");
    }
}
