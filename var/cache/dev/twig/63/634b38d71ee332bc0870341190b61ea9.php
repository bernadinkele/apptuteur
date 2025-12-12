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

/* dashboard/index.html.twig */
class __TwigTemplate_59900888ed50658d77f07ab230b79977 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

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

        yield "Dashboard";
        
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
    <h1 class=\"mb-4\">Dashboard du Tuteur</h1>

    <!-- Barre de navigation / Déconnexion -->
    <nav class=\"mb-4\">
        <form action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        yield "\" method=\"post\" style=\"display:inline;\">
            <button type=\"submit\" class=\"btn btn-danger\">Déconnexion</button>
        </form>
    </nav>

    <!-- Informations personnelles -->
    <div class=\"card mb-4 shadow-sm\">
        <div class=\"card-header\">
            <h2>Informations personnelles</h2>
        </div>
        <div class=\"card-body\">
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\"><strong>Nom :</strong> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuteur"]) || array_key_exists("tuteur", $context) ? $context["tuteur"] : (function () { throw new RuntimeError('Variable "tuteur" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), "html", null, true);
        yield "</li>
                <li class=\"list-group-item\"><strong>Prénom :</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuteur"]) || array_key_exists("tuteur", $context) ? $context["tuteur"] : (function () { throw new RuntimeError('Variable "tuteur" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), "html", null, true);
        yield "</li>
                <li class=\"list-group-item\"><strong>Email :</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuteur"]) || array_key_exists("tuteur", $context) ? $context["tuteur"] : (function () { throw new RuntimeError('Variable "tuteur" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), "html", null, true);
        yield "</li>
                <li class=\"list-group-item\"><strong>Téléphone :</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuteur"]) || array_key_exists("tuteur", $context) ? $context["tuteur"] : (function () { throw new RuntimeError('Variable "tuteur" does not exist.', 26, $this->source); })()), "telephone", [], "any", false, false, false, 26), "html", null, true);
        yield "</li>
                <li class=\"list-group-item\"><strong>Entreprise :</strong> ";
        // line 27
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuteur"]) || array_key_exists("tuteur", $context) ? $context["tuteur"] : (function () { throw new RuntimeError('Variable "tuteur" does not exist.', 27, $this->source); })()), "entreprise", [], "any", false, false, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuteur"]) || array_key_exists("tuteur", $context) ? $context["tuteur"] : (function () { throw new RuntimeError('Variable "tuteur" does not exist.', 27, $this->source); })()), "entreprise", [], "any", false, false, false, 27), "html", null, true)) : ("Non renseignée"));
        yield "</li>
            </ul>
        </div>
    </div>

    <!-- Étudiants suivis -->
    <div class=\"card mb-4 shadow-sm\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h2>Étudiants suivis</h2>
            <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiants_new");
        yield "\" class=\"btn btn-primary btn-sm\">Ajouter un étudiant</a>
        </div>
        <div class=\"card-body\">
            ";
        // line 39
        if ((($tmp = (isset($context["etudiants"]) || array_key_exists("etudiants", $context) ? $context["etudiants"] : (function () { throw new RuntimeError('Variable "etudiants" does not exist.', 39, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "                <table class=\"table table-bordered table-hover\">
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
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["etudiants"]) || array_key_exists("etudiants", $context) ? $context["etudiants"] : (function () { throw new RuntimeError('Variable "etudiants" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
                // line 51
                yield "                            <tr>
                                <td>";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etudiant"], "nom", [], "any", false, false, false, 52), "html", null, true);
                yield "</td>
                                <td>";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etudiant"], "prenom", [], "any", false, false, false, 53), "html", null, true);
                yield "</td>
                                <td>";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etudiant"], "formation", [], "any", false, false, false, 54), "html", null, true);
                yield "</td>
                                <td>
                                    <a href=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visites_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\" class=\"btn btn-info btn-sm\">Voir visites</a>
                                    <a href=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visites_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-sm\">Ajouter visite</a>
                                    <a href=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiants_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['etudiant'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "                    </tbody>
                </table>
            ";
        } else {
            // line 65
            yield "                <p>Aucun étudiant pour le moment.</p>
            ";
        }
        // line 67
        yield "        </div>
    </div>

    <!-- Prochaines visites -->
    <div class=\"card mb-4 shadow-sm\">
        <div class=\"card-header\">
            <h2>Prochaines visites</h2>
        </div>
        <div class=\"card-body\">
            ";
        // line 76
        if ((($tmp = (isset($context["prochainesVisites"]) || array_key_exists("prochainesVisites", $context) ? $context["prochainesVisites"] : (function () { throw new RuntimeError('Variable "prochainesVisites" does not exist.', 76, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "                <table class=\"table table-bordered table-hover\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Date</th>
                            <th>Étudiant</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prochainesVisites"]) || array_key_exists("prochainesVisites", $context) ? $context["prochainesVisites"] : (function () { throw new RuntimeError('Variable "prochainesVisites" does not exist.', 86, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
                // line 87
                yield "                            ";
                $context["statutClass"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "statut", [], "any", false, false, false, 87), "name", [], "any", false, false, false, 87) == "PREVUE")) ? ("text-primary") : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "statut", [], "any", false, false, false, 87), "name", [], "any", false, false, false, 87) == "REALISEE")) ? ("text-success") : ("text-danger"))));
                // line 88
                yield "                            <tr>
                                <td>
                                    ";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "date", [], "any", false, false, false, 90), "l j F Y H:i")), "html", null, true);
                yield "
                                    ";
                // line 92
                yield "                                </td>
                                <td>";
                // line 93
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "etudiant", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "etudiant", [], "any", false, false, false, 93), "nom", [], "any", false, false, false, 93) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "etudiant", [], "any", false, false, false, 93), "prenom", [], "any", false, false, false, 93)), "html", null, true)) : ("Étudiant non assigné"));
                yield "</td>
                                <td class=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statutClass"]) || array_key_exists("statutClass", $context) ? $context["statutClass"] : (function () { throw new RuntimeError('Variable "statutClass" does not exist.', 94, $this->source); })()), "html", null, true);
                yield "\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "statut", [], "any", false, false, false, 94), "name", [], "any", false, false, false, 94)), "html", null, true);
                yield "</strong></td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['visite'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "                    </tbody>
                </table>
            ";
        } else {
            // line 100
            yield "                <p>Aucune visite planifiée.</p>
            ";
        }
        // line 102
        yield "        </div>
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
        return "dashboard/index.html.twig";
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
        return array (  268 => 102,  264 => 100,  259 => 97,  248 => 94,  244 => 93,  241 => 92,  237 => 90,  233 => 88,  230 => 87,  226 => 86,  215 => 77,  213 => 76,  202 => 67,  198 => 65,  193 => 62,  183 => 58,  179 => 57,  175 => 56,  170 => 54,  166 => 53,  162 => 52,  159 => 51,  155 => 50,  143 => 40,  141 => 39,  135 => 36,  123 => 27,  119 => 26,  115 => 25,  111 => 24,  107 => 23,  92 => 11,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <h1 class=\"mb-4\">Dashboard du Tuteur</h1>

    <!-- Barre de navigation / Déconnexion -->
    <nav class=\"mb-4\">
        <form action=\"{{ path('logout') }}\" method=\"post\" style=\"display:inline;\">
            <button type=\"submit\" class=\"btn btn-danger\">Déconnexion</button>
        </form>
    </nav>

    <!-- Informations personnelles -->
    <div class=\"card mb-4 shadow-sm\">
        <div class=\"card-header\">
            <h2>Informations personnelles</h2>
        </div>
        <div class=\"card-body\">
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\"><strong>Nom :</strong> {{ tuteur.nom }}</li>
                <li class=\"list-group-item\"><strong>Prénom :</strong> {{ tuteur.prenom }}</li>
                <li class=\"list-group-item\"><strong>Email :</strong> {{ tuteur.email }}</li>
                <li class=\"list-group-item\"><strong>Téléphone :</strong> {{ tuteur.telephone }}</li>
                <li class=\"list-group-item\"><strong>Entreprise :</strong> {{ tuteur.entreprise ?: 'Non renseignée' }}</li>
            </ul>
        </div>
    </div>

    <!-- Étudiants suivis -->
    <div class=\"card mb-4 shadow-sm\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h2>Étudiants suivis</h2>
            <a href=\"{{ path('etudiants_new') }}\" class=\"btn btn-primary btn-sm\">Ajouter un étudiant</a>
        </div>
        <div class=\"card-body\">
            {% if etudiants %}
                <table class=\"table table-bordered table-hover\">
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
                                    <a href=\"{{ path('visites_new', {'id': etudiant.id}) }}\" class=\"btn btn-success btn-sm\">Ajouter visite</a>
                                    <a href=\"{{ path('etudiants_edit', {'id': etudiant.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% else %}
                <p>Aucun étudiant pour le moment.</p>
            {% endif %}
        </div>
    </div>

    <!-- Prochaines visites -->
    <div class=\"card mb-4 shadow-sm\">
        <div class=\"card-header\">
            <h2>Prochaines visites</h2>
        </div>
        <div class=\"card-body\">
            {% if prochainesVisites %}
                <table class=\"table table-bordered table-hover\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Date</th>
                            <th>Étudiant</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for visite in prochainesVisites %}
                            {% set statutClass = visite.statut.name == 'PREVUE' ? 'text-primary' : visite.statut.name == 'REALISEE' ? 'text-success' : 'text-danger' %}
                            <tr>
                                <td>
                                    {{ visite.date|date('l j F Y H:i')|capitalize }}
                                    {# Exemple : Lundi 11 Décembre 2025 14:30 #}
                                </td>
                                <td>{{ visite.etudiant ? visite.etudiant.nom ~ ' ' ~ visite.etudiant.prenom : 'Étudiant non assigné' }}</td>
                                <td class=\"{{ statutClass }}\"><strong>{{ visite.statut.name|capitalize }}</strong></td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% else %}
                <p>Aucune visite planifiée.</p>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}
", "dashboard/index.html.twig", "/var/www/apptuteur/templates/dashboard/index.html.twig");
    }
}
