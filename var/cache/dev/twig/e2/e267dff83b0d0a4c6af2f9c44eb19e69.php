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

/* admin/categories/index.html.twig */
class __TwigTemplate_05be975b00011ceb54a4766f6c164041 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/categories/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"row mt-4\">
        <div class=\"col-md-5\">
            <h1 class=\"h3 mb-4\">Ajouter une categorie</h1>
            ";
        // line 7
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categorieForm"]) || array_key_exists("categorieForm", $context) ? $context["categorieForm"] : (function () { throw new RuntimeError('Variable "categorieForm" does not exist.', 7, $this->source); })()), 'form_start');
        yield "
                <div class=\"mb-3\">
                    ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorieForm"]) || array_key_exists("categorieForm", $context) ? $context["categorieForm"] : (function () { throw new RuntimeError('Variable "categorieForm" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), 'row');
        yield "
                </div>
                <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
            ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categorieForm"]) || array_key_exists("categorieForm", $context) ? $context["categorieForm"] : (function () { throw new RuntimeError('Variable "categorieForm" does not exist.', 12, $this->source); })()), 'form_end');
        yield "
        </div>
        <div class=\"col-md-7\">
            <h2 class=\"h4 mb-4\">Liste des categories</h2>
            <table class=\"table table-striped table-bordered align-middle\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Nombre de formations</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 26
            yield "                        <tr>
                            <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                            <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "formations", [], "any", false, false, false, 28)), "html", null, true);
            yield "</td>
                            <td class=\"text-nowrap\">
                                <form method=\"post\" action=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categories.delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" class=\"d-inline-block\" onsubmit=\"return confirm('Supprimer cette categorie ?');\">
                                    <button class=\"btn btn-sm btn-outline-danger\" type=\"submit\">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            yield "                        <tr>
                            <td colspan=\"3\" class=\"text-center\">Aucune categorie.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/categories/index.html.twig";
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
        return array (  138 => 40,  129 => 36,  118 => 30,  113 => 28,  109 => 27,  106 => 26,  101 => 25,  85 => 12,  79 => 9,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/base.html.twig\" %}

{% block body %}
    <div class=\"row mt-4\">
        <div class=\"col-md-5\">
            <h1 class=\"h3 mb-4\">Ajouter une categorie</h1>
            {{ form_start(categorieForm) }}
                <div class=\"mb-3\">
                    {{ form_row(categorieForm.name) }}
                </div>
                <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
            {{ form_end(categorieForm) }}
        </div>
        <div class=\"col-md-7\">
            <h2 class=\"h4 mb-4\">Liste des categories</h2>
            <table class=\"table table-striped table-bordered align-middle\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Nombre de formations</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {% for categorie in categories %}
                        <tr>
                            <td>{{ categorie.name }}</td>
                            <td>{{ categorie.formations|length }}</td>
                            <td class=\"text-nowrap\">
                                <form method=\"post\" action=\"{{ path('admin.categories.delete', {id: categorie.id}) }}\" class=\"d-inline-block\" onsubmit=\"return confirm('Supprimer cette categorie ?');\">
                                    <button class=\"btn btn-sm btn-outline-danger\" type=\"submit\">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"3\" class=\"text-center\">Aucune categorie.</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "admin/categories/index.html.twig", "C:\\wamp64\\www\\MediaTek86_\\templates\\admin\\categories\\index.html.twig");
    }
}
