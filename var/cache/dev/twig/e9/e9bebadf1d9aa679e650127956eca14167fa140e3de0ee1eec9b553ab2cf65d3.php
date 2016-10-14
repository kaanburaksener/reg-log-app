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
        $__internal_f92ff3065e7a711c2fb84f289a5779a17cdba65592ca4bc638a72d6fb61454bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92ff3065e7a711c2fb84f289a5779a17cdba65592ca4bc638a72d6fb61454bd->enter($__internal_f92ff3065e7a711c2fb84f289a5779a17cdba65592ca4bc638a72d6fb61454bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!-- Bootstrap core CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

        <!-- Custom styles for this website -->
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/custom/js/ie-emulation-modes-warning.js"), "html", null, true);
        echo "\"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/custom/js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Custom JS-->
        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/custom/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_f92ff3065e7a711c2fb84f289a5779a17cdba65592ca4bc638a72d6fb61454bd->leave($__internal_f92ff3065e7a711c2fb84f289a5779a17cdba65592ca4bc638a72d6fb61454bd_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_02daa7316b21c283681ab898fcc4419a951079765bf2a84fb4994ab8a03256c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02daa7316b21c283681ab898fcc4419a951079765bf2a84fb4994ab8a03256c6->enter($__internal_02daa7316b21c283681ab898fcc4419a951079765bf2a84fb4994ab8a03256c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Welcome! ";
        
        $__internal_02daa7316b21c283681ab898fcc4419a951079765bf2a84fb4994ab8a03256c6->leave($__internal_02daa7316b21c283681ab898fcc4419a951079765bf2a84fb4994ab8a03256c6_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_070c572ae75db55b237d98cafdbab90266335435aa5741797605ef8ff87de112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070c572ae75db55b237d98cafdbab90266335435aa5741797605ef8ff87de112->enter($__internal_070c572ae75db55b237d98cafdbab90266335435aa5741797605ef8ff87de112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_070c572ae75db55b237d98cafdbab90266335435aa5741797605ef8ff87de112->leave($__internal_070c572ae75db55b237d98cafdbab90266335435aa5741797605ef8ff87de112_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_37826d98bbef06d0402f87c4d5befdfe74a1c31bd528eb98928b91cfdeb1416b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37826d98bbef06d0402f87c4d5befdfe74a1c31bd528eb98928b91cfdeb1416b->enter($__internal_37826d98bbef06d0402f87c4d5befdfe74a1c31bd528eb98928b91cfdeb1416b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_37826d98bbef06d0402f87c4d5befdfe74a1c31bd528eb98928b91cfdeb1416b->leave($__internal_37826d98bbef06d0402f87c4d5befdfe74a1c31bd528eb98928b91cfdeb1416b_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3f079391b4cf1f85350ecf165e18b3c1ac3a0a9f41e43533ac991f70e8a8fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f079391b4cf1f85350ecf165e18b3c1ac3a0a9f41e43533ac991f70e8a8fb4->enter($__internal_e3f079391b4cf1f85350ecf165e18b3c1ac3a0a9f41e43533ac991f70e8a8fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e3f079391b4cf1f85350ecf165e18b3c1ac3a0a9f41e43533ac991f70e8a8fb4->leave($__internal_e3f079391b4cf1f85350ecf165e18b3c1ac3a0a9f41e43533ac991f70e8a8fb4_prof);

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
        return array (  137 => 35,  126 => 26,  115 => 14,  103 => 8,  92 => 38,  88 => 36,  86 => 35,  80 => 32,  76 => 31,  70 => 27,  68 => 26,  57 => 18,  52 => 16,  49 => 15,  47 => 14,  41 => 11,  35 => 8,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>{% block title %} Welcome! {% endblock %}</title>

        <!-- Bootstrap core CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\">

        <!-- Custom styles for this website -->
        {% block stylesheets %}{% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        <script src=\"{{ asset('assets/vendor/custom/js/ie-emulation-modes-warning.js') }}\"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        {% block body %}{% endblock %}

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"{{ asset('assets/vendor/custom/js/jquery-3.1.1.min.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>

        <!-- Custom JS-->
        {% block javascripts %}{% endblock %}

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"{{ asset('assets/vendor/custom/js/ie10-viewport-bug-workaround.js') }}\"></script>
    </body>
</html>
";
    }
}
