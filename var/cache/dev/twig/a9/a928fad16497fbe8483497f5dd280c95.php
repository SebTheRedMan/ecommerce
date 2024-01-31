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

/* admin/categories/_form.html.twig */
class __TwigTemplate_69b55c88fbb2985536d82380f897151b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["catForm"]) || array_key_exists("catForm", $context) ? $context["catForm"] : (function () { throw new RuntimeError('Variable "catForm" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["catForm"]) || array_key_exists("catForm", $context) ? $context["catForm"] : (function () { throw new RuntimeError('Variable "catForm" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["catForm"]) || array_key_exists("catForm", $context) ? $context["catForm"] : (function () { throw new RuntimeError('Variable "catForm" does not exist.', 3, $this->source); })()), "parent", [], "any", false, false, false, 3), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["catForm"]) || array_key_exists("catForm", $context) ? $context["catForm"] : (function () { throw new RuntimeError('Variable "catForm" does not exist.', 4, $this->source); })()), "categoryOrder", [], "any", false, false, false, 4), 'row');
        echo "

    <button type=\"submit\", class=\"btn btn-primary\">";
        // line 6
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 6, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["catForm"]) || array_key_exists("catForm", $context) ? $context["catForm"] : (function () { throw new RuntimeError('Variable "catForm" does not exist.', 7, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/categories/_form.html.twig";
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
        return array (  64 => 7,  60 => 6,  55 => 4,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(catForm) }}
    {{ form_row(catForm.name) }}
    {{ form_row(catForm.parent) }}
    {{ form_row(catForm.categoryOrder) }}

    <button type=\"submit\", class=\"btn btn-primary\">{{ button_label|default('Ajouter')  }}</button>
{{ form_end(catForm) }}", "admin/categories/_form.html.twig", "C:\\Users\\darkn\\Workspace\\ProjetsTests\\ecommerce\\templates\\admin\\categories\\_form.html.twig");
    }
}
