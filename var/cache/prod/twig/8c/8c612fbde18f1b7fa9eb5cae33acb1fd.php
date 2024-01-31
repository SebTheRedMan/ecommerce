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
class __TwigTemplate_2c368ac60624acf04bad382866d6a9d7 extends Template
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
        // line 1
        echo twig_include($this->env, $context, "partials/_nav.html.twig");
        echo "

";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 3) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 3), "isVerified", [], "any", false, false, false, 3) == false))) {
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
        return array (  59 => 12,  56 => 11,  49 => 7,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/_header.html.twig", "C:\\Users\\darkn\\Workspace\\ProjetsTests\\ecommerce\\templates\\partials\\_header.html.twig");
    }
}
