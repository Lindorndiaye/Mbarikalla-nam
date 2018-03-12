<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_bf8beb5972d1e9c30b33ee774f79b3cc956fead3ebf07c165dacd7da51702485 extends Twig_Template
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
        $__internal_356d27e1ca0a6fe98b0c8b78390c0cb91bb979a676ea7930dd402890b71de351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356d27e1ca0a6fe98b0c8b78390c0cb91bb979a676ea7930dd402890b71de351->enter($__internal_356d27e1ca0a6fe98b0c8b78390c0cb91bb979a676ea7930dd402890b71de351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_8c8b716a54a6f6508f4d6ed375005cc3b41d75033a5d018119c8ffab040894f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8b716a54a6f6508f4d6ed375005cc3b41d75033a5d018119c8ffab040894f7->enter($__internal_8c8b716a54a6f6508f4d6ed375005cc3b41d75033a5d018119c8ffab040894f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_356d27e1ca0a6fe98b0c8b78390c0cb91bb979a676ea7930dd402890b71de351->leave($__internal_356d27e1ca0a6fe98b0c8b78390c0cb91bb979a676ea7930dd402890b71de351_prof);

        
        $__internal_8c8b716a54a6f6508f4d6ed375005cc3b41d75033a5d018119c8ffab040894f7->leave($__internal_8c8b716a54a6f6508f4d6ed375005cc3b41d75033a5d018119c8ffab040894f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
