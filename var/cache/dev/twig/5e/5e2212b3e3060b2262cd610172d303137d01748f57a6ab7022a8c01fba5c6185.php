<?php

/* :admin:index.html.twig */
class __TwigTemplate_967a000c26132f874fafb9386cb1d3cfd3d8c38b282e78640efabc9926f0135c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":admin:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae9577d99a0879f6dc643dc753560e5ece56b208e080f6d15029fb2a7018c1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9577d99a0879f6dc643dc753560e5ece56b208e080f6d15029fb2a7018c1b1->enter($__internal_ae9577d99a0879f6dc643dc753560e5ece56b208e080f6d15029fb2a7018c1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae9577d99a0879f6dc643dc753560e5ece56b208e080f6d15029fb2a7018c1b1->leave($__internal_ae9577d99a0879f6dc643dc753560e5ece56b208e080f6d15029fb2a7018c1b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6633f6d5c4d957ccccee843d6d1f68644a741423aae07d191c9a59b757920da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6633f6d5c4d957ccccee843d6d1f68644a741423aae07d191c9a59b757920da9->enter($__internal_6633f6d5c4d957ccccee843d6d1f68644a741423aae07d191c9a59b757920da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Admin Dashboard ";
        
        $__internal_6633f6d5c4d957ccccee843d6d1f68644a741423aae07d191c9a59b757920da9->leave($__internal_6633f6d5c4d957ccccee843d6d1f68644a741423aae07d191c9a59b757920da9_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce3e0e63dab886666e08c73bd99a3ccad2802541a688f3d03ba7d5d024874663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3e0e63dab886666e08c73bd99a3ccad2802541a688f3d03ba7d5d024874663->enter($__internal_ce3e0e63dab886666e08c73bd99a3ccad2802541a688f3d03ba7d5d024874663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">

";
        
        $__internal_ce3e0e63dab886666e08c73bd99a3ccad2802541a688f3d03ba7d5d024874663->leave($__internal_ce3e0e63dab886666e08c73bd99a3ccad2802541a688f3d03ba7d5d024874663_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3c702844bbaf6fa499744f36075eeac0b6be0eefcb979a65b32150b4d9b6bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c702844bbaf6fa499744f36075eeac0b6be0eefcb979a65b32150b4d9b6bc2->enter($__internal_e3c702844bbaf6fa499744f36075eeac0b6be0eefcb979a65b32150b4d9b6bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_admin");
        echo "\">Admin Dashboard</a>
        </div>
        <!-- /.navbar-header -->

        <ul class=\"nav navbar-right top-nav\">
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa fa-user\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " <b class=\"caret\"></b></a>

                <ul class=\"dropdown-menu\">
                    <li>
                        <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
        echo "\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.navbar-right -->
    </nav>

";
        
        $__internal_e3c702844bbaf6fa499744f36075eeac0b6be0eefcb979a65b32150b4d9b6bc2->leave($__internal_e3c702844bbaf6fa499744f36075eeac0b6be0eefcb979a65b32150b4d9b6bc2_prof);

    }

    public function getTemplateName()
    {
        return ":admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  91 => 22,  82 => 16,  77 => 13,  71 => 12,  61 => 8,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}

{% block title %} Admin Dashboard {% endblock %}

{% block stylesheets %}

    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/fontawesome/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">

{% endblock %}

{% block body %}

    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"{{ path('user_admin') }}\">Admin Dashboard</a>
        </div>
        <!-- /.navbar-header -->

        <ul class=\"nav navbar-right top-nav\">
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa fa-user\"></i> {{ app.user.username }} <b class=\"caret\"></b></a>

                <ul class=\"dropdown-menu\">
                    <li>
                        <a href=\"{{ path('user_logout') }}\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.navbar-right -->
    </nav>

{% endblock %}";
    }
}
