<?php

/* KEURGUIimmoBundle:front:det.html.twig */
class __TwigTemplate_9dee75810489c55178b55f298124d11b5f381ae74cb7fd67743b429e63c76c10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@KEURGUIimmo/layoutl.html.twig", "KEURGUIimmoBundle:front:det.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@KEURGUIimmo/layoutl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cab835985567eb2ef78024760fef741f2f98cf9a95d54ac80100487625979d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab835985567eb2ef78024760fef741f2f98cf9a95d54ac80100487625979d0e->enter($__internal_cab835985567eb2ef78024760fef741f2f98cf9a95d54ac80100487625979d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:det.html.twig"));

        $__internal_eb3ef48e23cf56ad5d088261bb043b48e38838a96c0b6b1ef85094db04945cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3ef48e23cf56ad5d088261bb043b48e38838a96c0b6b1ef85094db04945cae->enter($__internal_eb3ef48e23cf56ad5d088261bb043b48e38838a96c0b6b1ef85094db04945cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:det.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cab835985567eb2ef78024760fef741f2f98cf9a95d54ac80100487625979d0e->leave($__internal_cab835985567eb2ef78024760fef741f2f98cf9a95d54ac80100487625979d0e_prof);

        
        $__internal_eb3ef48e23cf56ad5d088261bb043b48e38838a96c0b6b1ef85094db04945cae->leave($__internal_eb3ef48e23cf56ad5d088261bb043b48e38838a96c0b6b1ef85094db04945cae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b39430b0bcf2b845cab085e1a9acae8cca2821d3585ee055b8e38a529f31e16a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39430b0bcf2b845cab085e1a9acae8cca2821d3585ee055b8e38a529f31e16a->enter($__internal_b39430b0bcf2b845cab085e1a9acae8cca2821d3585ee055b8e38a529f31e16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63a80b1ccd1380dfdeaa72511ae868a40c95592d2e2149a4b32ba7a8f053bb40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a80b1ccd1380dfdeaa72511ae868a40c95592d2e2149a4b32ba7a8f053bb40->enter($__internal_63a80b1ccd1380dfdeaa72511ae868a40c95592d2e2149a4b32ba7a8f053bb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "KEURGUIimmoBundle:det:det";
        
        $__internal_63a80b1ccd1380dfdeaa72511ae868a40c95592d2e2149a4b32ba7a8f053bb40->leave($__internal_63a80b1ccd1380dfdeaa72511ae868a40c95592d2e2149a4b32ba7a8f053bb40_prof);

        
        $__internal_b39430b0bcf2b845cab085e1a9acae8cca2821d3585ee055b8e38a529f31e16a->leave($__internal_b39430b0bcf2b845cab085e1a9acae8cca2821d3585ee055b8e38a529f31e16a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_61aa73431a381f8344f8429430281104b6ad1d12a01caa98ee21be7cdf0b350b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61aa73431a381f8344f8429430281104b6ad1d12a01caa98ee21be7cdf0b350b->enter($__internal_61aa73431a381f8344f8429430281104b6ad1d12a01caa98ee21be7cdf0b350b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_725466e796a728c8d8252397b2155f0ee904b3ae671124893f2f7b4588686e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725466e796a728c8d8252397b2155f0ee904b3ae671124893f2f7b4588686e5c->enter($__internal_725466e796a728c8d8252397b2155f0ee904b3ae671124893f2f7b4588686e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayBlock('header', $context, $blocks);
        // line 9
        echo "  <div class=\"container\">

<div class=\"row\">
    <div class=\"col-xs-12 col-sm-12 col-md-12 col-sm-offset-2 col-md-offset-3\">
        <form role=\"form\">
            
            <hr>
<div class=\"row \" style=\"\">
<div class=\"col-4\"><h3>Details du client</h1>
Numero de piece : ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 18, $this->getSourceContext()); })()), "numpiece", array()), "html", null, true);
        echo "</br>
Nom : ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 19, $this->getSourceContext()); })()), "nomComplet", array()), "html", null, true);
        echo "</br>
Numero de telephone : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 20, $this->getSourceContext()); })()), "tel", array()), "html", null, true);
        echo "</br>
Adresse : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 21, $this->getSourceContext()); })()), "adresse", array()), "html", null, true);
        echo "</br>
E-mail : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 22, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</br>
 
</div>

<div class=\"col-4\"><h3>Details sur le Bien</h3>
Localite : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 27, $this->getSourceContext()); })()), "localite", array()), "html", null, true);
        echo "</br>
Type : ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 28, $this->getSourceContext()); })()), "type", array()), "html", null, true);
        echo "</br>
Nom : ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 29, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
        echo "</br>
Description : ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 30, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</br>
Prix : ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 31, $this->getSourceContext()); })()), "prix", array()), "html", null, true);
        echo "</br>

</div>

<div class=\"row \" style=\"\">





            <div id=\"demo\" class=\"carousel slide\" data-ride=\"carousel\" style=\"margin-left:170px; margin-top:0px;\">

                <!-- Indicators -->
                <ul class=\"carousel-indicators\">
                    <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#demo\" data-slide-to=\"1\"></li>
                    <li data-target=\"#demo\" data-slide-to=\"2\"></li>
                </ul>

                <!-- The slideshow -->
                <div class=\"carousel-inner\" style=\"padding-top: 20px;\">
                    <div class=\"carousel-item active\">
                        <img  style=\"height:400px;width:900px\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 53, $this->getSourceContext()); })()), "image", array()), 0, array(), "array"))), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Los Angeles\">
                    </div>
                   
                </div>

                <!-- Left and right controls -->
                <a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\"></span>
                </a>
                <a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\"></span>
                </a>

            </div>







</div>








";
        // line 86
        echo "















</div>

                </div>
                <div class=\"col-xs-8 col-sm-9 col-md-9\">
                     En cliquant <strong class=\"label label-primary\">VALIDER</strong>, vous acceptez les <a href=\"#\" data-toggle=\"modal\" data-target=\"#t_and_c_m\">Termes et conditions</a> mis en place par ce site, y compris notre utilisation de cookies.
                </div>
            </div>
            
            <hr>
            <div class=\"row\">
            <div class=\"col-xs-12 col-md-6\"><a href=\"\" class=\"btn btn-primary btn-block btn-lg\">RETOUR</a></div>
                <div class=\"col-xs-12 col-md-6\"><a class=\"btn btn-primary btn-block btn-lg\" tabindex=\"7\" href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat", array("idb" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 113, $this->getSourceContext()); })()), "id", array()), "idc" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 113, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">VALIDER</a> </div>
                
            </div>
        </form>
    </div>
</div>
<!-- Modal -->
<div class=\"modal fade\" id=\"t_and_c_m\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Termes & Conditions</h4>
               Le contrat de location est conclu pour la durée précisée aux conditions particulières.
La durée du contrat renouvelé ou tacitement reconduit est la même que celle fixée initialement aux conditions
particulières.
            </div>
        
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">J'accepte</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
<style>
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>
 


";
        
        $__internal_725466e796a728c8d8252397b2155f0ee904b3ae671124893f2f7b4588686e5c->leave($__internal_725466e796a728c8d8252397b2155f0ee904b3ae671124893f2f7b4588686e5c_prof);

        
        $__internal_61aa73431a381f8344f8429430281104b6ad1d12a01caa98ee21be7cdf0b350b->leave($__internal_61aa73431a381f8344f8429430281104b6ad1d12a01caa98ee21be7cdf0b350b_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_27cc2555d6b7206c4c97dc6d0115472fb53b98b746ab7b5eb75c6b2c050f07e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27cc2555d6b7206c4c97dc6d0115472fb53b98b746ab7b5eb75c6b2c050f07e9->enter($__internal_27cc2555d6b7206c4c97dc6d0115472fb53b98b746ab7b5eb75c6b2c050f07e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_fea1a69d3d7d74ce96277777a80691909ef2c29570e81623e41f0b726c2b85b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea1a69d3d7d74ce96277777a80691909ef2c29570e81623e41f0b726c2b85b9->enter($__internal_fea1a69d3d7d74ce96277777a80691909ef2c29570e81623e41f0b726c2b85b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_fea1a69d3d7d74ce96277777a80691909ef2c29570e81623e41f0b726c2b85b9->leave($__internal_fea1a69d3d7d74ce96277777a80691909ef2c29570e81623e41f0b726c2b85b9_prof);

        
        $__internal_27cc2555d6b7206c4c97dc6d0115472fb53b98b746ab7b5eb75c6b2c050f07e9->leave($__internal_27cc2555d6b7206c4c97dc6d0115472fb53b98b746ab7b5eb75c6b2c050f07e9_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:det.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 7,  260 => 6,  209 => 113,  180 => 86,  147 => 53,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  71 => 9,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@KEURGUIimmo/layoutl.html.twig\" %}

{% block title %}KEURGUIimmoBundle:det:det{% endblock %}

{% block body %}
{% block header %}
{{parent()}}
{% endblock %}
  <div class=\"container\">

<div class=\"row\">
    <div class=\"col-xs-12 col-sm-12 col-md-12 col-sm-offset-2 col-md-offset-3\">
        <form role=\"form\">
            
            <hr>
<div class=\"row \" style=\"\">
<div class=\"col-4\"><h3>Details du client</h1>
Numero de piece : {{client.numpiece}}</br>
Nom : {{client.nomComplet}}</br>
Numero de telephone : {{client.tel}}</br>
Adresse : {{client.adresse}}</br>
E-mail : {{client.email}}</br>
 
</div>

<div class=\"col-4\"><h3>Details sur le Bien</h3>
Localite : {{bien.localite}}</br>
Type : {{bien.type}}</br>
Nom : {{bien.nom}}</br>
Description : {{bien.description}}</br>
Prix : {{bien.prix}}</br>

</div>

<div class=\"row \" style=\"\">





            <div id=\"demo\" class=\"carousel slide\" data-ride=\"carousel\" style=\"margin-left:170px; margin-top:0px;\">

                <!-- Indicators -->
                <ul class=\"carousel-indicators\">
                    <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#demo\" data-slide-to=\"1\"></li>
                    <li data-target=\"#demo\" data-slide-to=\"2\"></li>
                </ul>

                <!-- The slideshow -->
                <div class=\"carousel-inner\" style=\"padding-top: 20px;\">
                    <div class=\"carousel-item active\">
                        <img  style=\"height:400px;width:900px\" src=\"{{asset('images/'~bien.image[0])}}\" class=\"img-responsive\" alt=\"Los Angeles\">
                    </div>
                   
                </div>

                <!-- Left and right controls -->
                <a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\"></span>
                </a>
                <a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\"></span>
                </a>

            </div>







</div>








{# {{client.nomComplet}}</br>
{{client.tel}}</br>
{{bien.nom}}</br> #}
















</div>

                </div>
                <div class=\"col-xs-8 col-sm-9 col-md-9\">
                     En cliquant <strong class=\"label label-primary\">VALIDER</strong>, vous acceptez les <a href=\"#\" data-toggle=\"modal\" data-target=\"#t_and_c_m\">Termes et conditions</a> mis en place par ce site, y compris notre utilisation de cookies.
                </div>
            </div>
            
            <hr>
            <div class=\"row\">
            <div class=\"col-xs-12 col-md-6\"><a href=\"\" class=\"btn btn-primary btn-block btn-lg\">RETOUR</a></div>
                <div class=\"col-xs-12 col-md-6\"><a class=\"btn btn-primary btn-block btn-lg\" tabindex=\"7\" href=\"{{path('contrat',{'idb':bien.id,'idc':client.id})}}\">VALIDER</a> </div>
                
            </div>
        </form>
    </div>
</div>
<!-- Modal -->
<div class=\"modal fade\" id=\"t_and_c_m\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Termes & Conditions</h4>
               Le contrat de location est conclu pour la durée précisée aux conditions particulières.
La durée du contrat renouvelé ou tacitement reconduit est la même que celle fixée initialement aux conditions
particulières.
            </div>
        
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">J'accepte</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
<style>
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>
 


{% endblock %}", "KEURGUIimmoBundle:front:det.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/det.html.twig");
    }
}
