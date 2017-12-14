<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f227b90c73d67a3c22f302635abab21ee70aa0614b6b64068d96b8d704d998ee extends Twig_Template
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
        $__internal_394cce4ad6a27bdb6209302f742d496a0008500e0c810629ae89485d7cf2c726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394cce4ad6a27bdb6209302f742d496a0008500e0c810629ae89485d7cf2c726->enter($__internal_394cce4ad6a27bdb6209302f742d496a0008500e0c810629ae89485d7cf2c726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_15fd545d6a967b19a5acdcf4a037b16bfe964e9a9e6fadc9d2f8c45128f2da5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fd545d6a967b19a5acdcf4a037b16bfe964e9a9e6fadc9d2f8c45128f2da5f->enter($__internal_15fd545d6a967b19a5acdcf4a037b16bfe964e9a9e6fadc9d2f8c45128f2da5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_394cce4ad6a27bdb6209302f742d496a0008500e0c810629ae89485d7cf2c726->leave($__internal_394cce4ad6a27bdb6209302f742d496a0008500e0c810629ae89485d7cf2c726_prof);

        
        $__internal_15fd545d6a967b19a5acdcf4a037b16bfe964e9a9e6fadc9d2f8c45128f2da5f->leave($__internal_15fd545d6a967b19a5acdcf4a037b16bfe964e9a9e6fadc9d2f8c45128f2da5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
