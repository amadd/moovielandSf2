<?php

/* base.html.twig */
class __TwigTemplate_2e00bbd8ad836cad7ebcab4ac152e1b3aee9a969049e55cba59f94fa4be87257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45a2d3211a79ebf6743f6d6f15d3d41c7759b5c657ce93d019a9ee8a137818b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a2d3211a79ebf6743f6d6f15d3d41c7759b5c657ce93d019a9ee8a137818b9->enter($__internal_45a2d3211a79ebf6743f6d6f15d3d41c7759b5c657ce93d019a9ee8a137818b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_45a2d3211a79ebf6743f6d6f15d3d41c7759b5c657ce93d019a9ee8a137818b9->leave($__internal_45a2d3211a79ebf6743f6d6f15d3d41c7759b5c657ce93d019a9ee8a137818b9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_57d0b7464e603dcd6d4bf6ae8c095e710df24b1f9d64982126f3ae98673a53ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d0b7464e603dcd6d4bf6ae8c095e710df24b1f9d64982126f3ae98673a53ad->enter($__internal_57d0b7464e603dcd6d4bf6ae8c095e710df24b1f9d64982126f3ae98673a53ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_57d0b7464e603dcd6d4bf6ae8c095e710df24b1f9d64982126f3ae98673a53ad->leave($__internal_57d0b7464e603dcd6d4bf6ae8c095e710df24b1f9d64982126f3ae98673a53ad_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8de46fad2124158613e637ebf8e67d7dbe6061f2c3f4a377036db5506f9dc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8de46fad2124158613e637ebf8e67d7dbe6061f2c3f4a377036db5506f9dc6f->enter($__internal_d8de46fad2124158613e637ebf8e67d7dbe6061f2c3f4a377036db5506f9dc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d8de46fad2124158613e637ebf8e67d7dbe6061f2c3f4a377036db5506f9dc6f->leave($__internal_d8de46fad2124158613e637ebf8e67d7dbe6061f2c3f4a377036db5506f9dc6f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1153c0e2f079ab48e889c6a33d71e88a84d873c2b422a289cfbc8c9b12b25208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1153c0e2f079ab48e889c6a33d71e88a84d873c2b422a289cfbc8c9b12b25208->enter($__internal_1153c0e2f079ab48e889c6a33d71e88a84d873c2b422a289cfbc8c9b12b25208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1153c0e2f079ab48e889c6a33d71e88a84d873c2b422a289cfbc8c9b12b25208->leave($__internal_1153c0e2f079ab48e889c6a33d71e88a84d873c2b422a289cfbc8c9b12b25208_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82380656f9f64decad669bef13a251dab83048560479800bc57c7375582c694d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82380656f9f64decad669bef13a251dab83048560479800bc57c7375582c694d->enter($__internal_82380656f9f64decad669bef13a251dab83048560479800bc57c7375582c694d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_82380656f9f64decad669bef13a251dab83048560479800bc57c7375582c694d->leave($__internal_82380656f9f64decad669bef13a251dab83048560479800bc57c7375582c694d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\roulezdotbike\\app\\Resources\\views\\base.html.twig");
    }
}
