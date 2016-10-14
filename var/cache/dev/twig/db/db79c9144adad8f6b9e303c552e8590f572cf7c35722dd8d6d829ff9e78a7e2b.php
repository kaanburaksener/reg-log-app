<?php

/* :user:login.html.twig */
class __TwigTemplate_558550beb05ca0e9f874357c69f0c6f17d65d3d71a2b8af9073b121fed20214d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":user:login.html.twig", 1);
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
        $__internal_9b44cd99b2a343863feea9900790a6308c6d95178910841b42a4a8205cbaf83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b44cd99b2a343863feea9900790a6308c6d95178910841b42a4a8205cbaf83c->enter($__internal_9b44cd99b2a343863feea9900790a6308c6d95178910841b42a4a8205cbaf83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b44cd99b2a343863feea9900790a6308c6d95178910841b42a4a8205cbaf83c->leave($__internal_9b44cd99b2a343863feea9900790a6308c6d95178910841b42a4a8205cbaf83c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07442b04327fb3692c8c93a3ee9f14c99af174359b245261339ce53534788ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07442b04327fb3692c8c93a3ee9f14c99af174359b245261339ce53534788ad0->enter($__internal_07442b04327fb3692c8c93a3ee9f14c99af174359b245261339ce53534788ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sign In!";
        
        $__internal_07442b04327fb3692c8c93a3ee9f14c99af174359b245261339ce53534788ad0->leave($__internal_07442b04327fb3692c8c93a3ee9f14c99af174359b245261339ce53534788ad0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d5209019eb1c55549d208073776d5b0c38f36c0333884a0e69f0d8b9e0f0d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5209019eb1c55549d208073776d5b0c38f36c0333884a0e69f0d8b9e0f0d10->enter($__internal_9d5209019eb1c55549d208073776d5b0c38f36c0333884a0e69f0d8b9e0f0d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div id=\"form-holder\">
        <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_login_check");
        echo "\" method=\"post\">
            <h1>Sign In</h1>

            <div id=\"login\">
                <div>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Username", array(), "messages");
        echo "\"/>
                </div>

                <div>
                    <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Password", array(), "messages");
        echo "\">
                </div>

                <div>
                    <button type=\"submit\">Go!</button>
                </div>
            </div>
        </form>
    </div>

";
        
        $__internal_9d5209019eb1c55549d208073776d5b0c38f36c0333884a0e69f0d8b9e0f0d10->leave($__internal_9d5209019eb1c55549d208073776d5b0c38f36c0333884a0e69f0d8b9e0f0d10_prof);

    }

    public function getTemplateName()
    {
        return ":user:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  65 => 13,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}

{% block title %}Sign In!{% endblock %}

{% block body %}

    <div id=\"form-holder\">
        <form action=\"{{ path('user_login_check') }}\" method=\"post\">
            <h1>Sign In</h1>

            <div id=\"login\">
                <div>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"{% trans %}Username{% endtrans %}\"/>
                </div>

                <div>
                    <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"{% trans %}Password{% endtrans %}\">
                </div>

                <div>
                    <button type=\"submit\">Go!</button>
                </div>
            </div>
        </form>
    </div>

{% endblock %}";
    }
}
