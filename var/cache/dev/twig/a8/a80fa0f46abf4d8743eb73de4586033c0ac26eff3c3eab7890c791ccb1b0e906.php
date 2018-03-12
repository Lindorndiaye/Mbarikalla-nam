<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1cc2c626f141beab71de9b6f1bab313b102df67bedf1e02ee9cc0fe3f8f6312a extends Twig_Template
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
        $__internal_47830fc9de50335206b1119e85019758da425e9e25ee6fbc594940604296c1b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47830fc9de50335206b1119e85019758da425e9e25ee6fbc594940604296c1b3->enter($__internal_47830fc9de50335206b1119e85019758da425e9e25ee6fbc594940604296c1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_1c7fcb499ee9ac788da24d218c8c5bd1f8dade1cacef1e859b6f7ce67e823474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7fcb499ee9ac788da24d218c8c5bd1f8dade1cacef1e859b6f7ce67e823474->enter($__internal_1c7fcb499ee9ac788da24d218c8c5bd1f8dade1cacef1e859b6f7ce67e823474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_47830fc9de50335206b1119e85019758da425e9e25ee6fbc594940604296c1b3->leave($__internal_47830fc9de50335206b1119e85019758da425e9e25ee6fbc594940604296c1b3_prof);

        
        $__internal_1c7fcb499ee9ac788da24d218c8c5bd1f8dade1cacef1e859b6f7ce67e823474->leave($__internal_1c7fcb499ee9ac788da24d218c8c5bd1f8dade1cacef1e859b6f7ce67e823474_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
