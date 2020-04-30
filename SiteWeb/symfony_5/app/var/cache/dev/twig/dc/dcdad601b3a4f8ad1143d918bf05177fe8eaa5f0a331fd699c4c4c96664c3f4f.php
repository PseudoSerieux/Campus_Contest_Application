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

/* base.html.twig */
class __TwigTemplate_b721e97a1436c96bf39255c8530c0bc40943bd4ee4de62dad95443ab78226ffd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
    <style>
        /* .boutons{
        position: absolute;
        margin-left: 50%;
        top: 1%;
        } */
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

        /* div p1 */
        #imgp1{
            z-index:1;
            position: relative;
            padding: 0;
            width: 100%;
            height: 70%;
        }
        #appl{
            position:absolute;
            top: 60%;
            left: 27%;
            z-index:2;
            font-size:150%;
            background: #ff9439;
            border:none;
            padding:22px 20px 22px 20px;
            border-radius:25px;
            font:bold 20px Arial;
            color:#ffffff;
            text-decoration: none;
        }
        #appl:hover{
            color: #ff9439;
            background: #ffffff;
            border:1px solid #ff9439;
        }
        #propos{
            position:absolute;
            top: 60%;
            left: 58%;
            z-index:2;
            font-size:150%;
            background: #ffffff00;
            border:1px solid #ffffff;
            padding:22px 20px 22px 20px;
            border-radius:25px;
            font:bold 20px Arial;
            color:#ffffff;
            text-decoration: none;
        }
        #propos:hover{
            color: #ff9439;
            background: #ffffff;
            border:1px solid #ff9439;
        }

        /* div p2 */
        #p2{
            position: relative;
            margin: 70px auto;
            z-index: 2;
        }
        #hrp2{
            height: 2px;
            background-color: #ff9439;
        }
        #nomapk{
            position: relative;
            left: 8px;
            font: 30px Arial;
            color: #ff9439;
        }
        /*faire css pour slide*/

        /*fin css pour slide */
        .textdes{
            position: absolute;
            right: 5%;
        }
        #description{
            position: relative;
            text-align: justify;
            margin-left: 50%;
            z-index: 3;
        }
        #dlapp{
            position:absolute;
            left: 40%;
            margin-top: 20% ;
            font-size:150%;
            background: #ff9439;
            border:none;
            padding:22px 20px 22px 20px;
            border-radius:25px;
            font:bold 20px Arial;
            color:#ffffff;
            text-decoration: none;
        }
        #dlapp:hover{
            color: #ff9439;
            background: #ffffff;
            border:1px solid #ff9439;
        }

        /* div p3 */
        #p3{
            position: relative;
            margin-bottom: 10%;
            z-index: 1;
        }
        #nomprop{
            position: relative;
            left: 8px;
            font: 30px Arial;
            color: #ff9439;
        }
        #hrp3{
            height: 2px;
            background-color: #ff9439;
            width: 100%;
        }
        .textprop{
            position: absolute;
            right: 5%;
        }
        #descprop{
            position: relative;
            text-align: justify;
            margin-left: 5%;
            z-index: 3;
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
        ";
        // line 202
        $this->displayBlock('body', $context, $blocks);
        // line 203
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 204
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 202
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 203
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  328 => 203,  310 => 202,  292 => 6,  273 => 5,  261 => 204,  258 => 203,  256 => 202,  59 => 7,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
    <style>
        /* .boutons{
        position: absolute;
        margin-left: 50%;
        top: 1%;
        } */
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

        /* div p1 */
        #imgp1{
            z-index:1;
            position: relative;
            padding: 0;
            width: 100%;
            height: 70%;
        }
        #appl{
            position:absolute;
            top: 60%;
            left: 27%;
            z-index:2;
            font-size:150%;
            background: #ff9439;
            border:none;
            padding:22px 20px 22px 20px;
            border-radius:25px;
            font:bold 20px Arial;
            color:#ffffff;
            text-decoration: none;
        }
        #appl:hover{
            color: #ff9439;
            background: #ffffff;
            border:1px solid #ff9439;
        }
        #propos{
            position:absolute;
            top: 60%;
            left: 58%;
            z-index:2;
            font-size:150%;
            background: #ffffff00;
            border:1px solid #ffffff;
            padding:22px 20px 22px 20px;
            border-radius:25px;
            font:bold 20px Arial;
            color:#ffffff;
            text-decoration: none;
        }
        #propos:hover{
            color: #ff9439;
            background: #ffffff;
            border:1px solid #ff9439;
        }

        /* div p2 */
        #p2{
            position: relative;
            margin: 70px auto;
            z-index: 2;
        }
        #hrp2{
            height: 2px;
            background-color: #ff9439;
        }
        #nomapk{
            position: relative;
            left: 8px;
            font: 30px Arial;
            color: #ff9439;
        }
        /*faire css pour slide*/

        /*fin css pour slide */
        .textdes{
            position: absolute;
            right: 5%;
        }
        #description{
            position: relative;
            text-align: justify;
            margin-left: 50%;
            z-index: 3;
        }
        #dlapp{
            position:absolute;
            left: 40%;
            margin-top: 20% ;
            font-size:150%;
            background: #ff9439;
            border:none;
            padding:22px 20px 22px 20px;
            border-radius:25px;
            font:bold 20px Arial;
            color:#ffffff;
            text-decoration: none;
        }
        #dlapp:hover{
            color: #ff9439;
            background: #ffffff;
            border:1px solid #ff9439;
        }

        /* div p3 */
        #p3{
            position: relative;
            margin-bottom: 10%;
            z-index: 1;
        }
        #nomprop{
            position: relative;
            left: 8px;
            font: 30px Arial;
            color: #ff9439;
        }
        #hrp3{
            height: 2px;
            background-color: #ff9439;
            width: 100%;
        }
        .textprop{
            position: absolute;
            right: 5%;
        }
        #descprop{
            position: relative;
            text-align: justify;
            margin-left: 5%;
            z-index: 3;
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
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/php/templates/base.html.twig");
    }
}
