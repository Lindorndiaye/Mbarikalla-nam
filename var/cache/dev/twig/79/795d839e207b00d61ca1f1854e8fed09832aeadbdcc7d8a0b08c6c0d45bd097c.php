<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_347bcc3a184b53d0dd10f9e34bca70eaff06c41c5ea4297fc54fc79a1b97581e extends Twig_Template
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
        $__internal_3bd1be154cf55af5c7f4089e1f64c27e204b56971d48d32e1d841555a015c0da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd1be154cf55af5c7f4089e1f64c27e204b56971d48d32e1d841555a015c0da->enter($__internal_3bd1be154cf55af5c7f4089e1f64c27e204b56971d48d32e1d841555a015c0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_bdb30ada481d4a26594cfffeb778b7c565f000632bcf7f0d2cf65bd27b02305a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb30ada481d4a26594cfffeb778b7c565f000632bcf7f0d2cf65bd27b02305a->enter($__internal_bdb30ada481d4a26594cfffeb778b7c565f000632bcf7f0d2cf65bd27b02305a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3bd1be154cf55af5c7f4089e1f64c27e204b56971d48d32e1d841555a015c0da->leave($__internal_3bd1be154cf55af5c7f4089e1f64c27e204b56971d48d32e1d841555a015c0da_prof);

        
        $__internal_bdb30ada481d4a26594cfffeb778b7c565f000632bcf7f0d2cf65bd27b02305a->leave($__internal_bdb30ada481d4a26594cfffeb778b7c565f000632bcf7f0d2cf65bd27b02305a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
