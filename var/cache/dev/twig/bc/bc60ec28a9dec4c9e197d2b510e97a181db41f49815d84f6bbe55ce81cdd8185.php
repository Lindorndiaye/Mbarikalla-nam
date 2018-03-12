<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_d83071b7aa4111234a3b6fcad6caf51a372d947321e48b44fcf16f0536ce645e extends Twig_Template
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
        $__internal_63f10e7b7689c235db8fa75a838d8c2af9d8e474405131a6c6e3847e0a3259fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f10e7b7689c235db8fa75a838d8c2af9d8e474405131a6c6e3847e0a3259fb->enter($__internal_63f10e7b7689c235db8fa75a838d8c2af9d8e474405131a6c6e3847e0a3259fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_a72eb68bad88c1509387221dc9ccd37cb93ec49b11cecb022fa2f47a431dcebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72eb68bad88c1509387221dc9ccd37cb93ec49b11cecb022fa2f47a431dcebb->enter($__internal_a72eb68bad88c1509387221dc9ccd37cb93ec49b11cecb022fa2f47a431dcebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_63f10e7b7689c235db8fa75a838d8c2af9d8e474405131a6c6e3847e0a3259fb->leave($__internal_63f10e7b7689c235db8fa75a838d8c2af9d8e474405131a6c6e3847e0a3259fb_prof);

        
        $__internal_a72eb68bad88c1509387221dc9ccd37cb93ec49b11cecb022fa2f47a431dcebb->leave($__internal_a72eb68bad88c1509387221dc9ccd37cb93ec49b11cecb022fa2f47a431dcebb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
