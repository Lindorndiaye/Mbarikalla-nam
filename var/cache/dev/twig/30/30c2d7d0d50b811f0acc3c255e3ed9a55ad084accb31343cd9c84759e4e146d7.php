<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_33a6b04d556cd5eeb8771deadc3106eac5295185517b12533095c71bc8be9bdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c511bd836466e784641b7868a8dbd1d2d11b54122ef5e40f0ff57abefca6142f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c511bd836466e784641b7868a8dbd1d2d11b54122ef5e40f0ff57abefca6142f->enter($__internal_c511bd836466e784641b7868a8dbd1d2d11b54122ef5e40f0ff57abefca6142f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c36da959a8ad32394661d5d194417c00711b0564547a8c7f5d26af11ad38058b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36da959a8ad32394661d5d194417c00711b0564547a8c7f5d26af11ad38058b->enter($__internal_c36da959a8ad32394661d5d194417c00711b0564547a8c7f5d26af11ad38058b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c511bd836466e784641b7868a8dbd1d2d11b54122ef5e40f0ff57abefca6142f->leave($__internal_c511bd836466e784641b7868a8dbd1d2d11b54122ef5e40f0ff57abefca6142f_prof);

        
        $__internal_c36da959a8ad32394661d5d194417c00711b0564547a8c7f5d26af11ad38058b->leave($__internal_c36da959a8ad32394661d5d194417c00711b0564547a8c7f5d26af11ad38058b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
