<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* etudiant/index.html.twig */
class __TwigTemplate_5f680e418e3f318926edad18caa47cbb extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste des étudiants";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container mt-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-3\">
        <h1>Étudiants</h1>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiants_new");
        yield "\" class=\"btn btn-success\">Ajouter un étudiant</a>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover align-middle\">
            <thead class=\"table-light\">
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Formation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["etudiants"]) || array_key_exists("etudiants", $context) ? $context["etudiants"] : (function () { throw new RuntimeError('Variable "etudiants" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 24
            yield "                    <tr>
                        <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etudiant"], "nom", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                        <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etudiant"], "prenom", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                        <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etudiant"], "formation", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                        <td>
                            <a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visites_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Voir visites</a>
                            <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visites_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Ajouter visite</a>
                            <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiants_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 34
        if (!$context['_iterated']) {
            // line 35
            yield "                    <tr>
                        <td colspan=\"4\" class=\"text-center\">Aucun étudiant pour le moment.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['etudiant'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "etudiant/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  155 => 39,  146 => 35,  144 => 34,  136 => 31,  132 => 30,  128 => 29,  123 => 27,  119 => 26,  115 => 25,  112 => 24,  107 => 23,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des étudiants{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-3\">
        <h1>Étudiants</h1>
        <a href=\"{{ path('etudiants_new') }}\" class=\"btn btn-success\">Ajouter un étudiant</a>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover align-middle\">
            <thead class=\"table-light\">
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Formation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for etudiant in etudiants %}
                    <tr>
                        <td>{{ etudiant.nom }}</td>
                        <td>{{ etudiant.prenom }}</td>
                        <td>{{ etudiant.formation }}</td>
                        <td>
                            <a href=\"{{ path('visites_index', {'id': etudiant.id}) }}\" class=\"btn btn-info btn-sm\">Voir visites</a>
                            <a href=\"{{ path('visites_new', {'id': etudiant.id}) }}\" class=\"btn btn-primary btn-sm\">Ajouter visite</a>
                            <a href=\"{{ path('etudiants_edit', {'id': etudiant.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\" class=\"text-center\">Aucun étudiant pour le moment.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "etudiant/index.html.twig", "/var/www/apptuteur/templates/etudiant/index.html.twig");
    }
}
