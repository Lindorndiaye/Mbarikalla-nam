<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e8023d59594c8388363e34ccfc2b5dcccc6931bf3f479073e7370dcfb583673c extends Twig_Template
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
        $__internal_ad887029f55e5029f048587dcd6c6370e1d0ff6ff1cedb2e832b8be5ba4e05c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad887029f55e5029f048587dcd6c6370e1d0ff6ff1cedb2e832b8be5ba4e05c2->enter($__internal_ad887029f55e5029f048587dcd6c6370e1d0ff6ff1cedb2e832b8be5ba4e05c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c5594718b11d3dd38ea9ea3595f4dd78c612af92a722a43d663381b40c46b055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5594718b11d3dd38ea9ea3595f4dd78c612af92a722a43d663381b40c46b055->enter($__internal_c5594718b11d3dd38ea9ea3595f4dd78c612af92a722a43d663381b40c46b055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ad887029f55e5029f048587dcd6c6370e1d0ff6ff1cedb2e832b8be5ba4e05c2->leave($__internal_ad887029f55e5029f048587dcd6c6370e1d0ff6ff1cedb2e832b8be5ba4e05c2_prof);

        
        $__internal_c5594718b11d3dd38ea9ea3595f4dd78c612af92a722a43d663381b40c46b055->leave($__internal_c5594718b11d3dd38ea9ea3595f4dd78c612af92a722a43d663381b40c46b055_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
