<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_70b5afcfc47e1d816daaea6c48c31fe39659b04298bff87affa5fe01749f4fde extends Twig_Template
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
        $__internal_8635d68f53c42ab7e32c9509ba5dc8b2d64481a02f40399c93e211419383e212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8635d68f53c42ab7e32c9509ba5dc8b2d64481a02f40399c93e211419383e212->enter($__internal_8635d68f53c42ab7e32c9509ba5dc8b2d64481a02f40399c93e211419383e212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_caa8ddd71ac5c1b28bed26f57ad57118acccfc600874f9177e435acb3052248d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa8ddd71ac5c1b28bed26f57ad57118acccfc600874f9177e435acb3052248d->enter($__internal_caa8ddd71ac5c1b28bed26f57ad57118acccfc600874f9177e435acb3052248d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8635d68f53c42ab7e32c9509ba5dc8b2d64481a02f40399c93e211419383e212->leave($__internal_8635d68f53c42ab7e32c9509ba5dc8b2d64481a02f40399c93e211419383e212_prof);

        
        $__internal_caa8ddd71ac5c1b28bed26f57ad57118acccfc600874f9177e435acb3052248d->leave($__internal_caa8ddd71ac5c1b28bed26f57ad57118acccfc600874f9177e435acb3052248d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
