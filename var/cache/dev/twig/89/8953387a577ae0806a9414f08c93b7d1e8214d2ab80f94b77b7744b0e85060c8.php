<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_6c9e3f0ccd453ea02e38423a89e264d6c8cf200b10ff2a93a26974fcd424a61d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adb96dcc3bc2fd553fbca4430731825f3317f015e9a685e30925aca308def251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb96dcc3bc2fd553fbca4430731825f3317f015e9a685e30925aca308def251->enter($__internal_adb96dcc3bc2fd553fbca4430731825f3317f015e9a685e30925aca308def251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_a73123b33dd8fb078f34506793be96dce0d63aaa653ebdd7ec002000a06a31c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73123b33dd8fb078f34506793be96dce0d63aaa653ebdd7ec002000a06a31c4->enter($__internal_a73123b33dd8fb078f34506793be96dce0d63aaa653ebdd7ec002000a06a31c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adb96dcc3bc2fd553fbca4430731825f3317f015e9a685e30925aca308def251->leave($__internal_adb96dcc3bc2fd553fbca4430731825f3317f015e9a685e30925aca308def251_prof);

        
        $__internal_a73123b33dd8fb078f34506793be96dce0d63aaa653ebdd7ec002000a06a31c4->leave($__internal_a73123b33dd8fb078f34506793be96dce0d63aaa653ebdd7ec002000a06a31c4_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_d61aa2b2b7e064756927db6a249f5cdd7e345405ddf26240b60682ceef81a7c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d61aa2b2b7e064756927db6a249f5cdd7e345405ddf26240b60682ceef81a7c3->enter($__internal_d61aa2b2b7e064756927db6a249f5cdd7e345405ddf26240b60682ceef81a7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1e68ef58f48d7653c4bf3f9c17efa50f393463e2c260660fc74004a832877986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e68ef58f48d7653c4bf3f9c17efa50f393463e2c260660fc74004a832877986->enter($__internal_1e68ef58f48d7653c4bf3f9c17efa50f393463e2c260660fc74004a832877986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <div>
        ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "            ";
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
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 13
        echo "    </div>
 ";
        // line 14
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 15
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 16
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 17
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 18
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        }
        // line 23
        echo "
    <div>
        ";
        // line 25
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 27
        echo "    </div>

    ";
        
        $__internal_1e68ef58f48d7653c4bf3f9c17efa50f393463e2c260660fc74004a832877986->leave($__internal_1e68ef58f48d7653c4bf3f9c17efa50f393463e2c260660fc74004a832877986_prof);

        
        $__internal_d61aa2b2b7e064756927db6a249f5cdd7e345405ddf26240b60682ceef81a7c3->leave($__internal_d61aa2b2b7e064756927db6a249f5cdd7e345405ddf26240b60682ceef81a7c3_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f74e3e172b8f83bff01f09e870f09e45db45e252c286583a11c29de7023b65d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74e3e172b8f83bff01f09e870f09e45db45e252c286583a11c29de7023b65d3->enter($__internal_f74e3e172b8f83bff01f09e870f09e45db45e252c286583a11c29de7023b65d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f1d2ea3e18744c4e43961a9fd8d6007908935eca4b5024435a46fdb142996401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d2ea3e18744c4e43961a9fd8d6007908935eca4b5024435a46fdb142996401->enter($__internal_f1d2ea3e18744c4e43961a9fd8d6007908935eca4b5024435a46fdb142996401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "        ";
        
        $__internal_f1d2ea3e18744c4e43961a9fd8d6007908935eca4b5024435a46fdb142996401->leave($__internal_f1d2ea3e18744c4e43961a9fd8d6007908935eca4b5024435a46fdb142996401_prof);

        
        $__internal_f74e3e172b8f83bff01f09e870f09e45db45e252c286583a11c29de7023b65d3->leave($__internal_f74e3e172b8f83bff01f09e870f09e45db45e252c286583a11c29de7023b65d3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 26,  135 => 25,  123 => 27,  121 => 25,  117 => 23,  114 => 22,  108 => 21,  99 => 18,  94 => 17,  89 => 16,  84 => 15,  82 => 14,  79 => 13,  71 => 11,  65 => 8,  61 => 7,  56 => 6,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("  {% extends \"::base1.html.twig\" %}
      {% block content %}

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
 {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>

    {% endblock %}", "FOSUserBundle::layout.html.twig", "/var/www/html/projet00000/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
