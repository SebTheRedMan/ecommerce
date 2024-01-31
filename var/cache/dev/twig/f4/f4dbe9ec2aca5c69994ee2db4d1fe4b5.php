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

/* partials/_header.html.twig */
class __TwigTemplate_23a446f287eb1cc0b96a9dd7696567ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/_nav.html.twig");
        echo "

";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "isVerified", [], "any", false, false, false, 3) == false))) {
            // line 4
            echo "    <div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"close\"></button>
        <div class=\"alert-message\">
            <strong>Votre compte n'est pas activé</strong>, <a href=\"";
            // line 7
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resend_verif");
            echo "\">renvoyer le lien d'activation</a>
        </div>
    </div>
";
        }
        // line 11
        echo "
";
        // line 12
        echo twig_include($this->env, $context, "partials/_flashes.html.twig");
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_header.html.twig";
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
        return array (  65 => 12,  62 => 11,  55 => 7,  50 => 4,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/_nav.html.twig') }}

{% if app.user and app.user.isVerified == false %}
    <div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"close\"></button>
        <div class=\"alert-message\">
            <strong>Votre compte n'est pas activé</strong>, <a href=\"{{ path('resend_verif') }}\">renvoyer le lien d'activation</a>
        </div>
    </div>
{% endif %}

{{ include('partials/_flashes.html.twig') }}", "partials/_header.html.twig", "C:\\Users\\darkn\\Workspace\\ProjetsTests\\ecommerce\\templates\\partials\\_header.html.twig");
    }
}
