<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ba79bf0fdea6a60767143980d304b566d3bb33a3fd1290d9215fe2207257daa7 extends Twig_Template
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
        $__internal_4bfc540f296d8456fbcab2ff350016bf6415de8281748b8bcc19f3ee3117cf11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bfc540f296d8456fbcab2ff350016bf6415de8281748b8bcc19f3ee3117cf11->enter($__internal_4bfc540f296d8456fbcab2ff350016bf6415de8281748b8bcc19f3ee3117cf11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_32be90eff37521d9f9823a90c70d0d53828a60117e925580d361795c826860d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32be90eff37521d9f9823a90c70d0d53828a60117e925580d361795c826860d6->enter($__internal_32be90eff37521d9f9823a90c70d0d53828a60117e925580d361795c826860d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4bfc540f296d8456fbcab2ff350016bf6415de8281748b8bcc19f3ee3117cf11->leave($__internal_4bfc540f296d8456fbcab2ff350016bf6415de8281748b8bcc19f3ee3117cf11_prof);

        
        $__internal_32be90eff37521d9f9823a90c70d0d53828a60117e925580d361795c826860d6->leave($__internal_32be90eff37521d9f9823a90c70d0d53828a60117e925580d361795c826860d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
