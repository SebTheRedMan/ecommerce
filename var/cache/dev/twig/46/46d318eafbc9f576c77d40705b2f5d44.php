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

/* categories/list.html.twig */
class __TwigTemplate_713c615e9db647ae157a884e0697c61c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categories/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des produits de la catégorie
\t";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<main class=\"container\">
\t\t<section class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>Liste des produits de la catégorie
\t\t\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
\t\t\t</div>
\t\t\t";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "data", [], "any", true, true, false, 14)) {
            // line 15
            echo "
\t\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 16, $this->source); })()), "data", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 17
                echo "\t\t\t\t\t<div class=\"col-3 mb-3\">
\t\t\t\t\t\t<article class=\"card h-100\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h2 class=\"card-title\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 21), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_details", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Voir le détail</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
\t\t\t\t";
            // line 28
            $context["path"] = "categories_list";
            // line 29
            echo "\t\t\t\t";
            $context["slug"] = twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 29, $this->source); })()), "slug", [], "any", false, false, false, 29);
            // line 30
            echo "\t\t\t\t";
            $context["nbp"] = twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 30, $this->source); })()), "nbp", [], "any", false, false, false, 30);
            // line 31
            echo "\t\t\t\t";
            $context["currentPage"] = twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 31, $this->source); })()), "currentPage", [], "any", false, false, false, 31);
            // line 32
            echo "
\t\t\t\t";
            // line 33
            echo twig_include($this->env, $context, "partials/_pagination.html.twig");
            echo "
            ";
        } else {
            // line 35
            echo "                La catégorie n'a pas de produit
\t\t\t";
        }
        // line 37
        echo "
\t\t</section>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "categories/list.html.twig";
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
        return array (  163 => 37,  159 => 35,  154 => 33,  151 => 32,  148 => 31,  145 => 30,  142 => 29,  140 => 28,  137 => 27,  126 => 22,  122 => 21,  118 => 20,  113 => 17,  109 => 16,  106 => 15,  104 => 14,  99 => 12,  93 => 8,  83 => 7,  71 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des produits de la catégorie
\t{{ category.name }}
{% endblock %}

{% block body %}
\t<main class=\"container\">
\t\t<section class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>Liste des produits de la catégorie
\t\t\t\t\t{{ category.name }}</h1>
\t\t\t</div>
\t\t\t{% if products.data  is defined %}

\t\t\t\t{% for product in products.data %}
\t\t\t\t\t<div class=\"col-3 mb-3\">
\t\t\t\t\t\t<article class=\"card h-100\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h2 class=\"card-title\">{{ product.name }}</h2>
\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ product.description }}</p>
\t\t\t\t\t\t\t\t<a href=\"{{ path('products_details', {\"slug\": product.slug})}}\" class=\"btn btn-primary\">Voir le détail</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}

\t\t\t\t{% set path = 'categories_list' %}
\t\t\t\t{% set slug = category.slug %}
\t\t\t\t{% set nbp = products.nbp %}
\t\t\t\t{% set currentPage = products.currentPage %}

\t\t\t\t{{ include('partials/_pagination.html.twig') }}
            {% else %}
                La catégorie n'a pas de produit
\t\t\t{% endif %}

\t\t</section>
\t</main>
{% endblock %}
", "categories/list.html.twig", "C:\\Users\\darkn\\Workspace\\ProjetsTests\\ecommerce\\templates\\categories\\list.html.twig");
    }
}
