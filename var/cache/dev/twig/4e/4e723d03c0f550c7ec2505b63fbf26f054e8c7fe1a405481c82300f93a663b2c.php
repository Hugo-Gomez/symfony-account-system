<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e2aa1e639ba14ee13acf07addbf36011f8e5aef73dd29a8e117749d41ad08b3f extends Twig_Template
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
        $__internal_efacb770b256110962331ad5babc5ca08065ce5a751832dbeb9bc164c953e54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efacb770b256110962331ad5babc5ca08065ce5a751832dbeb9bc164c953e54a->enter($__internal_efacb770b256110962331ad5babc5ca08065ce5a751832dbeb9bc164c953e54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_814ad8bb38a2727b243c31c378cf264e8445ba925574845b7f643687f0f6083f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814ad8bb38a2727b243c31c378cf264e8445ba925574845b7f643687f0f6083f->enter($__internal_814ad8bb38a2727b243c31c378cf264e8445ba925574845b7f643687f0f6083f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_efacb770b256110962331ad5babc5ca08065ce5a751832dbeb9bc164c953e54a->leave($__internal_efacb770b256110962331ad5babc5ca08065ce5a751832dbeb9bc164c953e54a_prof);

        
        $__internal_814ad8bb38a2727b243c31c378cf264e8445ba925574845b7f643687f0f6083f->leave($__internal_814ad8bb38a2727b243c31c378cf264e8445ba925574845b7f643687f0f6083f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Framework/Form/form_errors.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
