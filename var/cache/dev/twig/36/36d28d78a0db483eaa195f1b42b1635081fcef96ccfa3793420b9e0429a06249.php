<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_869cbe233b0abfb6ff77f7bbea92d8b2d0e67d526e26a89281162cd2842afd84 extends Twig_Template
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
        $__internal_bd14792fd2e3b78d7d4f9bd3deb220b5a91e23744c2891e9a2b1aa662d48c76c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd14792fd2e3b78d7d4f9bd3deb220b5a91e23744c2891e9a2b1aa662d48c76c->enter($__internal_bd14792fd2e3b78d7d4f9bd3deb220b5a91e23744c2891e9a2b1aa662d48c76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_20e50754c8579c9fc26ebc0f8734b66a83f56e92f62f4899c6132adb6e1918fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e50754c8579c9fc26ebc0f8734b66a83f56e92f62f4899c6132adb6e1918fa->enter($__internal_20e50754c8579c9fc26ebc0f8734b66a83f56e92f62f4899c6132adb6e1918fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_bd14792fd2e3b78d7d4f9bd3deb220b5a91e23744c2891e9a2b1aa662d48c76c->leave($__internal_bd14792fd2e3b78d7d4f9bd3deb220b5a91e23744c2891e9a2b1aa662d48c76c_prof);

        
        $__internal_20e50754c8579c9fc26ebc0f8734b66a83f56e92f62f4899c6132adb6e1918fa->leave($__internal_20e50754c8579c9fc26ebc0f8734b66a83f56e92f62f4899c6132adb6e1918fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
