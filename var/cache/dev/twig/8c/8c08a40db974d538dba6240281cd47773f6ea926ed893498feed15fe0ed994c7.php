<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_4e36198a1a3813387a6497f4b6de36566d4937b092187d713de8ed88ddfcc5e6 extends Twig_Template
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
        $__internal_6770758b7be1378916c702180ec96fa5fa10f35da65ee90336985e925d67c9df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6770758b7be1378916c702180ec96fa5fa10f35da65ee90336985e925d67c9df->enter($__internal_6770758b7be1378916c702180ec96fa5fa10f35da65ee90336985e925d67c9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_20fb302ca6b2e4418259a3061b7dbc29682a96fb500ecc6b4288e916195be85e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fb302ca6b2e4418259a3061b7dbc29682a96fb500ecc6b4288e916195be85e->enter($__internal_20fb302ca6b2e4418259a3061b7dbc29682a96fb500ecc6b4288e916195be85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6770758b7be1378916c702180ec96fa5fa10f35da65ee90336985e925d67c9df->leave($__internal_6770758b7be1378916c702180ec96fa5fa10f35da65ee90336985e925d67c9df_prof);

        
        $__internal_20fb302ca6b2e4418259a3061b7dbc29682a96fb500ecc6b4288e916195be85e->leave($__internal_20fb302ca6b2e4418259a3061b7dbc29682a96fb500ecc6b4288e916195be85e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
