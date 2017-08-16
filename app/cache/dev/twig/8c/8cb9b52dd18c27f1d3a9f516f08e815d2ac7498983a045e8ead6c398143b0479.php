<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_e68f1d734ee1cda9f90d6494ef6e40f24ccb8a544a4daa2215b58140c6043553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/base.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03509a8025c72bc0fcefe02994a43561fa5c5c1a2d51cd6110313ea16c3ba0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03509a8025c72bc0fcefe02994a43561fa5c5c1a2d51cd6110313ea16c3ba0a5->enter($__internal_03509a8025c72bc0fcefe02994a43561fa5c5c1a2d51cd6110313ea16c3ba0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03509a8025c72bc0fcefe02994a43561fa5c5c1a2d51cd6110313ea16c3ba0a5->leave($__internal_03509a8025c72bc0fcefe02994a43561fa5c5c1a2d51cd6110313ea16c3ba0a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b560c52aa2eaf147f463899b71f1e6c0d40f7dec627be0fa634caade39e31e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b560c52aa2eaf147f463899b71f1e6c0d40f7dec627be0fa634caade39e31e06->enter($__internal_b560c52aa2eaf147f463899b71f1e6c0d40f7dec627be0fa634caade39e31e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Accueil";
        
        $__internal_b560c52aa2eaf147f463899b71f1e6c0d40f7dec627be0fa634caade39e31e06->leave($__internal_b560c52aa2eaf147f463899b71f1e6c0d40f7dec627be0fa634caade39e31e06_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_67be71a0c81ea33699fd9497db308356b32eb5b1a49a6e2d5c872bfe72ab178f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67be71a0c81ea33699fd9497db308356b32eb5b1a49a6e2d5c872bfe72ab178f->enter($__internal_67be71a0c81ea33699fd9497db308356b32eb5b1a49a6e2d5c872bfe72ab178f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        
        $__internal_67be71a0c81ea33699fd9497db308356b32eb5b1a49a6e2d5c872bfe72ab178f->leave($__internal_67be71a0c81ea33699fd9497db308356b32eb5b1a49a6e2d5c872bfe72ab178f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@App/base.html.twig' %}

{% block title %}{{ parent() }}Accueil{% endblock %}

{% block body %}

{% endblock %}
", "AppBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\roulezdotbike\\src\\AppBundle/Resources/views/Default/index.html.twig");
    }
}
