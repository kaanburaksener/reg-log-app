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
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcbed0bbeb6a2c6d270c6d18edc5941fc1d53860c030a11d6264499b90e0e25a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbed0bbeb6a2c6d270c6d18edc5941fc1d53860c030a11d6264499b90e0e25a->enter($__internal_bcbed0bbeb6a2c6d270c6d18edc5941fc1d53860c030a11d6264499b90e0e25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcbed0bbeb6a2c6d270c6d18edc5941fc1d53860c030a11d6264499b90e0e25a->leave($__internal_bcbed0bbeb6a2c6d270c6d18edc5941fc1d53860c030a11d6264499b90e0e25a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_715635e1be71a8e58e1d283195767f3ef38e872c4ab98401bd5dfdbd8f702dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715635e1be71a8e58e1d283195767f3ef38e872c4ab98401bd5dfdbd8f702dd0->enter($__internal_715635e1be71a8e58e1d283195767f3ef38e872c4ab98401bd5dfdbd8f702dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin Page";
        
        $__internal_715635e1be71a8e58e1d283195767f3ef38e872c4ab98401bd5dfdbd8f702dd0->leave($__internal_715635e1be71a8e58e1d283195767f3ef38e872c4ab98401bd5dfdbd8f702dd0_prof);

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
        return array (  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}

{% block title %}Admin Page{% endblock %}";
    }
}
