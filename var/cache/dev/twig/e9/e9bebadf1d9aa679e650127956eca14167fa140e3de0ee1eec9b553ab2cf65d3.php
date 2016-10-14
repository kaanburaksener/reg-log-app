<?php

/* ::base.html.twig */
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
        $__internal_ad0d2e6a5e569e9b8d9ac62b03603ea109235ec85329e83c98e24098fcae7114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0d2e6a5e569e9b8d9ac62b03603ea109235ec85329e83c98e24098fcae7114->enter($__internal_ad0d2e6a5e569e9b8d9ac62b03603ea109235ec85329e83c98e24098fcae7114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ad0d2e6a5e569e9b8d9ac62b03603ea109235ec85329e83c98e24098fcae7114->leave($__internal_ad0d2e6a5e569e9b8d9ac62b03603ea109235ec85329e83c98e24098fcae7114_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d79935557d437b3c4411a80cf3fdfbe5b76fdfd9618590eec323b5ef77f6580c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79935557d437b3c4411a80cf3fdfbe5b76fdfd9618590eec323b5ef77f6580c->enter($__internal_d79935557d437b3c4411a80cf3fdfbe5b76fdfd9618590eec323b5ef77f6580c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d79935557d437b3c4411a80cf3fdfbe5b76fdfd9618590eec323b5ef77f6580c->leave($__internal_d79935557d437b3c4411a80cf3fdfbe5b76fdfd9618590eec323b5ef77f6580c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f5ed5ad04d6773a697a9617ae0882f3e1f22bba63798e87f070cf06f478d14b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5ed5ad04d6773a697a9617ae0882f3e1f22bba63798e87f070cf06f478d14b->enter($__internal_8f5ed5ad04d6773a697a9617ae0882f3e1f22bba63798e87f070cf06f478d14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8f5ed5ad04d6773a697a9617ae0882f3e1f22bba63798e87f070cf06f478d14b->leave($__internal_8f5ed5ad04d6773a697a9617ae0882f3e1f22bba63798e87f070cf06f478d14b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca8665e07fc69fb3ef706cb18873332be8d617f5ceb84a10516f8ebc6ad66ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8665e07fc69fb3ef706cb18873332be8d617f5ceb84a10516f8ebc6ad66ad4->enter($__internal_ca8665e07fc69fb3ef706cb18873332be8d617f5ceb84a10516f8ebc6ad66ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ca8665e07fc69fb3ef706cb18873332be8d617f5ceb84a10516f8ebc6ad66ad4->leave($__internal_ca8665e07fc69fb3ef706cb18873332be8d617f5ceb84a10516f8ebc6ad66ad4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2dccae4c0875ea785cb74564e1c2df5c82f2ba4ee3f45348a43a5cb0089f17b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dccae4c0875ea785cb74564e1c2df5c82f2ba4ee3f45348a43a5cb0089f17b4->enter($__internal_2dccae4c0875ea785cb74564e1c2df5c82f2ba4ee3f45348a43a5cb0089f17b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2dccae4c0875ea785cb74564e1c2df5c82f2ba4ee3f45348a43a5cb0089f17b4->leave($__internal_2dccae4c0875ea785cb74564e1c2df5c82f2ba4ee3f45348a43a5cb0089f17b4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
