<?php

/* KEURGUIimmoBundle:front:test.html.twig */
class __TwigTemplate_13cf50e6a8d4510cd282b9b863777d173dc54121c2fa7fc0ae8dc48d79b2bf69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@KEURGUIimmo/layout.html.twig", "KEURGUIimmoBundle:front:test.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@KEURGUIimmo/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_437d83daf30b744a9e1502e689834a256fb9d68492676b0da1d3106ed5f00c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437d83daf30b744a9e1502e689834a256fb9d68492676b0da1d3106ed5f00c74->enter($__internal_437d83daf30b744a9e1502e689834a256fb9d68492676b0da1d3106ed5f00c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:test.html.twig"));

        $__internal_88ae918d9ef51d4d93a0e2b952ad5b1bf2954060fd6f57cb29ee6f1893467fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ae918d9ef51d4d93a0e2b952ad5b1bf2954060fd6f57cb29ee6f1893467fdd->enter($__internal_88ae918d9ef51d4d93a0e2b952ad5b1bf2954060fd6f57cb29ee6f1893467fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_437d83daf30b744a9e1502e689834a256fb9d68492676b0da1d3106ed5f00c74->leave($__internal_437d83daf30b744a9e1502e689834a256fb9d68492676b0da1d3106ed5f00c74_prof);

        
        $__internal_88ae918d9ef51d4d93a0e2b952ad5b1bf2954060fd6f57cb29ee6f1893467fdd->leave($__internal_88ae918d9ef51d4d93a0e2b952ad5b1bf2954060fd6f57cb29ee6f1893467fdd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6c1bdf0d9f8a011a08584570ece392acd989aa4dd4940cdaf973ac528b81ae43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1bdf0d9f8a011a08584570ece392acd989aa4dd4940cdaf973ac528b81ae43->enter($__internal_6c1bdf0d9f8a011a08584570ece392acd989aa4dd4940cdaf973ac528b81ae43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8f6dc86de0ed5bab57b732c42069b78255e701cfecb0fa53932da9ec280806f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6dc86de0ed5bab57b732c42069b78255e701cfecb0fa53932da9ec280806f0->enter($__internal_8f6dc86de0ed5bab57b732c42069b78255e701cfecb0fa53932da9ec280806f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <button class=\"ajax\">click me!</button>
    <div id=\"ajax-results\">here comes the result</div>
    <script>
        \$(document).on('click', 'button.ajax', function(){
            that = \$(this);
            \$.ajax({
                url:'";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_bundle_route");
        echo "',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    \"some_var_name\": \"some_var_value\"
                },
                async: true,
                success: function (data)
                {
                    console.log(data)
                    \$('div#ajax-results').html(data.output);

                }
            });
            return false;

        });
    </script>
";
        
        $__internal_8f6dc86de0ed5bab57b732c42069b78255e701cfecb0fa53932da9ec280806f0->leave($__internal_8f6dc86de0ed5bab57b732c42069b78255e701cfecb0fa53932da9ec280806f0_prof);

        
        $__internal_6c1bdf0d9f8a011a08584570ece392acd989aa4dd4940cdaf973ac528b81ae43->leave($__internal_6c1bdf0d9f8a011a08584570ece392acd989aa4dd4940cdaf973ac528b81ae43_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  49 => 4,  40 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"@KEURGUIimmo/layout.html.twig\" %}
{% block content %}
    <button class=\"ajax\">click me!</button>
    <div id=\"ajax-results\">here comes the result</div>
    <script>
        \$(document).on('click', 'button.ajax', function(){
            that = \$(this);
            \$.ajax({
                url:'{{ (path('app_bundle_route')) }}',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    \"some_var_name\": \"some_var_value\"
                },
                async: true,
                success: function (data)
                {
                    console.log(data)
                    \$('div#ajax-results').html(data.output);

                }
            });
            return false;

        });
    </script>
{% endblock %}", "KEURGUIimmoBundle:front:test.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/test.html.twig");
    }
}
