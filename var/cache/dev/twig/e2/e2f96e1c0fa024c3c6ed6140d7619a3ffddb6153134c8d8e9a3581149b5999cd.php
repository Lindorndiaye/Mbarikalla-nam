<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_f188eaeeead10bf92de66e72a6afca18164f2b23704a09d024b16daa8c99c86a extends Twig_Template
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
        $__internal_ac4e519da59ef8d1f64cd1639ce5be9467974791d9490574270a996301706a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4e519da59ef8d1f64cd1639ce5be9467974791d9490574270a996301706a62->enter($__internal_ac4e519da59ef8d1f64cd1639ce5be9467974791d9490574270a996301706a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_5144a2ad22542b1b8e936526ab5a3ca7274ac64bcde7d65316d4c087733acacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5144a2ad22542b1b8e936526ab5a3ca7274ac64bcde7d65316d4c087733acacc->enter($__internal_5144a2ad22542b1b8e936526ab5a3ca7274ac64bcde7d65316d4c087733acacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_ac4e519da59ef8d1f64cd1639ce5be9467974791d9490574270a996301706a62->leave($__internal_ac4e519da59ef8d1f64cd1639ce5be9467974791d9490574270a996301706a62_prof);

        
        $__internal_5144a2ad22542b1b8e936526ab5a3ca7274ac64bcde7d65316d4c087733acacc->leave($__internal_5144a2ad22542b1b8e936526ab5a3ca7274ac64bcde7d65316d4c087733acacc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
