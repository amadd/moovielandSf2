<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ac70322e37a301ece1d4a95aab50de5253b11ed577f8717de7f12cd053e73270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d33e7d256308a60dcdfadb0fc2fa0124ac19e248f1f123bf02a0ccaa197a8e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33e7d256308a60dcdfadb0fc2fa0124ac19e248f1f123bf02a0ccaa197a8e05->enter($__internal_d33e7d256308a60dcdfadb0fc2fa0124ac19e248f1f123bf02a0ccaa197a8e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d33e7d256308a60dcdfadb0fc2fa0124ac19e248f1f123bf02a0ccaa197a8e05->leave($__internal_d33e7d256308a60dcdfadb0fc2fa0124ac19e248f1f123bf02a0ccaa197a8e05_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_effaae7e5ca7f5e8056a0d97c15a8c79d8298a6a5f0e1dc33502d157ac13f87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effaae7e5ca7f5e8056a0d97c15a8c79d8298a6a5f0e1dc33502d157ac13f87d->enter($__internal_effaae7e5ca7f5e8056a0d97c15a8c79d8298a6a5f0e1dc33502d157ac13f87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_effaae7e5ca7f5e8056a0d97c15a8c79d8298a6a5f0e1dc33502d157ac13f87d->leave($__internal_effaae7e5ca7f5e8056a0d97c15a8c79d8298a6a5f0e1dc33502d157ac13f87d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e291323ed57300cb910dddc619c866300c2a9937ec09bcb917b6afd45e9c66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e291323ed57300cb910dddc619c866300c2a9937ec09bcb917b6afd45e9c66c->enter($__internal_6e291323ed57300cb910dddc619c866300c2a9937ec09bcb917b6afd45e9c66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6e291323ed57300cb910dddc619c866300c2a9937ec09bcb917b6afd45e9c66c->leave($__internal_6e291323ed57300cb910dddc619c866300c2a9937ec09bcb917b6afd45e9c66c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_604b68cc3683202d3165a11f728a492f59a50be4462d6436851996a77df05242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604b68cc3683202d3165a11f728a492f59a50be4462d6436851996a77df05242->enter($__internal_604b68cc3683202d3165a11f728a492f59a50be4462d6436851996a77df05242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_604b68cc3683202d3165a11f728a492f59a50be4462d6436851996a77df05242->leave($__internal_604b68cc3683202d3165a11f728a492f59a50be4462d6436851996a77df05242_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\roulezdotbike\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
