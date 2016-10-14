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
        $__internal_e9a1ec68026ab55b451e6ad9fccbd788ed692a534cf31445ab9ec8507cda20e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a1ec68026ab55b451e6ad9fccbd788ed692a534cf31445ab9ec8507cda20e6->enter($__internal_e9a1ec68026ab55b451e6ad9fccbd788ed692a534cf31445ab9ec8507cda20e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9a1ec68026ab55b451e6ad9fccbd788ed692a534cf31445ab9ec8507cda20e6->leave($__internal_e9a1ec68026ab55b451e6ad9fccbd788ed692a534cf31445ab9ec8507cda20e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf238c7cf1150a7e01d5aca5137c56f3f78426a883865ef00a3355d834290bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf238c7cf1150a7e01d5aca5137c56f3f78426a883865ef00a3355d834290bf8->enter($__internal_cf238c7cf1150a7e01d5aca5137c56f3f78426a883865ef00a3355d834290bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cf238c7cf1150a7e01d5aca5137c56f3f78426a883865ef00a3355d834290bf8->leave($__internal_cf238c7cf1150a7e01d5aca5137c56f3f78426a883865ef00a3355d834290bf8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c19df8dad19c93b69b9a8c248f0d60426767060cfc9adc2fdf53b2deff3169b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c19df8dad19c93b69b9a8c248f0d60426767060cfc9adc2fdf53b2deff3169b->enter($__internal_0c19df8dad19c93b69b9a8c248f0d60426767060cfc9adc2fdf53b2deff3169b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c19df8dad19c93b69b9a8c248f0d60426767060cfc9adc2fdf53b2deff3169b->leave($__internal_0c19df8dad19c93b69b9a8c248f0d60426767060cfc9adc2fdf53b2deff3169b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a42adc7dfe4ee48133f5de716f0ef5cf5d151b70746ca60f75ead15b8b67dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a42adc7dfe4ee48133f5de716f0ef5cf5d151b70746ca60f75ead15b8b67dc3->enter($__internal_1a42adc7dfe4ee48133f5de716f0ef5cf5d151b70746ca60f75ead15b8b67dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1a42adc7dfe4ee48133f5de716f0ef5cf5d151b70746ca60f75ead15b8b67dc3->leave($__internal_1a42adc7dfe4ee48133f5de716f0ef5cf5d151b70746ca60f75ead15b8b67dc3_prof);

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
