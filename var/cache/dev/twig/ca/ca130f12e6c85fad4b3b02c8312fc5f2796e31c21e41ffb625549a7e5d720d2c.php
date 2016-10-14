<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ca8494580ed0b506ca993e84f25dfe5baa30a72a0cee53bf6aafad2c4561e210 extends Twig_Template
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
        $__internal_26ba1d01bec6295515aa0853e853be10a6a945f762a238799f018bb57bd7ab92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ba1d01bec6295515aa0853e853be10a6a945f762a238799f018bb57bd7ab92->enter($__internal_26ba1d01bec6295515aa0853e853be10a6a945f762a238799f018bb57bd7ab92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26ba1d01bec6295515aa0853e853be10a6a945f762a238799f018bb57bd7ab92->leave($__internal_26ba1d01bec6295515aa0853e853be10a6a945f762a238799f018bb57bd7ab92_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ff451d056fbaf7716d0a882a98f731a1417de3df130d4c238b837ce06709d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff451d056fbaf7716d0a882a98f731a1417de3df130d4c238b837ce06709d18->enter($__internal_4ff451d056fbaf7716d0a882a98f731a1417de3df130d4c238b837ce06709d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4ff451d056fbaf7716d0a882a98f731a1417de3df130d4c238b837ce06709d18->leave($__internal_4ff451d056fbaf7716d0a882a98f731a1417de3df130d4c238b837ce06709d18_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fcba479c961c5ce49841546cece0c4287118958317218f7186874b2c02a008f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcba479c961c5ce49841546cece0c4287118958317218f7186874b2c02a008f8->enter($__internal_fcba479c961c5ce49841546cece0c4287118958317218f7186874b2c02a008f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fcba479c961c5ce49841546cece0c4287118958317218f7186874b2c02a008f8->leave($__internal_fcba479c961c5ce49841546cece0c4287118958317218f7186874b2c02a008f8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2137346db41f14b5f42a86ede5aba8871691d263385435a32e856a79273567f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2137346db41f14b5f42a86ede5aba8871691d263385435a32e856a79273567f5->enter($__internal_2137346db41f14b5f42a86ede5aba8871691d263385435a32e856a79273567f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2137346db41f14b5f42a86ede5aba8871691d263385435a32e856a79273567f5->leave($__internal_2137346db41f14b5f42a86ede5aba8871691d263385435a32e856a79273567f5_prof);

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

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
