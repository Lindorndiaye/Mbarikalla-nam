<?php

/* KEURGUIimmoBundle:front:affiche.html.twig */
class __TwigTemplate_071d076d9b248f4811ce137158d31b3174b5420490951915cee463e9ab14f665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@KEURGUIimmo/layout.html.twig", "KEURGUIimmoBundle:front:affiche.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'style' => array($this, 'block_style'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@KEURGUIimmo/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7346c90a69286f78a2f38bf3cf528cf2648380eb6d1efc668fed7aa9f122979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7346c90a69286f78a2f38bf3cf528cf2648380eb6d1efc668fed7aa9f122979->enter($__internal_e7346c90a69286f78a2f38bf3cf528cf2648380eb6d1efc668fed7aa9f122979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:affiche.html.twig"));

        $__internal_f08a36b3b7842713d2180b322922dbb251107a12be04db21c7aacb2306e3ead5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08a36b3b7842713d2180b322922dbb251107a12be04db21c7aacb2306e3ead5->enter($__internal_f08a36b3b7842713d2180b322922dbb251107a12be04db21c7aacb2306e3ead5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7346c90a69286f78a2f38bf3cf528cf2648380eb6d1efc668fed7aa9f122979->leave($__internal_e7346c90a69286f78a2f38bf3cf528cf2648380eb6d1efc668fed7aa9f122979_prof);

        
        $__internal_f08a36b3b7842713d2180b322922dbb251107a12be04db21c7aacb2306e3ead5->leave($__internal_f08a36b3b7842713d2180b322922dbb251107a12be04db21c7aacb2306e3ead5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8453506fc190797da329f45b6431712d62a6a851cda3738caaf318b29d415b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8453506fc190797da329f45b6431712d62a6a851cda3738caaf318b29d415b8->enter($__internal_d8453506fc190797da329f45b6431712d62a6a851cda3738caaf318b29d415b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c1a1368ceb68cd2859ca3974ec4734d6ae2b36702d15cab53dbef65bf7345fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1a1368ceb68cd2859ca3974ec4734d6ae2b36702d15cab53dbef65bf7345fd->enter($__internal_0c1a1368ceb68cd2859ca3974ec4734d6ae2b36702d15cab53dbef65bf7345fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "  
";
        // line 9
        $this->displayBlock('style', $context, $blocks);
        // line 18
        echo " 
<div class=\"row\">

";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new Twig_Error_Runtime('Variable "x" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["use"]) {
            // line 22
            echo "<div class=\"col-md-4\">
<div class=\"container\">
 <div class=\"card\" style=\"width:300px\">
      ";
            // line 25
            $context["c"] = 0;
            // line 26
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "image", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 27
                echo "    ";
                if (((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 27, $this->getSourceContext()); })()) == 0)) {
                    // line 28
                    echo "       <td scope=\"col\" class=\"table-info\">  <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
                    echo "\" class=\"img-circle\" alt=\"Leanna!\"></td>
       ";
                    // line 29
                    $context["c"] = ((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 29, $this->getSourceContext()); })()) + 1);
                    echo " 
         ";
                }
                // line 31
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
         <div class=\"card-body\">
      <h4 class=\"card-title\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "type", array()), "nom", array()), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "nom", array()), "html", null, true);
            echo "</h4>
       <h4 class=\"card-title\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "localite", array()), "html", null, true);
            echo "</h4>

      <p >";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "description", array()), "html", null, true);
            echo "</p>
   <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "id_client"), "method"), "idb" => twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "id", array()))), "html", null, true);
            echo "\">reserver</a>
    </div>
  </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['use'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0c1a1368ceb68cd2859ca3974ec4734d6ae2b36702d15cab53dbef65bf7345fd->leave($__internal_0c1a1368ceb68cd2859ca3974ec4734d6ae2b36702d15cab53dbef65bf7345fd_prof);

        
        $__internal_d8453506fc190797da329f45b6431712d62a6a851cda3738caaf318b29d415b8->leave($__internal_d8453506fc190797da329f45b6431712d62a6a851cda3738caaf318b29d415b8_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_8426a7e7e02fa5f9072c2138a768b8252c285373d35320548887fb5ce453c520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8426a7e7e02fa5f9072c2138a768b8252c285373d35320548887fb5ce453c520->enter($__internal_8426a7e7e02fa5f9072c2138a768b8252c285373d35320548887fb5ce453c520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f0fbc60d719335b95da60f7ab7b5338940cd2e7b00bcc08e08b8be384516dc19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fbc60d719335b95da60f7ab7b5338940cd2e7b00bcc08e08b8be384516dc19->enter($__internal_f0fbc60d719335b95da60f7ab7b5338940cd2e7b00bcc08e08b8be384516dc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_f0fbc60d719335b95da60f7ab7b5338940cd2e7b00bcc08e08b8be384516dc19->leave($__internal_f0fbc60d719335b95da60f7ab7b5338940cd2e7b00bcc08e08b8be384516dc19_prof);

        
        $__internal_8426a7e7e02fa5f9072c2138a768b8252c285373d35320548887fb5ce453c520->leave($__internal_8426a7e7e02fa5f9072c2138a768b8252c285373d35320548887fb5ce453c520_prof);

    }

    // line 9
    public function block_style($context, array $blocks = array())
    {
        $__internal_a6c33ae07f15d4924ec673635ceac4b415bee49b229d3dcdfd0ca8f20d80f105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c33ae07f15d4924ec673635ceac4b415bee49b229d3dcdfd0ca8f20d80f105->enter($__internal_a6c33ae07f15d4924ec673635ceac4b415bee49b229d3dcdfd0ca8f20d80f105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_b6a472d6f9e749f6cf1fe02991d69de1740c6702fb88b31e113cd46adf960d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a472d6f9e749f6cf1fe02991d69de1740c6702fb88b31e113cd46adf960d19->enter($__internal_b6a472d6f9e749f6cf1fe02991d69de1740c6702fb88b31e113cd46adf960d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 10
        echo "<style>

img{
  width:300px;
}

</style>
";
        
        $__internal_b6a472d6f9e749f6cf1fe02991d69de1740c6702fb88b31e113cd46adf960d19->leave($__internal_b6a472d6f9e749f6cf1fe02991d69de1740c6702fb88b31e113cd46adf960d19_prof);

        
        $__internal_a6c33ae07f15d4924ec673635ceac4b415bee49b229d3dcdfd0ca8f20d80f105->leave($__internal_a6c33ae07f15d4924ec673635ceac4b415bee49b229d3dcdfd0ca8f20d80f105_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 10,  157 => 9,  145 => 6,  136 => 5,  116 => 37,  112 => 36,  107 => 34,  101 => 33,  92 => 31,  87 => 29,  82 => 28,  79 => 27,  74 => 26,  72 => 25,  67 => 22,  63 => 21,  58 => 18,  56 => 9,  53 => 8,  51 => 5,  42 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@KEURGUIimmo/layout.html.twig\" %}


{% block body %}
{% block header %}
{{parent()}}
{% endblock %}
  
{% block style %}
<style>

img{
  width:300px;
}

</style>
{% endblock %}
 
<div class=\"row\">

{% for use in x %}
<div class=\"col-md-4\">
<div class=\"container\">
 <div class=\"card\" style=\"width:300px\">
      {% set c = 0 %}
  {% for i in use.image %}
    {% if c == 0 %}
       <td scope=\"col\" class=\"table-info\">  <img src=\"{{ asset('images/'~i.image) }}\" class=\"img-circle\" alt=\"Leanna!\"></td>
       {% set c = c+ 1 %} 
         {% endif %}
  {% endfor %} 
         <div class=\"card-body\">
      <h4 class=\"card-title\">{{ use.type.nom }}:{{use.nom }}</h4>
       <h4 class=\"card-title\">{{use.localite }}</h4>

      <p >{{use.description }}</p>
   <a href=\"{{path('reserver',{'id':app.session.get('id_client') ,'idb':use.id})}}\">reserver</a>
    </div>
  </div>
    </div>
  </div>
{% endfor %}
{% endblock %}
", "KEURGUIimmoBundle:front:affiche.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/affiche.html.twig");
    }
}
