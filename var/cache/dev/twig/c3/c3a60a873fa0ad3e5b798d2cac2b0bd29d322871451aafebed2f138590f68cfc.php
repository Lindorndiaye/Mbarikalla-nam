<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b6f4d003337fb8586571dbc187c10e97e1b489a9ffb8d7b7a4ac015d49c89cb3 extends Twig_Template
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
        $__internal_c4236855dfab8c69c55e601bbff96b5659689feb8283321e9a7b2f916df44134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4236855dfab8c69c55e601bbff96b5659689feb8283321e9a7b2f916df44134->enter($__internal_c4236855dfab8c69c55e601bbff96b5659689feb8283321e9a7b2f916df44134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b9c8aef337ae91eeaebb98f2dabd85ee25d9e3bb90409cc22010bf2d9bcb10d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c8aef337ae91eeaebb98f2dabd85ee25d9e3bb90409cc22010bf2d9bcb10d7->enter($__internal_b9c8aef337ae91eeaebb98f2dabd85ee25d9e3bb90409cc22010bf2d9bcb10d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c4236855dfab8c69c55e601bbff96b5659689feb8283321e9a7b2f916df44134->leave($__internal_c4236855dfab8c69c55e601bbff96b5659689feb8283321e9a7b2f916df44134_prof);

        
        $__internal_b9c8aef337ae91eeaebb98f2dabd85ee25d9e3bb90409cc22010bf2d9bcb10d7->leave($__internal_b9c8aef337ae91eeaebb98f2dabd85ee25d9e3bb90409cc22010bf2d9bcb10d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
