<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d17a093619456c4a4987ba3add4f36ea7553d9c5374bec98239e8e1383d41d2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ed1009e8067cfa8578b4b554566a9f730bc1f7769a248908ba0c58efdeac072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed1009e8067cfa8578b4b554566a9f730bc1f7769a248908ba0c58efdeac072->enter($__internal_2ed1009e8067cfa8578b4b554566a9f730bc1f7769a248908ba0c58efdeac072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ed1009e8067cfa8578b4b554566a9f730bc1f7769a248908ba0c58efdeac072->leave($__internal_2ed1009e8067cfa8578b4b554566a9f730bc1f7769a248908ba0c58efdeac072_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c0e0795b9a74d7cfaee09eb0680f05bbc44bff5011227a7c880c33aabdaf732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0e0795b9a74d7cfaee09eb0680f05bbc44bff5011227a7c880c33aabdaf732->enter($__internal_8c0e0795b9a74d7cfaee09eb0680f05bbc44bff5011227a7c880c33aabdaf732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c0e0795b9a74d7cfaee09eb0680f05bbc44bff5011227a7c880c33aabdaf732->leave($__internal_8c0e0795b9a74d7cfaee09eb0680f05bbc44bff5011227a7c880c33aabdaf732_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ec8e46d3e5ae7116382f33a32b5cd559d5296786106604e1aa83bf17150e37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec8e46d3e5ae7116382f33a32b5cd559d5296786106604e1aa83bf17150e37e->enter($__internal_3ec8e46d3e5ae7116382f33a32b5cd559d5296786106604e1aa83bf17150e37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3ec8e46d3e5ae7116382f33a32b5cd559d5296786106604e1aa83bf17150e37e->leave($__internal_3ec8e46d3e5ae7116382f33a32b5cd559d5296786106604e1aa83bf17150e37e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e92b945cb5884657d9e1826bfabf32232b0283a694dbd1667bd059a224b515fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92b945cb5884657d9e1826bfabf32232b0283a694dbd1667bd059a224b515fd->enter($__internal_e92b945cb5884657d9e1826bfabf32232b0283a694dbd1667bd059a224b515fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e92b945cb5884657d9e1826bfabf32232b0283a694dbd1667bd059a224b515fd->leave($__internal_e92b945cb5884657d9e1826bfabf32232b0283a694dbd1667bd059a224b515fd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\roulezdotbike\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
