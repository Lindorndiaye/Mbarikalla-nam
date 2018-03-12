<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_df88dcbe2a563158613d4fc70f66d2478b554e4154ed4c5e0ea1f26f8a09a9df extends Twig_Template
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
        $__internal_c4315c6f17f03bc97f4d4ec545ad920d6feb8afcb2aa3314a579e9db0c3b2ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4315c6f17f03bc97f4d4ec545ad920d6feb8afcb2aa3314a579e9db0c3b2ba5->enter($__internal_c4315c6f17f03bc97f4d4ec545ad920d6feb8afcb2aa3314a579e9db0c3b2ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_de57e387e1434b0634341c8cafcca533c0281d0cda54efcee6affb2fb0ee7c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de57e387e1434b0634341c8cafcca533c0281d0cda54efcee6affb2fb0ee7c0e->enter($__internal_de57e387e1434b0634341c8cafcca533c0281d0cda54efcee6affb2fb0ee7c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c4315c6f17f03bc97f4d4ec545ad920d6feb8afcb2aa3314a579e9db0c3b2ba5->leave($__internal_c4315c6f17f03bc97f4d4ec545ad920d6feb8afcb2aa3314a579e9db0c3b2ba5_prof);

        
        $__internal_de57e387e1434b0634341c8cafcca533c0281d0cda54efcee6affb2fb0ee7c0e->leave($__internal_de57e387e1434b0634341c8cafcca533c0281d0cda54efcee6affb2fb0ee7c0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
