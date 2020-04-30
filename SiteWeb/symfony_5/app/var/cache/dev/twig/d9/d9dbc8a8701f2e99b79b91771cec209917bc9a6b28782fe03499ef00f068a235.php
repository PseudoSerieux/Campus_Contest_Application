<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* contact/index.html.twig */
class __TwigTemplate_0d52ec346e56dfc51bfe2e92f827d46ed20031781657477751e1241af89423b5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PictureControllerController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        #galerie{
            position: absolute;
            top: 6%;
            right: 29%;
            background: #ffffff;
            border:1px solid #898888;
            padding:10px 25px 10px 25px;
            border-radius:8px;
            font:bold 16px Arial;
            color:#707070;
            text-decoration: none;
        }
        #galerie:hover{
            color: #ffffff;
            background: #707070a1;
            border: none;
        }
        #contact{
            position: absolute;
            top:6%;
            right: 16%;
            background: #ffffff;
            border:1px solid #8e7f7f;
            padding:10px 22px 10px 22px;
            border-radius:8px;
            font:bold 16px Arial;
            color:#707070;
            text-decoration: none;
        }
        #contact:hover{
            color: #ffffff;
            background: #707070a1;
            border: none;
        }
        #connexion{
            position: absolute;
            top:6%;
            right: 2%;
            background: #ffffff;
            border:1px solid #ff9439;
            padding:10px 20px 10px 20px;
            border-radius:8px;
            font:bold 16px Arial;
            color:#ff9439;
            text-decoration: none;
        }
        #connexion:hover{
            color: #ffffff;
            background: #ff9439;
        }
        /* main */
        h2{
            font-size: 200%;
            text-align: center;
            color: #ff9439;
        }
        /* footer */
        footer{
            background-color: #a4a4a4;
            padding: 3%;
        }
        #ftrcgu{
            position: relative;
            left: 50%;
            color: #ffffff ;
            text-align: center;
            text-decoration: none;
        }
    </style>

    <header>
        <div id=\"logo\">
            <a href=\"/\">
                <img src=\"#\">
                <h1> CoinCoin Insolite </h1>
            </a>
        </div>

        <a href=\"/gallery/add\" id=\"galerie\"> Galerie </a>
        <a href=\"/contact\" id=\"contact\"> Contact </a>
        <a href=\"#\" id=\"connexion\"> Connexion </a>

    </header>
    <main>
        <br>
        <h2>Nous contacter</h2>
        <br>
        ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form');
        echo "
    </main>
    <br><br><br><br>
    <footer>
        <a href=\"#\" id=\"ftrcgu\"> CGU </a>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 94,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './base.html.twig' %}

{% block title %}Hello PictureControllerController!{% endblock %}

{% block body %}
    <style>
        #galerie{
            position: absolute;
            top: 6%;
            right: 29%;
            background: #ffffff;
            border:1px solid #898888;
            padding:10px 25px 10px 25px;
            border-radius:8px;
            font:bold 16px Arial;
            color:#707070;
            text-decoration: none;
        }
        #galerie:hover{
            color: #ffffff;
            background: #707070a1;
            border: none;
        }
        #contact{
            position: absolute;
            top:6%;
            right: 16%;
            background: #ffffff;
            border:1px solid #8e7f7f;
            padding:10px 22px 10px 22px;
            border-radius:8px;
            font:bold 16px Arial;
            color:#707070;
            text-decoration: none;
        }
        #contact:hover{
            color: #ffffff;
            background: #707070a1;
            border: none;
        }
        #connexion{
            position: absolute;
            top:6%;
            right: 2%;
            background: #ffffff;
            border:1px solid #ff9439;
            padding:10px 20px 10px 20px;
            border-radius:8px;
            font:bold 16px Arial;
            color:#ff9439;
            text-decoration: none;
        }
        #connexion:hover{
            color: #ffffff;
            background: #ff9439;
        }
        /* main */
        h2{
            font-size: 200%;
            text-align: center;
            color: #ff9439;
        }
        /* footer */
        footer{
            background-color: #a4a4a4;
            padding: 3%;
        }
        #ftrcgu{
            position: relative;
            left: 50%;
            color: #ffffff ;
            text-align: center;
            text-decoration: none;
        }
    </style>

    <header>
        <div id=\"logo\">
            <a href=\"/\">
                <img src=\"#\">
                <h1> CoinCoin Insolite </h1>
            </a>
        </div>

        <a href=\"/gallery/add\" id=\"galerie\"> Galerie </a>
        <a href=\"/contact\" id=\"contact\"> Contact </a>
        <a href=\"#\" id=\"connexion\"> Connexion </a>

    </header>
    <main>
        <br>
        <h2>Nous contacter</h2>
        <br>
        {{ form(form) }}
    </main>
    <br><br><br><br>
    <footer>
        <a href=\"#\" id=\"ftrcgu\"> CGU </a>
    </footer>
{% endblock %}
", "contact/index.html.twig", "/php/templates/contact/index.html.twig");
    }
}
