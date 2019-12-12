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

/* /wild/header.html.twig */
class __TwigTemplate_77c1d05a68d6ffece7d6f15959ce297031c71d0214b1bc4e79b807513246a82f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/wild/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/wild/header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "    <!-- Présentation d'équilibr' & Minceur -->
        <h1 class=\"Titre\">Bienvenue</h1>
            <div class=\"texte\">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam possimus dolorum dolore commodi,
                voluptatem qui ea, similique soluta nostrum numquam non reprehenderit! Qui aut dolorem, quisquam ea
                nihil facere consequatur!</p>
            </div>
            <h2 class=\"Titre\">Présentation</h2>
            <div class=\"texte\">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam possimus dolorum dolore commodi,
                voluptatem qui ea, similique soluta nostrum numquam non reprehenderit! Qui aut dolorem, quisquam ea
                nihil facere consequatur!</p>
            </div>
            <h2 class=\"Titre\">Nos coordonnées</h2>
            <div class=\"texte\">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam possimus dolorum dolore commodi,
                voluptatem qui ea, similique soluta nostrum numquam non reprehenderit! Qui aut dolorem, quisquam ea
                nihil facere consequatur!</p>
            </div>
        </div>
    </div>
    <div class=\"section_1\">
        <img class=\"section_1\" src=\"https://cdn.apsari.com/102870/uploads/6b32d6e0-59d9-11e9-bacf-2301b7f3e310_800_420.png\">
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/wild/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}
    <!-- Présentation d'équilibr' & Minceur -->
        <h1 class=\"Titre\">Bienvenue</h1>
            <div class=\"texte\">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam possimus dolorum dolore commodi,
                voluptatem qui ea, similique soluta nostrum numquam non reprehenderit! Qui aut dolorem, quisquam ea
                nihil facere consequatur!</p>
            </div>
            <h2 class=\"Titre\">Présentation</h2>
            <div class=\"texte\">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam possimus dolorum dolore commodi,
                voluptatem qui ea, similique soluta nostrum numquam non reprehenderit! Qui aut dolorem, quisquam ea
                nihil facere consequatur!</p>
            </div>
            <h2 class=\"Titre\">Nos coordonnées</h2>
            <div class=\"texte\">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam possimus dolorum dolore commodi,
                voluptatem qui ea, similique soluta nostrum numquam non reprehenderit! Qui aut dolorem, quisquam ea
                nihil facere consequatur!</p>
            </div>
        </div>
    </div>
    <div class=\"section_1\">
        <img class=\"section_1\" src=\"https://cdn.apsari.com/102870/uploads/6b32d6e0-59d9-11e9-bacf-2301b7f3e310_800_420.png\">
    </div>
{% endblock %}", "/wild/header.html.twig", "/home/lirith-drasar/Bureau/Projet/wild-series/templates/wild/header.html.twig");
    }
}
