<?php

/* :user:login.html.twig */
class __TwigTemplate_4ee2d3981ae6a429cf78b9bcfc80fec41a2f645ebc10ff809edc6d3f93c4541f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":user:login.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Sign In! ";
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
                <form action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_login_check");
        echo "\" method=\"post\">
                    <h1>Sign In</h1>

                    <div id=\"login\">
                        <div>
                            <input type=\"text\" id=\"username\" name=\"_username\" class=\"input pass\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" placeholder=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Username", array(), "messages");
        echo "\"/>
                        </div>

                        <div>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"input pass\" placeholder=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Password", array(), "messages");
        echo "\">
                        </div>

                        ";
        // line 28
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 29
            echo "                            <div class=\"alert alert-danger\">
                                <i class=\"fa fa-warning\"></i> ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 33
        echo "
                        <div>
                            <button type=\"submit\" class=\"inputButton\">Go!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

";
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
        return array (  92 => 33,  86 => 30,  83 => 29,  81 => 28,  75 => 25,  66 => 21,  58 => 16,  52 => 12,  49 => 11,  42 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}

{% block title %} Sign In! {% endblock %}

{% block stylesheets %}

    <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">

{% endblock %}

{% block body %}

    <div class=\"container\">
        <div class=\"col-md-12\">
            <div id=\"form-holder\">
                <form action=\"{{ path('user_login_check') }}\" method=\"post\">
                    <h1>Sign In</h1>

                    <div id=\"login\">
                        <div>
                            <input type=\"text\" id=\"username\" name=\"_username\" class=\"input pass\" value=\"{{ last_username }}\" placeholder=\"{% trans %}Username{% endtrans %}\"/>
                        </div>

                        <div>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"input pass\" placeholder=\"{% trans %}Password{% endtrans %}\">
                        </div>

                        {% if error %}
                            <div class=\"alert alert-danger\">
                                <i class=\"fa fa-warning\"></i> {{ error.messageKey|trans(error.messageData, 'security') }}
                            </div>
                        {% endif %}

                        <div>
                            <button type=\"submit\" class=\"inputButton\">Go!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

{% endblock %}";
    }
}
