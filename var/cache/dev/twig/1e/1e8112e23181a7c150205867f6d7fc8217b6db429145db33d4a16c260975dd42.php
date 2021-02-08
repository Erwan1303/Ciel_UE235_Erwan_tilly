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

/* shared/_assurance.html.twig */
class __TwigTemplate_1aa5f1e6c7800e7f9e8514c9f7693a26e97726bcaa3ed59046c0749c0b8c8b37 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_assurance.html.twig"));

        // line 1
        echo "<div class=\"col\">
\t<div class=\"card bg-";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 2, $this->source); })()), "html", null, true);
        echo " text-white text-center\">
\t\t<div class=\"card-body\">
\t\t\t<i class=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["icone"]) || array_key_exists("icone", $context) ? $context["icone"] : (function () { throw new RuntimeError('Variable "icone" does not exist.', 4, $this->source); })()), "html", null, true);
        echo " fa-2x mb-3\"></i>
\t\t\t<p class=\"card-text\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "
\t\t\t</p>

\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shared/_assurance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  48 => 4,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col\">
\t<div class=\"card bg-{{color}} text-white text-center\">
\t\t<div class=\"card-body\">
\t\t\t<i class=\"{{icone}} fa-2x mb-3\"></i>
\t\t\t<p class=\"card-text\">{{text}}
\t\t\t</p>

\t\t</div>
\t</div>
</div>
", "shared/_assurance.html.twig", "/app/templates/shared/_assurance.html.twig");
    }
}
