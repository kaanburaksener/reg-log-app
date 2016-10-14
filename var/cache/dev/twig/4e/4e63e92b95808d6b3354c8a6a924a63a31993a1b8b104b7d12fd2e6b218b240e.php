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
        $__internal_e635720dee3f7c50a4c53a899829165fa233bfdc14bebc617bbb69eccafe3925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e635720dee3f7c50a4c53a899829165fa233bfdc14bebc617bbb69eccafe3925->enter($__internal_e635720dee3f7c50a4c53a899829165fa233bfdc14bebc617bbb69eccafe3925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e635720dee3f7c50a4c53a899829165fa233bfdc14bebc617bbb69eccafe3925->leave($__internal_e635720dee3f7c50a4c53a899829165fa233bfdc14bebc617bbb69eccafe3925_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b657056784a7e4dc975477bc94d7b1da3deeda0550909307dd963117795b823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b657056784a7e4dc975477bc94d7b1da3deeda0550909307dd963117795b823->enter($__internal_4b657056784a7e4dc975477bc94d7b1da3deeda0550909307dd963117795b823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign Up! ";
        
        $__internal_4b657056784a7e4dc975477bc94d7b1da3deeda0550909307dd963117795b823->leave($__internal_4b657056784a7e4dc975477bc94d7b1da3deeda0550909307dd963117795b823_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f8ac47c69fa13d7c28ed441ab91f74dbbb0ef9c82a5b5fa8d3afc035fff8ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8ac47c69fa13d7c28ed441ab91f74dbbb0ef9c82a5b5fa8d3afc035fff8ec2->enter($__internal_8f8ac47c69fa13d7c28ed441ab91f74dbbb0ef9c82a5b5fa8d3afc035fff8ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">

";
        
        $__internal_8f8ac47c69fa13d7c28ed441ab91f74dbbb0ef9c82a5b5fa8d3afc035fff8ec2->leave($__internal_8f8ac47c69fa13d7c28ed441ab91f74dbbb0ef9c82a5b5fa8d3afc035fff8ec2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab64eca1a23f4f54deb7b9370013639de21c3ea661faee73c1588058c43aef8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab64eca1a23f4f54deb7b9370013639de21c3ea661faee73c1588058c43aef8a->enter($__internal_ab64eca1a23f4f54deb7b9370013639de21c3ea661faee73c1588058c43aef8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div id=\"form-holder\">
                <form action=\"#\" method=\"post\">
                    <h1>Sign Up</h1>

                    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["registrationForm"]) ? $context["registrationForm"] : $this->getContext($context, "registrationForm")), 'widget');
        echo "
                </form>
            </div>
        </div>
    </div>

";
        
        $__internal_ab64eca1a23f4f54deb7b9370013639de21c3ea661faee73c1588058c43aef8a->leave($__internal_ab64eca1a23f4f54deb7b9370013639de21c3ea661faee73c1588058c43aef8a_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87ee793c530d5c10a317a030a6dec5e24d6ece454c3ebb996fd753b4b3d78245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ee793c530d5c10a317a030a6dec5e24d6ece454c3ebb996fd753b4b3d78245->enter($__internal_87ee793c530d5c10a317a030a6dec5e24d6ece454c3ebb996fd753b4b3d78245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_87ee793c530d5c10a317a030a6dec5e24d6ece454c3ebb996fd753b4b3d78245->leave($__internal_87ee793c530d5c10a317a030a6dec5e24d6ece454c3ebb996fd753b4b3d78245_prof);

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
        return array (  106 => 29,  103 => 28,  97 => 27,  83 => 19,  74 => 12,  68 => 11,  58 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
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
