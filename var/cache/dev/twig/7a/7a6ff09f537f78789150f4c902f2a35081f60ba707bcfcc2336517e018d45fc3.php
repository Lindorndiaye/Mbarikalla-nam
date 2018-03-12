<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_04d6f0604ceebd21663b5cc25b228dacfc6a3ab7fef4f63b4de44d138c4c0841 extends Twig_Template
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
        $__internal_8b57ff0d682566239976d9330340c27700cb35f86166b1044155eb745aa12b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b57ff0d682566239976d9330340c27700cb35f86166b1044155eb745aa12b7b->enter($__internal_8b57ff0d682566239976d9330340c27700cb35f86166b1044155eb745aa12b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_bb4e59f81cd5aa3c8d88624028d1e37343684585ed0b9055d712513044dac042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4e59f81cd5aa3c8d88624028d1e37343684585ed0b9055d712513044dac042->enter($__internal_bb4e59f81cd5aa3c8d88624028d1e37343684585ed0b9055d712513044dac042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8b57ff0d682566239976d9330340c27700cb35f86166b1044155eb745aa12b7b->leave($__internal_8b57ff0d682566239976d9330340c27700cb35f86166b1044155eb745aa12b7b_prof);

        
        $__internal_bb4e59f81cd5aa3c8d88624028d1e37343684585ed0b9055d712513044dac042->leave($__internal_bb4e59f81cd5aa3c8d88624028d1e37343684585ed0b9055d712513044dac042_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
