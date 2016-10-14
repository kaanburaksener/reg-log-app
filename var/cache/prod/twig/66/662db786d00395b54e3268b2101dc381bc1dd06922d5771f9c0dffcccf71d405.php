<?php

/* :user:register.html.twig */
class __TwigTemplate_904ebda7b6ca4290db935fff3f33fcc5051fd9e184c7f5df99dd997106d63589 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":user:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Sign Up! ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">

";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div id=\"form-holder\">
                <form action=\"#\" method=\"post\">
                    <h1>Sign Up</h1>

                    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["registrationForm"]) ? $context["registrationForm"] : null), 'widget');
        echo "
                </form>
            </div>
        </div>
    </div>

";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

";
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
        return array (  79 => 29,  76 => 28,  73 => 27,  62 => 19,  53 => 12,  50 => 11,  43 => 7,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}

{% block title %} Sign Up! {% endblock %}

{% block stylesheets %}

    <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">

{% endblock %}

{% block body %}

    <div class=\"container\">
        <div class=\"col-md-12\">
            <div id=\"form-holder\">
                <form action=\"#\" method=\"post\">
                    <h1>Sign Up</h1>

                    {{ form_widget(registrationForm) }}
                </form>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}

    <script src=\"{{ asset('js/app.js') }}\"></script>

{% endblock %}";
    }
}
