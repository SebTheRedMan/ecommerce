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

/* partials/_admin_nav.html.twig */
class __TwigTemplate_9c07a533e4ef8a8c1fcb0cccfaa7838d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_admin_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_admin_nav.html.twig"));

        // line 1
        echo "<aside class=\"col-3 border border-light bg-white p-2\">
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Catégories
        </div>
        <div class=\"card-body\">
            <p><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
        echo "\">Liste des catégories</a></p>
            <p><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_add");
        echo "\">Ajouter une catégorie</a></p>
        </div>
    </article>
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Produits
        </div>
        <div class=\"card-body\">
            <p><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_index");
        echo "\">Liste des produits</a></p>
            <p><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_add");
        echo "\">Ajouter un produit</a></p>
        </div>
    </article>
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Utilisateurs
        </div>
        <div class=\"card-body\">
            <p><a href=\" ";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_index");
        echo "\">Liste des utilisateurs</a></p>
        </div>
    </article>
</aside>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_admin_nav.html.twig";
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
        return array (  81 => 25,  70 => 17,  66 => 16,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"col-3 border border-light bg-white p-2\">
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Catégories
        </div>
        <div class=\"card-body\">
            <p><a href=\"{{ path('admin_categories_index') }}\">Liste des catégories</a></p>
            <p><a href=\"{{ path('admin_categories_add') }}\">Ajouter une catégorie</a></p>
        </div>
    </article>
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Produits
        </div>
        <div class=\"card-body\">
            <p><a href=\"{{ path('admin_products_index') }}\">Liste des produits</a></p>
            <p><a href=\"{{ path('admin_products_add') }}\">Ajouter un produit</a></p>
        </div>
    </article>
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Utilisateurs
        </div>
        <div class=\"card-body\">
            <p><a href=\" {{ path('admin_users_index') }}\">Liste des utilisateurs</a></p>
        </div>
    </article>
</aside>", "partials/_admin_nav.html.twig", "C:\\Users\\darkn\\Workspace\\ProjetsTests\\ecommerce\\templates\\partials\\_admin_nav.html.twig");
    }
}
