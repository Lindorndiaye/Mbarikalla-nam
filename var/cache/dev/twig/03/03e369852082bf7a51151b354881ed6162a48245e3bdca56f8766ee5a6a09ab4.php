<?php

/* ::baseadmin.html.twig */
class __TwigTemplate_fffcad40df94f604ef0eb1b767106ecc45a1c69fea90fd99b00fe8ccc88887e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel_left' => array($this, 'block_panel_left'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f1b7d55ad01eae0c584ae33b903463c806111a0874489464cecb07e8f42757f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1b7d55ad01eae0c584ae33b903463c806111a0874489464cecb07e8f42757f->enter($__internal_1f1b7d55ad01eae0c584ae33b903463c806111a0874489464cecb07e8f42757f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseadmin.html.twig"));

        $__internal_e21e2aa976fdfaeeae9e10711aa36b47e3f9662e4f9cc4cc2fc9ea762518ee2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21e2aa976fdfaeeae9e10711aa36b47e3f9662e4f9cc4cc2fc9ea762518ee2d->enter($__internal_e21e2aa976fdfaeeae9e10711aa36b47e3f9662e4f9cc4cc2fc9ea762518ee2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseadmin.html.twig"));

        // line 1
        echo "

<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">
      <link rel=\"shortcut icon\" href=\"~/node_modules/bootstrap/dist/css/bootstrap.min.css\">
  

    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/flag-icon.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/cs-skin-elastic.css"), "html", null, true);
        echo "\" >
      <script src=\"jquery-jvectormap-1.0.min.js\"></script>
        <script src=\"jquery-jvectormap-world-mill-en.js\"></script>

    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/lib/datatable/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/bootstrap-select.less"), "html", null, true);
        echo "\"> -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/scss/style.css"), "html", null, true);
        echo "\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>


    <!-- <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js\"></script> -->

</head>


<body>

";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "








";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "
</body>
</html>
";
        
        $__internal_1f1b7d55ad01eae0c584ae33b903463c806111a0874489464cecb07e8f42757f->leave($__internal_1f1b7d55ad01eae0c584ae33b903463c806111a0874489464cecb07e8f42757f_prof);

        
        $__internal_e21e2aa976fdfaeeae9e10711aa36b47e3f9662e4f9cc4cc2fc9ea762518ee2d->leave($__internal_e21e2aa976fdfaeeae9e10711aa36b47e3f9662e4f9cc4cc2fc9ea762518ee2d_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_0436a49a0df8159f4e0b93f0dcf8200150910c4a3c0e70d69be9d1293d326e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0436a49a0df8159f4e0b93f0dcf8200150910c4a3c0e70d69be9d1293d326e39->enter($__internal_0436a49a0df8159f4e0b93f0dcf8200150910c4a3c0e70d69be9d1293d326e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_406d943a12ab11097b5e654b222bd007956af6f85fe28ad638bfe112a0a97b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406d943a12ab11097b5e654b222bd007956af6f85fe28ad638bfe112a0a97b18->enter($__internal_406d943a12ab11097b5e654b222bd007956af6f85fe28ad638bfe112a0a97b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo " ";
        $this->displayBlock('panel_left', $context, $blocks);
        // line 48
        echo "  ";
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_406d943a12ab11097b5e654b222bd007956af6f85fe28ad638bfe112a0a97b18->leave($__internal_406d943a12ab11097b5e654b222bd007956af6f85fe28ad638bfe112a0a97b18_prof);

        
        $__internal_0436a49a0df8159f4e0b93f0dcf8200150910c4a3c0e70d69be9d1293d326e39->leave($__internal_0436a49a0df8159f4e0b93f0dcf8200150910c4a3c0e70d69be9d1293d326e39_prof);

    }

    // line 46
    public function block_panel_left($context, array $blocks = array())
    {
        $__internal_67a0e4ad41fbefe6003490664765a45828b68fdf7c2f797e3ce11fa9a2542c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a0e4ad41fbefe6003490664765a45828b68fdf7c2f797e3ce11fa9a2542c13->enter($__internal_67a0e4ad41fbefe6003490664765a45828b68fdf7c2f797e3ce11fa9a2542c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_left"));

        $__internal_f88d1b7d6d37fb8f5a7cf325cce980aae4970548eebc9e8fa96b636962b7a96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88d1b7d6d37fb8f5a7cf325cce980aae4970548eebc9e8fa96b636962b7a96d->enter($__internal_f88d1b7d6d37fb8f5a7cf325cce980aae4970548eebc9e8fa96b636962b7a96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_left"));

        // line 47
        echo " ";
        
        $__internal_f88d1b7d6d37fb8f5a7cf325cce980aae4970548eebc9e8fa96b636962b7a96d->leave($__internal_f88d1b7d6d37fb8f5a7cf325cce980aae4970548eebc9e8fa96b636962b7a96d_prof);

        
        $__internal_67a0e4ad41fbefe6003490664765a45828b68fdf7c2f797e3ce11fa9a2542c13->leave($__internal_67a0e4ad41fbefe6003490664765a45828b68fdf7c2f797e3ce11fa9a2542c13_prof);

    }

    // line 48
    public function block_header($context, array $blocks = array())
    {
        $__internal_a00d13282c716e76b8ec0b010ae21b457d7ed48b75f98f8f36df623c0f3a7a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00d13282c716e76b8ec0b010ae21b457d7ed48b75f98f8f36df623c0f3a7a71->enter($__internal_a00d13282c716e76b8ec0b010ae21b457d7ed48b75f98f8f36df623c0f3a7a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_24e30a94f3eca29bcc6111884e9c4585e9ae91e0c76ef555b8251034a581ee2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e30a94f3eca29bcc6111884e9c4585e9ae91e0c76ef555b8251034a581ee2d->enter($__internal_24e30a94f3eca29bcc6111884e9c4585e9ae91e0c76ef555b8251034a581ee2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 49
        echo " ";
        
        $__internal_24e30a94f3eca29bcc6111884e9c4585e9ae91e0c76ef555b8251034a581ee2d->leave($__internal_24e30a94f3eca29bcc6111884e9c4585e9ae91e0c76ef555b8251034a581ee2d_prof);

        
        $__internal_a00d13282c716e76b8ec0b010ae21b457d7ed48b75f98f8f36df623c0f3a7a71->leave($__internal_a00d13282c716e76b8ec0b010ae21b457d7ed48b75f98f8f36df623c0f3a7a71_prof);

    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        $__internal_53ac5557ec66c198cd455730597e8ff6efeeb9ce32f08c575164c127daa6be4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ac5557ec66c198cd455730597e8ff6efeeb9ce32f08c575164c127daa6be4a->enter($__internal_53ac5557ec66c198cd455730597e8ff6efeeb9ce32f08c575164c127daa6be4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d234d88bf71eb15ffe267a602c16866738997b23366a604e0bc8f3701d52c48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d234d88bf71eb15ffe267a602c16866738997b23366a604e0bc8f3701d52c48d->enter($__internal_d234d88bf71eb15ffe267a602c16866738997b23366a604e0bc8f3701d52c48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 51
        echo " ";
        
        $__internal_d234d88bf71eb15ffe267a602c16866738997b23366a604e0bc8f3701d52c48d->leave($__internal_d234d88bf71eb15ffe267a602c16866738997b23366a604e0bc8f3701d52c48d_prof);

        
        $__internal_53ac5557ec66c198cd455730597e8ff6efeeb9ce32f08c575164c127daa6be4a->leave($__internal_53ac5557ec66c198cd455730597e8ff6efeeb9ce32f08c575164c127daa6be4a_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ffb9ffc73d9bdf8573905d06a40460c375b40da4f957b092a2dffe696857507b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb9ffc73d9bdf8573905d06a40460c375b40da4f957b092a2dffe696857507b->enter($__internal_ffb9ffc73d9bdf8573905d06a40460c375b40da4f957b092a2dffe696857507b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b626cb86f359111d3451dcf16943b402f4058cc09ddbb1d6e0405a09b582ae34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b626cb86f359111d3451dcf16943b402f4058cc09ddbb1d6e0405a09b582ae34->enter($__internal_b626cb86f359111d3451dcf16943b402f4058cc09ddbb1d6e0405a09b582ae34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/main.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/vendor/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
   

    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.print.min.js"), "html", null, true);
        echo "'\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.colVis.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/datatables-init.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/vendor/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/main.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/chart-js/Chart.bundle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/dashboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/widgets.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/vector-map/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/vector-map/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/vector-map/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/vector-map/country/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
     <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.7.2.min.js\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>

            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
          

    <script>
    \$(document).ready(function(){});
 ( function ( \$ ) {
            \"use strict\";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );

       
    </script>

        ";
        
        $__internal_b626cb86f359111d3451dcf16943b402f4058cc09ddbb1d6e0405a09b582ae34->leave($__internal_b626cb86f359111d3451dcf16943b402f4058cc09ddbb1d6e0405a09b582ae34_prof);

        
        $__internal_ffb9ffc73d9bdf8573905d06a40460c375b40da4f957b092a2dffe696857507b->leave($__internal_ffb9ffc73d9bdf8573905d06a40460c375b40da4f957b092a2dffe696857507b_prof);

    }

    public function getTemplateName()
    {
        return "::baseadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 92,  321 => 91,  317 => 90,  313 => 89,  309 => 88,  305 => 87,  301 => 86,  295 => 83,  291 => 82,  287 => 81,  283 => 80,  279 => 79,  275 => 78,  271 => 77,  267 => 76,  263 => 75,  259 => 74,  255 => 73,  251 => 72,  247 => 71,  243 => 70,  237 => 67,  232 => 65,  228 => 64,  223 => 63,  214 => 62,  204 => 51,  195 => 50,  185 => 49,  176 => 48,  166 => 47,  157 => 46,  146 => 50,  143 => 48,  140 => 46,  131 => 45,  118 => 123,  116 => 62,  105 => 53,  103 => 45,  86 => 31,  82 => 30,  78 => 29,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  55 => 21,  51 => 20,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">
      <link rel=\"shortcut icon\" href=\"~/node_modules/bootstrap/dist/css/bootstrap.min.css\">
  

    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/normalize.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/font-awesome.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/themify-icons.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/flag-icon.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/cs-skin-elastic.css')}}\" >
      <script src=\"jquery-jvectormap-1.0.min.js\"></script>
        <script src=\"jquery-jvectormap-world-mill-en.js\"></script>

    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/lib/datatable/dataTables.bootstrap.min.css')}}\">
    <!-- <link rel=\"stylesheet\" href=\"{{asset('assetss/css/bootstrap-select.less')}}\"> -->
    <link rel=\"stylesheet\" href=\"{{asset('assetss/scss/style.css')}}\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>


    <!-- <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js\"></script> -->

</head>


<body>

{% block body %}
 {% block panel_left %}
 {% endblock %}
  {% block header %}
 {% endblock %}
  {% block content %}
 {% endblock %}
{% endblock %}









{% block javascripts %}
 <script src=\"{{asset('assetss/js/popper.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/plugins.js')}}\"></script>
    <script src=\"{{asset('assetss/js/main.js')}}\"></script>

    <script src=\"{{asset('assetss/js/vendor/jquery-2.1.4.min.js')}}\"></script>
   

    <script src=\"{{asset('assetss/js/lib/data-table/datatables.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/dataTables.bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/dataTables.buttons.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/buttons.bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/jszip.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/pdfmake.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/vfs_fonts.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/buttons.html5.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/buttons.print.min.js')}}'\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/buttons.colVis.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/datatables-init.js')}}\"></script>
        <script src=\"{{asset('assetss/js/vendor/jquery-2.1.4.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/plugins.js')}}\"></script>
    <script src=\"{{asset('assetss/js/main.js')}}\"></script>


    <script src=\"{{asset('assetss/js/lib/chart-js/Chart.bundle.js')}}\"></script>
    <script src=\"{{asset('assetss/js/dashboard.js')}}\"></script>
    <script src=\"{{asset('assetss/js/widgets.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/vector-map/jquery.vmap.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/vector-map/jquery.vmap.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/vector-map/jquery.vmap.sampledata.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/vector-map/country/jquery.vmap.world.js')}}\"></script>
     <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.7.2.min.js\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>

            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
          

    <script>
    \$(document).ready(function(){});
 ( function ( \$ ) {
            \"use strict\";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );

       
    </script>

        {% endblock %}

</body>
</html>
", "::baseadmin.html.twig", "/var/www/html/projet00000/app/Resources/views/baseadmin.html.twig");
    }
}
