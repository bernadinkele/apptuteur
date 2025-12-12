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

/* visite/index.html.twig */
class __TwigTemplate_c981df2f45880db06cdb657654766668 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visite/index.html.twig"));

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

        yield "Visites de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<h1>Visites de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 6, $this->source); })()), "prenom", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>

<form method=\"get\" class=\"mb-3 d-flex align-items-center gap-2\">
    <label>Filtrer par statut :</label>
    <select name=\"statut\" class=\"form-select\">
        <option value=\"\">Toutes</option>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["prévue", "réalisée", "annulée"]);
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 13
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["s"], "html", null, true);
            yield "\" ";
            if (((isset($context["statutFilter"]) || array_key_exists("statutFilter", $context) ? $context["statutFilter"] : (function () { throw new RuntimeError('Variable "statutFilter" does not exist.', 13, $this->source); })()) == $context["s"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["s"]), "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "    </select>
    <label>Trier :</label>
    <select name=\"order\" class=\"form-select\">
        <option value=\"ASC\" ";
        // line 18
        if (((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()) == "ASC")) {
            yield "selected";
        }
        yield ">Trier ↑</option>
        <option value=\"DESC\" ";
        // line 19
        if (((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 19, $this->source); })()) == "DESC")) {
            yield "selected";
        }
        yield ">Trier ↓</option>
    </select>
    <button class=\"btn btn-primary\">Filtrer</button>
</form>

<a class=\"btn btn-success mb-3\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visites_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
        yield "\">
    Ajouter une visite
</a>

<table class=\"table table-bordered\">
    <thead>
        <tr>
            <th>Date</th>
            <th>Commentaire</th>
            <th>Compte rendu</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["visites"]) || array_key_exists("visites", $context) ? $context["visites"] : (function () { throw new RuntimeError('Variable "visites" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
            // line 40
            yield "        <tr>
            <td>";
            // line 41
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "date", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "date", [], "any", false, false, false, 41), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "</td>
            <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "commentaire", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
            <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "compteRendu", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
            <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "statut", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
            <td>
                <a class=\"btn btn-warning btn-sm\" href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visites_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\">Modifier</a>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        // line 49
        if (!$context['_iterated']) {
            // line 50
            yield "        <tr>
            <td colspan=\"5\">Aucune visite</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['visite'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "    </tbody>
</table>

<a class=\"btn btn-secondary mt-3\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiants_index");
        yield "\">Retour aux étudiants</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "visite/index.html.twig";
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
        return array (  205 => 57,  200 => 54,  191 => 50,  189 => 49,  181 => 46,  176 => 44,  172 => 43,  168 => 42,  164 => 41,  161 => 40,  156 => 39,  138 => 24,  128 => 19,  122 => 18,  117 => 15,  102 => 13,  98 => 12,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Visites de {{ etudiant.nom }}{% endblock %}

{% block body %}
<h1>Visites de {{ etudiant.nom }} {{ etudiant.prenom }}</h1>

<form method=\"get\" class=\"mb-3 d-flex align-items-center gap-2\">
    <label>Filtrer par statut :</label>
    <select name=\"statut\" class=\"form-select\">
        <option value=\"\">Toutes</option>
        {% for s in ['prévue','réalisée','annulée'] %}
            <option value=\"{{ s }}\" {% if statutFilter == s %}selected{% endif %}>{{ s|capitalize }}</option>
        {% endfor %}
    </select>
    <label>Trier :</label>
    <select name=\"order\" class=\"form-select\">
        <option value=\"ASC\" {% if order == 'ASC' %}selected{% endif %}>Trier ↑</option>
        <option value=\"DESC\" {% if order == 'DESC' %}selected{% endif %}>Trier ↓</option>
    </select>
    <button class=\"btn btn-primary\">Filtrer</button>
</form>

<a class=\"btn btn-success mb-3\" href=\"{{ path('visites_new', {'id': etudiant.id}) }}\">
    Ajouter une visite
</a>

<table class=\"table table-bordered\">
    <thead>
        <tr>
            <th>Date</th>
            <th>Commentaire</th>
            <th>Compte rendu</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    {% for visite in visites %}
        <tr>
            <td>{{ visite.date ? visite.date|date('d/m/Y H:i') : '' }}</td>
            <td>{{ visite.commentaire }}</td>
            <td>{{ visite.compteRendu }}</td>
            <td>{{ visite.statut.value }}</td>
            <td>
                <a class=\"btn btn-warning btn-sm\" href=\"{{ path('visites_edit', {'id': visite.id}) }}\">Modifier</a>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"5\">Aucune visite</td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<a class=\"btn btn-secondary mt-3\" href=\"{{ path('etudiants_index') }}\">Retour aux étudiants</a>
{% endblock %}
", "visite/index.html.twig", "/var/www/apptuteur/templates/visite/index.html.twig");
    }
}
