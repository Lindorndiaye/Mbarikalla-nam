<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_16202d1f4569db1304a79eca2e6947549ef9a7d6ba212a1f3a86580b089c9ccb extends Twig_Template
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
        $__internal_e159c96aeb66aba036160832aae7342ccb6ffbe71489dea0c33129dfc6d64e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e159c96aeb66aba036160832aae7342ccb6ffbe71489dea0c33129dfc6d64e3e->enter($__internal_e159c96aeb66aba036160832aae7342ccb6ffbe71489dea0c33129dfc6d64e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_5123f4004698876ccef5d08dd590727f1f6df550b1bb90a24815d66ac925e20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5123f4004698876ccef5d08dd590727f1f6df550b1bb90a24815d66ac925e20b->enter($__internal_5123f4004698876ccef5d08dd590727f1f6df550b1bb90a24815d66ac925e20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e159c96aeb66aba036160832aae7342ccb6ffbe71489dea0c33129dfc6d64e3e->leave($__internal_e159c96aeb66aba036160832aae7342ccb6ffbe71489dea0c33129dfc6d64e3e_prof);

        
        $__internal_5123f4004698876ccef5d08dd590727f1f6df550b1bb90a24815d66ac925e20b->leave($__internal_5123f4004698876ccef5d08dd590727f1f6df550b1bb90a24815d66ac925e20b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
