<?php

/* :image:index.html.twig */
class __TwigTemplate_cd1df3e748f2b7eb7050a1da403efa02c2cc21d252fcacf2713d80619065a139 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":image:index.html.twig", 1);
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
        $__internal_f0528f6c006cb578380b42b73c6976ea443734c5f09c7ee55347157439fa9f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0528f6c006cb578380b42b73c6976ea443734c5f09c7ee55347157439fa9f5d->enter($__internal_f0528f6c006cb578380b42b73c6976ea443734c5f09c7ee55347157439fa9f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:index.html.twig"));

        $__internal_f402b3a42d59dedca4aa01cd82562cac6501e32b153c717c5abed7a1ade6d69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f402b3a42d59dedca4aa01cd82562cac6501e32b153c717c5abed7a1ade6d69c->enter($__internal_f402b3a42d59dedca4aa01cd82562cac6501e32b153c717c5abed7a1ade6d69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0528f6c006cb578380b42b73c6976ea443734c5f09c7ee55347157439fa9f5d->leave($__internal_f0528f6c006cb578380b42b73c6976ea443734c5f09c7ee55347157439fa9f5d_prof);

        
        $__internal_f402b3a42d59dedca4aa01cd82562cac6501e32b153c717c5abed7a1ade6d69c->leave($__internal_f402b3a42d59dedca4aa01cd82562cac6501e32b153c717c5abed7a1ade6d69c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26f5ce6411f2aa2b32d5c1f230e78303ac02740604f262c6cd14031ce912c1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f5ce6411f2aa2b32d5c1f230e78303ac02740604f262c6cd14031ce912c1a2->enter($__internal_26f5ce6411f2aa2b32d5c1f230e78303ac02740604f262c6cd14031ce912c1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05517b45eba3c3e8870a15a2df3df9ca4176f8cd38ed3f0d89891ea5015a6b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05517b45eba3c3e8870a15a2df3df9ca4176f8cd38ed3f0d89891ea5015a6b98->enter($__internal_05517b45eba3c3e8870a15a2df3df9ca4176f8cd38ed3f0d89891ea5015a6b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Images list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "image", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_new");
        echo "\">Create a new image</a>
        </li>
    </ul>
";
        
        $__internal_05517b45eba3c3e8870a15a2df3df9ca4176f8cd38ed3f0d89891ea5015a6b98->leave($__internal_05517b45eba3c3e8870a15a2df3df9ca4176f8cd38ed3f0d89891ea5015a6b98_prof);

        
        $__internal_26f5ce6411f2aa2b32d5c1f230e78303ac02740604f262c6cd14031ce912c1a2->leave($__internal_26f5ce6411f2aa2b32d5c1f230e78303ac02740604f262c6cd14031ce912c1a2_prof);

    }

    public function getTemplateName()
    {
        return ":image:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Images list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for image in images %}
            <tr>
                <td><a href=\"{{ path('image_show', { 'id': image.id }) }}\">{{ image.id }}</a></td>
                <td>{{ image.image }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('image_show', { 'id': image.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('image_edit', { 'id': image.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('image_new') }}\">Create a new image</a>
        </li>
    </ul>
{% endblock %}
", ":image:index.html.twig", "/var/www/html/projet00000/app/Resources/views/image/index.html.twig");
    }
}
