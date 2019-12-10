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

/* /wild/navbar.html.twig */
class __TwigTemplate_b444b3e104f154ae20035f0aa48b76afc2cde8a6b2a928c5222bee95bf275931 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/wild/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/wild/navbar.html.twig"));

        // line 1
        $this->displayBlock('nav', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 2
        echo "    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">Homepage<span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/wild/category/horror\">Categorie Horreur</a> 
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/wild/category/fantastique\">Categorie fantastique</a> 
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/season/new\">Nouveau Formulaire season</a> 
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/episode/new\">Nouveau Formulaire episode</a> 
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/program/new\">Nouveau Formulaire programme</a> 
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Ma séléction
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"/wild/show/the-walking-dead\">Walking Dead </a>
                    <a class=\"dropdown-item\" href=\"/wild/show/the-haunting-of-hill-house\">The Haunting Of Hill House </a>
                    <a class=\"dropdown-item\" href=\"/wild/show/american-horror-story\">American Horror Story  </a>
                    <a class=\"dropdown-item\" href=\"/wild/show/love-death-and-robots\">Love Death And Robots </a>
                    <a class=\"dropdown-item\" href=\"/wild/show/penny-dreadful\">Penny Dreadful </a>
                    <a class=\"dropdown-item\" href=\"/wild/show/fear-the-walking-dead\">Fear The Walking Dead </a>
                    <a class=\"dropdown-item\" href=\"/wild/show/game-of-thrones\">Games of thrones </a>
                    <a class=\"dropdown-item\" href=\"/wild/show/lucifer\">Lucifer </a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">En cours de création</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Les saisons
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"/wild/season/1\">Games Of Thrones saison 1 </a>
                    <a class=\"dropdown-item\" href=\"/wild/season/2\">Games Of Thrones saison 2 </a>
                    <a class=\"dropdown-item\" href=\"/wild/season/3\">Lucifer saison 1</a>
                    <a class=\"dropdown-item\" href=\"/wild/season/4\">Lucifer saison 2</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">En cours de création</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Les episodes
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"/wild/episode/1\">Games Of Thrones épisode 1 saison 1 </a>
                    <a class=\"dropdown-item\" href=\"/wild/episode/2\">Games Of Thrones épisode 2 saison 1 </a>
                    <a class=\"dropdown-item\" href=\"/wild/episode/3\">Games Of Thrones épisode 3 saison 1 </a>
                    <a class=\"dropdown-item\" href=\"/wild/episode/4\">Games Of Thrones épisode 1 saison 2 </a>
                    <div class=\"dropdown-divider\">
                    </div>
                    <a class=\"dropdown-item\" href=\"#\">En cours de création</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/wild/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 6,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block nav %}
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('app_index') }}\">Homepage<span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/wild/category/horror\">Categorie Horreur</a> 
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/wild/category/fantastique\">Categorie fantastique</a> 
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/season/new\">Nouveau Formulaire season</a> 
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/episode/new\">Nouveau Formulaire episode</a> 
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/program/new\">Nouveau Formulaire programme</a> 
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Ma séléction
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"/wild/show/the-walking-dead\">Walking Dead </a>
                    <a class=\"dropdown-item\" href=\"/wild/show/the-haunting-of-hill-house\">The Haunting Of Hill House </a>
                    <a class=\"dropdown-item\" href=\"/wild/show/american-horror-story\">American Horror Story  </a>
                    <a class=\"dropdown-item\" href=\"/wild/show/love-death-and-robots\">Love Death And Robots </a>
                    <a class=\"dropdown-item\" href=\"/wild/show/penny-dreadful\">Penny Dreadful </a>
                    <a class=\"dropdown-item\" href=\"/wild/show/fear-the-walking-dead\">Fear The Walking Dead </a>
                    <a class=\"dropdown-item\" href=\"/wild/show/game-of-thrones\">Games of thrones </a>
                    <a class=\"dropdown-item\" href=\"/wild/show/lucifer\">Lucifer </a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">En cours de création</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Les saisons
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"/wild/season/1\">Games Of Thrones saison 1 </a>
                    <a class=\"dropdown-item\" href=\"/wild/season/2\">Games Of Thrones saison 2 </a>
                    <a class=\"dropdown-item\" href=\"/wild/season/3\">Lucifer saison 1</a>
                    <a class=\"dropdown-item\" href=\"/wild/season/4\">Lucifer saison 2</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">En cours de création</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Les episodes
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"/wild/episode/1\">Games Of Thrones épisode 1 saison 1 </a>
                    <a class=\"dropdown-item\" href=\"/wild/episode/2\">Games Of Thrones épisode 2 saison 1 </a>
                    <a class=\"dropdown-item\" href=\"/wild/episode/3\">Games Of Thrones épisode 3 saison 1 </a>
                    <a class=\"dropdown-item\" href=\"/wild/episode/4\">Games Of Thrones épisode 1 saison 2 </a>
                    <div class=\"dropdown-divider\">
                    </div>
                    <a class=\"dropdown-item\" href=\"#\">En cours de création</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
{% endblock %}", "/wild/navbar.html.twig", "/home/lirith-drasar/Bureau/Projet/wild-series/templates/wild/navbar.html.twig");
    }
}
