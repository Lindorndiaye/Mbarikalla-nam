<?php

/* KEURGUIimmoBundle::accueil.html.twig */
class __TwigTemplate_9a646e192b314f3705dd5c35fe5ba7d2b4cfc2c71d6f04431e6dcb1cbbda55cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'catalogue' => array($this, 'block_catalogue'),
            'footer' => array($this, 'block_footer'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_babdc72f9aa876dba8119438882ae5dc884fb29b6b5aac873e0c2180f7ef9ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babdc72f9aa876dba8119438882ae5dc884fb29b6b5aac873e0c2180f7ef9ad2->enter($__internal_babdc72f9aa876dba8119438882ae5dc884fb29b6b5aac873e0c2180f7ef9ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::accueil.html.twig"));

        $__internal_b143572a64f6e3499907a8625a266ea000be95877e2245988550ff7f7acbbb1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b143572a64f6e3499907a8625a266ea000be95877e2245988550ff7f7acbbb1d->enter($__internal_b143572a64f6e3499907a8625a266ea000be95877e2245988550ff7f7acbbb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::accueil.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 97
        echo "

";
        // line 99
        $this->displayBlock('content', $context, $blocks);
        // line 339
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_babdc72f9aa876dba8119438882ae5dc884fb29b6b5aac873e0c2180f7ef9ad2->leave($__internal_babdc72f9aa876dba8119438882ae5dc884fb29b6b5aac873e0c2180f7ef9ad2_prof);

        
        $__internal_b143572a64f6e3499907a8625a266ea000be95877e2245988550ff7f7acbbb1d->leave($__internal_b143572a64f6e3499907a8625a266ea000be95877e2245988550ff7f7acbbb1d_prof);

    }

    // line 1
    public function block_header($context, array $blocks = array())
    {
        $__internal_f479126048f9a0676a4b96c4a299642ff10ab1d5647b285f71562605efb46c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f479126048f9a0676a4b96c4a299642ff10ab1d5647b285f71562605efb46c35->enter($__internal_f479126048f9a0676a4b96c4a299642ff10ab1d5647b285f71562605efb46c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_e089261d35de54b9395495b0f6d2c13085356296c219ce694d53b66cc531dee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e089261d35de54b9395495b0f6d2c13085356296c219ce694d53b66cc531dee0->enter($__internal_e089261d35de54b9395495b0f6d2c13085356296c219ce694d53b66cc531dee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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


<!-- Header Starts -->
<div class=\"navbar-wrapper\">

        <div class=\"navbar-inverse\" role=\"navigation\">
          <div class=\"container\">
            <div class=\"navbar-header\">


              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class=\"navbar-collapse  collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
               <li class=\"active\"><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Acuueil</a></li>
                <li><a href=\"about.php\">A propos</a></li>
                <li><a href=\"agents.php\">Agents</a></li>         
                <li><a href=\"blog.php\">Blog</a></li>
                <li><a href=\"contact.php\">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class=\"container\">

<!-- Header Starts -->
<div class=\"header\">
<a href=\"index.php\"><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/imageedit__5471324689.png"), "html", null, true);
        echo "\" alt=\"Realestate\"></a>

              <ul class=\"pull-right\">
                <li><a href=\"buysalerent.php\">Piscine</a></li>
                <li><a href=\"buysalerent.php\">Jacousie</a></li> 
               <li><a href=\"buysalerent.php\">Salle de Conference</a></li>         
        
              </ul>
</div>
<!-- #Header Starts -->
</div>
";
        
        $__internal_e089261d35de54b9395495b0f6d2c13085356296c219ce694d53b66cc531dee0->leave($__internal_e089261d35de54b9395495b0f6d2c13085356296c219ce694d53b66cc531dee0_prof);

        
        $__internal_f479126048f9a0676a4b96c4a299642ff10ab1d5647b285f71562605efb46c35->leave($__internal_f479126048f9a0676a4b96c4a299642ff10ab1d5647b285f71562605efb46c35_prof);

    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
        $__internal_c8d76dede4afba3b217a101ff7570dad4809ead73892fb241911a8828533bfcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d76dede4afba3b217a101ff7570dad4809ead73892fb241911a8828533bfcd->enter($__internal_c8d76dede4afba3b217a101ff7570dad4809ead73892fb241911a8828533bfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c4b7259b7965c27c1844e5d6e363f52fb32e9b7febe110407b09d56b73cdb491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b7259b7965c27c1844e5d6e363f52fb32e9b7febe110407b09d56b73cdb491->enter($__internal_c4b7259b7965c27c1844e5d6e363f52fb32e9b7febe110407b09d56b73cdb491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 100
        echo "<div class=\"\">

    

            <div id=\"slider\" class=\"sl-slider-wrapper\">

        <div class=\"sl-slider\">
        
          <div class=\"sl-slide\" data-orientation=\"horizontal\" data-slice1-rotation=\"-25\" data-slice2-rotation=\"-25\" data-slice1-scale=\"2\" data-slice2-scale=\"2\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-1\"></div>
             
              <h2><a href=\"#\">2 Chambre et 1 Aire de salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span>Sud Saint-Louis, Senegal</p>

<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>      <cite>200.000frcfa</cite>
            </div>
          </div>
          
          <div class=\"sl-slide\" data-orientation=\"vertical\" data-slice1-rotation=\"10\" data-slice2-rotation=\"-15\" data-slice1-scale=\"1.5\" data-slice2-scale=\"1.5\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-2\"></div>
              <h2><a href=\"#\">
2 chambres à coucher et 1 appartement salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span>Nord Saint-Louis, Senegal</p>
<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>             
              <cite>200.000frcfa</cite>
              </blockquote>
            </div>
          </div>
          
          <div class=\"sl-slide\" data-orientation=\"horizontal\" data-slice1-rotation=\"3\" data-slice2-rotation=\"3\" data-slice1-scale=\"2\" data-slice2-scale=\"1\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-3\"></div>
              <h2><a href=\"#\">2 Chambre et 1 Aire de salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span> Goxumbacc Saint-Louis, Senegal</p>
<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>             
              <cite>200.000frcfa</cite>
              </blockquote>
            </div>
          </div>
          
          <div class=\"sl-slide\" data-orientation=\"vertical\" data-slice1-rotation=\"-5\" data-slice2-rotation=\"25\" data-slice1-scale=\"2\" data-slice2-scale=\"1\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-4\"></div>
              <h2><a href=\"#\">2 Chambre et 1 Aire de salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span> Guet-Ndar Saint-Louis, Senegal</p>
<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>              
              <cite>200.000frcfa</cite>
              </blockquote>
            </div>
          </div>
          
          <div class=\"sl-slide\" data-orientation=\"horizontal\" data-slice1-rotation=\"-5\" data-slice2-rotation=\"10\" data-slice1-scale=\"2\" data-slice2-scale=\"1\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-5\"></div>
              <h2><a href=\"#\">2 Chambre et 1 Aire de salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span> santiaba Saint-louis, Senegal</p>
<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>              
              <cite>200.000frcfa</cite>
              </blockquote>
            </div>
          </div>
        </div><!-- /sl-slider -->



        <nav id=\"nav-dots\" class=\"nav-dots\">
          <span class=\"nav-dot-current\"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>
<div class=\"banner-search\">
  <div class=\"container\"> 
    <!-- banner -->
    <h3>Recherchez en fonction de vos critaires</h3>
    <div class=\"searchbar\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-sm-6\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search of Properties\">
          <div class=\"row\">
          ";
        // line 191
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 191, $this->getSourceContext()); })()), 'form_start');
        echo "
           <div class=\"col-lg-3 col-sm-3 \">
            ";
        // line 193
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 193, $this->getSourceContext()); })()), "types", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 193, $this->getSourceContext()); })()), "types", array()), 'widget', array("attr" => array("class" => "task_field")));
        echo "
            </div>
            <div class=\"col-lg-3 col-sm-3 \">
            ";
        // line 196
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 196, $this->getSourceContext()); })()), "localites", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 196, $this->getSourceContext()); })()), "localites", array()), 'widget', array("attr" => array("class" => "task_field")));
        echo "
            </div>
            
            <div class=\"col-lg-3 col-sm-4\">
           ";
        // line 200
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 200, $this->getSourceContext()); })()), "prix", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 200, $this->getSourceContext()); })()), "prix", array()), 'widget');
        echo "
              </div>
              <div class=\"col-lg-3 col-sm-4\">
              btn btn-success
         ";
        // line 204
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 204, $this->getSourceContext()); })()), "chercher", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "

              </div>
               ";
        // line 207
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 207, $this->getSourceContext()); })()), 'form_end');
        echo "
          </div>
          
          
        </div>
        <div class=\"col-lg-5 col-lg-offset-1 col-sm-6 \">
          <p>
Inscrivez-vous maintenant et soyez mis à jour avec toutes les offres immobilières.</p>
          <button class=\"btn btn-info\"   data-toggle=\"modal\" data-target=\"#loginpop\">Login</button>        </div>
      </div>
    </div>
  </div>
</div>

<!-- banner -->
<div class=\"container\">
  <div class=\"properties-listing spacer\"> <a href=\"buysalerent.php\" class=\"pull-right viewall\">View All Listing</a>
   
    ";
        // line 225
        $this->displayBlock('catalogue', $context, $blocks);
        // line 277
        echo "  </div>
  <div class=\"spacer\">
    <div class=\"row\">
      <div class=\"col-lg-6 col-sm-9 recent-view\">
        <h3>A propos de nous </h3>
        <p>Mbarrikallah immo est ....<br><a href=\"about.php\">Lire plus</a></p>
      
      </div>
      <div class=\"col-lg-5 col-lg-offset-1 col-sm-3 recommended\">
        <h3>Propriete recommande</h3>
        <div id=\"myCarousel\" class=\"carousel slide\">
          <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\" class=\"\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\" class=\"\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"3\" class=\"\"></li>
          </ol>
          <!-- Carousel items -->
          <div class=\"carousel-inner\">
            <div class=\"item active\">
              <div class=\"row\">
                <div class=\"col-lg-4\"><img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/properties/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"properties\"/></div>
                <div class=\"col-lg-8\">
                  <h5><a href=\"property-detail.php\">Integer sed porta quam</a></h5>
                  <p class=\"price\">\$300,000</p>
                  <a href=\"property-detail.php\" class=\"more\">Plus de details</a> </div>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"row\">
                <div class=\"col-lg-4\"><img src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/properties/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"properties\"/></div>
                <div class=\"col-lg-8\">
                  <h5><a href=\"property-detail.php\">Integer sed porta quam</a></h5>
                  <p class=\"price\">\$300,000</p>
                  <a href=\"property-detail.php\" class=\"more\">Plus de details</a> </div>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"row\">
                <div class=\"col-lg-4\"><img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/properties/3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"properties\"/></div>
                <div class=\"col-lg-8\">
                  <h5><a href=\"property-detail.php\">Integer sed porta quam</a></h5>
                  <p class=\"price\">\$300,000</p>
                  <a href=\"property-detail.php\" class=\"more\">Plus de details</a> </div>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"row\">
                <div class=\"col-lg-4\"><img src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/properties/4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"properties\"/></div>
                <div class=\"col-lg-8\">
                  <h5><a href=\"property-detail.php\">Integer sed porta quam</a></h5>
                  <p class=\"price\">\$300,000</p>
                  <a href=\"property-detail.php\" class=\"more\">Plus de details</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_c4b7259b7965c27c1844e5d6e363f52fb32e9b7febe110407b09d56b73cdb491->leave($__internal_c4b7259b7965c27c1844e5d6e363f52fb32e9b7febe110407b09d56b73cdb491_prof);

        
        $__internal_c8d76dede4afba3b217a101ff7570dad4809ead73892fb241911a8828533bfcd->leave($__internal_c8d76dede4afba3b217a101ff7570dad4809ead73892fb241911a8828533bfcd_prof);

    }

    // line 225
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_e166364926785519dd68431d2d5400259a814e59d96fbfff64d6ba06828f8329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e166364926785519dd68431d2d5400259a814e59d96fbfff64d6ba06828f8329->enter($__internal_e166364926785519dd68431d2d5400259a814e59d96fbfff64d6ba06828f8329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_60ba3deba6a910fa16499f28b276935b485d2eab1fb8b9f124e5e753317c508e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ba3deba6a910fa16499f28b276935b485d2eab1fb8b9f124e5e753317c508e->enter($__internal_60ba3deba6a910fa16499f28b276935b485d2eab1fb8b9f124e5e753317c508e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 226
        if ( !array_key_exists("x", $context)) {
            // line 227
            echo "       <h2> Propriétés en vedette</h2>
   
    <div id=\"owl-example\" class=\"owl-carousel\">
    ";
            // line 230
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 230, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
                // line 231
                echo "      <div class=\"properties\">
       ";
                // line 232
                $context["c"] = 0;
                echo " 
       ";
                // line 233
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "image", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 234
                    echo "         ";
                    if (((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 234, $this->getSourceContext()); })()) == 0)) {
                        // line 235
                        echo "        <div class=\"image-holder\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/properties/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
                        echo "\" class=\"img-responsive\" alt=\"properties\"/>
          
            ";
                        // line 237
                        $context["c"] = ((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 237, $this->getSourceContext()); })()) + 1);
                        echo " 
         ";
                    }
                    // line 239
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
  <div class=\"status sold\">Sold</div>
        </div>
        <h4><a href=\"property-detail.php\">";
                // line 242
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "nom", array()), "html", null, true);
                echo "</a></h4>
        <p class=\"price\">Prix: ";
                // line 243
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "prix", array()), "html", null, true);
                echo "frcfa</p>
        <div class=\"listing-detail\"><span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Bed Room\">5</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Living Room\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Parking\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Kitchen\">1</span> </div>
        <a class=\"btn btn-primary\" href=\"";
                // line 245
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()))), "html", null, true);
                echo "\">Voir Details</a>
      </div>
     
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo " 
        ";
        }
        // line 250
        echo "     ";
        if (array_key_exists("x", $context)) {
            // line 251
            echo "      <h2> Propriétés en vedette</h2>
   
    <div id=\"owl-example\" class=\"owl-carousel\">
    ";
            // line 254
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["bien"]);
            foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
                // line 255
                echo "      <div class=\"properties\">
       ";
                // line 256
                $context["c"] = 0;
                echo " 
       ";
                // line 257
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "image", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 258
                    echo "         ";
                    if (((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 258, $this->getSourceContext()); })()) == 0)) {
                        // line 259
                        echo "        <div class=\"image-holder\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/properties/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
                        echo "\" class=\"img-responsive\" alt=\"properties\"/>
          
            ";
                        // line 261
                        $context["c"] = ((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 261, $this->getSourceContext()); })()) + 1);
                        echo " 
         ";
                    }
                    // line 263
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
  <div class=\"status sold\">Sold</div>
        </div>
        <h4><a href=\"property-detail.php\">";
                // line 266
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "nom", array()), "html", null, true);
                echo "</a></h4>
        <p class=\"price\">Prix: ";
                // line 267
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "prix", array()), "html", null, true);
                echo "frcfa</p>
        <div class=\"listing-detail\"><span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Bed Room\">5</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Living Room\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Parking\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Kitchen\">1</span> </div>
        <a class=\"btn btn-primary\" href=\"";
                // line 269
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()))), "html", null, true);
                echo "\">Voir Details</a>
      </div>
     
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo " 

     
     ";
        }
        // line 276
        echo "    ";
        
        $__internal_60ba3deba6a910fa16499f28b276935b485d2eab1fb8b9f124e5e753317c508e->leave($__internal_60ba3deba6a910fa16499f28b276935b485d2eab1fb8b9f124e5e753317c508e_prof);

        
        $__internal_e166364926785519dd68431d2d5400259a814e59d96fbfff64d6ba06828f8329->leave($__internal_e166364926785519dd68431d2d5400259a814e59d96fbfff64d6ba06828f8329_prof);

    }

    // line 339
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5a6e539a3c87e202a26679b25e9be9fed9c1a32b40ee509732140b5074ac7933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a6e539a3c87e202a26679b25e9be9fed9c1a32b40ee509732140b5074ac7933->enter($__internal_5a6e539a3c87e202a26679b25e9be9fed9c1a32b40ee509732140b5074ac7933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_429436f31dde069cff994d03b1be74b53635e7ef50a2133c6e0f4fb23faf1c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429436f31dde069cff994d03b1be74b53635e7ef50a2133c6e0f4fb23faf1c77->enter($__internal_429436f31dde069cff994d03b1be74b53635e7ef50a2133c6e0f4fb23faf1c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 340
        echo "
<div class=\"footer\">

<div class=\"container\">



<div class=\"row\">
            <div class=\"col-lg-3 col-sm-3\">
                   <h4>Informations</h4>
                   <ul class=\"row\">
                <li class=\"col-lg-12 col-sm-12 col-xs-3\"><a href=\"about.php\">A propos</a></li>
                <li class=\"col-lg-12 col-sm-12 col-xs-3\"><a href=\"agents.php\">Agents</a></li>         
                <li class=\"col-lg-12 col-sm-12 col-xs-3\"><a href=\"blog.php\">Blog</a></li>
                <li class=\"col-lg-12 col-sm-12 col-xs-3\"><a href=\"contact.php\">Contact</a></li>
              </ul>
            </div>
            
            <div class=\"col-lg-3 col-sm-3\">
                    <h4>Notifications</h4>
                    <p>
Recevez des notifications sur les dernières propriétés sur notre place de marché.</p>
                    <form class=\"form-inline\" role=\"form\">
                            <input type=\"text\" placeholder=\"Enter Your email address\" class=\"form-control\">
                                <button class=\"btn btn-success\" type=\"button\">Notify Me!</button></form>
            </div>
            
            <div class=\"col-lg-3 col-sm-3\">
                    <h4>Suivez nous</h4>
                    <a href=\"#\"><img src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\"></a>
                    <a href=\"#\"><img src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" alt=\"twitter\"></a>
                    <a href=\"#\"><img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/linkedin.png"), "html", null, true);
        echo "\" alt=\"linkedin\"></a>
                    <a href=\"#\"><img src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/instagram.png"), "html", null, true);
        echo "\" alt=\"instagram\"></a>
            </div>

             <div class=\"col-lg-3 col-sm-3\">
                    <h4>Contacter nous</h4>
                    <p><b>Mbarrikallah-immo.</b><br>
<span class=\"glyphicon glyphicon-map-marker\"></span> Goxumbacc Saint-louis, Senegal <br>
<span class=\"glyphicon glyphicon-envelope\"></span> kheuchebambiste@gmail.com<br>
<span class=\"glyphicon glyphicon-earphone\"></span> (221) 774262278</p>
            </div>
        </div>
<p class=\"copyright\">Copyright 2018. Tout droit reserve.\t</p>


</div></div>




<!-- Modal -->
<div id=\"loginpop\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"row\">
        <div class=\"col-sm-6 login\">
        <h4>Login</h4>
          <form class=\"\" role=\"form\">
        <div class=\"form-group\">
          <label class=\"sr-only\" for=\"exampleInputEmail2\">Email address</label>
          <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Enter email\">
        </div>
        <div class=\"form-group\">
          <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
          <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword2\" placeholder=\"Password\">
        </div>
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\"> Remember me
          </label>
        </div>
        <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
      </form>          
        </div>
        <div class=\"col-sm-6\">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type=\"submit\" class=\"btn btn-info\"  onclick=\"window.location.href='register.php'\">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->
";
        // line 426
        $this->displayBlock('javascript', $context, $blocks);
        // line 433
        echo "

</body>
</html>



";
        
        $__internal_429436f31dde069cff994d03b1be74b53635e7ef50a2133c6e0f4fb23faf1c77->leave($__internal_429436f31dde069cff994d03b1be74b53635e7ef50a2133c6e0f4fb23faf1c77_prof);

        
        $__internal_5a6e539a3c87e202a26679b25e9be9fed9c1a32b40ee509732140b5074ac7933->leave($__internal_5a6e539a3c87e202a26679b25e9be9fed9c1a32b40ee509732140b5074ac7933_prof);

    }

    // line 426
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_bd724d8da96b442efdfd30a78a7a17538900ac74b99ad96fe61660c150941bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd724d8da96b442efdfd30a78a7a17538900ac74b99ad96fe61660c150941bfa->enter($__internal_bd724d8da96b442efdfd30a78a7a17538900ac74b99ad96fe61660c150941bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_dd1086611bb53d24154ccfba4ee325b91c76ff9a011b5066e12ddfd0ee9acbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1086611bb53d24154ccfba4ee325b91c76ff9a011b5066e12ddfd0ee9acbe4->enter($__internal_dd1086611bb53d24154ccfba4ee325b91c76ff9a011b5066e12ddfd0ee9acbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 427
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/script.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/jquery.slitslider.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/jquery.ba-cond.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/modernizr.custom.79639.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_dd1086611bb53d24154ccfba4ee325b91c76ff9a011b5066e12ddfd0ee9acbe4->leave($__internal_dd1086611bb53d24154ccfba4ee325b91c76ff9a011b5066e12ddfd0ee9acbe4_prof);

        
        $__internal_bd724d8da96b442efdfd30a78a7a17538900ac74b99ad96fe61660c150941bfa->leave($__internal_bd724d8da96b442efdfd30a78a7a17538900ac74b99ad96fe61660c150941bfa_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle::accueil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  767 => 430,  763 => 429,  759 => 428,  754 => 427,  745 => 426,  728 => 433,  726 => 426,  669 => 372,  665 => 371,  661 => 370,  657 => 369,  626 => 340,  617 => 339,  607 => 276,  601 => 272,  591 => 269,  586 => 267,  582 => 266,  572 => 263,  567 => 261,  561 => 259,  558 => 258,  554 => 257,  550 => 256,  547 => 255,  543 => 254,  538 => 251,  535 => 250,  531 => 248,  521 => 245,  516 => 243,  512 => 242,  502 => 239,  497 => 237,  491 => 235,  488 => 234,  484 => 233,  480 => 232,  477 => 231,  473 => 230,  468 => 227,  466 => 226,  457 => 225,  433 => 325,  421 => 316,  409 => 307,  397 => 298,  374 => 277,  372 => 225,  351 => 207,  345 => 204,  337 => 200,  329 => 196,  322 => 193,  317 => 191,  224 => 100,  215 => 99,  193 => 85,  167 => 62,  135 => 33,  131 => 32,  127 => 31,  123 => 30,  119 => 29,  111 => 24,  107 => 23,  103 => 22,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  74 => 11,  69 => 9,  64 => 7,  57 => 2,  48 => 1,  38 => 339,  36 => 99,  32 => 97,  30 => 1,);
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


<!-- Header Starts -->
<div class=\"navbar-wrapper\">

        <div class=\"navbar-inverse\" role=\"navigation\">
          <div class=\"container\">
            <div class=\"navbar-header\">


              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class=\"navbar-collapse  collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
               <li class=\"active\"><a href=\"{{path('accueil')}}\">Acuueil</a></li>
                <li><a href=\"about.php\">A propos</a></li>
                <li><a href=\"agents.php\">Agents</a></li>         
                <li><a href=\"blog.php\">Blog</a></li>
                <li><a href=\"contact.php\">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class=\"container\">

<!-- Header Starts -->
<div class=\"header\">
<a href=\"index.php\"><img src=\"{{asset('images/imageedit__5471324689.png')}}\" alt=\"Realestate\"></a>

              <ul class=\"pull-right\">
                <li><a href=\"buysalerent.php\">Piscine</a></li>
                <li><a href=\"buysalerent.php\">Jacousie</a></li> 
               <li><a href=\"buysalerent.php\">Salle de Conference</a></li>         
        
              </ul>
</div>
<!-- #Header Starts -->
</div>
{% endblock %}


{% block content %}
<div class=\"\">

    

            <div id=\"slider\" class=\"sl-slider-wrapper\">

        <div class=\"sl-slider\">
        
          <div class=\"sl-slide\" data-orientation=\"horizontal\" data-slice1-rotation=\"-25\" data-slice2-rotation=\"-25\" data-slice1-scale=\"2\" data-slice2-scale=\"2\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-1\"></div>
             
              <h2><a href=\"#\">2 Chambre et 1 Aire de salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span>Sud Saint-Louis, Senegal</p>

<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>      <cite>200.000frcfa</cite>
            </div>
          </div>
          
          <div class=\"sl-slide\" data-orientation=\"vertical\" data-slice1-rotation=\"10\" data-slice2-rotation=\"-15\" data-slice1-scale=\"1.5\" data-slice2-scale=\"1.5\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-2\"></div>
              <h2><a href=\"#\">
2 chambres à coucher et 1 appartement salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span>Nord Saint-Louis, Senegal</p>
<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>             
              <cite>200.000frcfa</cite>
              </blockquote>
            </div>
          </div>
          
          <div class=\"sl-slide\" data-orientation=\"horizontal\" data-slice1-rotation=\"3\" data-slice2-rotation=\"3\" data-slice1-scale=\"2\" data-slice2-scale=\"1\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-3\"></div>
              <h2><a href=\"#\">2 Chambre et 1 Aire de salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span> Goxumbacc Saint-Louis, Senegal</p>
<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>             
              <cite>200.000frcfa</cite>
              </blockquote>
            </div>
          </div>
          
          <div class=\"sl-slide\" data-orientation=\"vertical\" data-slice1-rotation=\"-5\" data-slice2-rotation=\"25\" data-slice1-scale=\"2\" data-slice2-scale=\"1\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-4\"></div>
              <h2><a href=\"#\">2 Chambre et 1 Aire de salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span> Guet-Ndar Saint-Louis, Senegal</p>
<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>              
              <cite>200.000frcfa</cite>
              </blockquote>
            </div>
          </div>
          
          <div class=\"sl-slide\" data-orientation=\"horizontal\" data-slice1-rotation=\"-5\" data-slice2-rotation=\"10\" data-slice1-scale=\"2\" data-slice2-scale=\"1\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-5\"></div>
              <h2><a href=\"#\">2 Chambre et 1 Aire de salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span> santiaba Saint-louis, Senegal</p>
<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>              
              <cite>200.000frcfa</cite>
              </blockquote>
            </div>
          </div>
        </div><!-- /sl-slider -->



        <nav id=\"nav-dots\" class=\"nav-dots\">
          <span class=\"nav-dot-current\"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>
<div class=\"banner-search\">
  <div class=\"container\"> 
    <!-- banner -->
    <h3>Recherchez en fonction de vos critaires</h3>
    <div class=\"searchbar\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-sm-6\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search of Properties\">
          <div class=\"row\">
          {{ form_start(form) }}
           <div class=\"col-lg-3 col-sm-3 \">
            {{ form_label(form.types) }}{{ form_widget(form.types,{'attr': {'class': 'task_field'}}) }}
            </div>
            <div class=\"col-lg-3 col-sm-3 \">
            {{ form_label(form.localites) }}{{ form_widget(form.localites,{'attr': {'class': 'task_field'}}) }}
            </div>
            
            <div class=\"col-lg-3 col-sm-4\">
           {{ form_label(form.prix) }}{{ form_widget(form.prix) }}
              </div>
              <div class=\"col-lg-3 col-sm-4\">
              btn btn-success
         {{ form_widget(form.chercher,{'attr': {'class': 'btn btn-success'}}) }}

              </div>
               {{ form_end(form) }}
          </div>
          
          
        </div>
        <div class=\"col-lg-5 col-lg-offset-1 col-sm-6 \">
          <p>
Inscrivez-vous maintenant et soyez mis à jour avec toutes les offres immobilières.</p>
          <button class=\"btn btn-info\"   data-toggle=\"modal\" data-target=\"#loginpop\">Login</button>        </div>
      </div>
    </div>
  </div>
</div>

<!-- banner -->
<div class=\"container\">
  <div class=\"properties-listing spacer\"> <a href=\"buysalerent.php\" class=\"pull-right viewall\">View All Listing</a>
   
    {% block catalogue %}
{% if x is not defined %}
       <h2> Propriétés en vedette</h2>
   
    <div id=\"owl-example\" class=\"owl-carousel\">
    {% for bien in biens %}
      <div class=\"properties\">
       {% set c = 0 %} 
       {% for i in bien.image %}
         {% if c == 0 %}
        <div class=\"image-holder\"><img src=\"{{asset('images/properties/'~i.image)}}\" class=\"img-responsive\" alt=\"properties\"/>
          
            {% set c = c+ 1 %} 
         {% endif %}
  {% endfor %} 
  <div class=\"status sold\">Sold</div>
        </div>
        <h4><a href=\"property-detail.php\">{{bien.nom}}</a></h4>
        <p class=\"price\">Prix: {{bien.prix}}frcfa</p>
        <div class=\"listing-detail\"><span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Bed Room\">5</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Living Room\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Parking\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Kitchen\">1</span> </div>
        <a class=\"btn btn-primary\" href=\"{{path('detail',{'id':bien.id})}}\">Voir Details</a>
      </div>
     
     {% endfor %} 
        {% endif %}
     {% if x is defined %}
      <h2> Propriétés en vedette</h2>
   
    <div id=\"owl-example\" class=\"owl-carousel\">
    {% for bien in bien %}
      <div class=\"properties\">
       {% set c = 0 %} 
       {% for i in bien.image %}
         {% if c == 0 %}
        <div class=\"image-holder\"><img src=\"{{asset('images/properties/'~i.image)}}\" class=\"img-responsive\" alt=\"properties\"/>
          
            {% set c = c+ 1 %} 
         {% endif %}
  {% endfor %} 
  <div class=\"status sold\">Sold</div>
        </div>
        <h4><a href=\"property-detail.php\">{{bien.nom}}</a></h4>
        <p class=\"price\">Prix: {{bien.prix}}frcfa</p>
        <div class=\"listing-detail\"><span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Bed Room\">5</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Living Room\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Parking\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Kitchen\">1</span> </div>
        <a class=\"btn btn-primary\" href=\"{{path('detail',{'id':bien.id})}}\">Voir Details</a>
      </div>
     
     {% endfor %} 

     
     {% endif %}
    {% endblock  %}
  </div>
  <div class=\"spacer\">
    <div class=\"row\">
      <div class=\"col-lg-6 col-sm-9 recent-view\">
        <h3>A propos de nous </h3>
        <p>Mbarrikallah immo est ....<br><a href=\"about.php\">Lire plus</a></p>
      
      </div>
      <div class=\"col-lg-5 col-lg-offset-1 col-sm-3 recommended\">
        <h3>Propriete recommande</h3>
        <div id=\"myCarousel\" class=\"carousel slide\">
          <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\" class=\"\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\" class=\"\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"3\" class=\"\"></li>
          </ol>
          <!-- Carousel items -->
          <div class=\"carousel-inner\">
            <div class=\"item active\">
              <div class=\"row\">
                <div class=\"col-lg-4\"><img src=\"{{asset('images/properties/1.jpg')}}\" class=\"img-responsive\" alt=\"properties\"/></div>
                <div class=\"col-lg-8\">
                  <h5><a href=\"property-detail.php\">Integer sed porta quam</a></h5>
                  <p class=\"price\">\$300,000</p>
                  <a href=\"property-detail.php\" class=\"more\">Plus de details</a> </div>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"row\">
                <div class=\"col-lg-4\"><img src=\"{{asset('images/properties/2.jpg')}}\" class=\"img-responsive\" alt=\"properties\"/></div>
                <div class=\"col-lg-8\">
                  <h5><a href=\"property-detail.php\">Integer sed porta quam</a></h5>
                  <p class=\"price\">\$300,000</p>
                  <a href=\"property-detail.php\" class=\"more\">Plus de details</a> </div>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"row\">
                <div class=\"col-lg-4\"><img src=\"{{asset('images/properties/3.jpg')}}\" class=\"img-responsive\" alt=\"properties\"/></div>
                <div class=\"col-lg-8\">
                  <h5><a href=\"property-detail.php\">Integer sed porta quam</a></h5>
                  <p class=\"price\">\$300,000</p>
                  <a href=\"property-detail.php\" class=\"more\">Plus de details</a> </div>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"row\">
                <div class=\"col-lg-4\"><img src=\"{{asset('images/properties/4.jpg')}}\" class=\"img-responsive\" alt=\"properties\"/></div>
                <div class=\"col-lg-8\">
                  <h5><a href=\"property-detail.php\">Integer sed porta quam</a></h5>
                  <p class=\"price\">\$300,000</p>
                  <a href=\"property-detail.php\" class=\"more\">Plus de details</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
{% block footer %}

<div class=\"footer\">

<div class=\"container\">



<div class=\"row\">
            <div class=\"col-lg-3 col-sm-3\">
                   <h4>Informations</h4>
                   <ul class=\"row\">
                <li class=\"col-lg-12 col-sm-12 col-xs-3\"><a href=\"about.php\">A propos</a></li>
                <li class=\"col-lg-12 col-sm-12 col-xs-3\"><a href=\"agents.php\">Agents</a></li>         
                <li class=\"col-lg-12 col-sm-12 col-xs-3\"><a href=\"blog.php\">Blog</a></li>
                <li class=\"col-lg-12 col-sm-12 col-xs-3\"><a href=\"contact.php\">Contact</a></li>
              </ul>
            </div>
            
            <div class=\"col-lg-3 col-sm-3\">
                    <h4>Notifications</h4>
                    <p>
Recevez des notifications sur les dernières propriétés sur notre place de marché.</p>
                    <form class=\"form-inline\" role=\"form\">
                            <input type=\"text\" placeholder=\"Enter Your email address\" class=\"form-control\">
                                <button class=\"btn btn-success\" type=\"button\">Notify Me!</button></form>
            </div>
            
            <div class=\"col-lg-3 col-sm-3\">
                    <h4>Suivez nous</h4>
                    <a href=\"#\"><img src=\"{{asset('images/facebook.png')}}\" alt=\"facebook\"></a>
                    <a href=\"#\"><img src=\"{{asset('images/twitter.png')}}\" alt=\"twitter\"></a>
                    <a href=\"#\"><img src=\"{{asset('images/linkedin.png')}}\" alt=\"linkedin\"></a>
                    <a href=\"#\"><img src=\"{{asset('images/instagram.png')}}\" alt=\"instagram\"></a>
            </div>

             <div class=\"col-lg-3 col-sm-3\">
                    <h4>Contacter nous</h4>
                    <p><b>Mbarrikallah-immo.</b><br>
<span class=\"glyphicon glyphicon-map-marker\"></span> Goxumbacc Saint-louis, Senegal <br>
<span class=\"glyphicon glyphicon-envelope\"></span> kheuchebambiste@gmail.com<br>
<span class=\"glyphicon glyphicon-earphone\"></span> (221) 774262278</p>
            </div>
        </div>
<p class=\"copyright\">Copyright 2018. Tout droit reserve.\t</p>


</div></div>




<!-- Modal -->
<div id=\"loginpop\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"row\">
        <div class=\"col-sm-6 login\">
        <h4>Login</h4>
          <form class=\"\" role=\"form\">
        <div class=\"form-group\">
          <label class=\"sr-only\" for=\"exampleInputEmail2\">Email address</label>
          <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Enter email\">
        </div>
        <div class=\"form-group\">
          <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
          <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword2\" placeholder=\"Password\">
        </div>
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\"> Remember me
          </label>
        </div>
        <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
      </form>          
        </div>
        <div class=\"col-sm-6\">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type=\"submit\" class=\"btn btn-info\"  onclick=\"window.location.href='register.php'\">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->
{% block javascript %}
 <script src=\"{{asset('assets/script.js')}}\"></script>
  <script src=\"{{asset('assets/slitslider/js/jquery.slitslider.js')}}\"></script>
  <script src=\"{{asset('assets/slitslider/js/jquery.ba-cond.min.js')}}\"></script>
  <script src=\"{{asset('assets/slitslider/js/modernizr.custom.79639.js')}}\"></script>

{% endblock %}


</body>
</html>



{% endblock %}
", "KEURGUIimmoBundle::accueil.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/accueil.html.twig");
    }
}
