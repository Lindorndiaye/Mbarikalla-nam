<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_faa376e811c273316321f3a597aeaa93aaca3dcb5ae875e4a24b7be19a8612e0 extends Twig_Template
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
        $__internal_738acee4c4cd46b9eb4d8c29566ecdeaafe5ea534194e579dd0d0040654daab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738acee4c4cd46b9eb4d8c29566ecdeaafe5ea534194e579dd0d0040654daab7->enter($__internal_738acee4c4cd46b9eb4d8c29566ecdeaafe5ea534194e579dd0d0040654daab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_38d2adfe5b12d616e130da6c0ad53bceddacc90a5633ad53fd941b26051434ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d2adfe5b12d616e130da6c0ad53bceddacc90a5633ad53fd941b26051434ae->enter($__internal_38d2adfe5b12d616e130da6c0ad53bceddacc90a5633ad53fd941b26051434ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_738acee4c4cd46b9eb4d8c29566ecdeaafe5ea534194e579dd0d0040654daab7->leave($__internal_738acee4c4cd46b9eb4d8c29566ecdeaafe5ea534194e579dd0d0040654daab7_prof);

        
        $__internal_38d2adfe5b12d616e130da6c0ad53bceddacc90a5633ad53fd941b26051434ae->leave($__internal_38d2adfe5b12d616e130da6c0ad53bceddacc90a5633ad53fd941b26051434ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
