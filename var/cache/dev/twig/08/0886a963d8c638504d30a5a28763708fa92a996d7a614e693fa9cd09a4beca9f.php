<?php

/* base.html.twig */
class __TwigTemplate_ef6c6a120411fc39388051b3b2e07bd76ddc6c4cacacd748f11683a683eba977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dde484d4f861996e09fffe15e90fcf10e611a6e8bf43b4d70146864c9d88dcec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde484d4f861996e09fffe15e90fcf10e611a6e8bf43b4d70146864c9d88dcec->enter($__internal_dde484d4f861996e09fffe15e90fcf10e611a6e8bf43b4d70146864c9d88dcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2726ed7ce684050a379fad279d4e01cada5fbbf6435004ce5d92faee594fc0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2726ed7ce684050a379fad279d4e01cada5fbbf6435004ce5d92faee594fc0eb->enter($__internal_2726ed7ce684050a379fad279d4e01cada5fbbf6435004ce5d92faee594fc0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_dde484d4f861996e09fffe15e90fcf10e611a6e8bf43b4d70146864c9d88dcec->leave($__internal_dde484d4f861996e09fffe15e90fcf10e611a6e8bf43b4d70146864c9d88dcec_prof);

        
        $__internal_2726ed7ce684050a379fad279d4e01cada5fbbf6435004ce5d92faee594fc0eb->leave($__internal_2726ed7ce684050a379fad279d4e01cada5fbbf6435004ce5d92faee594fc0eb_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_ad92c8732b9da95c677e3806704ee28d8eeb7d3dd536d926648cc604f688cb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad92c8732b9da95c677e3806704ee28d8eeb7d3dd536d926648cc604f688cb43->enter($__internal_ad92c8732b9da95c677e3806704ee28d8eeb7d3dd536d926648cc604f688cb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d298c2c6dfa9b0920598f4532b27311659beea52bb7d0aacb945db4508fe54b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d298c2c6dfa9b0920598f4532b27311659beea52bb7d0aacb945db4508fe54b5->enter($__internal_d298c2c6dfa9b0920598f4532b27311659beea52bb7d0aacb945db4508fe54b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Mbarrikallah-immo</title>
<meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("width=device-width, initial-scale=1.0"), "html", null, true);
        echo "\"/>

 \t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" />
 
  \t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/css/style.css"), "html", null, true);
        echo "\" />
  
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/css/custom.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\"/>
  <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://code.jquery.com/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/script.js"), "html", null, true);
        echo "\"></script>



<!-- Owl stylesheet -->
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/owl-carousel/owl.theme.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/css/custom.css"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/modernizr.custom.79639.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/jquery.ba-cond.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/jquery.slitslider.js"), "html", null, true);
        echo "\"></script>
<!-- slitslider -->

</head>

<body>




<!-- /.modal -->
";
        // line 44
        $this->displayBlock('javascript', $context, $blocks);
        // line 51
        echo "

</body>
</html>



";
        
        $__internal_d298c2c6dfa9b0920598f4532b27311659beea52bb7d0aacb945db4508fe54b5->leave($__internal_d298c2c6dfa9b0920598f4532b27311659beea52bb7d0aacb945db4508fe54b5_prof);

        
        $__internal_ad92c8732b9da95c677e3806704ee28d8eeb7d3dd536d926648cc604f688cb43->leave($__internal_ad92c8732b9da95c677e3806704ee28d8eeb7d3dd536d926648cc604f688cb43_prof);

    }

    // line 44
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_04fe87eac2d201e8a3ea3e9a98220f02e0f9f0c2c0bc82f5e89e4b58a05fd385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04fe87eac2d201e8a3ea3e9a98220f02e0f9f0c2c0bc82f5e89e4b58a05fd385->enter($__internal_04fe87eac2d201e8a3ea3e9a98220f02e0f9f0c2c0bc82f5e89e4b58a05fd385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_ff26585773f813fd0ec1351832561e11f6587c577a9c48c0d29b05ed358cb880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff26585773f813fd0ec1351832561e11f6587c577a9c48c0d29b05ed358cb880->enter($__internal_ff26585773f813fd0ec1351832561e11f6587c577a9c48c0d29b05ed358cb880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 45
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/script.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/jquery.slitslider.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/jquery.ba-cond.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/modernizr.custom.79639.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_ff26585773f813fd0ec1351832561e11f6587c577a9c48c0d29b05ed358cb880->leave($__internal_ff26585773f813fd0ec1351832561e11f6587c577a9c48c0d29b05ed358cb880_prof);

        
        $__internal_04fe87eac2d201e8a3ea3e9a98220f02e0f9f0c2c0bc82f5e89e4b58a05fd385->leave($__internal_04fe87eac2d201e8a3ea3e9a98220f02e0f9f0c2c0bc82f5e89e4b58a05fd385_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  178 => 48,  174 => 47,  170 => 46,  165 => 45,  156 => 44,  139 => 51,  137 => 44,  123 => 33,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  99 => 24,  95 => 23,  91 => 22,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  62 => 11,  57 => 9,  52 => 7,  45 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block header %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Mbarrikallah-immo</title>
<meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"{{asset('width=device-width, initial-scale=1.0')}}\"/>

 \t<link rel=\"stylesheet\" href=\"{{asset('assets/bootstrap/css/bootstrap.css')}}\" />
 
  \t<link rel=\"stylesheet\" href=\"{{asset('assets/slitslider/css/style.css')}}\" />
  
<link rel=\"stylesheet\" href=\"{{asset('assets/slitslider/css/custom.css')}}\" />
<link rel=\"stylesheet\" href=\"{{asset('assets/style.css')}}\"/>
  <script src=\"{{asset('http://code.jquery.com/jquery-1.9.1.min.js')}}\"></script>
\t<script src=\"{{asset('assets/bootstrap/js/bootstrap.js')}}\"></script>
  <script src=\"{{asset('assets/script.js')}}\"></script>



<!-- Owl stylesheet -->
<link rel=\"stylesheet\" href=\"{{asset('assets/owl-carousel/owl.carousel.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('assets/owl-carousel/owl.theme.css')}}\">
<script src=\"{{asset('assets/owl-carousel/owl.carousel.js')}}\"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/slitslider/css/style.css')}}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/slitslider/css/custom.css')}}\" />
    <script type=\"text/javascript\" src=\"{{asset('assets/slitslider/js/modernizr.custom.79639.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('assets/slitslider/js/jquery.ba-cond.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('assets/slitslider/js/jquery.slitslider.js')}}\"></script>
<!-- slitslider -->

</head>

<body>




<!-- /.modal -->
{% block javascript %}
 <script src=\"{{asset('assets/script.js')}}\"></script>
  <script src=\"{{asset('assets/slitslider/js/jquery.slitslider.js')}}\"></script>
  <script src=\"{{asset('assets/slitslider/js/jquery.ba-cond.min.js')}}\"></script>
  <script src=\"{{asset('assets/slitslider/js/modernizr.custom.79639.js')}}\"></script>

{% endblock %}


</body>
</html>



{% endblock %}", "base.html.twig", "/var/www/html/mbarikallah/app/Resources/views/base.html.twig");
    }
}
