<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_eabad89878253c9156cd60660ff2c56741338edb41cae4ab1b4204fb11500040 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a574e35bad4314510e7efb9a869a1992965d8a0e84a3c739d2f657125204847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a574e35bad4314510e7efb9a869a1992965d8a0e84a3c739d2f657125204847->enter($__internal_2a574e35bad4314510e7efb9a869a1992965d8a0e84a3c739d2f657125204847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8f570e67583dc2bfdeb6af4b8081a2d26144b52bfa3af6125ecbb07a9f64fd82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f570e67583dc2bfdeb6af4b8081a2d26144b52bfa3af6125ecbb07a9f64fd82->enter($__internal_8f570e67583dc2bfdeb6af4b8081a2d26144b52bfa3af6125ecbb07a9f64fd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2a574e35bad4314510e7efb9a869a1992965d8a0e84a3c739d2f657125204847->leave($__internal_2a574e35bad4314510e7efb9a869a1992965d8a0e84a3c739d2f657125204847_prof);

        
        $__internal_8f570e67583dc2bfdeb6af4b8081a2d26144b52bfa3af6125ecbb07a9f64fd82->leave($__internal_8f570e67583dc2bfdeb6af4b8081a2d26144b52bfa3af6125ecbb07a9f64fd82_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_06378b396909866a70e54285b4ed108f7c03a2474470a2f5e051902378152638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06378b396909866a70e54285b4ed108f7c03a2474470a2f5e051902378152638->enter($__internal_06378b396909866a70e54285b4ed108f7c03a2474470a2f5e051902378152638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8330299b98ce0e0dea84235011a7cfe5207029c17bf0f9fc8ce3f03ce9a1730a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8330299b98ce0e0dea84235011a7cfe5207029c17bf0f9fc8ce3f03ce9a1730a->enter($__internal_8330299b98ce0e0dea84235011a7cfe5207029c17bf0f9fc8ce3f03ce9a1730a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8330299b98ce0e0dea84235011a7cfe5207029c17bf0f9fc8ce3f03ce9a1730a->leave($__internal_8330299b98ce0e0dea84235011a7cfe5207029c17bf0f9fc8ce3f03ce9a1730a_prof);

        
        $__internal_06378b396909866a70e54285b4ed108f7c03a2474470a2f5e051902378152638->leave($__internal_06378b396909866a70e54285b4ed108f7c03a2474470a2f5e051902378152638_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_17bd4940726588ce584c6e368849de999a681b184093b577ac268d209af20c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17bd4940726588ce584c6e368849de999a681b184093b577ac268d209af20c95->enter($__internal_17bd4940726588ce584c6e368849de999a681b184093b577ac268d209af20c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_150b959a9d916d135dfe961515f24a863ff348932e1ff9122bc54622596861f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150b959a9d916d135dfe961515f24a863ff348932e1ff9122bc54622596861f9->enter($__internal_150b959a9d916d135dfe961515f24a863ff348932e1ff9122bc54622596861f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_150b959a9d916d135dfe961515f24a863ff348932e1ff9122bc54622596861f9->leave($__internal_150b959a9d916d135dfe961515f24a863ff348932e1ff9122bc54622596861f9_prof);

        
        $__internal_17bd4940726588ce584c6e368849de999a681b184093b577ac268d209af20c95->leave($__internal_17bd4940726588ce584c6e368849de999a681b184093b577ac268d209af20c95_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdb4494c77f6300e7f807dbb43e105d2246e04ba657e2766700edcc013f45cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb4494c77f6300e7f807dbb43e105d2246e04ba657e2766700edcc013f45cd3->enter($__internal_fdb4494c77f6300e7f807dbb43e105d2246e04ba657e2766700edcc013f45cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_989e9180ff4a578bdb7b89a18018acbe7e34c34656a818c189a4fff327efd92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989e9180ff4a578bdb7b89a18018acbe7e34c34656a818c189a4fff327efd92e->enter($__internal_989e9180ff4a578bdb7b89a18018acbe7e34c34656a818c189a4fff327efd92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_989e9180ff4a578bdb7b89a18018acbe7e34c34656a818c189a4fff327efd92e->leave($__internal_989e9180ff4a578bdb7b89a18018acbe7e34c34656a818c189a4fff327efd92e_prof);

        
        $__internal_fdb4494c77f6300e7f807dbb43e105d2246e04ba657e2766700edcc013f45cd3->leave($__internal_fdb4494c77f6300e7f807dbb43e105d2246e04ba657e2766700edcc013f45cd3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
