<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_09d567165e6c074196941f1e6320afa9e8385e7cf6ea88feb8ce343e406ad632 extends Twig_Template
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
        $__internal_b3c86862f48e7a811a0ca626354c5cd5515fd9f7aa81bb579e40b6150247a2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c86862f48e7a811a0ca626354c5cd5515fd9f7aa81bb579e40b6150247a2ae->enter($__internal_b3c86862f48e7a811a0ca626354c5cd5515fd9f7aa81bb579e40b6150247a2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3c86862f48e7a811a0ca626354c5cd5515fd9f7aa81bb579e40b6150247a2ae->leave($__internal_b3c86862f48e7a811a0ca626354c5cd5515fd9f7aa81bb579e40b6150247a2ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aef0fe5145ebf2bb317490b82867255353a1e879d7df944ef56b517bc9f5240d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef0fe5145ebf2bb317490b82867255353a1e879d7df944ef56b517bc9f5240d->enter($__internal_aef0fe5145ebf2bb317490b82867255353a1e879d7df944ef56b517bc9f5240d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aef0fe5145ebf2bb317490b82867255353a1e879d7df944ef56b517bc9f5240d->leave($__internal_aef0fe5145ebf2bb317490b82867255353a1e879d7df944ef56b517bc9f5240d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e391ba154597470760ebd773abda01a469b6482c709a8db2568989388989c702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e391ba154597470760ebd773abda01a469b6482c709a8db2568989388989c702->enter($__internal_e391ba154597470760ebd773abda01a469b6482c709a8db2568989388989c702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e391ba154597470760ebd773abda01a469b6482c709a8db2568989388989c702->leave($__internal_e391ba154597470760ebd773abda01a469b6482c709a8db2568989388989c702_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_511e5854a980d791bb91125eeb2e47a66e76bf78184436f9f3f833df7424a7d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511e5854a980d791bb91125eeb2e47a66e76bf78184436f9f3f833df7424a7d2->enter($__internal_511e5854a980d791bb91125eeb2e47a66e76bf78184436f9f3f833df7424a7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_511e5854a980d791bb91125eeb2e47a66e76bf78184436f9f3f833df7424a7d2->leave($__internal_511e5854a980d791bb91125eeb2e47a66e76bf78184436f9f3f833df7424a7d2_prof);

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

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
