<?php

/* KEURGUIimmoBundle:front:reser.html.twig */
class __TwigTemplate_9af4e025e7c5a2775a98b89dafeafe71d5798defbbaecc458a8f4b59c00b5d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@KEURGUIimmo/layoutl.html.twig", "KEURGUIimmoBundle:front:reser.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'style' => array($this, 'block_style'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@KEURGUIimmo/layoutl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b451ca6334782973c3727f7c45fd8e71e2f2b0e15014c2c3f8cd4ae5a49cbe31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b451ca6334782973c3727f7c45fd8e71e2f2b0e15014c2c3f8cd4ae5a49cbe31->enter($__internal_b451ca6334782973c3727f7c45fd8e71e2f2b0e15014c2c3f8cd4ae5a49cbe31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:reser.html.twig"));

        $__internal_20a3d4ddbc726bf9ff49f55b11525e25fc547f5b90a3f44d3d1ca827a5d850d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a3d4ddbc726bf9ff49f55b11525e25fc547f5b90a3f44d3d1ca827a5d850d9->enter($__internal_20a3d4ddbc726bf9ff49f55b11525e25fc547f5b90a3f44d3d1ca827a5d850d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:reser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b451ca6334782973c3727f7c45fd8e71e2f2b0e15014c2c3f8cd4ae5a49cbe31->leave($__internal_b451ca6334782973c3727f7c45fd8e71e2f2b0e15014c2c3f8cd4ae5a49cbe31_prof);

        
        $__internal_20a3d4ddbc726bf9ff49f55b11525e25fc547f5b90a3f44d3d1ca827a5d850d9->leave($__internal_20a3d4ddbc726bf9ff49f55b11525e25fc547f5b90a3f44d3d1ca827a5d850d9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_932ee0906a2fd09316f4579e13e0b6d470b9e414309f4a1546763f26b622abe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_932ee0906a2fd09316f4579e13e0b6d470b9e414309f4a1546763f26b622abe2->enter($__internal_932ee0906a2fd09316f4579e13e0b6d470b9e414309f4a1546763f26b622abe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b312528fc32b3913e2863e8ff6309e2223ed788a7c0ce061713ef8b207c216c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b312528fc32b3913e2863e8ff6309e2223ed788a7c0ce061713ef8b207c216c1->enter($__internal_b312528fc32b3913e2863e8ff6309e2223ed788a7c0ce061713ef8b207c216c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo " <table border=1 class=\"table\" >
    <tr>
<th>nom du client</th>
<th>adresse client</th>
<th>nom du bien</th>
<th>adresse bien</th>
<th>type de bien</th>
<th>image</th>
<th>action</th>

</tr>
<tr>
";
        // line 16
        $this->displayBlock('style', $context, $blocks);
        // line 23
        echo " 
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["res"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 25
            echo "       <tr>
  
     

  <td scope=\"col\" class=\"table-info\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["res"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
          <td scope=\"col\" class=\"table-info\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["res"], "client", array()), "adresse", array()), "html", null, true);
            echo "</td>

    <td scope=\"col\" class=\"table-info\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["res"], "bien", array()), "nom", array()), "html", null, true);
            echo "</td>
        <td scope=\"col\" class=\"table-info\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["res"], "bien", array()), "localite", array()), "html", null, true);
            echo "</td>
         <td scope=\"col\" class=\"table-info\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["res"], "bien", array()), "type", array()), "html", null, true);
            echo "</td>
          <td scope=\"col\" class=\"table-info\"><img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/properties/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["res"], "bien", array()), "image", array()), 0, array(), "array"))), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"properties\"/></td>


        <td scope=\"col\" class=\"table-info\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("det", array("idb" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["res"], "bien", array()), "id", array()), "idc" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["res"], "client", array()), "id", array()))), "html", null, true);
            echo "\">details</a>
</td>

     </tr> 
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "      aucun utilisateur de ce login trouver
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  </tr>
</table>

";
        
        $__internal_b312528fc32b3913e2863e8ff6309e2223ed788a7c0ce061713ef8b207c216c1->leave($__internal_b312528fc32b3913e2863e8ff6309e2223ed788a7c0ce061713ef8b207c216c1_prof);

        
        $__internal_932ee0906a2fd09316f4579e13e0b6d470b9e414309f4a1546763f26b622abe2->leave($__internal_932ee0906a2fd09316f4579e13e0b6d470b9e414309f4a1546763f26b622abe2_prof);

    }

    // line 16
    public function block_style($context, array $blocks = array())
    {
        $__internal_b9e08a66ad564a73382ad3c08156b35f15d1c0bef2635a503358c83be16ed4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e08a66ad564a73382ad3c08156b35f15d1c0bef2635a503358c83be16ed4ce->enter($__internal_b9e08a66ad564a73382ad3c08156b35f15d1c0bef2635a503358c83be16ed4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_031bb4f55d9eca485576bca8b56fd3231f989cf35e212179c74b43c4ea53dcab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031bb4f55d9eca485576bca8b56fd3231f989cf35e212179c74b43c4ea53dcab->enter($__internal_031bb4f55d9eca485576bca8b56fd3231f989cf35e212179c74b43c4ea53dcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 17
        echo "<style>
img{
  width:100px;
}
</style>
";
        
        $__internal_031bb4f55d9eca485576bca8b56fd3231f989cf35e212179c74b43c4ea53dcab->leave($__internal_031bb4f55d9eca485576bca8b56fd3231f989cf35e212179c74b43c4ea53dcab_prof);

        
        $__internal_b9e08a66ad564a73382ad3c08156b35f15d1c0bef2635a503358c83be16ed4ce->leave($__internal_b9e08a66ad564a73382ad3c08156b35f15d1c0bef2635a503358c83be16ed4ce_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:reser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 17,  137 => 16,  124 => 45,  117 => 43,  107 => 38,  101 => 35,  97 => 34,  93 => 33,  89 => 32,  84 => 30,  80 => 29,  74 => 25,  69 => 24,  66 => 23,  64 => 16,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@KEURGUIimmo/layoutl.html.twig\" %}

  {% block content %}
 <table border=1 class=\"table\" >
    <tr>
<th>nom du client</th>
<th>adresse client</th>
<th>nom du bien</th>
<th>adresse bien</th>
<th>type de bien</th>
<th>image</th>
<th>action</th>

</tr>
<tr>
{% block style %}
<style>
img{
  width:100px;
}
</style>
{% endblock %}
 
{% for res in res %}
       <tr>
  
     

  <td scope=\"col\" class=\"table-info\">{{res.client.nomComplet}}</td>
          <td scope=\"col\" class=\"table-info\">{{res.client.adresse}}</td>

    <td scope=\"col\" class=\"table-info\">{{res.bien.nom}}</td>
        <td scope=\"col\" class=\"table-info\">{{res.bien.localite}}</td>
         <td scope=\"col\" class=\"table-info\">{{res.bien.type}}</td>
          <td scope=\"col\" class=\"table-info\"><img src=\"{{asset('images/properties/'~res.bien.image[0])}}\" class=\"img-responsive\" alt=\"properties\"/></td>


        <td scope=\"col\" class=\"table-info\"><a href=\"{{path('det',{'idb':res.bien.id,'idc':res.client.id})}}\">details</a>
</td>

     </tr> 
      {% else %}
      aucun utilisateur de ce login trouver
{% endfor %}
  </tr>
</table>

{% endblock %}", "KEURGUIimmoBundle:front:reser.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/reser.html.twig");
    }
}
