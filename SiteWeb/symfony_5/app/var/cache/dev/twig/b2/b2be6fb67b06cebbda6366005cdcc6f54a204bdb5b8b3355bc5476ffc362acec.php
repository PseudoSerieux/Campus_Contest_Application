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

/* home/index.html.twig */
class __TwigTemplate_8fcd58a00c1281d4635f3bba61ee4f2fd6ffbf3b731ad86263edbb88eefb188a extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Hello HomeController!";
        
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
        echo "<head>
    <title> Accueil CoinCoin Insolite </title>
</head>

<body>
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
    <img src=\"images/Autre 032.jpg\" id=\"imgp1\">
    <div class=\"p1\">
        <a href=\"#p2\" id=\"appl\">Découvrir l'application</a>
        <a href=\"#p3\" id=\"propos\"> A propos de l'équipe </a>
    </div>

    <!-- partie \"Notre Application\" -->
    <div id=\"p2\">
        <p id=\"nomapk\"> Notre Application </p>
        <hr id=\"hrp2\">
        <!-- slide -->
        <div class=\"slide\">
            <div class=\"imgslide\">
                <img src=\"#\">
            </div>
            <div class=\"imgslide\">
                <img src=\"#\">
            </div>
            <div class=\"imgslide\">
                <img src=\"#\">
            </div>
        </div>
        <!-- fin slide -->
        <div class=\"textdes\">
            <p id=\"description\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius, tellus in euismod porttitor, erat erat imperdiet purus,
                eu faucibus risus dolor ac elit. Donec vel leo eu ex maximus ultricies ut sed neque. Donec posuere metus sit amet sodales fringilla.
                Mauris rutrum diam felis, a ornare est sodales id. Nam orci nunc, mattis et ipsum venenatis, congue gravida lacus. Duis mollis leo urna,
                a faucibus diam accumsan ac. Sed rhoncus sollicitudin elit a vehicula. Sed id enim et ante volutpat semper id ultrices dui. Donec a luctus
                tortor, sed feugiat est. Cras in ligula eget ex eleifend molestie. Donec eget lorem ipsum.
                Integer lorem turpis, faucibus at libero id, posuere venenatis tortor. Suspendisse ex nulla, placerat ac sodales nec, iaculis sit amet purus.
                Etiam sapien erat, imperdiet ut leo et, accumsan volutpat quam. Nullam ultricies at urna et viverra. Nulla dignissim neque eu pulvinar pharetra.
                Etiam elementum urna a nisl finibus, in malesuada nunc laoreet. Duis sit amet pulvinar tortor, et ullamcorper turpis. Donec tristique vestibulum
                libero, in malesuada tellus rutrum nec. Duis quis arcu sit amet eros euismod finibus.
            </p>
        </div>
        <a href=\"#\" id=\"dlapp\"> Télécharger l'application ! </a>
    </div>
    <!-- fin partie \"Notre Application\" -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- partie \"A propos\" -->
    <div id=\"p3\">
        <p id=\"nomprop\"> A propos de nous </p>
        <hr id=\"hrp3\">
        <div class=\"textprop\">
            <p id=\"descprop\">
                Chez CoinCoin Insolite, nous sommes un groupe d'étudiants motivé par la réussite de nos projets et nous avons envie de transmettre
                cette motivation ainsi que cette énergie à nos clients en créant l'application qui correspond le plus possible avec leurs projets.
            </p>
        </div>
    </div>
    <!-- fin partie \"A propos\" -->
</main>
<br><br>
<footer>
    <a href=\"#\" id=\"ftrcgu\"> CGU </a>
</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<head>
    <title> Accueil CoinCoin Insolite </title>
</head>

<body>
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
    <img src=\"images/Autre 032.jpg\" id=\"imgp1\">
    <div class=\"p1\">
        <a href=\"#p2\" id=\"appl\">Découvrir l'application</a>
        <a href=\"#p3\" id=\"propos\"> A propos de l'équipe </a>
    </div>

    <!-- partie \"Notre Application\" -->
    <div id=\"p2\">
        <p id=\"nomapk\"> Notre Application </p>
        <hr id=\"hrp2\">
        <!-- slide -->
        <div class=\"slide\">
            <div class=\"imgslide\">
                <img src=\"#\">
            </div>
            <div class=\"imgslide\">
                <img src=\"#\">
            </div>
            <div class=\"imgslide\">
                <img src=\"#\">
            </div>
        </div>
        <!-- fin slide -->
        <div class=\"textdes\">
            <p id=\"description\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius, tellus in euismod porttitor, erat erat imperdiet purus,
                eu faucibus risus dolor ac elit. Donec vel leo eu ex maximus ultricies ut sed neque. Donec posuere metus sit amet sodales fringilla.
                Mauris rutrum diam felis, a ornare est sodales id. Nam orci nunc, mattis et ipsum venenatis, congue gravida lacus. Duis mollis leo urna,
                a faucibus diam accumsan ac. Sed rhoncus sollicitudin elit a vehicula. Sed id enim et ante volutpat semper id ultrices dui. Donec a luctus
                tortor, sed feugiat est. Cras in ligula eget ex eleifend molestie. Donec eget lorem ipsum.
                Integer lorem turpis, faucibus at libero id, posuere venenatis tortor. Suspendisse ex nulla, placerat ac sodales nec, iaculis sit amet purus.
                Etiam sapien erat, imperdiet ut leo et, accumsan volutpat quam. Nullam ultricies at urna et viverra. Nulla dignissim neque eu pulvinar pharetra.
                Etiam elementum urna a nisl finibus, in malesuada nunc laoreet. Duis sit amet pulvinar tortor, et ullamcorper turpis. Donec tristique vestibulum
                libero, in malesuada tellus rutrum nec. Duis quis arcu sit amet eros euismod finibus.
            </p>
        </div>
        <a href=\"#\" id=\"dlapp\"> Télécharger l'application ! </a>
    </div>
    <!-- fin partie \"Notre Application\" -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- partie \"A propos\" -->
    <div id=\"p3\">
        <p id=\"nomprop\"> A propos de nous </p>
        <hr id=\"hrp3\">
        <div class=\"textprop\">
            <p id=\"descprop\">
                Chez CoinCoin Insolite, nous sommes un groupe d'étudiants motivé par la réussite de nos projets et nous avons envie de transmettre
                cette motivation ainsi que cette énergie à nos clients en créant l'application qui correspond le plus possible avec leurs projets.
            </p>
        </div>
    </div>
    <!-- fin partie \"A propos\" -->
</main>
<br><br>
<footer>
    <a href=\"#\" id=\"ftrcgu\"> CGU </a>
</footer>
{% endblock %}
", "home/index.html.twig", "/php/templates/home/index.html.twig");
    }
}
