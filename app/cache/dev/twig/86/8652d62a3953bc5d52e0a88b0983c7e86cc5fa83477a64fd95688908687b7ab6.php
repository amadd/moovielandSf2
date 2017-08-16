<?php

/* AppBundle:Security:login.html.twig */
class __TwigTemplate_b6a231239fa298e77b042fd176193ef334901d88c7b27e8578b052432644f32c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1568673f7f2bce476e34381f63976e76410efd755978b3a9f637853299cbb08f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1568673f7f2bce476e34381f63976e76410efd755978b3a9f637853299cbb08f->enter($__internal_1568673f7f2bce476e34381f63976e76410efd755978b3a9f637853299cbb08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1568673f7f2bce476e34381f63976e76410efd755978b3a9f637853299cbb08f->leave($__internal_1568673f7f2bce476e34381f63976e76410efd755978b3a9f637853299cbb08f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44606ca3f9a3bc56ff0c7f939ba35a1902f61ef33eb9f77820a04880268e7998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44606ca3f9a3bc56ff0c7f939ba35a1902f61ef33eb9f77820a04880268e7998->enter($__internal_44606ca3f9a3bc56ff0c7f939ba35a1902f61ef33eb9f77820a04880268e7998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div class=\"alert alert-danger animated bounceInDown\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 12
        echo "
    <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_security_login");
        echo "\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"username\">Identifiant</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["lastUsername"]) ? $context["lastUsername"] : $this->getContext($context, "lastUsername")), "html", null, true);
        echo "\"/>
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Mot de passe</label>
            <input type=\"password\" id=\"password\" name=\"_password\"/>
        </div>
        ";
        // line 23
        echo "        <button type=\"submit\" class=\"btn btn-primary btn-block\">Login</button>
    </form>
";
        
        $__internal_44606ca3f9a3bc56ff0c7f939ba35a1902f61ef33eb9f77820a04880268e7998->leave($__internal_44606ca3f9a3bc56ff0c7f939ba35a1902f61ef33eb9f77820a04880268e7998_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  64 => 16,  58 => 13,  55 => 12,  46 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if error %}
        <div class=\"alert alert-danger animated bounceInDown\">
            {{ error.messageKey|trans(error.messageData,'security') }}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    {% endif %}

    <form action=\"{{ path('app_security_login') }}\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"username\">Identifiant</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ lastUsername }}\"/>
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Mot de passe</label>
            <input type=\"password\" id=\"password\" name=\"_password\"/>
        </div>
        {# <input type=\"hidden\" name=\"_target_path\" value=\"/apres-login\" /> #}
        <button type=\"submit\" class=\"btn btn-primary btn-block\">Login</button>
    </form>
{% endblock %}
", "AppBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\roulezdotbike\\src\\AppBundle/Resources/views/Security/login.html.twig");
    }
}
