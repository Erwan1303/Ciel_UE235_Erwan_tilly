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

/* plat/index.html.twig */
class __TwigTemplate_31af52277c90b361b814c41b23d1d27c5a366a3ca82bca29a42b162ee445c288 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "plat/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Plat index
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<img src=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/img1.jpg"), "html", null, true);
        echo "\" class=\"img-fluide\" alt=\"image plat\"/>

\t<h1>Plat index</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Categorie</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 23
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 27
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "Category", [], "any", false, true, false, 27), "name", [], "any", true, true, false, 27)) {
                // line 28
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "Category", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "description", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plat_show", ["id" => twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"btn btn-success disabled\">show</a>
\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plat_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-danger disabled\">edit</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plat_new");
        echo "\" class=\"btn btn-warning disabled\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "plat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 45,  148 => 42,  139 => 38,  130 => 34,  126 => 33,  121 => 31,  118 => 30,  112 => 28,  110 => 27,  105 => 25,  101 => 24,  98 => 23,  93 => 22,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Plat index
{% endblock %}

{% block body %}
\t<img src=\" {{ asset('img/img1.jpg') }}\" class=\"img-fluide\" alt=\"image plat\"/>

\t<h1>Plat index</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Categorie</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for plat in plats %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ plat.id }}</td>
\t\t\t\t\t<td>{{ plat.nom }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% if plat.Category.name is defined %}
\t\t\t\t\t\t\t{{ plat.Category.name }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{ plat.description }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('plat_show', {'id': plat.id}) }}\" class=\"btn btn-success disabled\">show</a>
\t\t\t\t\t\t<a href=\"{{ path('plat_edit', {'id': plat.id}) }}\" class=\"btn btn-danger disabled\">edit</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('plat_new') }}\" class=\"btn btn-warning disabled\">Create new</a>
{% endblock %}
", "plat/index.html.twig", "/app/templates/plat/index.html.twig");
    }
}
