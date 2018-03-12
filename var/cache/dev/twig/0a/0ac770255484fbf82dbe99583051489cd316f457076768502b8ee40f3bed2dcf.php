<?php

/* KEURGUIimmoBundle::layout.html.twig */
class __TwigTemplate_7cb5c36cb5000c369a0f5f17c94bc36c17ad1f5df1176720a584154f2f8ed581 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "KEURGUIimmoBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cd56eefd4cbe5b1283b3bee353dbc696537141999b6f070290730ef069d507d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd56eefd4cbe5b1283b3bee353dbc696537141999b6f070290730ef069d507d->enter($__internal_8cd56eefd4cbe5b1283b3bee353dbc696537141999b6f070290730ef069d507d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::layout.html.twig"));

        $__internal_de007a37c9a8e58105d8231cd2c1fe441fb92d46d4290aa311589507b7ae11b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de007a37c9a8e58105d8231cd2c1fe441fb92d46d4290aa311589507b7ae11b5->enter($__internal_de007a37c9a8e58105d8231cd2c1fe441fb92d46d4290aa311589507b7ae11b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cd56eefd4cbe5b1283b3bee353dbc696537141999b6f070290730ef069d507d->leave($__internal_8cd56eefd4cbe5b1283b3bee353dbc696537141999b6f070290730ef069d507d_prof);

        
        $__internal_de007a37c9a8e58105d8231cd2c1fe441fb92d46d4290aa311589507b7ae11b5->leave($__internal_de007a37c9a8e58105d8231cd2c1fe441fb92d46d4290aa311589507b7ae11b5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_21df81ae8c889e650e24825d939a6e28a4d50177fa36e808f31a199303805dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21df81ae8c889e650e24825d939a6e28a4d50177fa36e808f31a199303805dee->enter($__internal_21df81ae8c889e650e24825d939a6e28a4d50177fa36e808f31a199303805dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_751a5428c7077e7ea9708f6e8b669fbf51601e78beeb0bdb1637b60fcea21ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751a5428c7077e7ea9708f6e8b669fbf51601e78beeb0bdb1637b60fcea21ebd->enter($__internal_751a5428c7077e7ea9708f6e8b669fbf51601e78beeb0bdb1637b60fcea21ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
       <div>
            ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 11
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 13
        echo "        </div>
      
";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "

";
        
        $__internal_751a5428c7077e7ea9708f6e8b669fbf51601e78beeb0bdb1637b60fcea21ebd->leave($__internal_751a5428c7077e7ea9708f6e8b669fbf51601e78beeb0bdb1637b60fcea21ebd_prof);

        
        $__internal_21df81ae8c889e650e24825d939a6e28a4d50177fa36e808f31a199303805dee->leave($__internal_21df81ae8c889e650e24825d939a6e28a4d50177fa36e808f31a199303805dee_prof);

    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        $__internal_72580cf46fd12be573a87fd8a512ccb050f0c285a7698aae367e4bef650c2035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72580cf46fd12be573a87fd8a512ccb050f0c285a7698aae367e4bef650c2035->enter($__internal_72580cf46fd12be573a87fd8a512ccb050f0c285a7698aae367e4bef650c2035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a5f33fbe22b0723cde440677f7a325b9c4972319002e5aeb5a4912b1315b4d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f33fbe22b0723cde440677f7a325b9c4972319002e5aeb5a4912b1315b4d5b->enter($__internal_a5f33fbe22b0723cde440677f7a325b9c4972319002e5aeb5a4912b1315b4d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 16
        $this->displayParentBlock("header", $context, $blocks);
        echo "

";
        
        $__internal_a5f33fbe22b0723cde440677f7a325b9c4972319002e5aeb5a4912b1315b4d5b->leave($__internal_a5f33fbe22b0723cde440677f7a325b9c4972319002e5aeb5a4912b1315b4d5b_prof);

        
        $__internal_72580cf46fd12be573a87fd8a512ccb050f0c285a7698aae367e4bef650c2035->leave($__internal_72580cf46fd12be573a87fd8a512ccb050f0c285a7698aae367e4bef650c2035_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_1b848cecd0f8760f4e05b1834fc3f7db4cba076de7279a679235771cce8f58c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b848cecd0f8760f4e05b1834fc3f7db4cba076de7279a679235771cce8f58c7->enter($__internal_1b848cecd0f8760f4e05b1834fc3f7db4cba076de7279a679235771cce8f58c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cbfd2bcc31b5c9f7e45ac8ca7f334af10c1847d5102fc24980cc278f908699a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfd2bcc31b5c9f7e45ac8ca7f334af10c1847d5102fc24980cc278f908699a2->enter($__internal_cbfd2bcc31b5c9f7e45ac8ca7f334af10c1847d5102fc24980cc278f908699a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "

";
        
        $__internal_cbfd2bcc31b5c9f7e45ac8ca7f334af10c1847d5102fc24980cc278f908699a2->leave($__internal_cbfd2bcc31b5c9f7e45ac8ca7f334af10c1847d5102fc24980cc278f908699a2_prof);

        
        $__internal_1b848cecd0f8760f4e05b1834fc3f7db4cba076de7279a679235771cce8f58c7->leave($__internal_1b848cecd0f8760f4e05b1834fc3f7db4cba076de7279a679235771cce8f58c7_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 20,  122 => 19,  109 => 16,  100 => 15,  88 => 23,  86 => 19,  84 => 15,  80 => 13,  72 => 11,  66 => 8,  62 => 7,  57 => 6,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("  {% extends \"::base.html.twig\" %}
{% block body %}

       <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>
      
{% block header %}
{{parent()}}

{% endblock %}
{% block content %}


{% endblock %}


{% endblock %}", "KEURGUIimmoBundle::layout.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/layout.html.twig");
    }
}
