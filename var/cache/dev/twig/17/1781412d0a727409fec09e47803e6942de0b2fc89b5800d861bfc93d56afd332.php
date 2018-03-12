<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_debbb8cb87027ad31f063bed64222bf24c7a28145c2565c90df902e218ef9e9e extends Twig_Template
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
        $__internal_8c7d4a920290f95c4e07e25112866475e87850ac06640fd17d51e1c02d95f25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7d4a920290f95c4e07e25112866475e87850ac06640fd17d51e1c02d95f25b->enter($__internal_8c7d4a920290f95c4e07e25112866475e87850ac06640fd17d51e1c02d95f25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_22824c8c23dd34affd645fd09d1945f7730e80b65074499836ae651bb08b97ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22824c8c23dd34affd645fd09d1945f7730e80b65074499836ae651bb08b97ab->enter($__internal_22824c8c23dd34affd645fd09d1945f7730e80b65074499836ae651bb08b97ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8c7d4a920290f95c4e07e25112866475e87850ac06640fd17d51e1c02d95f25b->leave($__internal_8c7d4a920290f95c4e07e25112866475e87850ac06640fd17d51e1c02d95f25b_prof);

        
        $__internal_22824c8c23dd34affd645fd09d1945f7730e80b65074499836ae651bb08b97ab->leave($__internal_22824c8c23dd34affd645fd09d1945f7730e80b65074499836ae651bb08b97ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
