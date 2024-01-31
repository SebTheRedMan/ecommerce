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

/* partials/_pagination.html.twig */
class __TwigTemplate_a685cda1b54095c2b22ff6d02ea8c333 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_pagination.html.twig"));

        // line 1
        echo "
";
        // line 2
        if (((isset($context["nbp"]) || array_key_exists("nbp", $context) ? $context["nbp"] : (function () { throw new RuntimeError('Variable "nbp" does not exist.', 2, $this->source); })()) > 1)) {
            // line 3
            echo "    <nav>
    <ul class=\"pagination\">
        <li class=\"page-item ";
            // line 5
            echo ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 5, $this->source); })()) > 1)) ? ("") : ("disabled"));
            echo "\">
            <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 6, $this->source); })()), ["slug" => (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 6, $this->source); })()), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 6, $this->source); })()) - 1)]), "html", null, true);
            echo "\" class=\"page-link\">&lt;</a>
        </li>

    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbp"]) || array_key_exists("nbp", $context) ? $context["nbp"] : (function () { throw new RuntimeError('Variable "nbp" does not exist.', 9, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 10
                echo "        <li class=\"page-item\">
            <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 11, $this->source); })()), ["slug" => (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 11, $this->source); })()), "page" => $context["page"]]), "html", null, true);
                echo "\" class=\"page-link ";
                echo ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 11, $this->source); })()) == $context["page"])) ? ("active") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    
        <li class=\"page-item ";
            // line 15
            echo ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 15, $this->source); })()) < (isset($context["nbp"]) || array_key_exists("nbp", $context) ? $context["nbp"] : (function () { throw new RuntimeError('Variable "nbp" does not exist.', 15, $this->source); })()))) ? ("") : ("disabled"));
            echo "\">
            <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 16, $this->source); })()), ["slug" => (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 16, $this->source); })()), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 16, $this->source); })()) + 1)]), "html", null, true);
            echo "\" class=\"page-link\">&gt;</a>
        </li>
    </ul>
    </nav>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_pagination.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  89 => 16,  85 => 15,  82 => 14,  69 => 11,  66 => 10,  62 => 9,  56 => 6,  52 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if nbp > 1 %}
    <nav>
    <ul class=\"pagination\">
        <li class=\"page-item {{ currentPage > 1 ? '' : 'disabled'}}\">
            <a href=\"{{ path(path, {slug: slug, page: currentPage - 1}) }}\" class=\"page-link\">&lt;</a>
        </li>

    {% for page in 1..nbp %}
        <li class=\"page-item\">
            <a href=\"{{ path(path, {slug: slug, page: page}) }}\" class=\"page-link {{ currentPage == page ? 'active' : ''}}\">{{ page }}</a>
        </li>
    {% endfor %}
    
        <li class=\"page-item {{ currentPage < nbp ? '' : 'disabled'}}\">
            <a href=\"{{ path(path, {slug: slug, page: currentPage + 1}) }}\" class=\"page-link\">&gt;</a>
        </li>
    </ul>
    </nav>
{% endif %}", "partials/_pagination.html.twig", "C:\\Users\\darkn\\Workspace\\ProjetsTests\\ecommerce\\templates\\partials\\_pagination.html.twig");
    }
}
