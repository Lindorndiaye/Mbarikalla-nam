<?php

/* KEURGUIimmoBundle::layoutl.html.twig */
class __TwigTemplate_3d0806f5c0dfacee82a0e9397ad0e5d3f39fd9116d7c2ff42ca299f62064bba1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basel.html.twig", "KEURGUIimmoBundle::layoutl.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::basel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2aec7d769fed7c20c46367a976ccf01e95891c0cea3be58f4ece0c1bad00c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2aec7d769fed7c20c46367a976ccf01e95891c0cea3be58f4ece0c1bad00c33->enter($__internal_f2aec7d769fed7c20c46367a976ccf01e95891c0cea3be58f4ece0c1bad00c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::layoutl.html.twig"));

        $__internal_fc4f27c2a34770705564b7dc06c91e84a091585247cae8822ea49cb4200881de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4f27c2a34770705564b7dc06c91e84a091585247cae8822ea49cb4200881de->enter($__internal_fc4f27c2a34770705564b7dc06c91e84a091585247cae8822ea49cb4200881de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::layoutl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2aec7d769fed7c20c46367a976ccf01e95891c0cea3be58f4ece0c1bad00c33->leave($__internal_f2aec7d769fed7c20c46367a976ccf01e95891c0cea3be58f4ece0c1bad00c33_prof);

        
        $__internal_fc4f27c2a34770705564b7dc06c91e84a091585247cae8822ea49cb4200881de->leave($__internal_fc4f27c2a34770705564b7dc06c91e84a091585247cae8822ea49cb4200881de_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f19726cf45e01f7b30f6c70b136a33b3b40624e644b3094f99a1f9a13cde7635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f19726cf45e01f7b30f6c70b136a33b3b40624e644b3094f99a1f9a13cde7635->enter($__internal_f19726cf45e01f7b30f6c70b136a33b3b40624e644b3094f99a1f9a13cde7635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a2be0b0a5169914ccea04861c8c1d777d1fa97be60504fc3eef0197087df4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2be0b0a5169914ccea04861c8c1d777d1fa97be60504fc3eef0197087df4d3->enter($__internal_4a2be0b0a5169914ccea04861c8c1d777d1fa97be60504fc3eef0197087df4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "      
        ";
        // line 4
        $this->displayBlock('header', $context, $blocks);
        // line 28
        echo "

";
        
        $__internal_4a2be0b0a5169914ccea04861c8c1d777d1fa97be60504fc3eef0197087df4d3->leave($__internal_4a2be0b0a5169914ccea04861c8c1d777d1fa97be60504fc3eef0197087df4d3_prof);

        
        $__internal_f19726cf45e01f7b30f6c70b136a33b3b40624e644b3094f99a1f9a13cde7635->leave($__internal_f19726cf45e01f7b30f6c70b136a33b3b40624e644b3094f99a1f9a13cde7635_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_f86a263e8ef6f0d262c2425e8ef7c24f7ffabec00bd09a8d70550feb4f217956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86a263e8ef6f0d262c2425e8ef7c24f7ffabec00bd09a8d70550feb4f217956->enter($__internal_f86a263e8ef6f0d262c2425e8ef7c24f7ffabec00bd09a8d70550feb4f217956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f0a7ff6d4e9ed2ad32634a56212c8dcbc3a84544f1cd6e4870b8d0d9404c81b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a7ff6d4e9ed2ad32634a56212c8dcbc3a84544f1cd6e4870b8d0d9404c81b7->enter($__internal_f0a7ff6d4e9ed2ad32634a56212c8dcbc3a84544f1cd6e4870b8d0d9404c81b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "  <header class=\"row\" style=\"height:125px; margin-left:130px; margin-right:130px;\">
 <div class=\"col-3\"><a href=\"\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Capture du 2018-02-12 14-26-19.png"), "html", null, true);
        echo "\" style=\"width:200px\"alt=\"\"></a></div>
 
 
 
 <div class=\"col-7\">
 <ul style=\"display:flex; list-style:none; margin-top:35px;space-beetwen \" >
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black; text-decoration:none; \"> Accueil</a></li>
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black;text-decoration:none;\"> Nos Annonces</a></li>
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black;text-decoration:none;\">Notre Agence</a></li>
 </ul>
 
 </div>

 <div class=\"col-2\" style=\" margin-top:42px; color:black; \">
 <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("log");
        echo "\">se connecter</a>
 </ul>
 
 </div>
 
 </header>

";
        
        $__internal_f0a7ff6d4e9ed2ad32634a56212c8dcbc3a84544f1cd6e4870b8d0d9404c81b7->leave($__internal_f0a7ff6d4e9ed2ad32634a56212c8dcbc3a84544f1cd6e4870b8d0d9404c81b7_prof);

        
        $__internal_f86a263e8ef6f0d262c2425e8ef7c24f7ffabec00bd09a8d70550feb4f217956->leave($__internal_f86a263e8ef6f0d262c2425e8ef7c24f7ffabec00bd09a8d70550feb4f217956_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle::layoutl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 20,  79 => 6,  76 => 5,  67 => 4,  55 => 28,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("  {% extends \"::basel.html.twig\" %}
{% block body %}
      
        {% block header %}
  <header class=\"row\" style=\"height:125px; margin-left:130px; margin-right:130px;\">
 <div class=\"col-3\"><a href=\"\"><img src=\"{{ asset('images/Capture du 2018-02-12 14-26-19.png') }}\" style=\"width:200px\"alt=\"\"></a></div>
 
 
 
 <div class=\"col-7\">
 <ul style=\"display:flex; list-style:none; margin-top:35px;space-beetwen \" >
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black; text-decoration:none; \"> Accueil</a></li>
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black;text-decoration:none;\"> Nos Annonces</a></li>
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black;text-decoration:none;\">Notre Agence</a></li>
 </ul>
 
 </div>

 <div class=\"col-2\" style=\" margin-top:42px; color:black; \">
 <a href=\"{{path('log')}}\">se connecter</a>
 </ul>
 
 </div>
 
 </header>

{% endblock %}


{% endblock %}", "KEURGUIimmoBundle::layoutl.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/layoutl.html.twig");
    }
}
