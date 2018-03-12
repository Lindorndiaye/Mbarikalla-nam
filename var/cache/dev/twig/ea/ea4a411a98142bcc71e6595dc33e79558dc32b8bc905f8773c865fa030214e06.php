<?php

/* ::base1.html.twig */
class __TwigTemplate_f9fbba8de65dbb396ccb025b68e4ee088aae75c38d7a4ba0c77e4a700ba40758 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b192b350d446b625f1ad9175ef3a67892b9bdd6ca8635b3e8c69bd0a93ff58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b192b350d446b625f1ad9175ef3a67892b9bdd6ca8635b3e8c69bd0a93ff58b->enter($__internal_4b192b350d446b625f1ad9175ef3a67892b9bdd6ca8635b3e8c69bd0a93ff58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

        $__internal_c960b99e2737961fe23f8d43e200cf39d6e255e65a2527cdbf3a4f09d14c3b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c960b99e2737961fe23f8d43e200cf39d6e255e65a2527cdbf3a4f09d14c3b9c->enter($__internal_c960b99e2737961fe23f8d43e200cf39d6e255e65a2527cdbf3a4f09d14c3b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" />
    </head>
    <body>

    <div class=\"container\">
    ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "    </div>

        <script src = \"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src = \"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>";
        
        $__internal_4b192b350d446b625f1ad9175ef3a67892b9bdd6ca8635b3e8c69bd0a93ff58b->leave($__internal_4b192b350d446b625f1ad9175ef3a67892b9bdd6ca8635b3e8c69bd0a93ff58b_prof);

        
        $__internal_c960b99e2737961fe23f8d43e200cf39d6e255e65a2527cdbf3a4f09d14c3b9c->leave($__internal_c960b99e2737961fe23f8d43e200cf39d6e255e65a2527cdbf3a4f09d14c3b9c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_74e8a0e1c8ca460e5476d09eff20f2a6522394720720398607f78affce6f2a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e8a0e1c8ca460e5476d09eff20f2a6522394720720398607f78affce6f2a41->enter($__internal_74e8a0e1c8ca460e5476d09eff20f2a6522394720720398607f78affce6f2a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6539c45f79c4dbd09754fa2595300d85eed418429627a0f7cee4bfb9ab2cae61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6539c45f79c4dbd09754fa2595300d85eed418429627a0f7cee4bfb9ab2cae61->enter($__internal_6539c45f79c4dbd09754fa2595300d85eed418429627a0f7cee4bfb9ab2cae61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "shahroze nawaz!";
        
        $__internal_6539c45f79c4dbd09754fa2595300d85eed418429627a0f7cee4bfb9ab2cae61->leave($__internal_6539c45f79c4dbd09754fa2595300d85eed418429627a0f7cee4bfb9ab2cae61_prof);

        
        $__internal_74e8a0e1c8ca460e5476d09eff20f2a6522394720720398607f78affce6f2a41->leave($__internal_74e8a0e1c8ca460e5476d09eff20f2a6522394720720398607f78affce6f2a41_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_44a9104568bcc537e45062c8812ba70a42e9420a07e11e718683c14c095157fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a9104568bcc537e45062c8812ba70a42e9420a07e11e718683c14c095157fd->enter($__internal_44a9104568bcc537e45062c8812ba70a42e9420a07e11e718683c14c095157fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d8f82e0dd9bb5be9a31ec7a1eb9e952f55e063ea93c5fd3ccb56ff03d6324363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f82e0dd9bb5be9a31ec7a1eb9e952f55e063ea93c5fd3ccb56ff03d6324363->enter($__internal_d8f82e0dd9bb5be9a31ec7a1eb9e952f55e063ea93c5fd3ccb56ff03d6324363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d8f82e0dd9bb5be9a31ec7a1eb9e952f55e063ea93c5fd3ccb56ff03d6324363->leave($__internal_d8f82e0dd9bb5be9a31ec7a1eb9e952f55e063ea93c5fd3ccb56ff03d6324363_prof);

        
        $__internal_44a9104568bcc537e45062c8812ba70a42e9420a07e11e718683c14c095157fd->leave($__internal_44a9104568bcc537e45062c8812ba70a42e9420a07e11e718683c14c095157fd_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_85970e8b71d0bb0b6a3b89082096a27fe5a9a6b6dfa57dfcb432c6f315a61e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85970e8b71d0bb0b6a3b89082096a27fe5a9a6b6dfa57dfcb432c6f315a61e00->enter($__internal_85970e8b71d0bb0b6a3b89082096a27fe5a9a6b6dfa57dfcb432c6f315a61e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3607d9a3f773878970bd1e4217ea33434bb2f4187e1b3bdf3027038f6a0d6a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3607d9a3f773878970bd1e4217ea33434bb2f4187e1b3bdf3027038f6a0d6a92->enter($__internal_3607d9a3f773878970bd1e4217ea33434bb2f4187e1b3bdf3027038f6a0d6a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3607d9a3f773878970bd1e4217ea33434bb2f4187e1b3bdf3027038f6a0d6a92->leave($__internal_3607d9a3f773878970bd1e4217ea33434bb2f4187e1b3bdf3027038f6a0d6a92_prof);

        
        $__internal_85970e8b71d0bb0b6a3b89082096a27fe5a9a6b6dfa57dfcb432c6f315a61e00->leave($__internal_85970e8b71d0bb0b6a3b89082096a27fe5a9a6b6dfa57dfcb432c6f315a61e00_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15928f1910b4de0900bb9f7f247af4ffa5ede14a0af6385d24524d9133fdb26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15928f1910b4de0900bb9f7f247af4ffa5ede14a0af6385d24524d9133fdb26c->enter($__internal_15928f1910b4de0900bb9f7f247af4ffa5ede14a0af6385d24524d9133fdb26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bca2de2e90ebd923bcbb2b84f5f907a4634355d29566d5a9c8dfa08bb48be91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca2de2e90ebd923bcbb2b84f5f907a4634355d29566d5a9c8dfa08bb48be91b->enter($__internal_bca2de2e90ebd923bcbb2b84f5f907a4634355d29566d5a9c8dfa08bb48be91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bca2de2e90ebd923bcbb2b84f5f907a4634355d29566d5a9c8dfa08bb48be91b->leave($__internal_bca2de2e90ebd923bcbb2b84f5f907a4634355d29566d5a9c8dfa08bb48be91b_prof);

        
        $__internal_15928f1910b4de0900bb9f7f247af4ffa5ede14a0af6385d24524d9133fdb26c->leave($__internal_15928f1910b4de0900bb9f7f247af4ffa5ede14a0af6385d24524d9133fdb26c_prof);

    }

    public function getTemplateName()
    {
        return "::base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 19,  111 => 14,  94 => 6,  76 => 5,  65 => 20,  63 => 19,  57 => 15,  55 => 14,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}shahroze nawaz!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" />
    </head>
    <body>

    <div class=\"container\">
    {% block content %}{% endblock %}
    </div>

        <script src = \"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src = \"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>", "::base1.html.twig", "/var/www/html/projet00000/app/Resources/views/base1.html.twig");
    }
}
