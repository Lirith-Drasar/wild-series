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

/* wild/program.html.twig */
class __TwigTemplate_ae401625bd1bd0c866da999c195d2bb0c55d4f798eab8a9f17aac8905d404370 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wild/program.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wild/program.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wild/program.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                <img class=\"d-block w-100\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 7, $this->source); })()), "poster", [], "any", false, false, false, 7), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo " cover\" />
            </div>
            <div class=\"col-6\">
                <h1>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
                <h2>
                    Seasons list:
                </h2>
                <ul>
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seasons"]) || array_key_exists("seasons", $context) ? $context["seasons"] : (function () { throw new RuntimeError('Variable "seasons" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["season"]) {
            // line 16
            echo "                    <li>
                        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_season", ["seasonId" => twig_get_attribute($this->env, $this->source, $context["season"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">
                            <b>
                                Season ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["season"], "number", [], "any", false, false, false, 19), "html", null, true);
            echo "
                            </b>
                        </a>
                        <p>
                            <b>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["season"], "year", [], "any", false, false, false, 23), "html", null, true);
            echo "</b> - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["season"], "description", [], "any", false, false, false, 23), "html", null, true);
            echo "
                        </p>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['season'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                <tr>
                <th><strong>Actors</strong></th>
                <td>
                    <ul>
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 31, $this->source); })()), "actors", [], "any", false, false, false, 31));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 32
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_actor", ["actorId" => twig_get_attribute($this->env, $this->source, $context["actor"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></li>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                            <li>Aucun acteur pour cette série</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </ul>
                </td>    
            </tr>
                </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wild/program.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 36,  141 => 34,  131 => 32,  126 => 31,  120 => 27,  108 => 23,  101 => 19,  96 => 17,  93 => 16,  89 => 15,  81 => 10,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                <img class=\"d-block w-100\" src=\"{{ program.poster }}\" alt=\"{{ program.title }} cover\" />
            </div>
            <div class=\"col-6\">
                <h1>{{ program.title }}</h1>
                <h2>
                    Seasons list:
                </h2>
                <ul>
                {% for season in seasons %}
                    <li>
                        <a href=\"{{ path('show_season', {seasonId: season.id}) }}\">
                            <b>
                                Season {{ season.number }}
                            </b>
                        </a>
                        <p>
                            <b>{{ season.year }}</b> - {{ season.description }}
                        </p>
                    </li>
                {% endfor %}
                <tr>
                <th><strong>Actors</strong></th>
                <td>
                    <ul>
                        {% for actor in program.actors %}
                            <li><a href=\"{{ path('show_actor', {'actorId': actor.id}) }}\">{{ actor.name }}</a></li>
                        {% else %}
                            <li>Aucun acteur pour cette série</li>
                        {% endfor %}
                    </ul>
                </td>    
            </tr>
                </ul>
            </div>
        </div>
    </div>
{% endblock %}", "wild/program.html.twig", "/home/lirith-drasar/Bureau/Projet/wild-series/templates/wild/program.html.twig");
    }
}
