<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0d6fc3c71b55c5c099e395f0b3d7cc8d348e99d7b31c4aca228ec243b9c47dcf extends Twig_Template
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
        $__internal_6d35e5a126836d4b0d969d4dd65c7a339728fef05c7ceb427a4b1c252d35a167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d35e5a126836d4b0d969d4dd65c7a339728fef05c7ceb427a4b1c252d35a167->enter($__internal_6d35e5a126836d4b0d969d4dd65c7a339728fef05c7ceb427a4b1c252d35a167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_dcbc43cbc51043397b3d1f8457121778e049ef12b8ca060aad5f512c24d9362d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbc43cbc51043397b3d1f8457121778e049ef12b8ca060aad5f512c24d9362d->enter($__internal_dcbc43cbc51043397b3d1f8457121778e049ef12b8ca060aad5f512c24d9362d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6d35e5a126836d4b0d969d4dd65c7a339728fef05c7ceb427a4b1c252d35a167->leave($__internal_6d35e5a126836d4b0d969d4dd65c7a339728fef05c7ceb427a4b1c252d35a167_prof);

        
        $__internal_dcbc43cbc51043397b3d1f8457121778e049ef12b8ca060aad5f512c24d9362d->leave($__internal_dcbc43cbc51043397b3d1f8457121778e049ef12b8ca060aad5f512c24d9362d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
