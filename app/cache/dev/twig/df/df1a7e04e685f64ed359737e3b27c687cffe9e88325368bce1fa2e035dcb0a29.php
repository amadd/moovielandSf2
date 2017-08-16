<?php

/* @App/base.html.twig */
class __TwigTemplate_0fb3111c589c489a9d9c122de7ef6264c4fb369ce6012ff127ace03667e333e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_461e13e554250de490fe7f2a622bd84137cc2e7ffcfee64c2c801441e24e9213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_461e13e554250de490fe7f2a622bd84137cc2e7ffcfee64c2c801441e24e9213->enter($__internal_461e13e554250de490fe7f2a622bd84137cc2e7ffcfee64c2c801441e24e9213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>

   <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
   ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "</head>
<body>

   ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 13
            echo "   <li role=\"presentation\">
      <a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Déconnexion</a>
   </li>
   ";
        }
        // line 17
        echo "   ";
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 18
            echo "   <li role=\"presentation\" class=\"\">
      <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_security_login");
            echo "\">Connexion</a>
   </li>
   <li role=\"presentation\" class=\"\">
      <a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_registration_register");
            echo "\">Inscription</a>
   </li>
";
        }
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "
</body>
</html>
";
        
        $__internal_461e13e554250de490fe7f2a622bd84137cc2e7ffcfee64c2c801441e24e9213->leave($__internal_461e13e554250de490fe7f2a622bd84137cc2e7ffcfee64c2c801441e24e9213_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a364441b4f27184a8dbdd0abf12aa72a8c268ac97d70b7f5fca681b363d28faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a364441b4f27184a8dbdd0abf12aa72a8c268ac97d70b7f5fca681b363d28faf->enter($__internal_a364441b4f27184a8dbdd0abf12aa72a8c268ac97d70b7f5fca681b363d28faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Car | ";
        
        $__internal_a364441b4f27184a8dbdd0abf12aa72a8c268ac97d70b7f5fca681b363d28faf->leave($__internal_a364441b4f27184a8dbdd0abf12aa72a8c268ac97d70b7f5fca681b363d28faf_prof);

    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        $__internal_28de04979dc5feb3a0b1e61199b8a1cc1324e2583d52f49a35dc02b1616413a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28de04979dc5feb3a0b1e61199b8a1cc1324e2583d52f49a35dc02b1616413a3->enter($__internal_28de04979dc5feb3a0b1e61199b8a1cc1324e2583d52f49a35dc02b1616413a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 7
        echo "
   ";
        
        $__internal_28de04979dc5feb3a0b1e61199b8a1cc1324e2583d52f49a35dc02b1616413a3->leave($__internal_28de04979dc5feb3a0b1e61199b8a1cc1324e2583d52f49a35dc02b1616413a3_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1ec27e12f60fe77f37f4274dd154c035a7b4e6545897e4164adb6754a684b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ec27e12f60fe77f37f4274dd154c035a7b4e6545897e4164adb6754a684b5a->enter($__internal_d1ec27e12f60fe77f37f4274dd154c035a7b4e6545897e4164adb6754a684b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d1ec27e12f60fe77f37f4274dd154c035a7b4e6545897e4164adb6754a684b5a->leave($__internal_d1ec27e12f60fe77f37f4274dd154c035a7b4e6545897e4164adb6754a684b5a_prof);

    }

    public function getTemplateName()
    {
        return "@App/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 25,  101 => 7,  95 => 6,  83 => 5,  73 => 27,  71 => 25,  65 => 22,  59 => 19,  56 => 18,  53 => 17,  47 => 14,  44 => 13,  42 => 12,  37 => 9,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>
<head>

   <title>{% block title %}Car | {% endblock %}</title>
   {% block head %}

   {% endblock %}
</head>
<body>

   {% if is_granted('IS_AUTHENTICATED_FULLY') %}
   <li role=\"presentation\">
      <a href=\"{{ path('logout') }}\">Déconnexion</a>
   </li>
   {% endif %}
   {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
   <li role=\"presentation\" class=\"\">
      <a href=\"{{ path('app_security_login') }}\">Connexion</a>
   </li>
   <li role=\"presentation\" class=\"\">
      <a href=\"{{ path('app_registration_register') }}\">Inscription</a>
   </li>
{% endif %}
{% block body %}
{% endblock %}

</body>
</html>
", "@App/base.html.twig", "C:\\xampp\\htdocs\\roulezdotbike\\src\\AppBundle\\Resources\\views\\base.html.twig");
    }
}
