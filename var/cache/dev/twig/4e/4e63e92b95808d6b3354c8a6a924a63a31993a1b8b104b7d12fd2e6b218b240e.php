<?php

/* :user:register.html.twig */
class __TwigTemplate_c8feb20c76db697f5230b2d36ab34ac40306a780466c60f2a78e3a4afa37616c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":user:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f488bec1d10769786a089d93478e9c68232f7d13449ea3391de8428e9081841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f488bec1d10769786a089d93478e9c68232f7d13449ea3391de8428e9081841->enter($__internal_2f488bec1d10769786a089d93478e9c68232f7d13449ea3391de8428e9081841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f488bec1d10769786a089d93478e9c68232f7d13449ea3391de8428e9081841->leave($__internal_2f488bec1d10769786a089d93478e9c68232f7d13449ea3391de8428e9081841_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0c57df1b84a71614a2f783be9bc27b84ae8939a233af22e4b655567dc7183c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c57df1b84a71614a2f783be9bc27b84ae8939a233af22e4b655567dc7183c7->enter($__internal_c0c57df1b84a71614a2f783be9bc27b84ae8939a233af22e4b655567dc7183c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sign Up!";
        
        $__internal_c0c57df1b84a71614a2f783be9bc27b84ae8939a233af22e4b655567dc7183c7->leave($__internal_c0c57df1b84a71614a2f783be9bc27b84ae8939a233af22e4b655567dc7183c7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfbd78c9afc346a845e33bf425490011f0dc4c4e4af701c7c3a0610200c36c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbd78c9afc346a845e33bf425490011f0dc4c4e4af701c7c3a0610200c36c30->enter($__internal_bfbd78c9afc346a845e33bf425490011f0dc4c4e4af701c7c3a0610200c36c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <form action=\"#\" method=\"post\">
        <h1>Sign Up</h1>

        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["registrationForm"]) ? $context["registrationForm"] : $this->getContext($context, "registrationForm")), 'widget');
        echo "
    </form>

";
        
        $__internal_bfbd78c9afc346a845e33bf425490011f0dc4c4e4af701c7c3a0610200c36c30->leave($__internal_bfbd78c9afc346a845e33bf425490011f0dc4c4e4af701c7c3a0610200c36c30_prof);

    }

    public function getTemplateName()
    {
        return ":user:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}

{% block title %}Sign Up!{% endblock %}

{% block body %}

    <form action=\"#\" method=\"post\">
        <h1>Sign Up</h1>

        {{ form_widget(registrationForm) }}
    </form>

{% endblock %}";
    }
}
