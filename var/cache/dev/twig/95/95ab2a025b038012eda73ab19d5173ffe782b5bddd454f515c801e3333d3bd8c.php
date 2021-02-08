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

/* shared/_navbar.html.twig */
class __TwigTemplate_123cad118dcf593565bed22b5b16c8687ef493f154dd2c1df7771c65175d6381 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t<a class=\"navbar-brand\" href=\"#\">Les p'tites recettes faciles</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t<ul class=\"navbar-nav mr-auto\">

\t\t\t<li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"menu\">Home
\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\">catégories</a>
\t\t\t</li>


\t\t</ul>

\t</div>
</nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shared/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t<a class=\"navbar-brand\" href=\"#\">Les p'tites recettes faciles</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t<ul class=\"navbar-nav mr-auto\">

\t\t\t<li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"menu\">Home
\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ path('category_index') }}\">catégories</a>
\t\t\t</li>


\t\t</ul>

\t</div>
</nav>
", "shared/_navbar.html.twig", "/app/templates/shared/_navbar.html.twig");
    }
}
