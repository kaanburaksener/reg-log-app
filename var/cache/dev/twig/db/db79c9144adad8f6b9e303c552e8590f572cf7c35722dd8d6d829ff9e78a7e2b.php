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
        $__internal_572fc7ee5bd276ec5786884a7da0e44418241295ee13ac53d876702965e1770d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572fc7ee5bd276ec5786884a7da0e44418241295ee13ac53d876702965e1770d->enter($__internal_572fc7ee5bd276ec5786884a7da0e44418241295ee13ac53d876702965e1770d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_572fc7ee5bd276ec5786884a7da0e44418241295ee13ac53d876702965e1770d->leave($__internal_572fc7ee5bd276ec5786884a7da0e44418241295ee13ac53d876702965e1770d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a30b603729c555b3ad59f4fb068d5010274515ad5ad807d2aaa112a482ddf520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30b603729c555b3ad59f4fb068d5010274515ad5ad807d2aaa112a482ddf520->enter($__internal_a30b603729c555b3ad59f4fb068d5010274515ad5ad807d2aaa112a482ddf520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign In! ";
        
        $__internal_a30b603729c555b3ad59f4fb068d5010274515ad5ad807d2aaa112a482ddf520->leave($__internal_a30b603729c555b3ad59f4fb068d5010274515ad5ad807d2aaa112a482ddf520_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_601303de834b2af6b966c1d9ea6edffde801ca544d0762210e81142f29f18614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_601303de834b2af6b966c1d9ea6edffde801ca544d0762210e81142f29f18614->enter($__internal_601303de834b2af6b966c1d9ea6edffde801ca544d0762210e81142f29f18614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">

";
        
        $__internal_601303de834b2af6b966c1d9ea6edffde801ca544d0762210e81142f29f18614->leave($__internal_601303de834b2af6b966c1d9ea6edffde801ca544d0762210e81142f29f18614_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dea71cf4be52f6bca0227fcd516d9de5263b500ee100a11a07c029f30ccbb344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea71cf4be52f6bca0227fcd516d9de5263b500ee100a11a07c029f30ccbb344->enter($__internal_dea71cf4be52f6bca0227fcd516d9de5263b500ee100a11a07c029f30ccbb344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 29
            echo "                            <div class=\"alert alert-danger\">
                                <i class=\"fa fa-warning\"></i> ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
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
        
        $__internal_dea71cf4be52f6bca0227fcd516d9de5263b500ee100a11a07c029f30ccbb344->leave($__internal_dea71cf4be52f6bca0227fcd516d9de5263b500ee100a11a07c029f30ccbb344_prof);

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
        return array (  113 => 33,  107 => 30,  104 => 29,  102 => 28,  96 => 25,  87 => 21,  79 => 16,  73 => 12,  67 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
