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

/* etudiant/update.html.twig */
class __TwigTemplate_24033c6c31a6e9b07b8eff766a937603 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/update.html.twig"));

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

        yield "Modifier un étudiant";
        
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
        yield "<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-primary text-white\">
                    <h3 class=\"mb-0\">Modifier l'étudiant</h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        yield "
                        <div class=\"form-floating mb-3\">
                            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        yield "
                            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'label');
        yield "
                            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'errors');
        yield "
                        </div>

                        <div class=\"form-floating mb-3\">
                            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "prenom", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom"]]);
        yield "
                            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), 'label');
        yield "
                            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'errors');
        yield "
                        </div>

                        <div class=\"form-floating mb-3\">
                            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "formation", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Formation"]]);
        yield "
                            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "formation", [], "any", false, false, false, 29), 'label');
        yield "
                            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "formation", [], "any", false, false, false, 30), 'errors');
        yield "
                        </div>

                        <div class=\"d-grid gap-2\">
                            <button class=\"btn btn-success btn-lg\" type=\"submit\">Enregistrer</button>
                        </div>
                    ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        yield "

                    <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiants_index");
        yield "\" class=\"btn btn-secondary btn-sm mt-3\">Retour à la liste</a>
                </div>
            </div>
        </div>
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
        return "etudiant/update.html.twig";
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
        return array (  152 => 38,  147 => 36,  138 => 30,  134 => 29,  130 => 28,  123 => 24,  119 => 23,  115 => 22,  108 => 18,  104 => 17,  100 => 16,  95 => 14,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier un étudiant{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-primary text-white\">
                    <h3 class=\"mb-0\">Modifier l'étudiant</h3>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form) }}
                        <div class=\"form-floating mb-3\">
                            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom'}}) }}
                            {{ form_label(form.nom) }}
                            {{ form_errors(form.nom) }}
                        </div>

                        <div class=\"form-floating mb-3\">
                            {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Prénom'}}) }}
                            {{ form_label(form.prenom) }}
                            {{ form_errors(form.prenom) }}
                        </div>

                        <div class=\"form-floating mb-3\">
                            {{ form_widget(form.formation, {'attr': {'class': 'form-control', 'placeholder': 'Formation'}}) }}
                            {{ form_label(form.formation) }}
                            {{ form_errors(form.formation) }}
                        </div>

                        <div class=\"d-grid gap-2\">
                            <button class=\"btn btn-success btn-lg\" type=\"submit\">Enregistrer</button>
                        </div>
                    {{ form_end(form) }}

                    <a href=\"{{ path('etudiants_index') }}\" class=\"btn btn-secondary btn-sm mt-3\">Retour à la liste</a>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "etudiant/update.html.twig", "/var/www/apptuteur/templates/etudiant/update.html.twig");
    }
}
