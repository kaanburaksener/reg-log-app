<?php

/* base.html.twig */
class __TwigTemplate_0db032eed79ff9b3ad74c507c1a4c4d75b0650a4af4a78e84693d4772c20b9cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a2fc3eb25111f7115096008acd7761218967040c63ac7e11698ddea2a7e293f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2fc3eb25111f7115096008acd7761218967040c63ac7e11698ddea2a7e293f->enter($__internal_5a2fc3eb25111f7115096008acd7761218967040c63ac7e11698ddea2a7e293f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5a2fc3eb25111f7115096008acd7761218967040c63ac7e11698ddea2a7e293f->leave($__internal_5a2fc3eb25111f7115096008acd7761218967040c63ac7e11698ddea2a7e293f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9680fc62b46d9e6dbac8e2c9a52bf613f09bdaf0ff1326f4c8ce7b7d267ca280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9680fc62b46d9e6dbac8e2c9a52bf613f09bdaf0ff1326f4c8ce7b7d267ca280->enter($__internal_9680fc62b46d9e6dbac8e2c9a52bf613f09bdaf0ff1326f4c8ce7b7d267ca280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9680fc62b46d9e6dbac8e2c9a52bf613f09bdaf0ff1326f4c8ce7b7d267ca280->leave($__internal_9680fc62b46d9e6dbac8e2c9a52bf613f09bdaf0ff1326f4c8ce7b7d267ca280_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52571c683b075e5ef91c64f55ea22a35b0868a76add634fa1ff81d09b29f51cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52571c683b075e5ef91c64f55ea22a35b0868a76add634fa1ff81d09b29f51cd->enter($__internal_52571c683b075e5ef91c64f55ea22a35b0868a76add634fa1ff81d09b29f51cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_52571c683b075e5ef91c64f55ea22a35b0868a76add634fa1ff81d09b29f51cd->leave($__internal_52571c683b075e5ef91c64f55ea22a35b0868a76add634fa1ff81d09b29f51cd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f688158e5f48af752dfde205424f5743717a71411dca6a728b864fd0b4753a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f688158e5f48af752dfde205424f5743717a71411dca6a728b864fd0b4753a2b->enter($__internal_f688158e5f48af752dfde205424f5743717a71411dca6a728b864fd0b4753a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f688158e5f48af752dfde205424f5743717a71411dca6a728b864fd0b4753a2b->leave($__internal_f688158e5f48af752dfde205424f5743717a71411dca6a728b864fd0b4753a2b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c320eb81c85b6abb8beb8408ef44e721bb1eba828eda2b891803e1be98c6e446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c320eb81c85b6abb8beb8408ef44e721bb1eba828eda2b891803e1be98c6e446->enter($__internal_c320eb81c85b6abb8beb8408ef44e721bb1eba828eda2b891803e1be98c6e446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c320eb81c85b6abb8beb8408ef44e721bb1eba828eda2b891803e1be98c6e446->leave($__internal_c320eb81c85b6abb8beb8408ef44e721bb1eba828eda2b891803e1be98c6e446_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
